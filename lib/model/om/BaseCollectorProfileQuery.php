<?php


/**
 * Base class that represents a query for the 'collector_profile' table.
 *
 * 
 *
 * @method     CollectorProfileQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectorProfileQuery orderByCollectorId($order = Criteria::ASC) Order by the collector_id column
 * @method     CollectorProfileQuery orderByCollectorType($order = Criteria::ASC) Order by the collector_type column
 * @method     CollectorProfileQuery orderByBirthday($order = Criteria::ASC) Order by the birthday column
 * @method     CollectorProfileQuery orderByGender($order = Criteria::ASC) Order by the gender column
 * @method     CollectorProfileQuery orderByZipPostal($order = Criteria::ASC) Order by the zip_postal column
 * @method     CollectorProfileQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method     CollectorProfileQuery orderByCountryIso3166($order = Criteria::ASC) Order by the country_iso3166 column
 * @method     CollectorProfileQuery orderByWebsite($order = Criteria::ASC) Order by the website column
 * @method     CollectorProfileQuery orderByAbout($order = Criteria::ASC) Order by the about column
 * @method     CollectorProfileQuery orderByCollections($order = Criteria::ASC) Order by the collections column
 * @method     CollectorProfileQuery orderByCollecting($order = Criteria::ASC) Order by the collecting column
 * @method     CollectorProfileQuery orderByMostSpent($order = Criteria::ASC) Order by the most_spent column
 * @method     CollectorProfileQuery orderByAnuallySpent($order = Criteria::ASC) Order by the anually_spent column
 * @method     CollectorProfileQuery orderByNewItemEvery($order = Criteria::ASC) Order by the new_item_every column
 * @method     CollectorProfileQuery orderByInterests($order = Criteria::ASC) Order by the interests column
 * @method     CollectorProfileQuery orderByIsFeatured($order = Criteria::ASC) Order by the is_featured column
 * @method     CollectorProfileQuery orderByIsSeller($order = Criteria::ASC) Order by the is_seller column
 * @method     CollectorProfileQuery orderByIsImageAuto($order = Criteria::ASC) Order by the is_image_auto column
 * @method     CollectorProfileQuery orderByPreferences($order = Criteria::ASC) Order by the preferences column
 * @method     CollectorProfileQuery orderByNotifications($order = Criteria::ASC) Order by the notifications column
 * @method     CollectorProfileQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     CollectorProfileQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     CollectorProfileQuery groupById() Group by the id column
 * @method     CollectorProfileQuery groupByCollectorId() Group by the collector_id column
 * @method     CollectorProfileQuery groupByCollectorType() Group by the collector_type column
 * @method     CollectorProfileQuery groupByBirthday() Group by the birthday column
 * @method     CollectorProfileQuery groupByGender() Group by the gender column
 * @method     CollectorProfileQuery groupByZipPostal() Group by the zip_postal column
 * @method     CollectorProfileQuery groupByCountry() Group by the country column
 * @method     CollectorProfileQuery groupByCountryIso3166() Group by the country_iso3166 column
 * @method     CollectorProfileQuery groupByWebsite() Group by the website column
 * @method     CollectorProfileQuery groupByAbout() Group by the about column
 * @method     CollectorProfileQuery groupByCollections() Group by the collections column
 * @method     CollectorProfileQuery groupByCollecting() Group by the collecting column
 * @method     CollectorProfileQuery groupByMostSpent() Group by the most_spent column
 * @method     CollectorProfileQuery groupByAnuallySpent() Group by the anually_spent column
 * @method     CollectorProfileQuery groupByNewItemEvery() Group by the new_item_every column
 * @method     CollectorProfileQuery groupByInterests() Group by the interests column
 * @method     CollectorProfileQuery groupByIsFeatured() Group by the is_featured column
 * @method     CollectorProfileQuery groupByIsSeller() Group by the is_seller column
 * @method     CollectorProfileQuery groupByIsImageAuto() Group by the is_image_auto column
 * @method     CollectorProfileQuery groupByPreferences() Group by the preferences column
 * @method     CollectorProfileQuery groupByNotifications() Group by the notifications column
 * @method     CollectorProfileQuery groupByUpdatedAt() Group by the updated_at column
 * @method     CollectorProfileQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     CollectorProfileQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectorProfileQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectorProfileQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectorProfileQuery leftJoinCollector($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collector relation
 * @method     CollectorProfileQuery rightJoinCollector($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collector relation
 * @method     CollectorProfileQuery innerJoinCollector($relationAlias = null) Adds a INNER JOIN clause to the query using the Collector relation
 *
 * @method     CollectorProfile findOne(PropelPDO $con = null) Return the first CollectorProfile matching the query
 * @method     CollectorProfile findOneOrCreate(PropelPDO $con = null) Return the first CollectorProfile matching the query, or a new CollectorProfile object populated from the query conditions when no match is found
 *
 * @method     CollectorProfile findOneById(int $id) Return the first CollectorProfile filtered by the id column
 * @method     CollectorProfile findOneByCollectorId(int $collector_id) Return the first CollectorProfile filtered by the collector_id column
 * @method     CollectorProfile findOneByCollectorType(string $collector_type) Return the first CollectorProfile filtered by the collector_type column
 * @method     CollectorProfile findOneByBirthday(string $birthday) Return the first CollectorProfile filtered by the birthday column
 * @method     CollectorProfile findOneByGender(string $gender) Return the first CollectorProfile filtered by the gender column
 * @method     CollectorProfile findOneByZipPostal(string $zip_postal) Return the first CollectorProfile filtered by the zip_postal column
 * @method     CollectorProfile findOneByCountry(string $country) Return the first CollectorProfile filtered by the country column
 * @method     CollectorProfile findOneByCountryIso3166(string $country_iso3166) Return the first CollectorProfile filtered by the country_iso3166 column
 * @method     CollectorProfile findOneByWebsite(string $website) Return the first CollectorProfile filtered by the website column
 * @method     CollectorProfile findOneByAbout(string $about) Return the first CollectorProfile filtered by the about column
 * @method     CollectorProfile findOneByCollections(string $collections) Return the first CollectorProfile filtered by the collections column
 * @method     CollectorProfile findOneByCollecting(string $collecting) Return the first CollectorProfile filtered by the collecting column
 * @method     CollectorProfile findOneByMostSpent(int $most_spent) Return the first CollectorProfile filtered by the most_spent column
 * @method     CollectorProfile findOneByAnuallySpent(int $anually_spent) Return the first CollectorProfile filtered by the anually_spent column
 * @method     CollectorProfile findOneByNewItemEvery(string $new_item_every) Return the first CollectorProfile filtered by the new_item_every column
 * @method     CollectorProfile findOneByInterests(string $interests) Return the first CollectorProfile filtered by the interests column
 * @method     CollectorProfile findOneByIsFeatured(boolean $is_featured) Return the first CollectorProfile filtered by the is_featured column
 * @method     CollectorProfile findOneByIsSeller(boolean $is_seller) Return the first CollectorProfile filtered by the is_seller column
 * @method     CollectorProfile findOneByIsImageAuto(boolean $is_image_auto) Return the first CollectorProfile filtered by the is_image_auto column
 * @method     CollectorProfile findOneByPreferences(string $preferences) Return the first CollectorProfile filtered by the preferences column
 * @method     CollectorProfile findOneByNotifications(string $notifications) Return the first CollectorProfile filtered by the notifications column
 * @method     CollectorProfile findOneByUpdatedAt(string $updated_at) Return the first CollectorProfile filtered by the updated_at column
 * @method     CollectorProfile findOneByCreatedAt(string $created_at) Return the first CollectorProfile filtered by the created_at column
 *
 * @method     array findById(int $id) Return CollectorProfile objects filtered by the id column
 * @method     array findByCollectorId(int $collector_id) Return CollectorProfile objects filtered by the collector_id column
 * @method     array findByCollectorType(string $collector_type) Return CollectorProfile objects filtered by the collector_type column
 * @method     array findByBirthday(string $birthday) Return CollectorProfile objects filtered by the birthday column
 * @method     array findByGender(string $gender) Return CollectorProfile objects filtered by the gender column
 * @method     array findByZipPostal(string $zip_postal) Return CollectorProfile objects filtered by the zip_postal column
 * @method     array findByCountry(string $country) Return CollectorProfile objects filtered by the country column
 * @method     array findByCountryIso3166(string $country_iso3166) Return CollectorProfile objects filtered by the country_iso3166 column
 * @method     array findByWebsite(string $website) Return CollectorProfile objects filtered by the website column
 * @method     array findByAbout(string $about) Return CollectorProfile objects filtered by the about column
 * @method     array findByCollections(string $collections) Return CollectorProfile objects filtered by the collections column
 * @method     array findByCollecting(string $collecting) Return CollectorProfile objects filtered by the collecting column
 * @method     array findByMostSpent(int $most_spent) Return CollectorProfile objects filtered by the most_spent column
 * @method     array findByAnuallySpent(int $anually_spent) Return CollectorProfile objects filtered by the anually_spent column
 * @method     array findByNewItemEvery(string $new_item_every) Return CollectorProfile objects filtered by the new_item_every column
 * @method     array findByInterests(string $interests) Return CollectorProfile objects filtered by the interests column
 * @method     array findByIsFeatured(boolean $is_featured) Return CollectorProfile objects filtered by the is_featured column
 * @method     array findByIsSeller(boolean $is_seller) Return CollectorProfile objects filtered by the is_seller column
 * @method     array findByIsImageAuto(boolean $is_image_auto) Return CollectorProfile objects filtered by the is_image_auto column
 * @method     array findByPreferences(string $preferences) Return CollectorProfile objects filtered by the preferences column
 * @method     array findByNotifications(string $notifications) Return CollectorProfile objects filtered by the notifications column
 * @method     array findByUpdatedAt(string $updated_at) Return CollectorProfile objects filtered by the updated_at column
 * @method     array findByCreatedAt(string $created_at) Return CollectorProfile objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectorProfileQuery extends ModelCriteria
{
    
  // archivable behavior
  protected $archiveOnDelete = true;

    /**
     * Initializes internal state of BaseCollectorProfileQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'CollectorProfile', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CollectorProfileQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    CollectorProfileQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CollectorProfileQuery) {
            return $criteria;
        }
        $query = new CollectorProfileQuery();
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
     * @return    CollectorProfile|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CollectorProfilePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(CollectorProfilePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(CollectorProfilePeer::ID, $keys, Criteria::IN);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(CollectorProfilePeer::ID, $id, $comparison);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterByCollectorId($collectorId = null, $comparison = null)
    {
        if (is_array($collectorId)) {
            $useMinMax = false;
            if (isset($collectorId['min'])) {
                $this->addUsingAlias(CollectorProfilePeer::COLLECTOR_ID, $collectorId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($collectorId['max'])) {
                $this->addUsingAlias(CollectorProfilePeer::COLLECTOR_ID, $collectorId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorProfilePeer::COLLECTOR_ID, $collectorId, $comparison);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterByCollectorType($collectorType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($collectorType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $collectorType)) {
                $collectorType = str_replace('*', '%', $collectorType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorProfilePeer::COLLECTOR_TYPE, $collectorType, $comparison);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterByBirthday($birthday = null, $comparison = null)
    {
        if (is_array($birthday)) {
            $useMinMax = false;
            if (isset($birthday['min'])) {
                $this->addUsingAlias(CollectorProfilePeer::BIRTHDAY, $birthday['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($birthday['max'])) {
                $this->addUsingAlias(CollectorProfilePeer::BIRTHDAY, $birthday['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorProfilePeer::BIRTHDAY, $birthday, $comparison);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterByGender($gender = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gender)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gender)) {
                $gender = str_replace('*', '%', $gender);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorProfilePeer::GENDER, $gender, $comparison);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectorProfilePeer::ZIP_POSTAL, $zipPostal, $comparison);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectorProfilePeer::COUNTRY, $country, $comparison);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectorProfilePeer::COUNTRY_ISO3166, $countryIso3166, $comparison);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterByWebsite($website = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($website)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $website)) {
                $website = str_replace('*', '%', $website);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorProfilePeer::WEBSITE, $website, $comparison);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterByAbout($about = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($about)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $about)) {
                $about = str_replace('*', '%', $about);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorProfilePeer::ABOUT, $about, $comparison);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterByCollections($collections = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($collections)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $collections)) {
                $collections = str_replace('*', '%', $collections);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorProfilePeer::COLLECTIONS, $collections, $comparison);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterByCollecting($collecting = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($collecting)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $collecting)) {
                $collecting = str_replace('*', '%', $collecting);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorProfilePeer::COLLECTING, $collecting, $comparison);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterByMostSpent($mostSpent = null, $comparison = null)
    {
        if (is_array($mostSpent)) {
            $useMinMax = false;
            if (isset($mostSpent['min'])) {
                $this->addUsingAlias(CollectorProfilePeer::MOST_SPENT, $mostSpent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mostSpent['max'])) {
                $this->addUsingAlias(CollectorProfilePeer::MOST_SPENT, $mostSpent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorProfilePeer::MOST_SPENT, $mostSpent, $comparison);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterByAnuallySpent($anuallySpent = null, $comparison = null)
    {
        if (is_array($anuallySpent)) {
            $useMinMax = false;
            if (isset($anuallySpent['min'])) {
                $this->addUsingAlias(CollectorProfilePeer::ANUALLY_SPENT, $anuallySpent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($anuallySpent['max'])) {
                $this->addUsingAlias(CollectorProfilePeer::ANUALLY_SPENT, $anuallySpent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorProfilePeer::ANUALLY_SPENT, $anuallySpent, $comparison);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterByNewItemEvery($newItemEvery = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($newItemEvery)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $newItemEvery)) {
                $newItemEvery = str_replace('*', '%', $newItemEvery);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorProfilePeer::NEW_ITEM_EVERY, $newItemEvery, $comparison);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterByInterests($interests = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($interests)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $interests)) {
                $interests = str_replace('*', '%', $interests);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorProfilePeer::INTERESTS, $interests, $comparison);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterByIsFeatured($isFeatured = null, $comparison = null)
    {
        if (is_string($isFeatured)) {
            $is_featured = in_array(strtolower($isFeatured), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectorProfilePeer::IS_FEATURED, $isFeatured, $comparison);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterByIsSeller($isSeller = null, $comparison = null)
    {
        if (is_string($isSeller)) {
            $is_seller = in_array(strtolower($isSeller), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectorProfilePeer::IS_SELLER, $isSeller, $comparison);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterByIsImageAuto($isImageAuto = null, $comparison = null)
    {
        if (is_string($isImageAuto)) {
            $is_image_auto = in_array(strtolower($isImageAuto), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectorProfilePeer::IS_IMAGE_AUTO, $isImageAuto, $comparison);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterByPreferences($preferences = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($preferences)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $preferences)) {
                $preferences = str_replace('*', '%', $preferences);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorProfilePeer::PREFERENCES, $preferences, $comparison);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterByNotifications($notifications = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notifications)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $notifications)) {
                $notifications = str_replace('*', '%', $notifications);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorProfilePeer::NOTIFICATIONS, $notifications, $comparison);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(CollectorProfilePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(CollectorProfilePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorProfilePeer::UPDATED_AT, $updatedAt, $comparison);
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
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(CollectorProfilePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(CollectorProfilePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorProfilePeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query by a related Collector object
     *
     * @param     Collector|PropelCollection $collector The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function filterByCollector($collector, $comparison = null)
    {
        if ($collector instanceof Collector) {
            return $this
                ->addUsingAlias(CollectorProfilePeer::COLLECTOR_ID, $collector->getId(), $comparison);
        } elseif ($collector instanceof PropelCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
            return $this
                ->addUsingAlias(CollectorProfilePeer::COLLECTOR_ID, $collector->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCollector() only accepts arguments of type Collector or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Collector relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function joinCollector($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Collector');

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
     * @param     CollectorProfile $collectorProfile Object to remove from the list of results
     *
     * @return    CollectorProfileQuery The current query, for fluid interface
     */
    public function prune($collectorProfile = null)
    {
        if ($collectorProfile) {
            $this->addUsingAlias(CollectorProfilePeer::ID, $collectorProfile->getId(), Criteria::NOT_EQUAL);
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
   * Copy the data of the objects satisfying the query into CollectorProfileArchive archive objects.
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
      $con = Propel::getConnection(CollectorProfilePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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