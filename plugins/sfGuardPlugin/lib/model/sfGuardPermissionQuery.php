<?php


/**
 * Skeleton subclass for performing query and update operations on the 'sf_guard_permission' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.plugins.sfGuardPlugin.lib.model
 */
class sfGuardPermissionQuery extends BasesfGuardPermissionQuery {

	/**
	 * Returns a new sfGuardPermissionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    sfGuardPermissionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof sfGuardPermissionQuery) {
			return $criteria;
		}
		$query = new self('propel', 'sfGuardPermission', $modelAlias);
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

} // sfGuardPermissionQuery
