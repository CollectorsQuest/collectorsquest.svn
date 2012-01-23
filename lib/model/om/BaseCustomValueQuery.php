<?php


/**
 * Base class that represents a query for the 'custom_value' table.
 *
 * 
 *
 * @method     CustomValueQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CustomValueQuery orderByCollectionId($order = Criteria::ASC) Order by the collection_id column
 * @method     CustomValueQuery orderByCollectibleId($order = Criteria::ASC) Order by the collectible_id column
 * @method     CustomValueQuery orderByFieldId($order = Criteria::ASC) Order by the field_id column
 * @method     CustomValueQuery orderByValueText($order = Criteria::ASC) Order by the value_text column
 * @method     CustomValueQuery orderByValueDate($order = Criteria::ASC) Order by the value_date column
 * @method     CustomValueQuery orderByValueNumeric($order = Criteria::ASC) Order by the value_numeric column
 * @method     CustomValueQuery orderByValueBool($order = Criteria::ASC) Order by the value_bool column
 * @method     CustomValueQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     CustomValueQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     CustomValueQuery groupById() Group by the id column
 * @method     CustomValueQuery groupByCollectionId() Group by the collection_id column
 * @method     CustomValueQuery groupByCollectibleId() Group by the collectible_id column
 * @method     CustomValueQuery groupByFieldId() Group by the field_id column
 * @method     CustomValueQuery groupByValueText() Group by the value_text column
 * @method     CustomValueQuery groupByValueDate() Group by the value_date column
 * @method     CustomValueQuery groupByValueNumeric() Group by the value_numeric column
 * @method     CustomValueQuery groupByValueBool() Group by the value_bool column
 * @method     CustomValueQuery groupByCreatedAt() Group by the created_at column
 * @method     CustomValueQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     CustomValueQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CustomValueQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CustomValueQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CustomValueQuery leftJoinCollection($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collection relation
 * @method     CustomValueQuery rightJoinCollection($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collection relation
 * @method     CustomValueQuery innerJoinCollection($relationAlias = null) Adds a INNER JOIN clause to the query using the Collection relation
 *
 * @method     CustomValueQuery leftJoinCollectible($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collectible relation
 * @method     CustomValueQuery rightJoinCollectible($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collectible relation
 * @method     CustomValueQuery innerJoinCollectible($relationAlias = null) Adds a INNER JOIN clause to the query using the Collectible relation
 *
 * @method     CustomValue findOne(PropelPDO $con = null) Return the first CustomValue matching the query
 * @method     CustomValue findOneOrCreate(PropelPDO $con = null) Return the first CustomValue matching the query, or a new CustomValue object populated from the query conditions when no match is found
 *
 * @method     CustomValue findOneById(int $id) Return the first CustomValue filtered by the id column
 * @method     CustomValue findOneByCollectionId(int $collection_id) Return the first CustomValue filtered by the collection_id column
 * @method     CustomValue findOneByCollectibleId(int $collectible_id) Return the first CustomValue filtered by the collectible_id column
 * @method     CustomValue findOneByFieldId(int $field_id) Return the first CustomValue filtered by the field_id column
 * @method     CustomValue findOneByValueText(string $value_text) Return the first CustomValue filtered by the value_text column
 * @method     CustomValue findOneByValueDate(string $value_date) Return the first CustomValue filtered by the value_date column
 * @method     CustomValue findOneByValueNumeric(double $value_numeric) Return the first CustomValue filtered by the value_numeric column
 * @method     CustomValue findOneByValueBool(boolean $value_bool) Return the first CustomValue filtered by the value_bool column
 * @method     CustomValue findOneByCreatedAt(string $created_at) Return the first CustomValue filtered by the created_at column
 * @method     CustomValue findOneByUpdatedAt(string $updated_at) Return the first CustomValue filtered by the updated_at column
 *
 * @method     array findById(int $id) Return CustomValue objects filtered by the id column
 * @method     array findByCollectionId(int $collection_id) Return CustomValue objects filtered by the collection_id column
 * @method     array findByCollectibleId(int $collectible_id) Return CustomValue objects filtered by the collectible_id column
 * @method     array findByFieldId(int $field_id) Return CustomValue objects filtered by the field_id column
 * @method     array findByValueText(string $value_text) Return CustomValue objects filtered by the value_text column
 * @method     array findByValueDate(string $value_date) Return CustomValue objects filtered by the value_date column
 * @method     array findByValueNumeric(double $value_numeric) Return CustomValue objects filtered by the value_numeric column
 * @method     array findByValueBool(boolean $value_bool) Return CustomValue objects filtered by the value_bool column
 * @method     array findByCreatedAt(string $created_at) Return CustomValue objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return CustomValue objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCustomValueQuery extends ModelCriteria
{
  
  /**
   * Initializes internal state of BaseCustomValueQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'CustomValue', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new CustomValueQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    CustomValueQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof CustomValueQuery)
    {
      return $criteria;
    }
    $query = new CustomValueQuery();
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
   * @return    CustomValue|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = CustomValuePeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(CustomValuePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    CustomValue A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `ID`, `COLLECTION_ID`, `COLLECTIBLE_ID`, `FIELD_ID`, `VALUE_TEXT`, `VALUE_DATE`, `VALUE_NUMERIC`, `VALUE_BOOL`, `CREATED_AT`, `UPDATED_AT` FROM `custom_value` WHERE `ID` = :p0';
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
      $obj = new CustomValue();
      $obj->hydrate($row);
      CustomValuePeer::addInstanceToPool($obj, (string) $row[0]);
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
   * @return    CustomValue|array|mixed the result, formatted by the current formatter
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
   * @return    CustomValueQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(CustomValuePeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    CustomValueQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(CustomValuePeer::ID, $keys, Criteria::IN);
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
   * @return    CustomValueQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(CustomValuePeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the collection_id column
   *
   * Example usage:
   * <code>
   * $query->filterByCollectionId(1234); // WHERE collection_id = 1234
   * $query->filterByCollectionId(array(12, 34)); // WHERE collection_id IN (12, 34)
   * $query->filterByCollectionId(array('min' => 12)); // WHERE collection_id > 12
   * </code>
   *
   * @see       filterByCollection()
   *
   * @param     mixed $collectionId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CustomValueQuery The current query, for fluid interface
   */
  public function filterByCollectionId($collectionId = null, $comparison = null)
  {
    if (is_array($collectionId))
    {
      $useMinMax = false;
      if (isset($collectionId['min']))
      {
        $this->addUsingAlias(CustomValuePeer::COLLECTION_ID, $collectionId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($collectionId['max']))
      {
        $this->addUsingAlias(CustomValuePeer::COLLECTION_ID, $collectionId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CustomValuePeer::COLLECTION_ID, $collectionId, $comparison);
  }

  /**
   * Filter the query on the collectible_id column
   *
   * Example usage:
   * <code>
   * $query->filterByCollectibleId(1234); // WHERE collectible_id = 1234
   * $query->filterByCollectibleId(array(12, 34)); // WHERE collectible_id IN (12, 34)
   * $query->filterByCollectibleId(array('min' => 12)); // WHERE collectible_id > 12
   * </code>
   *
   * @see       filterByCollectible()
   *
   * @param     mixed $collectibleId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CustomValueQuery The current query, for fluid interface
   */
  public function filterByCollectibleId($collectibleId = null, $comparison = null)
  {
    if (is_array($collectibleId))
    {
      $useMinMax = false;
      if (isset($collectibleId['min']))
      {
        $this->addUsingAlias(CustomValuePeer::COLLECTIBLE_ID, $collectibleId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($collectibleId['max']))
      {
        $this->addUsingAlias(CustomValuePeer::COLLECTIBLE_ID, $collectibleId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CustomValuePeer::COLLECTIBLE_ID, $collectibleId, $comparison);
  }

  /**
   * Filter the query on the field_id column
   *
   * Example usage:
   * <code>
   * $query->filterByFieldId(1234); // WHERE field_id = 1234
   * $query->filterByFieldId(array(12, 34)); // WHERE field_id IN (12, 34)
   * $query->filterByFieldId(array('min' => 12)); // WHERE field_id > 12
   * </code>
   *
   * @param     mixed $fieldId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CustomValueQuery The current query, for fluid interface
   */
  public function filterByFieldId($fieldId = null, $comparison = null)
  {
    if (is_array($fieldId))
    {
      $useMinMax = false;
      if (isset($fieldId['min']))
      {
        $this->addUsingAlias(CustomValuePeer::FIELD_ID, $fieldId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($fieldId['max']))
      {
        $this->addUsingAlias(CustomValuePeer::FIELD_ID, $fieldId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CustomValuePeer::FIELD_ID, $fieldId, $comparison);
  }

  /**
   * Filter the query on the value_text column
   *
   * Example usage:
   * <code>
   * $query->filterByValueText('fooValue');   // WHERE value_text = 'fooValue'
   * $query->filterByValueText('%fooValue%'); // WHERE value_text LIKE '%fooValue%'
   * </code>
   *
   * @param     string $valueText The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CustomValueQuery The current query, for fluid interface
   */
  public function filterByValueText($valueText = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($valueText))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $valueText))
      {
        $valueText = str_replace('*', '%', $valueText);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CustomValuePeer::VALUE_TEXT, $valueText, $comparison);
  }

  /**
   * Filter the query on the value_date column
   *
   * Example usage:
   * <code>
   * $query->filterByValueDate('2011-03-14'); // WHERE value_date = '2011-03-14'
   * $query->filterByValueDate('now'); // WHERE value_date = '2011-03-14'
   * $query->filterByValueDate(array('max' => 'yesterday')); // WHERE value_date > '2011-03-13'
   * </code>
   *
   * @param     mixed $valueDate The value to use as filter.
   *              Values can be integers (unix timestamps), DateTime objects, or strings.
   *              Empty strings are treated as NULL.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CustomValueQuery The current query, for fluid interface
   */
  public function filterByValueDate($valueDate = null, $comparison = null)
  {
    if (is_array($valueDate))
    {
      $useMinMax = false;
      if (isset($valueDate['min']))
      {
        $this->addUsingAlias(CustomValuePeer::VALUE_DATE, $valueDate['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($valueDate['max']))
      {
        $this->addUsingAlias(CustomValuePeer::VALUE_DATE, $valueDate['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CustomValuePeer::VALUE_DATE, $valueDate, $comparison);
  }

  /**
   * Filter the query on the value_numeric column
   *
   * Example usage:
   * <code>
   * $query->filterByValueNumeric(1234); // WHERE value_numeric = 1234
   * $query->filterByValueNumeric(array(12, 34)); // WHERE value_numeric IN (12, 34)
   * $query->filterByValueNumeric(array('min' => 12)); // WHERE value_numeric > 12
   * </code>
   *
   * @param     mixed $valueNumeric The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CustomValueQuery The current query, for fluid interface
   */
  public function filterByValueNumeric($valueNumeric = null, $comparison = null)
  {
    if (is_array($valueNumeric))
    {
      $useMinMax = false;
      if (isset($valueNumeric['min']))
      {
        $this->addUsingAlias(CustomValuePeer::VALUE_NUMERIC, $valueNumeric['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($valueNumeric['max']))
      {
        $this->addUsingAlias(CustomValuePeer::VALUE_NUMERIC, $valueNumeric['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CustomValuePeer::VALUE_NUMERIC, $valueNumeric, $comparison);
  }

  /**
   * Filter the query on the value_bool column
   *
   * Example usage:
   * <code>
   * $query->filterByValueBool(true); // WHERE value_bool = true
   * $query->filterByValueBool('yes'); // WHERE value_bool = true
   * </code>
   *
   * @param     boolean|string $valueBool The value to use as filter.
   *              Non-boolean arguments are converted using the following rules:
   *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CustomValueQuery The current query, for fluid interface
   */
  public function filterByValueBool($valueBool = null, $comparison = null)
  {
    if (is_string($valueBool))
    {
      $value_bool = in_array(strtolower($valueBool), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
    }
    return $this->addUsingAlias(CustomValuePeer::VALUE_BOOL, $valueBool, $comparison);
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
   * @return    CustomValueQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(CustomValuePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(CustomValuePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CustomValuePeer::CREATED_AT, $createdAt, $comparison);
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
   * @return    CustomValueQuery The current query, for fluid interface
   */
  public function filterByUpdatedAt($updatedAt = null, $comparison = null)
  {
    if (is_array($updatedAt))
    {
      $useMinMax = false;
      if (isset($updatedAt['min']))
      {
        $this->addUsingAlias(CustomValuePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($updatedAt['max']))
      {
        $this->addUsingAlias(CustomValuePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CustomValuePeer::UPDATED_AT, $updatedAt, $comparison);
  }

  /**
   * Filter the query by a related Collection object
   *
   * @param     Collection|PropelCollection $collection The related object(s) to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CustomValueQuery The current query, for fluid interface
   */
  public function filterByCollection($collection, $comparison = null)
  {
    if ($collection instanceof Collection)
    {
      return $this
        ->addUsingAlias(CustomValuePeer::COLLECTION_ID, $collection->getId(), $comparison);
    }
    elseif ($collection instanceof PropelCollection)
    {
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
      return $this
        ->addUsingAlias(CustomValuePeer::COLLECTION_ID, $collection->toKeyValue('PrimaryKey', 'Id'), $comparison);
    }
    else
    {
      throw new PropelException('filterByCollection() only accepts arguments of type Collection or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the Collection relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CustomValueQuery The current query, for fluid interface
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
   * @param     Collectible|PropelCollection $collectible The related object(s) to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CustomValueQuery The current query, for fluid interface
   */
  public function filterByCollectible($collectible, $comparison = null)
  {
    if ($collectible instanceof Collectible)
    {
      return $this
        ->addUsingAlias(CustomValuePeer::COLLECTIBLE_ID, $collectible->getId(), $comparison);
    }
    elseif ($collectible instanceof PropelCollection)
    {
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
      return $this
        ->addUsingAlias(CustomValuePeer::COLLECTIBLE_ID, $collectible->toKeyValue('PrimaryKey', 'Id'), $comparison);
    }
    else
    {
      throw new PropelException('filterByCollectible() only accepts arguments of type Collectible or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the Collectible relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CustomValueQuery The current query, for fluid interface
   */
  public function joinCollectible($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
  public function useCollectibleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinCollectible($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'Collectible', 'CollectibleQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     CustomValue $customValue Object to remove from the list of results
   *
   * @return    CustomValueQuery The current query, for fluid interface
   */
  public function prune($customValue = null)
  {
    if ($customValue)
    {
      $this->addUsingAlias(CustomValuePeer::ID, $customValue->getId(), Criteria::NOT_EQUAL);
    }

    return $this;
  }

  // timestampable behavior
  
  /**
   * Filter by the latest updated
   *
   * @param      int $nbDays Maximum age of the latest update in days
   *
   * @return     CustomValueQuery The current query, for fluid interface
   */
  public function recentlyUpdated($nbDays = 7)
  {
    return $this->addUsingAlias(CustomValuePeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Filter by the latest created
   *
   * @param      int $nbDays Maximum age of in days
   *
   * @return     CustomValueQuery The current query, for fluid interface
   */
  public function recentlyCreated($nbDays = 7)
  {
    return $this->addUsingAlias(CustomValuePeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Order by update date desc
   *
   * @return     CustomValueQuery The current query, for fluid interface
   */
  public function lastUpdatedFirst()
  {
    return $this->addDescendingOrderByColumn(CustomValuePeer::UPDATED_AT);
  }
  
  /**
   * Order by update date asc
   *
   * @return     CustomValueQuery The current query, for fluid interface
   */
  public function firstUpdatedFirst()
  {
    return $this->addAscendingOrderByColumn(CustomValuePeer::UPDATED_AT);
  }
  
  /**
   * Order by create date desc
   *
   * @return     CustomValueQuery The current query, for fluid interface
   */
  public function lastCreatedFirst()
  {
    return $this->addDescendingOrderByColumn(CustomValuePeer::CREATED_AT);
  }
  
  /**
   * Order by create date asc
   *
   * @return     CustomValueQuery The current query, for fluid interface
   */
  public function firstCreatedFirst()
  {
    return $this->addAscendingOrderByColumn(CustomValuePeer::CREATED_AT);
  }

}