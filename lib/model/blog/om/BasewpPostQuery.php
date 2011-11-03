<?php


/**
 * Base class that represents a query for the 'wp_posts' table.
 *
 * 
 *
 * @method     wpPostQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     wpPostQuery orderByPostAuthor($order = Criteria::ASC) Order by the post_author column
 * @method     wpPostQuery orderByPostDate($order = Criteria::ASC) Order by the post_date column
 * @method     wpPostQuery orderByPostDateGmt($order = Criteria::ASC) Order by the post_date_gmt column
 * @method     wpPostQuery orderByPostContent($order = Criteria::ASC) Order by the post_content column
 * @method     wpPostQuery orderByPostTitle($order = Criteria::ASC) Order by the post_title column
 * @method     wpPostQuery orderByPostExcerpt($order = Criteria::ASC) Order by the post_excerpt column
 * @method     wpPostQuery orderByPostCategory($order = Criteria::ASC) Order by the post_category column
 * @method     wpPostQuery orderByPostStatus($order = Criteria::ASC) Order by the post_status column
 * @method     wpPostQuery orderByCommentStatus($order = Criteria::ASC) Order by the comment_status column
 * @method     wpPostQuery orderByPingStatus($order = Criteria::ASC) Order by the ping_status column
 * @method     wpPostQuery orderByPostPassword($order = Criteria::ASC) Order by the post_password column
 * @method     wpPostQuery orderByPostName($order = Criteria::ASC) Order by the post_name column
 * @method     wpPostQuery orderByToPing($order = Criteria::ASC) Order by the to_ping column
 * @method     wpPostQuery orderByPinged($order = Criteria::ASC) Order by the pinged column
 * @method     wpPostQuery orderByPostModified($order = Criteria::ASC) Order by the post_modified column
 * @method     wpPostQuery orderByPostModifiedGmt($order = Criteria::ASC) Order by the post_modified_gmt column
 * @method     wpPostQuery orderByPostContentFiltered($order = Criteria::ASC) Order by the post_content_filtered column
 * @method     wpPostQuery orderByPostParent($order = Criteria::ASC) Order by the post_parent column
 * @method     wpPostQuery orderByGuid($order = Criteria::ASC) Order by the guid column
 * @method     wpPostQuery orderByMenuOrder($order = Criteria::ASC) Order by the menu_order column
 * @method     wpPostQuery orderByPostType($order = Criteria::ASC) Order by the post_type column
 * @method     wpPostQuery orderByPostMimeType($order = Criteria::ASC) Order by the post_mime_type column
 * @method     wpPostQuery orderByCommentCount($order = Criteria::ASC) Order by the comment_count column
 *
 * @method     wpPostQuery groupById() Group by the id column
 * @method     wpPostQuery groupByPostAuthor() Group by the post_author column
 * @method     wpPostQuery groupByPostDate() Group by the post_date column
 * @method     wpPostQuery groupByPostDateGmt() Group by the post_date_gmt column
 * @method     wpPostQuery groupByPostContent() Group by the post_content column
 * @method     wpPostQuery groupByPostTitle() Group by the post_title column
 * @method     wpPostQuery groupByPostExcerpt() Group by the post_excerpt column
 * @method     wpPostQuery groupByPostCategory() Group by the post_category column
 * @method     wpPostQuery groupByPostStatus() Group by the post_status column
 * @method     wpPostQuery groupByCommentStatus() Group by the comment_status column
 * @method     wpPostQuery groupByPingStatus() Group by the ping_status column
 * @method     wpPostQuery groupByPostPassword() Group by the post_password column
 * @method     wpPostQuery groupByPostName() Group by the post_name column
 * @method     wpPostQuery groupByToPing() Group by the to_ping column
 * @method     wpPostQuery groupByPinged() Group by the pinged column
 * @method     wpPostQuery groupByPostModified() Group by the post_modified column
 * @method     wpPostQuery groupByPostModifiedGmt() Group by the post_modified_gmt column
 * @method     wpPostQuery groupByPostContentFiltered() Group by the post_content_filtered column
 * @method     wpPostQuery groupByPostParent() Group by the post_parent column
 * @method     wpPostQuery groupByGuid() Group by the guid column
 * @method     wpPostQuery groupByMenuOrder() Group by the menu_order column
 * @method     wpPostQuery groupByPostType() Group by the post_type column
 * @method     wpPostQuery groupByPostMimeType() Group by the post_mime_type column
 * @method     wpPostQuery groupByCommentCount() Group by the comment_count column
 *
 * @method     wpPostQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     wpPostQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     wpPostQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     wpPostQuery leftJoinwpUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the wpUser relation
 * @method     wpPostQuery rightJoinwpUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the wpUser relation
 * @method     wpPostQuery innerJoinwpUser($relationAlias = null) Adds a INNER JOIN clause to the query using the wpUser relation
 *
 * @method     wpPostQuery leftJoinwpPostMeta($relationAlias = null) Adds a LEFT JOIN clause to the query using the wpPostMeta relation
 * @method     wpPostQuery rightJoinwpPostMeta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the wpPostMeta relation
 * @method     wpPostQuery innerJoinwpPostMeta($relationAlias = null) Adds a INNER JOIN clause to the query using the wpPostMeta relation
 *
 * @method     wpPost findOne(PropelPDO $con = null) Return the first wpPost matching the query
 * @method     wpPost findOneOrCreate(PropelPDO $con = null) Return the first wpPost matching the query, or a new wpPost object populated from the query conditions when no match is found
 *
 * @method     wpPost findOneById(int $id) Return the first wpPost filtered by the id column
 * @method     wpPost findOneByPostAuthor(int $post_author) Return the first wpPost filtered by the post_author column
 * @method     wpPost findOneByPostDate(string $post_date) Return the first wpPost filtered by the post_date column
 * @method     wpPost findOneByPostDateGmt(string $post_date_gmt) Return the first wpPost filtered by the post_date_gmt column
 * @method     wpPost findOneByPostContent(string $post_content) Return the first wpPost filtered by the post_content column
 * @method     wpPost findOneByPostTitle(string $post_title) Return the first wpPost filtered by the post_title column
 * @method     wpPost findOneByPostExcerpt(string $post_excerpt) Return the first wpPost filtered by the post_excerpt column
 * @method     wpPost findOneByPostCategory(int $post_category) Return the first wpPost filtered by the post_category column
 * @method     wpPost findOneByPostStatus(string $post_status) Return the first wpPost filtered by the post_status column
 * @method     wpPost findOneByCommentStatus(string $comment_status) Return the first wpPost filtered by the comment_status column
 * @method     wpPost findOneByPingStatus(string $ping_status) Return the first wpPost filtered by the ping_status column
 * @method     wpPost findOneByPostPassword(string $post_password) Return the first wpPost filtered by the post_password column
 * @method     wpPost findOneByPostName(string $post_name) Return the first wpPost filtered by the post_name column
 * @method     wpPost findOneByToPing(string $to_ping) Return the first wpPost filtered by the to_ping column
 * @method     wpPost findOneByPinged(string $pinged) Return the first wpPost filtered by the pinged column
 * @method     wpPost findOneByPostModified(string $post_modified) Return the first wpPost filtered by the post_modified column
 * @method     wpPost findOneByPostModifiedGmt(string $post_modified_gmt) Return the first wpPost filtered by the post_modified_gmt column
 * @method     wpPost findOneByPostContentFiltered(string $post_content_filtered) Return the first wpPost filtered by the post_content_filtered column
 * @method     wpPost findOneByPostParent(int $post_parent) Return the first wpPost filtered by the post_parent column
 * @method     wpPost findOneByGuid(string $guid) Return the first wpPost filtered by the guid column
 * @method     wpPost findOneByMenuOrder(int $menu_order) Return the first wpPost filtered by the menu_order column
 * @method     wpPost findOneByPostType(string $post_type) Return the first wpPost filtered by the post_type column
 * @method     wpPost findOneByPostMimeType(string $post_mime_type) Return the first wpPost filtered by the post_mime_type column
 * @method     wpPost findOneByCommentCount(int $comment_count) Return the first wpPost filtered by the comment_count column
 *
 * @method     array findById(int $id) Return wpPost objects filtered by the id column
 * @method     array findByPostAuthor(int $post_author) Return wpPost objects filtered by the post_author column
 * @method     array findByPostDate(string $post_date) Return wpPost objects filtered by the post_date column
 * @method     array findByPostDateGmt(string $post_date_gmt) Return wpPost objects filtered by the post_date_gmt column
 * @method     array findByPostContent(string $post_content) Return wpPost objects filtered by the post_content column
 * @method     array findByPostTitle(string $post_title) Return wpPost objects filtered by the post_title column
 * @method     array findByPostExcerpt(string $post_excerpt) Return wpPost objects filtered by the post_excerpt column
 * @method     array findByPostCategory(int $post_category) Return wpPost objects filtered by the post_category column
 * @method     array findByPostStatus(string $post_status) Return wpPost objects filtered by the post_status column
 * @method     array findByCommentStatus(string $comment_status) Return wpPost objects filtered by the comment_status column
 * @method     array findByPingStatus(string $ping_status) Return wpPost objects filtered by the ping_status column
 * @method     array findByPostPassword(string $post_password) Return wpPost objects filtered by the post_password column
 * @method     array findByPostName(string $post_name) Return wpPost objects filtered by the post_name column
 * @method     array findByToPing(string $to_ping) Return wpPost objects filtered by the to_ping column
 * @method     array findByPinged(string $pinged) Return wpPost objects filtered by the pinged column
 * @method     array findByPostModified(string $post_modified) Return wpPost objects filtered by the post_modified column
 * @method     array findByPostModifiedGmt(string $post_modified_gmt) Return wpPost objects filtered by the post_modified_gmt column
 * @method     array findByPostContentFiltered(string $post_content_filtered) Return wpPost objects filtered by the post_content_filtered column
 * @method     array findByPostParent(int $post_parent) Return wpPost objects filtered by the post_parent column
 * @method     array findByGuid(string $guid) Return wpPost objects filtered by the guid column
 * @method     array findByMenuOrder(int $menu_order) Return wpPost objects filtered by the menu_order column
 * @method     array findByPostType(string $post_type) Return wpPost objects filtered by the post_type column
 * @method     array findByPostMimeType(string $post_mime_type) Return wpPost objects filtered by the post_mime_type column
 * @method     array findByCommentCount(int $comment_count) Return wpPost objects filtered by the comment_count column
 *
 * @package    propel.generator.lib.model.blog.om
 */
