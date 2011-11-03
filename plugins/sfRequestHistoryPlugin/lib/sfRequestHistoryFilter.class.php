<?php
class sfRequestHistoryFilter extends sfFilter
{
  public function execute($filterChain)
  {
    $user = $this->getContext()->getUser();
    $request = $this->getContext()->getRequest();
    
    if( $request->getMethod() == sfRequest::POST )
    {
      $filterChain->execute();
      
      return;
    }

    $requestHistory = $user->getAttribute('request_history', '', 'sfRequestHistoryPlugin');
    $requestHistory = $requestHistory ? $requestHistory:array();
    
    $last = array_pop($requestHistory);
    $current = $request->getUri();
    
    if( $last == $current )
    {
      $filterChain->execute();

      return;
    }
    
    array_push($requestHistory, $last);
    array_push($requestHistory, $current);

    $user->setAttribute('request_history', $requestHistory, 'sfRequestHistoryPlugin');
    $user->setAttribute('current_request_key', (count($requestHistory) - 1), 'sfRequestHistoryPlugin');
    
    $filterChain->execute();
  }
}
