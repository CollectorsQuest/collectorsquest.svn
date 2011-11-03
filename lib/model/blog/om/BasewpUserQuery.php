<?php


/**
 * Base class that represents a query for the 'wp_users' table.
 *
 * 
 *
 * @method     wpUserQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     wpUserQuery orderByUserLogin($order = Criteria::ASC) Order by the user_login column
 * @method     wpUserQuery orderByUserPass($order = Criteria::ASC) Order by the user_pass column
 * @method     wpUserQuery orderByUserNicename($order = Criteria::ASC) Order by the user_nicename column
 * @method     wpUserQuery orderByUserEmail($order = Criteria::ASC) Order by the user_email column
 * @method     wpUserQuery orderByUserUrl($order = Criteria::ASC) Order by the user_url column
 * @method     wpUserQuery orderByUserRegistered($order = Criteria::ASC) Order by the user_registered column
 * @method     wpUserQuery orderByUserActivationKey($order = Criteria::ASC) Order by the user_activation_key column
 * @method     wpUserQuery orderByUserStatus($order = Criteria::ASC) Order by the user_status column
 * @method     wpUserQuery orderByDisplayName($order = Criteria::ASC) Order by the display_name column
 *
 * @method     wpUserQuery groupById() Group by the id column
 * @method     wpUserQuery groupByUserLogin() Group by the user_login column
 * @method     wpUserQuery groupByUserPass() Group by the user_pass column
 * @method     wpUserQuery groupByUserNicename() Group by the user_nicename column
 * @method     wpUserQuery groupByUserEmail() Group by the user_email column
 * @method     wpUserQuery groupByUserUrl() Group by the user_url column
 * @method     wpUserQuery groupByUserRegistered() Group by the user_registered column
 * @method     wpUserQuery groupByUserActivationKey() Group by the user_activation_key column
 * @method     wpUserQuery groupByUserStatus() Group by the user_status column
 * @method     wpUserQuery groupByDisplayName() Group by the display_name column
 *
 * @method     wpUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     wpUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     wpUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     wpUserQuery leftJoinwpPost($relationAlias = null) Adds a LEFT JOIN clause to the query using the wpPost relation
 * @method     wpUserQuery rightJoinwpPost($relationAlias = null) Adds a RIGHT JOIN clause to the query using the wpPost relation
 * @method     wpUserQuery innerJoinwpPost($relationAlias = null) Adds a INNER JOIN clause to the query using the wpPost relation
 *
 * @method     wpUser findOne(PropelPDO $con = null) Return the first wpUser matching the query
 * @method     wpUser findOneOrCreate(PropelPDO $con = null) Return the first wpUser matching the query, or a new wpUser object populated from the query conditions when no match is found
 *
 * @method     wpUser findOneById(int $id) Return the first wpUser filtered by the id column
 * @method     wpUser findOneByUserLogin(string $user_login) Return the first wpUser filtered by the user_login column
 * @method     wpUser findOneByUserPass(string $user_pass) Return the first wpUser filtered by the user_pass column
 * @method     wpUser findOneByUserNicename(string $user_nicename) Return the first wpUser filtered by the user_nicename column
 * @method     wpUser findOneByUserEmail(string $user_email) Return the first wpUser filtered by the user_email column
 * @method     wpUser findOneByUserUrl(string $user_url) Return the first wpUser filtered by the user_url column
 * @method     wpUser findOneByUserRegistered(string $user_registered) Return the first wpUser filtered by the user_registered column
 * @method     wpUser findOneByUserActivationKey(string $user_activation_key) Return the first wpUser filtered by the user_activation_key column
 * @method     wpUser findOneByUserStatus(int $user_status) Return the first wpUser filtered by the user_status column
 * @method     wpUser findOneByDisplayName(string $display_name) Return the first wpUser filtered by the display_name column
 *
 * @method     array findById(int $id) Return wpUser objects filtered by the id column
 * @method     array findByUserLogin(string $user_login) Return wpUser objects filtered by the user_login column
 * @method     array findByUserPass(string $user_pass) Return wpUser objects filtered by the user_pass column
 * @method     array findByUserNicename(string $user_nicename) Return wpUser objects filtered by the user_nicename column
 * @method     array findByUserEmail(string $user_email) Return wpUser objects filtered by the user_email column
 * @method     array findByUserUrl(string $user_url) Return wpUser objects filtered by the user_url column
 * @method     array findByUserRegistered(string $user_registered) Return wpUser objects filtered by the user_registered column
 * @method     array findByUserActivationKey(string $user_activation_key) Return wpUser objects filtered by the user_activation_key column
 * @method     array findByUserStatus(int $user_status) Return wpUser objects filtered by the user_status column
 * @method     array findByDisplayName(string $display_name) Return wpUser objects filtered by the display_name column
 *
 * @package    propel.generator.lib.model.blog.om
 */
