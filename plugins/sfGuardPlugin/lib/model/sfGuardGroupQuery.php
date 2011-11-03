<?php


/**
 * Skeleton subclass for performing query and update operations on the 'sf_guard_group' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.plugins.sfGuardPlugin.lib.model
 */
class sfGuardGroupQuery extends BasesfGuardGroupQuery {

	/**
	 * Returns a new sfGuardGroupQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    sfGuardGroupQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof sfGuardGroupQuery) {
			return $criteria;
		}
		$query = new self('propel', 'sfGuardGroup', $modelAlias);
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

} // sfGuardGroupQuery
