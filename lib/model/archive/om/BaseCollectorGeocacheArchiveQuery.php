<?php


/**
 * Base class that represents a query for the 'collector_geocache_archive' table.
 *
 * 
 *
 * @method     CollectorGeocacheArchiveQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectorGeocacheArchiveQuery orderByCollectorId($order = Criteria::ASC) Order by the collector_id column
 * @method     CollectorGeocacheArchiveQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method     CollectorGeocacheArchiveQuery orderByCountryIso3166($order = Criteria::ASC) Order by the country_iso3166 column
 * @method     CollectorGeocacheArchiveQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method     CollectorGeocacheArchiveQuery orderByCounty($order = Criteria::ASC) Order by the county column
 * @method     CollectorGeocacheArchiveQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     CollectorGeocacheArchiveQuery orderByZipPostal($order = Criteria::ASC) Order by the zip_postal column
 * @method     CollectorGeocacheArchiveQuery orderByAddress($order = Criteria::ASC) Order by the address column
 * @method     CollectorGeocacheArchiveQuery orderByLatitude($order = Criteria::ASC) Order by the latitude column
 * @method     CollectorGeocacheArchiveQuery orderByLongitude($order = Criteria::ASC) Order by the longitude column
 * @method     CollectorGeocacheArchiveQuery orderByTimezone($order = Criteria::ASC) Order by the timezone column
 *
 * @method     CollectorGeocacheArchiveQuery groupById() Group by the id column
 * @method     CollectorGeocacheArchiveQuery groupByCollectorId() Group by the collector_id column
 * @method     CollectorGeocacheArchiveQuery groupByCountry() Group by the country column
 * @method     CollectorGeocacheArchiveQuery groupByCountryIso3166() Group by the country_iso3166 column
 * @method     CollectorGeocacheArchiveQuery groupByState() Group by the state column
 * @method     CollectorGeocacheArchiveQuery groupByCounty() Group by the county column
 * @method     CollectorGeocacheArchiveQuery groupByCity() Group by the city column
 * @method     CollectorGeocacheArchiveQuery groupByZipPostal() Group by the zip_postal column
 * @method     CollectorGeocacheArchiveQuery groupByAddress() Group by the address column
 * @method     CollectorGeocacheArchiveQuery groupByLatitude() Group by the latitude column
 * @method     CollectorGeocacheArchiveQuery groupByLongitude() Group by the longitude column
 * @method     CollectorGeocacheArchiveQuery groupByTimezone() Group by the timezone column
 *
 * @method     CollectorGeocacheArchiveQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectorGeocacheArchiveQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectorGeocacheArchiveQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectorGeocacheArchive findOne(PropelPDO $con = null) Return the first CollectorGeocacheArchive matching the query
 * @method     CollectorGeocacheArchive findOneOrCreate(PropelPDO $con = null) Return the first CollectorGeocacheArchive matching the query, or a new CollectorGeocacheArchive object populated from the query conditions when no match is found
 *
 * @method     CollectorGeocacheArchive findOneById(int $id) Return the first CollectorGeocacheArchive filtered by the id column
 * @method     CollectorGeocacheArchive findOneByCollectorId(int $collector_id) Return the first CollectorGeocacheArchive filtered by the collector_id column
 * @method     CollectorGeocacheArchive findOneByCountry(string $country) Return the first CollectorGeocacheArchive filtered by the country column
 * @method     CollectorGeocacheArchive findOneByCountryIso3166(string $country_iso3166) Return the first CollectorGeocacheArchive filtered by the country_iso3166 column
 * @method     CollectorGeocacheArchive findOneByState(string $state) Return the first CollectorGeocacheArchive filtered by the state column
 * @method     CollectorGeocacheArchive findOneByCounty(string $county) Return the first CollectorGeocacheArchive filtered by the county column
 * @method     CollectorGeocacheArchive findOneByCity(string $city) Return the first CollectorGeocacheArchive filtered by the city column
 * @method     CollectorGeocacheArchive findOneByZipPostal(string $zip_postal) Return the first CollectorGeocacheArchive filtered by the zip_postal column
 * @method     CollectorGeocacheArchive findOneByAddress(string $address) Return the first CollectorGeocacheArchive filtered by the address column
 * @method     CollectorGeocacheArchive findOneByLatitude(double $latitude) Return the first CollectorGeocacheArchive filtered by the latitude column
 * @method     CollectorGeocacheArchive findOneByLongitude(double $longitude) Return the first CollectorGeocacheArchive filtered by the longitude column
 * @method     CollectorGeocacheArchive findOneByTimezone(string $timezone) Return the first CollectorGeocacheArchive filtered by the timezone column
 *
 * @method     array findById(int $id) Return CollectorGeocacheArchive objects filtered by the id column
 * @method     array findByCollectorId(int $collector_id) Return CollectorGeocacheArchive objects filtered by the collector_id column
 * @method     array findByCountry(string $country) Return CollectorGeocacheArchive objects filtered by the country column
 * @method     array findByCountryIso3166(string $country_iso3166) Return CollectorGeocacheArchive objects filtered by the country_iso3166 column
 * @method     array findByState(string $state) Return CollectorGeocacheArchive objects filtered by the state column
 * @method     array findByCounty(string $county) Return CollectorGeocacheArchive objects filtered by the county column
 * @method     array findByCity(string $city) Return CollectorGeocacheArchive objects filtered by the city column
 * @method     array findByZipPostal(string $zip_postal) Return CollectorGeocacheArchive objects filtered by the zip_postal column
 * @method     array findByAddress(string $address) Return CollectorGeocacheArchive objects filtered by the address column
 * @method     array findByLatitude(double $latitude) Return CollectorGeocacheArchive objects filtered by the latitude column
 * @method     array findByLongitude(double $longitude) Return CollectorGeocacheArchive objects filtered by the longitude column
 * @method     array findByTimezone(string $timezone) Return CollectorGeocacheArchive objects filtered by the timezone column
 *
 * @package    propel.generator.lib.model.archive.om
 */
abstract class BaseCollectorGeocacheArchiveQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCollectorGeocacheArchiveQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'archive', $modelName = 'CollectorGeocacheArchive', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CollectorGeocacheArchiveQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    CollectorGeocacheArchiveQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CollectorGeocacheArchiveQuery) {
            return $criteria;
        }
        $query = new CollectorGeocacheArchiveQuery();
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
     * @return    CollectorGeocacheArchive|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CollectorGeocacheArchivePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    CollectorGeocacheArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(CollectorGeocacheArchivePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    CollectorGeocacheArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(CollectorGeocacheArchivePeer::ID, $keys, Criteria::IN);
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
     * @return    CollectorGeocacheArchiveQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(CollectorGeocacheArchivePeer::ID, $id, $comparison);
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
     * @return    CollectorGeocacheArchiveQuery The current query, for fluid interface
     */
    public function filterByCollectorId($collectorId = null, $comparison = null)
    {
        if (is_array($collectorId)) {
            $useMinMax = false;
            if (isset($collectorId['min'])) {
                $this->addUsingAlias(CollectorGeocacheArchivePeer::COLLECTOR_ID, $collectorId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectorId['max'])) {
                $this->addUsingAlias(CollectorGeocacheArchivePeer::COLLECTOR_ID, $collectorId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorGeocacheArchivePeer::COLLECTOR_ID, $collectorId, $comparison);
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
     * @return    CollectorGeocacheArchiveQuery The current query, for fluid interface
     */
    public function filterByCountry($country = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($country)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $country)) {
                $country = str_replace('*', '%', $country);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorGeocacheArchivePeer::COUNTRY, $country, $comparison);
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
     * @return    CollectorGeocacheArchiveQuery The current query, for fluid interface
     */
    public function filterByCountryIso3166($countryIso3166 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($countryIso3166)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $countryIso3166)) {
                $countryIso3166 = str_replace('*', '%', $countryIso3166);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorGeocacheArchivePeer::COUNTRY_ISO3166, $countryIso3166, $comparison);
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
     * @return    CollectorGeocacheArchiveQuery The current query, for fluid interface
     */
    public function filterByState($state = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($state)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $state)) {
                $state = str_replace('*', '%', $state);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorGeocacheArchivePeer::STATE, $state, $comparison);
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
     * @return    CollectorGeocacheArchiveQuery The current query, for fluid interface
     */
    public function filterByCounty($county = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($county)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $county)) {
                $county = str_replace('*', '%', $county);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorGeocacheArchivePeer::COUNTY, $county, $comparison);
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
     * @return    CollectorGeocacheArchiveQuery The current query, for fluid interface
     */
    public function filterByCity($city = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($city)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $city)) {
                $city = str_replace('*', '%', $city);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorGeocacheArchivePeer::CITY, $city, $comparison);
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
     * @return    CollectorGeocacheArchiveQuery The current query, for fluid interface
     */
    public function filterByZipPostal($zipPostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($zipPostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $zipPostal)) {
                $zipPostal = str_replace('*', '%', $zipPostal);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorGeocacheArchivePeer::ZIP_POSTAL, $zipPostal, $comparison);
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
     * @return    CollectorGeocacheArchiveQuery The current query, for fluid interface
     */
    public function filterByAddress($address = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($address)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $address)) {
                $address = str_replace('*', '%', $address);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorGeocacheArchivePeer::ADDRESS, $address, $comparison);
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
     * @return    CollectorGeocacheArchiveQuery The current query, for fluid interface
     */
    public function filterByLatitude($latitude = null, $comparison = null)
    {
        if (is_array($latitude)) {
            $useMinMax = false;
            if (isset($latitude['min'])) {
                $this->addUsingAlias(CollectorGeocacheArchivePeer::LATITUDE, $latitude['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latitude['max'])) {
                $this->addUsingAlias(CollectorGeocacheArchivePeer::LATITUDE, $latitude['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorGeocacheArchivePeer::LATITUDE, $latitude, $comparison);
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
     * @return    CollectorGeocacheArchiveQuery The current query, for fluid interface
     */
    public function filterByLongitude($longitude = null, $comparison = null)
    {
        if (is_array($longitude)) {
            $useMinMax = false;
            if (isset($longitude['min'])) {
                $this->addUsingAlias(CollectorGeocacheArchivePeer::LONGITUDE, $longitude['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longitude['max'])) {
                $this->addUsingAlias(CollectorGeocacheArchivePeer::LONGITUDE, $longitude['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorGeocacheArchivePeer::LONGITUDE, $longitude, $comparison);
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
     * @return    CollectorGeocacheArchiveQuery The current query, for fluid interface
     */
    public function filterByTimezone($timezone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timezone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $timezone)) {
                $timezone = str_replace('*', '%', $timezone);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorGeocacheArchivePeer::TIMEZONE, $timezone, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     CollectorGeocacheArchive $collectorGeocacheArchive Object to remove from the list of results
     *
     * @return    CollectorGeocacheArchiveQuery The current query, for fluid interface
     */
    public function prune($collectorGeocacheArchive = null)
    {
        if ($collectorGeocacheArchive) {
            $this->addUsingAlias(CollectorGeocacheArchivePeer::ID, $collectorGeocacheArchive->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}