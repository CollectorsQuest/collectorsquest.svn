<?php


/**
 * Base class that represents a query for the 'wp_options' table.
 *
 * 
 *
 * @method     wpOptionQuery orderByOptionId($order = Criteria::ASC) Order by the option_id column
 * @method     wpOptionQuery orderByBlogId($order = Criteria::ASC) Order by the blog_id column
 * @method     wpOptionQuery orderByOptionName($order = Criteria::ASC) Order by the option_name column
 * @method     wpOptionQuery orderByOptionValue($order = Criteria::ASC) Order by the option_value column
 * @method     wpOptionQuery orderByAutoload($order = Criteria::ASC) Order by the autoload column
 *
 * @method     wpOptionQuery groupByOptionId() Group by the option_id column
 * @method     wpOptionQuery groupByBlogId() Group by the blog_id column
 * @method     wpOptionQuery groupByOptionName() Group by the option_name column
 * @method     wpOptionQuery groupByOptionValue() Group by the option_value column
 * @method     wpOptionQuery groupByAutoload() Group by the autoload column
 *
 * @method     wpOptionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     wpOptionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     wpOptionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     wpOption findOne(PropelPDO $con = null) Return the first wpOption matching the query
 * @method     wpOption findOneOrCreate(PropelPDO $con = null) Return the first wpOption matching the query, or a new wpOption object populated from the query conditions when no match is found
 *
 * @method     wpOption findOneByOptionId(int $option_id) Return the first wpOption filtered by the option_id column
 * @method     wpOption findOneByBlogId(int $blog_id) Return the first wpOption filtered by the blog_id column
 * @method     wpOption findOneByOptionName(string $option_name) Return the first wpOption filtered by the option_name column
 * @method     wpOption findOneByOptionValue(string $option_value) Return the first wpOption filtered by the option_value column
 * @method     wpOption findOneByAutoload(string $autoload) Return the first wpOption filtered by the autoload column
 *
 * @method     array findByOptionId(int $option_id) Return wpOption objects filtered by the option_id column
 * @method     array findByBlogId(int $blog_id) Return wpOption objects filtered by the blog_id column
 * @method     array findByOptionName(string $option_name) Return wpOption objects filtered by the option_name column
 * @method     array findByOptionValue(string $option_value) Return wpOption objects filtered by the option_value column
 * @method     array findByAutoload(string $autoload) Return wpOption objects filtered by the autoload column
 *
 * @package    propel.generator.lib.model.blog.om
 */
abstract class BasewpOptionQuery extends ModelCriteria
{
  
