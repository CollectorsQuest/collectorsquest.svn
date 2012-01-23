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
 * @method     PrivateMessageTemplateQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     PrivateMessageTemplateQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     PrivateMessageTemplateQuery groupById() Group by the id column
 * @method     PrivateMessageTemplateQuery groupBySubject() Group by the subject column
 * @method     PrivateMessageTemplateQuery groupByBody() Group by the body column
 * @method     PrivateMessageTemplateQuery groupByDescription() Group by the description column
 * @method     PrivateMessageTemplateQuery groupByCreatedAt() Group by the created_at column
 * @method     PrivateMessageTemplateQuery groupByUpdatedAt() Group by the updated_at column
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
 * @method     PrivateMessageTemplate findOneByCreatedAt(string $created_at) Return the first PrivateMessageTemplate filtered by the created_at column
 * @method     PrivateMessageTemplate findOneByUpdatedAt(string $updated_at) Return the first PrivateMessageTemplate filtered by the updated_at column
 *
 * @method     array findById(int $id) Return PrivateMessageTemplate objects filtered by the id column
 * @method     array findBySubject(string $subject) Return PrivateMessageTemplate objects filtered by the subject column
 * @method     array findByBody(string $body) Return PrivateMessageTemplate objects filtered by the body column
 * @method     array findByDescription(string $description) Return PrivateMessageTemplate objects filtered by the description column
 * @method     array findByCreatedAt(string $created_at) Return PrivateMessageTemplate objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return PrivateMessageTemplate objects filtered by the updated_at column
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
   * @return    PrivateMessageTemplate|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = PrivateMessageTemplatePeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(PrivateMessageTemplatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    PrivateMessageTemplate A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `ID`, `SUBJECT`, `BODY`, `DESCRIPTION`, `CREATED_AT`, `UPDATED_AT` FROM `private_message_template` WHERE `ID` = :p0';
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
      $obj = new PrivateMessageTemplate();
      $obj->hydrate($row);
      PrivateMessageTemplatePeer::addInstanceToPool($obj, (string) $row[0]);
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
   * @return    PrivateMessageTemplate|array|mixed the result, formatted by the current formatter
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
   * Example usage:
   * <code>
   * $query->filterBySubject('fooValue');   // WHERE subject = 'fooValue'
   * $query->filterBySubject('%fooValue%'); // WHERE subject LIKE '%fooValue%'
   * </code>
   *
   * @param     string $subject The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
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
   * Example usage:
   * <code>
   * $query->filterByBody('fooValue');   // WHERE body = 'fooValue'
   * $query->filterByBody('%fooValue%'); // WHERE body LIKE '%fooValue%'
   * </code>
   *
   * @param     string $body The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
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
   * Example usage:
   * <code>
   * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
   * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
   * </code>
   *
   * @param     string $description The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
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

  // timestampable behavior
  
  /**
   * Filter by the latest updated
   *
   * @param      int $nbDays Maximum age of the latest update in days
   *
   * @return     PrivateMessageTemplateQuery The current query, for fluid interface
   */
  public function recentlyUpdated($nbDays = 7)
  {
    return $this->addUsingAlias(PrivateMessageTemplatePeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Filter by the latest created
   *
   * @param      int $nbDays Maximum age of in days
   *
   * @return     PrivateMessageTemplateQuery The current query, for fluid interface
   */
  public function recentlyCreated($nbDays = 7)
  {
    return $this->addUsingAlias(PrivateMessageTemplatePeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Order by update date desc
   *
   * @return     PrivateMessageTemplateQuery The current query, for fluid interface
   */
  public function lastUpdatedFirst()
  {
    return $this->addDescendingOrderByColumn(PrivateMessageTemplatePeer::UPDATED_AT);
  }
  
  /**
   * Order by update date asc
   *
   * @return     PrivateMessageTemplateQuery The current query, for fluid interface
   */
  public function firstUpdatedFirst()
  {
    return $this->addAscendingOrderByColumn(PrivateMessageTemplatePeer::UPDATED_AT);
  }
  
  /**
   * Order by create date desc
   *
   * @return     PrivateMessageTemplateQuery The current query, for fluid interface
   */
  public function lastCreatedFirst()
  {
    return $this->addDescendingOrderByColumn(PrivateMessageTemplatePeer::CREATED_AT);
  }
  
  /**
   * Order by create date asc
   *
   * @return     PrivateMessageTemplateQuery The current query, for fluid interface
   */
  public function firstCreatedFirst()
  {
    return $this->addAscendingOrderByColumn(PrivateMessageTemplatePeer::CREATED_AT);
  }

}