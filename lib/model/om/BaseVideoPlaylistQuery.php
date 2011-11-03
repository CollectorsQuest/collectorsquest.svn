<?php


/**
 * Base class that represents a query for the 'video_playlist' table.
 *
 * 
 *
 * @method     VideoPlaylistQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     VideoPlaylistQuery orderByVideoId($order = Criteria::ASC) Order by the video_id column
 * @method     VideoPlaylistQuery orderByPlaylistId($order = Criteria::ASC) Order by the playlist_id column
 * @method     VideoPlaylistQuery orderByPosition($order = Criteria::ASC) Order by the position column
 *
 * @method     VideoPlaylistQuery groupById() Group by the id column
 * @method     VideoPlaylistQuery groupByVideoId() Group by the video_id column
 * @method     VideoPlaylistQuery groupByPlaylistId() Group by the playlist_id column
 * @method     VideoPlaylistQuery groupByPosition() Group by the position column
 *
 * @method     VideoPlaylistQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     VideoPlaylistQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     VideoPlaylistQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     VideoPlaylistQuery leftJoinVideo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Video relation
 * @method     VideoPlaylistQuery rightJoinVideo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Video relation
 * @method     VideoPlaylistQuery innerJoinVideo($relationAlias = null) Adds a INNER JOIN clause to the query using the Video relation
 *
 * @method     VideoPlaylistQuery leftJoinPlaylist($relationAlias = null) Adds a LEFT JOIN clause to the query using the Playlist relation
 * @method     VideoPlaylistQuery rightJoinPlaylist($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Playlist relation
 * @method     VideoPlaylistQuery innerJoinPlaylist($relationAlias = null) Adds a INNER JOIN clause to the query using the Playlist relation
 *
 * @method     VideoPlaylist findOne(PropelPDO $con = null) Return the first VideoPlaylist matching the query
 * @method     VideoPlaylist findOneOrCreate(PropelPDO $con = null) Return the first VideoPlaylist matching the query, or a new VideoPlaylist object populated from the query conditions when no match is found
 *
 * @method     VideoPlaylist findOneById(int $id) Return the first VideoPlaylist filtered by the id column
 * @method     VideoPlaylist findOneByVideoId(int $video_id) Return the first VideoPlaylist filtered by the video_id column
 * @method     VideoPlaylist findOneByPlaylistId(int $playlist_id) Return the first VideoPlaylist filtered by the playlist_id column
 * @method     VideoPlaylist findOneByPosition(int $position) Return the first VideoPlaylist filtered by the position column
 *
 * @method     array findById(int $id) Return VideoPlaylist objects filtered by the id column
 * @method     array findByVideoId(int $video_id) Return VideoPlaylist objects filtered by the video_id column
 * @method     array findByPlaylistId(int $playlist_id) Return VideoPlaylist objects filtered by the playlist_id column
 * @method     array findByPosition(int $position) Return VideoPlaylist objects filtered by the position column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseVideoPlaylistQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BaseVideoPlaylistQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'VideoPlaylist', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new VideoPlaylistQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    VideoPlaylistQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof VideoPlaylistQuery)
    {
      return $criteria;
    }
    $query = new VideoPlaylistQuery();
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
   * @return    VideoPlaylist|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = VideoPlaylistPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @return    VideoPlaylistQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(VideoPlaylistPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    VideoPlaylistQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(VideoPlaylistPeer::ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the id column
   * 
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    VideoPlaylistQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(VideoPlaylistPeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the video_id column
   * 
   * @param     int|array $videoId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    VideoPlaylistQuery The current query, for fluid interface
   */
  public function filterByVideoId($videoId = null, $comparison = null)
  {
    if (is_array($videoId))
    {
      $useMinMax = false;
      if (isset($videoId['min']))
      {
        $this->addUsingAlias(VideoPlaylistPeer::VIDEO_ID, $videoId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($videoId['max']))
      {
        $this->addUsingAlias(VideoPlaylistPeer::VIDEO_ID, $videoId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(VideoPlaylistPeer::VIDEO_ID, $videoId, $comparison);
  }

  /**
   * Filter the query on the playlist_id column
   * 
   * @param     int|array $playlistId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    VideoPlaylistQuery The current query, for fluid interface
   */
  public function filterByPlaylistId($playlistId = null, $comparison = null)
  {
    if (is_array($playlistId))
    {
      $useMinMax = false;
      if (isset($playlistId['min']))
      {
        $this->addUsingAlias(VideoPlaylistPeer::PLAYLIST_ID, $playlistId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($playlistId['max']))
      {
        $this->addUsingAlias(VideoPlaylistPeer::PLAYLIST_ID, $playlistId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(VideoPlaylistPeer::PLAYLIST_ID, $playlistId, $comparison);
  }

  /**
   * Filter the query on the position column
   * 
   * @param     int|array $position The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    VideoPlaylistQuery The current query, for fluid interface
   */
  public function filterByPosition($position = null, $comparison = null)
  {
    if (is_array($position))
    {
      $useMinMax = false;
      if (isset($position['min']))
      {
        $this->addUsingAlias(VideoPlaylistPeer::POSITION, $position['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($position['max']))
      {
        $this->addUsingAlias(VideoPlaylistPeer::POSITION, $position['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(VideoPlaylistPeer::POSITION, $position, $comparison);
  }

  /**
   * Filter the query by a related Video object
   *
   * @param     Video $video  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    VideoPlaylistQuery The current query, for fluid interface
   */
  public function filterByVideo($video, $comparison = null)
  {
    return $this
      ->addUsingAlias(VideoPlaylistPeer::VIDEO_ID, $video->getId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the Video relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    VideoPlaylistQuery The current query, for fluid interface
   */
  public function joinVideo($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('Video');
    
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
      $this->addJoinObject($join, 'Video');
    }
    
    return $this;
  }

  /**
   * Use the Video relation Video object
   *
   * @see       useQuery()
   * 
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    VideoQuery A secondary query class using the current class as primary query
   */
  public function useVideoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    return $this
      ->joinVideo($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'Video', 'VideoQuery');
  }

  /**
   * Filter the query by a related Playlist object
   *
   * @param     Playlist $playlist  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    VideoPlaylistQuery The current query, for fluid interface
   */
  public function filterByPlaylist($playlist, $comparison = null)
  {
    return $this
      ->addUsingAlias(VideoPlaylistPeer::PLAYLIST_ID, $playlist->getId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the Playlist relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    VideoPlaylistQuery The current query, for fluid interface
   */
  public function joinPlaylist($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('Playlist');
    
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
      $this->addJoinObject($join, 'Playlist');
    }
    
    return $this;
  }

  /**
   * Use the Playlist relation Playlist object
   *
   * @see       useQuery()
   * 
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    PlaylistQuery A secondary query class using the current class as primary query
   */
  public function usePlaylistQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
  {
    return $this
      ->joinPlaylist($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'Playlist', 'PlaylistQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     VideoPlaylist $videoPlaylist Object to remove from the list of results
   *
   * @return    VideoPlaylistQuery The current query, for fluid interface
   */
  public function prune($videoPlaylist = null)
  {
    if ($videoPlaylist)
    {
      $this->addUsingAlias(VideoPlaylistPeer::ID, $videoPlaylist->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

}
