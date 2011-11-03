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
   * Find object by primary key
   * Use instance pooling to avoid a database query if the object exists
   * <code>
   * $obj  = $c->findPk(12, $con);
   * </code>
   * @param     mixed $key Primary key to use for the query
   * @param     PropelPDO $con an optional connection object
   *
   * @return    CustomValue|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = CustomValuePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     int|array $collectionId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     int|array $collectibleId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     int|array $fieldId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     string $valueText The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
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
   * @param     string|array $valueDate The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     double|array $valueNumeric The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     boolean|string $valueBool The value to use as filter.
   *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CustomValueQuery The current query, for fluid interface
   */
  public function filterByValueBool($valueBool = null, $comparison = null)
  {
    if (is_string($valueBool))
    {
      $value_bool = in_array(strtolower($valueBool), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
    }
    return $this->addUsingAlias(CustomValuePeer::VALUE_BOOL, $valueBool, $comparison);
  }

  /**
   * Filter the query on the created_at column
   * 
   * @param     string|array $createdAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     string|array $updatedAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     Collection $collection  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CustomValueQuery The current query, for fluid interface
   */
  public function filterByCollection($collection, $comparison = null)
  {
    return $this
      ->addUsingAlias(CustomValuePeer::COLLECTION_ID, $collection->getId(), $comparison);
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
   * @param     Collectible $collectible  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CustomValueQuery The current query, for fluid interface
   */
  public function filterByCollectible($collectible, $comparison = null)
  {
    return $this
      ->addUsingAlias(CustomValuePeer::COLLECTIBLE_ID, $collectible->getId(), $comparison);
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

}
