<?php


/**
 * Base class that represents a query for the 'wp_term_taxonomy' table.
 *
 * 
 *
 * @method     wpTermTaxonomyQuery orderByTermTaxonomyId($order = Criteria::ASC) Order by the term_taxonomy_id column
 * @method     wpTermTaxonomyQuery orderByTermId($order = Criteria::ASC) Order by the term_id column
 * @method     wpTermTaxonomyQuery orderByTaxonomy($order = Criteria::ASC) Order by the taxonomy column
 * @method     wpTermTaxonomyQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     wpTermTaxonomyQuery orderByParent($order = Criteria::ASC) Order by the parent column
 * @method     wpTermTaxonomyQuery orderByCount($order = Criteria::ASC) Order by the count column
 *
 * @method     wpTermTaxonomyQuery groupByTermTaxonomyId() Group by the term_taxonomy_id column
 * @method     wpTermTaxonomyQuery groupByTermId() Group by the term_id column
 * @method     wpTermTaxonomyQuery groupByTaxonomy() Group by the taxonomy column
 * @method     wpTermTaxonomyQuery groupByDescription() Group by the description column
 * @method     wpTermTaxonomyQuery groupByParent() Group by the parent column
 * @method     wpTermTaxonomyQuery groupByCount() Group by the count column
 *
 * @method     wpTermTaxonomyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     wpTermTaxonomyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     wpTermTaxonomyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     wpTermTaxonomy findOne(PropelPDO $con = null) Return the first wpTermTaxonomy matching the query
 * @method     wpTermTaxonomy findOneOrCreate(PropelPDO $con = null) Return the first wpTermTaxonomy matching the query, or a new wpTermTaxonomy object populated from the query conditions when no match is found
 *
 * @method     wpTermTaxonomy findOneByTermTaxonomyId(int $term_taxonomy_id) Return the first wpTermTaxonomy filtered by the term_taxonomy_id column
 * @method     wpTermTaxonomy findOneByTermId(int $term_id) Return the first wpTermTaxonomy filtered by the term_id column
 * @method     wpTermTaxonomy findOneByTaxonomy(string $taxonomy) Return the first wpTermTaxonomy filtered by the taxonomy column
 * @method     wpTermTaxonomy findOneByDescription(string $description) Return the first wpTermTaxonomy filtered by the description column
 * @method     wpTermTaxonomy findOneByParent(int $parent) Return the first wpTermTaxonomy filtered by the parent column
 * @method     wpTermTaxonomy findOneByCount(int $count) Return the first wpTermTaxonomy filtered by the count column
 *
 * @method     array findByTermTaxonomyId(int $term_taxonomy_id) Return wpTermTaxonomy objects filtered by the term_taxonomy_id column
 * @method     array findByTermId(int $term_id) Return wpTermTaxonomy objects filtered by the term_id column
 * @method     array findByTaxonomy(string $taxonomy) Return wpTermTaxonomy objects filtered by the taxonomy column
 * @method     array findByDescription(string $description) Return wpTermTaxonomy objects filtered by the description column
 * @method     array findByParent(int $parent) Return wpTermTaxonomy objects filtered by the parent column
 * @method     array findByCount(int $count) Return wpTermTaxonomy objects filtered by the count column
 *
 * @package    propel.generator.lib.model.blog.om
 */
abstract class BasewpTermTaxonomyQuery extends ModelCriteria
{
  
