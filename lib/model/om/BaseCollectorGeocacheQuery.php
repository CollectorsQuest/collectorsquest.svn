<?php


/**
 * Base class that represents a query for the 'collector_geocache' table.
 *
 * 
 *
 * @method     CollectorGeocacheQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectorGeocacheQuery orderByCollectorId($order = Criteria::ASC) Order by the collector_id column
 * @method     CollectorGeocacheQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method     CollectorGeocacheQuery orderByCountryIso3166($order = Criteria::ASC) Order by the country_iso3166 column
 * @method     CollectorGeocacheQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method     CollectorGeocacheQuery orderByCounty($order = Criteria::ASC) Order by the county column
 * @method     CollectorGeocacheQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     CollectorGeocacheQuery orderByZipPostal($order = Criteria::ASC) Order by the zip_postal column
 * @method     CollectorGeocacheQuery orderByAddress($order = Criteria::ASC) Order by the address column
 * @method     CollectorGeocacheQuery orderByLatitude($order = Criteria::ASC) Order by the latitude column
 * @method     CollectorGeocacheQuery orderByLongitude($order = Criteria::ASC) Order by the longitude column
 * @method     CollectorGeocacheQuery orderByTimezone($order = Criteria::ASC) Order by the timezone column
 *
 * @method     CollectorGeocacheQuery groupById() Group by the id column
 * @method     CollectorGeocacheQuery groupByCollectorId() Group by the collector_id column
 * @method     CollectorGeocacheQuery groupByCountry() Group by the country column
 * @method     CollectorGeocacheQuery groupByCountryIso3166() Group by the country_iso3166 column
 * @method     CollectorGeocacheQuery groupByState() Group by the state column
 * @method     CollectorGeocacheQuery groupByCounty() Group by the county column
 * @method     CollectorGeocacheQuery groupByCity() Group by the city column
 * @method     CollectorGeocacheQuery groupByZipPostal() Group by the zip_postal column
 * @method     CollectorGeocacheQuery groupByAddress() Group by the address column
 * @method     CollectorGeocacheQuery groupByLatitude() Group by the latitude column
 * @method     CollectorGeocacheQuery groupByLongitude() Group by the longitude column
 * @method     CollectorGeocacheQuery groupByTimezone() Group by the timezone column
 *
 * @method     CollectorGeocacheQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectorGeocacheQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectorGeocacheQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectorGeocacheQuery leftJoinCollector($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collector relation
 * @method     CollectorGeocacheQuery rightJoinCollector($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collector relation
 * @method     CollectorGeocacheQuery innerJoinCollector($relationAlias = null) Adds a INNER JOIN clause to the query using the Collector relation
 *
 * @method     CollectorGeocache findOne(PropelPDO $con = null) Return the first CollectorGeocache matching the query
 * @method     CollectorGeocache findOneOrCreate(PropelPDO $con = null) Return the first CollectorGeocache matching the query, or a new CollectorGeocache object populated from the query conditions when no match is found
 *
 * @method     CollectorGeocache findOneById(int $id) Return the first CollectorGeocache filtered by the id column
 * @method     CollectorGeocache findOneByCollectorId(int $collector_id) Return the first CollectorGeocache filtered by the collector_id column
 * @method     CollectorGeocache findOneByCountry(string $country) Return the first CollectorGeocache filtered by the country column
 * @method     CollectorGeocache findOneByCountryIso3166(string $country_iso3166) Return the first CollectorGeocache filtered by the country_iso3166 column
 * @method     CollectorGeocache findOneByState(string $state) Return the first CollectorGeocache filtered by the state column
 * @method     CollectorGeocache findOneByCounty(string $county) Return the first CollectorGeocache filtered by the county column
 * @method     CollectorGeocache findOneByCity(string $city) Return the first CollectorGeocache filtered by the city column
 * @method     CollectorGeocache findOneByZipPostal(string $zip_postal) Return the first CollectorGeocache filtered by the zip_postal column
 * @method     CollectorGeocache findOneByAddress(string $address) Return the first CollectorGeocache filtered by the address column
 * @method     CollectorGeocache findOneByLatitude(double $latitude) Return the first CollectorGeocache filtered by the latitude column
 * @method     CollectorGeocache findOneByLongitude(double $longitude) Return the first CollectorGeocache filtered by the longitude column
 * @method     CollectorGeocache findOneByTimezone(string $timezone) Return the first CollectorGeocache filtered by the timezone column
 *
 * @method     array findById(int $id) Return CollectorGeocache objects filtered by the id column
 * @method     array findByCollectorId(int $collector_id) Return CollectorGeocache objects filtered by the collector_id column
 * @method     array findByCountry(string $country) Return CollectorGeocache objects filtered by the country column
 * @method     array findByCountryIso3166(string $country_iso3166) Return CollectorGeocache objects filtered by the country_iso3166 column
 * @method     array findByState(string $state) Return CollectorGeocache objects filtered by the state column
 * @method     array findByCounty(string $county) Return CollectorGeocache objects filtered by the county column
 * @method     array findByCity(string $city) Return CollectorGeocache objects filtered by the city column
 * @method     array findByZipPostal(string $zip_postal) Return CollectorGeocache objects filtered by the zip_postal column
 * @method     array findByAddress(string $address) Return CollectorGeocache objects filtered by the address column
 * @method     array findByLatitude(double $latitude) Return CollectorGeocache objects filtered by the latitude column
 * @method     array findByLongitude(double $longitude) Return CollectorGeocache objects filtered by the longitude column
 * @method     array findByTimezone(string $timezone) Return CollectorGeocache objects filtered by the timezone column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectorGeocacheQuery extends ModelCriteria
{
  
  // archivable behavior
  protected $archiveOnDelete = true;

  /**
   * Initializes internal state of BaseCollectorGeocacheQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'CollectorGeocache', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new CollectorGeocacheQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    CollectorGeocacheQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof CollectorGeocacheQuery)
    {
      return $criteria;
    }
    $query = new CollectorGeocacheQuery();
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
   * @return    CollectorGeocache|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ($key === null)
    {
      return null;
    }
    if ((null !== ($obj = CollectorGeocachePeer::getInstanceFromPool((string) $key))) && !$this->formatter)
    {
      // the object is alredy in the instance pool
      return $obj;
    }
    if ($con === null)
    {
      $con = Propel::getConnection(CollectorGeocachePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
   * @return    CollectorGeocache A model object, or null if the key is not found
   */
  protected function findPkSimple($key, $con)
  {
    $sql = 'SELECT `ID`, `COLLECTOR_ID`, `COUNTRY`, `COUNTRY_ISO3166`, `STATE`, `COUNTY`, `CITY`, `ZIP_POSTAL`, `ADDRESS`, `LATITUDE`, `LONGITUDE`, `TIMEZONE` FROM `collector_geocache` WHERE `ID` = :p0';
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
      $obj = new CollectorGeocache();
      $obj->hydrate($row);
      CollectorGeocachePeer::addInstanceToPool($obj, (string) $row[0]);
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
   * @return    CollectorGeocache|array|mixed the result, formatted by the current formatter
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
   * @return    CollectorGeocacheQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(CollectorGeocachePeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    CollectorGeocacheQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(CollectorGeocachePeer::ID, $keys, Criteria::IN);
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
   * @return    CollectorGeocacheQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(CollectorGeocachePeer::ID, $id, $comparison);
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
   * @see       filterByCollector()
   *
   * @param     mixed $collectorId The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorGeocacheQuery The current query, for fluid interface
   */
  public function filterByCollectorId($collectorId = null, $comparison = null)
  {
    if (is_array($collectorId))
    {
      $useMinMax = false;
      if (isset($collectorId['min']))
      {
        $this->addUsingAlias(CollectorGeocachePeer::COLLECTOR_ID, $collectorId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($collectorId['max']))
      {
        $this->addUsingAlias(CollectorGeocachePeer::COLLECTOR_ID, $collectorId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectorGeocachePeer::COLLECTOR_ID, $collectorId, $comparison);
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
   * @return    CollectorGeocacheQuery The current query, for fluid interface
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
    return $this->addUsingAlias(CollectorGeocachePeer::COUNTRY, $country, $comparison);
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
   * @return    CollectorGeocacheQuery The current query, for fluid interface
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
    return $this->addUsingAlias(CollectorGeocachePeer::COUNTRY_ISO3166, $countryIso3166, $comparison);
  }

  /**
   * Filter the query on the state column
   *
   * Example usage:
   * <code>
   * $query->filterByState('fooValue');   // WHERE state = 'fooValue'
   * $query->filterByState('%fooValue%'); // WHERE state LIKE '%fooValue%'
   * </code>
   *
   * @param     string $state The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorGeocacheQuery The current query, for fluid interface
   */
  public function filterByState($state = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($state))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $state))
      {
        $state = str_replace('*', '%', $state);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectorGeocachePeer::STATE, $state, $comparison);
  }

  /**
   * Filter the query on the county column
   *
   * Example usage:
   * <code>
   * $query->filterByCounty('fooValue');   // WHERE county = 'fooValue'
   * $query->filterByCounty('%fooValue%'); // WHERE county LIKE '%fooValue%'
   * </code>
   *
   * @param     string $county The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorGeocacheQuery The current query, for fluid interface
   */
  public function filterByCounty($county = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($county))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $county))
      {
        $county = str_replace('*', '%', $county);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectorGeocachePeer::COUNTY, $county, $comparison);
  }

  /**
   * Filter the query on the city column
   *
   * Example usage:
   * <code>
   * $query->filterByCity('fooValue');   // WHERE city = 'fooValue'
   * $query->filterByCity('%fooValue%'); // WHERE city LIKE '%fooValue%'
   * </code>
   *
   * @param     string $city The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorGeocacheQuery The current query, for fluid interface
   */
  public function filterByCity($city = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($city))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $city))
      {
        $city = str_replace('*', '%', $city);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectorGeocachePeer::CITY, $city, $comparison);
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
   * @return    CollectorGeocacheQuery The current query, for fluid interface
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
    return $this->addUsingAlias(CollectorGeocachePeer::ZIP_POSTAL, $zipPostal, $comparison);
  }

  /**
   * Filter the query on the address column
   *
   * Example usage:
   * <code>
   * $query->filterByAddress('fooValue');   // WHERE address = 'fooValue'
   * $query->filterByAddress('%fooValue%'); // WHERE address LIKE '%fooValue%'
   * </code>
   *
   * @param     string $address The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorGeocacheQuery The current query, for fluid interface
   */
  public function filterByAddress($address = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($address))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $address))
      {
        $address = str_replace('*', '%', $address);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectorGeocachePeer::ADDRESS, $address, $comparison);
  }

  /**
   * Filter the query on the latitude column
   *
   * Example usage:
   * <code>
   * $query->filterByLatitude(1234); // WHERE latitude = 1234
   * $query->filterByLatitude(array(12, 34)); // WHERE latitude IN (12, 34)
   * $query->filterByLatitude(array('min' => 12)); // WHERE latitude > 12
   * </code>
   *
   * @param     mixed $latitude The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorGeocacheQuery The current query, for fluid interface
   */
  public function filterByLatitude($latitude = null, $comparison = null)
  {
    if (is_array($latitude))
    {
      $useMinMax = false;
      if (isset($latitude['min']))
      {
        $this->addUsingAlias(CollectorGeocachePeer::LATITUDE, $latitude['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($latitude['max']))
      {
        $this->addUsingAlias(CollectorGeocachePeer::LATITUDE, $latitude['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectorGeocachePeer::LATITUDE, $latitude, $comparison);
  }

  /**
   * Filter the query on the longitude column
   *
   * Example usage:
   * <code>
   * $query->filterByLongitude(1234); // WHERE longitude = 1234
   * $query->filterByLongitude(array(12, 34)); // WHERE longitude IN (12, 34)
   * $query->filterByLongitude(array('min' => 12)); // WHERE longitude > 12
   * </code>
   *
   * @param     mixed $longitude The value to use as filter.
   *              Use scalar values for equality.
   *              Use array values for in_array() equivalent.
   *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorGeocacheQuery The current query, for fluid interface
   */
  public function filterByLongitude($longitude = null, $comparison = null)
  {
    if (is_array($longitude))
    {
      $useMinMax = false;
      if (isset($longitude['min']))
      {
        $this->addUsingAlias(CollectorGeocachePeer::LONGITUDE, $longitude['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($longitude['max']))
      {
        $this->addUsingAlias(CollectorGeocachePeer::LONGITUDE, $longitude['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectorGeocachePeer::LONGITUDE, $longitude, $comparison);
  }

  /**
   * Filter the query on the timezone column
   *
   * Example usage:
   * <code>
   * $query->filterByTimezone('fooValue');   // WHERE timezone = 'fooValue'
   * $query->filterByTimezone('%fooValue%'); // WHERE timezone LIKE '%fooValue%'
   * </code>
   *
   * @param     string $timezone The value to use as filter.
   *              Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorGeocacheQuery The current query, for fluid interface
   */
  public function filterByTimezone($timezone = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($timezone))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $timezone))
      {
        $timezone = str_replace('*', '%', $timezone);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(CollectorGeocachePeer::TIMEZONE, $timezone, $comparison);
  }

  /**
   * Filter the query by a related Collector object
   *
   * @param     Collector|PropelCollection $collector The related object(s) to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorGeocacheQuery The current query, for fluid interface
   */
  public function filterByCollector($collector, $comparison = null)
  {
    if ($collector instanceof Collector)
    {
      return $this
        ->addUsingAlias(CollectorGeocachePeer::COLLECTOR_ID, $collector->getId(), $comparison);
    }
    elseif ($collector instanceof PropelCollection)
    {
      if (null === $comparison)
      {
        $comparison = Criteria::IN;
      }
      return $this
        ->addUsingAlias(CollectorGeocachePeer::COLLECTOR_ID, $collector->toKeyValue('PrimaryKey', 'Id'), $comparison);
    }
    else
    {
      throw new PropelException('filterByCollector() only accepts arguments of type Collector or PropelCollection');
    }
  }

  /**
   * Adds a JOIN clause to the query using the Collector relation
   *
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectorGeocacheQuery The current query, for fluid interface
   */
  public function joinCollector($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('Collector');

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
      $this->addJoinObject($join, 'Collector');
    }

    return $this;
  }

  /**
   * Use the Collector relation Collector object
   *
   * @see       useQuery()
   *
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    CollectorQuery A secondary query class using the current class as primary query
   */
  public function useCollectorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinCollector($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'Collector', 'CollectorQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     CollectorGeocache $collectorGeocache Object to remove from the list of results
   *
   * @return    CollectorGeocacheQuery The current query, for fluid interface
   */
  public function prune($collectorGeocache = null)
  {
    if ($collectorGeocache)
    {
      $this->addUsingAlias(CollectorGeocachePeer::ID, $collectorGeocache->getId(), Criteria::NOT_EQUAL);
    }

    return $this;
  }

  /**
   * Code to execute before every DELETE statement
   *
   * @param     PropelPDO $con The connection object used by the query
   */
  protected function basePreDelete(PropelPDO $con)
  {
    // archivable behavior
    
    if ($this->archiveOnDelete)
    {
      $this->archive($con);
    }
    else
    {
      $this->archiveOnDelete = true;
    }


    return $this->preDelete($con);
  }

  // archivable behavior
  
  /**
   * Copy the data of the objects satisfying the query into CollectorGeocacheArchive archive objects.
   * The archived objects are then saved.
   * If any of the objects has already been archived, the archived object
   * is updated and not duplicated.
   * Warning: This termination methods issues 2n+1 queries.
   *
   * @param      PropelPDO $con  Connection to use.
   * @param      Boolean $useLittleMemory  Whether or not to use PropelOnDemandFormatter to retrieve objects.
   *               Set to false if the identity map matters.
   *               Set to true (default) to use less memory.
   *
   * @return     int the number of archived objects
   */
  public function archive($con = null, $useLittleMemory = true)
  {
    $totalArchivedObjects = 0;
    $criteria = clone $this;
    // prepare the query
    $criteria->setWith(array());
    if ($useLittleMemory) {
      $criteria->setFormatter(ModelCriteria::FORMAT_ON_DEMAND);
    }
    if ($con === null) {
      $con = Propel::getConnection(CollectorGeocachePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }
    $con->beginTransaction();
    try {
      // archive all results one by one
      foreach ($criteria->find($con) as $object) {
        $object->archive($con);
        $totalArchivedObjects++;
      }
      $con->commit();
    } catch (PropelException $e) {
      $con->rollBack();
      throw $e;
    }
    
    return $totalArchivedObjects;
  }
  
  /**
   * Enable/disable auto-archiving on delete for the next query.
   *
   * @param Boolean True if the query must archive deleted objects, false otherwise.
   */
  public function setArchiveOnDelete($archiveOnDelete)
  {
    $this->archiveOnDelete = $archiveOnDelete;
  }
  
  /**
   * Delete records matching the current query without archiving them.
   *
   * @param      PropelPDO $con  Connection to use.
   *
   * @return integer the number of deleted rows
   */
  public function deleteWithoutArchive($con = null)
  {
    $this->archiveOnDelete = false;
  
    return $this->delete($con);
  }
  
  /**
   * Delete all records without archiving them.
   *
   * @param      PropelPDO $con  Connection to use.
   *
   * @return integer the number of deleted rows
   */
  public function deleteAllWithoutArchive($con = null)
  {
    $this->archiveOnDelete = false;
  
    return $this->deleteAll($con);
  }

}