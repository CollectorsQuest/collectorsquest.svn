<?php


/**
 * Base class that represents a query for the 'newsletter_signup' table.
 *
 * 
 *
 * @method     NewsletterSignupQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NewsletterSignupQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     NewsletterSignupQuery orderByName($order = Criteria::ASC) Order by the name column
 *
 * @method     NewsletterSignupQuery groupById() Group by the id column
 * @method     NewsletterSignupQuery groupByEmail() Group by the email column
 * @method     NewsletterSignupQuery groupByName() Group by the name column
 *
 * @method     NewsletterSignupQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NewsletterSignupQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NewsletterSignupQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NewsletterSignup findOne(PropelPDO $con = null) Return the first NewsletterSignup matching the query
 * @method     NewsletterSignup findOneOrCreate(PropelPDO $con = null) Return the first NewsletterSignup matching the query, or a new NewsletterSignup object populated from the query conditions when no match is found
 *
 * @method     NewsletterSignup findOneById(int $id) Return the first NewsletterSignup filtered by the id column
 * @method     NewsletterSignup findOneByEmail(string $email) Return the first NewsletterSignup filtered by the email column
 * @method     NewsletterSignup findOneByName(string $name) Return the first NewsletterSignup filtered by the name column
 *
 * @method     array findById(int $id) Return NewsletterSignup objects filtered by the id column
 * @method     array findByEmail(string $email) Return NewsletterSignup objects filtered by the email column
 * @method     array findByName(string $name) Return NewsletterSignup objects filtered by the name column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseNewsletterSignupQuery extends ModelCriteria
{
  
  /**
   * Initializes internal state of BaseNewsletterSignupQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'NewsletterSignup', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new NewsletterSignupQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    NewsletterSignupQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof NewsletterSignupQuery)
    {
      return $criteria;
    }
    $query = new NewsletterSignupQuery();
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
   * @return    NewsletterSignup|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = NewsletterSignupPeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(NewsletterSignupPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    NewsletterSignup A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `ID`, `EMAIL`, `NAME` FROM `newsletter_signup` WHERE `ID` = :p0';
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
      $obj = new NewsletterSignup();
      $obj->hydrate($row);
      NewsletterSignupPeer::addInstanceToPool($obj, (string) $row[0]);
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
   * @return    NewsletterSignup|array|mixed the result, formatted by the current formatter
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
   * @return    NewsletterSignupQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(NewsletterSignupPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    NewsletterSignupQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(NewsletterSignupPeer::ID, $keys, Criteria::IN);
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
   * @return    NewsletterSignupQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(NewsletterSignupPeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the email column
   *
   * Example usage:
   * <code>
   * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
   * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
   * </code>
   *
   * @param     string $email The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    NewsletterSignupQuery The current query, for fluid interface
   */
  public function filterByEmail($email = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($email))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $email))
      {
        $email = str_replace('*', '%', $email);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(NewsletterSignupPeer::EMAIL, $email, $comparison);
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
   * @return    NewsletterSignupQuery The current query, for fluid interface
   */
  public function filterByName($name = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($name))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $name))
      {
        $name = str_replace('*', '%', $name);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(NewsletterSignupPeer::NAME, $name, $comparison);
  }

  /**
   * Exclude object from result
   *
   * @param     NewsletterSignup $newsletterSignup Object to remove from the list of results
   *
   * @return    NewsletterSignupQuery The current query, for fluid interface
   */
  public function prune($newsletterSignup = null)
  {
    if ($newsletterSignup)
    {
      $this->addUsingAlias(NewsletterSignupPeer::ID, $newsletterSignup->getId(), Criteria::NOT_EQUAL);
    }

    return $this;
  }

}