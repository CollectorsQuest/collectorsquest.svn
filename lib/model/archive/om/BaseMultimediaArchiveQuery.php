<?php


/**
 * Base class that represents a query for the 'multimedia_archive' table.
 *
 * 
 *
 * @method     MultimediaArchiveQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     MultimediaArchiveQuery orderByModel($order = Criteria::ASC) Order by the model column
 * @method     MultimediaArchiveQuery orderByModelId($order = Criteria::ASC) Order by the model_id column
 * @method     MultimediaArchiveQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     MultimediaArchiveQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     MultimediaArchiveQuery orderByMd5($order = Criteria::ASC) Order by the md5 column
 * @method     MultimediaArchiveQuery orderByColors($order = Criteria::ASC) Order by the colors column
 * @method     MultimediaArchiveQuery orderByOrientation($order = Criteria::ASC) Order by the orientation column
 * @method     MultimediaArchiveQuery orderBySource($order = Criteria::ASC) Order by the source column
 * @method     MultimediaArchiveQuery orderByIsPrimary($order = Criteria::ASC) Order by the is_primary column
 * @method     MultimediaArchiveQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     MultimediaArchiveQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     MultimediaArchiveQuery orderByArchivedAt($order = Criteria::ASC) Order by the archived_at column
 *
 * @method     MultimediaArchiveQuery groupById() Group by the id column
 * @method     MultimediaArchiveQuery groupByModel() Group by the model column
 * @method     MultimediaArchiveQuery groupByModelId() Group by the model_id column
 * @method     MultimediaArchiveQuery groupByType() Group by the type column
 * @method     MultimediaArchiveQuery groupByName() Group by the name column
 * @method     MultimediaArchiveQuery groupByMd5() Group by the md5 column
 * @method     MultimediaArchiveQuery groupByColors() Group by the colors column
 * @method     MultimediaArchiveQuery groupByOrientation() Group by the orientation column
 * @method     MultimediaArchiveQuery groupBySource() Group by the source column
 * @method     MultimediaArchiveQuery groupByIsPrimary() Group by the is_primary column
 * @method     MultimediaArchiveQuery groupByUpdatedAt() Group by the updated_at column
 * @method     MultimediaArchiveQuery groupByCreatedAt() Group by the created_at column
 * @method     MultimediaArchiveQuery groupByArchivedAt() Group by the archived_at column
 *
 * @method     MultimediaArchiveQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     MultimediaArchiveQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     MultimediaArchiveQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     MultimediaArchive findOne(PropelPDO $con = null) Return the first MultimediaArchive matching the query
 * @method     MultimediaArchive findOneOrCreate(PropelPDO $con = null) Return the first MultimediaArchive matching the query, or a new MultimediaArchive object populated from the query conditions when no match is found
 *
 * @method     MultimediaArchive findOneById(int $id) Return the first MultimediaArchive filtered by the id column
 * @method     MultimediaArchive findOneByModel(string $model) Return the first MultimediaArchive filtered by the model column
 * @method     MultimediaArchive findOneByModelId(int $model_id) Return the first MultimediaArchive filtered by the model_id column
 * @method     MultimediaArchive findOneByType(string $type) Return the first MultimediaArchive filtered by the type column
 * @method     MultimediaArchive findOneByName(string $name) Return the first MultimediaArchive filtered by the name column
 * @method     MultimediaArchive findOneByMd5(string $md5) Return the first MultimediaArchive filtered by the md5 column
 * @method     MultimediaArchive findOneByColors(string $colors) Return the first MultimediaArchive filtered by the colors column
 * @method     MultimediaArchive findOneByOrientation(string $orientation) Return the first MultimediaArchive filtered by the orientation column
 * @method     MultimediaArchive findOneBySource(string $source) Return the first MultimediaArchive filtered by the source column
 * @method     MultimediaArchive findOneByIsPrimary(boolean $is_primary) Return the first MultimediaArchive filtered by the is_primary column
 * @method     MultimediaArchive findOneByUpdatedAt(string $updated_at) Return the first MultimediaArchive filtered by the updated_at column
 * @method     MultimediaArchive findOneByCreatedAt(string $created_at) Return the first MultimediaArchive filtered by the created_at column
 * @method     MultimediaArchive findOneByArchivedAt(string $archived_at) Return the first MultimediaArchive filtered by the archived_at column
 *
 * @method     array findById(int $id) Return MultimediaArchive objects filtered by the id column
 * @method     array findByModel(string $model) Return MultimediaArchive objects filtered by the model column
 * @method     array findByModelId(int $model_id) Return MultimediaArchive objects filtered by the model_id column
 * @method     array findByType(string $type) Return MultimediaArchive objects filtered by the type column
 * @method     array findByName(string $name) Return MultimediaArchive objects filtered by the name column
 * @method     array findByMd5(string $md5) Return MultimediaArchive objects filtered by the md5 column
 * @method     array findByColors(string $colors) Return MultimediaArchive objects filtered by the colors column
 * @method     array findByOrientation(string $orientation) Return MultimediaArchive objects filtered by the orientation column
 * @method     array findBySource(string $source) Return MultimediaArchive objects filtered by the source column
 * @method     array findByIsPrimary(boolean $is_primary) Return MultimediaArchive objects filtered by the is_primary column
 * @method     array findByUpdatedAt(string $updated_at) Return MultimediaArchive objects filtered by the updated_at column
 * @method     array findByCreatedAt(string $created_at) Return MultimediaArchive objects filtered by the created_at column
 * @method     array findByArchivedAt(string $archived_at) Return MultimediaArchive objects filtered by the archived_at column
 *
 * @package    propel.generator.lib.model.archive.om
 */
