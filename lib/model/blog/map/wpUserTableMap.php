<?php



/**
 * This class defines the structure of the 'wp_users' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.blog.map
 */
class wpUserTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.blog.map.wpUserTableMap';

  /**
   * Initialize the table attributes, columns and validators
   * Relations are not initialized by this method since they are lazy loaded
   *
   * @return     void
   * @throws     PropelException
   */
  public function initialize()
  {
    // attributes
    $this->setName('wp_users');
    $this->setPhpName('wpUser');
    $this->setClassname('wpUser');
    $this->setPackage('lib.model.blog');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('USER_LOGIN', 'UserLogin', 'VARCHAR', false, 60, null);
    $this->addColumn('USER_PASS', 'UserPass', 'VARCHAR', false, 64, null);
    $this->addColumn('USER_NICENAME', 'UserNicename', 'VARCHAR', false, 50, null);
    $this->addColumn('USER_EMAIL', 'UserEmail', 'VARCHAR', false, 100, null);
    $this->addColumn('USER_URL', 'UserUrl', 'VARCHAR', false, 100, null);
    $this->addColumn('USER_REGISTERED', 'UserRegistered', 'TIMESTAMP', false, null, null);
    $this->addColumn('USER_ACTIVATION_KEY', 'UserActivationKey', 'VARCHAR', false, 60, null);
    $this->addColumn('USER_STATUS', 'UserStatus', 'INTEGER', false, null, null);
    $this->addColumn('DISPLAY_NAME', 'DisplayName', 'VARCHAR', false, 255, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('wpPost', 'wpPost', RelationMap::ONE_TO_MANY, array('id' => 'post_author', ), null, null);
  }

  /**
   * 
   * Gets the list of behaviors registered for this table
   * 
   * @return array Associative array (name => parameters) of behaviors
   */
  public function getBehaviors()
  {
    return array(
      'symfony' => array('form' => 'true', 'filter' => 'true', ),
      'symfony_behaviors' => array(),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
