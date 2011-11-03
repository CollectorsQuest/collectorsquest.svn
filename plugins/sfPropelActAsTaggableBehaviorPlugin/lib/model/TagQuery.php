<?php


/**
 * Skeleton subclass for performing query and update operations on the 'tag' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.plugins.sfPropelActAsTaggableBehaviorPlugin.lib.model
 */
class TagQuery extends BaseTagQuery {

	/**
	 * Returns a new TagQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    TagQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof TagQuery) {
			return $criteria;
		}
		$query = new self('propel', 'Tag', $modelAlias);
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

} // TagQuery
