<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Registrars', 'doctrine');

/**
 * BaseRegistrars
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $registrars_id
 * @property string $name
 * @property string $description
 * @property string $help
 * @property string $class
 * @property string $config
 * @property integer $active
 * @property timestamp $lastupdate
 * @property integer $isp_id
 * @property Doctrine_Collection $CustomersDomainsRegistrars
 * @property Doctrine_Collection $Domains
 * @property Doctrine_Collection $DomainsTasks
 * @property Doctrine_Collection $DomainsTlds
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRegistrars extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('registrars');
        $this->hasColumn('registrars_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('name', 'string', 200, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '200',
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '',
             ));
        $this->hasColumn('help', 'string', null, array(
             'type' => 'string',
             'length' => '',
             ));
        $this->hasColumn('class', 'string', 200, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '200',
             ));
        $this->hasColumn('config', 'string', null, array(
             'type' => 'string',
             'length' => '',
             ));
        $this->hasColumn('active', 'integer', 1, array(
             'type' => 'integer',
             'length' => '1',
             ));
        $this->hasColumn('lastupdate', 'timestamp', 25, array(
             'type' => 'timestamp',
             'length' => '25',
             ));
        $this->hasColumn('isp_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 1,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('CustomersDomainsRegistrars', array(
             'local' => 'registrars_id',
             'foreign' => 'registrars_id'));

        $this->hasMany('Domains', array(
             'local' => 'registrars_id',
             'foreign' => 'registrars_id'));

        $this->hasMany('DomainsTasks', array(
             'local' => 'registrars_id',
             'foreign' => 'registrars_id'));

        $this->hasMany('DomainsTlds', array(
             'local' => 'registrars_id',
             'foreign' => 'registrars_id'));
    }
}