abstract class BaseMultimediaArchiveQuery extends ModelCriteria
{
  
  /**
   * Initializes internal state of BaseMultimediaArchiveQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'archive', $modelName = 'MultimediaArchive', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new MultimediaArchiveQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    MultimediaArchiveQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof MultimediaArchiveQuery)
    {
      return $criteria;
    }
    $query = new MultimediaArchiveQuery();
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
   * @return    MultimediaArchive|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = MultimediaArchivePeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(MultimediaArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    MultimediaArchive A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `ID`, `MODEL`, `MODEL_ID`, `TYPE`, `NAME`, `MD5`, `COLORS`, `ORIENTATION`, `SOURCE`, `IS_PRIMARY`, `UPDATED_AT`, `CREATED_AT`, `ARCHIVED_AT` FROM `multimedia_archive` WHERE `ID` = :p0';
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
      $obj = new MultimediaArchive();
      $obj->hydrate($row);
      MultimediaArchivePeer::addInstanceToPool($obj, (string) $row[0]);
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
   * @return    MultimediaArchive|array|mixed the result, formatted by the current formatter
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
   * @return    MultimediaArchiveQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(MultimediaArchivePeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    MultimediaArchiveQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(MultimediaArchivePeer::ID, $keys, Criteria::IN);
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
   * @return    MultimediaArchiveQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(MultimediaArchivePeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the model column
   *
   * Example usage:
   * <code>
   * $query->filterByModel('fooValue');   // WHERE model = 'fooValue'
   * $query->filterByModel('%fooValue%'); // WHERE model LIKE '%fooValue%'
   * </code>
   *
   * @param     string $model The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    MultimediaArchiveQuery The current query, for fluid interface
   */
  public function filterByModel($model = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($model))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $model))
      {
        $model = str_replace('*', '%', $model);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(MultimediaArchivePeer::MODEL, $model, $comparison);
  }

  /**
   * Filter the query on the model_id column
   *
   * Example usage:
   * <code>
   * $query->filterByModelId(1234); // WHERE model_id = 1234
   * $query->filterByModelId(array(12, 34)); // WHERE model_id IN (12, 34)
   * $query->filterByModelId(array('min' => 12)); // WHERE model_id > 12
   * </code>
   *
   * @param     mixed $modelId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    MultimediaArchiveQuery The current query, for fluid interface
   */
  public function filterByModelId($modelId = null, $comparison = null)
  {
    if (is_array($modelId))
    {
      $useMinMax = false;
      if (isset($modelId['min']))
      {
        $this->addUsingAlias(MultimediaArchivePeer::MODEL_ID, $modelId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($modelId['max']))
      {
        $this->addUsingAlias(MultimediaArchivePeer::MODEL_ID, $modelId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(MultimediaArchivePeer::MODEL_ID, $modelId, $comparison);
  }

  /**
   * Filter the query on the type column
   *
   * Example usage:
   * <code>
   * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
   * $query->filterByType('%fooValue%'); // WHERE type LIKE '%fooValue%'
   * </code>
   *
   * @param     string $type The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    MultimediaArchiveQuery The current query, for fluid interface
   */
  public function filterByType($type = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($type))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $type))
      {
        $type = str_replace('*', '%', $type);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(MultimediaArchivePeer::TYPE, $type, $comparison);
  }

  /**
   * Filter the query on the name column
   *
   * Example usage:
   * <code>
   * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
   * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
   * </code>
   *
   * @param     string $name The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    MultimediaArchiveQuery The current query, for fluid interface
   */
  public function filterByName($name = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($name))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $name))
      {
        $name = str_replace('*', '%', $name);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(MultimediaArchivePeer::NAME, $name, $comparison);
  }

  /**
   * Filter the query on the md5 column
   *
   * Example usage:
   * <code>
   * $query->filterByMd5('fooValue');   // WHERE md5 = 'fooValue'
   * $query->filterByMd5('%fooValue%'); // WHERE md5 LIKE '%fooValue%'
   * </code>
   *
   * @param     string $md5 The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    MultimediaArchiveQuery The current query, for fluid interface
   */
  public function filterByMd5($md5 = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($md5))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $md5))
      {
        $md5 = str_replace('*', '%', $md5);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(MultimediaArchivePeer::MD5, $md5, $comparison);
  }

  /**
   * Filter the query on the colors column
   *
   * Example usage:
   * <code>
   * $query->filterByColors('fooValue');   // WHERE colors = 'fooValue'
   * $query->filterByColors('%fooValue%'); // WHERE colors LIKE '%fooValue%'
   * </code>
   *
   * @param     string $colors The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    MultimediaArchiveQuery The current query, for fluid interface
   */
  public function filterByColors($colors = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($colors))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $colors))
      {
        $colors = str_replace('*', '%', $colors);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(MultimediaArchivePeer::COLORS, $colors, $comparison);
  }

  /**
   * Filter the query on the orientation column
   *
   * Example usage:
   * <code>
   * $query->filterByOrientation('fooValue');   // WHERE orientation = 'fooValue'
   * $query->filterByOrientation('%fooValue%'); // WHERE orientation LIKE '%fooValue%'
   * </code>
   *
   * @param     string $orientation The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    MultimediaArchiveQuery The current query, for fluid interface
   */
  public function filterByOrientation($orientation = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($orientation))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $orientation))
      {
        $orientation = str_replace('*', '%', $orientation);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(MultimediaArchivePeer::ORIENTATION, $orientation, $comparison);
  }

  /**
   * Filter the query on the source column
   *
   * Example usage:
   * <code>
   * $query->filterBySource('fooValue');   // WHERE source = 'fooValue'
   * $query->filterBySource('%fooValue%'); // WHERE source LIKE '%fooValue%'
   * </code>
   *
   * @param     string $source The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    MultimediaArchiveQuery The current query, for fluid interface
   */
  public function filterBySource($source = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($source))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $source))
      {
        $source = str_replace('*', '%', $source);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(MultimediaArchivePeer::SOURCE, $source, $comparison);
  }

  /**
   * Filter the query on the is_primary column
   *
   * Example usage:
   * <code>
   * $query->filterByIsPrimary(true); // WHERE is_primary = true
   * $query->filterByIsPrimary('yes'); // WHERE is_primary = true
   * </code>
   *
   * @param     boolean|string $isPrimary The value to use as filter.
   *              Non-boolean arguments are converted using the following rules:
   *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    MultimediaArchiveQuery The current query, for fluid interface
   */
  public function filterByIsPrimary($isPrimary = null, $comparison = null)
  {
    if (is_string($isPrimary))
    {
      $is_primary = in_array(strtolower($isPrimary), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
    }
    return $this->addUsingAlias(MultimediaArchivePeer::IS_PRIMARY, $isPrimary, $comparison);
  }

  /**
   * Filter the query on the updated_at column
   *
   * Example usage:
   * <code>
   * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
   * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
   * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
   * </code>
   *
   * @param     mixed $updatedAt The value to use as filter.
   *              Values can be integers (unix timestamps), DateTime objects, or strings.
   *              Empty strings are treated as NULL.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    MultimediaArchiveQuery The current query, for fluid interface
   */
  public function filterByUpdatedAt($updatedAt = null, $comparison = null)
  {
    if (is_array($updatedAt))
    {
      $useMinMax = false;
      if (isset($updatedAt['min']))
      {
        $this->addUsingAlias(MultimediaArchivePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($updatedAt['max']))
      {
        $this->addUsingAlias(MultimediaArchivePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(MultimediaArchivePeer::UPDATED_AT, $updatedAt, $comparison);
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
   * @return    MultimediaArchiveQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(MultimediaArchivePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(MultimediaArchivePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(MultimediaArchivePeer::CREATED_AT, $createdAt, $comparison);
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
   * @return    MultimediaArchiveQuery The current query, for fluid interface
   */
  public function filterByArchivedAt($archivedAt = null, $comparison = null)
  {
    if (is_array($archivedAt))
    {
      $useMinMax = false;
      if (isset($archivedAt['min']))
      {
        $this->addUsingAlias(MultimediaArchivePeer::ARCHIVED_AT, $archivedAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($archivedAt['max']))
      {
        $this->addUsingAlias(MultimediaArchivePeer::ARCHIVED_AT, $archivedAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(MultimediaArchivePeer::ARCHIVED_AT, $archivedAt, $comparison);
  }

  /**
   * Exclude object from result
   *
   * @param     MultimediaArchive $multimediaArchive Object to remove from the list of results
   *
   * @return    MultimediaArchiveQuery The current query, for fluid interface
   */
  public function prune($multimediaArchive = null)
  {
    if ($multimediaArchive)
    {
      $this->addUsingAlias(MultimediaArchivePeer::ID, $multimediaArchive->getId(), Criteria::NOT_EQUAL);
    }

    return $this;
  }

}