abstract class BasewpPostQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BasewpPostQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'blog', $modelName = 'wpPost', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new wpPostQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    wpPostQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof wpPostQuery)
    {
      return $criteria;
    }
    $query = new wpPostQuery();
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
   * @return    wpPost|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = wpPostPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(wpPostPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(wpPostPeer::ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the id column
   * 
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(wpPostPeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the post_author column
   * 
   * @param     int|array $postAuthor The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByPostAuthor($postAuthor = null, $comparison = null)
  {
    if (is_array($postAuthor))
    {
      $useMinMax = false;
      if (isset($postAuthor['min']))
      {
        $this->addUsingAlias(wpPostPeer::POST_AUTHOR, $postAuthor['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($postAuthor['max']))
      {
        $this->addUsingAlias(wpPostPeer::POST_AUTHOR, $postAuthor['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpPostPeer::POST_AUTHOR, $postAuthor, $comparison);
  }

  /**
   * Filter the query on the post_date column
   * 
   * @param     string|array $postDate The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByPostDate($postDate = null, $comparison = null)
  {
    if (is_array($postDate))
    {
      $useMinMax = false;
      if (isset($postDate['min']))
      {
        $this->addUsingAlias(wpPostPeer::POST_DATE, $postDate['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($postDate['max']))
      {
        $this->addUsingAlias(wpPostPeer::POST_DATE, $postDate['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpPostPeer::POST_DATE, $postDate, $comparison);
  }

  /**
   * Filter the query on the post_date_gmt column
   * 
   * @param     string|array $postDateGmt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByPostDateGmt($postDateGmt = null, $comparison = null)
  {
    if (is_array($postDateGmt))
    {
      $useMinMax = false;
      if (isset($postDateGmt['min']))
      {
        $this->addUsingAlias(wpPostPeer::POST_DATE_GMT, $postDateGmt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($postDateGmt['max']))
      {
        $this->addUsingAlias(wpPostPeer::POST_DATE_GMT, $postDateGmt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpPostPeer::POST_DATE_GMT, $postDateGmt, $comparison);
  }

  /**
   * Filter the query on the post_content column
   * 
   * @param     string $postContent The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByPostContent($postContent = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($postContent))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $postContent))
      {
        $postContent = str_replace('*', '%', $postContent);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpPostPeer::POST_CONTENT, $postContent, $comparison);
  }

  /**
   * Filter the query on the post_title column
   * 
   * @param     string $postTitle The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByPostTitle($postTitle = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($postTitle))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $postTitle))
      {
        $postTitle = str_replace('*', '%', $postTitle);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpPostPeer::POST_TITLE, $postTitle, $comparison);
  }

  /**
   * Filter the query on the post_excerpt column
   * 
   * @param     string $postExcerpt The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByPostExcerpt($postExcerpt = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($postExcerpt))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $postExcerpt))
      {
        $postExcerpt = str_replace('*', '%', $postExcerpt);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpPostPeer::POST_EXCERPT, $postExcerpt, $comparison);
  }

  /**
   * Filter the query on the post_category column
   * 
   * @param     int|array $postCategory The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByPostCategory($postCategory = null, $comparison = null)
  {
    if (is_array($postCategory))
    {
      $useMinMax = false;
      if (isset($postCategory['min']))
      {
        $this->addUsingAlias(wpPostPeer::POST_CATEGORY, $postCategory['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($postCategory['max']))
      {
        $this->addUsingAlias(wpPostPeer::POST_CATEGORY, $postCategory['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpPostPeer::POST_CATEGORY, $postCategory, $comparison);
  }

  /**
   * Filter the query on the post_status column
   * 
   * @param     string $postStatus The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByPostStatus($postStatus = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($postStatus))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $postStatus))
      {
        $postStatus = str_replace('*', '%', $postStatus);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpPostPeer::POST_STATUS, $postStatus, $comparison);
  }

  /**
   * Filter the query on the comment_status column
   * 
   * @param     string $commentStatus The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByCommentStatus($commentStatus = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($commentStatus))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $commentStatus))
      {
        $commentStatus = str_replace('*', '%', $commentStatus);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpPostPeer::COMMENT_STATUS, $commentStatus, $comparison);
  }

  /**
   * Filter the query on the ping_status column
   * 
   * @param     string $pingStatus The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByPingStatus($pingStatus = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($pingStatus))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $pingStatus))
      {
        $pingStatus = str_replace('*', '%', $pingStatus);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpPostPeer::PING_STATUS, $pingStatus, $comparison);
  }

  /**
   * Filter the query on the post_password column
   * 
   * @param     string $postPassword The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByPostPassword($postPassword = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($postPassword))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $postPassword))
      {
        $postPassword = str_replace('*', '%', $postPassword);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpPostPeer::POST_PASSWORD, $postPassword, $comparison);
  }

  /**
   * Filter the query on the post_name column
   * 
   * @param     string $postName The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByPostName($postName = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($postName))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $postName))
      {
        $postName = str_replace('*', '%', $postName);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpPostPeer::POST_NAME, $postName, $comparison);
  }

  /**
   * Filter the query on the to_ping column
   * 
   * @param     string $toPing The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByToPing($toPing = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($toPing))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $toPing))
      {
        $toPing = str_replace('*', '%', $toPing);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpPostPeer::TO_PING, $toPing, $comparison);
  }

  /**
   * Filter the query on the pinged column
   * 
   * @param     string $pinged The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByPinged($pinged = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($pinged))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $pinged))
      {
        $pinged = str_replace('*', '%', $pinged);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpPostPeer::PINGED, $pinged, $comparison);
  }

  /**
   * Filter the query on the post_modified column
   * 
   * @param     string|array $postModified The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByPostModified($postModified = null, $comparison = null)
  {
    if (is_array($postModified))
    {
      $useMinMax = false;
      if (isset($postModified['min']))
      {
        $this->addUsingAlias(wpPostPeer::POST_MODIFIED, $postModified['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($postModified['max']))
      {
        $this->addUsingAlias(wpPostPeer::POST_MODIFIED, $postModified['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpPostPeer::POST_MODIFIED, $postModified, $comparison);
  }

  /**
   * Filter the query on the post_modified_gmt column
   * 
   * @param     string|array $postModifiedGmt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByPostModifiedGmt($postModifiedGmt = null, $comparison = null)
  {
    if (is_array($postModifiedGmt))
    {
      $useMinMax = false;
      if (isset($postModifiedGmt['min']))
      {
        $this->addUsingAlias(wpPostPeer::POST_MODIFIED_GMT, $postModifiedGmt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($postModifiedGmt['max']))
      {
        $this->addUsingAlias(wpPostPeer::POST_MODIFIED_GMT, $postModifiedGmt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpPostPeer::POST_MODIFIED_GMT, $postModifiedGmt, $comparison);
  }

  /**
   * Filter the query on the post_content_filtered column
   * 
   * @param     string $postContentFiltered The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByPostContentFiltered($postContentFiltered = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($postContentFiltered))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $postContentFiltered))
      {
        $postContentFiltered = str_replace('*', '%', $postContentFiltered);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpPostPeer::POST_CONTENT_FILTERED, $postContentFiltered, $comparison);
  }

  /**
   * Filter the query on the post_parent column
   * 
   * @param     int|array $postParent The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByPostParent($postParent = null, $comparison = null)
  {
    if (is_array($postParent))
    {
      $useMinMax = false;
      if (isset($postParent['min']))
      {
        $this->addUsingAlias(wpPostPeer::POST_PARENT, $postParent['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($postParent['max']))
      {
        $this->addUsingAlias(wpPostPeer::POST_PARENT, $postParent['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpPostPeer::POST_PARENT, $postParent, $comparison);
  }

  /**
   * Filter the query on the guid column
   * 
   * @param     string $guid The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByGuid($guid = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($guid))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $guid))
      {
        $guid = str_replace('*', '%', $guid);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpPostPeer::GUID, $guid, $comparison);
  }

  /**
   * Filter the query on the menu_order column
   * 
   * @param     int|array $menuOrder The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByMenuOrder($menuOrder = null, $comparison = null)
  {
    if (is_array($menuOrder))
    {
      $useMinMax = false;
      if (isset($menuOrder['min']))
      {
        $this->addUsingAlias(wpPostPeer::MENU_ORDER, $menuOrder['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($menuOrder['max']))
      {
        $this->addUsingAlias(wpPostPeer::MENU_ORDER, $menuOrder['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpPostPeer::MENU_ORDER, $menuOrder, $comparison);
  }

  /**
   * Filter the query on the post_type column
   * 
   * @param     string $postType The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByPostType($postType = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($postType))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $postType))
      {
        $postType = str_replace('*', '%', $postType);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpPostPeer::POST_TYPE, $postType, $comparison);
  }

  /**
   * Filter the query on the post_mime_type column
   * 
   * @param     string $postMimeType The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByPostMimeType($postMimeType = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($postMimeType))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $postMimeType))
      {
        $postMimeType = str_replace('*', '%', $postMimeType);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpPostPeer::POST_MIME_TYPE, $postMimeType, $comparison);
  }

  /**
   * Filter the query on the comment_count column
   * 
   * @param     int|array $commentCount The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterByCommentCount($commentCount = null, $comparison = null)
  {
    if (is_array($commentCount))
    {
      $useMinMax = false;
      if (isset($commentCount['min']))
      {
        $this->addUsingAlias(wpPostPeer::COMMENT_COUNT, $commentCount['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($commentCount['max']))
      {
        $this->addUsingAlias(wpPostPeer::COMMENT_COUNT, $commentCount['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpPostPeer::COMMENT_COUNT, $commentCount, $comparison);
  }

  /**
   * Filter the query by a related wpUser object
   *
   * @param     wpUser $wpUser  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterBywpUser($wpUser, $comparison = null)
  {
    return $this
      ->addUsingAlias(wpPostPeer::POST_AUTHOR, $wpUser->getId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the wpUser relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    wpPostQuery The current query, for fluid interface
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
   * Filter the query by a related wpPostMeta object
   *
   * @param     wpPostMeta $wpPostMeta  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function filterBywpPostMeta($wpPostMeta, $comparison = null)
  {
    return $this
      ->addUsingAlias(wpPostPeer::ID, $wpPostMeta->getPostId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the wpPostMeta relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function joinwpPostMeta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('wpPostMeta');
    
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
      $this->addJoinObject($join, 'wpPostMeta');
    }
    
    return $this;
  }

  /**
   * Use the wpPostMeta relation wpPostMeta object
   *
   * @see       useQuery()
   * 
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    wpPostMetaQuery A secondary query class using the current class as primary query
   */
  public function usewpPostMetaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinwpPostMeta($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'wpPostMeta', 'wpPostMetaQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     wpPost $wpPost Object to remove from the list of results
   *
   * @return    wpPostQuery The current query, for fluid interface
   */
  public function prune($wpPost = null)
  {
    if ($wpPost)
    {
      $this->addUsingAlias(wpPostPeer::ID, $wpPost->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

}
