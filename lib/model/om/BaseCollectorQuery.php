<?php


/**
 * Base class that represents a query for the 'collector' table.
 *
 * 
 *
 * @method     CollectorQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectorQuery orderByFacebookId($order = Criteria::ASC) Order by the facebook_id column
 * @method     CollectorQuery orderByUsername($order = Criteria::ASC) Order by the username column
 * @method     CollectorQuery orderByDisplayName($order = Criteria::ASC) Order by the display_name column
 * @method     CollectorQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     CollectorQuery orderBySha1Password($order = Criteria::ASC) Order by the sha1_password column
 * @method     CollectorQuery orderBySalt($order = Criteria::ASC) Order by the salt column
 * @method     CollectorQuery orderByScore($order = Criteria::ASC) Order by the score column
 * @method     CollectorQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     CollectorQuery orderByUserType($order = Criteria::ASC) Order by the user_type column
 * @method     CollectorQuery orderByItemsAllowed($order = Criteria::ASC) Order by the items_allowed column
 * @method     CollectorQuery orderByWhatYouCollect($order = Criteria::ASC) Order by the what_you_collect column
 * @method     CollectorQuery orderByPurchasesPerYear($order = Criteria::ASC) Order by the purchases_per_year column
 * @method     CollectorQuery orderByWhatYouSell($order = Criteria::ASC) Order by the what_you_sell column
 * @method     CollectorQuery orderByAnnuallySpend($order = Criteria::ASC) Order by the annually_spend column
 * @method     CollectorQuery orderByMostExpensiveItem($order = Criteria::ASC) Order by the most_expensive_item column
 * @method     CollectorQuery orderByCompany($order = Criteria::ASC) Order by the company column
 * @method     CollectorQuery orderByIsPublic($order = Criteria::ASC) Order by the is_public column
 * @method     CollectorQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 * @method     CollectorQuery orderByLastSeenAt($order = Criteria::ASC) Order by the last_seen_at column
 * @method     CollectorQuery orderByDeletedAt($order = Criteria::ASC) Order by the deleted_at column
 * @method     CollectorQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     CollectorQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     CollectorQuery groupById() Group by the id column
 * @method     CollectorQuery groupByFacebookId() Group by the facebook_id column
 * @method     CollectorQuery groupByUsername() Group by the username column
 * @method     CollectorQuery groupByDisplayName() Group by the display_name column
 * @method     CollectorQuery groupBySlug() Group by the slug column
 * @method     CollectorQuery groupBySha1Password() Group by the sha1_password column
 * @method     CollectorQuery groupBySalt() Group by the salt column
 * @method     CollectorQuery groupByScore() Group by the score column
 * @method     CollectorQuery groupByEmail() Group by the email column
 * @method     CollectorQuery groupByUserType() Group by the user_type column
 * @method     CollectorQuery groupByItemsAllowed() Group by the items_allowed column
 * @method     CollectorQuery groupByWhatYouCollect() Group by the what_you_collect column
 * @method     CollectorQuery groupByPurchasesPerYear() Group by the purchases_per_year column
 * @method     CollectorQuery groupByWhatYouSell() Group by the what_you_sell column
 * @method     CollectorQuery groupByAnnuallySpend() Group by the annually_spend column
 * @method     CollectorQuery groupByMostExpensiveItem() Group by the most_expensive_item column
 * @method     CollectorQuery groupByCompany() Group by the company column
 * @method     CollectorQuery groupByIsPublic() Group by the is_public column
 * @method     CollectorQuery groupBySessionId() Group by the session_id column
 * @method     CollectorQuery groupByLastSeenAt() Group by the last_seen_at column
 * @method     CollectorQuery groupByDeletedAt() Group by the deleted_at column
 * @method     CollectorQuery groupByCreatedAt() Group by the created_at column
 * @method     CollectorQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     CollectorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectorQuery leftJoinCollectionItemOffer($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectionItemOffer relation
 * @method     CollectorQuery rightJoinCollectionItemOffer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectionItemOffer relation
 * @method     CollectorQuery innerJoinCollectionItemOffer($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectionItemOffer relation
 *
 * @method     CollectorQuery leftJoinCollectorProfile($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectorProfile relation
 * @method     CollectorQuery rightJoinCollectorProfile($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectorProfile relation
 * @method     CollectorQuery innerJoinCollectorProfile($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectorProfile relation
 *
 * @method     CollectorQuery leftJoinCollectorIdentifier($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectorIdentifier relation
 * @method     CollectorQuery rightJoinCollectorIdentifier($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectorIdentifier relation
 * @method     CollectorQuery innerJoinCollectorIdentifier($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectorIdentifier relation
 *
 * @method     CollectorQuery leftJoinCollectorInterview($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectorInterview relation
 * @method     CollectorQuery rightJoinCollectorInterview($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectorInterview relation
 * @method     CollectorQuery innerJoinCollectorInterview($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectorInterview relation
 *
 * @method     CollectorQuery leftJoinCollectorGeocache($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectorGeocache relation
 * @method     CollectorQuery rightJoinCollectorGeocache($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectorGeocache relation
 * @method     CollectorQuery innerJoinCollectorGeocache($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectorGeocache relation
 *
 * @method     CollectorQuery leftJoinCollectorFriendRelatedByCollectorId($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectorFriendRelatedByCollectorId relation
 * @method     CollectorQuery rightJoinCollectorFriendRelatedByCollectorId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectorFriendRelatedByCollectorId relation
 * @method     CollectorQuery innerJoinCollectorFriendRelatedByCollectorId($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectorFriendRelatedByCollectorId relation
 *
 * @method     CollectorQuery leftJoinCollectorFriendRelatedByFriendId($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectorFriendRelatedByFriendId relation
 * @method     CollectorQuery rightJoinCollectorFriendRelatedByFriendId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectorFriendRelatedByFriendId relation
 * @method     CollectorQuery innerJoinCollectorFriendRelatedByFriendId($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectorFriendRelatedByFriendId relation
 *
 * @method     CollectorQuery leftJoinCollection($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collection relation
 * @method     CollectorQuery rightJoinCollection($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collection relation
 * @method     CollectorQuery innerJoinCollection($relationAlias = null) Adds a INNER JOIN clause to the query using the Collection relation
 *
 * @method     CollectorQuery leftJoinCollectible($relationAlias = null) Adds a LEFT JOIN clause to the query using the Collectible relation
 * @method     CollectorQuery rightJoinCollectible($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Collectible relation
 * @method     CollectorQuery innerJoinCollectible($relationAlias = null) Adds a INNER JOIN clause to the query using the Collectible relation
 *
 * @method     CollectorQuery leftJoinCollectibleOffer($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectibleOffer relation
 * @method     CollectorQuery rightJoinCollectibleOffer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectibleOffer relation
 * @method     CollectorQuery innerJoinCollectibleOffer($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectibleOffer relation
 *
 * @method     CollectorQuery leftJoinComment($relationAlias = null) Adds a LEFT JOIN clause to the query using the Comment relation
 * @method     CollectorQuery rightJoinComment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Comment relation
 * @method     CollectorQuery innerJoinComment($relationAlias = null) Adds a INNER JOIN clause to the query using the Comment relation
 *
 * @method     CollectorQuery leftJoinPackageTransaction($relationAlias = null) Adds a LEFT JOIN clause to the query using the PackageTransaction relation
 * @method     CollectorQuery rightJoinPackageTransaction($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PackageTransaction relation
 * @method     CollectorQuery innerJoinPackageTransaction($relationAlias = null) Adds a INNER JOIN clause to the query using the PackageTransaction relation
 *
 * @method     CollectorQuery leftJoinPromotionTransaction($relationAlias = null) Adds a LEFT JOIN clause to the query using the PromotionTransaction relation
 * @method     CollectorQuery rightJoinPromotionTransaction($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PromotionTransaction relation
 * @method     CollectorQuery innerJoinPromotionTransaction($relationAlias = null) Adds a INNER JOIN clause to the query using the PromotionTransaction relation
 *
 * @method     Collector findOne(PropelPDO $con = null) Return the first Collector matching the query
 * @method     Collector findOneOrCreate(PropelPDO $con = null) Return the first Collector matching the query, or a new Collector object populated from the query conditions when no match is found
 *
 * @method     Collector findOneById(int $id) Return the first Collector filtered by the id column
 * @method     Collector findOneByFacebookId(string $facebook_id) Return the first Collector filtered by the facebook_id column
 * @method     Collector findOneByUsername(string $username) Return the first Collector filtered by the username column
 * @method     Collector findOneByDisplayName(string $display_name) Return the first Collector filtered by the display_name column
 * @method     Collector findOneBySlug(string $slug) Return the first Collector filtered by the slug column
 * @method     Collector findOneBySha1Password(string $sha1_password) Return the first Collector filtered by the sha1_password column
 * @method     Collector findOneBySalt(string $salt) Return the first Collector filtered by the salt column
 * @method     Collector findOneByScore(int $score) Return the first Collector filtered by the score column
 * @method     Collector findOneByEmail(string $email) Return the first Collector filtered by the email column
 * @method     Collector findOneByUserType(string $user_type) Return the first Collector filtered by the user_type column
 * @method     Collector findOneByItemsAllowed(int $items_allowed) Return the first Collector filtered by the items_allowed column
 * @method     Collector findOneByWhatYouCollect(string $what_you_collect) Return the first Collector filtered by the what_you_collect column
 * @method     Collector findOneByPurchasesPerYear(int $purchases_per_year) Return the first Collector filtered by the purchases_per_year column
 * @method     Collector findOneByWhatYouSell(string $what_you_sell) Return the first Collector filtered by the what_you_sell column
 * @method     Collector findOneByAnnuallySpend(double $annually_spend) Return the first Collector filtered by the annually_spend column
 * @method     Collector findOneByMostExpensiveItem(double $most_expensive_item) Return the first Collector filtered by the most_expensive_item column
 * @method     Collector findOneByCompany(string $company) Return the first Collector filtered by the company column
 * @method     Collector findOneByIsPublic(boolean $is_public) Return the first Collector filtered by the is_public column
 * @method     Collector findOneBySessionId(string $session_id) Return the first Collector filtered by the session_id column
 * @method     Collector findOneByLastSeenAt(string $last_seen_at) Return the first Collector filtered by the last_seen_at column
 * @method     Collector findOneByDeletedAt(string $deleted_at) Return the first Collector filtered by the deleted_at column
 * @method     Collector findOneByCreatedAt(string $created_at) Return the first Collector filtered by the created_at column
 * @method     Collector findOneByUpdatedAt(string $updated_at) Return the first Collector filtered by the updated_at column
 *
 * @method     array findById(int $id) Return Collector objects filtered by the id column
 * @method     array findByFacebookId(string $facebook_id) Return Collector objects filtered by the facebook_id column
 * @method     array findByUsername(string $username) Return Collector objects filtered by the username column
 * @method     array findByDisplayName(string $display_name) Return Collector objects filtered by the display_name column
 * @method     array findBySlug(string $slug) Return Collector objects filtered by the slug column
 * @method     array findBySha1Password(string $sha1_password) Return Collector objects filtered by the sha1_password column
 * @method     array findBySalt(string $salt) Return Collector objects filtered by the salt column
 * @method     array findByScore(int $score) Return Collector objects filtered by the score column
 * @method     array findByEmail(string $email) Return Collector objects filtered by the email column
 * @method     array findByUserType(string $user_type) Return Collector objects filtered by the user_type column
 * @method     array findByItemsAllowed(int $items_allowed) Return Collector objects filtered by the items_allowed column
 * @method     array findByWhatYouCollect(string $what_you_collect) Return Collector objects filtered by the what_you_collect column
 * @method     array findByPurchasesPerYear(int $purchases_per_year) Return Collector objects filtered by the purchases_per_year column
 * @method     array findByWhatYouSell(string $what_you_sell) Return Collector objects filtered by the what_you_sell column
 * @method     array findByAnnuallySpend(double $annually_spend) Return Collector objects filtered by the annually_spend column
 * @method     array findByMostExpensiveItem(double $most_expensive_item) Return Collector objects filtered by the most_expensive_item column
 * @method     array findByCompany(string $company) Return Collector objects filtered by the company column
 * @method     array findByIsPublic(boolean $is_public) Return Collector objects filtered by the is_public column
 * @method     array findBySessionId(string $session_id) Return Collector objects filtered by the session_id column
 * @method     array findByLastSeenAt(string $last_seen_at) Return Collector objects filtered by the last_seen_at column
 * @method     array findByDeletedAt(string $deleted_at) Return Collector objects filtered by the deleted_at column
 * @method     array findByCreatedAt(string $created_at) Return Collector objects filtered by the created_at column
 * @method     array findByUpdatedAt(string $updated_at) Return Collector objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseCollectorQuery extends ModelCriteria
{
    
  // soft_delete behavior
  protected static $softDelete = true;
  protected $localSoftDelete = true;

    /**
     * Initializes internal state of BaseCollectorQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Collector', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CollectorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    CollectorQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CollectorQuery) {
            return $criteria;
        }
        $query = new CollectorQuery();
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
     * @return    Collector|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CollectorPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(CollectorPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(CollectorPeer::ID, $keys, Criteria::IN);
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
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(CollectorPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the facebook_id column
     *
     * Example usage:
     * <code>
     * $query->filterByFacebookId('fooValue');   // WHERE facebook_id = 'fooValue'
     * $query->filterByFacebookId('%fooValue%'); // WHERE facebook_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $facebookId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByFacebookId($facebookId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($facebookId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $facebookId)) {
                $facebookId = str_replace('*', '%', $facebookId);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorPeer::FACEBOOK_ID, $facebookId, $comparison);
    }

    /**
     * Filter the query on the username column
     *
     * Example usage:
     * <code>
     * $query->filterByUsername('fooValue');   // WHERE username = 'fooValue'
     * $query->filterByUsername('%fooValue%'); // WHERE username LIKE '%fooValue%'
     * </code>
     *
     * @param     string $username The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByUsername($username = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($username)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $username)) {
                $username = str_replace('*', '%', $username);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorPeer::USERNAME, $username, $comparison);
    }

    /**
     * Filter the query on the display_name column
     *
     * Example usage:
     * <code>
     * $query->filterByDisplayName('fooValue');   // WHERE display_name = 'fooValue'
     * $query->filterByDisplayName('%fooValue%'); // WHERE display_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $displayName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByDisplayName($displayName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($displayName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $displayName)) {
                $displayName = str_replace('*', '%', $displayName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorPeer::DISPLAY_NAME, $displayName, $comparison);
    }

    /**
     * Filter the query on the slug column
     *
     * Example usage:
     * <code>
     * $query->filterBySlug('fooValue');   // WHERE slug = 'fooValue'
     * $query->filterBySlug('%fooValue%'); // WHERE slug LIKE '%fooValue%'
     * </code>
     *
     * @param     string $slug The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterBySlug($slug = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($slug)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $slug)) {
                $slug = str_replace('*', '%', $slug);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorPeer::SLUG, $slug, $comparison);
    }

    /**
     * Filter the query on the sha1_password column
     *
     * Example usage:
     * <code>
     * $query->filterBySha1Password('fooValue');   // WHERE sha1_password = 'fooValue'
     * $query->filterBySha1Password('%fooValue%'); // WHERE sha1_password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sha1Password The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterBySha1Password($sha1Password = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sha1Password)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sha1Password)) {
                $sha1Password = str_replace('*', '%', $sha1Password);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorPeer::SHA1_PASSWORD, $sha1Password, $comparison);
    }

    /**
     * Filter the query on the salt column
     *
     * Example usage:
     * <code>
     * $query->filterBySalt('fooValue');   // WHERE salt = 'fooValue'
     * $query->filterBySalt('%fooValue%'); // WHERE salt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $salt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterBySalt($salt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($salt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $salt)) {
                $salt = str_replace('*', '%', $salt);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorPeer::SALT, $salt, $comparison);
    }

    /**
     * Filter the query on the score column
     *
     * Example usage:
     * <code>
     * $query->filterByScore(1234); // WHERE score = 1234
     * $query->filterByScore(array(12, 34)); // WHERE score IN (12, 34)
     * $query->filterByScore(array('min' => 12)); // WHERE score > 12
     * </code>
     *
     * @param     mixed $score The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByScore($score = null, $comparison = null)
    {
        if (is_array($score)) {
            $useMinMax = false;
            if (isset($score['min'])) {
                $this->addUsingAlias(CollectorPeer::SCORE, $score['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($score['max'])) {
                $this->addUsingAlias(CollectorPeer::SCORE, $score['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorPeer::SCORE, $score, $comparison);
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
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the user_type column
     *
     * Example usage:
     * <code>
     * $query->filterByUserType('fooValue');   // WHERE user_type = 'fooValue'
     * $query->filterByUserType('%fooValue%'); // WHERE user_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByUserType($userType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userType)) {
                $userType = str_replace('*', '%', $userType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorPeer::USER_TYPE, $userType, $comparison);
    }

    /**
     * Filter the query on the items_allowed column
     *
     * Example usage:
     * <code>
     * $query->filterByItemsAllowed(1234); // WHERE items_allowed = 1234
     * $query->filterByItemsAllowed(array(12, 34)); // WHERE items_allowed IN (12, 34)
     * $query->filterByItemsAllowed(array('min' => 12)); // WHERE items_allowed > 12
     * </code>
     *
     * @param     mixed $itemsAllowed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByItemsAllowed($itemsAllowed = null, $comparison = null)
    {
        if (is_array($itemsAllowed)) {
            $useMinMax = false;
            if (isset($itemsAllowed['min'])) {
                $this->addUsingAlias(CollectorPeer::ITEMS_ALLOWED, $itemsAllowed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemsAllowed['max'])) {
                $this->addUsingAlias(CollectorPeer::ITEMS_ALLOWED, $itemsAllowed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorPeer::ITEMS_ALLOWED, $itemsAllowed, $comparison);
    }

    /**
     * Filter the query on the what_you_collect column
     *
     * Example usage:
     * <code>
     * $query->filterByWhatYouCollect('fooValue');   // WHERE what_you_collect = 'fooValue'
     * $query->filterByWhatYouCollect('%fooValue%'); // WHERE what_you_collect LIKE '%fooValue%'
     * </code>
     *
     * @param     string $whatYouCollect The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByWhatYouCollect($whatYouCollect = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($whatYouCollect)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $whatYouCollect)) {
                $whatYouCollect = str_replace('*', '%', $whatYouCollect);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorPeer::WHAT_YOU_COLLECT, $whatYouCollect, $comparison);
    }

    /**
     * Filter the query on the purchases_per_year column
     *
     * Example usage:
     * <code>
     * $query->filterByPurchasesPerYear(1234); // WHERE purchases_per_year = 1234
     * $query->filterByPurchasesPerYear(array(12, 34)); // WHERE purchases_per_year IN (12, 34)
     * $query->filterByPurchasesPerYear(array('min' => 12)); // WHERE purchases_per_year > 12
     * </code>
     *
     * @param     mixed $purchasesPerYear The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByPurchasesPerYear($purchasesPerYear = null, $comparison = null)
    {
        if (is_array($purchasesPerYear)) {
            $useMinMax = false;
            if (isset($purchasesPerYear['min'])) {
                $this->addUsingAlias(CollectorPeer::PURCHASES_PER_YEAR, $purchasesPerYear['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($purchasesPerYear['max'])) {
                $this->addUsingAlias(CollectorPeer::PURCHASES_PER_YEAR, $purchasesPerYear['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorPeer::PURCHASES_PER_YEAR, $purchasesPerYear, $comparison);
    }

    /**
     * Filter the query on the what_you_sell column
     *
     * Example usage:
     * <code>
     * $query->filterByWhatYouSell('fooValue');   // WHERE what_you_sell = 'fooValue'
     * $query->filterByWhatYouSell('%fooValue%'); // WHERE what_you_sell LIKE '%fooValue%'
     * </code>
     *
     * @param     string $whatYouSell The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByWhatYouSell($whatYouSell = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($whatYouSell)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $whatYouSell)) {
                $whatYouSell = str_replace('*', '%', $whatYouSell);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorPeer::WHAT_YOU_SELL, $whatYouSell, $comparison);
    }

    /**
     * Filter the query on the annually_spend column
     *
     * Example usage:
     * <code>
     * $query->filterByAnnuallySpend(1234); // WHERE annually_spend = 1234
     * $query->filterByAnnuallySpend(array(12, 34)); // WHERE annually_spend IN (12, 34)
     * $query->filterByAnnuallySpend(array('min' => 12)); // WHERE annually_spend > 12
     * </code>
     *
     * @param     mixed $annuallySpend The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByAnnuallySpend($annuallySpend = null, $comparison = null)
    {
        if (is_array($annuallySpend)) {
            $useMinMax = false;
            if (isset($annuallySpend['min'])) {
                $this->addUsingAlias(CollectorPeer::ANNUALLY_SPEND, $annuallySpend['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($annuallySpend['max'])) {
                $this->addUsingAlias(CollectorPeer::ANNUALLY_SPEND, $annuallySpend['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorPeer::ANNUALLY_SPEND, $annuallySpend, $comparison);
    }

    /**
     * Filter the query on the most_expensive_item column
     *
     * Example usage:
     * <code>
     * $query->filterByMostExpensiveItem(1234); // WHERE most_expensive_item = 1234
     * $query->filterByMostExpensiveItem(array(12, 34)); // WHERE most_expensive_item IN (12, 34)
     * $query->filterByMostExpensiveItem(array('min' => 12)); // WHERE most_expensive_item > 12
     * </code>
     *
     * @param     mixed $mostExpensiveItem The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByMostExpensiveItem($mostExpensiveItem = null, $comparison = null)
    {
        if (is_array($mostExpensiveItem)) {
            $useMinMax = false;
            if (isset($mostExpensiveItem['min'])) {
                $this->addUsingAlias(CollectorPeer::MOST_EXPENSIVE_ITEM, $mostExpensiveItem['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mostExpensiveItem['max'])) {
                $this->addUsingAlias(CollectorPeer::MOST_EXPENSIVE_ITEM, $mostExpensiveItem['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorPeer::MOST_EXPENSIVE_ITEM, $mostExpensiveItem, $comparison);
    }

    /**
     * Filter the query on the company column
     *
     * Example usage:
     * <code>
     * $query->filterByCompany('fooValue');   // WHERE company = 'fooValue'
     * $query->filterByCompany('%fooValue%'); // WHERE company LIKE '%fooValue%'
     * </code>
     *
     * @param     string $company The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByCompany($company = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($company)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $company)) {
                $company = str_replace('*', '%', $company);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorPeer::COMPANY, $company, $comparison);
    }

    /**
     * Filter the query on the is_public column
     *
     * Example usage:
     * <code>
     * $query->filterByIsPublic(true); // WHERE is_public = true
     * $query->filterByIsPublic('yes'); // WHERE is_public = true
     * </code>
     *
     * @param     boolean|string $isPublic The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByIsPublic($isPublic = null, $comparison = null)
    {
        if (is_string($isPublic)) {
            $is_public = in_array(strtolower($isPublic), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectorPeer::IS_PUBLIC, $isPublic, $comparison);
    }

    /**
     * Filter the query on the session_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySessionId('fooValue');   // WHERE session_id = 'fooValue'
     * $query->filterBySessionId('%fooValue%'); // WHERE session_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sessionId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterBySessionId($sessionId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sessionId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sessionId)) {
                $sessionId = str_replace('*', '%', $sessionId);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorPeer::SESSION_ID, $sessionId, $comparison);
    }

    /**
     * Filter the query on the last_seen_at column
     *
     * Example usage:
     * <code>
     * $query->filterByLastSeenAt('2011-03-14'); // WHERE last_seen_at = '2011-03-14'
     * $query->filterByLastSeenAt('now'); // WHERE last_seen_at = '2011-03-14'
     * $query->filterByLastSeenAt(array('max' => 'yesterday')); // WHERE last_seen_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $lastSeenAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByLastSeenAt($lastSeenAt = null, $comparison = null)
    {
        if (is_array($lastSeenAt)) {
            $useMinMax = false;
            if (isset($lastSeenAt['min'])) {
                $this->addUsingAlias(CollectorPeer::LAST_SEEN_AT, $lastSeenAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastSeenAt['max'])) {
                $this->addUsingAlias(CollectorPeer::LAST_SEEN_AT, $lastSeenAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorPeer::LAST_SEEN_AT, $lastSeenAt, $comparison);
    }

    /**
     * Filter the query on the deleted_at column
     *
     * Example usage:
     * <code>
     * $query->filterByDeletedAt('2011-03-14'); // WHERE deleted_at = '2011-03-14'
     * $query->filterByDeletedAt('now'); // WHERE deleted_at = '2011-03-14'
     * $query->filterByDeletedAt(array('max' => 'yesterday')); // WHERE deleted_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $deletedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByDeletedAt($deletedAt = null, $comparison = null)
    {
        if (is_array($deletedAt)) {
            $useMinMax = false;
            if (isset($deletedAt['min'])) {
                $this->addUsingAlias(CollectorPeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletedAt['max'])) {
                $this->addUsingAlias(CollectorPeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorPeer::DELETED_AT, $deletedAt, $comparison);
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
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(CollectorPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(CollectorPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorPeer::CREATED_AT, $createdAt, $comparison);
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
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(CollectorPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(CollectorPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related CollectionItemOffer object
     *
     * @param     CollectionItemOffer $collectionItemOffer  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByCollectionItemOffer($collectionItemOffer, $comparison = null)
    {
        if ($collectionItemOffer instanceof CollectionItemOffer) {
            return $this
                ->addUsingAlias(CollectorPeer::ID, $collectionItemOffer->getCollectorId(), $comparison);
        } elseif ($collectionItemOffer instanceof PropelCollection) {
            return $this
                ->useCollectionItemOfferQuery()
                ->filterByPrimaryKeys($collectionItemOffer->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCollectionItemOffer() only accepts arguments of type CollectionItemOffer or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CollectionItemOffer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function joinCollectionItemOffer($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CollectionItemOffer');

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
            $this->addJoinObject($join, 'CollectionItemOffer');
        }

        return $this;
    }

    /**
     * Use the CollectionItemOffer relation CollectionItemOffer object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectionItemOfferQuery A secondary query class using the current class as primary query
     */
    public function useCollectionItemOfferQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCollectionItemOffer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CollectionItemOffer', 'CollectionItemOfferQuery');
    }

    /**
     * Filter the query by a related CollectorProfile object
     *
     * @param     CollectorProfile $collectorProfile  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByCollectorProfile($collectorProfile, $comparison = null)
    {
        if ($collectorProfile instanceof CollectorProfile) {
            return $this
                ->addUsingAlias(CollectorPeer::ID, $collectorProfile->getCollectorId(), $comparison);
        } elseif ($collectorProfile instanceof PropelCollection) {
            return $this
                ->useCollectorProfileQuery()
                ->filterByPrimaryKeys($collectorProfile->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCollectorProfile() only accepts arguments of type CollectorProfile or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CollectorProfile relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function joinCollectorProfile($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CollectorProfile');

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
            $this->addJoinObject($join, 'CollectorProfile');
        }

        return $this;
    }

    /**
     * Use the CollectorProfile relation CollectorProfile object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorProfileQuery A secondary query class using the current class as primary query
     */
    public function useCollectorProfileQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCollectorProfile($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CollectorProfile', 'CollectorProfileQuery');
    }

    /**
     * Filter the query by a related CollectorIdentifier object
     *
     * @param     CollectorIdentifier $collectorIdentifier  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByCollectorIdentifier($collectorIdentifier, $comparison = null)
    {
        if ($collectorIdentifier instanceof CollectorIdentifier) {
            return $this
                ->addUsingAlias(CollectorPeer::ID, $collectorIdentifier->getCollectorId(), $comparison);
        } elseif ($collectorIdentifier instanceof PropelCollection) {
            return $this
                ->useCollectorIdentifierQuery()
                ->filterByPrimaryKeys($collectorIdentifier->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCollectorIdentifier() only accepts arguments of type CollectorIdentifier or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CollectorIdentifier relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function joinCollectorIdentifier($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CollectorIdentifier');

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
            $this->addJoinObject($join, 'CollectorIdentifier');
        }

        return $this;
    }

    /**
     * Use the CollectorIdentifier relation CollectorIdentifier object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorIdentifierQuery A secondary query class using the current class as primary query
     */
    public function useCollectorIdentifierQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCollectorIdentifier($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CollectorIdentifier', 'CollectorIdentifierQuery');
    }

    /**
     * Filter the query by a related CollectorInterview object
     *
     * @param     CollectorInterview $collectorInterview  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByCollectorInterview($collectorInterview, $comparison = null)
    {
        if ($collectorInterview instanceof CollectorInterview) {
            return $this
                ->addUsingAlias(CollectorPeer::ID, $collectorInterview->getCollectorId(), $comparison);
        } elseif ($collectorInterview instanceof PropelCollection) {
            return $this
                ->useCollectorInterviewQuery()
                ->filterByPrimaryKeys($collectorInterview->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCollectorInterview() only accepts arguments of type CollectorInterview or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CollectorInterview relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function joinCollectorInterview($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CollectorInterview');

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
            $this->addJoinObject($join, 'CollectorInterview');
        }

        return $this;
    }

    /**
     * Use the CollectorInterview relation CollectorInterview object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorInterviewQuery A secondary query class using the current class as primary query
     */
    public function useCollectorInterviewQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCollectorInterview($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CollectorInterview', 'CollectorInterviewQuery');
    }

    /**
     * Filter the query by a related CollectorGeocache object
     *
     * @param     CollectorGeocache $collectorGeocache  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByCollectorGeocache($collectorGeocache, $comparison = null)
    {
        if ($collectorGeocache instanceof CollectorGeocache) {
            return $this
                ->addUsingAlias(CollectorPeer::ID, $collectorGeocache->getCollectorId(), $comparison);
        } elseif ($collectorGeocache instanceof PropelCollection) {
            return $this
                ->useCollectorGeocacheQuery()
                ->filterByPrimaryKeys($collectorGeocache->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCollectorGeocache() only accepts arguments of type CollectorGeocache or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CollectorGeocache relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function joinCollectorGeocache($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CollectorGeocache');

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
            $this->addJoinObject($join, 'CollectorGeocache');
        }

        return $this;
    }

    /**
     * Use the CollectorGeocache relation CollectorGeocache object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorGeocacheQuery A secondary query class using the current class as primary query
     */
    public function useCollectorGeocacheQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCollectorGeocache($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CollectorGeocache', 'CollectorGeocacheQuery');
    }

    /**
     * Filter the query by a related CollectorFriend object
     *
     * @param     CollectorFriend $collectorFriend  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByCollectorFriendRelatedByCollectorId($collectorFriend, $comparison = null)
    {
        if ($collectorFriend instanceof CollectorFriend) {
            return $this
                ->addUsingAlias(CollectorPeer::ID, $collectorFriend->getCollectorId(), $comparison);
        } elseif ($collectorFriend instanceof PropelCollection) {
            return $this
                ->useCollectorFriendRelatedByCollectorIdQuery()
                ->filterByPrimaryKeys($collectorFriend->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCollectorFriendRelatedByCollectorId() only accepts arguments of type CollectorFriend or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CollectorFriendRelatedByCollectorId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function joinCollectorFriendRelatedByCollectorId($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CollectorFriendRelatedByCollectorId');

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
            $this->addJoinObject($join, 'CollectorFriendRelatedByCollectorId');
        }

        return $this;
    }

    /**
     * Use the CollectorFriendRelatedByCollectorId relation CollectorFriend object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorFriendQuery A secondary query class using the current class as primary query
     */
    public function useCollectorFriendRelatedByCollectorIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCollectorFriendRelatedByCollectorId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CollectorFriendRelatedByCollectorId', 'CollectorFriendQuery');
    }

    /**
     * Filter the query by a related CollectorFriend object
     *
     * @param     CollectorFriend $collectorFriend  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByCollectorFriendRelatedByFriendId($collectorFriend, $comparison = null)
    {
        if ($collectorFriend instanceof CollectorFriend) {
            return $this
                ->addUsingAlias(CollectorPeer::ID, $collectorFriend->getFriendId(), $comparison);
        } elseif ($collectorFriend instanceof PropelCollection) {
            return $this
                ->useCollectorFriendRelatedByFriendIdQuery()
                ->filterByPrimaryKeys($collectorFriend->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCollectorFriendRelatedByFriendId() only accepts arguments of type CollectorFriend or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CollectorFriendRelatedByFriendId relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function joinCollectorFriendRelatedByFriendId($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CollectorFriendRelatedByFriendId');

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
            $this->addJoinObject($join, 'CollectorFriendRelatedByFriendId');
        }

        return $this;
    }

    /**
     * Use the CollectorFriendRelatedByFriendId relation CollectorFriend object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorFriendQuery A secondary query class using the current class as primary query
     */
    public function useCollectorFriendRelatedByFriendIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCollectorFriendRelatedByFriendId($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CollectorFriendRelatedByFriendId', 'CollectorFriendQuery');
    }

    /**
     * Filter the query by a related Collection object
     *
     * @param     Collection $collection  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByCollection($collection, $comparison = null)
    {
        if ($collection instanceof Collection) {
            return $this
                ->addUsingAlias(CollectorPeer::ID, $collection->getCollectorId(), $comparison);
        } elseif ($collection instanceof PropelCollection) {
            return $this
                ->useCollectionQuery()
                ->filterByPrimaryKeys($collection->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCollection() only accepts arguments of type Collection or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Collection relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function joinCollection($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Collection');

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
            $this->addJoinObject($join, 'Collection');
        }

        return $this;
    }

    /**
     * Use the Collection relation Collection object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectionQuery A secondary query class using the current class as primary query
     */
    public function useCollectionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCollection($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Collection', 'CollectionQuery');
    }

    /**
     * Filter the query by a related Collectible object
     *
     * @param     Collectible $collectible  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByCollectible($collectible, $comparison = null)
    {
        if ($collectible instanceof Collectible) {
            return $this
                ->addUsingAlias(CollectorPeer::ID, $collectible->getCollectorId(), $comparison);
        } elseif ($collectible instanceof PropelCollection) {
            return $this
                ->useCollectibleQuery()
                ->filterByPrimaryKeys($collectible->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCollectible() only accepts arguments of type Collectible or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Collectible relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function joinCollectible($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Collectible');

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
            $this->addJoinObject($join, 'Collectible');
        }

        return $this;
    }

    /**
     * Use the Collectible relation Collectible object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectibleQuery A secondary query class using the current class as primary query
     */
    public function useCollectibleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCollectible($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Collectible', 'CollectibleQuery');
    }

    /**
     * Filter the query by a related CollectibleOffer object
     *
     * @param     CollectibleOffer $collectibleOffer  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByCollectibleOffer($collectibleOffer, $comparison = null)
    {
        if ($collectibleOffer instanceof CollectibleOffer) {
            return $this
                ->addUsingAlias(CollectorPeer::ID, $collectibleOffer->getCollectorId(), $comparison);
        } elseif ($collectibleOffer instanceof PropelCollection) {
            return $this
                ->useCollectibleOfferQuery()
                ->filterByPrimaryKeys($collectibleOffer->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCollectibleOffer() only accepts arguments of type CollectibleOffer or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CollectibleOffer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function joinCollectibleOffer($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CollectibleOffer');

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
            $this->addJoinObject($join, 'CollectibleOffer');
        }

        return $this;
    }

    /**
     * Use the CollectibleOffer relation CollectibleOffer object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectibleOfferQuery A secondary query class using the current class as primary query
     */
    public function useCollectibleOfferQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCollectibleOffer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CollectibleOffer', 'CollectibleOfferQuery');
    }

    /**
     * Filter the query by a related Comment object
     *
     * @param     Comment $comment  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByComment($comment, $comparison = null)
    {
        if ($comment instanceof Comment) {
            return $this
                ->addUsingAlias(CollectorPeer::ID, $comment->getCollectorId(), $comparison);
        } elseif ($comment instanceof PropelCollection) {
            return $this
                ->useCommentQuery()
                ->filterByPrimaryKeys($comment->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByComment() only accepts arguments of type Comment or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Comment relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function joinComment($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Comment');

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
            $this->addJoinObject($join, 'Comment');
        }

        return $this;
    }

    /**
     * Use the Comment relation Comment object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CommentQuery A secondary query class using the current class as primary query
     */
    public function useCommentQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinComment($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Comment', 'CommentQuery');
    }

    /**
     * Filter the query by a related PackageTransaction object
     *
     * @param     PackageTransaction $packageTransaction  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByPackageTransaction($packageTransaction, $comparison = null)
    {
        if ($packageTransaction instanceof PackageTransaction) {
            return $this
                ->addUsingAlias(CollectorPeer::ID, $packageTransaction->getCollectorId(), $comparison);
        } elseif ($packageTransaction instanceof PropelCollection) {
            return $this
                ->usePackageTransactionQuery()
                ->filterByPrimaryKeys($packageTransaction->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPackageTransaction() only accepts arguments of type PackageTransaction or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PackageTransaction relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function joinPackageTransaction($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PackageTransaction');

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
            $this->addJoinObject($join, 'PackageTransaction');
        }

        return $this;
    }

    /**
     * Use the PackageTransaction relation PackageTransaction object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    PackageTransactionQuery A secondary query class using the current class as primary query
     */
    public function usePackageTransactionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPackageTransaction($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PackageTransaction', 'PackageTransactionQuery');
    }

    /**
     * Filter the query by a related PromotionTransaction object
     *
     * @param     PromotionTransaction $promotionTransaction  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function filterByPromotionTransaction($promotionTransaction, $comparison = null)
    {
        if ($promotionTransaction instanceof PromotionTransaction) {
            return $this
                ->addUsingAlias(CollectorPeer::ID, $promotionTransaction->getCollectorId(), $comparison);
        } elseif ($promotionTransaction instanceof PropelCollection) {
            return $this
                ->usePromotionTransactionQuery()
                ->filterByPrimaryKeys($promotionTransaction->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPromotionTransaction() only accepts arguments of type PromotionTransaction or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PromotionTransaction relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function joinPromotionTransaction($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PromotionTransaction');

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
            $this->addJoinObject($join, 'PromotionTransaction');
        }

        return $this;
    }

    /**
     * Use the PromotionTransaction relation PromotionTransaction object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return    PromotionTransactionQuery A secondary query class using the current class as primary query
     */
    public function usePromotionTransactionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPromotionTransaction($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PromotionTransaction', 'PromotionTransactionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param     Collector $collector Object to remove from the list of results
     *
     * @return    CollectorQuery The current query, for fluid interface
     */
    public function prune($collector = null)
    {
        if ($collector) {
            $this->addUsingAlias(CollectorPeer::ID, $collector->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Code to execute before every SELECT statement
     *
     * @param     PropelPDO $con The connection object used by the query
     */
    protected function basePreSelect(PropelPDO $con)
    {
    // soft_delete behavior
    if (CollectorQuery::isSoftDeleteEnabled() && $this->localSoftDelete)
    {
      $this->addUsingAlias(CollectorPeer::DELETED_AT, null, Criteria::ISNULL);
    }
    else
    {
      CollectorPeer::enableSoftDelete();
    }

        return $this->preSelect($con);
    }

    /**
     * Code to execute before every DELETE statement
     *
     * @param     PropelPDO $con The connection object used by the query
     */
    protected function basePreDelete(PropelPDO $con)
    {
    // soft_delete behavior
    if (CollectorQuery::isSoftDeleteEnabled() && $this->localSoftDelete)
    {
      return $this->softDelete($con);
    }
    else
    {
      return $this->hasWhereClause() ? $this->forceDelete($con) : $this->forceDeleteAll($con);
    }

        return $this->preDelete($con);
    }

  // soft_delete behavior
  
  /**
   * Temporarily disable the filter on deleted rows
   * Valid only for the current query
   *
   * @see CollectorQuery::disableSoftDelete() to disable the filter for more than one query
   *
   * @return CollectorQuery The current query, for fluid interface
   */
  public function includeDeleted()
  {
    $this->localSoftDelete = false;
    return $this;
  }
  
  /**
   * Soft delete the selected rows
   *
   * @param      PropelPDO $con an optional connection object
   *
   * @return    int Number of updated rows
   */
  public function softDelete(PropelPDO $con = null)
  {
    return $this->update(array('DeletedAt' => time()), $con);
  }
  
  /**
   * Bypass the soft_delete behavior and force a hard delete of the selected rows
   *
   * @param      PropelPDO $con an optional connection object
   *
   * @return    int Number of deleted rows
   */
  public function forceDelete(PropelPDO $con = null)
  {
    return CollectorPeer::doForceDelete($this, $con);
  }
  
  /**
   * Bypass the soft_delete behavior and force a hard delete of all the rows
   *
   * @param      PropelPDO $con an optional connection object
   *
   * @return    int Number of deleted rows
   */
  public function forceDeleteAll(PropelPDO $con = null)
  {
    return CollectorPeer::doForceDeleteAll($con);}
  
  /**
   * Undelete selected rows
   *
   * @param      PropelPDO $con an optional connection object
   *
   * @return    int The number of rows affected by this update and any referring fk objects' save() operations.
   */
  public function unDelete(PropelPDO $con = null)
  {
    return $this->update(array('DeletedAt' => null), $con);
  }
  
  /**
   * Enable the soft_delete behavior for this model
   */
  public static function enableSoftDelete()
  {
    self::$softDelete = true;
  }
  
  /**
   * Disable the soft_delete behavior for this model
   */
  public static function disableSoftDelete()
  {
    self::$softDelete = false;
  }
  
  /**
   * Check the soft_delete behavior for this model
   *
   * @return boolean true if the soft_delete behavior is enabled
   */
  public static function isSoftDeleteEnabled()
  {
    return self::$softDelete;
  }

  // timestampable behavior
  
  /**
   * Filter by the latest updated
   *
   * @param      int $nbDays Maximum age of the latest update in days
   *
   * @return     CollectorQuery The current query, for fluid interface
   */
  public function recentlyUpdated($nbDays = 7)
  {
    return $this->addUsingAlias(CollectorPeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Filter by the latest created
   *
   * @param      int $nbDays Maximum age of in days
   *
   * @return     CollectorQuery The current query, for fluid interface
   */
  public function recentlyCreated($nbDays = 7)
  {
    return $this->addUsingAlias(CollectorPeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
  }
  
  /**
   * Order by update date desc
   *
   * @return     CollectorQuery The current query, for fluid interface
   */
  public function lastUpdatedFirst()
  {
    return $this->addDescendingOrderByColumn(CollectorPeer::UPDATED_AT);
  }
  
  /**
   * Order by update date asc
   *
   * @return     CollectorQuery The current query, for fluid interface
   */
  public function firstUpdatedFirst()
  {
    return $this->addAscendingOrderByColumn(CollectorPeer::UPDATED_AT);
  }
  
  /**
   * Order by create date desc
   *
   * @return     CollectorQuery The current query, for fluid interface
   */
  public function lastCreatedFirst()
  {
    return $this->addDescendingOrderByColumn(CollectorPeer::CREATED_AT);
  }
  
  /**
   * Order by create date asc
   *
   * @return     CollectorQuery The current query, for fluid interface
   */
  public function firstCreatedFirst()
  {
    return $this->addAscendingOrderByColumn(CollectorPeer::CREATED_AT);
  }

}