<?php


/**
 * Base class that represents a query for the 'private_message' table.
 *
 * 
 *
 * @method     PrivateMessageQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PrivateMessageQuery orderByThread($order = Criteria::ASC) Order by the thread column
 * @method     PrivateMessageQuery orderBySender($order = Criteria::ASC) Order by the sender column
 * @method     PrivateMessageQuery orderByReceiver($order = Criteria::ASC) Order by the receiver column
 * @method     PrivateMessageQuery orderBySubject($order = Criteria::ASC) Order by the subject column
 * @method     PrivateMessageQuery orderByBody($order = Criteria::ASC) Order by the body column
 * @method     PrivateMessageQuery orderByIsRich($order = Criteria::ASC) Order by the is_rich column
 * @method     PrivateMessageQuery orderByIsRead($order = Criteria::ASC) Order by the is_read column
 * @method     PrivateMessageQuery orderByIsReplied($order = Criteria::ASC) Order by the is_replied column
 * @method     PrivateMessageQuery orderByIsForwarded($order = Criteria::ASC) Order by the is_forwarded column
 * @method     PrivateMessageQuery orderByIsMarked($order = Criteria::ASC) Order by the is_marked column
 * @method     PrivateMessageQuery orderByIsDeleted($order = Criteria::ASC) Order by the is_deleted column
 * @method     PrivateMessageQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     PrivateMessageQuery groupById() Group by the id column
 * @method     PrivateMessageQuery groupByThread() Group by the thread column
 * @method     PrivateMessageQuery groupBySender() Group by the sender column
 * @method     PrivateMessageQuery groupByReceiver() Group by the receiver column
 * @method     PrivateMessageQuery groupBySubject() Group by the subject column
 * @method     PrivateMessageQuery groupByBody() Group by the body column
 * @method     PrivateMessageQuery groupByIsRich() Group by the is_rich column
 * @method     PrivateMessageQuery groupByIsRead() Group by the is_read column
 * @method     PrivateMessageQuery groupByIsReplied() Group by the is_replied column
 * @method     PrivateMessageQuery groupByIsForwarded() Group by the is_forwarded column
 * @method     PrivateMessageQuery groupByIsMarked() Group by the is_marked column
 * @method     PrivateMessageQuery groupByIsDeleted() Group by the is_deleted column
 * @method     PrivateMessageQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     PrivateMessageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PrivateMessageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PrivateMessageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PrivateMessage findOne(PropelPDO $con = null) Return the first PrivateMessage matching the query
 * @method     PrivateMessage findOneOrCreate(PropelPDO $con = null) Return the first PrivateMessage matching the query, or a new PrivateMessage object populated from the query conditions when no match is found
 *
 * @method     PrivateMessage findOneById(int $id) Return the first PrivateMessage filtered by the id column
 * @method     PrivateMessage findOneByThread(string $thread) Return the first PrivateMessage filtered by the thread column
 * @method     PrivateMessage findOneBySender(int $sender) Return the first PrivateMessage filtered by the sender column
 * @method     PrivateMessage findOneByReceiver(int $receiver) Return the first PrivateMessage filtered by the receiver column
 * @method     PrivateMessage findOneBySubject(string $subject) Return the first PrivateMessage filtered by the subject column
 * @method     PrivateMessage findOneByBody(string $body) Return the first PrivateMessage filtered by the body column
 * @method     PrivateMessage findOneByIsRich(boolean $is_rich) Return the first PrivateMessage filtered by the is_rich column
 * @method     PrivateMessage findOneByIsRead(boolean $is_read) Return the first PrivateMessage filtered by the is_read column
 * @method     PrivateMessage findOneByIsReplied(boolean $is_replied) Return the first PrivateMessage filtered by the is_replied column
 * @method     PrivateMessage findOneByIsForwarded(boolean $is_forwarded) Return the first PrivateMessage filtered by the is_forwarded column
 * @method     PrivateMessage findOneByIsMarked(boolean $is_marked) Return the first PrivateMessage filtered by the is_marked column
 * @method     PrivateMessage findOneByIsDeleted(boolean $is_deleted) Return the first PrivateMessage filtered by the is_deleted column
 * @method     PrivateMessage findOneByCreatedAt(string $created_at) Return the first PrivateMessage filtered by the created_at column
 *
 * @method     array findById(int $id) Return PrivateMessage objects filtered by the id column
 * @method     array findByThread(string $thread) Return PrivateMessage objects filtered by the thread column
 * @method     array findBySender(int $sender) Return PrivateMessage objects filtered by the sender column
 * @method     array findByReceiver(int $receiver) Return PrivateMessage objects filtered by the receiver column
 * @method     array findBySubject(string $subject) Return PrivateMessage objects filtered by the subject column
 * @method     array findByBody(string $body) Return PrivateMessage objects filtered by the body column
 * @method     array findByIsRich(boolean $is_rich) Return PrivateMessage objects filtered by the is_rich column
 * @method     array findByIsRead(boolean $is_read) Return PrivateMessage objects filtered by the is_read column
 * @method     array findByIsReplied(boolean $is_replied) Return PrivateMessage objects filtered by the is_replied column
 * @method     array findByIsForwarded(boolean $is_forwarded) Return PrivateMessage objects filtered by the is_forwarded column
 * @method     array findByIsMarked(boolean $is_marked) Return PrivateMessage objects filtered by the is_marked column
 * @method     array findByIsDeleted(boolean $is_deleted) Return PrivateMessage objects filtered by the is_deleted column
 * @method     array findByCreatedAt(string $created_at) Return PrivateMessage objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePrivateMessageQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BasePrivateMessageQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'PrivateMessage', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PrivateMessageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    PrivateMessageQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PrivateMessageQuery) {
            return $criteria;
        }
        $query = new PrivateMessageQuery();
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
     * @return    PrivateMessage|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = PrivateMessagePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    PrivateMessageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(PrivateMessagePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    PrivateMessageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(PrivateMessagePeer::ID, $keys, Criteria::IN);
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
     * @return    PrivateMessageQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(PrivateMessagePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the thread column
     *
     * Example usage:
     * <code>
     * $query->filterByThread('fooValue');   // WHERE thread = 'fooValue'
     * $query->filterByThread('%fooValue%'); // WHERE thread LIKE '%fooValue%'
     * </code>
     *
     * @param     string $thread The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PrivateMessageQuery The current query, for fluid interface
     */
    public function filterByThread($thread = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($thread)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $thread)) {
                $thread = str_replace('*', '%', $thread);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(PrivateMessagePeer::THREAD, $thread, $comparison);
    }

    /**
     * Filter the query on the sender column
     *
     * Example usage:
     * <code>
     * $query->filterBySender(1234); // WHERE sender = 1234
     * $query->filterBySender(array(12, 34)); // WHERE sender IN (12, 34)
     * $query->filterBySender(array('min' => 12)); // WHERE sender > 12
     * </code>
     *
     * @param     mixed $sender The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PrivateMessageQuery The current query, for fluid interface
     */
    public function filterBySender($sender = null, $comparison = null)
    {
        if (is_array($sender)) {
            $useMinMax = false;
            if (isset($sender['min'])) {
                $this->addUsingAlias(PrivateMessagePeer::SENDER, $sender['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sender['max'])) {
                $this->addUsingAlias(PrivateMessagePeer::SENDER, $sender['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(PrivateMessagePeer::SENDER, $sender, $comparison);
    }

    /**
     * Filter the query on the receiver column
     *
     * Example usage:
     * <code>
     * $query->filterByReceiver(1234); // WHERE receiver = 1234
     * $query->filterByReceiver(array(12, 34)); // WHERE receiver IN (12, 34)
     * $query->filterByReceiver(array('min' => 12)); // WHERE receiver > 12
     * </code>
     *
     * @param     mixed $receiver The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PrivateMessageQuery The current query, for fluid interface
     */
    public function filterByReceiver($receiver = null, $comparison = null)
    {
        if (is_array($receiver)) {
            $useMinMax = false;
            if (isset($receiver['min'])) {
                $this->addUsingAlias(PrivateMessagePeer::RECEIVER, $receiver['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($receiver['max'])) {
                $this->addUsingAlias(PrivateMessagePeer::RECEIVER, $receiver['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(PrivateMessagePeer::RECEIVER, $receiver, $comparison);
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
     * @return    PrivateMessageQuery The current query, for fluid interface
     */
    public function filterBySubject($subject = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($subject)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $subject)) {
                $subject = str_replace('*', '%', $subject);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(PrivateMessagePeer::SUBJECT, $subject, $comparison);
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
     * @return    PrivateMessageQuery The current query, for fluid interface
     */
    public function filterByBody($body = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($body)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $body)) {
                $body = str_replace('*', '%', $body);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(PrivateMessagePeer::BODY, $body, $comparison);
    }

    /**
     * Filter the query on the is_rich column
     *
     * Example usage:
     * <code>
     * $query->filterByIsRich(true); // WHERE is_rich = true
     * $query->filterByIsRich('yes'); // WHERE is_rich = true
     * </code>
     *
     * @param     boolean|string $isRich The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PrivateMessageQuery The current query, for fluid interface
     */
    public function filterByIsRich($isRich = null, $comparison = null)
    {
        if (is_string($isRich)) {
            $is_rich = in_array(strtolower($isRich), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(PrivateMessagePeer::IS_RICH, $isRich, $comparison);
    }

    /**
     * Filter the query on the is_read column
     *
     * Example usage:
     * <code>
     * $query->filterByIsRead(true); // WHERE is_read = true
     * $query->filterByIsRead('yes'); // WHERE is_read = true
     * </code>
     *
     * @param     boolean|string $isRead The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PrivateMessageQuery The current query, for fluid interface
     */
    public function filterByIsRead($isRead = null, $comparison = null)
    {
        if (is_string($isRead)) {
            $is_read = in_array(strtolower($isRead), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(PrivateMessagePeer::IS_READ, $isRead, $comparison);
    }

    /**
     * Filter the query on the is_replied column
     *
     * Example usage:
     * <code>
     * $query->filterByIsReplied(true); // WHERE is_replied = true
     * $query->filterByIsReplied('yes'); // WHERE is_replied = true
     * </code>
     *
     * @param     boolean|string $isReplied The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PrivateMessageQuery The current query, for fluid interface
     */
    public function filterByIsReplied($isReplied = null, $comparison = null)
    {
        if (is_string($isReplied)) {
            $is_replied = in_array(strtolower($isReplied), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(PrivateMessagePeer::IS_REPLIED, $isReplied, $comparison);
    }

    /**
     * Filter the query on the is_forwarded column
     *
     * Example usage:
     * <code>
     * $query->filterByIsForwarded(true); // WHERE is_forwarded = true
     * $query->filterByIsForwarded('yes'); // WHERE is_forwarded = true
     * </code>
     *
     * @param     boolean|string $isForwarded The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PrivateMessageQuery The current query, for fluid interface
     */
    public function filterByIsForwarded($isForwarded = null, $comparison = null)
    {
        if (is_string($isForwarded)) {
            $is_forwarded = in_array(strtolower($isForwarded), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(PrivateMessagePeer::IS_FORWARDED, $isForwarded, $comparison);
    }

    /**
     * Filter the query on the is_marked column
     *
     * Example usage:
     * <code>
     * $query->filterByIsMarked(true); // WHERE is_marked = true
     * $query->filterByIsMarked('yes'); // WHERE is_marked = true
     * </code>
     *
     * @param     boolean|string $isMarked The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PrivateMessageQuery The current query, for fluid interface
     */
    public function filterByIsMarked($isMarked = null, $comparison = null)
    {
        if (is_string($isMarked)) {
            $is_marked = in_array(strtolower($isMarked), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(PrivateMessagePeer::IS_MARKED, $isMarked, $comparison);
    }

    /**
     * Filter the query on the is_deleted column
     *
     * Example usage:
     * <code>
     * $query->filterByIsDeleted(true); // WHERE is_deleted = true
     * $query->filterByIsDeleted('yes'); // WHERE is_deleted = true
     * </code>
     *
     * @param     boolean|string $isDeleted The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    PrivateMessageQuery The current query, for fluid interface
     */
    public function filterByIsDeleted($isDeleted = null, $comparison = null)
    {
        if (is_string($isDeleted)) {
            $is_deleted = in_array(strtolower($isDeleted), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(PrivateMessagePeer::IS_DELETED, $isDeleted, $comparison);
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
     * @return    PrivateMessageQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(PrivateMessagePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(PrivateMessagePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(PrivateMessagePeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     PrivateMessage $privateMessage Object to remove from the list of results
     *
     * @return    PrivateMessageQuery The current query, for fluid interface
     */
    public function prune($privateMessage = null)
    {
        if ($privateMessage) {
            $this->addUsingAlias(PrivateMessagePeer::ID, $privateMessage->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}