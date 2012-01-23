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
   * @return    VideoPlaylist|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = VideoPlaylistPeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(VideoPlaylistPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    VideoPlaylist A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `ID`, `VIDEO_ID`, `PLAYLIST_ID`, `POSITION` FROM `video_playlist` WHERE `ID` = :p0';
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
      $obj = new VideoPlaylist();
      $obj->hydrate($row);
      VideoPlaylistPeer::addInstanceToPool($obj, (string) $row[0]);
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
   * @return    VideoPlaylist|array|mixed the result, formatted by the current formatter
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
   * Example usage:
   * <code>
   * $query->filterByVideoId(1234); // WHERE video_id = 1234
   * $query->filterByVideoId(array(12, 34)); // WHERE video_id IN (12, 34)
   * $query->filterByVideoId(array('min' => 12)); // WHERE video_id > 12
   * </code>
   *
   * @see       filterByVideo()
   *
   * @param     mixed $videoId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
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
   * Example usage:
   * <code>
   * $query->filterByPlaylistId(1234); // WHERE playlist_id = 1234
   * $query->filterByPlaylistId(array(12, 34)); // WHERE playlist_id IN (12, 34)
   * $query->filterByPlaylistId(array('min' => 12)); // WHERE playlist_id > 12
   * </code>
   *
   * @see       filterByPlaylist()
   *
   * @param     mixed $playlistId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
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
   * @param     Video|PropelCollection $video The related object(s) to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    VideoPlaylistQuery The current query, for fluid interface
   */
  public function filterByVideo($video, $comparison = null)
  {
    if ($video instanceof Video)
    {
      return $this
        ->addUsingAlias(VideoPlaylistPeer::VIDEO_ID, $video->getId(), $comparison);
    }
    elseif ($video instanceof PropelCollection)
    {
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
      return $this
        ->addUsingAlias(VideoPlaylistPeer::VIDEO_ID, $video->toKeyValue('PrimaryKey', 'Id'), $comparison);
    }
    else
    {
      throw new PropelException('filterByVideo() only accepts arguments of type Video or PropelCollection');
    }
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
   * @param     Playlist|PropelCollection $playlist The related object(s) to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    VideoPlaylistQuery The current query, for fluid interface
   */
  public function filterByPlaylist($playlist, $comparison = null)
  {
    if ($playlist instanceof Playlist)
    {
      return $this
        ->addUsingAlias(VideoPlaylistPeer::PLAYLIST_ID, $playlist->getId(), $comparison);
    }
    elseif ($playlist instanceof PropelCollection)
    {
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
      return $this
        ->addUsingAlias(VideoPlaylistPeer::PLAYLIST_ID, $playlist->toKeyValue('PrimaryKey', 'Id'), $comparison);
    }
    else
    {
      throw new PropelException('filterByPlaylist() only accepts arguments of type Playlist or PropelCollection');
    }
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