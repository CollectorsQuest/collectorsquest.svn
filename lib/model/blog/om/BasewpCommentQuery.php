<?php


/**
 * Base class that represents a query for the 'wp_comments' table.
 *
 * 
 *
 * @method     wpCommentQuery orderByCommentId($order = Criteria::ASC) Order by the comment_id column
 * @method     wpCommentQuery orderByCommentPostId($order = Criteria::ASC) Order by the comment_post_id column
 * @method     wpCommentQuery orderByCommentAuthor($order = Criteria::ASC) Order by the comment_author column
 * @method     wpCommentQuery orderByCommentAuthorEmail($order = Criteria::ASC) Order by the comment_author_email column
 * @method     wpCommentQuery orderByCommentAuthorUrl($order = Criteria::ASC) Order by the comment_author_url column
 * @method     wpCommentQuery orderByCommentAuthorIp($order = Criteria::ASC) Order by the comment_author_IP column
 * @method     wpCommentQuery orderByCommentDate($order = Criteria::ASC) Order by the comment_date column
 * @method     wpCommentQuery orderByCommentDateGmt($order = Criteria::ASC) Order by the comment_date_gmt column
 * @method     wpCommentQuery orderByCommentContent($order = Criteria::ASC) Order by the comment_content column
 * @method     wpCommentQuery orderByCommentKarma($order = Criteria::ASC) Order by the comment_karma column
 * @method     wpCommentQuery orderByCommentApproved($order = Criteria::ASC) Order by the comment_approved column
 * @method     wpCommentQuery orderByCommentAgent($order = Criteria::ASC) Order by the comment_agent column
 * @method     wpCommentQuery orderByCommentType($order = Criteria::ASC) Order by the comment_type column
 * @method     wpCommentQuery orderByCommentParent($order = Criteria::ASC) Order by the comment_parent column
 * @method     wpCommentQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 *
 * @method     wpCommentQuery groupByCommentId() Group by the comment_id column
 * @method     wpCommentQuery groupByCommentPostId() Group by the comment_post_id column
 * @method     wpCommentQuery groupByCommentAuthor() Group by the comment_author column
 * @method     wpCommentQuery groupByCommentAuthorEmail() Group by the comment_author_email column
 * @method     wpCommentQuery groupByCommentAuthorUrl() Group by the comment_author_url column
 * @method     wpCommentQuery groupByCommentAuthorIp() Group by the comment_author_IP column
 * @method     wpCommentQuery groupByCommentDate() Group by the comment_date column
 * @method     wpCommentQuery groupByCommentDateGmt() Group by the comment_date_gmt column
 * @method     wpCommentQuery groupByCommentContent() Group by the comment_content column
 * @method     wpCommentQuery groupByCommentKarma() Group by the comment_karma column
 * @method     wpCommentQuery groupByCommentApproved() Group by the comment_approved column
 * @method     wpCommentQuery groupByCommentAgent() Group by the comment_agent column
 * @method     wpCommentQuery groupByCommentType() Group by the comment_type column
 * @method     wpCommentQuery groupByCommentParent() Group by the comment_parent column
 * @method     wpCommentQuery groupByUserId() Group by the user_id column
 *
 * @method     wpCommentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     wpCommentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     wpCommentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     wpCommentQuery leftJoinwpPost($relationAlias = null) Adds a LEFT JOIN clause to the query using the wpPost relation
 * @method     wpCommentQuery rightJoinwpPost($relationAlias = null) Adds a RIGHT JOIN clause to the query using the wpPost relation
 * @method     wpCommentQuery innerJoinwpPost($relationAlias = null) Adds a INNER JOIN clause to the query using the wpPost relation
 *
 * @method     wpCommentQuery leftJoinwpCommentRelatedByCommentParent($relationAlias = null) Adds a LEFT JOIN clause to the query using the wpCommentRelatedByCommentParent relation
 * @method     wpCommentQuery rightJoinwpCommentRelatedByCommentParent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the wpCommentRelatedByCommentParent relation
 * @method     wpCommentQuery innerJoinwpCommentRelatedByCommentParent($relationAlias = null) Adds a INNER JOIN clause to the query using the wpCommentRelatedByCommentParent relation
 *
 * @method     wpCommentQuery leftJoinwpUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the wpUser relation
 * @method     wpCommentQuery rightJoinwpUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the wpUser relation
 * @method     wpCommentQuery innerJoinwpUser($relationAlias = null) Adds a INNER JOIN clause to the query using the wpUser relation
 *
 * @method     wpCommentQuery leftJoinwpCommentRelatedByCommentId($relationAlias = null) Adds a LEFT JOIN clause to the query using the wpCommentRelatedByCommentId relation
 * @method     wpCommentQuery rightJoinwpCommentRelatedByCommentId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the wpCommentRelatedByCommentId relation
 * @method     wpCommentQuery innerJoinwpCommentRelatedByCommentId($relationAlias = null) Adds a INNER JOIN clause to the query using the wpCommentRelatedByCommentId relation
 *
 * @method     wpCommentQuery leftJoinwpCommentMeta($relationAlias = null) Adds a LEFT JOIN clause to the query using the wpCommentMeta relation
 * @method     wpCommentQuery rightJoinwpCommentMeta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the wpCommentMeta relation
 * @method     wpCommentQuery innerJoinwpCommentMeta($relationAlias = null) Adds a INNER JOIN clause to the query using the wpCommentMeta relation
 *
 * @method     wpComment findOne(PropelPDO $con = null) Return the first wpComment matching the query
 * @method     wpComment findOneOrCreate(PropelPDO $con = null) Return the first wpComment matching the query, or a new wpComment object populated from the query conditions when no match is found
 *
 * @method     wpComment findOneByCommentId(int $comment_id) Return the first wpComment filtered by the comment_id column
 * @method     wpComment findOneByCommentPostId(int $comment_post_id) Return the first wpComment filtered by the comment_post_id column
 * @method     wpComment findOneByCommentAuthor(string $comment_author) Return the first wpComment filtered by the comment_author column
 * @method     wpComment findOneByCommentAuthorEmail(string $comment_author_email) Return the first wpComment filtered by the comment_author_email column
 * @method     wpComment findOneByCommentAuthorUrl(string $comment_author_url) Return the first wpComment filtered by the comment_author_url column
 * @method     wpComment findOneByCommentAuthorIp(string $comment_author_IP) Return the first wpComment filtered by the comment_author_IP column
 * @method     wpComment findOneByCommentDate(string $comment_date) Return the first wpComment filtered by the comment_date column
 * @method     wpComment findOneByCommentDateGmt(string $comment_date_gmt) Return the first wpComment filtered by the comment_date_gmt column
 * @method     wpComment findOneByCommentContent(string $comment_content) Return the first wpComment filtered by the comment_content column
 * @method     wpComment findOneByCommentKarma(int $comment_karma) Return the first wpComment filtered by the comment_karma column
 * @method     wpComment findOneByCommentApproved(string $comment_approved) Return the first wpComment filtered by the comment_approved column
 * @method     wpComment findOneByCommentAgent(string $comment_agent) Return the first wpComment filtered by the comment_agent column
 * @method     wpComment findOneByCommentType(string $comment_type) Return the first wpComment filtered by the comment_type column
 * @method     wpComment findOneByCommentParent(int $comment_parent) Return the first wpComment filtered by the comment_parent column
 * @method     wpComment findOneByUserId(int $user_id) Return the first wpComment filtered by the user_id column
 *
 * @method     array findByCommentId(int $comment_id) Return wpComment objects filtered by the comment_id column
 * @method     array findByCommentPostId(int $comment_post_id) Return wpComment objects filtered by the comment_post_id column
 * @method     array findByCommentAuthor(string $comment_author) Return wpComment objects filtered by the comment_author column
 * @method     array findByCommentAuthorEmail(string $comment_author_email) Return wpComment objects filtered by the comment_author_email column
 * @method     array findByCommentAuthorUrl(string $comment_author_url) Return wpComment objects filtered by the comment_author_url column
 * @method     array findByCommentAuthorIp(string $comment_author_IP) Return wpComment objects filtered by the comment_author_IP column
 * @method     array findByCommentDate(string $comment_date) Return wpComment objects filtered by the comment_date column
 * @method     array findByCommentDateGmt(string $comment_date_gmt) Return wpComment objects filtered by the comment_date_gmt column
 * @method     array findByCommentContent(string $comment_content) Return wpComment objects filtered by the comment_content column
 * @method     array findByCommentKarma(int $comment_karma) Return wpComment objects filtered by the comment_karma column
 * @method     array findByCommentApproved(string $comment_approved) Return wpComment objects filtered by the comment_approved column
 * @method     array findByCommentAgent(string $comment_agent) Return wpComment objects filtered by the comment_agent column
 * @method     array findByCommentType(string $comment_type) Return wpComment objects filtered by the comment_type column
 * @method     array findByCommentParent(int $comment_parent) Return wpComment objects filtered by the comment_parent column
 * @method     array findByUserId(int $user_id) Return wpComment objects filtered by the user_id column
 *
 * @package    propel.generator.lib.model.blog.om
 */
