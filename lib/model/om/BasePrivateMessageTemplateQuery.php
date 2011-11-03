<?php


/**
 * Base class that represents a query for the 'private_message_template' table.
 *
 * 
 *
 * @method     PrivateMessageTemplateQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PrivateMessageTemplateQuery orderBySubject($order = Criteria::ASC) Order by the subject column
 * @method     PrivateMessageTemplateQuery orderByBody($order = Criteria::ASC) Order by the body column
 * @method     PrivateMessageTemplateQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     PrivateMessageTemplateQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     PrivateMessageTemplateQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     PrivateMessageTemplateQuery groupById() Group by the id column
 * @method     PrivateMessageTemplateQuery groupBySubject() Group by the subject column
 * @method     PrivateMessageTemplateQuery groupByBody() Group by the body column
 * @method     PrivateMessageTemplateQuery groupByDescription() Group by the description column
 * @method     PrivateMessageTemplateQuery groupByUpdatedAt() Group by the updated_at column
 * @method     PrivateMessageTemplateQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     PrivateMessageTemplateQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PrivateMessageTemplateQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PrivateMessageTemplateQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PrivateMessageTemplate findOne(PropelPDO $con = null) Return the first PrivateMessageTemplate matching the query
 * @method     PrivateMessageTemplate findOneOrCreate(PropelPDO $con = null) Return the first PrivateMessageTemplate matching the query, or a new PrivateMessageTemplate object populated from the query conditions when no match is found
 *
 * @method     PrivateMessageTemplate findOneById(int $id) Return the first PrivateMessageTemplate filtered by the id column
 * @method     PrivateMessageTemplate findOneBySubject(string $subject) Return the first PrivateMessageTemplate filtered by the subject column
 * @method     PrivateMessageTemplate findOneByBody(string $body) Return the first PrivateMessageTemplate filtered by the body column
 * @method     PrivateMessageTemplate findOneByDescription(string $description) Return the first PrivateMessageTemplate filtered by the description column
 * @method     PrivateMessageTemplate findOneByUpdatedAt(string $updated_at) Return the first PrivateMessageTemplate filtered by the updated_at column
 * @method     PrivateMessageTemplate findOneByCreatedAt(string $created_at) Return the first PrivateMessageTemplate filtered by the created_at column
 *
 * @method     array findById(int $id) Return PrivateMessageTemplate objects filtered by the id column
 * @method     array findBySubject(string $subject) Return PrivateMessageTemplate objects filtered by the subject column
 * @method     array findByBody(string $body) Return PrivateMessageTemplate objects filtered by the body column
 * @method     array findByDescription(string $description) Return PrivateMessageTemplate objects filtered by the description column
 * @method     array findByUpdatedAt(string $updated_at) Return PrivateMessageTemplate objects filtered by the updated_at column
 * @method     array findByCreatedAt(string $created_at) Return PrivateMessageTemplate objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePrivateMessageTemplateQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BasePrivateMessageTemplateQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'PrivateMessageTemplate', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new PrivateMessageTemplateQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    PrivateMessageTemplateQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof PrivateMessageTemplateQuery)
    {
      return $criteria;
    }
    $query = new PrivateMessageTemplateQuery();
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
   * @return    PrivateMessageTemplate|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = PrivateMessageTemplatePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @return    PrivateMessageTemplateQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(PrivateMessageTemplatePeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    PrivateMessageTemplateQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(PrivateMessageTemplatePeer::ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the id column
   * 
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PrivateMessageTemplateQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(PrivateMessageTemplatePeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the subject column
   * 
   * @param     string $subject The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PrivateMessageTemplateQuery The current query, for fluid interface
   */
  public function filterBySubject($subject = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($subject))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $subject))
      {
        $subject = str_replace('*', '%', $subject);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(PrivateMessageTemplatePeer::SUBJECT, $subject, $comparison);
  }

  /**
   * Filter the query on the body column
   * 
   * @param     string $body The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PrivateMessageTemplateQuery The current query, for fluid interface
   */
  public function filterByBody($body = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($body))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $body))
      {
        $body = str_replace('*', '%', $body);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(PrivateMessageTemplatePeer::BODY, $body, $comparison);
  }

  /**
   * Filter the query on the description column
   * 
   * @param     string $description The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PrivateMessageTemplateQuery The current query, for fluid interface
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
    return $this->addUsingAlias(PrivateMessageTemplatePeer::DESCRIPTION, $description, $comparison);
  }

  /**
   * Filter the query on the updated_at column
   * 
   * @param     string|array $updatedAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PrivateMessageTemplateQuery The current query, for fluid interface
   */
  public function filterByUpdatedAt($updatedAt = null, $comparison = null)
  {
    if (is_array($updatedAt))
    {
      $useMinMax = false;
      if (isset($updatedAt['min']))
      {
        $this->addUsingAlias(PrivateMessageTemplatePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($updatedAt['max']))
      {
        $this->addUsingAlias(PrivateMessageTemplatePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PrivateMessageTemplatePeer::UPDATED_AT, $updatedAt, $comparison);
  }

  /**
   * Filter the query on the created_at column
   * 
   * @param     string|array $createdAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    PrivateMessageTemplateQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(PrivateMessageTemplatePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(PrivateMessageTemplatePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(PrivateMessageTemplatePeer::CREATED_AT, $createdAt, $comparison);
  }

  /**
   * Exclude object from result
   *
   * @param     PrivateMessageTemplate $privateMessageTemplate Object to remove from the list of results
   *
   * @return    PrivateMessageTemplateQuery The current query, for fluid interface
   */
  public function prune($privateMessageTemplate = null)
  {
    if ($privateMessageTemplate)
    {
      $this->addUsingAlias(PrivateMessageTemplatePeer::ID, $privateMessageTemplate->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

}
