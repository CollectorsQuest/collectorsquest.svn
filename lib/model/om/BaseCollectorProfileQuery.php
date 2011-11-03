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
    if ($criteria instanceof CollectorProfileQuery)
    {
      return $criteria;
    }
    $query = new CollectorProfileQuery();
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
   * @return    CollectorProfile|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = CollectorProfilePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(CollectorProfilePeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the collector_id column
   * 
   * @param     int|array $collectorId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
   */
  public function filterByCollectorId($collectorId = null, $comparison = null)
  {
    if (is_array($collectorId))
    {
      $useMinMax = false;
      if (isset($collectorId['min']))
      {
        $this->addUsingAlias(CollectorProfilePeer::COLLECTOR_ID, $collectorId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($collectorId['max']))
      {
        $this->addUsingAlias(CollectorProfilePeer::COLLECTOR_ID, $collectorId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectorProfilePeer::COLLECTOR_ID, $collectorId, $comparison);
  }

  /**
   * Filter the query on the collector_type column
   * 
   * @param     string $collectorType The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
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
    return $this->addUsingAlias(CollectorProfilePeer::COLLECTOR_TYPE, $collectorType, $comparison);
  }

  /**
   * Filter the query on the birthday column
   * 
   * @param     string|array $birthday The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
   */
  public function filterByBirthday($birthday = null, $comparison = null)
  {
    if (is_array($birthday))
    {
      $useMinMax = false;
      if (isset($birthday['min']))
      {
        $this->addUsingAlias(CollectorProfilePeer::BIRTHDAY, $birthday['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($birthday['max']))
      {
        $this->addUsingAlias(CollectorProfilePeer::BIRTHDAY, $birthday['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectorProfilePeer::BIRTHDAY, $birthday, $comparison);
  }

  /**
   * Filter the query on the gender column
   * 
   * @param     string $gender The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
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
    return $this->addUsingAlias(CollectorProfilePeer::GENDER, $gender, $comparison);
  }

  /**
   * Filter the query on the zip_postal column
   * 
   * @param     string $zipPostal The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
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
    return $this->addUsingAlias(CollectorProfilePeer::ZIP_POSTAL, $zipPostal, $comparison);
  }

  /**
   * Filter the query on the country column
   * 
   * @param     string $country The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
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
    return $this->addUsingAlias(CollectorProfilePeer::COUNTRY, $country, $comparison);
  }

  /**
   * Filter the query on the country_iso3166 column
   * 
   * @param     string $countryIso3166 The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
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
    return $this->addUsingAlias(CollectorProfilePeer::COUNTRY_ISO3166, $countryIso3166, $comparison);
  }

  /**
   * Filter the query on the website column
   * 
   * @param     string $website The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
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
    return $this->addUsingAlias(CollectorProfilePeer::WEBSITE, $website, $comparison);
  }

  /**
   * Filter the query on the about column
   * 
   * @param     string $about The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
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
    return $this->addUsingAlias(CollectorProfilePeer::ABOUT, $about, $comparison);
  }

  /**
   * Filter the query on the collections column
   * 
   * @param     string $collections The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
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
    return $this->addUsingAlias(CollectorProfilePeer::COLLECTIONS, $collections, $comparison);
  }

  /**
   * Filter the query on the collecting column
   * 
   * @param     string $collecting The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
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
    return $this->addUsingAlias(CollectorProfilePeer::COLLECTING, $collecting, $comparison);
  }

  /**
   * Filter the query on the most_spent column
   * 
   * @param     int|array $mostSpent The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
   */
  public function filterByMostSpent($mostSpent = null, $comparison = null)
  {
    if (is_array($mostSpent))
    {
      $useMinMax = false;
      if (isset($mostSpent['min']))
      {
        $this->addUsingAlias(CollectorProfilePeer::MOST_SPENT, $mostSpent['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($mostSpent['max']))
      {
        $this->addUsingAlias(CollectorProfilePeer::MOST_SPENT, $mostSpent['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectorProfilePeer::MOST_SPENT, $mostSpent, $comparison);
  }

  /**
   * Filter the query on the anually_spent column
   * 
   * @param     int|array $anuallySpent The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
   */
  public function filterByAnuallySpent($anuallySpent = null, $comparison = null)
  {
    if (is_array($anuallySpent))
    {
      $useMinMax = false;
      if (isset($anuallySpent['min']))
      {
        $this->addUsingAlias(CollectorProfilePeer::ANUALLY_SPENT, $anuallySpent['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($anuallySpent['max']))
      {
        $this->addUsingAlias(CollectorProfilePeer::ANUALLY_SPENT, $anuallySpent['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectorProfilePeer::ANUALLY_SPENT, $anuallySpent, $comparison);
  }

  /**
   * Filter the query on the new_item_every column
   * 
   * @param     string $newItemEvery The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
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
    return $this->addUsingAlias(CollectorProfilePeer::NEW_ITEM_EVERY, $newItemEvery, $comparison);
  }

  /**
   * Filter the query on the interests column
   * 
   * @param     string $interests The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
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
    return $this->addUsingAlias(CollectorProfilePeer::INTERESTS, $interests, $comparison);
  }

  /**
   * Filter the query on the is_featured column
   * 
   * @param     boolean|string $isFeatured The value to use as filter.
   *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
   */
  public function filterByIsFeatured($isFeatured = null, $comparison = null)
  {
    if (is_string($isFeatured))
    {
      $is_featured = in_array(strtolower($isFeatured), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
    }
    return $this->addUsingAlias(CollectorProfilePeer::IS_FEATURED, $isFeatured, $comparison);
  }

  /**
   * Filter the query on the is_seller column
   * 
   * @param     boolean|string $isSeller The value to use as filter.
   *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
   */
  public function filterByIsSeller($isSeller = null, $comparison = null)
  {
    if (is_string($isSeller))
    {
      $is_seller = in_array(strtolower($isSeller), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
    }
    return $this->addUsingAlias(CollectorProfilePeer::IS_SELLER, $isSeller, $comparison);
  }

  /**
   * Filter the query on the is_image_auto column
   * 
   * @param     boolean|string $isImageAuto The value to use as filter.
   *            Accepts strings ('false', 'off', '-', 'no', 'n', and '0' are false, the rest is true)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
   */
  public function filterByIsImageAuto($isImageAuto = null, $comparison = null)
  {
    if (is_string($isImageAuto))
    {
      $is_image_auto = in_array(strtolower($isImageAuto), array('false', 'off', '-', 'no', 'n', '0')) ? false : true;
    }
    return $this->addUsingAlias(CollectorProfilePeer::IS_IMAGE_AUTO, $isImageAuto, $comparison);
  }

  /**
   * Filter the query on the preferences column
   * 
   * @param     string $preferences The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
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
    return $this->addUsingAlias(CollectorProfilePeer::PREFERENCES, $preferences, $comparison);
  }

  /**
   * Filter the query on the notifications column
   * 
   * @param     string $notifications The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
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
    return $this->addUsingAlias(CollectorProfilePeer::NOTIFICATIONS, $notifications, $comparison);
  }

  /**
   * Filter the query on the updated_at column
   * 
   * @param     string|array $updatedAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
   */
  public function filterByUpdatedAt($updatedAt = null, $comparison = null)
  {
    if (is_array($updatedAt))
    {
      $useMinMax = false;
      if (isset($updatedAt['min']))
      {
        $this->addUsingAlias(CollectorProfilePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($updatedAt['max']))
      {
        $this->addUsingAlias(CollectorProfilePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectorProfilePeer::UPDATED_AT, $updatedAt, $comparison);
  }

  /**
   * Filter the query on the created_at column
   * 
   * @param     string|array $createdAt The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
   */
  public function filterByCreatedAt($createdAt = null, $comparison = null)
  {
    if (is_array($createdAt))
    {
      $useMinMax = false;
      if (isset($createdAt['min']))
      {
        $this->addUsingAlias(CollectorProfilePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($createdAt['max']))
      {
        $this->addUsingAlias(CollectorProfilePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(CollectorProfilePeer::CREATED_AT, $createdAt, $comparison);
  }

  /**
   * Filter the query by a related Collector object
   *
   * @param     Collector $collector  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
   */
  public function filterByCollector($collector, $comparison = null)
  {
    return $this
      ->addUsingAlias(CollectorProfilePeer::COLLECTOR_ID, $collector->getId(), $comparison);
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
   * @param     CollectorProfile $collectorProfile Object to remove from the list of results
   *
   * @return    CollectorProfileQuery The current query, for fluid interface
   */
  public function prune($collectorProfile = null)
  {
    if ($collectorProfile)
    {
      $this->addUsingAlias(CollectorProfilePeer::ID, $collectorProfile->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

}