abstract class BasewpCommentQuery extends ModelCriteria
{
  
  /**
   * Initializes internal state of BasewpCommentQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'blog', $modelName = 'wpComment', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new wpCommentQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    wpCommentQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof wpCommentQuery)
    {
      return $criteria;
    }
    $query = new wpCommentQuery();
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
   * @return    wpComment|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = wpCommentPeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(wpCommentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    wpComment A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `COMMENT_ID`, `COMMENT_POST_ID`, `COMMENT_AUTHOR`, `COMMENT_AUTHOR_EMAIL`, `COMMENT_AUTHOR_URL`, `COMMENT_AUTHOR_IP`, `COMMENT_DATE`, `COMMENT_DATE_GMT`, `COMMENT_CONTENT`, `COMMENT_KARMA`, `COMMENT_APPROVED`, `COMMENT_AGENT`, `COMMENT_TYPE`, `COMMENT_PARENT`, `USER_ID` FROM `wp_comments` WHERE `COMMENT_ID` = :p0';
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
      $obj = new wpComment();
      $obj->hydrate($row);
      wpCommentPeer::addInstanceToPool($obj, (string) $row[0]);
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
   * @return    wpComment|array|mixed the result, formatted by the current formatter
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
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(wpCommentPeer::COMMENT_ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(wpCommentPeer::COMMENT_ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the comment_id column
   *
   * Example usage:
   * <code>
   * $query->filterByCommentId(1234); // WHERE comment_id = 1234
   * $query->filterByCommentId(array(12, 34)); // WHERE comment_id IN (12, 34)
   * $query->filterByCommentId(array('min' => 12)); // WHERE comment_id > 12
   * </code>
   *
   * @param     mixed $commentId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function filterByCommentId($commentId = null, $comparison = null)
  {
    if (is_array($commentId) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(wpCommentPeer::COMMENT_ID, $commentId, $comparison);
  }

  /**
   * Filter the query on the comment_post_id column
   *
   * Example usage:
   * <code>
   * $query->filterByCommentPostId(1234); // WHERE comment_post_id = 1234
   * $query->filterByCommentPostId(array(12, 34)); // WHERE comment_post_id IN (12, 34)
   * $query->filterByCommentPostId(array('min' => 12)); // WHERE comment_post_id > 12
   * </code>
   *
   * @see       filterBywpPost()
   *
   * @param     mixed $commentPostId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function filterByCommentPostId($commentPostId = null, $comparison = null)
  {
    if (is_array($commentPostId))
    {
      $useMinMax = false;
      if (isset($commentPostId['min']))
      {
        $this->addUsingAlias(wpCommentPeer::COMMENT_POST_ID, $commentPostId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($commentPostId['max']))
      {
        $this->addUsingAlias(wpCommentPeer::COMMENT_POST_ID, $commentPostId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpCommentPeer::COMMENT_POST_ID, $commentPostId, $comparison);
  }

  /**
   * Filter the query on the comment_author column
   *
   * Example usage:
   * <code>
   * $query->filterByCommentAuthor('fooValue');   // WHERE comment_author = 'fooValue'
   * $query->filterByCommentAuthor('%fooValue%'); // WHERE comment_author LIKE '%fooValue%'
   * </code>
   *
   * @param     string $commentAuthor The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function filterByCommentAuthor($commentAuthor = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($commentAuthor))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $commentAuthor))
      {
        $commentAuthor = str_replace('*', '%', $commentAuthor);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpCommentPeer::COMMENT_AUTHOR, $commentAuthor, $comparison);
  }

  /**
   * Filter the query on the comment_author_email column
   *
   * Example usage:
   * <code>
   * $query->filterByCommentAuthorEmail('fooValue');   // WHERE comment_author_email = 'fooValue'
   * $query->filterByCommentAuthorEmail('%fooValue%'); // WHERE comment_author_email LIKE '%fooValue%'
   * </code>
   *
   * @param     string $commentAuthorEmail The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function filterByCommentAuthorEmail($commentAuthorEmail = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($commentAuthorEmail))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $commentAuthorEmail))
      {
        $commentAuthorEmail = str_replace('*', '%', $commentAuthorEmail);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpCommentPeer::COMMENT_AUTHOR_EMAIL, $commentAuthorEmail, $comparison);
  }

  /**
   * Filter the query on the comment_author_url column
   *
   * Example usage:
   * <code>
   * $query->filterByCommentAuthorUrl('fooValue');   // WHERE comment_author_url = 'fooValue'
   * $query->filterByCommentAuthorUrl('%fooValue%'); // WHERE comment_author_url LIKE '%fooValue%'
   * </code>
   *
   * @param     string $commentAuthorUrl The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function filterByCommentAuthorUrl($commentAuthorUrl = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($commentAuthorUrl))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $commentAuthorUrl))
      {
        $commentAuthorUrl = str_replace('*', '%', $commentAuthorUrl);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpCommentPeer::COMMENT_AUTHOR_URL, $commentAuthorUrl, $comparison);
  }

  /**
   * Filter the query on the comment_author_IP column
   *
   * Example usage:
   * <code>
   * $query->filterByCommentAuthorIp('fooValue');   // WHERE comment_author_IP = 'fooValue'
   * $query->filterByCommentAuthorIp('%fooValue%'); // WHERE comment_author_IP LIKE '%fooValue%'
   * </code>
   *
   * @param     string $commentAuthorIp The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function filterByCommentAuthorIp($commentAuthorIp = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($commentAuthorIp))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $commentAuthorIp))
      {
        $commentAuthorIp = str_replace('*', '%', $commentAuthorIp);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpCommentPeer::COMMENT_AUTHOR_IP, $commentAuthorIp, $comparison);
  }

  /**
   * Filter the query on the comment_date column
   *
   * Example usage:
   * <code>
   * $query->filterByCommentDate('2011-03-14'); // WHERE comment_date = '2011-03-14'
   * $query->filterByCommentDate('now'); // WHERE comment_date = '2011-03-14'
   * $query->filterByCommentDate(array('max' => 'yesterday')); // WHERE comment_date > '2011-03-13'
   * </code>
   *
   * @param     mixed $commentDate The value to use as filter.
   *              Values can be integers (unix timestamps), DateTime objects, or strings.
   *              Empty strings are treated as NULL.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function filterByCommentDate($commentDate = null, $comparison = null)
  {
    if (is_array($commentDate))
    {
      $useMinMax = false;
      if (isset($commentDate['min']))
      {
        $this->addUsingAlias(wpCommentPeer::COMMENT_DATE, $commentDate['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($commentDate['max']))
      {
        $this->addUsingAlias(wpCommentPeer::COMMENT_DATE, $commentDate['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpCommentPeer::COMMENT_DATE, $commentDate, $comparison);
  }

  /**
   * Filter the query on the comment_date_gmt column
   *
   * Example usage:
   * <code>
   * $query->filterByCommentDateGmt('2011-03-14'); // WHERE comment_date_gmt = '2011-03-14'
   * $query->filterByCommentDateGmt('now'); // WHERE comment_date_gmt = '2011-03-14'
   * $query->filterByCommentDateGmt(array('max' => 'yesterday')); // WHERE comment_date_gmt > '2011-03-13'
   * </code>
   *
   * @param     mixed $commentDateGmt The value to use as filter.
   *              Values can be integers (unix timestamps), DateTime objects, or strings.
   *              Empty strings are treated as NULL.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function filterByCommentDateGmt($commentDateGmt = null, $comparison = null)
  {
    if (is_array($commentDateGmt))
    {
      $useMinMax = false;
      if (isset($commentDateGmt['min']))
      {
        $this->addUsingAlias(wpCommentPeer::COMMENT_DATE_GMT, $commentDateGmt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($commentDateGmt['max']))
      {
        $this->addUsingAlias(wpCommentPeer::COMMENT_DATE_GMT, $commentDateGmt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpCommentPeer::COMMENT_DATE_GMT, $commentDateGmt, $comparison);
  }

  /**
   * Filter the query on the comment_content column
   *
   * Example usage:
   * <code>
   * $query->filterByCommentContent('fooValue');   // WHERE comment_content = 'fooValue'
   * $query->filterByCommentContent('%fooValue%'); // WHERE comment_content LIKE '%fooValue%'
   * </code>
   *
   * @param     string $commentContent The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function filterByCommentContent($commentContent = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($commentContent))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $commentContent))
      {
        $commentContent = str_replace('*', '%', $commentContent);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpCommentPeer::COMMENT_CONTENT, $commentContent, $comparison);
  }

  /**
   * Filter the query on the comment_karma column
   *
   * Example usage:
   * <code>
   * $query->filterByCommentKarma(1234); // WHERE comment_karma = 1234
   * $query->filterByCommentKarma(array(12, 34)); // WHERE comment_karma IN (12, 34)
   * $query->filterByCommentKarma(array('min' => 12)); // WHERE comment_karma > 12
   * </code>
   *
   * @param     mixed $commentKarma The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function filterByCommentKarma($commentKarma = null, $comparison = null)
  {
    if (is_array($commentKarma))
    {
      $useMinMax = false;
      if (isset($commentKarma['min']))
      {
        $this->addUsingAlias(wpCommentPeer::COMMENT_KARMA, $commentKarma['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($commentKarma['max']))
      {
        $this->addUsingAlias(wpCommentPeer::COMMENT_KARMA, $commentKarma['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpCommentPeer::COMMENT_KARMA, $commentKarma, $comparison);
  }

  /**
   * Filter the query on the comment_approved column
   *
   * Example usage:
   * <code>
   * $query->filterByCommentApproved('fooValue');   // WHERE comment_approved = 'fooValue'
   * $query->filterByCommentApproved('%fooValue%'); // WHERE comment_approved LIKE '%fooValue%'
   * </code>
   *
   * @param     string $commentApproved The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function filterByCommentApproved($commentApproved = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($commentApproved))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $commentApproved))
      {
        $commentApproved = str_replace('*', '%', $commentApproved);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpCommentPeer::COMMENT_APPROVED, $commentApproved, $comparison);
  }

  /**
   * Filter the query on the comment_agent column
   *
   * Example usage:
   * <code>
   * $query->filterByCommentAgent('fooValue');   // WHERE comment_agent = 'fooValue'
   * $query->filterByCommentAgent('%fooValue%'); // WHERE comment_agent LIKE '%fooValue%'
   * </code>
   *
   * @param     string $commentAgent The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function filterByCommentAgent($commentAgent = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($commentAgent))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $commentAgent))
      {
        $commentAgent = str_replace('*', '%', $commentAgent);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpCommentPeer::COMMENT_AGENT, $commentAgent, $comparison);
  }

  /**
   * Filter the query on the comment_type column
   *
   * Example usage:
   * <code>
   * $query->filterByCommentType('fooValue');   // WHERE comment_type = 'fooValue'
   * $query->filterByCommentType('%fooValue%'); // WHERE comment_type LIKE '%fooValue%'
   * </code>
   *
   * @param     string $commentType The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function filterByCommentType($commentType = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($commentType))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $commentType))
      {
        $commentType = str_replace('*', '%', $commentType);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpCommentPeer::COMMENT_TYPE, $commentType, $comparison);
  }

  /**
   * Filter the query on the comment_parent column
   *
   * Example usage:
   * <code>
   * $query->filterByCommentParent(1234); // WHERE comment_parent = 1234
   * $query->filterByCommentParent(array(12, 34)); // WHERE comment_parent IN (12, 34)
   * $query->filterByCommentParent(array('min' => 12)); // WHERE comment_parent > 12
   * </code>
   *
   * @see       filterBywpCommentRelatedByCommentParent()
   *
   * @param     mixed $commentParent The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function filterByCommentParent($commentParent = null, $comparison = null)
  {
    if (is_array($commentParent))
    {
      $useMinMax = false;
      if (isset($commentParent['min']))
      {
        $this->addUsingAlias(wpCommentPeer::COMMENT_PARENT, $commentParent['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($commentParent['max']))
      {
        $this->addUsingAlias(wpCommentPeer::COMMENT_PARENT, $commentParent['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpCommentPeer::COMMENT_PARENT, $commentParent, $comparison);
  }

  /**
   * Filter the query on the user_id column
   *
   * Example usage:
   * <code>
   * $query->filterByUserId(1234); // WHERE user_id = 1234
   * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
   * $query->filterByUserId(array('min' => 12)); // WHERE user_id > 12
   * </code>
   *
   * @see       filterBywpUser()
   *
   * @param     mixed $userId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function filterByUserId($userId = null, $comparison = null)
  {
    if (is_array($userId))
    {
      $useMinMax = false;
      if (isset($userId['min']))
      {
        $this->addUsingAlias(wpCommentPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($userId['max']))
      {
        $this->addUsingAlias(wpCommentPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpCommentPeer::USER_ID, $userId, $comparison);
  }

  /**
   * Filter the query by a related wpPost object
   *
   * @param     wpPost|PropelCollection $wpPost The related object(s) to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function filterBywpPost($wpPost, $comparison = null)
  {
    if ($wpPost instanceof wpPost)
    {
      return $this
        ->addUsingAlias(wpCommentPeer::COMMENT_POST_ID, $wpPost->getId(), $comparison);
    }
    elseif ($wpPost instanceof PropelCollection)
    {
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
      return $this
        ->addUsingAlias(wpCommentPeer::COMMENT_POST_ID, $wpPost->toKeyValue('PrimaryKey', 'Id'), $comparison);
    }
    else
    {
      throw new PropelException('filterBywpPost() only accepts arguments of type wpPost or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the wpPost relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function joinwpPost($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('wpPost');

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
      $this->addJoinObject($join, 'wpPost');
    }

    return $this;
  }

  /**
   * Use the wpPost relation wpPost object
   *
   * @see       useQuery()
   *
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    wpPostQuery A secondary query class using the current class as primary query
   */
  public function usewpPostQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinwpPost($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'wpPost', 'wpPostQuery');
  }

  /**
   * Filter the query by a related wpComment object
   *
   * @param     wpComment|PropelCollection $wpComment The related object(s) to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function filterBywpCommentRelatedByCommentParent($wpComment, $comparison = null)
  {
    if ($wpComment instanceof wpComment)
    {
      return $this
        ->addUsingAlias(wpCommentPeer::COMMENT_PARENT, $wpComment->getCommentId(), $comparison);
    }
    elseif ($wpComment instanceof PropelCollection)
    {
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
      return $this
        ->addUsingAlias(wpCommentPeer::COMMENT_PARENT, $wpComment->toKeyValue('PrimaryKey', 'CommentId'), $comparison);
    }
    else
    {
      throw new PropelException('filterBywpCommentRelatedByCommentParent() only accepts arguments of type wpComment or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the wpCommentRelatedByCommentParent relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function joinwpCommentRelatedByCommentParent($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('wpCommentRelatedByCommentParent');

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
      $this->addJoinObject($join, 'wpCommentRelatedByCommentParent');
    }

    return $this;
  }

  /**
   * Use the wpCommentRelatedByCommentParent relation wpComment object
   *
   * @see       useQuery()
   *
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    wpCommentQuery A secondary query class using the current class as primary query
   */
  public function usewpCommentRelatedByCommentParentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinwpCommentRelatedByCommentParent($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'wpCommentRelatedByCommentParent', 'wpCommentQuery');
  }

  /**
   * Filter the query by a related wpUser object
   *
   * @param     wpUser|PropelCollection $wpUser The related object(s) to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function filterBywpUser($wpUser, $comparison = null)
  {
    if ($wpUser instanceof wpUser)
    {
      return $this
        ->addUsingAlias(wpCommentPeer::USER_ID, $wpUser->getId(), $comparison);
    }
    elseif ($wpUser instanceof PropelCollection)
    {
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
      return $this
        ->addUsingAlias(wpCommentPeer::USER_ID, $wpUser->toKeyValue('PrimaryKey', 'Id'), $comparison);
    }
    else
    {
      throw new PropelException('filterBywpUser() only accepts arguments of type wpUser or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the wpUser relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function joinwpUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('wpUser');

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
      $this->addJoinObject($join, 'wpUser');
    }

    return $this;
  }

  /**
   * Use the wpUser relation wpUser object
   *
   * @see       useQuery()
   *
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    wpUserQuery A secondary query class using the current class as primary query
   */
  public function usewpUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinwpUser($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'wpUser', 'wpUserQuery');
  }

  /**
   * Filter the query by a related wpComment object
   *
   * @param     wpComment $wpComment  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function filterBywpCommentRelatedByCommentId($wpComment, $comparison = null)
  {
    if ($wpComment instanceof wpComment)
    {
      return $this
        ->addUsingAlias(wpCommentPeer::COMMENT_ID, $wpComment->getCommentParent(), $comparison);
    }
    elseif ($wpComment instanceof PropelCollection)
    {
      return $this
        ->usewpCommentRelatedByCommentIdQuery()
        ->filterByPrimaryKeys($wpComment->getPrimaryKeys())
        ->endUse();
    }
    else
    {
      throw new PropelException('filterBywpCommentRelatedByCommentId() only accepts arguments of type wpComment or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the wpCommentRelatedByCommentId relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function joinwpCommentRelatedByCommentId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('wpCommentRelatedByCommentId');

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
      $this->addJoinObject($join, 'wpCommentRelatedByCommentId');
    }

    return $this;
  }

  /**
   * Use the wpCommentRelatedByCommentId relation wpComment object
   *
   * @see       useQuery()
   *
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    wpCommentQuery A secondary query class using the current class as primary query
   */
  public function usewpCommentRelatedByCommentIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinwpCommentRelatedByCommentId($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'wpCommentRelatedByCommentId', 'wpCommentQuery');
  }

  /**
   * Filter the query by a related wpCommentMeta object
   *
   * @param     wpCommentMeta $wpCommentMeta  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function filterBywpCommentMeta($wpCommentMeta, $comparison = null)
  {
    if ($wpCommentMeta instanceof wpCommentMeta)
    {
      return $this
        ->addUsingAlias(wpCommentPeer::COMMENT_ID, $wpCommentMeta->getCommentId(), $comparison);
    }
    elseif ($wpCommentMeta instanceof PropelCollection)
    {
      return $this
        ->usewpCommentMetaQuery()
        ->filterByPrimaryKeys($wpCommentMeta->getPrimaryKeys())
        ->endUse();
    }
    else
    {
      throw new PropelException('filterBywpCommentMeta() only accepts arguments of type wpCommentMeta or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the wpCommentMeta relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function joinwpCommentMeta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('wpCommentMeta');

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
      $this->addJoinObject($join, 'wpCommentMeta');
    }

    return $this;
  }

  /**
   * Use the wpCommentMeta relation wpCommentMeta object
   *
   * @see       useQuery()
   *
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    wpCommentMetaQuery A secondary query class using the current class as primary query
   */
  public function usewpCommentMetaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinwpCommentMeta($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'wpCommentMeta', 'wpCommentMetaQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     wpComment $wpComment Object to remove from the list of results
   *
   * @return    wpCommentQuery The current query, for fluid interface
   */
  public function prune($wpComment = null)
  {
    if ($wpComment)
    {
      $this->addUsingAlias(wpCommentPeer::COMMENT_ID, $wpComment->getCommentId(), Criteria::NOT_EQUAL);
    }

    return $this;
  }

}