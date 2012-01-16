<?php

namespace Phlock;

class ExecuteOperation
{
  private $method;
  private $term;

  public function __construct($method, QueryTerm $term)
  {
    $this->method = $method;
    $this->term = $term;
  }

  public function toThrift()
  {
    $thrift = new \Flock_ExecuteOperation(array(
      'operation_type' => $this->method,
      'term' => $this->term->toThrift()
    ));

    return $thrift;
  }
}
