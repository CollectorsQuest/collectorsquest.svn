<?php



/**
 * This class defines the structure of the 'promotion' table.
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
class PromotionTableMap extends TableMap
{

  /**
   * The (dot-path) name of this class
   */
  const CLASS_NAME = 'lib.model.map.PromotionTableMap';

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
    $this->setName('promotion');
    $this->setPhpName('Promotion');
    $this->setClassname('Promotion');
    $this->setPackage('lib.model');
    $this->setUseIdGenerator(true);
    // columns
    $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
    $this->addColumn('PROMOTION_NAME', 'PromotionName', 'VARCHAR', true, 255, null);
    $this->addColumn('PROMOTION_DESC', 'PromotionDesc', 'LONGVARCHAR', false, null, null);
    $this->addColumn('PROMOTION_CODE', 'PromotionCode', 'VARCHAR', true, 255, null);
    $this->addColumn('AMOUNT', 'Amount', 'FLOAT', false, null, null);
    $this->addColumn('AMOUNT_TYPE', 'AmountType', 'CHAR', true, null, 'Fix');
    $this->addColumn('NO_OF_TIME_USED', 'NoOfTimeUsed', 'INTEGER', false, null, null);
    $this->addColumn('EXPIRY_DATE', 'ExpiryDate', 'TIMESTAMP', false, null, null);
    $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
    // validators
  }

  /**
   * Build the RelationMap objects for this table relationships
   */
  public function buildRelations()
  {
    $this->addRelation('PromotionTransaction', 'PromotionTransaction', RelationMap::ONE_TO_MANY, array('id' => 'promotion_id', ), 'CASCADE', null, 'PromotionTransactions');
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
      'symfony_timestampable' => array('update_column' => 'updated_at', 'create_column' => 'created_at', ),
      'alternative_coding_standards' => array('brackets_newline' => 'true', 'remove_closing_comments' => 'true', 'use_whitespace' => 'true', 'tab_size' => '2', 'strip_comments' => 'false', ),
    );
  }

}
