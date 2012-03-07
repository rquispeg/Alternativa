<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('SeqInscripcionGestion', 'doctrine');

/**
 * BaseSeqInscripcionGestion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $gestion_id
 * @property integer $numero_matricula
 * @property ClaGestion $ClaGestion
 * 
 * @method integer               getGestionId()        Returns the current record's "gestion_id" value
 * @method integer               getNumeroMatricula()  Returns the current record's "numero_matricula" value
 * @method ClaGestion            getClaGestion()       Returns the current record's "ClaGestion" value
 * @method SeqInscripcionGestion setGestionId()        Sets the current record's "gestion_id" value
 * @method SeqInscripcionGestion setNumeroMatricula()  Sets the current record's "numero_matricula" value
 * @method SeqInscripcionGestion setClaGestion()       Sets the current record's "ClaGestion" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseSeqInscripcionGestion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('seq_inscripcion_gestion');
        $this->hasColumn('gestion_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('numero_matricula', 'integer', 4, array(
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