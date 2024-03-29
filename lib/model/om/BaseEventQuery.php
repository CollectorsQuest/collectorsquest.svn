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
   * Find object by primary key.
   * Propel uses the instance pool to skip the database if the object exists.
   * Go fast if the query is untouched.
   *
   * <code>
   * $obj  = $c->findPk(12, $con);
   * </code>
   *
   * @param     mixed $key Primary key to use for the query
   * @param     PropelPDO $con an optional connection object
   *
   * @return    Event|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = EventPeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(EventPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }
    $this->basePreSelect($con);
    if ($this->formatter || $this->modelAlias || $this->with || $this->select
     || $this->selectColumns || $this->asColumns || $this->selectModifiers
     || $this->map || $this->having || $this->joins) {
      return $this->findPkComplex($key, $con);
    }
    else
    {
      return $this->findPkSimple($key, $con);
    }
  }

  /**
   * Find object by primary key using raw SQL to go fast.
   * Bypass doSelect() and the object formatter by using generated code.
   *
   * @param     mixed $key Primary key to use for the query
   * @param     PropelPDO $con A connection object
   *
   * @return    Event A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `ID`, `TITLE`, `DESCRIPTION`, `CREATED_AT` FROM `event` WHERE `ID` = :p0';
    try
    {
      $stmt = $con->prepare($sql);
      $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
      $stmt->execute();
    }
    catch (Exception $e)
    {
      Propel::log($e->getMessage(), Propel::LOG_ERR);
      throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
    }
    $obj = null;
    if ($row = $stmt->fetch(PDO::FETCH_NUM))
    {
      $obj = new Event();
      $obj->hydrate($row);
      EventPeer::addInstanceToPool($obj, (string) $row[0]);
    }
    $stmt->closeCursor();

    return $obj;
  }

  /**
   * Find object by primary key.
   *
   * @param     mixed $key Primary key to use for the query
   * @param     PropelPDO $con A connection object
   *
   * @return    Event|array|mixed the result, formatted by the current formatter
   */
  protected function findPkComplex($key, $con)
  {
    // As the query uses a PK condition, no limit(1) is necessary.
    $criteria = $this->isKeepQuery() ? clone $this : $this;
    $stmt = $criteria
      ->filterByPrimaryKey($key)
      ->doSelect($con);
    return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
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
    if ($con === null)
    {
      $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
    }
    $this->basePreSelect($con);
    $criteria = $this->isKeepQuery() ? clone $this : $this;
    $stmt = $criteria
      ->filterByPrimaryKeys($keys)
      ->doSelect($con);
    return $criteria->getFormatter()->init($criteria)->format($stmt);
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
   * Example usage:
   * <code>
   * $query->filterById(1234); // WHERE id = 1234
   * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
   * $query->filterById(array('min' => 12)); // WHERE id > 12
   * </code>
   *
   * @param     mixed $id The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
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
   * Example usage:
   * <code>
   * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
   * $query->filterByTitle('%fooValue%'); // WHERE title LIKE '%fooValue%'
   * </code>
   *
   * @param     string $title The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
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
   * Example usage:
   * <code>
   * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
   * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
   * </code>
   *
   * @param     string $description The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
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
   * Example usage:
   * <code>
   * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
   * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
   * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
   * </code>
   *
   * @param     mixed $createdAt The value to use as filter.
   *              Values can be integers (unix timestamps), DateTime objects, or strings.
   *              Empty strings are treated as NULL.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
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
    if ($eventVideo instanceof EventVideo)
    {
      return $this
        ->addUsingAlias(EventPeer::ID, $eventVideo->getEventId(), $comparison);
    }
    elseif ($eventVideo instanceof PropelCollection)
    {
      return $this
        ->useEventVideoQuery()
        ->filterByPrimaryKeys($eventVideo->getPrimaryKeys())
        ->endUse();
    }
    else
    {
      throw new PropelException('filterByEventVideo() only accepts arguments of type EventVideo or PropelCollection');
    }
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