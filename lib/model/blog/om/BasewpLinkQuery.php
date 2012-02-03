<?php


/**
 * Base class that represents a query for the 'wp_links' table.
 *
 * 
 *
 * @method     wpLinkQuery orderByLinkId($order = Criteria::ASC) Order by the link_id column
 * @method     wpLinkQuery orderByLinkUrl($order = Criteria::ASC) Order by the link_url column
 * @method     wpLinkQuery orderByLinkName($order = Criteria::ASC) Order by the link_name column
 * @method     wpLinkQuery orderByLinkImage($order = Criteria::ASC) Order by the link_image column
 * @method     wpLinkQuery orderByLinkTarget($order = Criteria::ASC) Order by the link_target column
 * @method     wpLinkQuery orderByLinkDescription($order = Criteria::ASC) Order by the link_description column
 * @method     wpLinkQuery orderByLinkVisible($order = Criteria::ASC) Order by the link_visible column
 * @method     wpLinkQuery orderByLinkOwner($order = Criteria::ASC) Order by the link_owner column
 * @method     wpLinkQuery orderByLinkRating($order = Criteria::ASC) Order by the link_rating column
 * @method     wpLinkQuery orderByLinkUpdated($order = Criteria::ASC) Order by the link_updated column
 * @method     wpLinkQuery orderByLinkRel($order = Criteria::ASC) Order by the link_rel column
 * @method     wpLinkQuery orderByLinkNotes($order = Criteria::ASC) Order by the link_notes column
 * @method     wpLinkQuery orderByLinkRss($order = Criteria::ASC) Order by the link_rss column
 *
 * @method     wpLinkQuery groupByLinkId() Group by the link_id column
 * @method     wpLinkQuery groupByLinkUrl() Group by the link_url column
 * @method     wpLinkQuery groupByLinkName() Group by the link_name column
 * @method     wpLinkQuery groupByLinkImage() Group by the link_image column
 * @method     wpLinkQuery groupByLinkTarget() Group by the link_target column
 * @method     wpLinkQuery groupByLinkDescription() Group by the link_description column
 * @method     wpLinkQuery groupByLinkVisible() Group by the link_visible column
 * @method     wpLinkQuery groupByLinkOwner() Group by the link_owner column
 * @method     wpLinkQuery groupByLinkRating() Group by the link_rating column
 * @method     wpLinkQuery groupByLinkUpdated() Group by the link_updated column
 * @method     wpLinkQuery groupByLinkRel() Group by the link_rel column
 * @method     wpLinkQuery groupByLinkNotes() Group by the link_notes column
 * @method     wpLinkQuery groupByLinkRss() Group by the link_rss column
 *
 * @method     wpLinkQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     wpLinkQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     wpLinkQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     wpLink findOne(PropelPDO $con = null) Return the first wpLink matching the query
 * @method     wpLink findOneOrCreate(PropelPDO $con = null) Return the first wpLink matching the query, or a new wpLink object populated from the query conditions when no match is found
 *
 * @method     wpLink findOneByLinkId(int $link_id) Return the first wpLink filtered by the link_id column
 * @method     wpLink findOneByLinkUrl(string $link_url) Return the first wpLink filtered by the link_url column
 * @method     wpLink findOneByLinkName(string $link_name) Return the first wpLink filtered by the link_name column
 * @method     wpLink findOneByLinkImage(string $link_image) Return the first wpLink filtered by the link_image column
 * @method     wpLink findOneByLinkTarget(string $link_target) Return the first wpLink filtered by the link_target column
 * @method     wpLink findOneByLinkDescription(string $link_description) Return the first wpLink filtered by the link_description column
 * @method     wpLink findOneByLinkVisible(string $link_visible) Return the first wpLink filtered by the link_visible column
 * @method     wpLink findOneByLinkOwner(int $link_owner) Return the first wpLink filtered by the link_owner column
 * @method     wpLink findOneByLinkRating(int $link_rating) Return the first wpLink filtered by the link_rating column
 * @method     wpLink findOneByLinkUpdated(string $link_updated) Return the first wpLink filtered by the link_updated column
 * @method     wpLink findOneByLinkRel(string $link_rel) Return the first wpLink filtered by the link_rel column
 * @method     wpLink findOneByLinkNotes(string $link_notes) Return the first wpLink filtered by the link_notes column
 * @method     wpLink findOneByLinkRss(string $link_rss) Return the first wpLink filtered by the link_rss column
 *
 * @method     array findByLinkId(int $link_id) Return wpLink objects filtered by the link_id column
 * @method     array findByLinkUrl(string $link_url) Return wpLink objects filtered by the link_url column
 * @method     array findByLinkName(string $link_name) Return wpLink objects filtered by the link_name column
 * @method     array findByLinkImage(string $link_image) Return wpLink objects filtered by the link_image column
 * @method     array findByLinkTarget(string $link_target) Return wpLink objects filtered by the link_target column
 * @method     array findByLinkDescription(string $link_description) Return wpLink objects filtered by the link_description column
 * @method     array findByLinkVisible(string $link_visible) Return wpLink objects filtered by the link_visible column
 * @method     array findByLinkOwner(int $link_owner) Return wpLink objects filtered by the link_owner column
 * @method     array findByLinkRating(int $link_rating) Return wpLink objects filtered by the link_rating column
 * @method     array findByLinkUpdated(string $link_updated) Return wpLink objects filtered by the link_updated column
 * @method     array findByLinkRel(string $link_rel) Return wpLink objects filtered by the link_rel column
 * @method     array findByLinkNotes(string $link_notes) Return wpLink objects filtered by the link_notes column
 * @method     array findByLinkRss(string $link_rss) Return wpLink objects filtered by the link_rss column
 *
 * @package    propel.generator.lib.model.blog.om
 */
