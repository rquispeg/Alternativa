<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('SeqAsignacionGestion', 'doctrine');

/**
 * BaseSeqAsignacionGestion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $gestion_id
 * @property integer $numero_asignacion
 * @property ClaGestion $ClaGestion
 * 
 * @method integer              getGestionId()         Returns the current record's "gestion_id" value
 * @method integer              getNumeroAsignacion()  Returns the current record's "numero_asignacion" value
 * @method ClaGestion           getClaGestion()        Returns the current record's "ClaGestion" value
 * @method SeqAsignacionGestion setGestionId()         Sets the current record's "gestion_id" value
 * @method SeqAsignacionGestion setNumeroAsignacion()  Sets the current record's "numero_asignacion" value
 * @method SeqAsignacionGestion setClaGestion()        Sets the current record's "ClaGestion" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseSeqAsignacionGestion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('seq_asignacion_gestion');
        $this->hasColumn('gestion_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('numero_asignacion', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ClaGestion', array(
             'local' => 'gestion_id',
             'foreign' => 'id_gestion'));
    }
}