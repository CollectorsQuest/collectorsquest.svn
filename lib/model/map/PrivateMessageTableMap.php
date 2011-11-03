<?php



/**
 * This class defines the structure of the 'private_message' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class PrivateMessageTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.map.PrivateMessageTableMap';

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
    $this->setName('private_message');
    $this->setPhpName('PrivateMessage');
    $this->setClassname('PrivateMessage');
    $this->setPackage('lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('THREAD', 'Thread', 'VARCHAR', false, 32, null);
    $this->addColumn('SENDER', 'Sender', 'INTEGER', true, null, null);
    $this->addColumn('RECEIVER', 'Receiver', 'INTEGER', true, null, null);
    $this->addColumn('SUBJECT', 'Subject', 'VARCHAR', true, 255, null);
    $this->addColumn('BODY', 'Body', 'LONGVARCHAR', true, null, null);
    $this->addColumn('IS_RICH', 'IsRich', 'BOOLEAN', false, null, false);
    $this->addColumn('IS_READ', 'IsRead', 'BOOLEAN', false, null, false);
    $this->addColumn('IS_REPLIED', 'IsReplied', 'BOOLEAN', false, null, false);
    $this->addColumn('IS_FORWARDED', 'IsForwarded', 'BOOLEAN', false, null, false);
    $this->addColumn('IS_MARKED', 'IsMarked', 'BOOLEAN', false, null, false);
    $this->addColumn('IS_DELETED', 'IsDeleted', 'BOOLEAN', false, null, false);
    $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
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
      'symfony_timestampable' => array('create_column' => 'created_at', ),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
