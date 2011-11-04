<?php


/**
 * Base class that represents a query for the 'custom_field' table.
 *
 * 
 *
 * @method     CustomFieldQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CustomFieldQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     CustomFieldQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     CustomFieldQuery orderByObject($order = Criteria::ASC) Order by the object column
 * @method     CustomFieldQuery orderByValidation($order = Criteria::ASC) Order by the validation column
 *
 * @method     CustomFieldQuery groupById() Group by the id column
 * @method     CustomFieldQuery groupByName() Group by the name column
 * @method     CustomFieldQuery groupByType() Group by the type column
 * @method     CustomFieldQuery groupByObject() Group by the object column
 * @method     CustomFieldQuery groupByValidation() Group by the validation column
 *
 * @method     CustomFieldQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CustomFieldQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CustomFieldQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CustomFieldQuery leftJoinCollectionCategoryField($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectionCategoryField relation
 * @method     CustomFieldQuery rightJoinCollectionCategoryField($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectionCategoryField relation
 * @method     CustomFieldQuery innerJoinCollectionCategoryField($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectionCategoryField relation
 *
 * @method     CustomField findOne(PropelPDO $con = null) Return the first CustomField matching the query
 * @method     CustomField findOneOrCreate(PropelPDO $con = null) Return the first CustomField matching the query, or a new CustomField object populated from the query conditions when no match is found
 *
 * @method     CustomField findOneById(int $id) Return the first CustomField filtered by the id column
 * @method     CustomField findOneByName(string $name) Return the first CustomField filtered by the name column
 * @method     CustomField findOneByType(int $type) Return the first CustomField filtered by the type column
 * @method     CustomField findOneByObject(string $object) Return the first CustomField filtered by the object column
 * @method     CustomField findOneByValidation(string $validation) Return the first CustomField filtered by the validation column
 *
 * @method     array findById(int $id) Return CustomField objects filtered by the id column
 * @method     array findByName(string $name) Return CustomField objects filtered by the name column
 * @method     array findByType(int $type) Return CustomField objects filtered by the type column
 * @method     array findByObject(string $object) Return CustomField objects filtered by the object column
 * @method     array findByValidation(string $validation) Return CustomField objects filtered by the validation column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCustomFieldQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCustomFieldQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'CustomField', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CustomFieldQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    CustomFieldQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CustomFieldQuery) {
            return $criteria;
        }
        $query = new CustomFieldQuery();
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
     * @return    CustomField|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CustomFieldPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    CustomFieldQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(CustomFieldPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    CustomFieldQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(CustomFieldPeer::ID, $keys, Criteria::IN);
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
     * @return    CustomFieldQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(CustomFieldPeer::ID, $id, $comparison);
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
     * @return    CustomFieldQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CustomFieldPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType(1234); // WHERE type = 1234
     * $query->filterByType(array(12, 34)); // WHERE type IN (12, 34)
     * $query->filterByType(array('min' => 12)); // WHERE type > 12
     * </code>
     *
     * @param     mixed $type The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CustomFieldQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (is_array($type)) {
            $useMinMax = false;
            if (isset($type['min'])) {
                $this->addUsingAlias(CustomFieldPeer::TYPE, $type['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($type['max'])) {
                $this->addUsingAlias(CustomFieldPeer::TYPE, $type['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CustomFieldPeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the object column
     *
     * Example usage:
     * <code>
     * $query->filterByObject('fooValue');   // WHERE object = 'fooValue'
     * $query->filterByObject('%fooValue%'); // WHERE object LIKE '%fooValue%'
     * </code>
     *
     * @param     string $object The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CustomFieldQuery The current query, for fluid interface
     */
    public function filterByObject($object = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($object)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $object)) {
                $object = str_replace('*', '%', $object);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CustomFieldPeer::OBJECT, $object, $comparison);
    }

    /**
     * Filter the query on the validation column
     *
     * Example usage:
     * <code>
     * $query->filterByValidation('fooValue');   // WHERE validation = 'fooValue'
     * $query->filterByValidation('%fooValue%'); // WHERE validation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $validation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CustomFieldQuery The current query, for fluid interface
     */
    public function filterByValidation($validation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($validation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $validation)) {
                $validation = str_replace('*', '%', $validation);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CustomFieldPeer::VALIDATION, $validation, $comparison);
    }

    /**
     * Filter the query by a related CollectionCategoryField object
     *
     * @param     CollectionCategoryField $collectionCategoryField  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CustomFieldQuery The current query, for fluid interface
     */
    public function filterByCollectionCategoryField($collectionCategoryField, $comparison = null)
    {
        if ($collectionCategoryField instanceof CollectionCategoryField) {
            return $this
                ->addUsingAlias(CustomFieldPeer::ID, $collectionCategoryField->getCustomFieldId(), $comparison);
        } elseif ($collectionCategoryField instanceof PropelCollection) {
            return $this
                ->useCollectionCategoryFieldQuery()
                ->filterByPrimaryKeys($collectionCategoryField->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCollectionCategoryField() only accepts arguments of type CollectionCategoryField or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CollectionCategoryField relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CustomFieldQuery The current query, for fluid interface
     */
    public function joinCollectionCategoryField($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CollectionCategoryField');

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
            $this->addJoinObject($join, 'CollectionCategoryField');
        }

        return $this;
    }

    /**
     * Use the CollectionCategoryField relation CollectionCategoryField object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectionCategoryFieldQuery A secondary query class using the current class as primary query
     */
    public function useCollectionCategoryFieldQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCollectionCategoryField($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CollectionCategoryField', 'CollectionCategoryFieldQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     CustomField $customField Object to remove from the list of results
     *
     * @return    CustomFieldQuery The current query, for fluid interface
     */
    public function prune($customField = null)
    {
        if ($customField) {
            $this->addUsingAlias(CustomFieldPeer::ID, $customField->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}