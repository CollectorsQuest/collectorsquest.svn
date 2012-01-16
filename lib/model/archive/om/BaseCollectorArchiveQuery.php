<?php


/**
 * Base class that represents a query for the 'collector_archive' table.
 *
 * 
 *
 * @method     CollectorArchiveQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CollectorArchiveQuery orderByGraphId($order = Criteria::ASC) Order by the graph_id column
 * @method     CollectorArchiveQuery orderByFacebookId($order = Criteria::ASC) Order by the facebook_id column
 * @method     CollectorArchiveQuery orderByUsername($order = Criteria::ASC) Order by the username column
 * @method     CollectorArchiveQuery orderByDisplayName($order = Criteria::ASC) Order by the display_name column
 * @method     CollectorArchiveQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     CollectorArchiveQuery orderBySha1Password($order = Criteria::ASC) Order by the sha1_password column
 * @method     CollectorArchiveQuery orderBySalt($order = Criteria::ASC) Order by the salt column
 * @method     CollectorArchiveQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     CollectorArchiveQuery orderByUserType($order = Criteria::ASC) Order by the user_type column
 * @method     CollectorArchiveQuery orderByItemsAllowed($order = Criteria::ASC) Order by the items_allowed column
 * @method     CollectorArchiveQuery orderByWhatYouCollect($order = Criteria::ASC) Order by the what_you_collect column
 * @method     CollectorArchiveQuery orderByPurchasesPerYear($order = Criteria::ASC) Order by the purchases_per_year column
 * @method     CollectorArchiveQuery orderByWhatYouSell($order = Criteria::ASC) Order by the what_you_sell column
 * @method     CollectorArchiveQuery orderByAnnuallySpend($order = Criteria::ASC) Order by the annually_spend column
 * @method     CollectorArchiveQuery orderByMostExpensiveItem($order = Criteria::ASC) Order by the most_expensive_item column
 * @method     CollectorArchiveQuery orderByCompany($order = Criteria::ASC) Order by the company column
 * @method     CollectorArchiveQuery orderByLocale($order = Criteria::ASC) Order by the locale column
 * @method     CollectorArchiveQuery orderByScore($order = Criteria::ASC) Order by the score column
 * @method     CollectorArchiveQuery orderBySpamScore($order = Criteria::ASC) Order by the spam_score column
 * @method     CollectorArchiveQuery orderByIsSpam($order = Criteria::ASC) Order by the is_spam column
 * @method     CollectorArchiveQuery orderByIsPublic($order = Criteria::ASC) Order by the is_public column
 * @method     CollectorArchiveQuery orderBySessionId($order = Criteria::ASC) Order by the session_id column
 * @method     CollectorArchiveQuery orderByLastSeenAt($order = Criteria::ASC) Order by the last_seen_at column
 * @method     CollectorArchiveQuery orderByEblob($order = Criteria::ASC) Order by the eblob column
 * @method     CollectorArchiveQuery orderByDeletedAt($order = Criteria::ASC) Order by the deleted_at column
 * @method     CollectorArchiveQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     CollectorArchiveQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     CollectorArchiveQuery orderByArchivedAt($order = Criteria::ASC) Order by the archived_at column
 *
 * @method     CollectorArchiveQuery groupById() Group by the id column
 * @method     CollectorArchiveQuery groupByGraphId() Group by the graph_id column
 * @method     CollectorArchiveQuery groupByFacebookId() Group by the facebook_id column
 * @method     CollectorArchiveQuery groupByUsername() Group by the username column
 * @method     CollectorArchiveQuery groupByDisplayName() Group by the display_name column
 * @method     CollectorArchiveQuery groupBySlug() Group by the slug column
 * @method     CollectorArchiveQuery groupBySha1Password() Group by the sha1_password column
 * @method     CollectorArchiveQuery groupBySalt() Group by the salt column
 * @method     CollectorArchiveQuery groupByEmail() Group by the email column
 * @method     CollectorArchiveQuery groupByUserType() Group by the user_type column
 * @method     CollectorArchiveQuery groupByItemsAllowed() Group by the items_allowed column
 * @method     CollectorArchiveQuery groupByWhatYouCollect() Group by the what_you_collect column
 * @method     CollectorArchiveQuery groupByPurchasesPerYear() Group by the purchases_per_year column
 * @method     CollectorArchiveQuery groupByWhatYouSell() Group by the what_you_sell column
 * @method     CollectorArchiveQuery groupByAnnuallySpend() Group by the annually_spend column
 * @method     CollectorArchiveQuery groupByMostExpensiveItem() Group by the most_expensive_item column
 * @method     CollectorArchiveQuery groupByCompany() Group by the company column
 * @method     CollectorArchiveQuery groupByLocale() Group by the locale column
 * @method     CollectorArchiveQuery groupByScore() Group by the score column
 * @method     CollectorArchiveQuery groupBySpamScore() Group by the spam_score column
 * @method     CollectorArchiveQuery groupByIsSpam() Group by the is_spam column
 * @method     CollectorArchiveQuery groupByIsPublic() Group by the is_public column
 * @method     CollectorArchiveQuery groupBySessionId() Group by the session_id column
 * @method     CollectorArchiveQuery groupByLastSeenAt() Group by the last_seen_at column
 * @method     CollectorArchiveQuery groupByEblob() Group by the eblob column
 * @method     CollectorArchiveQuery groupByDeletedAt() Group by the deleted_at column
 * @method     CollectorArchiveQuery groupByUpdatedAt() Group by the updated_at column
 * @method     CollectorArchiveQuery groupByCreatedAt() Group by the created_at column
 * @method     CollectorArchiveQuery groupByArchivedAt() Group by the archived_at column
 *
 * @method     CollectorArchiveQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CollectorArchiveQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CollectorArchiveQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CollectorArchive findOne(PropelPDO $con = null) Return the first CollectorArchive matching the query
 * @method     CollectorArchive findOneOrCreate(PropelPDO $con = null) Return the first CollectorArchive matching the query, or a new CollectorArchive object populated from the query conditions when no match is found
 *
 * @method     CollectorArchive findOneById(int $id) Return the first CollectorArchive filtered by the id column
 * @method     CollectorArchive findOneByGraphId(int $graph_id) Return the first CollectorArchive filtered by the graph_id column
 * @method     CollectorArchive findOneByFacebookId(string $facebook_id) Return the first CollectorArchive filtered by the facebook_id column
 * @method     CollectorArchive findOneByUsername(string $username) Return the first CollectorArchive filtered by the username column
 * @method     CollectorArchive findOneByDisplayName(string $display_name) Return the first CollectorArchive filtered by the display_name column
 * @method     CollectorArchive findOneBySlug(string $slug) Return the first CollectorArchive filtered by the slug column
 * @method     CollectorArchive findOneBySha1Password(string $sha1_password) Return the first CollectorArchive filtered by the sha1_password column
 * @method     CollectorArchive findOneBySalt(string $salt) Return the first CollectorArchive filtered by the salt column
 * @method     CollectorArchive findOneByEmail(string $email) Return the first CollectorArchive filtered by the email column
 * @method     CollectorArchive findOneByUserType(string $user_type) Return the first CollectorArchive filtered by the user_type column
 * @method     CollectorArchive findOneByItemsAllowed(int $items_allowed) Return the first CollectorArchive filtered by the items_allowed column
 * @method     CollectorArchive findOneByWhatYouCollect(string $what_you_collect) Return the first CollectorArchive filtered by the what_you_collect column
 * @method     CollectorArchive findOneByPurchasesPerYear(int $purchases_per_year) Return the first CollectorArchive filtered by the purchases_per_year column
 * @method     CollectorArchive findOneByWhatYouSell(string $what_you_sell) Return the first CollectorArchive filtered by the what_you_sell column
 * @method     CollectorArchive findOneByAnnuallySpend(double $annually_spend) Return the first CollectorArchive filtered by the annually_spend column
 * @method     CollectorArchive findOneByMostExpensiveItem(double $most_expensive_item) Return the first CollectorArchive filtered by the most_expensive_item column
 * @method     CollectorArchive findOneByCompany(string $company) Return the first CollectorArchive filtered by the company column
 * @method     CollectorArchive findOneByLocale(string $locale) Return the first CollectorArchive filtered by the locale column
 * @method     CollectorArchive findOneByScore(int $score) Return the first CollectorArchive filtered by the score column
 * @method     CollectorArchive findOneBySpamScore(int $spam_score) Return the first CollectorArchive filtered by the spam_score column
 * @method     CollectorArchive findOneByIsSpam(boolean $is_spam) Return the first CollectorArchive filtered by the is_spam column
 * @method     CollectorArchive findOneByIsPublic(boolean $is_public) Return the first CollectorArchive filtered by the is_public column
 * @method     CollectorArchive findOneBySessionId(string $session_id) Return the first CollectorArchive filtered by the session_id column
 * @method     CollectorArchive findOneByLastSeenAt(string $last_seen_at) Return the first CollectorArchive filtered by the last_seen_at column
 * @method     CollectorArchive findOneByEblob(string $eblob) Return the first CollectorArchive filtered by the eblob column
 * @method     CollectorArchive findOneByDeletedAt(string $deleted_at) Return the first CollectorArchive filtered by the deleted_at column
 * @method     CollectorArchive findOneByUpdatedAt(string $updated_at) Return the first CollectorArchive filtered by the updated_at column
 * @method     CollectorArchive findOneByCreatedAt(string $created_at) Return the first CollectorArchive filtered by the created_at column
 * @method     CollectorArchive findOneByArchivedAt(string $archived_at) Return the first CollectorArchive filtered by the archived_at column
 *
 * @method     array findById(int $id) Return CollectorArchive objects filtered by the id column
 * @method     array findByGraphId(int $graph_id) Return CollectorArchive objects filtered by the graph_id column
 * @method     array findByFacebookId(string $facebook_id) Return CollectorArchive objects filtered by the facebook_id column
 * @method     array findByUsername(string $username) Return CollectorArchive objects filtered by the username column
 * @method     array findByDisplayName(string $display_name) Return CollectorArchive objects filtered by the display_name column
 * @method     array findBySlug(string $slug) Return CollectorArchive objects filtered by the slug column
 * @method     array findBySha1Password(string $sha1_password) Return CollectorArchive objects filtered by the sha1_password column
 * @method     array findBySalt(string $salt) Return CollectorArchive objects filtered by the salt column
 * @method     array findByEmail(string $email) Return CollectorArchive objects filtered by the email column
 * @method     array findByUserType(string $user_type) Return CollectorArchive objects filtered by the user_type column
 * @method     array findByItemsAllowed(int $items_allowed) Return CollectorArchive objects filtered by the items_allowed column
 * @method     array findByWhatYouCollect(string $what_you_collect) Return CollectorArchive objects filtered by the what_you_collect column
 * @method     array findByPurchasesPerYear(int $purchases_per_year) Return CollectorArchive objects filtered by the purchases_per_year column
 * @method     array findByWhatYouSell(string $what_you_sell) Return CollectorArchive objects filtered by the what_you_sell column
 * @method     array findByAnnuallySpend(double $annually_spend) Return CollectorArchive objects filtered by the annually_spend column
 * @method     array findByMostExpensiveItem(double $most_expensive_item) Return CollectorArchive objects filtered by the most_expensive_item column
 * @method     array findByCompany(string $company) Return CollectorArchive objects filtered by the company column
 * @method     array findByLocale(string $locale) Return CollectorArchive objects filtered by the locale column
 * @method     array findByScore(int $score) Return CollectorArchive objects filtered by the score column
 * @method     array findBySpamScore(int $spam_score) Return CollectorArchive objects filtered by the spam_score column
 * @method     array findByIsSpam(boolean $is_spam) Return CollectorArchive objects filtered by the is_spam column
 * @method     array findByIsPublic(boolean $is_public) Return CollectorArchive objects filtered by the is_public column
 * @method     array findBySessionId(string $session_id) Return CollectorArchive objects filtered by the session_id column
 * @method     array findByLastSeenAt(string $last_seen_at) Return CollectorArchive objects filtered by the last_seen_at column
 * @method     array findByEblob(string $eblob) Return CollectorArchive objects filtered by the eblob column
 * @method     array findByDeletedAt(string $deleted_at) Return CollectorArchive objects filtered by the deleted_at column
 * @method     array findByUpdatedAt(string $updated_at) Return CollectorArchive objects filtered by the updated_at column
 * @method     array findByCreatedAt(string $created_at) Return CollectorArchive objects filtered by the created_at column
 * @method     array findByArchivedAt(string $archived_at) Return CollectorArchive objects filtered by the archived_at column
 *
 * @package    propel.generator.lib.model.archive.om
 */
