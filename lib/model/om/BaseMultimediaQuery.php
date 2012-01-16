<?php


/**
 * Base class that represents a query for the 'multimedia' table.
 *
 * 
 *
 * @method     MultimediaQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     MultimediaQuery orderByModel($order = Criteria::ASC) Order by the model column
 * @method     MultimediaQuery orderByModelId($order = Criteria::ASC) Order by the model_id column
 * @method     MultimediaQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     MultimediaQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     MultimediaQuery orderByMd5($order = Criteria::ASC) Order by the md5 column
 * @method     MultimediaQuery orderByColors($order = Criteria::ASC) Order by the colors column
 * @method     MultimediaQuery orderByOrientation($order = Criteria::ASC) Order by the orientation column
 * @method     MultimediaQuery orderBySource($order = Criteria::ASC) Order by the source column
 * @method     MultimediaQuery orderByIsPrimary($order = Criteria::ASC) Order by the is_primary column
 * @method     MultimediaQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     MultimediaQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     MultimediaQuery groupById() Group by the id column
 * @method     MultimediaQuery groupByModel() Group by the model column
 * @method     MultimediaQuery groupByModelId() Group by the model_id column
 * @method     MultimediaQuery groupByType() Group by the type column
 * @method     MultimediaQuery groupByName() Group by the name column
 * @method     MultimediaQuery groupByMd5() Group by the md5 column
 * @method     MultimediaQuery groupByColors() Group by the colors column
 * @method     MultimediaQuery groupByOrientation() Group by the orientation column
 * @method     MultimediaQuery groupBySource() Group by the source column
 * @method     MultimediaQuery groupByIsPrimary() Group by the is_primary column
 * @method     MultimediaQuery groupByUpdatedAt() Group by the updated_at column
 * @method     MultimediaQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     MultimediaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     MultimediaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     MultimediaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Multimedia findOne(PropelPDO $con = null) Return the first Multimedia matching the query
 * @method     Multimedia findOneOrCreate(PropelPDO $con = null) Return the first Multimedia matching the query, or a new Multimedia object populated from the query conditions when no match is found
 *
 * @method     Multimedia findOneById(int $id) Return the first Multimedia filtered by the id column
 * @method     Multimedia findOneByModel(string $model) Return the first Multimedia filtered by the model column
 * @method     Multimedia findOneByModelId(int $model_id) Return the first Multimedia filtered by the model_id column
 * @method     Multimedia findOneByType(string $type) Return the first Multimedia filtered by the type column
 * @method     Multimedia findOneByName(string $name) Return the first Multimedia filtered by the name column
 * @method     Multimedia findOneByMd5(string $md5) Return the first Multimedia filtered by the md5 column
 * @method     Multimedia findOneByColors(string $colors) Return the first Multimedia filtered by the colors column
 * @method     Multimedia findOneByOrientation(string $orientation) Return the first Multimedia filtered by the orientation column
 * @method     Multimedia findOneBySource(string $source) Return the first Multimedia filtered by the source column
 * @method     Multimedia findOneByIsPrimary(boolean $is_primary) Return the first Multimedia filtered by the is_primary column
 * @method     Multimedia findOneByUpdatedAt(string $updated_at) Return the first Multimedia filtered by the updated_at column
 * @method     Multimedia findOneByCreatedAt(string $created_at) Return the first Multimedia filtered by the created_at column
 *
 * @method     array findById(int $id) Return Multimedia objects filtered by the id column
 * @method     array findByModel(string $model) Return Multimedia objects filtered by the model column
 * @method     array findByModelId(int $model_id) Return Multimedia objects filtered by the model_id column
 * @method     array findByType(string $type) Return Multimedia objects filtered by the type column
 * @method     array findByName(string $name) Return Multimedia objects filtered by the name column
 * @method     array findByMd5(string $md5) Return Multimedia objects filtered by the md5 column
 * @method     array findByColors(string $colors) Return Multimedia objects filtered by the colors column
 * @method     array findByOrientation(string $orientation) Return Multimedia objects filtered by the orientation column
 * @method     array findBySource(string $source) Return Multimedia objects filtered by the source column
 * @method     array findByIsPrimary(boolean $is_primary) Return Multimedia objects filtered by the is_primary column
 * @method     array findByUpdatedAt(string $updated_at) Return Multimedia objects filtered by the updated_at column
 * @method     array findByCreatedAt(string $created_at) Return Multimedia objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseMultimediaQuery extends ModelCriteria
{
    
  // archivable behavior
  protected $archiveOnDelete = true;

    /**
     * Initializes internal state of BaseMultimediaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Multimedia', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MultimediaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    MultimediaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MultimediaQuery) {
            return $criteria;
        }
        $query = new MultimediaQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
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
     * @return    Multimedia|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = MultimediaPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
            // the object is alredy in the instance pool
            return $obj;
        } else {
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
     * @return    MultimediaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(MultimediaPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    MultimediaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(MultimediaPeer::ID, $keys, Criteria::IN);
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
     * @return    MultimediaQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(MultimediaPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the model column
     *
     * Example usage:
     * <code>
     * $query->filterByModel('fooValue');   // WHERE model = 'fooValue'
     * $query->filterByModel('%fooValue%'); // WHERE model LIKE '%fooValue%'
     * </code>
     *
     * @param     string $model The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MultimediaQuery The current query, for fluid interface
     */
    public function filterByModel($model = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($model)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $model)) {
                $model = str_replace('*', '%', $model);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MultimediaPeer::MODEL, $model, $comparison);
    }

    /**
     * Filter the query on the model_id column
     *
     * Example usage:
     * <code>
     * $query->filterByModelId(1234); // WHERE model_id = 1234
     * $query->filterByModelId(array(12, 34)); // WHERE model_id IN (12, 34)
     * $query->filterByModelId(array('min' => 12)); // WHERE model_id > 12
     * </code>
     *
     * @param     mixed $modelId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MultimediaQuery The current query, for fluid interface
     */
    public function filterByModelId($modelId = null, $comparison = null)
    {
        if (is_array($modelId)) {
            $useMinMax = false;
            if (isset($modelId['min'])) {
                $this->addUsingAlias(MultimediaPeer::MODEL_ID, $modelId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modelId['max'])) {
                $this->addUsingAlias(MultimediaPeer::MODEL_ID, $modelId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(MultimediaPeer::MODEL_ID, $modelId, $comparison);
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
     * @return    MultimediaQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MultimediaPeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MultimediaQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MultimediaPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the md5 column
     *
     * Example usage:
     * <code>
     * $query->filterByMd5('fooValue');   // WHERE md5 = 'fooValue'
     * $query->filterByMd5('%fooValue%'); // WHERE md5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $md5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MultimediaQuery The current query, for fluid interface
     */
    public function filterByMd5($md5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($md5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $md5)) {
                $md5 = str_replace('*', '%', $md5);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MultimediaPeer::MD5, $md5, $comparison);
    }

    /**
     * Filter the query on the colors column
     *
     * Example usage:
     * <code>
     * $query->filterByColors('fooValue');   // WHERE colors = 'fooValue'
     * $query->filterByColors('%fooValue%'); // WHERE colors LIKE '%fooValue%'
     * </code>
     *
     * @param     string $colors The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MultimediaQuery The current query, for fluid interface
     */
    public function filterByColors($colors = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($colors)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $colors)) {
                $colors = str_replace('*', '%', $colors);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MultimediaPeer::COLORS, $colors, $comparison);
    }

    /**
     * Filter the query on the orientation column
     *
     * Example usage:
     * <code>
     * $query->filterByOrientation('fooValue');   // WHERE orientation = 'fooValue'
     * $query->filterByOrientation('%fooValue%'); // WHERE orientation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $orientation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MultimediaQuery The current query, for fluid interface
     */
    public function filterByOrientation($orientation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($orientation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $orientation)) {
                $orientation = str_replace('*', '%', $orientation);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MultimediaPeer::ORIENTATION, $orientation, $comparison);
    }

    /**
     * Filter the query on the source column
     *
     * Example usage:
     * <code>
     * $query->filterBySource('fooValue');   // WHERE source = 'fooValue'
     * $query->filterBySource('%fooValue%'); // WHERE source LIKE '%fooValue%'
     * </code>
     *
     * @param     string $source The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MultimediaQuery The current query, for fluid interface
     */
    public function filterBySource($source = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($source)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $source)) {
                $source = str_replace('*', '%', $source);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(MultimediaPeer::SOURCE, $source, $comparison);
    }

    /**
     * Filter the query on the is_primary column
     *
     * Example usage:
     * <code>
     * $query->filterByIsPrimary(true); // WHERE is_primary = true
     * $query->filterByIsPrimary('yes'); // WHERE is_primary = true
     * </code>
     *
     * @param     boolean|string $isPrimary The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MultimediaQuery The current query, for fluid interface
     */
    public function filterByIsPrimary($isPrimary = null, $comparison = null)
    {
        if (is_string($isPrimary)) {
            $is_primary = in_array(strtolower($isPrimary), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(MultimediaPeer::IS_PRIMARY, $isPrimary, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    MultimediaQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(MultimediaPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(MultimediaPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(MultimediaPeer::UPDATED_AT, $updatedAt, $comparison);
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
     * @return    MultimediaQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(MultimediaPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(MultimediaPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(MultimediaPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Multimedia $multimedia Object to remove from the list of results
     *
     * @return    MultimediaQuery The current query, for fluid interface
     */
    public function prune($multimedia = null)
    {
        if ($multimedia) {
            $this->addUsingAlias(MultimediaPeer::ID, $multimedia->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Code to execute before every DELETE statement
     *
     * @param     PropelPDO $con The connection object used by the query
     */
    protected function basePreDelete(PropelPDO $con)
    {
    // archivable behavior
    
    if ($this->archiveOnDelete)
    {
      $this->archive($con);
    }
    else
    {
      $this->archiveOnDelete = true;
    }


        return $this->preDelete($con);
    }

  // archivable behavior
  
  /**
   * Copy the data of the objects satisfying the query into MultimediaArchive archive objects.
   * The archived objects are then saved.
   * If any of the objects has already been archived, the archived object
   * is updated and not duplicated.
   * Warning: This termination methods issues 2n+1 queries.
   *
   * @param      PropelPDO $con  Connection to use.
   * @param      Boolean $useLittleMemory  Whether or not to use PropelOnDemandFormatter to retrieve objects.
   *               Set to false if the identity map matters.
   *               Set to true (default) to use less memory.
   *
   * @return     int the number of archived objects
   */
  public function archive($con = null, $useLittleMemory = true)
  {
    $totalArchivedObjects = 0;
    $criteria = clone $this;
    // prepare the query
    $criteria->setWith(array());
    if ($useLittleMemory) {
      $criteria->setFormatter(ModelCriteria::FORMAT_ON_DEMAND);
    }
    if ($con === null) {
      $con = Propel::getConnection(MultimediaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $con->beginTransaction();
    try {
      // archive all results one by one
      foreach ($criteria->find($con) as $object) {
        $object->archive($con);
        $totalArchivedObjects++;
      }
      $con->commit();
    } catch (PropelException $e) {
      $con->rollBack();
      throw $e;
    }
    
    return $totalArchivedObjects;
  }
  
  /**
   * Enable/disable auto-archiving on delete for the next query.
   *
   * @param Boolean True if the query must archive deleted objects, false otherwise.
   */
  public function setArchiveOnDelete($archiveOnDelete)
  {
    $this->archiveOnDelete = $archiveOnDelete;
  }
  
  /**
   * Delete records matching the current query without archiving them.
   *
   * @param      PropelPDO $con  Connection to use.
   *
   * @return integer the number of deleted rows
   */
  public function deleteWithoutArchive($con = null)
  {
    $this->archiveOnDelete = false;
  
    return $this->delete($con);
  }
  
  /**
   * Delete all records without archiving them.
   *
   * @param      PropelPDO $con  Connection to use.
   *
   * @return integer the number of deleted rows
   */
  public function deleteAllWithoutArchive($con = null)
  {
    $this->archiveOnDelete = false;
  
    return $this->deleteAll($con);
  }

}