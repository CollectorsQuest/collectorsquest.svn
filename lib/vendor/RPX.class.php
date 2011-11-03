<?php
/*
 * USAGE
 *
 * $rpx = new RPX();
 * try {
 *   $result = $rpx->auth_info($token, $current_url);
 * } catch (RPXException $e) {
 *   echo "RPX API Error " . $e->getMessage();
 * }
 *
 */
class RPXException extends Exception {}
class RPX
{
  private $api_key;
  private $base_url;
  private $format;

  public $providerName;
  public $identifier;
  public $primaryKey;

  public $displayName;
  public $email;
  public $emailVerified;
  public $preferredUsername;
  public $gender;
  public $birthdate;
  public $photo;
  public $url;

  public function  __construct()
  {
    $this->api_key = "0a04a73fb8c1c7c8037e9245bef7c9fa0cc16c12";
    $this->base_url = "https://rpxnow.com/api/v2/";
    $this->format = "xml";
  }

  /*
   * Performs the 'auth_info' API call to retrieve information about
   * an OpenID authentication response.  You'll need to inspect the
   * resulting DOMDocument to get information about the response.
   * See the API documentation for details.
   *
   * https://rpxnow.com/docs
   */
  public function auth_info($token, $current_url=null)
  {
    $args = array("token" => $token);
    if ($current_url !== null) {
      $args['currentUrl'] = $current_url;
    }
    $info = $this->apiCall("auth_info", $args);

    // extract info into object
    $this->providerName = $info->getElementsByTagName("providerName")->item(0);
    $this->identifier = $info->getElementsByTagName("identifier")->item(0)->nodeValue;
    $this->primaryKey = @$info->getElementsByTagName("primaryKey")->item(0)->nodeValue;
    $this->displayName = @$info->getElementsByTagName("displayName")->item(0)->nodeValue;
    $this->preferredUsername = $info->getElementsByTagName("preferredUsername")->item(0)->nodeValue;
    $this->gender = @strtolower($info->getElementsByTagName("gender")->item(0)->nodeValue);
    $this->birthdate = @$info->getElementsByTagName("birthday")->item(0)->nodeValue;
    $this->email = $info->getElementsByTagName("email")->item(0)->nodeValue;
    $this->emailVerified = $info->getElementsByTagName("verifiedEmail")->item(0)->nodeValue;
    $this->url = @$info->getElementsByTagName("url")->item(0)->nodeValue;
    $this->photo = @$info->getElementsByTagName("photo")->item(0)->nodeValue;
  }

  /*
   * Returns an array of identifier mappings for the specified
   * primary key.
   */
  public function mappings($primary_key)
  {
    $doc = $this->apiCall("mappings", array("primaryKey" => $primary_key));
    $identifiers = array();
    $xpath = new DOMXPath($doc);

    $nodes = $xpath->query("/rsp/identifiers/identifier");
    foreach ($nodes as $identifier_node)
    {
      $identifiers[] = $identifier_node->textContent;
    }

    return $identifiers;
  }
  /*
   * Returns a hash of primary key -> array(identifier) of
   * all identifier mappings for this application.
   */
  public function all_mappings()
  {
    $doc = $this->apiCall("all_mappings", array());
    $mappings = array();
    $xpath = new DOMXPath($doc);

    $mapping_nodes = $xpath->query("/rsp/mappings/mapping");
    foreach ($mapping_nodes as $mapping_node)
    {
      // Get the primaryKey element
      $pk_node = $mapping_node->childNodes->item(0);
      // Get the identifier elements
      $identifier_nodes = $xpath->query("identifiers/identifier", $mapping_node);
      $mappings[$pk_node->textContent] = array();
      foreach ($identifier_nodes as $id_node)
      {
        $mappings[$pk_node->textContent][] = $id_node->textContent;
      }
    }

    return $mappings;
  }

  /*
   * Maps identifier to a primary key from your application.
   * Returns null if successful, throws exception otherwise.
   */
  public function map($identifier, $primary_key)
  {
    $this->apiCall("map", array("primaryKey" => $primary_key, "identifier" => $identifier));
  }

  /*
   * Removes a mapping for an identifier and primary key.  Returns
   * null.
   */
  public function unmap($identifier, $primary_key)
  {
    $this->apiCall("unmap", array(
      "primaryKey" => $primary_key,
      "identifier" => $identifier));
  }

  /*
   * Performs an API call using the specified name and arguments
   * array.  Automatically adds your API key to the request and
   * requests an XML response.  Returns a DOMDocument or raises
   * RPXException.
   */
  private function apiCall($method_name, $partial_query)
  {
    $partial_query["format"] = $this->format;
    $partial_query["apiKey"] = $this->api_key;
    $query_str = "";

    foreach ($partial_query as $k => $v)
    {
      if (strlen($query_str) > 0) {
        $query_str .= "&";
      }
      $query_str .= urlencode($k);
      $query_str .= "=";
      $query_str .= urlencode($v);
    }

    $url = $this->base_url . $method_name;
    $response_body = $this->_post($url, $query_str);
    $api_response = $this->_parse($response_body);
    $status = $this->_getMessageStatus($api_response);

    if ($status != 'ok')
    {
      throw new RPXException(
        sprintf("API status was not 'ok', got '%s' instead", $status));
    }

    return $api_response;
  }

  private function _getMessageStatus($parsed_response)
  {
    $root = $parsed_response->childNodes->item(0);
    $node = $root->attributes->getNamedItem('stat');
    return $node->value;
  }

  private function _resetPostData()
  {
    $this->response_data = "";
  }

  private function _writeResponseData($curl_handle, $raw)
  {
    $this->response_data .= $raw;

    return strlen($raw);
  }

  private function _post($url, $post_data)
  {
    $this->_resetPostData();

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_WRITEFUNCTION, array(&$this, "_writeResponseData"));
    curl_exec($curl);

    $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);

    if (!$code)
    {
      throw new RPXException(sprintf("Error performing HTTP request: %s", curl_error($curl)));
    }
    $response_body = $this->response_data;
    $this->_resetPostData();
    
    return $response_body;
  }

  private function _parse($raw)
  {
    $doc = new DOMDocument;
    if (!$doc->loadXML($raw))
    {
      throw new RPXException("Error parsing XML response");
    }

    return $doc;
  }
}
