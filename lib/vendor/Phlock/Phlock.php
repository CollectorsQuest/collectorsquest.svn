<?php

namespace Phlock;

$GLOBALS['THRIFT_ROOT'] = __DIR__ . '/../Thrift';

require_once __DIR__ . '/../Thrift/Thrift.php';
require_once __DIR__ . '/../Thrift/transport/TSocket.php';
require_once __DIR__ . '/../Thrift/transport/TBufferedTransport.php';
require_once __DIR__ . '/../Thrift/protocol/TBinaryProtocol.php';

require_once __DIR__ . '/../Thrift/packages/FlockDB/FlockDB.php';

class Phlock
{
  /** @var array */
  private $servers;

  /** @var array */
  private $graphs;

  /** @var array */
  private $options;

  /** @var \FlockDBClient */
  private $client;

  public function __construct(array $servers, array $options = array())
  {
    $this->servers = $servers;
    $this->graphs = isset($options['graphs']) ? $options['graphs'] : array();
    unset($options['graphs']);
    $this->options = $options;
  }

  /**
   * @return \FlockDBClient
   */
  public function client()
  {
    if (!isset($this->client))
    {
      list($client, $port) = explode(':', $this->servers[0]);

      $socket = new \TSocket($client, $port);
      $protocol = new \TBinaryProtocol($socket);
      $this->client = new \FlockDBClient($protocol);

      $socket->open();
    }

    return $this->client;
  }

  public function add($source_id, $graph, $destination_ids)
  {
    $term = $this->createQueryTerm($source_id, $graph, $destination_ids);
    $this->update(\Flock_ExecuteOperationType::Add, $term);
  }

  public function remove($source_id, $graph, $destination_ids)
  {
    $term = $this->createQueryTerm($source_id, $graph, $destination_ids);
    $this->update(\Flock_ExecuteOperationType::Remove, $term);
  }

  public function archive($source_id, $graph, $destination_ids)
  {
    $term = $this->createQueryTerm($source_id, $graph, $destination_ids);
    $this->update(\Flock_ExecuteOperationType::Archive, $term);
  }

  public function update($method, QueryTerm $term, $priority = \Flock_Priority::High)
  {
    $operations = new ExecuteOperations($this->client());
    $operations->setPriority($priority);
    $operations->addOperation(new ExecuteOperation($method, $term));
    $operations->apply();
  }

  public function contains($source_id, $graph, $destination_id)
  {
    $graph_id = is_int($graph) ? $graph : $this->graphs[$graph];
    return $this->client()->contains($source_id, $graph_id, $destination_id);
  }

  public function size($source_id, $graph, $destination_ids)
  {
    $cursor = $this->select($source_id, $graph, $destination_ids);
    return $cursor->size();
  }

  public function select($source_id, $graph, $destination_ids)
  {
    $term = $this->createQueryTerm($source_id, $graph, $destination_ids);
    return new Cursor($this->client(), $term);
  }

  public function createQueryTerm($source, $graph, $destination)
  {
    $graph_id = is_int($graph) ? $graph : $this->graphs[$graph];
    return new QueryTerm($source, $graph_id, $destination);
  }
}
