<?php


/**
 * Base class that represents a query for the 'collector_profile_archive' table.
 *
 * 
 *
 * @method     CollectorProfileArchiveQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectorProfileArchiveQuery orderByCollectorId($order = Criteria::ASC) Order by the collector_id column
 * @method     CollectorProfileArchiveQuery orderByCollectorType($order = Criteria::ASC) Order by the collector_type column
 * @method     CollectorProfileArchiveQuery orderByBirthday($order = Criteria::ASC) Order by the birthday column
 * @method     CollectorProfileArchiveQuery orderByGender($order = Criteria::ASC) Order by the gender column
 * @method     CollectorProfileArchiveQuery orderByZipPostal($order = Criteria::ASC) Order by the zip_postal column
 * @method     CollectorProfileArchiveQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method     CollectorProfileArchiveQuery orderByCountryIso3166($order = Criteria::ASC) Order by the country_iso3166 column
 * @method     CollectorProfileArchiveQuery orderByWebsite($order = Criteria::ASC) Order by the website column
 * @method     CollectorProfileArchiveQuery orderByAbout($order = Criteria::ASC) Order by the about column
 * @method     CollectorProfileArchiveQuery orderByCollections($order = Criteria::ASC) Order by the collections column
 * @method     CollectorProfileArchiveQuery orderByCollecting($order = Criteria::ASC) Order by the collecting column
 * @method     CollectorProfileArchiveQuery orderByMostSpent($order = Criteria::ASC) Order by the most_spent column
 * @method     CollectorProfileArchiveQuery orderByAnuallySpent($order = Criteria::ASC) Order by the anually_spent column
 * @method     CollectorProfileArchiveQuery orderByNewItemEvery($order = Criteria::ASC) Order by the new_item_every column
 * @method     CollectorProfileArchiveQuery orderByInterests($order = Criteria::ASC) Order by the interests column
 * @method     CollectorProfileArchiveQuery orderByIsFeatured($order = Criteria::ASC) Order by the is_featured column
 * @method     CollectorProfileArchiveQuery orderByIsSeller($order = Criteria::ASC) Order by the is_seller column
 * @method     CollectorProfileArchiveQuery orderByIsImageAuto($order = Criteria::ASC) Order by the is_image_auto column
 * @method     CollectorProfileArchiveQuery orderByPreferences($order = Criteria::ASC) Order by the preferences column
 * @method     CollectorProfileArchiveQuery orderByNotifications($order = Criteria::ASC) Order by the notifications column
 * @method     CollectorProfileArchiveQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     CollectorProfileArchiveQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     CollectorProfileArchiveQuery orderByArchivedAt($order = Criteria::ASC) Order by the archived_at column
 *
 * @method     CollectorProfileArchiveQuery groupById() Group by the id column
 * @method     CollectorProfileArchiveQuery groupByCollectorId() Group by the collector_id column
 * @method     CollectorProfileArchiveQuery groupByCollectorType() Group by the collector_type column
 * @method     CollectorProfileArchiveQuery groupByBirthday() Group by the birthday column
 * @method     CollectorProfileArchiveQuery groupByGender() Group by the gender column
 * @method     CollectorProfileArchiveQuery groupByZipPostal() Group by the zip_postal column
 * @method     CollectorProfileArchiveQuery groupByCountry() Group by the country column
 * @method     CollectorProfileArchiveQuery groupByCountryIso3166() Group by the country_iso3166 column
 * @method     CollectorProfileArchiveQuery groupByWebsite() Group by the website column
 * @method     CollectorProfileArchiveQuery groupByAbout() Group by the about column
 * @method     CollectorProfileArchiveQuery groupByCollections() Group by the collections column
 * @method     CollectorProfileArchiveQuery groupByCollecting() Group by the collecting column
 * @method     CollectorProfileArchiveQuery groupByMostSpent() Group by the most_spent column
 * @method     CollectorProfileArchiveQuery groupByAnuallySpent() Group by the anually_spent column
 * @method     CollectorProfileArchiveQuery groupByNewItemEvery() Group by the new_item_every column
 * @method     CollectorProfileArchiveQuery groupByInterests() Group by the interests column
 * @method     CollectorProfileArchiveQuery groupByIsFeatured() Group by the is_featured column
 * @method     CollectorProfileArchiveQuery groupByIsSeller() Group by the is_seller column
 * @method     CollectorProfileArchiveQuery groupByIsImageAuto() Group by the is_image_auto column
 * @method     CollectorProfileArchiveQuery groupByPreferences() Group by the preferences column
 * @method     CollectorProfileArchiveQuery groupByNotifications() Group by the notifications column
 * @method     CollectorProfileArchiveQuery groupByUpdatedAt() Group by the updated_at column
 * @method     CollectorProfileArchiveQuery groupByCreatedAt() Group by the created_at column
 * @method     CollectorProfileArchiveQuery groupByArchivedAt() Group by the archived_at column
 *
 * @method     CollectorProfileArchiveQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectorProfileArchiveQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectorProfileArchiveQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectorProfileArchive findOne(PropelPDO $con = null) Return the first CollectorProfileArchive matching the query
 * @method     CollectorProfileArchive findOneOrCreate(PropelPDO $con = null) Return the first CollectorProfileArchive matching the query, or a new CollectorProfileArchive object populated from the query conditions when no match is found
 *
 * @method     CollectorProfileArchive findOneById(int $id) Return the first CollectorProfileArchive filtered by the id column
 * @method     CollectorProfileArchive findOneByCollectorId(int $collector_id) Return the first CollectorProfileArchive filtered by the collector_id column
 * @method     CollectorProfileArchive findOneByCollectorType(string $collector_type) Return the first CollectorProfileArchive filtered by the collector_type column
 * @method     CollectorProfileArchive findOneByBirthday(string $birthday) Return the first CollectorProfileArchive filtered by the birthday column
 * @method     CollectorProfileArchive findOneByGender(string $gender) Return the first CollectorProfileArchive filtered by the gender column
 * @method     CollectorProfileArchive findOneByZipPostal(string $zip_postal) Return the first CollectorProfileArchive filtered by the zip_postal column
 * @method     CollectorProfileArchive findOneByCountry(string $country) Return the first CollectorProfileArchive filtered by the country column
 * @method     CollectorProfileArchive findOneByCountryIso3166(string $country_iso3166) Return the first CollectorProfileArchive filtered by the country_iso3166 column
 * @method     CollectorProfileArchive findOneByWebsite(string $website) Return the first CollectorProfileArchive filtered by the website column
 * @method     CollectorProfileArchive findOneByAbout(string $about) Return the first CollectorProfileArchive filtered by the about column
 * @method     CollectorProfileArchive findOneByCollections(string $collections) Return the first CollectorProfileArchive filtered by the collections column
 * @method     CollectorProfileArchive findOneByCollecting(string $collecting) Return the first CollectorProfileArchive filtered by the collecting column
 * @method     CollectorProfileArchive findOneByMostSpent(int $most_spent) Return the first CollectorProfileArchive filtered by the most_spent column
 * @method     CollectorProfileArchive findOneByAnuallySpent(int $anually_spent) Return the first CollectorProfileArchive filtered by the anually_spent column
 * @method     CollectorProfileArchive findOneByNewItemEvery(string $new_item_every) Return the first CollectorProfileArchive filtered by the new_item_every column
 * @method     CollectorProfileArchive findOneByInterests(string $interests) Return the first CollectorProfileArchive filtered by the interests column
 * @method     CollectorProfileArchive findOneByIsFeatured(boolean $is_featured) Return the first CollectorProfileArchive filtered by the is_featured column
 * @method     CollectorProfileArchive findOneByIsSeller(boolean $is_seller) Return the first CollectorProfileArchive filtered by the is_seller column
 * @method     CollectorProfileArchive findOneByIsImageAuto(boolean $is_image_auto) Return the first CollectorProfileArchive filtered by the is_image_auto column
 * @method     CollectorProfileArchive findOneByPreferences(string $preferences) Return the first CollectorProfileArchive filtered by the preferences column
 * @method     CollectorProfileArchive findOneByNotifications(string $notifications) Return the first CollectorProfileArchive filtered by the notifications column
 * @method     CollectorProfileArchive findOneByUpdatedAt(string $updated_at) Return the first CollectorProfileArchive filtered by the updated_at column
 * @method     CollectorProfileArchive findOneByCreatedAt(string $created_at) Return the first CollectorProfileArchive filtered by the created_at column
 * @method     CollectorProfileArchive findOneByArchivedAt(string $archived_at) Return the first CollectorProfileArchive filtered by the archived_at column
 *
 * @method     array findById(int $id) Return CollectorProfileArchive objects filtered by the id column
 * @method     array findByCollectorId(int $collector_id) Return CollectorProfileArchive objects filtered by the collector_id column
 * @method     array findByCollectorType(string $collector_type) Return CollectorProfileArchive objects filtered by the collector_type column
 * @method     array findByBirthday(string $birthday) Return CollectorProfileArchive objects filtered by the birthday column
 * @method     array findByGender(string $gender) Return CollectorProfileArchive objects filtered by the gender column
 * @method     array findByZipPostal(string $zip_postal) Return CollectorProfileArchive objects filtered by the zip_postal column
 * @method     array findByCountry(string $country) Return CollectorProfileArchive objects filtered by the country column
 * @method     array findByCountryIso3166(string $country_iso3166) Return CollectorProfileArchive objects filtered by the country_iso3166 column
 * @method     array findByWebsite(string $website) Return CollectorProfileArchive objects filtered by the website column
 * @method     array findByAbout(string $about) Return CollectorProfileArchive objects filtered by the about column
 * @method     array findByCollections(string $collections) Return CollectorProfileArchive objects filtered by the collections column
 * @method     array findByCollecting(string $collecting) Return CollectorProfileArchive objects filtered by the collecting column
 * @method     array findByMostSpent(int $most_spent) Return CollectorProfileArchive objects filtered by the most_spent column
 * @method     array findByAnuallySpent(int $anually_spent) Return CollectorProfileArchive objects filtered by the anually_spent column
 * @method     array findByNewItemEvery(string $new_item_every) Return CollectorProfileArchive objects filtered by the new_item_every column
 * @method     array findByInterests(string $interests) Return CollectorProfileArchive objects filtered by the interests column
 * @method     array findByIsFeatured(boolean $is_featured) Return CollectorProfileArchive objects filtered by the is_featured column
 * @method     array findByIsSeller(boolean $is_seller) Return CollectorProfileArchive objects filtered by the is_seller column
 * @method     array findByIsImageAuto(boolean $is_image_auto) Return CollectorProfileArchive objects filtered by the is_image_auto column
 * @method     array findByPreferences(string $preferences) Return CollectorProfileArchive objects filtered by the preferences column
 * @method     array findByNotifications(string $notifications) Return CollectorProfileArchive objects filtered by the notifications column
 * @method     array findByUpdatedAt(string $updated_at) Return CollectorProfileArchive objects filtered by the updated_at column
 * @method     array findByCreatedAt(string $created_at) Return CollectorProfileArchive objects filtered by the created_at column
 * @method     array findByArchivedAt(string $archived_at) Return CollectorProfileArchive objects filtered by the archived_at column
 *
 * @package    propel.generator.lib.model.archive.om
 */
