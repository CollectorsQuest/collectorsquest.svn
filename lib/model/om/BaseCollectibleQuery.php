<?php


/**
 * Base class that represents a query for the 'collectible' table.
 *
 * 
 *
 * @method     CollectibleQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectibleQuery orderByGraphId($order = Criteria::ASC) Order by the graph_id column
 * @method     CollectibleQuery orderByCollectorId($order = Criteria::ASC) Order by the collector_id column
 * @method     CollectibleQuery orderByCollectionId($order = Criteria::ASC) Order by the collection_id column
 * @method     CollectibleQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     CollectibleQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     CollectibleQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     CollectibleQuery orderByNumComments($order = Criteria::ASC) Order by the num_comments column
 * @method     CollectibleQuery orderByScore($order = Criteria::ASC) Order by the score column
 * @method     CollectibleQuery orderByPosition($order = Criteria::ASC) Order by the position column
 * @method     CollectibleQuery orderByIsNameAutomatic($order = Criteria::ASC) Order by the is_name_automatic column
 * @method     CollectibleQuery orderByEblob($order = Criteria::ASC) Order by the eblob column
 * @method     CollectibleQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     CollectibleQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     CollectibleQuery groupById() Group by the id column
 * @method     CollectibleQuery groupByGraphId() Group by the graph_id column
 * @method     CollectibleQuery groupByCollectorId() Group by the collector_id column
 * @method     CollectibleQuery groupByCollectionId() Group by the collection_id column
 * @method     CollectibleQuery groupByName() Group by the name column
 * @method     CollectibleQuery groupBySlug() Group by the slug column
 * @method     CollectibleQuery groupByDescription() Group by the description column
 * @method     CollectibleQuery groupByNumComments() Group by the num_comments column
 * @method     CollectibleQuery groupByScore() Group by the score column
 * @method     CollectibleQuery groupByPosition() Group by the position column
 * @method     CollectibleQuery groupByIsNameAutomatic() Group by the is_name_automatic column
 * @method     CollectibleQuery groupByEblob() Group by the eblob column
 * @method     CollectibleQuery groupByCreatedAt() Group by the created_at column
 * @method     CollectibleQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     CollectibleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectibleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectibleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectibleQuery leftJoinCollector($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collector relation
 * @method     CollectibleQuery rightJoinCollector($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collector relation
 * @method     CollectibleQuery innerJoinCollector($relationAlias = null) Adds a INNER JOIN clause to the query using the Collector relation
 *
 * @method     CollectibleQuery leftJoinCollection($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collection relation
 * @method     CollectibleQuery rightJoinCollection($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collection relation
 * @method     CollectibleQuery innerJoinCollection($relationAlias = null) Adds a INNER JOIN clause to the query using the Collection relation
 *
 * @method     CollectibleQuery leftJoinCollectibleForSale($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectibleForSale relation
 * @method     CollectibleQuery rightJoinCollectibleForSale($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectibleForSale relation
 * @method     CollectibleQuery innerJoinCollectibleForSale($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectibleForSale relation
 *
 * @method     CollectibleQuery leftJoinCollectibleOffer($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectibleOffer relation
 * @method     CollectibleQuery rightJoinCollectibleOffer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectibleOffer relation
 * @method     CollectibleQuery innerJoinCollectibleOffer($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectibleOffer relation
 *
 * @method     CollectibleQuery leftJoinComment($relationAlias = null) Adds a LEFT JOIN clause to the query using the Comment relation
 * @method     CollectibleQuery rightJoinComment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Comment relation
 * @method     CollectibleQuery innerJoinComment($relationAlias = null) Adds a INNER JOIN clause to the query using the Comment relation
 *
 * @method     CollectibleQuery leftJoinCustomValue($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomValue relation
 * @method     CollectibleQuery rightJoinCustomValue($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomValue relation
 * @method     CollectibleQuery innerJoinCustomValue($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomValue relation
 *
 * @method     Collectible findOne(PropelPDO $con = null) Return the first Collectible matching the query
 * @method     Collectible findOneOrCreate(PropelPDO $con = null) Return the first Collectible matching the query, or a new Collectible object populated from the query conditions when no match is found
 *
 * @method     Collectible findOneById(int $id) Return the first Collectible filtered by the id column
 * @method     Collectible findOneByGraphId(int $graph_id) Return the first Collectible filtered by the graph_id column
 * @method     Collectible findOneByCollectorId(int $collector_id) Return the first Collectible filtered by the collector_id column
 * @method     Collectible findOneByCollectionId(int $collection_id) Return the first Collectible filtered by the collection_id column
 * @method     Collectible findOneByName(string $name) Return the first Collectible filtered by the name column
 * @method     Collectible findOneBySlug(string $slug) Return the first Collectible filtered by the slug column
 * @method     Collectible findOneByDescription(string $description) Return the first Collectible filtered by the description column
 * @method     Collectible findOneByNumComments(int $num_comments) Return the first Collectible filtered by the num_comments column
 * @method     Collectible findOneByScore(int $score) Return the first Collectible filtered by the score column
 * @method     Collectible findOneByPosition(int $position) Return the first Collectible filtered by the position column
 * @method     Collectible findOneByIsNameAutomatic(boolean $is_name_automatic) Return the first Collectible filtered by the is_name_automatic column
 * @method     Collectible findOneByEblob(string $eblob) Return the first Collectible filtered by the eblob column
 * @method     Collectible findOneByCreatedAt(string $created_at) Return the first Collectible filtered by the created_at column
 * @method     Collectible findOneByUpdatedAt(string $updated_at) Return the first Collectible filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Collectible objects filtered by the id column
 * @method     array findByGraphId(int $graph_id) Return Collectible objects filtered by the graph_id column
 * @method     array findByCollectorId(int $collector_id) Return Collectible objects filtered by the collector_id column
 * @method     array findByCollectionId(int $collection_id) Return Collectible objects filtered by the collection_id column
 * @method     array findByName(string $name) Return Collectible objects filtered by the name column
 * @method     array findBySlug(string $slug) Return Collectible objects filtered by the slug column
 * @method     array findByDescription(string $description) Return Collectible objects filtered by the description column
 * @method     array findByNumComments(int $num_comments) Return Collectible objects filtered by the num_comments column
 * @method     array findByScore(int $score) Return Collectible objects filtered by the score column
 * @method     array findByPosition(int $position) Return Collectible objects filtered by the position column
 * @method     array findByIsNameAutomatic(boolean $is_name_automatic) Return Collectible objects filtered by the is_name_automatic column
 * @method     array findByEblob(string $eblob) Return Collectible objects filtered by the eblob column
 * @method     array findByCreatedAt(string $created_at) Return Collectible objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Collectible objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectibleQuery extends ModelCriteria
{
  
  // archivable behavior
  protected $archiveOnDelete = true;

  /**
   * Initializes internal state of BaseCollectibleQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'Collectible', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new CollectibleQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    CollectibleQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof CollectibleQuery)
    {
      return $criteria;
    }
    $query = new CollectibleQuery();
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
   * @return    Collectible|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = CollectiblePeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(CollectiblePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    Collectible A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `ID`, `GRAPH_ID`, `COLLECTOR_ID`, `COLLECTION_ID`, `NAME`, `SLUG`, `DESCRIPTION`, `NUM_COMMENTS`, `SCORE`, `POSITION`, `IS_NAME_AUTOMATIC`, `EBLOB`, `CREATED_AT`, `UPDATED_AT` FROM `collectible` WHERE `ID` = :p0';
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
      $obj = new Collectible();
      $obj->hydrate($row);
      CollectiblePeer::addInstanceToPool($obj, (string) $row[0]);
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
   * @return    Collectible|array|mixed the result, formatted by the current formatter
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
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(CollectiblePeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(CollectiblePeer::ID, $keys, Criteria::IN);
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
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(CollectiblePeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the graph_id column
   *
   * Example usage:
   * <code>
   * $query->filterByGraphId(1234); // WHERE graph_id = 1234
   * $query->filterByGraphId(array(12, 34)); // WHERE graph_id IN (12, 34)
   * $query->filterByGraphId(array('min' => 12)); // WHERE graph_id > 12
   * </code>
   *
   * @param     mixed $graphId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function filterByGraphId($graphId = null, $comparison = null)
  {
    if (is_array($graphId))
    {
      $useMinMax = false;
      if (isset($graphId['min']))
      {
        $this->addUsingAlias(CollectiblePeer::GRAPH_ID, $graphId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($graphId['max']))
      {
        $this->addUsingAlias(CollectiblePeer::GRAPH_ID, $graphId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectiblePeer::GRAPH_ID, $graphId, $comparison);
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
   * @see       filterByCollector()
   *
   * @param     mixed $collectorId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function filterByCollectorId($collectorId = null, $comparison = null)
  {
    if (is_array($collectorId))
    {
      $useMinMax = false;
      if (isset($collectorId['min']))
      {
        $this->addUsingAlias(CollectiblePeer::COLLECTOR_ID, $collectorId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($collectorId['max']))
      {
        $this->addUsingAlias(CollectiblePeer::COLLECTOR_ID, $collectorId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectiblePeer::COLLECTOR_ID, $collectorId, $comparison);
  }

  /**
   * Filter the query on the collection_id column
   *
   * Example usage:
   * <code>
   * $query->filterByCollectionId(1234); // WHERE collection_id = 1234
   * $query->filterByCollectionId(array(12, 34)); // WHERE collection_id IN (12, 34)
   * $query->filterByCollectionId(array('min' => 12)); // WHERE collection_id > 12
   * </code>
   *
   * @see       filterByCollection()
   *
   * @param     mixed $collectionId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function filterByCollectionId($collectionId = null, $comparison = null)
  {
    if (is_array($collectionId))
    {
      $useMinMax = false;
      if (isset($collectionId['min']))
      {
        $this->addUsingAlias(CollectiblePeer::COLLECTION_ID, $collectionId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($collectionId['max']))
      {
        $this->addUsingAlias(CollectiblePeer::COLLECTION_ID, $collectionId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectiblePeer::COLLECTION_ID, $collectionId, $comparison);
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
   * @return    CollectibleQuery The current query, for fluid interface
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
    return $this->addUsingAlias(CollectiblePeer::NAME, $name, $comparison);
  }

  /**
   * Filter the query on the slug column
   *
   * Example usage:
   * <code>
   * $query->filterBySlug('fooValue');   // WHERE slug = 'fooValue'
   * $query->filterBySlug('%fooValue%'); // WHERE slug LIKE '%fooValue%'
   * </code>
   *
   * @param     string $slug The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function filterBySlug($slug = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($slug))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $slug))
      {
        $slug = str_replace('*', '%', $slug);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectiblePeer::SLUG, $slug, $comparison);
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
   * @return    CollectibleQuery The current query, for fluid interface
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
    return $this->addUsingAlias(CollectiblePeer::DESCRIPTION, $description, $comparison);
  }

  /**
   * Filter the query on the num_comments column
   *
   * Example usage:
   * <code>
   * $query->filterByNumComments(1234); // WHERE num_comments = 1234
   * $query->filterByNumComments(array(12, 34)); // WHERE num_comments IN (12, 34)
   * $query->filterByNumComments(array('min' => 12)); // WHERE num_comments > 12
   * </code>
   *
   * @param     mixed $numComments The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function filterByNumComments($numComments = null, $comparison = null)
  {
    if (is_array($numComments))
    {
      $useMinMax = false;
      if (isset($numComments['min']))
      {
        $this->addUsingAlias(CollectiblePeer::NUM_COMMENTS, $numComments['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($numComments['max']))
      {
        $this->addUsingAlias(CollectiblePeer::NUM_COMMENTS, $numComments['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectiblePeer::NUM_COMMENTS, $numComments, $comparison);
  }

  /**
   * Filter the query on the score column
   *
   * Example usage:
   * <code>
   * $query->filterByScore(1234); // WHERE score = 1234
   * $query->filterByScore(array(12, 34)); // WHERE score IN (12, 34)
   * $query->filterByScore(array('min' => 12)); // WHERE score > 12
   * </code>
   *
   * @param     mixed $score The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function filterByScore($score = null, $comparison = null)
  {
    if (is_array($score))
    {
      $useMinMax = false;
      if (isset($score['min']))
      {
        $this->addUsingAlias(CollectiblePeer::SCORE, $score['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($score['max']))
      {
        $this->addUsingAlias(CollectiblePeer::SCORE, $score['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectiblePeer::SCORE, $score, $comparison);
  }

  /**
   * Filter the query on the position column
   *
   * Example usage:
   * <code>
   * $query->filterByPosition(1234); // WHERE position = 1234
   * $query->filterByPosition(array(12, 34)); // WHERE position IN (12, 34)
   * $query->filterByPosition(array('min' => 12)); // WHERE position > 12
   * </code>
   *
   * @param     mixed $position The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function filterByPosition($position = null, $comparison = null)
  {
    if (is_array($position))
    {
      $useMinMax = false;
      if (isset($position['min']))
      {
        $this->addUsingAlias(CollectiblePeer::POSITION, $position['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($position['max']))
      {
        $this->addUsingAlias(CollectiblePeer::POSITION, $position['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectiblePeer::POSITION, $position, $comparison);
  }

  /**
   * Filter the query on the is_name_automatic column
   *
   * Example usage:
   * <code>
   * $query->filterByIsNameAutomatic(true); // WHERE is_name_automatic = true
   * $query->filterByIsNameAutomatic('yes'); // WHERE is_name_automatic = true
   * </code>
   *
   * @param     boolean|string $isNameAutomatic The value to use as filter.
   *              Non-boolean arguments are converted using the following rules:
   *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function filterByIsNameAutomatic($isNameAutomatic = null, $comparison = null)
  {
    if (is_string($isNameAutomatic))
    {
      $is_name_automatic = in_array(strtolower($isNameAutomatic), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
    }
    return $this->addUsingAlias(CollectiblePeer::IS_NAME_AUTOMATIC, $isNameAutomatic, $comparison);
  }

  /**
   * Filter the query on the eblob column
   *
   * Example usage:
   * <code>
   * $query->filterByEblob('fooValue');   // WHERE eblob = 'fooValue'
   * $query->filterByEblob('%fooValue%'); // WHERE eblob LIKE '%fooValue%'
   * </code>
   *
   * @param     string $eblob The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function filterByEblob($eblob = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($eblob))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $eblob))
      {
        $eblob = str_replace('*', '%', $eblob);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectiblePeer::EBLOB, $eblob, $comparison);
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
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(CollectiblePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(CollectiblePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectiblePeer::CREATED_AT, $createdAt, $comparison);
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
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function filterByUpdatedAt($updatedAt = null, $comparison = null)
  {
    if (is_array($updatedAt))
    {
      $useMinMax = false;
      if (isset($updatedAt['min']))
      {
        $this->addUsingAlias(CollectiblePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($updatedAt['max']))
      {
        $this->addUsingAlias(CollectiblePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectiblePeer::UPDATED_AT, $updatedAt, $comparison);
  }

  /**
   * Filter the query by a related Collector object
   *
   * @param     Collector|PropelCollection $collector The related object(s) to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function filterByCollector($collector, $comparison = null)
  {
    if ($collector instanceof Collector)
    {
      return $this
        ->addUsingAlias(CollectiblePeer::COLLECTOR_ID, $collector->getId(), $comparison);
    }
    elseif ($collector instanceof PropelCollection)
    {
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
      return $this
        ->addUsingAlias(CollectiblePeer::COLLECTOR_ID, $collector->toKeyValue('PrimaryKey', 'Id'), $comparison);
    }
    else
    {
      throw new PropelException('filterByCollector() only accepts arguments of type Collector or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the Collector relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function joinCollector($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('Collector');

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
      $this->addJoinObject($join, 'Collector');
    }

    return $this;
  }

  /**
   * Use the Collector relation Collector object
   *
   * @see       useQuery()
   *
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectorQuery A secondary query class using the current class as primary query
   */
  public function useCollectorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinCollector($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'Collector', 'CollectorQuery');
  }

  /**
   * Filter the query by a related Collection object
   *
   * @param     Collection|PropelCollection $collection The related object(s) to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function filterByCollection($collection, $comparison = null)
  {
    if ($collection instanceof Collection)
    {
      return $this
        ->addUsingAlias(CollectiblePeer::COLLECTION_ID, $collection->getId(), $comparison);
    }
    elseif ($collection instanceof PropelCollection)
    {
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
      return $this
        ->addUsingAlias(CollectiblePeer::COLLECTION_ID, $collection->toKeyValue('PrimaryKey', 'Id'), $comparison);
    }
    else
    {
      throw new PropelException('filterByCollection() only accepts arguments of type Collection or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the Collection relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function joinCollection($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('Collection');

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
      $this->addJoinObject($join, 'Collection');
    }

    return $this;
  }

  /**
   * Use the Collection relation Collection object
   *
   * @see       useQuery()
   *
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectionQuery A secondary query class using the current class as primary query
   */
  public function useCollectionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinCollection($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'Collection', 'CollectionQuery');
  }

  /**
   * Filter the query by a related CollectibleForSale object
   *
   * @param     CollectibleForSale $collectibleForSale  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function filterByCollectibleForSale($collectibleForSale, $comparison = null)
  {
    if ($collectibleForSale instanceof CollectibleForSale)
    {
      return $this
        ->addUsingAlias(CollectiblePeer::ID, $collectibleForSale->getCollectibleId(), $comparison);
    }
    elseif ($collectibleForSale instanceof PropelCollection)
    {
      return $this
        ->useCollectibleForSaleQuery()
        ->filterByPrimaryKeys($collectibleForSale->getPrimaryKeys())
        ->endUse();
    }
    else
    {
      throw new PropelException('filterByCollectibleForSale() only accepts arguments of type CollectibleForSale or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the CollectibleForSale relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function joinCollectibleForSale($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('CollectibleForSale');

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
      $this->addJoinObject($join, 'CollectibleForSale');
    }

    return $this;
  }

  /**
   * Use the CollectibleForSale relation CollectibleForSale object
   *
   * @see       useQuery()
   *
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectibleForSaleQuery A secondary query class using the current class as primary query
   */
  public function useCollectibleForSaleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinCollectibleForSale($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'CollectibleForSale', 'CollectibleForSaleQuery');
  }

  /**
   * Filter the query by a related CollectibleOffer object
   *
   * @param     CollectibleOffer $collectibleOffer  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function filterByCollectibleOffer($collectibleOffer, $comparison = null)
  {
    if ($collectibleOffer instanceof CollectibleOffer)
    {
      return $this
        ->addUsingAlias(CollectiblePeer::ID, $collectibleOffer->getCollectibleId(), $comparison);
    }
    elseif ($collectibleOffer instanceof PropelCollection)
    {
      return $this
        ->useCollectibleOfferQuery()
        ->filterByPrimaryKeys($collectibleOffer->getPrimaryKeys())
        ->endUse();
    }
    else
    {
      throw new PropelException('filterByCollectibleOffer() only accepts arguments of type CollectibleOffer or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the CollectibleOffer relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function joinCollectibleOffer($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('CollectibleOffer');

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
      $this->addJoinObject($join, 'CollectibleOffer');
    }

    return $this;
  }

  /**
   * Use the CollectibleOffer relation CollectibleOffer object
   *
   * @see       useQuery()
   *
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectibleOfferQuery A secondary query class using the current class as primary query
   */
  public function useCollectibleOfferQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinCollectibleOffer($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'CollectibleOffer', 'CollectibleOfferQuery');
  }

  /**
   * Filter the query by a related Comment object
   *
   * @param     Comment $comment  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function filterByComment($comment, $comparison = null)
  {
    if ($comment instanceof Comment)
    {
      return $this
        ->addUsingAlias(CollectiblePeer::ID, $comment->getCollectibleId(), $comparison);
    }
    elseif ($comment instanceof PropelCollection)
    {
      return $this
        ->useCommentQuery()
        ->filterByPrimaryKeys($comment->getPrimaryKeys())
        ->endUse();
    }
    else
    {
      throw new PropelException('filterByComment() only accepts arguments of type Comment or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the Comment relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function joinComment($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('Comment');

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
      $this->addJoinObject($join, 'Comment');
    }

    return $this;
  }

  /**
   * Use the Comment relation Comment object
   *
   * @see       useQuery()
   *
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CommentQuery A secondary query class using the current class as primary query
   */
  public function useCommentQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    return $this
      ->joinComment($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'Comment', 'CommentQuery');
  }

  /**
   * Filter the query by a related CustomValue object
   *
   * @param     CustomValue $customValue  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function filterByCustomValue($customValue, $comparison = null)
  {
    if ($customValue instanceof CustomValue)
    {
      return $this
        ->addUsingAlias(CollectiblePeer::ID, $customValue->getCollectibleId(), $comparison);
    }
    elseif ($customValue instanceof PropelCollection)
    {
      return $this
        ->useCustomValueQuery()
        ->filterByPrimaryKeys($customValue->getPrimaryKeys())
        ->endUse();
    }
    else
    {
      throw new PropelException('filterByCustomValue() only accepts arguments of type CustomValue or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the CustomValue relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function joinCustomValue($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('CustomValue');

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
      $this->addJoinObject($join, 'CustomValue');
    }

    return $this;
  }

  /**
   * Use the CustomValue relation CustomValue object
   *
   * @see       useQuery()
   *
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CustomValueQuery A secondary query class using the current class as primary query
   */
  public function useCustomValueQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinCustomValue($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'CustomValue', 'CustomValueQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     Collectible $collectible Object to remove from the list of results
   *
   * @return    CollectibleQuery The current query, for fluid interface
   */
  public function prune($collectible = null)
  {
    if ($collectible)
    {
      $this->addUsingAlias(CollectiblePeer::ID, $collectible->getId(), Criteria::NOT_EQUAL);
    }

    return $this;
  }

  /**
   * Code to execute before every DELETE statement
   *
   * @param     PropelPDO $con The connection object used by the query
   */
  protected function basePreDelete(PropelPDO $con)
  {
    // archivable behavior
    
    if ($this->archiveOnDelete)
    {
      $this->archive($con);
    }
    else
    {
      $this->archiveOnDelete = true;
    }


    return $this->preDelete($con);
  }

  // archivable behavior
  
  /**
   * Copy the data of the objects satisfying the query into CollectibleArchive archive objects.
   * The archived objects are then saved.
   * If any of the objects has already been archived, the archived object
   * is updated and not duplicated.
   * Warning: This termination methods issues 2n+1 queries.
   *
   * @param      PropelPDO $con  Connection to use.
   * @param      Boolean $useLittleMemory  Whether or not to use PropelOnDemandFormatter to retrieve objects.
   *               Set to false if the identity map matters.
   *               Set to true (default) to use less memory.
   *
   * @return     int the number of archived objects
   */
  public function archive($con = null, $useLittleMemory = true)
  {
    $totalArchivedObjects = 0;
    $criteria = clone $this;
    // prepare the query
    $criteria->setWith(array());
    if ($useLittleMemory) {
      $criteria->setFormatter(ModelCriteria::FORMAT_ON_DEMAND);
    }
    if ($con === null) {
      $con = Propel::getConnection(CollectiblePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $con->beginTransaction();
    try {
      // archive all results one by one
      foreach ($criteria->find($con) as $object) {
        $object->archive($con);
        $totalArchivedObjects++;
      }
      $con->commit();
    } catch (PropelException $e) {
      $con->rollBack();
      throw $e;
    }
    
    return $totalArchivedObjects;
  }
  
  /**
   * Enable/disable auto-archiving on delete for the next query.
   *
   * @param Boolean True if the query must archive deleted objects, false otherwise.
   */
  public function setArchiveOnDelete($archiveOnDelete)
  {
    $this->archiveOnDelete = $archiveOnDelete;
  }
  
  /**
   * Delete records matching the current query without archiving them.
   *
   * @param      PropelPDO $con  Connection to use.
   *
   * @return integer the number of deleted rows
   */
  public function deleteWithoutArchive($con = null)
  {
    $this->archiveOnDelete = false;
  
    return $this->delete($con);
  }
  
  /**
   * Delete all records without archiving them.
   *
   * @param      PropelPDO $con  Connection to use.
   *
   * @return integer the number of deleted rows
   */
  public function deleteAllWithoutArchive($con = null)
  {
    $this->archiveOnDelete = false;
  
    return $this->deleteAll($con);
  }

  // timestampable behavior
  
  /**
   * Filter by the latest updated
   *
   * @param      int $nbDays Maximum age of the latest update in days
   *
   * @return     CollectibleQuery The current query, for fluid interface
   */
  public function recentlyUpdated($nbDays = 7)
  {
    return $this->addUsingAlias(CollectiblePeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Filter by the latest created
   *
   * @param      int $nbDays Maximum age of in days
   *
   * @return     CollectibleQuery The current query, for fluid interface
   */
  public function recentlyCreated($nbDays = 7)
  {
    return $this->addUsingAlias(CollectiblePeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Order by update date desc
   *
   * @return     CollectibleQuery The current query, for fluid interface
   */
  public function lastUpdatedFirst()
  {
    return $this->addDescendingOrderByColumn(CollectiblePeer::UPDATED_AT);
  }
  
  /**
   * Order by update date asc
   *
   * @return     CollectibleQuery The current query, for fluid interface
   */
  public function firstUpdatedFirst()
  {
    return $this->addAscendingOrderByColumn(CollectiblePeer::UPDATED_AT);
  }
  
  /**
   * Order by create date desc
   *
   * @return     CollectibleQuery The current query, for fluid interface
   */
  public function lastCreatedFirst()
  {
    return $this->addDescendingOrderByColumn(CollectiblePeer::CREATED_AT);
  }
  
  /**
   * Order by create date asc
   *
   * @return     CollectibleQuery The current query, for fluid interface
   */
  public function firstCreatedFirst()
  {
    return $this->addAscendingOrderByColumn(CollectiblePeer::CREATED_AT);
  }

}