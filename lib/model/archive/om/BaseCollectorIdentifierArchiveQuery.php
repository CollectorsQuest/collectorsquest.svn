<?php


/**
 * Base class that represents a query for the 'collector_identifier_archive' table.
 *
 * 
 *
 * @method     CollectorIdentifierArchiveQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectorIdentifierArchiveQuery orderByCollectorId($order = Criteria::ASC) Order by the collector_id column
 * @method     CollectorIdentifierArchiveQuery orderByIdentifier($order = Criteria::ASC) Order by the identifier column
 * @method     CollectorIdentifierArchiveQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     CollectorIdentifierArchiveQuery orderByArchivedAt($order = Criteria::ASC) Order by the archived_at column
 *
 * @method     CollectorIdentifierArchiveQuery groupById() Group by the id column
 * @method     CollectorIdentifierArchiveQuery groupByCollectorId() Group by the collector_id column
 * @method     CollectorIdentifierArchiveQuery groupByIdentifier() Group by the identifier column
 * @method     CollectorIdentifierArchiveQuery groupByCreatedAt() Group by the created_at column
 * @method     CollectorIdentifierArchiveQuery groupByArchivedAt() Group by the archived_at column
 *
 * @method     CollectorIdentifierArchiveQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectorIdentifierArchiveQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectorIdentifierArchiveQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectorIdentifierArchive findOne(PropelPDO $con = null) Return the first CollectorIdentifierArchive matching the query
 * @method     CollectorIdentifierArchive findOneOrCreate(PropelPDO $con = null) Return the first CollectorIdentifierArchive matching the query, or a new CollectorIdentifierArchive object populated from the query conditions when no match is found
 *
 * @method     CollectorIdentifierArchive findOneById(int $id) Return the first CollectorIdentifierArchive filtered by the id column
 * @method     CollectorIdentifierArchive findOneByCollectorId(int $collector_id) Return the first CollectorIdentifierArchive filtered by the collector_id column
 * @method     CollectorIdentifierArchive findOneByIdentifier(string $identifier) Return the first CollectorIdentifierArchive filtered by the identifier column
 * @method     CollectorIdentifierArchive findOneByCreatedAt(string $created_at) Return the first CollectorIdentifierArchive filtered by the created_at column
 * @method     CollectorIdentifierArchive findOneByArchivedAt(string $archived_at) Return the first CollectorIdentifierArchive filtered by the archived_at column
 *
 * @method     array findById(int $id) Return CollectorIdentifierArchive objects filtered by the id column
 * @method     array findByCollectorId(int $collector_id) Return CollectorIdentifierArchive objects filtered by the collector_id column
 * @method     array findByIdentifier(string $identifier) Return CollectorIdentifierArchive objects filtered by the identifier column
 * @method     array findByCreatedAt(string $created_at) Return CollectorIdentifierArchive objects filtered by the created_at column
 * @method     array findByArchivedAt(string $archived_at) Return CollectorIdentifierArchive objects filtered by the archived_at column
 *
 * @package    propel.generator.lib.model.archive.om
 */
abstract class BaseCollectorIdentifierArchiveQuery extends ModelCriteria
{
  
