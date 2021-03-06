<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AdminRoles', 'doctrine');

/**
 * BaseAdminRoles
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $role_id
 * @property string $name
 * @property Doctrine_Collection $AdminPermissions
 * @property Doctrine_Collection $AdminUser
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAdminRoles extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('admin_roles');
        $this->hasColumn('role_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('name', 'string', 250, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '250',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('AdminPermissions', array(
             'local' => 'role_id',
             'foreign' => 'role_id'));

        $this->hasMany('AdminUser', array(
             'local' => 'role_id',
             'foreign' => 'role_id'));
    }
}