abstract class BasewpUserQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BasewpUserQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'blog', $modelName = 'wpUser', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new wpUserQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    wpUserQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof wpUserQuery)
    {
      return $criteria;
    }
    $query = new wpUserQuery();
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
   * @return    wpUser|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = wpUserPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @return    wpUserQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(wpUserPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    wpUserQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(wpUserPeer::ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the id column
   * 
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpUserQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(wpUserPeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the user_login column
   * 
   * @param     string $userLogin The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpUserQuery The current query, for fluid interface
   */
  public function filterByUserLogin($userLogin = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($userLogin))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $userLogin))
      {
        $userLogin = str_replace('*', '%', $userLogin);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpUserPeer::USER_LOGIN, $userLogin, $comparison);
  }

  /**
   * Filter the query on the user_pass column
   * 
   * @param     string $userPass The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpUserQuery The current query, for fluid interface
   */
  public function filterByUserPass($userPass = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($userPass))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $userPass))
      {
        $userPass = str_replace('*', '%', $userPass);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpUserPeer::USER_PASS, $userPass, $comparison);
  }

  /**
   * Filter the query on the user_nicename column
   * 
   * @param     string $userNicename The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpUserQuery The current query, for fluid interface
   */
  public function filterByUserNicename($userNicename = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($userNicename))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $userNicename))
      {
        $userNicename = str_replace('*', '%', $userNicename);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpUserPeer::USER_NICENAME, $userNicename, $comparison);
  }

  /**
   * Filter the query on the user_email column
   * 
   * @param     string $userEmail The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpUserQuery The current query, for fluid interface
   */
  public function filterByUserEmail($userEmail = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($userEmail))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $userEmail))
      {
        $userEmail = str_replace('*', '%', $userEmail);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpUserPeer::USER_EMAIL, $userEmail, $comparison);
  }

  /**
   * Filter the query on the user_url column
   * 
   * @param     string $userUrl The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpUserQuery The current query, for fluid interface
   */
  public function filterByUserUrl($userUrl = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($userUrl))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $userUrl))
      {
        $userUrl = str_replace('*', '%', $userUrl);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpUserPeer::USER_URL, $userUrl, $comparison);
  }

  /**
   * Filter the query on the user_registered column
   * 
   * @param     string|array $userRegistered The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpUserQuery The current query, for fluid interface
   */
  public function filterByUserRegistered($userRegistered = null, $comparison = null)
  {
    if (is_array($userRegistered))
    {
      $useMinMax = false;
      if (isset($userRegistered['min']))
      {
        $this->addUsingAlias(wpUserPeer::USER_REGISTERED, $userRegistered['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($userRegistered['max']))
      {
        $this->addUsingAlias(wpUserPeer::USER_REGISTERED, $userRegistered['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpUserPeer::USER_REGISTERED, $userRegistered, $comparison);
  }

  /**
   * Filter the query on the user_activation_key column
   * 
   * @param     string $userActivationKey The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpUserQuery The current query, for fluid interface
   */
  public function filterByUserActivationKey($userActivationKey = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($userActivationKey))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $userActivationKey))
      {
        $userActivationKey = str_replace('*', '%', $userActivationKey);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpUserPeer::USER_ACTIVATION_KEY, $userActivationKey, $comparison);
  }

  /**
   * Filter the query on the user_status column
   * 
   * @param     int|array $userStatus The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpUserQuery The current query, for fluid interface
   */
  public function filterByUserStatus($userStatus = null, $comparison = null)
  {
    if (is_array($userStatus))
    {
      $useMinMax = false;
      if (isset($userStatus['min']))
      {
        $this->addUsingAlias(wpUserPeer::USER_STATUS, $userStatus['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($userStatus['max']))
      {
        $this->addUsingAlias(wpUserPeer::USER_STATUS, $userStatus['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(wpUserPeer::USER_STATUS, $userStatus, $comparison);
  }

  /**
   * Filter the query on the display_name column
   * 
   * @param     string $displayName The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpUserQuery The current query, for fluid interface
   */
  public function filterByDisplayName($displayName = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($displayName))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $displayName))
      {
        $displayName = str_replace('*', '%', $displayName);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(wpUserPeer::DISPLAY_NAME, $displayName, $comparison);
  }

  /**
   * Filter the query by a related wpPost object
   *
   * @param     wpPost $wpPost  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    wpUserQuery The current query, for fluid interface
   */
  public function filterBywpPost($wpPost, $comparison = null)
  {
    return $this
      ->addUsingAlias(wpUserPeer::ID, $wpPost->getPostAuthor(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the wpPost relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    wpUserQuery The current query, for fluid interface
   */
  public function joinwpPost($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('wpPost');
    
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
      $this->addJoinObject($join, 'wpPost');
    }
    
    return $this;
  }

  /**
   * Use the wpPost relation wpPost object
   *
   * @see       useQuery()
   * 
   * @param     string $relationAlias optional alias for the relation,
   *                                   to be used as main alias in the secondary query
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    wpPostQuery A secondary query class using the current class as primary query
   */
  public function usewpPostQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    return $this
      ->joinwpPost($relationAlias, $joinType)
      ->useQuery($relationAlias ? $relationAlias : 'wpPost', 'wpPostQuery');
  }

  /**
   * Exclude object from result
   *
   * @param     wpUser $wpUser Object to remove from the list of results
   *
   * @return    wpUserQuery The current query, for fluid interface
   */
  public function prune($wpUser = null)
  {
    if ($wpUser)
    {
      $this->addUsingAlias(wpUserPeer::ID, $wpUser->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

}
