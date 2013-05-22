<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Addresses', 'doctrine');

/**
 * BaseAddresses
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $address_id
 * @property string $address
 * @property string $city
 * @property string $code
 * @property integer $country_id
 * @property integer $region_id
 * @property string $area
 * @property string $latitude
 * @property string $longitude
 * @property integer $customer_id
 * @property Regions $Regions
 * @property Countries $Countries
 * @property Customers $Customers
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAddresses extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('addresses');
        $this->hasColumn('address_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('address', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '',
             ));
        $this->hasColumn('city', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '150',
             ));
        $this->hasColumn('code', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '20',
             ));
        $this->hasColumn('country_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => '4',
             ));
        $this->hasColumn('region_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('area', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('latitude', 'string', 20, array(
             'type' => 'string',
             'length' => '20',
             ));
        $this->hasColumn('longitude', 'string', 20, array(
             'type' => 'string',
             'length' => '20',
             ));
        $this->hasColumn('customer_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Regions', array(
             'local' => 'region_id',
             'foreign' => 'region_id'));

        $this->hasOne('Countries', array(
             'local' => 'country_id',
             'foreign' => 'country_id'));

        $this->hasOne('Customers', array(
             'local' => 'customer_id',
             'foreign' => 'customer_id',
             'onDelete' => 'CASCADE'));
    }
}