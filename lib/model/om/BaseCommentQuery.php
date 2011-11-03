<?php


/**
 * Base class that represents a query for the 'comment' table.
 *
 * 
 *
 * @method     CommentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CommentQuery orderByDisqusId($order = Criteria::ASC) Order by the disqus_id column
 * @method     CommentQuery orderByParentId($order = Criteria::ASC) Order by the parent_id column
 * @method     CommentQuery orderByCollectionId($order = Criteria::ASC) Order by the collection_id column
 * @method     CommentQuery orderByCollectibleId($order = Criteria::ASC) Order by the collectible_id column
 * @method     CommentQuery orderByCollectorId($order = Criteria::ASC) Order by the collector_id column
 * @method     CommentQuery orderByAuthorName($order = Criteria::ASC) Order by the author_name column
 * @method     CommentQuery orderByAuthorEmail($order = Criteria::ASC) Order by the author_email column
 * @method     CommentQuery orderByAuthorUrl($order = Criteria::ASC) Order by the author_url column
 * @method     CommentQuery orderBySubject($order = Criteria::ASC) Order by the subject column
 * @method     CommentQuery orderByBody($order = Criteria::ASC) Order by the body column
 * @method     CommentQuery orderByIpAddress($order = Criteria::ASC) Order by the ip_address column
 * @method     CommentQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     CommentQuery groupById() Group by the id column
 * @method     CommentQuery groupByDisqusId() Group by the disqus_id column
 * @method     CommentQuery groupByParentId() Group by the parent_id column
 * @method     CommentQuery groupByCollectionId() Group by the collection_id column
 * @method     CommentQuery groupByCollectibleId() Group by the collectible_id column
 * @method     CommentQuery groupByCollectorId() Group by the collector_id column
 * @method     CommentQuery groupByAuthorName() Group by the author_name column
 * @method     CommentQuery groupByAuthorEmail() Group by the author_email column
 * @method     CommentQuery groupByAuthorUrl() Group by the author_url column
 * @method     CommentQuery groupBySubject() Group by the subject column
 * @method     CommentQuery groupByBody() Group by the body column
 * @method     CommentQuery groupByIpAddress() Group by the ip_address column
 * @method     CommentQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     CommentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CommentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CommentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CommentQuery leftJoinCollection($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collection relation
 * @method     CommentQuery rightJoinCollection($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collection relation
 * @method     CommentQuery innerJoinCollection($relationAlias = null) Adds a INNER JOIN clause to the query using the Collection relation
 *
 * @method     CommentQuery leftJoinCollectible($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collectible relation
 * @method     CommentQuery rightJoinCollectible($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collectible relation
 * @method     CommentQuery innerJoinCollectible($relationAlias = null) Adds a INNER JOIN clause to the query using the Collectible relation
 *
 * @method     CommentQuery leftJoinCollector($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collector relation
 * @method     CommentQuery rightJoinCollector($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collector relation
 * @method     CommentQuery innerJoinCollector($relationAlias = null) Adds a INNER JOIN clause to the query using the Collector relation
 *
 * @method     Comment findOne(PropelPDO $con = null) Return the first Comment matching the query
 * @method     Comment findOneOrCreate(PropelPDO $con = null) Return the first Comment matching the query, or a new Comment object populated from the query conditions when no match is found
 *
 * @method     Comment findOneById(int $id) Return the first Comment filtered by the id column
 * @method     Comment findOneByDisqusId(string $disqus_id) Return the first Comment filtered by the disqus_id column
 * @method     Comment findOneByParentId(string $parent_id) Return the first Comment filtered by the parent_id column
 * @method     Comment findOneByCollectionId(int $collection_id) Return the first Comment filtered by the collection_id column
 * @method     Comment findOneByCollectibleId(int $collectible_id) Return the first Comment filtered by the collectible_id column
 * @method     Comment findOneByCollectorId(int $collector_id) Return the first Comment filtered by the collector_id column
 * @method     Comment findOneByAuthorName(string $author_name) Return the first Comment filtered by the author_name column
 * @method     Comment findOneByAuthorEmail(string $author_email) Return the first Comment filtered by the author_email column
 * @method     Comment findOneByAuthorUrl(string $author_url) Return the first Comment filtered by the author_url column
 * @method     Comment findOneBySubject(string $subject) Return the first Comment filtered by the subject column
 * @method     Comment findOneByBody(string $body) Return the first Comment filtered by the body column
 * @method     Comment findOneByIpAddress(string $ip_address) Return the first Comment filtered by the ip_address column
 * @method     Comment findOneByCreatedAt(string $created_at) Return the first Comment filtered by the created_at column
 *
 * @method     array findById(int $id) Return Comment objects filtered by the id column
 * @method     array findByDisqusId(string $disqus_id) Return Comment objects filtered by the disqus_id column
 * @method     array findByParentId(string $parent_id) Return Comment objects filtered by the parent_id column
 * @method     array findByCollectionId(int $collection_id) Return Comment objects filtered by the collection_id column
 * @method     array findByCollectibleId(int $collectible_id) Return Comment objects filtered by the collectible_id column
 * @method     array findByCollectorId(int $collector_id) Return Comment objects filtered by the collector_id column
 * @method     array findByAuthorName(string $author_name) Return Comment objects filtered by the author_name column
 * @method     array findByAuthorEmail(string $author_email) Return Comment objects filtered by the author_email column
 * @method     array findByAuthorUrl(string $author_url) Return Comment objects filtered by the author_url column
 * @method     array findBySubject(string $subject) Return Comment objects filtered by the subject column
 * @method     array findByBody(string $body) Return Comment objects filtered by the body column
 * @method     array findByIpAddress(string $ip_address) Return Comment objects filtered by the ip_address column
 * @method     array findByCreatedAt(string $created_at) Return Comment objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCommentQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BaseCommentQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'Comment', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new CommentQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    CommentQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof CommentQuery)
    {
      return $criteria;
    }
    $query = new CommentQuery();
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
   * @return    Comment|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = CommentPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @return    CommentQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(CommentPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    CommentQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(CommentPeer::ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the id column
   * 
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CommentQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(CommentPeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the disqus_id column
   * 
   * @param     string $disqusId The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CommentQuery The current query, for fluid interface
   */
  public function filterByDisqusId($disqusId = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($disqusId))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $disqusId))
      {
        $disqusId = str_replace('*', '%', $disqusId);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CommentPeer::DISQUS_ID, $disqusId, $comparison);
  }

  /**
   * Filter the query on the parent_id column
   * 
   * @param     string $parentId The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CommentQuery The current query, for fluid interface
   */
  public function filterByParentId($parentId = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($parentId))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $parentId))
      {
        $parentId = str_replace('*', '%', $parentId);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CommentPeer::PARENT_ID, $parentId, $comparison);
  }

  /**
   * Filter the query on the collection_id column
   * 
   * @param     int|array $collectionId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CommentQuery The current query, for fluid interface
   */
  public function filterByCollectionId($collectionId = null, $comparison = null)
  {
    if (is_array($collectionId))
    {
      $useMinMax = false;
      if (isset($collectionId['min']))
      {
        $this->addUsingAlias(CommentPeer::COLLECTION_ID, $collectionId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($collectionId['max']))
      {
        $this->addUsingAlias(CommentPeer::COLLECTION_ID, $collectionId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CommentPeer::COLLECTION_ID, $collectionId, $comparison);
  }

  /**
   * Filter the query on the collectible_id column
   * 
   * @param     int|array $collectibleId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CommentQuery The current query, for fluid interface
   */
  public function filterByCollectibleId($collectibleId = null, $comparison = null)
  {
    if (is_array($collectibleId))
    {
      $useMinMax = false;
      if (isset($collectibleId['min']))
      {
        $this->addUsingAlias(CommentPeer::COLLECTIBLE_ID, $collectibleId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($collectibleId['max']))
      {
        $this->addUsingAlias(CommentPeer::COLLECTIBLE_ID, $collectibleId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CommentPeer::COLLECTIBLE_ID, $collectibleId, $comparison);
  }

  /**
   * Filter the query on the collector_id column
   * 
   * @param     int|array $collectorId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CommentQuery The current query, for fluid interface
   */
  public function filterByCollectorId($collectorId = null, $comparison = null)
  {
    if (is_array($collectorId))
    {
      $useMinMax = false;
      if (isset($collectorId['min']))
      {
        $this->addUsingAlias(CommentPeer::COLLECTOR_ID, $collectorId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($collectorId['max']))
      {
        $this->addUsingAlias(CommentPeer::COLLECTOR_ID, $collectorId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CommentPeer::COLLECTOR_ID, $collectorId, $comparison);
  }

  /**
   * Filter the query on the author_name column
   * 
   * @param     string $authorName The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CommentQuery The current query, for fluid interface
   */
  public function filterByAuthorName($authorName = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($authorName))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $authorName))
      {
        $authorName = str_replace('*', '%', $authorName);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CommentPeer::AUTHOR_NAME, $authorName, $comparison);
  }

  /**
   * Filter the query on the author_email column
   * 
   * @param     string $authorEmail The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CommentQuery The current query, for fluid interface
   */
  public function filterByAuthorEmail($authorEmail = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($authorEmail))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $authorEmail))
      {
        $authorEmail = str_replace('*', '%', $authorEmail);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CommentPeer::AUTHOR_EMAIL, $authorEmail, $comparison);
  }

  /**
   * Filter the query on the author_url column
   * 
   * @param     string $authorUrl The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CommentQuery The current query, for fluid interface
   */
  public function filterByAuthorUrl($authorUrl = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($authorUrl))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $authorUrl))
      {
        $authorUrl = str_replace('*', '%', $authorUrl);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CommentPeer::AUTHOR_URL, $authorUrl, $comparison);
  }

  /**
   * Filter the query on the subject column
   * 
   * @param     string $subject The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CommentQuery The current query, for fluid interface
   */
  public function filterBySubject($subject = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($subject))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $subject))
      {
        $subject = str_replace('*', '%', $subject);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CommentPeer::SUBJECT, $subject, $comparison);
  }

  /**
   * Filter the query on the body column
   * 
   * @param     string $body The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CommentQuery The current query, for fluid interface
   */
  public function filterByBody($body = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($body))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $body))
      {
        $body = str_replace('*', '%', $body);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CommentPeer::BODY, $body, $comparison);
  }

  /**
   * Filter the query on the ip_address column
   * 
   * @param     string $ipAddress The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CommentQuery The current query, for fluid interface
   */
  public function filterByIpAddress($ipAddress = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($ipAddress))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $ipAddress))
      {
        $ipAddress = str_replace('*', '%', $ipAddress);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CommentPeer::IP_ADDRESS, $ipAddress, $comparison);
  }

  /**
   * Filter the query on the created_at column
   * 
   * @param     string|array $createdAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CommentQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(CommentPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(CommentPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CommentPeer::CREATED_AT, $createdAt, $comparison);
  }

  /**
   * Filter the query by a related Collection object
   *
   * @param     Collection $collection  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CommentQuery The current query, for fluid interface
   */
  public function filterByCollection($collection, $comparison = null)
  {
    return $this
      ->addUsingAlias(CommentPeer::COLLECTION_ID, $collection->getId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the Collection relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CommentQuery The current query, for fluid interface
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
   * Filter the query by a related Collectible object
   *
   * @param     Collectible $collectible  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CommentQuery The current query, for fluid interface
   */
  public function filterByCollectible($collectible, $comparison = null)
  {
    return $this
      ->addUsingAlias(CommentPeer::COLLECTIBLE_ID, $collectible->getId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the Collectible relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CommentQuery The current query, for fluid interface
   */
  public function joinCollectible($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('Collectible');
    
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
      $this->addJoinObject($join, 'Collectible');
    }
    
    return $this;
  }

  /**
   * Use the Collectible relation Collectible object
   *
   * @see       useQuery()
   * 
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectibleQuery A secondary query class using the current class as primary query
   */
  public function useCollectibleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    return $this
      ->joinCollectible($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'Collectible', 'CollectibleQuery');
  }

  /**
   * Filter the query by a related Collector object
   *
   * @param     Collector $collector  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CommentQuery The current query, for fluid interface
   */
  public function filterByCollector($collector, $comparison = null)
  {
    return $this
      ->addUsingAlias(CommentPeer::COLLECTOR_ID, $collector->getId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the Collector relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CommentQuery The current query, for fluid interface
   */
  public function joinCollector($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
  public function useCollectorQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    return $this
      ->joinCollector($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'Collector', 'CollectorQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     Comment $comment Object to remove from the list of results
   *
   * @return    CommentQuery The current query, for fluid interface
   */
  public function prune($comment = null)
  {
    if ($comment)
    {
      $this->addUsingAlias(CommentPeer::ID, $comment->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

}
