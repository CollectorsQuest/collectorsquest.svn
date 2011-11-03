<?php


/**
 * Base class that represents a query for the 'wp_comments' table.
 *
 * 
 *
 * @method     wpCommentQuery orderByCommentId($order = Criteria::ASC) Order by the comment_id column
 * @method     wpCommentQuery orderByCommentAuthor($order = Criteria::ASC) Order by the comment_author column
 * @method     wpCommentQuery orderByCommentAuthorEmail($order = Criteria::ASC) Order by the comment_author_email column
 * @method     wpCommentQuery orderByCommentDate($order = Criteria::ASC) Order by the comment_date column
 *
 * @method     wpCommentQuery groupByCommentId() Group by the comment_id column
 * @method     wpCommentQuery groupByCommentAuthor() Group by the comment_author column
 * @method     wpCommentQuery groupByCommentAuthorEmail() Group by the comment_author_email column
 * @method     wpCommentQuery groupByCommentDate() Group by the comment_date column
 *
 * @method     wpCommentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     wpCommentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     wpCommentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     wpComment findOne(PropelPDO $con = null) Return the first wpComment matching the query
 * @method     wpComment findOneOrCreate(PropelPDO $con = null) Return the first wpComment matching the query, or a new wpComment object populated from the query conditions when no match is found
 *
 * @method     wpComment findOneByCommentId(int $comment_id) Return the first wpComment filtered by the comment_id column
 * @method     wpComment findOneByCommentAuthor(string $comment_author) Return the first wpComment filtered by the comment_author column
 * @method     wpComment findOneByCommentAuthorEmail(string $comment_author_email) Return the first wpComment filtered by the comment_author_email column
 * @method     wpComment findOneByCommentDate(string $comment_date) Return the first wpComment filtered by the comment_date column
 *
 * @method     array findByCommentId(int $comment_id) Return wpComment objects filtered by the comment_id column
 * @method     array findByCommentAuthor(string $comment_author) Return wpComment objects filtered by the comment_author column
 * @method     array findByCommentAuthorEmail(string $comment_author_email) Return wpComment objects filtered by the comment_author_email column
 * @method     array findByCommentDate(string $comment_date) Return wpComment objects filtered by the comment_date column
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
   * Find object by primary key
   * Use instance pooling to avoid a database query if the object exists
   * <code>
   * $obj  = $c->findPk(12, $con);
   * </code>
   * @param     mixed $key Primary key to use for the query
   * @param     PropelPDO $con an optional connection object
   *
   * @return    wpComment|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = wpCommentPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @param     int|array $commentId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * Filter the query on the comment_author column
   * 
   * @param     string $commentAuthor The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
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
   * @param     string $commentAuthorEmail The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
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
   * Filter the query on the comment_date column
   * 
   * @param     string|array $commentDate The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
