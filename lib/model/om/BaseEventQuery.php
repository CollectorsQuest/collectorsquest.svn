<?php


/**
 * Base class that represents a query for the 'event' table.
 *
 * 
 *
 * @method     EventQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     EventQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     EventQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     EventQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     EventQuery groupById() Group by the id column
 * @method     EventQuery groupByTitle() Group by the title column
 * @method     EventQuery groupByDescription() Group by the description column
 * @method     EventQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     EventQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     EventQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     EventQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     EventQuery leftJoinEventVideo($relationAlias = null) Adds a LEFT JOIN clause to the query using the EventVideo relation
 * @method     EventQuery rightJoinEventVideo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EventVideo relation
 * @method     EventQuery innerJoinEventVideo($relationAlias = null) Adds a INNER JOIN clause to the query using the EventVideo relation
 *
 * @method     Event findOne(PropelPDO $con = null) Return the first Event matching the query
 * @method     Event findOneOrCreate(PropelPDO $con = null) Return the first Event matching the query, or a new Event object populated from the query conditions when no match is found
 *
 * @method     Event findOneById(int $id) Return the first Event filtered by the id column
 * @method     Event findOneByTitle(string $title) Return the first Event filtered by the title column
 * @method     Event findOneByDescription(string $description) Return the first Event filtered by the description column
 * @method     Event findOneByCreatedAt(string $created_at) Return the first Event filtered by the created_at column
 *
 * @method     array findById(int $id) Return Event objects filtered by the id column
 * @method     array findByTitle(string $title) Return Event objects filtered by the title column
 * @method     array findByDescription(string $description) Return Event objects filtered by the description column
 * @method     array findByCreatedAt(string $created_at) Return Event objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseEventQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BaseEventQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'Event', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new EventQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    EventQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof EventQuery)
    {
      return $criteria;
    }
    $query = new EventQuery();
    if (null !== $modelAlias)
    {
      $query->setModelAlias($modelAlias);
    }
    if ($criteria instanceof Criteria)
    {
      $query->mergeWith($criteria);
    }
    return $query;
  }

  /**
   * Find object by primary key
   * Use instance pooling to avoid a database query if the object exists
   * <code>
   * $obj  = $c->findPk(12, $con);
   * </code>
   * @param     mixed $key Primary key to use for the query
   * @param     PropelPDO $con an optional connection object
   *
   * @return    Event|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = EventPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    else
    {
      // the object has not been requested yet, or the formatter is not an object formatter
      $criteria = $this->isKeepQuery() ? clone $this : $this;
      $stmt = $criteria
        ->filterByPrimaryKey($key)
        ->getSelectStatement($con);
      return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }
  }

  /**
   * Find objects by primary key
   * <code>
   * $objs = $c->findPks(array(12, 56, 832), $con);
   * </code>
   * @param     array $keys Primary keys to use for the query
   * @param     PropelPDO $con an optional connection object
   *
   * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
   */
  public function findPks($keys, $con = null)
  {  
    $criteria = $this->isKeepQuery() ? clone $this : $this;
    return $this
      ->filterByPrimaryKeys($keys)
      ->find($con);
  }

  /**
   * Filter the query by primary key
   *
   * @param     mixed $key Primary key to use for the query
   *
   * @return    EventQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(EventPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    EventQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(EventPeer::ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the id column
   * 
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    EventQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(EventPeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the title column
   * 
   * @param     string $title The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    EventQuery The current query, for fluid interface
   */
  public function filterByTitle($title = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($title))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $title))
      {
        $title = str_replace('*', '%', $title);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(EventPeer::TITLE, $title, $comparison);
  }

  /**
   * Filter the query on the description column
   * 
   * @param     string $description The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    EventQuery The current query, for fluid interface
   */
  public function filterByDescription($description = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($description))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $description))
      {
        $description = str_replace('*', '%', $description);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(EventPeer::DESCRIPTION, $description, $comparison);
  }

  /**
   * Filter the query on the created_at column
   * 
   * @param     string|array $createdAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    EventQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(EventPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(EventPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
        $useMinMax = true;
      }
      if ($useMinMax)
      {
        return $this;
      }
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
    }
    return $this->addUsingAlias(EventPeer::CREATED_AT, $createdAt, $comparison);
  }

  /**
   * Filter the query by a related EventVideo object
   *
   * @param     EventVideo $eventVideo  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    EventQuery The current query, for fluid interface
   */
  public function filterByEventVideo($eventVideo, $comparison = null)
  {
    return $this
      ->addUsingAlias(EventPeer::ID, $eventVideo->getEventId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the EventVideo relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    EventQuery The current query, for fluid interface
   */
  public function joinEventVideo($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('EventVideo');
    
    // create a ModelJoin object for this join
    $join = new ModelJoin();
    $join->setJoinType($joinType);
    $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
    if ($previousJoin = $this->getPreviousJoin())
    {
      $join->setPreviousJoin($previousJoin);
    }
    
    // add the ModelJoin to the current object
    if($relationAlias)
    {
      $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
      $this->addJoinObject($join, $relationAlias);
    }
    else
    {
      $this->addJoinObject($join, 'EventVideo');
    }
    
    return $this;
  }

  /**
   * Use the EventVideo relation EventVideo object
   *
   * @see       useQuery()
   * 
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    EventVideoQuery A secondary query class using the current class as primary query
   */
  public function useEventVideoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    return $this
      ->joinEventVideo($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'EventVideo', 'EventVideoQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     Event $event Object to remove from the list of results
   *
   * @return    EventQuery The current query, for fluid interface
   */
  public function prune($event = null)
  {
    if ($event)
    {
      $this->addUsingAlias(EventPeer::ID, $event->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

}
