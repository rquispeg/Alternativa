<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ClaDplRecepcion', 'doctrine');

/**
 * BaseClaDplRecepcion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_recepcionado
 * @property string $desc_recepcionado
 * @property Doctrine_Collection $CtrVisDiplomas
 * 
 * @method integer             getIdRecepcionado()    Returns the current record's "id_recepcionado" value
 * @method string              getDescRecepcionado()  Returns the current record's "desc_recepcionado" value
 * @method Doctrine_Collection getCtrVisDiplomas()    Returns the current record's "CtrVisDiplomas" collection
 * @method ClaDplRecepcion     setIdRecepcionado()    Sets the current record's "id_recepcionado" value
 * @method ClaDplRecepcion     setDescRecepcionado()  Sets the current record's "desc_recepcionado" value
 * @method ClaDplRecepcion     setCtrVisDiplomas()    Sets the current record's "CtrVisDiplomas" collection
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseClaDplRecepcion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cla_dpl_recepcion');
        $this->hasColumn('id_recepcionado', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => '1',
             ));
        $this->hasColumn('desc_recepcionado', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('CtrVisDiplomas', array(
             'local' => 'id_recepcionado',
             'foreign' => 'recepcionado'));
    }
}