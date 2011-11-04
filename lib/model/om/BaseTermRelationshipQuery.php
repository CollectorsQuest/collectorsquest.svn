<?php


/**
 * Base class that represents a query for the 'term_relationship' table.
 *
 * 
 *
 * @method     TermRelationshipQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     TermRelationshipQuery orderByTermId($order = Criteria::ASC) Order by the term_id column
 * @method     TermRelationshipQuery orderByModel($order = Criteria::ASC) Order by the model column
 * @method     TermRelationshipQuery orderByModelId($order = Criteria::ASC) Order by the model_id column
 *
 * @method     TermRelationshipQuery groupById() Group by the id column
 * @method     TermRelationshipQuery groupByTermId() Group by the term_id column
 * @method     TermRelationshipQuery groupByModel() Group by the model column
 * @method     TermRelationshipQuery groupByModelId() Group by the model_id column
 *
 * @method     TermRelationshipQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TermRelationshipQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TermRelationshipQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TermRelationshipQuery leftJoinTerm($relationAlias = null) Adds a LEFT JOIN clause to the query using the Term relation
 * @method     TermRelationshipQuery rightJoinTerm($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Term relation
 * @method     TermRelationshipQuery innerJoinTerm($relationAlias = null) Adds a INNER JOIN clause to the query using the Term relation
 *
 * @method     TermRelationship findOne(PropelPDO $con = null) Return the first TermRelationship matching the query
 * @method     TermRelationship findOneOrCreate(PropelPDO $con = null) Return the first TermRelationship matching the query, or a new TermRelationship object populated from the query conditions when no match is found
 *
 * @method     TermRelationship findOneById(int $id) Return the first TermRelationship filtered by the id column
 * @method     TermRelationship findOneByTermId(int $term_id) Return the first TermRelationship filtered by the term_id column
 * @method     TermRelationship findOneByModel(string $model) Return the first TermRelationship filtered by the model column
 * @method     TermRelationship findOneByModelId(int $model_id) Return the first TermRelationship filtered by the model_id column
 *
 * @method     array findById(int $id) Return TermRelationship objects filtered by the id column
 * @method     array findByTermId(int $term_id) Return TermRelationship objects filtered by the term_id column
 * @method     array findByModel(string $model) Return TermRelationship objects filtered by the model column
 * @method     array findByModelId(int $model_id) Return TermRelationship objects filtered by the model_id column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseTermRelationshipQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseTermRelationshipQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'TermRelationship', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TermRelationshipQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    TermRelationshipQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TermRelationshipQuery) {
            return $criteria;
        }
        $query = new TermRelationshipQuery();
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
     * @return    TermRelationship|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = TermRelationshipPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    TermRelationshipQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(TermRelationshipPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    TermRelationshipQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(TermRelationshipPeer::ID, $keys, Criteria::IN);
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
     * @return    TermRelationshipQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(TermRelationshipPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the term_id column
     *
     * Example usage:
     * <code>
     * $query->filterByTermId(1234); // WHERE term_id = 1234
     * $query->filterByTermId(array(12, 34)); // WHERE term_id IN (12, 34)
     * $query->filterByTermId(array('min' => 12)); // WHERE term_id > 12
     * </code>
     *
     * @see       filterByTerm()
     *
     * @param     mixed $termId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TermRelationshipQuery The current query, for fluid interface
     */
    public function filterByTermId($termId = null, $comparison = null)
    {
        if (is_array($termId)) {
            $useMinMax = false;
            if (isset($termId['min'])) {
                $this->addUsingAlias(TermRelationshipPeer::TERM_ID, $termId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($termId['max'])) {
                $this->addUsingAlias(TermRelationshipPeer::TERM_ID, $termId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(TermRelationshipPeer::TERM_ID, $termId, $comparison);
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
     * @return    TermRelationshipQuery The current query, for fluid interface
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
        return $this->addUsingAlias(TermRelationshipPeer::MODEL, $model, $comparison);
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
     * @return    TermRelationshipQuery The current query, for fluid interface
     */
    public function filterByModelId($modelId = null, $comparison = null)
    {
        if (is_array($modelId)) {
            $useMinMax = false;
            if (isset($modelId['min'])) {
                $this->addUsingAlias(TermRelationshipPeer::MODEL_ID, $modelId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modelId['max'])) {
                $this->addUsingAlias(TermRelationshipPeer::MODEL_ID, $modelId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(TermRelationshipPeer::MODEL_ID, $modelId, $comparison);
    }

    /**
     * Filter the query by a related Term object
     *
     * @param     Term|PropelCollection $term The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TermRelationshipQuery The current query, for fluid interface
     */
    public function filterByTerm($term, $comparison = null)
    {
        if ($term instanceof Term) {
            return $this
                ->addUsingAlias(TermRelationshipPeer::TERM_ID, $term->getId(), $comparison);
        } elseif ($term instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(TermRelationshipPeer::TERM_ID, $term->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByTerm() only accepts arguments of type Term or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Term relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    TermRelationshipQuery The current query, for fluid interface
     */
    public function joinTerm($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Term');

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
            $this->addJoinObject($join, 'Term');
        }

        return $this;
    }

    /**
     * Use the Term relation Term object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    TermQuery A secondary query class using the current class as primary query
     */
    public function useTermQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinTerm($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Term', 'TermQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     TermRelationship $termRelationship Object to remove from the list of results
     *
     * @return    TermRelationshipQuery The current query, for fluid interface
     */
    public function prune($termRelationship = null)
    {
        if ($termRelationship) {
            $this->addUsingAlias(TermRelationshipPeer::ID, $termRelationship->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}