abstract class BasewpLinkQuery extends ModelCriteria
{
  
  /**
   * Initializes internal state of BasewpLinkQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'blog', $modelName = 'wpLink', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new wpLinkQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    wpLinkQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof wpLinkQuery)
    {
      return $criteria;
    }
    $query = new wpLinkQuery();
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
   * @return    wpLink|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = wpLinkPeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(wpLinkPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    wpLink A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `LINK_ID`, `LINK_URL`, `LINK_NAME`, `LINK_IMAGE`, `LINK_TARGET`, `LINK_DESCRIPTION`, `LINK_VISIBLE`, `LINK_OWNER`, `LINK_RATING`, `LINK_UPDATED`, `LINK_REL`, `LINK_NOTES`, `LINK_RSS` FROM `wp_links` WHERE `LINK_ID` = :p0';
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
      $obj = new wpLink();
      $obj->hydrate($row);
      wpLinkPeer::addInstanceToPool($obj, (string) $row[0]);
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
   * @return    wpLink|array|mixed the result, formatted by the current formatter
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
   * @return    wpLinkQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(wpLinkPeer::LINK_ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    wpLinkQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(wpLinkPeer::LINK_ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the link_id column
   *
   * Example usage:
   * <code>
   * $query->filterByLinkId(1234); // WHERE link_id = 1234
   * $query->filterByLinkId(array(12, 34)); // WHERE link_id IN (12, 34)
   * $query->filterByLinkId(array('min' => 12)); // WHERE link_id > 12
   * </code>
   *
   * @param     mixed $linkId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpLinkQuery The current query, for fluid interface
   */
  public function filterByLinkId($linkId = null, $comparison = null)
  {
    if (is_array($linkId) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(wpLinkPeer::LINK_ID, $linkId, $comparison);
  }

  /**
   * Filter the query on the link_url column
   *
   * Example usage:
   * <code>
   * $query->filterByLinkUrl('fooValue');   // WHERE link_url = 'fooValue'
   * $query->filterByLinkUrl('%fooValue%'); // WHERE link_url LIKE '%fooValue%'
   * </code>
   *
   * @param     string $linkUrl The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpLinkQuery The current query, for fluid interface
   */
  public function filterByLinkUrl($linkUrl = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($linkUrl))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $linkUrl))
      {
        $linkUrl = str_replace('*', '%', $linkUrl);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpLinkPeer::LINK_URL, $linkUrl, $comparison);
  }

  /**
   * Filter the query on the link_name column
   *
   * Example usage:
   * <code>
   * $query->filterByLinkName('fooValue');   // WHERE link_name = 'fooValue'
   * $query->filterByLinkName('%fooValue%'); // WHERE link_name LIKE '%fooValue%'
   * </code>
   *
   * @param     string $linkName The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpLinkQuery The current query, for fluid interface
   */
  public function filterByLinkName($linkName = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($linkName))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $linkName))
      {
        $linkName = str_replace('*', '%', $linkName);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpLinkPeer::LINK_NAME, $linkName, $comparison);
  }

  /**
   * Filter the query on the link_image column
   *
   * Example usage:
   * <code>
   * $query->filterByLinkImage('fooValue');   // WHERE link_image = 'fooValue'
   * $query->filterByLinkImage('%fooValue%'); // WHERE link_image LIKE '%fooValue%'
   * </code>
   *
   * @param     string $linkImage The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpLinkQuery The current query, for fluid interface
   */
  public function filterByLinkImage($linkImage = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($linkImage))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $linkImage))
      {
        $linkImage = str_replace('*', '%', $linkImage);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpLinkPeer::LINK_IMAGE, $linkImage, $comparison);
  }

  /**
   * Filter the query on the link_target column
   *
   * Example usage:
   * <code>
   * $query->filterByLinkTarget('fooValue');   // WHERE link_target = 'fooValue'
   * $query->filterByLinkTarget('%fooValue%'); // WHERE link_target LIKE '%fooValue%'
   * </code>
   *
   * @param     string $linkTarget The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpLinkQuery The current query, for fluid interface
   */
  public function filterByLinkTarget($linkTarget = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($linkTarget))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $linkTarget))
      {
        $linkTarget = str_replace('*', '%', $linkTarget);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpLinkPeer::LINK_TARGET, $linkTarget, $comparison);
  }

  /**
   * Filter the query on the link_description column
   *
   * Example usage:
   * <code>
   * $query->filterByLinkDescription('fooValue');   // WHERE link_description = 'fooValue'
   * $query->filterByLinkDescription('%fooValue%'); // WHERE link_description LIKE '%fooValue%'
   * </code>
   *
   * @param     string $linkDescription The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpLinkQuery The current query, for fluid interface
   */
  public function filterByLinkDescription($linkDescription = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($linkDescription))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $linkDescription))
      {
        $linkDescription = str_replace('*', '%', $linkDescription);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpLinkPeer::LINK_DESCRIPTION, $linkDescription, $comparison);
  }

  /**
   * Filter the query on the link_visible column
   *
   * Example usage:
   * <code>
   * $query->filterByLinkVisible('fooValue');   // WHERE link_visible = 'fooValue'
   * $query->filterByLinkVisible('%fooValue%'); // WHERE link_visible LIKE '%fooValue%'
   * </code>
   *
   * @param     string $linkVisible The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpLinkQuery The current query, for fluid interface
   */
  public function filterByLinkVisible($linkVisible = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($linkVisible))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $linkVisible))
      {
        $linkVisible = str_replace('*', '%', $linkVisible);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpLinkPeer::LINK_VISIBLE, $linkVisible, $comparison);
  }

  /**
   * Filter the query on the link_owner column
   *
   * Example usage:
   * <code>
   * $query->filterByLinkOwner(1234); // WHERE link_owner = 1234
   * $query->filterByLinkOwner(array(12, 34)); // WHERE link_owner IN (12, 34)
   * $query->filterByLinkOwner(array('min' => 12)); // WHERE link_owner > 12
   * </code>
   *
   * @param     mixed $linkOwner The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpLinkQuery The current query, for fluid interface
   */
  public function filterByLinkOwner($linkOwner = null, $comparison = null)
  {
    if (is_array($linkOwner))
    {
      $useMinMax = false;
      if (isset($linkOwner['min']))
      {
        $this->addUsingAlias(wpLinkPeer::LINK_OWNER, $linkOwner['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($linkOwner['max']))
      {
        $this->addUsingAlias(wpLinkPeer::LINK_OWNER, $linkOwner['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpLinkPeer::LINK_OWNER, $linkOwner, $comparison);
  }

  /**
   * Filter the query on the link_rating column
   *
   * Example usage:
   * <code>
   * $query->filterByLinkRating(1234); // WHERE link_rating = 1234
   * $query->filterByLinkRating(array(12, 34)); // WHERE link_rating IN (12, 34)
   * $query->filterByLinkRating(array('min' => 12)); // WHERE link_rating > 12
   * </code>
   *
   * @param     mixed $linkRating The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpLinkQuery The current query, for fluid interface
   */
  public function filterByLinkRating($linkRating = null, $comparison = null)
  {
    if (is_array($linkRating))
    {
      $useMinMax = false;
      if (isset($linkRating['min']))
      {
        $this->addUsingAlias(wpLinkPeer::LINK_RATING, $linkRating['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($linkRating['max']))
      {
        $this->addUsingAlias(wpLinkPeer::LINK_RATING, $linkRating['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpLinkPeer::LINK_RATING, $linkRating, $comparison);
  }

  /**
   * Filter the query on the link_updated column
   *
   * Example usage:
   * <code>
   * $query->filterByLinkUpdated('2011-03-14'); // WHERE link_updated = '2011-03-14'
   * $query->filterByLinkUpdated('now'); // WHERE link_updated = '2011-03-14'
   * $query->filterByLinkUpdated(array('max' => 'yesterday')); // WHERE link_updated > '2011-03-13'
   * </code>
   *
   * @param     mixed $linkUpdated The value to use as filter.
   *              Values can be integers (unix timestamps), DateTime objects, or strings.
   *              Empty strings are treated as NULL.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpLinkQuery The current query, for fluid interface
   */
  public function filterByLinkUpdated($linkUpdated = null, $comparison = null)
  {
    if (is_array($linkUpdated))
    {
      $useMinMax = false;
      if (isset($linkUpdated['min']))
      {
        $this->addUsingAlias(wpLinkPeer::LINK_UPDATED, $linkUpdated['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($linkUpdated['max']))
      {
        $this->addUsingAlias(wpLinkPeer::LINK_UPDATED, $linkUpdated['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpLinkPeer::LINK_UPDATED, $linkUpdated, $comparison);
  }

  /**
   * Filter the query on the link_rel column
   *
   * Example usage:
   * <code>
   * $query->filterByLinkRel('fooValue');   // WHERE link_rel = 'fooValue'
   * $query->filterByLinkRel('%fooValue%'); // WHERE link_rel LIKE '%fooValue%'
   * </code>
   *
   * @param     string $linkRel The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpLinkQuery The current query, for fluid interface
   */
  public function filterByLinkRel($linkRel = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($linkRel))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $linkRel))
      {
        $linkRel = str_replace('*', '%', $linkRel);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpLinkPeer::LINK_REL, $linkRel, $comparison);
  }

  /**
   * Filter the query on the link_notes column
   *
   * Example usage:
   * <code>
   * $query->filterByLinkNotes('fooValue');   // WHERE link_notes = 'fooValue'
   * $query->filterByLinkNotes('%fooValue%'); // WHERE link_notes LIKE '%fooValue%'
   * </code>
   *
   * @param     string $linkNotes The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpLinkQuery The current query, for fluid interface
   */
  public function filterByLinkNotes($linkNotes = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($linkNotes))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $linkNotes))
      {
        $linkNotes = str_replace('*', '%', $linkNotes);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpLinkPeer::LINK_NOTES, $linkNotes, $comparison);
  }

  /**
   * Filter the query on the link_rss column
   *
   * Example usage:
   * <code>
   * $query->filterByLinkRss('fooValue');   // WHERE link_rss = 'fooValue'
   * $query->filterByLinkRss('%fooValue%'); // WHERE link_rss LIKE '%fooValue%'
   * </code>
   *
   * @param     string $linkRss The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpLinkQuery The current query, for fluid interface
   */
  public function filterByLinkRss($linkRss = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($linkRss))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $linkRss))
      {
        $linkRss = str_replace('*', '%', $linkRss);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpLinkPeer::LINK_RSS, $linkRss, $comparison);
  }

  /**
   * Exclude object from result
   *
   * @param     wpLink $wpLink Object to remove from the list of results
   *
   * @return    wpLinkQuery The current query, for fluid interface
   */
  public function prune($wpLink = null)
  {
    if ($wpLink)
    {
      $this->addUsingAlias(wpLinkPeer::LINK_ID, $wpLink->getLinkId(), Criteria::NOT_EQUAL);
    }

    return $this;
  }

}