abstract class BaseCollectorArchiveQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseCollectorArchiveQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'archive', $modelName = 'CollectorArchive', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CollectorArchiveQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    CollectorArchiveQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CollectorArchiveQuery) {
            return $criteria;
        }
        $query = new CollectorArchiveQuery();
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
     * @return    CollectorArchive|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = CollectorArchivePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(CollectorArchivePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    CollectorArchiveQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(CollectorArchivePeer::ID, $keys, Criteria::IN);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(CollectorArchivePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the graph_id column
     *
     * Example usage:
     * <code>
     * $query->filterByGraphId(1234); // WHERE graph_id = 1234
     * $query->filterByGraphId(array(12, 34)); // WHERE graph_id IN (12, 34)
     * $query->filterByGraphId(array('min' => 12)); // WHERE graph_id > 12
     * </code>
     *
     * @param     mixed $graphId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorArchiveQuery The current query, for fluid interface
     */
    public function filterByGraphId($graphId = null, $comparison = null)
    {
        if (is_array($graphId)) {
            $useMinMax = false;
            if (isset($graphId['min'])) {
                $this->addUsingAlias(CollectorArchivePeer::GRAPH_ID, $graphId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($graphId['max'])) {
                $this->addUsingAlias(CollectorArchivePeer::GRAPH_ID, $graphId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorArchivePeer::GRAPH_ID, $graphId, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectorArchivePeer::FACEBOOK_ID, $facebookId, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectorArchivePeer::USERNAME, $username, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectorArchivePeer::DISPLAY_NAME, $displayName, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectorArchivePeer::SLUG, $slug, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectorArchivePeer::SHA1_PASSWORD, $sha1Password, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectorArchivePeer::SALT, $salt, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectorArchivePeer::EMAIL, $email, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectorArchivePeer::USER_TYPE, $userType, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
     */
    public function filterByItemsAllowed($itemsAllowed = null, $comparison = null)
    {
        if (is_array($itemsAllowed)) {
            $useMinMax = false;
            if (isset($itemsAllowed['min'])) {
                $this->addUsingAlias(CollectorArchivePeer::ITEMS_ALLOWED, $itemsAllowed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemsAllowed['max'])) {
                $this->addUsingAlias(CollectorArchivePeer::ITEMS_ALLOWED, $itemsAllowed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorArchivePeer::ITEMS_ALLOWED, $itemsAllowed, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectorArchivePeer::WHAT_YOU_COLLECT, $whatYouCollect, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
     */
    public function filterByPurchasesPerYear($purchasesPerYear = null, $comparison = null)
    {
        if (is_array($purchasesPerYear)) {
            $useMinMax = false;
            if (isset($purchasesPerYear['min'])) {
                $this->addUsingAlias(CollectorArchivePeer::PURCHASES_PER_YEAR, $purchasesPerYear['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($purchasesPerYear['max'])) {
                $this->addUsingAlias(CollectorArchivePeer::PURCHASES_PER_YEAR, $purchasesPerYear['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorArchivePeer::PURCHASES_PER_YEAR, $purchasesPerYear, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectorArchivePeer::WHAT_YOU_SELL, $whatYouSell, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
     */
    public function filterByAnnuallySpend($annuallySpend = null, $comparison = null)
    {
        if (is_array($annuallySpend)) {
            $useMinMax = false;
            if (isset($annuallySpend['min'])) {
                $this->addUsingAlias(CollectorArchivePeer::ANNUALLY_SPEND, $annuallySpend['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($annuallySpend['max'])) {
                $this->addUsingAlias(CollectorArchivePeer::ANNUALLY_SPEND, $annuallySpend['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorArchivePeer::ANNUALLY_SPEND, $annuallySpend, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
     */
    public function filterByMostExpensiveItem($mostExpensiveItem = null, $comparison = null)
    {
        if (is_array($mostExpensiveItem)) {
            $useMinMax = false;
            if (isset($mostExpensiveItem['min'])) {
                $this->addUsingAlias(CollectorArchivePeer::MOST_EXPENSIVE_ITEM, $mostExpensiveItem['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mostExpensiveItem['max'])) {
                $this->addUsingAlias(CollectorArchivePeer::MOST_EXPENSIVE_ITEM, $mostExpensiveItem['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorArchivePeer::MOST_EXPENSIVE_ITEM, $mostExpensiveItem, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectorArchivePeer::COMPANY, $company, $comparison);
    }

    /**
     * Filter the query on the locale column
     *
     * Example usage:
     * <code>
     * $query->filterByLocale('fooValue');   // WHERE locale = 'fooValue'
     * $query->filterByLocale('%fooValue%'); // WHERE locale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $locale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorArchiveQuery The current query, for fluid interface
     */
    public function filterByLocale($locale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($locale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $locale)) {
                $locale = str_replace('*', '%', $locale);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorArchivePeer::LOCALE, $locale, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
     */
    public function filterByScore($score = null, $comparison = null)
    {
        if (is_array($score)) {
            $useMinMax = false;
            if (isset($score['min'])) {
                $this->addUsingAlias(CollectorArchivePeer::SCORE, $score['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($score['max'])) {
                $this->addUsingAlias(CollectorArchivePeer::SCORE, $score['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorArchivePeer::SCORE, $score, $comparison);
    }

    /**
     * Filter the query on the spam_score column
     *
     * Example usage:
     * <code>
     * $query->filterBySpamScore(1234); // WHERE spam_score = 1234
     * $query->filterBySpamScore(array(12, 34)); // WHERE spam_score IN (12, 34)
     * $query->filterBySpamScore(array('min' => 12)); // WHERE spam_score > 12
     * </code>
     *
     * @param     mixed $spamScore The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorArchiveQuery The current query, for fluid interface
     */
    public function filterBySpamScore($spamScore = null, $comparison = null)
    {
        if (is_array($spamScore)) {
            $useMinMax = false;
            if (isset($spamScore['min'])) {
                $this->addUsingAlias(CollectorArchivePeer::SPAM_SCORE, $spamScore['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spamScore['max'])) {
                $this->addUsingAlias(CollectorArchivePeer::SPAM_SCORE, $spamScore['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorArchivePeer::SPAM_SCORE, $spamScore, $comparison);
    }

    /**
     * Filter the query on the is_spam column
     *
     * Example usage:
     * <code>
     * $query->filterByIsSpam(true); // WHERE is_spam = true
     * $query->filterByIsSpam('yes'); // WHERE is_spam = true
     * </code>
     *
     * @param     boolean|string $isSpam The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorArchiveQuery The current query, for fluid interface
     */
    public function filterByIsSpam($isSpam = null, $comparison = null)
    {
        if (is_string($isSpam)) {
            $is_spam = in_array(strtolower($isSpam), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectorArchivePeer::IS_SPAM, $isSpam, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
     */
    public function filterByIsPublic($isPublic = null, $comparison = null)
    {
        if (is_string($isPublic)) {
            $is_public = in_array(strtolower($isPublic), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(CollectorArchivePeer::IS_PUBLIC, $isPublic, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
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
        return $this->addUsingAlias(CollectorArchivePeer::SESSION_ID, $sessionId, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
     */
    public function filterByLastSeenAt($lastSeenAt = null, $comparison = null)
    {
        if (is_array($lastSeenAt)) {
            $useMinMax = false;
            if (isset($lastSeenAt['min'])) {
                $this->addUsingAlias(CollectorArchivePeer::LAST_SEEN_AT, $lastSeenAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastSeenAt['max'])) {
                $this->addUsingAlias(CollectorArchivePeer::LAST_SEEN_AT, $lastSeenAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorArchivePeer::LAST_SEEN_AT, $lastSeenAt, $comparison);
    }

    /**
     * Filter the query on the eblob column
     *
     * Example usage:
     * <code>
     * $query->filterByEblob('fooValue');   // WHERE eblob = 'fooValue'
     * $query->filterByEblob('%fooValue%'); // WHERE eblob LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eblob The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    CollectorArchiveQuery The current query, for fluid interface
     */
    public function filterByEblob($eblob = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eblob)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eblob)) {
                $eblob = str_replace('*', '%', $eblob);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(CollectorArchivePeer::EBLOB, $eblob, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
     */
    public function filterByDeletedAt($deletedAt = null, $comparison = null)
    {
        if (is_array($deletedAt)) {
            $useMinMax = false;
            if (isset($deletedAt['min'])) {
                $this->addUsingAlias(CollectorArchivePeer::DELETED_AT, $deletedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletedAt['max'])) {
                $this->addUsingAlias(CollectorArchivePeer::DELETED_AT, $deletedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorArchivePeer::DELETED_AT, $deletedAt, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(CollectorArchivePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(CollectorArchivePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorArchivePeer::UPDATED_AT, $updatedAt, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(CollectorArchivePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(CollectorArchivePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorArchivePeer::CREATED_AT, $createdAt, $comparison);
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
     * @return    CollectorArchiveQuery The current query, for fluid interface
     */
    public function filterByArchivedAt($archivedAt = null, $comparison = null)
    {
        if (is_array($archivedAt)) {
            $useMinMax = false;
            if (isset($archivedAt['min'])) {
                $this->addUsingAlias(CollectorArchivePeer::ARCHIVED_AT, $archivedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($archivedAt['max'])) {
                $this->addUsingAlias(CollectorArchivePeer::ARCHIVED_AT, $archivedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(CollectorArchivePeer::ARCHIVED_AT, $archivedAt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     CollectorArchive $collectorArchive Object to remove from the list of results
     *
     * @return    CollectorArchiveQuery The current query, for fluid interface
     */
    public function prune($collectorArchive = null)
    {
        if ($collectorArchive) {
            $this->addUsingAlias(CollectorArchivePeer::ID, $collectorArchive->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}