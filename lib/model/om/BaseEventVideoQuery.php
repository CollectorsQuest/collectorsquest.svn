<?php


/**
 * Base class that represents a query for the 'event_video' table.
 *
 * 
 *
 * @method     EventVideoQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     EventVideoQuery orderByEventId($order = Criteria::ASC) Order by the event_id column
 * @method     EventVideoQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     EventVideoQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     EventVideoQuery orderByLenght($order = Criteria::ASC) Order by the lenght column
 * @method     EventVideoQuery orderByThumbSmall($order = Criteria::ASC) Order by the thumb_small column
 * @method     EventVideoQuery orderByThumbLarge($order = Criteria::ASC) Order by the thumb_large column
 * @method     EventVideoQuery orderByFilename($order = Criteria::ASC) Order by the filename column
 * @method     EventVideoQuery orderByViews($order = Criteria::ASC) Order by the views column
 * @method     EventVideoQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     EventVideoQuery groupById() Group by the id column
 * @method     EventVideoQuery groupByEventId() Group by the event_id column
 * @method     EventVideoQuery groupByTitle() Group by the title column
 * @method     EventVideoQuery groupByDescription() Group by the description column
 * @method     EventVideoQuery groupByLenght() Group by the lenght column
 * @method     EventVideoQuery groupByThumbSmall() Group by the thumb_small column
 * @method     EventVideoQuery groupByThumbLarge() Group by the thumb_large column
 * @method     EventVideoQuery groupByFilename() Group by the filename column
 * @method     EventVideoQuery groupByViews() Group by the views column
 * @method     EventVideoQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     EventVideoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     EventVideoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     EventVideoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     EventVideoQuery leftJoinEvent($relationAlias = null) Adds a LEFT JOIN clause to the query using the Event relation
 * @method     EventVideoQuery rightJoinEvent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Event relation
 * @method     EventVideoQuery innerJoinEvent($relationAlias = null) Adds a INNER JOIN clause to the query using the Event relation
 *
 * @method     EventVideo findOne(PropelPDO $con = null) Return the first EventVideo matching the query
 * @method     EventVideo findOneOrCreate(PropelPDO $con = null) Return the first EventVideo matching the query, or a new EventVideo object populated from the query conditions when no match is found
 *
 * @method     EventVideo findOneById(int $id) Return the first EventVideo filtered by the id column
 * @method     EventVideo findOneByEventId(int $event_id) Return the first EventVideo filtered by the event_id column
 * @method     EventVideo findOneByTitle(string $title) Return the first EventVideo filtered by the title column
 * @method     EventVideo findOneByDescription(string $description) Return the first EventVideo filtered by the description column
 * @method     EventVideo findOneByLenght(int $lenght) Return the first EventVideo filtered by the lenght column
 * @method     EventVideo findOneByThumbSmall(string $thumb_small) Return the first EventVideo filtered by the thumb_small column
 * @method     EventVideo findOneByThumbLarge(string $thumb_large) Return the first EventVideo filtered by the thumb_large column
 * @method     EventVideo findOneByFilename(string $filename) Return the first EventVideo filtered by the filename column
 * @method     EventVideo findOneByViews(int $views) Return the first EventVideo filtered by the views column
 * @method     EventVideo findOneByCreatedAt(string $created_at) Return the first EventVideo filtered by the created_at column
 *
 * @method     array findById(int $id) Return EventVideo objects filtered by the id column
 * @method     array findByEventId(int $event_id) Return EventVideo objects filtered by the event_id column
 * @method     array findByTitle(string $title) Return EventVideo objects filtered by the title column
 * @method     array findByDescription(string $description) Return EventVideo objects filtered by the description column
 * @method     array findByLenght(int $lenght) Return EventVideo objects filtered by the lenght column
 * @method     array findByThumbSmall(string $thumb_small) Return EventVideo objects filtered by the thumb_small column
 * @method     array findByThumbLarge(string $thumb_large) Return EventVideo objects filtered by the thumb_large column
 * @method     array findByFilename(string $filename) Return EventVideo objects filtered by the filename column
 * @method     array findByViews(int $views) Return EventVideo objects filtered by the views column
 * @method     array findByCreatedAt(string $created_at) Return EventVideo objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseEventVideoQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BaseEventVideoQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'EventVideo', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new EventVideoQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    EventVideoQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof EventVideoQuery)
    {
      return $criteria;
    }
    $query = new EventVideoQuery();
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
   * @return    EventVideo|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = EventVideoPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @return    EventVideoQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(EventVideoPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    EventVideoQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(EventVideoPeer::ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the id column
   * 
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    EventVideoQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(EventVideoPeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the event_id column
   * 
   * @param     int|array $eventId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    EventVideoQuery The current query, for fluid interface
   */
  public function filterByEventId($eventId = null, $comparison = null)
  {
    if (is_array($eventId))
    {
      $useMinMax = false;
      if (isset($eventId['min']))
      {
        $this->addUsingAlias(EventVideoPeer::EVENT_ID, $eventId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($eventId['max']))
      {
        $this->addUsingAlias(EventVideoPeer::EVENT_ID, $eventId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(EventVideoPeer::EVENT_ID, $eventId, $comparison);
  }

  /**
   * Filter the query on the title column
   * 
   * @param     string $title The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    EventVideoQuery The current query, for fluid interface
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
    return $this->addUsingAlias(EventVideoPeer::TITLE, $title, $comparison);
  }

  /**
   * Filter the query on the description column
   * 
   * @param     string $description The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    EventVideoQuery The current query, for fluid interface
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
    return $this->addUsingAlias(EventVideoPeer::DESCRIPTION, $description, $comparison);
  }

  /**
   * Filter the query on the lenght column
   * 
   * @param     int|array $lenght The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    EventVideoQuery The current query, for fluid interface
   */
  public function filterByLenght($lenght = null, $comparison = null)
  {
    if (is_array($lenght))
    {
      $useMinMax = false;
      if (isset($lenght['min']))
      {
        $this->addUsingAlias(EventVideoPeer::LENGHT, $lenght['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($lenght['max']))
      {
        $this->addUsingAlias(EventVideoPeer::LENGHT, $lenght['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(EventVideoPeer::LENGHT, $lenght, $comparison);
  }

  /**
   * Filter the query on the thumb_small column
   * 
   * @param     string $thumbSmall The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    EventVideoQuery The current query, for fluid interface
   */
  public function filterByThumbSmall($thumbSmall = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($thumbSmall))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $thumbSmall))
      {
        $thumbSmall = str_replace('*', '%', $thumbSmall);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(EventVideoPeer::THUMB_SMALL, $thumbSmall, $comparison);
  }

  /**
   * Filter the query on the thumb_large column
   * 
   * @param     string $thumbLarge The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    EventVideoQuery The current query, for fluid interface
   */
  public function filterByThumbLarge($thumbLarge = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($thumbLarge))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $thumbLarge))
      {
        $thumbLarge = str_replace('*', '%', $thumbLarge);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(EventVideoPeer::THUMB_LARGE, $thumbLarge, $comparison);
  }

  /**
   * Filter the query on the filename column
   * 
   * @param     string $filename The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    EventVideoQuery The current query, for fluid interface
   */
  public function filterByFilename($filename = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($filename))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $filename))
      {
        $filename = str_replace('*', '%', $filename);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(EventVideoPeer::FILENAME, $filename, $comparison);
  }

  /**
   * Filter the query on the views column
   * 
   * @param     int|array $views The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    EventVideoQuery The current query, for fluid interface
   */
  public function filterByViews($views = null, $comparison = null)
  {
    if (is_array($views))
    {
      $useMinMax = false;
      if (isset($views['min']))
      {
        $this->addUsingAlias(EventVideoPeer::VIEWS, $views['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($views['max']))
      {
        $this->addUsingAlias(EventVideoPeer::VIEWS, $views['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(EventVideoPeer::VIEWS, $views, $comparison);
  }

  /**
   * Filter the query on the created_at column
   * 
   * @param     string|array $createdAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    EventVideoQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(EventVideoPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(EventVideoPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(EventVideoPeer::CREATED_AT, $createdAt, $comparison);
  }

  /**
   * Filter the query by a related Event object
   *
   * @param     Event $event  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    EventVideoQuery The current query, for fluid interface
   */
  public function filterByEvent($event, $comparison = null)
  {
    return $this
      ->addUsingAlias(EventVideoPeer::EVENT_ID, $event->getId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the Event relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    EventVideoQuery The current query, for fluid interface
   */
  public function joinEvent($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('Event');
    
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
      $this->addJoinObject($join, 'Event');
    }
    
    return $this;
  }

  /**
   * Use the Event relation Event object
   *
   * @see       useQuery()
   * 
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    EventQuery A secondary query class using the current class as primary query
   */
  public function useEventQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    return $this
      ->joinEvent($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'Event', 'EventQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     EventVideo $eventVideo Object to remove from the list of results
   *
   * @return    EventVideoQuery The current query, for fluid interface
   */
  public function prune($eventVideo = null)
  {
    if ($eventVideo)
    {
      $this->addUsingAlias(EventVideoPeer::ID, $eventVideo->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

}