  /**
   * Initializes internal state of BasewpOptionQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'blog', $modelName = 'wpOption', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new wpOptionQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    wpOptionQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof wpOptionQuery)
    {
      return $criteria;
    }
    $query = new wpOptionQuery();
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
   * $obj = $c->findPk(array(12, 34, 56), $con);
   * </code>
   *
   * @param     array[$option_id, $blog_id, $option_name] $key Primary key to use for the query
   * @param     PropelPDO $con an optional connection object
   *
   * @return    wpOption|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = wpOptionPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(wpOptionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    wpOption A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `OPTION_ID`, `BLOG_ID`, `OPTION_NAME`, `OPTION_VALUE`, `AUTOLOAD` FROM `wp_options` WHERE `OPTION_ID` = :p0 AND `BLOG_ID` = :p1 AND `OPTION_NAME` = :p2';
    try
    {
      $stmt = $con->prepare($sql);
      $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
      $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
      $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
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
      $obj = new wpOption();
      $obj->hydrate($row);
      wpOptionPeer::addInstanceToPool($obj, serialize(array((string) $row[0], (string) $row[1], (string) $row[2])));
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
   * @return    wpOption|array|mixed the result, formatted by the current formatter
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
   * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
   * @return    wpOptionQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    $this->addUsingAlias(wpOptionPeer::OPTION_ID, $key[0], Criteria::EQUAL);
    $this->addUsingAlias(wpOptionPeer::BLOG_ID, $key[1], Criteria::EQUAL);
    $this->addUsingAlias(wpOptionPeer::OPTION_NAME, $key[2], Criteria::EQUAL);

    return $this;
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    wpOptionQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    if (empty($keys))
    {
      return $this->add(null, '1<>1', Criteria::CUSTOM);
    }
    foreach ($keys as $key)
    {
      $cton0 = $this->getNewCriterion(wpOptionPeer::OPTION_ID, $key[0], Criteria::EQUAL);
      $cton1 = $this->getNewCriterion(wpOptionPeer::BLOG_ID, $key[1], Criteria::EQUAL);
      $cton0->addAnd($cton1);
      $cton2 = $this->getNewCriterion(wpOptionPeer::OPTION_NAME, $key[2], Criteria::EQUAL);
      $cton0->addAnd($cton2);
      $this->addOr($cton0);
    }

    return $this;
  }

  /**
   * Filter the query on the option_id column
   *
   * Example usage:
   * <code>
   * $query->filterByOptionId(1234); // WHERE option_id = 1234
   * $query->filterByOptionId(array(12, 34)); // WHERE option_id IN (12, 34)
   * $query->filterByOptionId(array('min' => 12)); // WHERE option_id > 12
   * </code>
   *
   * @param     mixed $optionId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpOptionQuery The current query, for fluid interface
   */
  public function filterByOptionId($optionId = null, $comparison = null)
  {
    if (is_array($optionId) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(wpOptionPeer::OPTION_ID, $optionId, $comparison);
  }

  /**
   * Filter the query on the blog_id column
   *
   * Example usage:
   * <code>
   * $query->filterByBlogId(1234); // WHERE blog_id = 1234
   * $query->filterByBlogId(array(12, 34)); // WHERE blog_id IN (12, 34)
   * $query->filterByBlogId(array('min' => 12)); // WHERE blog_id > 12
   * </code>
   *
   * @param     mixed $blogId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpOptionQuery The current query, for fluid interface
   */
  public function filterByBlogId($blogId = null, $comparison = null)
  {
    if (is_array($blogId) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(wpOptionPeer::BLOG_ID, $blogId, $comparison);
  }

  /**
   * Filter the query on the option_name column
   *
   * Example usage:
   * <code>
   * $query->filterByOptionName('fooValue');   // WHERE option_name = 'fooValue'
   * $query->filterByOptionName('%fooValue%'); // WHERE option_name LIKE '%fooValue%'
   * </code>
   *
   * @param     string $optionName The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpOptionQuery The current query, for fluid interface
   */
  public function filterByOptionName($optionName = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($optionName))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $optionName))
      {
        $optionName = str_replace('*', '%', $optionName);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpOptionPeer::OPTION_NAME, $optionName, $comparison);
  }

  /**
   * Filter the query on the option_value column
   *
   * Example usage:
   * <code>
   * $query->filterByOptionValue('fooValue');   // WHERE option_value = 'fooValue'
   * $query->filterByOptionValue('%fooValue%'); // WHERE option_value LIKE '%fooValue%'
   * </code>
   *
   * @param     string $optionValue The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpOptionQuery The current query, for fluid interface
   */
  public function filterByOptionValue($optionValue = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($optionValue))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $optionValue))
      {
        $optionValue = str_replace('*', '%', $optionValue);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpOptionPeer::OPTION_VALUE, $optionValue, $comparison);
  }

  /**
   * Filter the query on the autoload column
   *
   * Example usage:
   * <code>
   * $query->filterByAutoload('fooValue');   // WHERE autoload = 'fooValue'
   * $query->filterByAutoload('%fooValue%'); // WHERE autoload LIKE '%fooValue%'
   * </code>
   *
   * @param     string $autoload The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpOptionQuery The current query, for fluid interface
   */
  public function filterByAutoload($autoload = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($autoload))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $autoload))
      {
        $autoload = str_replace('*', '%', $autoload);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpOptionPeer::AUTOLOAD, $autoload, $comparison);
  }

  /**
   * Exclude object from result
   *
   * @param     wpOption $wpOption Object to remove from the list of results
   *
   * @return    wpOptionQuery The current query, for fluid interface
   */
  public function prune($wpOption = null)
  {
    if ($wpOption)
    {
      $this->addCond('pruneCond0', $this->getAliasedColName(wpOptionPeer::OPTION_ID), $wpOption->getOptionId(), Criteria::NOT_EQUAL);
      $this->addCond('pruneCond1', $this->getAliasedColName(wpOptionPeer::BLOG_ID), $wpOption->getBlogId(), Criteria::NOT_EQUAL);
      $this->addCond('pruneCond2', $this->getAliasedColName(wpOptionPeer::OPTION_NAME), $wpOption->getOptionName(), Criteria::NOT_EQUAL);
      $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
    }

    return $this;
  }

}