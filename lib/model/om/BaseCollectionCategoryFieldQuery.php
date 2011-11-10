<?php


/**
 * Base class that represents a query for the 'collection_category_field' table.
 *
 * 
 *
 * @method     CollectionCategoryFieldQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectionCategoryFieldQuery orderByCollectionCategoryId($order = Criteria::ASC) Order by the collection_category_id column
 * @method     CollectionCategoryFieldQuery orderByCustomFieldId($order = Criteria::ASC) Order by the custom_field_id column
 *
 * @method     CollectionCategoryFieldQuery groupById() Group by the id column
 * @method     CollectionCategoryFieldQuery groupByCollectionCategoryId() Group by the collection_category_id column
 * @method     CollectionCategoryFieldQuery groupByCustomFieldId() Group by the custom_field_id column
 *
 * @method     CollectionCategoryFieldQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectionCategoryFieldQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectionCategoryFieldQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectionCategoryFieldQuery leftJoinCollectionCategory($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectionCategory relation
 * @method     CollectionCategoryFieldQuery rightJoinCollectionCategory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectionCategory relation
 * @method     CollectionCategoryFieldQuery innerJoinCollectionCategory($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectionCategory relation
 *
 * @method     CollectionCategoryFieldQuery leftJoinCustomField($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomField relation
 * @method     CollectionCategoryFieldQuery rightJoinCustomField($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomField relation
 * @method     CollectionCategoryFieldQuery innerJoinCustomField($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomField relation
 *
 * @method     CollectionCategoryField findOne(PropelPDO $con = null) Return the first CollectionCategoryField matching the query
 * @method     CollectionCategoryField findOneOrCreate(PropelPDO $con = null) Return the first CollectionCategoryField matching the query, or a new CollectionCategoryField object populated from the query conditions when no match is found
 *
 * @method     CollectionCategoryField findOneById(int $id) Return the first CollectionCategoryField filtered by the id column
 * @method     CollectionCategoryField findOneByCollectionCategoryId(int $collection_category_id) Return the first CollectionCategoryField filtered by the collection_category_id column
 * @method     CollectionCategoryField findOneByCustomFieldId(int $custom_field_id) Return the first CollectionCategoryField filtered by the custom_field_id column
 *
 * @method     array findById(int $id) Return CollectionCategoryField objects filtered by the id column
 * @method     array findByCollectionCategoryId(int $collection_category_id) Return CollectionCategoryField objects filtered by the collection_category_id column
 * @method     array findByCustomFieldId(int $custom_field_id) Return CollectionCategoryField objects filtered by the custom_field_id column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectionCategoryFieldQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCollectionCategoryFieldQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'CollectionCategoryField', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CollectionCategoryFieldQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    CollectionCategoryFieldQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CollectionCategoryFieldQuery) {
            return $criteria;
        }
        $query = new CollectionCategoryFieldQuery();
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
     * @return    CollectionCategoryField|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CollectionCategoryFieldPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    CollectionCategoryFieldQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(CollectionCategoryFieldPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    CollectionCategoryFieldQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(CollectionCategoryFieldPeer::ID, $keys, Criteria::IN);
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
     * @return    CollectionCategoryFieldQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(CollectionCategoryFieldPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the collection_category_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCollectionCategoryId(1234); // WHERE collection_category_id = 1234
     * $query->filterByCollectionCategoryId(array(12, 34)); // WHERE collection_category_id IN (12, 34)
     * $query->filterByCollectionCategoryId(array('min' => 12)); // WHERE collection_category_id > 12
     * </code>
     *
     * @see       filterByCollectionCategory()
     *
     * @param     mixed $collectionCategoryId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionCategoryFieldQuery The current query, for fluid interface
     */
    public function filterByCollectionCategoryId($collectionCategoryId = null, $comparison = null)
    {
        if (is_array($collectionCategoryId)) {
            $useMinMax = false;
            if (isset($collectionCategoryId['min'])) {
                $this->addUsingAlias(CollectionCategoryFieldPeer::COLLECTION_CATEGORY_ID, $collectionCategoryId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectionCategoryId['max'])) {
                $this->addUsingAlias(CollectionCategoryFieldPeer::COLLECTION_CATEGORY_ID, $collectionCategoryId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionCategoryFieldPeer::COLLECTION_CATEGORY_ID, $collectionCategoryId, $comparison);
    }

    /**
     * Filter the query on the custom_field_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomFieldId(1234); // WHERE custom_field_id = 1234
     * $query->filterByCustomFieldId(array(12, 34)); // WHERE custom_field_id IN (12, 34)
     * $query->filterByCustomFieldId(array('min' => 12)); // WHERE custom_field_id > 12
     * </code>
     *
     * @see       filterByCustomField()
     *
     * @param     mixed $customFieldId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionCategoryFieldQuery The current query, for fluid interface
     */
    public function filterByCustomFieldId($customFieldId = null, $comparison = null)
    {
        if (is_array($customFieldId)) {
            $useMinMax = false;
            if (isset($customFieldId['min'])) {
                $this->addUsingAlias(CollectionCategoryFieldPeer::CUSTOM_FIELD_ID, $customFieldId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($customFieldId['max'])) {
                $this->addUsingAlias(CollectionCategoryFieldPeer::CUSTOM_FIELD_ID, $customFieldId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectionCategoryFieldPeer::CUSTOM_FIELD_ID, $customFieldId, $comparison);
    }

    /**
     * Filter the query by a related CollectionCategory object
     *
     * @param     CollectionCategory|PropelCollection $collectionCategory The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionCategoryFieldQuery The current query, for fluid interface
     */
    public function filterByCollectionCategory($collectionCategory, $comparison = null)
    {
        if ($collectionCategory instanceof CollectionCategory) {
            return $this
                ->addUsingAlias(CollectionCategoryFieldPeer::COLLECTION_CATEGORY_ID, $collectionCategory->getId(), $comparison);
        } elseif ($collectionCategory instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(CollectionCategoryFieldPeer::COLLECTION_CATEGORY_ID, $collectionCategory->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCollectionCategory() only accepts arguments of type CollectionCategory or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CollectionCategory relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectionCategoryFieldQuery The current query, for fluid interface
     */
    public function joinCollectionCategory($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CollectionCategory');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CollectionCategory');
        }

        return $this;
    }

    /**
     * Use the CollectionCategory relation CollectionCategory object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectionCategoryQuery A secondary query class using the current class as primary query
     */
    public function useCollectionCategoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCollectionCategory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CollectionCategory', 'CollectionCategoryQuery');
    }

    /**
     * Filter the query by a related CustomField object
     *
     * @param     CustomField|PropelCollection $customField The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectionCategoryFieldQuery The current query, for fluid interface
     */
    public function filterByCustomField($customField, $comparison = null)
    {
        if ($customField instanceof CustomField) {
            return $this
                ->addUsingAlias(CollectionCategoryFieldPeer::CUSTOM_FIELD_ID, $customField->getId(), $comparison);
        } elseif ($customField instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(CollectionCategoryFieldPeer::CUSTOM_FIELD_ID, $customField->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCustomField() only accepts arguments of type CustomField or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CustomField relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectionCategoryFieldQuery The current query, for fluid interface
     */
    public function joinCustomField($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CustomField');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CustomField');
        }

        return $this;
    }

    /**
     * Use the CustomField relation CustomField object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CustomFieldQuery A secondary query class using the current class as primary query
     */
    public function useCustomFieldQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCustomField($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CustomField', 'CustomFieldQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     CollectionCategoryField $collectionCategoryField Object to remove from the list of results
     *
     * @return    CollectionCategoryFieldQuery The current query, for fluid interface
     */
    public function prune($collectionCategoryField = null)
    {
        if ($collectionCategoryField) {
            $this->addUsingAlias(CollectionCategoryFieldPeer::ID, $collectionCategoryField->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}