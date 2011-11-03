<?php


/**
 * Base class that represents a query for the 'interview_question' table.
 *
 * 
 *
 * @method     InterviewQuestionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     InterviewQuestionQuery orderByCollectorInterviewId($order = Criteria::ASC) Order by the collector_interview_id column
 * @method     InterviewQuestionQuery orderByQuestion($order = Criteria::ASC) Order by the question column
 * @method     InterviewQuestionQuery orderByAnswer($order = Criteria::ASC) Order by the answer column
 * @method     InterviewQuestionQuery orderByPhoto($order = Criteria::ASC) Order by the photo column
 *
 * @method     InterviewQuestionQuery groupById() Group by the id column
 * @method     InterviewQuestionQuery groupByCollectorInterviewId() Group by the collector_interview_id column
 * @method     InterviewQuestionQuery groupByQuestion() Group by the question column
 * @method     InterviewQuestionQuery groupByAnswer() Group by the answer column
 * @method     InterviewQuestionQuery groupByPhoto() Group by the photo column
 *
 * @method     InterviewQuestionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     InterviewQuestionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     InterviewQuestionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     InterviewQuestionQuery leftJoinCollectorInterview($relationAlias = null) Adds a LEFT JOIN clause to the query using the CollectorInterview relation
 * @method     InterviewQuestionQuery rightJoinCollectorInterview($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CollectorInterview relation
 * @method     InterviewQuestionQuery innerJoinCollectorInterview($relationAlias = null) Adds a INNER JOIN clause to the query using the CollectorInterview relation
 *
 * @method     InterviewQuestion findOne(PropelPDO $con = null) Return the first InterviewQuestion matching the query
 * @method     InterviewQuestion findOneOrCreate(PropelPDO $con = null) Return the first InterviewQuestion matching the query, or a new InterviewQuestion object populated from the query conditions when no match is found
 *
 * @method     InterviewQuestion findOneById(int $id) Return the first InterviewQuestion filtered by the id column
 * @method     InterviewQuestion findOneByCollectorInterviewId(int $collector_interview_id) Return the first InterviewQuestion filtered by the collector_interview_id column
 * @method     InterviewQuestion findOneByQuestion(string $question) Return the first InterviewQuestion filtered by the question column
 * @method     InterviewQuestion findOneByAnswer(string $answer) Return the first InterviewQuestion filtered by the answer column
 * @method     InterviewQuestion findOneByPhoto(string $photo) Return the first InterviewQuestion filtered by the photo column
 *
 * @method     array findById(int $id) Return InterviewQuestion objects filtered by the id column
 * @method     array findByCollectorInterviewId(int $collector_interview_id) Return InterviewQuestion objects filtered by the collector_interview_id column
 * @method     array findByQuestion(string $question) Return InterviewQuestion objects filtered by the question column
 * @method     array findByAnswer(string $answer) Return InterviewQuestion objects filtered by the answer column
 * @method     array findByPhoto(string $photo) Return InterviewQuestion objects filtered by the photo column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseInterviewQuestionQuery extends ModelCriteria
{

  /**
   * Initializes internal state of BaseInterviewQuestionQuery object.
   *
   * @param     string $dbName The dabase name
   * @param     string $modelName The phpName of a model, e.g. 'Book'
   * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
   */
  public function __construct($dbName = 'propel', $modelName = 'InterviewQuestion', $modelAlias = null)
  {
    parent::__construct($dbName, $modelName, $modelAlias);
  }

  /**
   * Returns a new InterviewQuestionQuery object.
   *
   * @param     string $modelAlias The alias of a model in the query
   * @param     Criteria $criteria Optional Criteria to build the query from
   *
   * @return    InterviewQuestionQuery
   */
  public static function create($modelAlias = null, $criteria = null)
  {
    if ($criteria instanceof InterviewQuestionQuery)
    {
      return $criteria;
    }
    $query = new InterviewQuestionQuery();
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
   * @return    InterviewQuestion|array|mixed the result, formatted by the current formatter
   */
  public function findPk($key, $con = null)
  {
    if ((null !== ($obj = InterviewQuestionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter())
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
   * @return    InterviewQuestionQuery The current query, for fluid interface
   */
  public function filterByPrimaryKey($key)
  {
    return $this->addUsingAlias(InterviewQuestionPeer::ID, $key, Criteria::EQUAL);
  }

  /**
   * Filter the query by a list of primary keys
   *
   * @param     array $keys The list of primary key to use for the query
   *
   * @return    InterviewQuestionQuery The current query, for fluid interface
   */
  public function filterByPrimaryKeys($keys)
  {
    return $this->addUsingAlias(InterviewQuestionPeer::ID, $keys, Criteria::IN);
  }

  /**
   * Filter the query on the id column
   * 
   * @param     int|array $id The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    InterviewQuestionQuery The current query, for fluid interface
   */
  public function filterById($id = null, $comparison = null)
  {
    if (is_array($id) && null === $comparison)
    {
      $comparison = Criteria::IN;
    }
    return $this->addUsingAlias(InterviewQuestionPeer::ID, $id, $comparison);
  }

  /**
   * Filter the query on the collector_interview_id column
   * 
   * @param     int|array $collectorInterviewId The value to use as filter.
   *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    InterviewQuestionQuery The current query, for fluid interface
   */
  public function filterByCollectorInterviewId($collectorInterviewId = null, $comparison = null)
  {
    if (is_array($collectorInterviewId))
    {
      $useMinMax = false;
      if (isset($collectorInterviewId['min']))
      {
        $this->addUsingAlias(InterviewQuestionPeer::COLLECTOR_INTERVIEW_ID, $collectorInterviewId['min'], Criteria::GREATER_EQUAL);
        $useMinMax = true;
      }
      if (isset($collectorInterviewId['max']))
      {
        $this->addUsingAlias(InterviewQuestionPeer::COLLECTOR_INTERVIEW_ID, $collectorInterviewId['max'], Criteria::LESS_EQUAL);
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
    return $this->addUsingAlias(InterviewQuestionPeer::COLLECTOR_INTERVIEW_ID, $collectorInterviewId, $comparison);
  }

  /**
   * Filter the query on the question column
   * 
   * @param     string $question The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    InterviewQuestionQuery The current query, for fluid interface
   */
  public function filterByQuestion($question = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($question))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $question))
      {
        $question = str_replace('*', '%', $question);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(InterviewQuestionPeer::QUESTION, $question, $comparison);
  }

  /**
   * Filter the query on the answer column
   * 
   * @param     string $answer The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    InterviewQuestionQuery The current query, for fluid interface
   */
  public function filterByAnswer($answer = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($answer))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $answer))
      {
        $answer = str_replace('*', '%', $answer);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(InterviewQuestionPeer::ANSWER, $answer, $comparison);
  }

  /**
   * Filter the query on the photo column
   * 
   * @param     string $photo The value to use as filter.
   *            Accepts wildcards (* and % trigger a LIKE)
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    InterviewQuestionQuery The current query, for fluid interface
   */
  public function filterByPhoto($photo = null, $comparison = null)
  {
    if (null === $comparison)
    {
      if (is_array($photo))
      {
        $comparison = Criteria::IN;
      }
      elseif (preg_match('/[\%\*]/', $photo))
      {
        $photo = str_replace('*', '%', $photo);
        $comparison = Criteria::LIKE;
      }
    }
    return $this->addUsingAlias(InterviewQuestionPeer::PHOTO, $photo, $comparison);
  }

  /**
   * Filter the query by a related CollectorInterview object
   *
   * @param     CollectorInterview $collectorInterview  the related object to use as filter
   * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
   *
   * @return    InterviewQuestionQuery The current query, for fluid interface
   */
  public function filterByCollectorInterview($collectorInterview, $comparison = null)
  {
    return $this
      ->addUsingAlias(InterviewQuestionPeer::COLLECTOR_INTERVIEW_ID, $collectorInterview->getId(), $comparison);
  }

  /**
   * Adds a JOIN clause to the query using the CollectorInterview relation
   * 
   * @param     string $relationAlias optional alias for the relation
   * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
   *
   * @return    InterviewQuestionQuery The current query, for fluid interface
   */
  public function joinCollectorInterview($relationAlias = null, $joinType = Criteria::INNER_JOIN)
  {
    $tableMap = $this->getTableMap();
    $relationMap = $tableMap->getRelation('CollectorInterview');
    
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
   * Exclude object from result
   *
   * @param     InterviewQuestion $interviewQuestion Object to remove from the list of results
   *
   * @return    InterviewQuestionQuery The current query, for fluid interface
   */
  public function prune($interviewQuestion = null)
  {
    if ($interviewQuestion)
    {
      $this->addUsingAlias(InterviewQuestionPeer::ID, $interviewQuestion->getId(), Criteria::NOT_EQUAL);
    }
    
    return $this;
  }

}
