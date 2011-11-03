<?php


/**
 * Skeleton subclass for performing query and update operations on the 'sf_guard_remember_key' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.plugins.sfGuardPlugin.lib.model
 */
class sfGuardRememberKeyQuery extends BasesfGuardRememberKeyQuery {

	/**
	 * Returns a new sfGuardRememberKeyQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    sfGuardRememberKeyQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof sfGuardRememberKeyQuery) {
			return $criteria;
		}
		$query = new self('propel', 'sfGuardRememberKey', $modelAlias);
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

} // sfGuardRememberKeyQuery