  /**
   * Initializes internal state of BasewpTermTaxonomyQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'blog', $modelName = 'wpTermTaxonomy', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new wpTermTaxonomyQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    wpTermTaxonomyQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof wpTermTaxonomyQuery)
    {
      return $criteria;
    }
    $query = new wpTermTaxonomyQuery();
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
   * @return    wpTermTaxonomy|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = wpTermTaxonomyPeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(wpTermTaxonomyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    wpTermTaxonomy A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `TERM_TAXONOMY_ID`, `TERM_ID`, `TAXONOMY`, `DESCRIPTION`, `PARENT`, `COUNT` FROM `wp_term_taxonomy` WHERE `TERM_TAXONOMY_ID` = :p0';
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
      $obj = new wpTermTaxonomy();
      $obj->hydrate($row);
      wpTermTaxonomyPeer::addInstanceToPool($obj, (string) $row[0]);
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
   * @return    wpTermTaxonomy|array|mixed the result, formatted by the current formatter
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
   * @return    wpTermTaxonomyQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(wpTermTaxonomyPeer::TERM_TAXONOMY_ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    wpTermTaxonomyQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(wpTermTaxonomyPeer::TERM_TAXONOMY_ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the term_taxonomy_id column
   *
   * Example usage:
   * <code>
   * $query->filterByTermTaxonomyId(1234); // WHERE term_taxonomy_id = 1234
   * $query->filterByTermTaxonomyId(array(12, 34)); // WHERE term_taxonomy_id IN (12, 34)
   * $query->filterByTermTaxonomyId(array('min' => 12)); // WHERE term_taxonomy_id > 12
   * </code>
   *
   * @param     mixed $termTaxonomyId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpTermTaxonomyQuery The current query, for fluid interface
   */
  public function filterByTermTaxonomyId($termTaxonomyId = null, $comparison = null)
  {
    if (is_array($termTaxonomyId) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(wpTermTaxonomyPeer::TERM_TAXONOMY_ID, $termTaxonomyId, $comparison);
  }

  /**
   * Filter the query on the term_id column
   *
   * Example usage:
   * <code>
   * $query->filterByTermId(1234); // WHERE term_id = 1234
   * $query->filterByTermId(array(12, 34)); // WHERE term_id IN (12, 34)
   * $query->filterByTermId(array('min' => 12)); // WHERE term_id > 12
   * </code>
   *
   * @param     mixed $termId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpTermTaxonomyQuery The current query, for fluid interface
   */
  public function filterByTermId($termId = null, $comparison = null)
  {
    if (is_array($termId))
    {
      $useMinMax = false;
      if (isset($termId['min']))
      {
        $this->addUsingAlias(wpTermTaxonomyPeer::TERM_ID, $termId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($termId['max']))
      {
        $this->addUsingAlias(wpTermTaxonomyPeer::TERM_ID, $termId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpTermTaxonomyPeer::TERM_ID, $termId, $comparison);
  }

  /**
   * Filter the query on the taxonomy column
   *
   * Example usage:
   * <code>
   * $query->filterByTaxonomy('fooValue');   // WHERE taxonomy = 'fooValue'
   * $query->filterByTaxonomy('%fooValue%'); // WHERE taxonomy LIKE '%fooValue%'
   * </code>
   *
   * @param     string $taxonomy The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpTermTaxonomyQuery The current query, for fluid interface
   */
  public function filterByTaxonomy($taxonomy = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($taxonomy))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $taxonomy))
      {
        $taxonomy = str_replace('*', '%', $taxonomy);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpTermTaxonomyPeer::TAXONOMY, $taxonomy, $comparison);
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
   * @return    wpTermTaxonomyQuery The current query, for fluid interface
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
    return $this->addUsingAlias(wpTermTaxonomyPeer::DESCRIPTION, $description, $comparison);
  }

  /**
   * Filter the query on the parent column
   *
   * Example usage:
   * <code>
   * $query->filterByParent(1234); // WHERE parent = 1234
   * $query->filterByParent(array(12, 34)); // WHERE parent IN (12, 34)
   * $query->filterByParent(array('min' => 12)); // WHERE parent > 12
   * </code>
   *
   * @param     mixed $parent The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpTermTaxonomyQuery The current query, for fluid interface
   */
  public function filterByParent($parent = null, $comparison = null)
  {
    if (is_array($parent))
    {
      $useMinMax = false;
      if (isset($parent['min']))
      {
        $this->addUsingAlias(wpTermTaxonomyPeer::PARENT, $parent['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($parent['max']))
      {
        $this->addUsingAlias(wpTermTaxonomyPeer::PARENT, $parent['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpTermTaxonomyPeer::PARENT, $parent, $comparison);
  }

  /**
   * Filter the query on the count column
   *
   * Example usage:
   * <code>
   * $query->filterByCount(1234); // WHERE count = 1234
   * $query->filterByCount(array(12, 34)); // WHERE count IN (12, 34)
   * $query->filterByCount(array('min' => 12)); // WHERE count > 12
   * </code>
   *
   * @param     mixed $count The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpTermTaxonomyQuery The current query, for fluid interface
   */
  public function filterByCount($count = null, $comparison = null)
  {
    if (is_array($count))
    {
      $useMinMax = false;
      if (isset($count['min']))
      {
        $this->addUsingAlias(wpTermTaxonomyPeer::COUNT, $count['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($count['max']))
      {
        $this->addUsingAlias(wpTermTaxonomyPeer::COUNT, $count['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpTermTaxonomyPeer::COUNT, $count, $comparison);
  }

  /**
   * Exclude object from result
   *
   * @param     wpTermTaxonomy $wpTermTaxonomy Object to remove from the list of results
   *
   * @return    wpTermTaxonomyQuery The current query, for fluid interface
   */
  public function prune($wpTermTaxonomy = null)
  {
    if ($wpTermTaxonomy)
    {
      $this->addUsingAlias(wpTermTaxonomyPeer::TERM_TAXONOMY_ID, $wpTermTaxonomy->getTermTaxonomyId(), Criteria::NOT_EQUAL);
    }

    return $this;
  }

}