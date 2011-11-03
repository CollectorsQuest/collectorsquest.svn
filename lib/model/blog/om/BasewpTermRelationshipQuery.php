<?php


/**
 * Base class that represents a query for the 'wp_term_relationships' table.
 *
 * 
 *
 * @method     wpTermRelationshipQuery orderByObjectId($order = Criteria::ASC) Order by the object_id column
 * @method     wpTermRelationshipQuery orderByTermTaxonomyId($order = Criteria::ASC) Order by the term_taxonomy_id column
 *
 * @method     wpTermRelationshipQuery groupByObjectId() Group by the object_id column
 * @method     wpTermRelationshipQuery groupByTermTaxonomyId() Group by the term_taxonomy_id column
 *
 * @method     wpTermRelationshipQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     wpTermRelationshipQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     wpTermRelationshipQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     wpTermRelationship findOne(PropelPDO $con = null) Return the first wpTermRelationship matching the query
 * @method     wpTermRelationship findOneOrCreate(PropelPDO $con = null) Return the first wpTermRelationship matching the query, or a new wpTermRelationship object populated from the query conditions when no match is found
 *
 * @method     wpTermRelationship findOneByObjectId(int $object_id) Return the first wpTermRelationship filtered by the object_id column
 * @method     wpTermRelationship findOneByTermTaxonomyId(int $term_taxonomy_id) Return the first wpTermRelationship filtered by the term_taxonomy_id column
 *
 * @method     array findByObjectId(int $object_id) Return wpTermRelationship objects filtered by the object_id column
 * @method     array findByTermTaxonomyId(int $term_taxonomy_id) Return wpTermRelationship objects filtered by the term_taxonomy_id column
 *
 * @package    propel.generator.lib.model.blog.om
 */
abstract class BasewpTermRelationshipQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BasewpTermRelationshipQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'blog', $modelName = 'wpTermRelationship', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new wpTermRelationshipQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    wpTermRelationshipQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof wpTermRelationshipQuery)
    {
      return $criteria;
    }
    $query = new wpTermRelationshipQuery();
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
   * <code>
   * $obj = $c->findPk(array(12, 34), $con);
   * </code>
   * @param     array[$object_id, $term_taxonomy_id] $key Primary key to use for the query
   * @param     PropelPDO $con an optional connection object
   *
   * @return    wpTermRelationship|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = wpTermRelationshipPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter())
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
   * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
   * @return    wpTermRelationshipQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    $this->addUsingAlias(wpTermRelationshipPeer::OBJECT_ID, $key[0], Criteria::EQUAL);
    $this->addUsingAlias(wpTermRelationshipPeer::TERM_TAXONOMY_ID, $key[1], Criteria::EQUAL);
    
    return $this;
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    wpTermRelationshipQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    if (empty($keys))
    {
      return $this->add(null, '1<>1', Criteria::CUSTOM);
    }
    foreach ($keys as $key)
    {
      $cton0 = $this->getNewCriterion(wpTermRelationshipPeer::OBJECT_ID, $key[0], Criteria::EQUAL);
      $cton1 = $this->getNewCriterion(wpTermRelationshipPeer::TERM_TAXONOMY_ID, $key[1], Criteria::EQUAL);
      $cton0->addAnd($cton1);
      $this->addOr($cton0);
    }
    
    return $this;
  }

  /**
   * Filter the query on the object_id column
   * 
   * @param     int|array $objectId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpTermRelationshipQuery The current query, for fluid interface
   */
  public function filterByObjectId($objectId = null, $comparison = null)
  {
    if (is_array($objectId) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(wpTermRelationshipPeer::OBJECT_ID, $objectId, $comparison);
  }

  /**
   * Filter the query on the term_taxonomy_id column
   * 
   * @param     int|array $termTaxonomyId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpTermRelationshipQuery The current query, for fluid interface
   */
  public function filterByTermTaxonomyId($termTaxonomyId = null, $comparison = null)
  {
    if (is_array($termTaxonomyId) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(wpTermRelationshipPeer::TERM_TAXONOMY_ID, $termTaxonomyId, $comparison);
  }

  /**
   * Exclude object from result
   *
   * @param     wpTermRelationship $wpTermRelationship Object to remove from the list of results
   *
   * @return    wpTermRelationshipQuery The current query, for fluid interface
   */
  public function prune($wpTermRelationship = null)
  {
    if ($wpTermRelationship)
    {
      $this->addCond('pruneCond0', $this->getAliasedColName(wpTermRelationshipPeer::OBJECT_ID), $wpTermRelationship->getObjectId(), Criteria::NOT_EQUAL);
      $this->addCond('pruneCond1', $this->getAliasedColName(wpTermRelationshipPeer::TERM_TAXONOMY_ID), $wpTermRelationship->getTermTaxonomyId(), Criteria::NOT_EQUAL);
      $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
    }
    
    return $this;
  }

}
