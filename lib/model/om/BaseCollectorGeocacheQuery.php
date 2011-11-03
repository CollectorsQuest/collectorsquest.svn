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
   * Find object by primary key
   * Use instance pooling to avoid a database query if the object exists
   * <code>
   * $obj  = $c->findPk(12, $con);
   * </code>
   * @param     mixed $key Primary key to use for the query
   * @param     PropelPDO $con an optional connection object
   *
   * @return    CollectorGeocache|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = CollectorGeocachePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     int|array $collectorId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     string $country The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
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
   * @param     string $countryIso3166 The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
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
   * @param     string $state The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
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
   * @param     string $county The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
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
   * @param     string $city The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
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
   * @param     string $zipPostal The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
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
   * @param     string $address The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
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
   * @param     double|array $latitude The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     double|array $longitude The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
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
   * @param     string $timezone The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
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
   * @param     Collector $collector  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorGeocacheQuery The current query, for fluid interface
   */
  public function filterByCollector($collector, $comparison = null)
  {
    return $this
      ->addUsingAlias(CollectorGeocachePeer::COLLECTOR_ID, $collector->getId(), $comparison);
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

}
