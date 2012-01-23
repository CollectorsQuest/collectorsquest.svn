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
   * @return    Playlist|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = PlaylistPeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(PlaylistPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    Playlist A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `ID`, `TITLE`, `SLUG`, `DESCRIPTION`, `TYPE`, `LENGTH`, `IS_PUBLISHED`, `PUBLISHED_AT`, `CREATED_AT` FROM `playlist` WHERE `ID` = :p0';
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
      $obj = new Playlist();
      $obj->hydrate($row);
      PlaylistPeer::addInstanceToPool($obj, (string) $row[0]);
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
   * @return    Playlist|array|mixed the result, formatted by the current formatter
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
   * Example usage:
   * <code>
   * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
   * $query->filterByTitle('%fooValue%'); // WHERE title LIKE '%fooValue%'
   * </code>
   *
   * @param     string $title The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
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
   * Example usage:
   * <code>
   * $query->filterBySlug('fooValue');   // WHERE slug = 'fooValue'
   * $query->filterBySlug('%fooValue%'); // WHERE slug LIKE '%fooValue%'
   * </code>
   *
   * @param     string $slug The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
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
   * Example usage:
   * <code>
   * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
   * $query->filterByType('%fooValue%'); // WHERE type LIKE '%fooValue%'
   * </code>
   *
   * @param     string $type The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
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
   * Example usage:
   * <code>
   * $query->filterByLength(1234); // WHERE length = 1234
   * $query->filterByLength(array(12, 34)); // WHERE length IN (12, 34)
   * $query->filterByLength(array('min' => 12)); // WHERE length > 12
   * </code>
   *
   * @param     mixed $length The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
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
   * Example usage:
   * <code>
   * $query->filterByIsPublished(true); // WHERE is_published = true
   * $query->filterByIsPublished('yes'); // WHERE is_published = true
   * </code>
   *
   * @param     boolean|string $isPublished The value to use as filter.
   *              Non-boolean arguments are converted using the following rules:
   *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PlaylistQuery The current query, for fluid interface
   */
  public function filterByIsPublished($isPublished = null, $comparison = null)
  {
    if (is_string($isPublished))
    {
      $is_published = in_array(strtolower($isPublished), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
    }
    return $this->addUsingAlias(PlaylistPeer::IS_PUBLISHED, $isPublished, $comparison);
  }

  /**
   * Filter the query on the published_at column
   *
   * Example usage:
   * <code>
   * $query->filterByPublishedAt('2011-03-14'); // WHERE published_at = '2011-03-14'
   * $query->filterByPublishedAt('now'); // WHERE published_at = '2011-03-14'
   * $query->filterByPublishedAt(array('max' => 'yesterday')); // WHERE published_at > '2011-03-13'
   * </code>
   *
   * @param     mixed $publishedAt The value to use as filter.
   *              Values can be integers (unix timestamps), DateTime objects, or strings.
   *              Empty strings are treated as NULL.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
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
   * Example usage:
   * <code>
   * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
   * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
   * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
   * </code>
   *
   * @param     mixed $createdAt The value to use as filter.
   *              Values can be integers (unix timestamps), DateTime objects, or strings.
   *              Empty strings are treated as NULL.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
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
    if ($videoPlaylist instanceof VideoPlaylist)
    {
      return $this
        ->addUsingAlias(PlaylistPeer::ID, $videoPlaylist->getPlaylistId(), $comparison);
    }
    elseif ($videoPlaylist instanceof PropelCollection)
    {
      return $this
        ->useVideoPlaylistQuery()
        ->filterByPrimaryKeys($videoPlaylist->getPrimaryKeys())
        ->endUse();
    }
    else
    {
      throw new PropelException('filterByVideoPlaylist() only accepts arguments of type VideoPlaylist or PropelCollection');
    }
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