  /**
   * Initializes internal state of BaseCollectorIdentifierArchiveQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'archive', $modelName = 'CollectorIdentifierArchive', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new CollectorIdentifierArchiveQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    CollectorIdentifierArchiveQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof CollectorIdentifierArchiveQuery)
    {
      return $criteria;
    }
    $query = new CollectorIdentifierArchiveQuery();
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
   * @return    CollectorIdentifierArchive|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = CollectorIdentifierArchivePeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(CollectorIdentifierArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    CollectorIdentifierArchive A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `ID`, `COLLECTOR_ID`, `IDENTIFIER`, `CREATED_AT`, `ARCHIVED_AT` FROM `collector_identifier_archive` WHERE `ID` = :p0';
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
      $obj = new CollectorIdentifierArchive();
      $obj->hydrate($row);
      CollectorIdentifierArchivePeer::addInstanceToPool($obj, (string) $row[0]);
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
   * @return    CollectorIdentifierArchive|array|mixed the result, formatted by the current formatter
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
   * @return    CollectorIdentifierArchiveQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(CollectorIdentifierArchivePeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    CollectorIdentifierArchiveQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(CollectorIdentifierArchivePeer::ID, $keys, Criteria::IN);
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
   * @return    CollectorIdentifierArchiveQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(CollectorIdentifierArchivePeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the collector_id column
   *
   * Example usage:
   * <code>
   * $query->filterByCollectorId(1234); // WHERE collector_id = 1234
   * $query->filterByCollectorId(array(12, 34)); // WHERE collector_id IN (12, 34)
   * $query->filterByCollectorId(array('min' => 12)); // WHERE collector_id > 12
   * </code>
   *
   * @param     mixed $collectorId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorIdentifierArchiveQuery The current query, for fluid interface
   */
  public function filterByCollectorId($collectorId = null, $comparison = null)
  {
    if (is_array($collectorId))
    {
      $useMinMax = false;
      if (isset($collectorId['min']))
      {
        $this->addUsingAlias(CollectorIdentifierArchivePeer::COLLECTOR_ID, $collectorId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($collectorId['max']))
      {
        $this->addUsingAlias(CollectorIdentifierArchivePeer::COLLECTOR_ID, $collectorId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectorIdentifierArchivePeer::COLLECTOR_ID, $collectorId, $comparison);
  }

  /**
   * Filter the query on the identifier column
   *
   * Example usage:
   * <code>
   * $query->filterByIdentifier('fooValue');   // WHERE identifier = 'fooValue'
   * $query->filterByIdentifier('%fooValue%'); // WHERE identifier LIKE '%fooValue%'
   * </code>
   *
   * @param     string $identifier The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorIdentifierArchiveQuery The current query, for fluid interface
   */
  public function filterByIdentifier($identifier = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($identifier))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $identifier))
      {
        $identifier = str_replace('*', '%', $identifier);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectorIdentifierArchivePeer::IDENTIFIER, $identifier, $comparison);
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
   * @return    CollectorIdentifierArchiveQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(CollectorIdentifierArchivePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(CollectorIdentifierArchivePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectorIdentifierArchivePeer::CREATED_AT, $createdAt, $comparison);
  }

  /**
   * Filter the query on the archived_at column
   *
   * Example usage:
   * <code>
   * $query->filterByArchivedAt('2011-03-14'); // WHERE archived_at = '2011-03-14'
   * $query->filterByArchivedAt('now'); // WHERE archived_at = '2011-03-14'
   * $query->filterByArchivedAt(array('max' => 'yesterday')); // WHERE archived_at > '2011-03-13'
   * </code>
   *
   * @param     mixed $archivedAt The value to use as filter.
   *              Values can be integers (unix timestamps), DateTime objects, or strings.
   *              Empty strings are treated as NULL.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorIdentifierArchiveQuery The current query, for fluid interface
   */
  public function filterByArchivedAt($archivedAt = null, $comparison = null)
  {
    if (is_array($archivedAt))
    {
      $useMinMax = false;
      if (isset($archivedAt['min']))
      {
        $this->addUsingAlias(CollectorIdentifierArchivePeer::ARCHIVED_AT, $archivedAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($archivedAt['max']))
      {
        $this->addUsingAlias(CollectorIdentifierArchivePeer::ARCHIVED_AT, $archivedAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectorIdentifierArchivePeer::ARCHIVED_AT, $archivedAt, $comparison);
  }

  /**
   * Exclude object from result
   *
   * @param     CollectorIdentifierArchive $collectorIdentifierArchive Object to remove from the list of results
   *
   * @return    CollectorIdentifierArchiveQuery The current query, for fluid interface
   */
  public function prune($collectorIdentifierArchive = null)
  {
    if ($collectorIdentifierArchive)
    {
      $this->addUsingAlias(CollectorIdentifierArchivePeer::ID, $collectorIdentifierArchive->getId(), Criteria::NOT_EQUAL);
    }

    return $this;
  }

}