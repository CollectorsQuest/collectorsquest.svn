<?php


/**
 * Base class that represents a query for the 'collection_item_media' table.
 *
 * 
 *
 * @method     CollectionItemMediaQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectionItemMediaQuery orderByCollectionItemId($order = Criteria::ASC) Order by the collection_item_id column
 * @method     CollectionItemMediaQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     CollectionItemMediaQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     CollectionItemMediaQuery orderByFilename($order = Criteria::ASC) Order by the filename column
 * @method     CollectionItemMediaQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     CollectionItemMediaQuery groupById() Group by the id column
 * @method     CollectionItemMediaQuery groupByCollectionItemId() Group by the collection_item_id column
 * @method     CollectionItemMediaQuery groupByName() Group by the name column
 * @method     CollectionItemMediaQuery groupByType() Group by the type column
 * @method     CollectionItemMediaQuery groupByFilename() Group by the filename column
 * @method     CollectionItemMediaQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     CollectionItemMediaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectionItemMediaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectionItemMediaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectionItemMediaQuery leftJoinCollectionItem($relationAlias = '') Adds a LEFT JOIN clause to the query using the CollectionItem relation
 * @method     CollectionItemMediaQuery rightJoinCollectionItem($relationAlias = '') Adds a RIGHT JOIN clause to the query using the CollectionItem relation
 * @method     CollectionItemMediaQuery innerJoinCollectionItem($relationAlias = '') Adds a INNER JOIN clause to the query using the CollectionItem relation
 *
 * @method     CollectionItemMedia findOne(PropelPDO $con = null) Return the first CollectionItemMedia matching the query
 * @method     CollectionItemMedia findOneById(int $id) Return the first CollectionItemMedia filtered by the id column
 * @method     CollectionItemMedia findOneByCollectionItemId(int $collection_item_id) Return the first CollectionItemMedia filtered by the collection_item_id column
 * @method     CollectionItemMedia findOneByName(string $name) Return the first CollectionItemMedia filtered by the name column
 * @method     CollectionItemMedia findOneByType(string $type) Return the first CollectionItemMedia filtered by the type column
 * @method     CollectionItemMedia findOneByFilename(string $filename) Return the first CollectionItemMedia filtered by the filename column
 * @method     CollectionItemMedia findOneByCreatedAt(string $created_at) Return the first CollectionItemMedia filtered by the created_at column
 *
 * @method     array findById(int $id) Return CollectionItemMedia objects filtered by the id column
 * @method     array findByCollectionItemId(int $collection_item_id) Return CollectionItemMedia objects filtered by the collection_item_id column
 * @method     array findByName(string $name) Return CollectionItemMedia objects filtered by the name column
 * @method     array findByType(string $type) Return CollectionItemMedia objects filtered by the type column
 * @method     array findByFilename(string $filename) Return CollectionItemMedia objects filtered by the filename column
 * @method     array findByCreatedAt(string $created_at) Return CollectionItemMedia objects filtered by the created_at column
 *
 * @package    propel.generator.lib.legacy.om
 */
abstract class BaseCollectionItemMediaQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCollectionItemMediaQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'CollectionItemMedia', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CollectionItemMediaQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CollectionItemMediaQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CollectionItemMediaQuery) {
			return $criteria;
		}
		$query = new CollectionItemMediaQuery();
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
	 * @return    CollectionItemMedia|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = CollectionItemMediaPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$stmt = $this
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $this->getFormatter()->formatOne($stmt);
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
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    CollectionItemMediaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CollectionItemMediaPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CollectionItemMediaQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CollectionItemMediaPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CollectionItemMediaQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = Criteria::EQUAL)
	{
		if (is_array($id) && $comparison == Criteria::EQUAL) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(CollectionItemMediaPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the collection_item_id column
	 * 
	 * @param     int|array $collectionItemId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CollectionItemMediaQuery The current query, for fluid interface
	 */
	public function filterByCollectionItemId($collectionItemId = null, $comparison = Criteria::EQUAL)
	{
		if (is_array($collectionItemId)) {
			$useMinMax = false;
			if (isset($collectionItemId['min'])) {
				$this->addUsingAlias(CollectionItemMediaPeer::COLLECTION_ITEM_ID, $collectionItemId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($collectionItemId['max'])) {
				$this->addUsingAlias(CollectionItemMediaPeer::COLLECTION_ITEM_ID, $collectionItemId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if ($comparison == Criteria::EQUAL) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CollectionItemMediaPeer::COLLECTION_ITEM_ID, $collectionItemId, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CollectionItemMediaQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = Criteria::EQUAL)
	{
		if (is_array($name)) {
			if ($comparison == Criteria::EQUAL) {
				$comparison = Criteria::IN;
			}
		} elseif (preg_match('/[\%\*]/', $name)) {
			$name = str_replace('*', '%', $name);
			if ($comparison == Criteria::EQUAL) {
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CollectionItemMediaPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the type column
	 * 
	 * @param     string $type The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CollectionItemMediaQuery The current query, for fluid interface
	 */
	public function filterByType($type = null, $comparison = Criteria::EQUAL)
	{
		if (is_array($type)) {
			if ($comparison == Criteria::EQUAL) {
				$comparison = Criteria::IN;
			}
		} elseif (preg_match('/[\%\*]/', $type)) {
			$type = str_replace('*', '%', $type);
			if ($comparison == Criteria::EQUAL) {
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CollectionItemMediaPeer::TYPE, $type, $comparison);
	}

	/**
	 * Filter the query on the filename column
	 * 
	 * @param     string $filename The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CollectionItemMediaQuery The current query, for fluid interface
	 */
	public function filterByFilename($filename = null, $comparison = Criteria::EQUAL)
	{
		if (is_array($filename)) {
			if ($comparison == Criteria::EQUAL) {
				$comparison = Criteria::IN;
			}
		} elseif (preg_match('/[\%\*]/', $filename)) {
			$filename = str_replace('*', '%', $filename);
			if ($comparison == Criteria::EQUAL) {
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CollectionItemMediaPeer::FILENAME, $filename, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CollectionItemMediaQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = Criteria::EQUAL)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(CollectionItemMediaPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(CollectionItemMediaPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if ($comparison == Criteria::EQUAL) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CollectionItemMediaPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query by a related CollectionItem object
	 *
	 * @param     CollectionItem $collectionItem  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CollectionItemMediaQuery The current query, for fluid interface
	 */
	public function filterByCollectionItem($collectionItem, $comparison = Criteria::EQUAL)
	{
		return $this
			->addUsingAlias(CollectionItemMediaPeer::COLLECTION_ITEM_ID, $collectionItem->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the CollectionItem relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CollectionItemMediaQuery The current query, for fluid interface
	 */
	public function joinCollectionItem($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('CollectionItem');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'CollectionItem');
		}
		
		return $this;
	}

	/**
	 * Use the CollectionItem relation CollectionItem object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CollectionItemQuery A secondary query class using the current class as primary query
	 */
	public function useCollectionItemQuery($relationAlias = '', $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCollectionItem($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'CollectionItem', 'CollectionItemQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     CollectionItemMedia $collectionItemMedia Object to remove from the list of results
	 *
	 * @return    CollectionItemMediaQuery The current query, for fluid interface
	 */
	public function prune($collectionItemMedia = null)
	{
		if ($collectionItemMedia) {
			$this->addUsingAlias(CollectionItemMediaPeer::ID, $collectionItemMedia->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

	/**
	 * Code to execute before every SELECT statement
	 * 
	 * @param     PropelPDO $con The connection object used by the query
	 */
	protected function basePreSelect(PropelPDO $con)
	{
		return $this->preSelect($con);
	}

	/**
	 * Code to execute before every DELETE statement
	 * 
	 * @param     PropelPDO $con The connection object used by the query
	 */
	protected function basePreDelete(PropelPDO $con)
	{
		return $this->preDelete($con);
	}

	/**
	 * Code to execute before every UPDATE statement
	 * 
	 * @param     array $values The associatiove array of columns and values for the update
	 * @param     PropelPDO $con The connection object used by the query
	 */
	protected function basePreUpdate(&$values, PropelPDO $con)
	{
		return $this->preUpdate($values, $con);
	}

} // BaseCollectionItemMediaQuery