abstract class BaseCollectorProfileArchiveQuery extends ModelCriteria
{
  
  /**
   * Initializes internal state of BaseCollectorProfileArchiveQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'archive', $modelName = 'CollectorProfileArchive', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new CollectorProfileArchiveQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    CollectorProfileArchiveQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof CollectorProfileArchiveQuery)
    {
      return $criteria;
    }
    $query = new CollectorProfileArchiveQuery();
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
   * @return    CollectorProfileArchive|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = CollectorProfileArchivePeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(CollectorProfileArchivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    CollectorProfileArchive A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `ID`, `COLLECTOR_ID`, `COLLECTOR_TYPE`, `BIRTHDAY`, `GENDER`, `ZIP_POSTAL`, `COUNTRY`, `COUNTRY_ISO3166`, `WEBSITE`, `ABOUT`, `COLLECTIONS`, `COLLECTING`, `MOST_SPENT`, `ANUALLY_SPENT`, `NEW_ITEM_EVERY`, `INTERESTS`, `IS_FEATURED`, `IS_SELLER`, `IS_IMAGE_AUTO`, `PREFERENCES`, `NOTIFICATIONS`, `UPDATED_AT`, `CREATED_AT`, `ARCHIVED_AT` FROM `collector_profile_archive` WHERE `ID` = :p0';
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
      $obj = new CollectorProfileArchive();
      $obj->hydrate($row);
      CollectorProfileArchivePeer::addInstanceToPool($obj, (string) $row[0]);
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
   * @return    CollectorProfileArchive|array|mixed the result, formatted by the current formatter
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
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(CollectorProfileArchivePeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(CollectorProfileArchivePeer::ID, $keys, Criteria::IN);
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
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(CollectorProfileArchivePeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the collector_id column
   *
   * Example usage:
   * <code>
   * $query->filterByCollectorId(1234); // WHERE collector_id = 1234
   * $query->filterByCollectorId(array(12, 34)); // WHERE collector_id IN (12, 34)
   * $query->filterByCollectorId(array('min' => 12)); // WHERE collector_id > 12
   * </code>
   *
   * @param     mixed $collectorId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByCollectorId($collectorId = null, $comparison = null)
  {
    if (is_array($collectorId))
    {
      $useMinMax = false;
      if (isset($collectorId['min']))
      {
        $this->addUsingAlias(CollectorProfileArchivePeer::COLLECTOR_ID, $collectorId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($collectorId['max']))
      {
        $this->addUsingAlias(CollectorProfileArchivePeer::COLLECTOR_ID, $collectorId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectorProfileArchivePeer::COLLECTOR_ID, $collectorId, $comparison);
  }

  /**
   * Filter the query on the collector_type column
   *
   * Example usage:
   * <code>
   * $query->filterByCollectorType('fooValue');   // WHERE collector_type = 'fooValue'
   * $query->filterByCollectorType('%fooValue%'); // WHERE collector_type LIKE '%fooValue%'
   * </code>
   *
   * @param     string $collectorType The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByCollectorType($collectorType = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($collectorType))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $collectorType))
      {
        $collectorType = str_replace('*', '%', $collectorType);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectorProfileArchivePeer::COLLECTOR_TYPE, $collectorType, $comparison);
  }

  /**
   * Filter the query on the birthday column
   *
   * Example usage:
   * <code>
   * $query->filterByBirthday('2011-03-14'); // WHERE birthday = '2011-03-14'
   * $query->filterByBirthday('now'); // WHERE birthday = '2011-03-14'
   * $query->filterByBirthday(array('max' => 'yesterday')); // WHERE birthday > '2011-03-13'
   * </code>
   *
   * @param     mixed $birthday The value to use as filter.
   *              Values can be integers (unix timestamps), DateTime objects, or strings.
   *              Empty strings are treated as NULL.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByBirthday($birthday = null, $comparison = null)
  {
    if (is_array($birthday))
    {
      $useMinMax = false;
      if (isset($birthday['min']))
      {
        $this->addUsingAlias(CollectorProfileArchivePeer::BIRTHDAY, $birthday['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($birthday['max']))
      {
        $this->addUsingAlias(CollectorProfileArchivePeer::BIRTHDAY, $birthday['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectorProfileArchivePeer::BIRTHDAY, $birthday, $comparison);
  }

  /**
   * Filter the query on the gender column
   *
   * Example usage:
   * <code>
   * $query->filterByGender('fooValue');   // WHERE gender = 'fooValue'
   * $query->filterByGender('%fooValue%'); // WHERE gender LIKE '%fooValue%'
   * </code>
   *
   * @param     string $gender The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByGender($gender = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($gender))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $gender))
      {
        $gender = str_replace('*', '%', $gender);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectorProfileArchivePeer::GENDER, $gender, $comparison);
  }

  /**
   * Filter the query on the zip_postal column
   *
   * Example usage:
   * <code>
   * $query->filterByZipPostal('fooValue');   // WHERE zip_postal = 'fooValue'
   * $query->filterByZipPostal('%fooValue%'); // WHERE zip_postal LIKE '%fooValue%'
   * </code>
   *
   * @param     string $zipPostal The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByZipPostal($zipPostal = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($zipPostal))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $zipPostal))
      {
        $zipPostal = str_replace('*', '%', $zipPostal);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectorProfileArchivePeer::ZIP_POSTAL, $zipPostal, $comparison);
  }

  /**
   * Filter the query on the country column
   *
   * Example usage:
   * <code>
   * $query->filterByCountry('fooValue');   // WHERE country = 'fooValue'
   * $query->filterByCountry('%fooValue%'); // WHERE country LIKE '%fooValue%'
   * </code>
   *
   * @param     string $country The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByCountry($country = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($country))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $country))
      {
        $country = str_replace('*', '%', $country);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectorProfileArchivePeer::COUNTRY, $country, $comparison);
  }

  /**
   * Filter the query on the country_iso3166 column
   *
   * Example usage:
   * <code>
   * $query->filterByCountryIso3166('fooValue');   // WHERE country_iso3166 = 'fooValue'
   * $query->filterByCountryIso3166('%fooValue%'); // WHERE country_iso3166 LIKE '%fooValue%'
   * </code>
   *
   * @param     string $countryIso3166 The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByCountryIso3166($countryIso3166 = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($countryIso3166))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $countryIso3166))
      {
        $countryIso3166 = str_replace('*', '%', $countryIso3166);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectorProfileArchivePeer::COUNTRY_ISO3166, $countryIso3166, $comparison);
  }

  /**
   * Filter the query on the website column
   *
   * Example usage:
   * <code>
   * $query->filterByWebsite('fooValue');   // WHERE website = 'fooValue'
   * $query->filterByWebsite('%fooValue%'); // WHERE website LIKE '%fooValue%'
   * </code>
   *
   * @param     string $website The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByWebsite($website = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($website))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $website))
      {
        $website = str_replace('*', '%', $website);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectorProfileArchivePeer::WEBSITE, $website, $comparison);
  }

  /**
   * Filter the query on the about column
   *
   * Example usage:
   * <code>
   * $query->filterByAbout('fooValue');   // WHERE about = 'fooValue'
   * $query->filterByAbout('%fooValue%'); // WHERE about LIKE '%fooValue%'
   * </code>
   *
   * @param     string $about The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByAbout($about = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($about))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $about))
      {
        $about = str_replace('*', '%', $about);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectorProfileArchivePeer::ABOUT, $about, $comparison);
  }

  /**
   * Filter the query on the collections column
   *
   * Example usage:
   * <code>
   * $query->filterByCollections('fooValue');   // WHERE collections = 'fooValue'
   * $query->filterByCollections('%fooValue%'); // WHERE collections LIKE '%fooValue%'
   * </code>
   *
   * @param     string $collections The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByCollections($collections = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($collections))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $collections))
      {
        $collections = str_replace('*', '%', $collections);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectorProfileArchivePeer::COLLECTIONS, $collections, $comparison);
  }

  /**
   * Filter the query on the collecting column
   *
   * Example usage:
   * <code>
   * $query->filterByCollecting('fooValue');   // WHERE collecting = 'fooValue'
   * $query->filterByCollecting('%fooValue%'); // WHERE collecting LIKE '%fooValue%'
   * </code>
   *
   * @param     string $collecting The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByCollecting($collecting = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($collecting))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $collecting))
      {
        $collecting = str_replace('*', '%', $collecting);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectorProfileArchivePeer::COLLECTING, $collecting, $comparison);
  }

  /**
   * Filter the query on the most_spent column
   *
   * Example usage:
   * <code>
   * $query->filterByMostSpent(1234); // WHERE most_spent = 1234
   * $query->filterByMostSpent(array(12, 34)); // WHERE most_spent IN (12, 34)
   * $query->filterByMostSpent(array('min' => 12)); // WHERE most_spent > 12
   * </code>
   *
   * @param     mixed $mostSpent The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByMostSpent($mostSpent = null, $comparison = null)
  {
    if (is_array($mostSpent))
    {
      $useMinMax = false;
      if (isset($mostSpent['min']))
      {
        $this->addUsingAlias(CollectorProfileArchivePeer::MOST_SPENT, $mostSpent['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($mostSpent['max']))
      {
        $this->addUsingAlias(CollectorProfileArchivePeer::MOST_SPENT, $mostSpent['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectorProfileArchivePeer::MOST_SPENT, $mostSpent, $comparison);
  }

  /**
   * Filter the query on the anually_spent column
   *
   * Example usage:
   * <code>
   * $query->filterByAnuallySpent(1234); // WHERE anually_spent = 1234
   * $query->filterByAnuallySpent(array(12, 34)); // WHERE anually_spent IN (12, 34)
   * $query->filterByAnuallySpent(array('min' => 12)); // WHERE anually_spent > 12
   * </code>
   *
   * @param     mixed $anuallySpent The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByAnuallySpent($anuallySpent = null, $comparison = null)
  {
    if (is_array($anuallySpent))
    {
      $useMinMax = false;
      if (isset($anuallySpent['min']))
      {
        $this->addUsingAlias(CollectorProfileArchivePeer::ANUALLY_SPENT, $anuallySpent['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($anuallySpent['max']))
      {
        $this->addUsingAlias(CollectorProfileArchivePeer::ANUALLY_SPENT, $anuallySpent['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectorProfileArchivePeer::ANUALLY_SPENT, $anuallySpent, $comparison);
  }

  /**
   * Filter the query on the new_item_every column
   *
   * Example usage:
   * <code>
   * $query->filterByNewItemEvery('fooValue');   // WHERE new_item_every = 'fooValue'
   * $query->filterByNewItemEvery('%fooValue%'); // WHERE new_item_every LIKE '%fooValue%'
   * </code>
   *
   * @param     string $newItemEvery The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByNewItemEvery($newItemEvery = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($newItemEvery))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $newItemEvery))
      {
        $newItemEvery = str_replace('*', '%', $newItemEvery);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectorProfileArchivePeer::NEW_ITEM_EVERY, $newItemEvery, $comparison);
  }

  /**
   * Filter the query on the interests column
   *
   * Example usage:
   * <code>
   * $query->filterByInterests('fooValue');   // WHERE interests = 'fooValue'
   * $query->filterByInterests('%fooValue%'); // WHERE interests LIKE '%fooValue%'
   * </code>
   *
   * @param     string $interests The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByInterests($interests = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($interests))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $interests))
      {
        $interests = str_replace('*', '%', $interests);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectorProfileArchivePeer::INTERESTS, $interests, $comparison);
  }

  /**
   * Filter the query on the is_featured column
   *
   * Example usage:
   * <code>
   * $query->filterByIsFeatured(true); // WHERE is_featured = true
   * $query->filterByIsFeatured('yes'); // WHERE is_featured = true
   * </code>
   *
   * @param     boolean|string $isFeatured The value to use as filter.
   *              Non-boolean arguments are converted using the following rules:
   *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByIsFeatured($isFeatured = null, $comparison = null)
  {
    if (is_string($isFeatured))
    {
      $is_featured = in_array(strtolower($isFeatured), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
    }
    return $this->addUsingAlias(CollectorProfileArchivePeer::IS_FEATURED, $isFeatured, $comparison);
  }

  /**
   * Filter the query on the is_seller column
   *
   * Example usage:
   * <code>
   * $query->filterByIsSeller(true); // WHERE is_seller = true
   * $query->filterByIsSeller('yes'); // WHERE is_seller = true
   * </code>
   *
   * @param     boolean|string $isSeller The value to use as filter.
   *              Non-boolean arguments are converted using the following rules:
   *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByIsSeller($isSeller = null, $comparison = null)
  {
    if (is_string($isSeller))
    {
      $is_seller = in_array(strtolower($isSeller), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
    }
    return $this->addUsingAlias(CollectorProfileArchivePeer::IS_SELLER, $isSeller, $comparison);
  }

  /**
   * Filter the query on the is_image_auto column
   *
   * Example usage:
   * <code>
   * $query->filterByIsImageAuto(true); // WHERE is_image_auto = true
   * $query->filterByIsImageAuto('yes'); // WHERE is_image_auto = true
   * </code>
   *
   * @param     boolean|string $isImageAuto The value to use as filter.
   *              Non-boolean arguments are converted using the following rules:
   *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
   *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
   *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByIsImageAuto($isImageAuto = null, $comparison = null)
  {
    if (is_string($isImageAuto))
    {
      $is_image_auto = in_array(strtolower($isImageAuto), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
    }
    return $this->addUsingAlias(CollectorProfileArchivePeer::IS_IMAGE_AUTO, $isImageAuto, $comparison);
  }

  /**
   * Filter the query on the preferences column
   *
   * Example usage:
   * <code>
   * $query->filterByPreferences('fooValue');   // WHERE preferences = 'fooValue'
   * $query->filterByPreferences('%fooValue%'); // WHERE preferences LIKE '%fooValue%'
   * </code>
   *
   * @param     string $preferences The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByPreferences($preferences = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($preferences))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $preferences))
      {
        $preferences = str_replace('*', '%', $preferences);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectorProfileArchivePeer::PREFERENCES, $preferences, $comparison);
  }

  /**
   * Filter the query on the notifications column
   *
   * Example usage:
   * <code>
   * $query->filterByNotifications('fooValue');   // WHERE notifications = 'fooValue'
   * $query->filterByNotifications('%fooValue%'); // WHERE notifications LIKE '%fooValue%'
   * </code>
   *
   * @param     string $notifications The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByNotifications($notifications = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($notifications))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $notifications))
      {
        $notifications = str_replace('*', '%', $notifications);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectorProfileArchivePeer::NOTIFICATIONS, $notifications, $comparison);
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
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByUpdatedAt($updatedAt = null, $comparison = null)
  {
    if (is_array($updatedAt))
    {
      $useMinMax = false;
      if (isset($updatedAt['min']))
      {
        $this->addUsingAlias(CollectorProfileArchivePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($updatedAt['max']))
      {
        $this->addUsingAlias(CollectorProfileArchivePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectorProfileArchivePeer::UPDATED_AT, $updatedAt, $comparison);
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
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(CollectorProfileArchivePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(CollectorProfileArchivePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectorProfileArchivePeer::CREATED_AT, $createdAt, $comparison);
  }

  /**
   * Filter the query on the archived_at column
   *
   * Example usage:
   * <code>
   * $query->filterByArchivedAt('2011-03-14'); // WHERE archived_at = '2011-03-14'
   * $query->filterByArchivedAt('now'); // WHERE archived_at = '2011-03-14'
   * $query->filterByArchivedAt(array('max' => 'yesterday')); // WHERE archived_at > '2011-03-13'
   * </code>
   *
   * @param     mixed $archivedAt The value to use as filter.
   *              Values can be integers (unix timestamps), DateTime objects, or strings.
   *              Empty strings are treated as NULL.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function filterByArchivedAt($archivedAt = null, $comparison = null)
  {
    if (is_array($archivedAt))
    {
      $useMinMax = false;
      if (isset($archivedAt['min']))
      {
        $this->addUsingAlias(CollectorProfileArchivePeer::ARCHIVED_AT, $archivedAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($archivedAt['max']))
      {
        $this->addUsingAlias(CollectorProfileArchivePeer::ARCHIVED_AT, $archivedAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectorProfileArchivePeer::ARCHIVED_AT, $archivedAt, $comparison);
  }

  /**
   * Exclude object from result
   *
   * @param     CollectorProfileArchive $collectorProfileArchive Object to remove from the list of results
   *
   * @return    CollectorProfileArchiveQuery The current query, for fluid interface
   */
  public function prune($collectorProfileArchive = null)
  {
    if ($collectorProfileArchive)
    {
      $this->addUsingAlias(CollectorProfileArchivePeer::ID, $collectorProfileArchive->getId(), Criteria::NOT_EQUAL);
    }

    return $this;
  }

}