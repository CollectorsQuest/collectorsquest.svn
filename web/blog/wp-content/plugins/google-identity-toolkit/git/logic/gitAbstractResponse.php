<?php
/**
 * Base class for the responses.
 */

abstract class gitAbstractResponse {
  private $output;
  private $error;
  private $contentType;

  public function getOutput() {
    return $this->output;
  }

  public function setOutput($output, $contentType = 'text/html') {
    $this->output = $output;
    $this->contentType = $contentType;
  }

  public function getContentType() {
    return $this->contentType;
  }

  public function getError() {
    return $this->error;
  }

  public function setError($error) {
    $this->error = $error;
  }
}
