<?php


/**
 * Base class that represents a query for the 'playlist' table.
 *
 * 
 *
 * @method     PlaylistQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PlaylistQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     PlaylistQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     PlaylistQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     PlaylistQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     PlaylistQuery orderByLength($order = Criteria::ASC) Order by the length column
 * @method     PlaylistQuery orderByIsPublished($order = Criteria::ASC) Order by the is_published column
 * @method     PlaylistQuery orderByPublishedAt($order = Criteria::ASC) Order by the published_at column
 * @method     PlaylistQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     PlaylistQuery groupById() Group by the id column
 * @method     PlaylistQuery groupByTitle() Group by the title column
 * @method     PlaylistQuery groupBySlug() Group by the slug column
 * @method     PlaylistQuery groupByDescription() Group by the description column
 * @method     PlaylistQuery groupByType() Group by the type column
 * @method     PlaylistQuery groupByLength() Group by the length column
 * @method     PlaylistQuery groupByIsPublished() Group by the is_published column
 * @method     PlaylistQuery groupByPublishedAt() Group by the published_at column
 * @method     PlaylistQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     PlaylistQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PlaylistQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PlaylistQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PlaylistQuery leftJoinVideoPlaylist($relationAlias = null) Adds a LEFT JOIN clause to the query using the VideoPlaylist relation
 * @method     PlaylistQuery rightJoinVideoPlaylist($relationAlias = null) Adds a RIGHT JOIN clause to the query using the VideoPlaylist relation
 * @method     PlaylistQuery innerJoinVideoPlaylist($relationAlias = null) Adds a INNER JOIN clause to the query using the VideoPlaylist relation
 *
 * @method     Playlist findOne(PropelPDO $con = null) Return the first Playlist matching the query
 * @method     Playlist findOneOrCreate(PropelPDO $con = null) Return the first Playlist matching the query, or a new Playlist object populated from the query conditions when no match is found
 *
 * @method     Playlist findOneById(int $id) Return the first Playlist filtered by the id column
 * @method     Playlist findOneByTitle(string $title) Return the first Playlist filtered by the title column
 * @method     Playlist findOneBySlug(string $slug) Return the first Playlist filtered by the slug column
 * @method     Playlist findOneByDescription(string $description) Return the first Playlist filtered by the description column
 * @method     Playlist findOneByType(string $type) Return the first Playlist filtered by the type column
 * @method     Playlist findOneByLength(int $length) Return the first Playlist filtered by the length column
 * @method     Playlist findOneByIsPublished(boolean $is_published) Return the first Playlist filtered by the is_published column
 * @method     Playlist findOneByPublishedAt(string $published_at) Return the first Playlist filtered by the published_at column
 * @method     Playlist findOneByCreatedAt(string $created_at) Return the first Playlist filtered by the created_at column
 *
 * @method     array findById(int $id) Return Playlist objects filtered by the id column
 * @method     array findByTitle(string $title) Return Playlist objects filtered by the title column
 * @method     array findBySlug(string $slug) Return Playlist objects filtered by the slug column
 * @method     array findByDescription(string $description) Return Playlist objects filtered by the description column
 * @method     array findByType(string $type) Return Playlist objects filtered by the type column
 * @method     array findByLength(int $length) Return Playlist objects filtered by the length column
 * @method     array findByIsPublished(boolean $is_published) Return Playlist objects filtered by the is_published column
 * @method     array findByPublishedAt(string $published_at) Return Playlist objects filtered by the published_at column
 * @method     array findByCreatedAt(string $created_at) Return Playlist objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePlaylistQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BasePlaylistQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'Playlist', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new PlaylistQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    PlaylistQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof PlaylistQuery)
    {
      return $criteria;
    }
    $query = new PlaylistQuery();
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
   * @return    Playlist|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = PlaylistPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @return    PlaylistQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(PlaylistPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    PlaylistQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(PlaylistPeer::ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the id column
   * 
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PlaylistQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(PlaylistPeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the title column
   * 
   * @param     string $title The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PlaylistQuery The current query, for fluid interface
   */
  public function filterByTitle($title = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($title))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $title))
      {
        $title = str_replace('*', '%', $title);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(PlaylistPeer::TITLE, $title, $comparison);
  }

  /**
   * Filter the query on the slug column
   * 
   * @param     string $slug The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PlaylistQuery The current query, for fluid interface
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
    return $this->addUsingAlias(PlaylistPeer::SLUG, $slug, $comparison);
  }

  /**
   * Filter the query on the description column
   * 
   * @param     string $description The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PlaylistQuery The current query, for fluid interface
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
    return $this->addUsingAlias(PlaylistPeer::DESCRIPTION, $description, $comparison);
  }

  /**
   * Filter the query on the type column
   * 
   * @param     string $type The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PlaylistQuery The current query, for fluid interface
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
    return $this->addUsingAlias(PlaylistPeer::TYPE, $type, $comparison);
  }

  /**
   * Filter the query on the length column
   * 
   * @param     int|array $length The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PlaylistQuery The current query, for fluid interface
   */
  public function filterByLength($length = null, $comparison = null)
  {
    if (is_array($length))
    {
      $useMinMax = false;
      if (isset($length['min']))
      {
        $this->addUsingAlias(PlaylistPeer::LENGTH, $length['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($length['max']))
      {
        $this->addUsingAlias(PlaylistPeer::LENGTH, $length['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PlaylistPeer::LENGTH, $length, $comparison);
  }

  /**
   * Filter the query on the is_published column
   * 
   * @param     boolean|string $isPublished The value to use as filter.
   *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PlaylistQuery The current query, for fluid interface
   */
  public function filterByIsPublished($isPublished = null, $comparison = null)
  {
    if (is_string($isPublished))
    {
      $is_published = in_array(strtolower($isPublished), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
    }
    return $this->addUsingAlias(PlaylistPeer::IS_PUBLISHED, $isPublished, $comparison);
  }

  /**
   * Filter the query on the published_at column
   * 
   * @param     string|array $publishedAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PlaylistQuery The current query, for fluid interface
   */
  public function filterByPublishedAt($publishedAt = null, $comparison = null)
  {
    if (is_array($publishedAt))
    {
      $useMinMax = false;
      if (isset($publishedAt['min']))
      {
        $this->addUsingAlias(PlaylistPeer::PUBLISHED_AT, $publishedAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($publishedAt['max']))
      {
        $this->addUsingAlias(PlaylistPeer::PUBLISHED_AT, $publishedAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PlaylistPeer::PUBLISHED_AT, $publishedAt, $comparison);
  }

  /**
   * Filter the query on the created_at column
   * 
   * @param     string|array $createdAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PlaylistQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(PlaylistPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(PlaylistPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PlaylistPeer::CREATED_AT, $createdAt, $comparison);
  }

  /**
   * Filter the query by a related VideoPlaylist object
   *
   * @param     VideoPlaylist $videoPlaylist  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PlaylistQuery The current query, for fluid interface
   */
  public function filterByVideoPlaylist($videoPlaylist, $comparison = null)
  {
    return $this
      ->addUsingAlias(PlaylistPeer::ID, $videoPlaylist->getPlaylistId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the VideoPlaylist relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    PlaylistQuery The current query, for fluid interface
   */
  public function joinVideoPlaylist($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('VideoPlaylist');
    
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
      $this->addJoinObject($join, 'VideoPlaylist');
    }
    
    return $this;
  }

  /**
   * Use the VideoPlaylist relation VideoPlaylist object
   *
   * @see       useQuery()
   * 
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    VideoPlaylistQuery A secondary query class using the current class as primary query
   */
  public function useVideoPlaylistQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    return $this
      ->joinVideoPlaylist($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'VideoPlaylist', 'VideoPlaylistQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     Playlist $playlist Object to remove from the list of results
   *
   * @return    PlaylistQuery The current query, for fluid interface
   */
  public function prune($playlist = null)
  {
    if ($playlist)
    {
      $this->addUsingAlias(PlaylistPeer::ID, $playlist->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

}
