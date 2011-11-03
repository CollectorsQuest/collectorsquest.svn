<?php


/**
 * Base class that represents a query for the 'score' table.
 *
 * 
 *
 * @method     ScoreQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ScoreQuery orderByDay($order = Criteria::ASC) Order by the day column
 * @method     ScoreQuery orderByModel($order = Criteria::ASC) Order by the model column
 * @method     ScoreQuery orderByModelId($order = Criteria::ASC) Order by the model_id column
 * @method     ScoreQuery orderByViews($order = Criteria::ASC) Order by the views column
 * @method     ScoreQuery orderByRatings($order = Criteria::ASC) Order by the ratings column
 * @method     ScoreQuery orderByScore($order = Criteria::ASC) Order by the score column
 * @method     ScoreQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     ScoreQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     ScoreQuery groupById() Group by the id column
 * @method     ScoreQuery groupByDay() Group by the day column
 * @method     ScoreQuery groupByModel() Group by the model column
 * @method     ScoreQuery groupByModelId() Group by the model_id column
 * @method     ScoreQuery groupByViews() Group by the views column
 * @method     ScoreQuery groupByRatings() Group by the ratings column
 * @method     ScoreQuery groupByScore() Group by the score column
 * @method     ScoreQuery groupByUpdatedAt() Group by the updated_at column
 * @method     ScoreQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     ScoreQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ScoreQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ScoreQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Score findOne(PropelPDO $con = null) Return the first Score matching the query
 * @method     Score findOneOrCreate(PropelPDO $con = null) Return the first Score matching the query, or a new Score object populated from the query conditions when no match is found
 *
 * @method     Score findOneById(int $id) Return the first Score filtered by the id column
 * @method     Score findOneByDay(string $day) Return the first Score filtered by the day column
 * @method     Score findOneByModel(string $model) Return the first Score filtered by the model column
 * @method     Score findOneByModelId(int $model_id) Return the first Score filtered by the model_id column
 * @method     Score findOneByViews(int $views) Return the first Score filtered by the views column
 * @method     Score findOneByRatings(int $ratings) Return the first Score filtered by the ratings column
 * @method     Score findOneByScore(int $score) Return the first Score filtered by the score column
 * @method     Score findOneByUpdatedAt(string $updated_at) Return the first Score filtered by the updated_at column
 * @method     Score findOneByCreatedAt(string $created_at) Return the first Score filtered by the created_at column
 *
 * @method     array findById(int $id) Return Score objects filtered by the id column
 * @method     array findByDay(string $day) Return Score objects filtered by the day column
 * @method     array findByModel(string $model) Return Score objects filtered by the model column
 * @method     array findByModelId(int $model_id) Return Score objects filtered by the model_id column
 * @method     array findByViews(int $views) Return Score objects filtered by the views column
 * @method     array findByRatings(int $ratings) Return Score objects filtered by the ratings column
 * @method     array findByScore(int $score) Return Score objects filtered by the score column
 * @method     array findByUpdatedAt(string $updated_at) Return Score objects filtered by the updated_at column
 * @method     array findByCreatedAt(string $created_at) Return Score objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseScoreQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BaseScoreQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'Score', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new ScoreQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    ScoreQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof ScoreQuery)
    {
      return $criteria;
    }
    $query = new ScoreQuery();
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
   * @return    Score|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = ScorePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(ScorePeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(ScorePeer::ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the id column
   * 
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(ScorePeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the day column
   * 
   * @param     string|array $day The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function filterByDay($day = null, $comparison = null)
  {
    if (is_array($day))
    {
      $useMinMax = false;
      if (isset($day['min']))
      {
        $this->addUsingAlias(ScorePeer::DAY, $day['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($day['max']))
      {
        $this->addUsingAlias(ScorePeer::DAY, $day['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(ScorePeer::DAY, $day, $comparison);
  }

  /**
   * Filter the query on the model column
   * 
   * @param     string $model The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function filterByModel($model = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($model))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $model))
      {
        $model = str_replace('*', '%', $model);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(ScorePeer::MODEL, $model, $comparison);
  }

  /**
   * Filter the query on the model_id column
   * 
   * @param     int|array $modelId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function filterByModelId($modelId = null, $comparison = null)
  {
    if (is_array($modelId))
    {
      $useMinMax = false;
      if (isset($modelId['min']))
      {
        $this->addUsingAlias(ScorePeer::MODEL_ID, $modelId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($modelId['max']))
      {
        $this->addUsingAlias(ScorePeer::MODEL_ID, $modelId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(ScorePeer::MODEL_ID, $modelId, $comparison);
  }

  /**
   * Filter the query on the views column
   * 
   * @param     int|array $views The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function filterByViews($views = null, $comparison = null)
  {
    if (is_array($views))
    {
      $useMinMax = false;
      if (isset($views['min']))
      {
        $this->addUsingAlias(ScorePeer::VIEWS, $views['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($views['max']))
      {
        $this->addUsingAlias(ScorePeer::VIEWS, $views['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(ScorePeer::VIEWS, $views, $comparison);
  }

  /**
   * Filter the query on the ratings column
   * 
   * @param     int|array $ratings The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function filterByRatings($ratings = null, $comparison = null)
  {
    if (is_array($ratings))
    {
      $useMinMax = false;
      if (isset($ratings['min']))
      {
        $this->addUsingAlias(ScorePeer::RATINGS, $ratings['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($ratings['max']))
      {
        $this->addUsingAlias(ScorePeer::RATINGS, $ratings['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(ScorePeer::RATINGS, $ratings, $comparison);
  }

  /**
   * Filter the query on the score column
   * 
   * @param     int|array $score The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function filterByScore($score = null, $comparison = null)
  {
    if (is_array($score))
    {
      $useMinMax = false;
      if (isset($score['min']))
      {
        $this->addUsingAlias(ScorePeer::SCORE, $score['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($score['max']))
      {
        $this->addUsingAlias(ScorePeer::SCORE, $score['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(ScorePeer::SCORE, $score, $comparison);
  }

  /**
   * Filter the query on the updated_at column
   * 
   * @param     string|array $updatedAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function filterByUpdatedAt($updatedAt = null, $comparison = null)
  {
    if (is_array($updatedAt))
    {
      $useMinMax = false;
      if (isset($updatedAt['min']))
      {
        $this->addUsingAlias(ScorePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($updatedAt['max']))
      {
        $this->addUsingAlias(ScorePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(ScorePeer::UPDATED_AT, $updatedAt, $comparison);
  }

  /**
   * Filter the query on the created_at column
   * 
   * @param     string|array $createdAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(ScorePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(ScorePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(ScorePeer::CREATED_AT, $createdAt, $comparison);
  }

  /**
   * Exclude object from result
   *
   * @param     Score $score Object to remove from the list of results
   *
   * @return    ScoreQuery The current query, for fluid interface
   */
  public function prune($score = null)
  {
    if ($score)
    {
      $this->addUsingAlias(ScorePeer::ID, $score->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

}
