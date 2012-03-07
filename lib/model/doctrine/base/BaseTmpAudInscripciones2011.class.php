<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TmpAudInscripciones2011', 'doctrine');

/**
 * BaseTmpAudInscripciones2011
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $cod_ue
 * @property timestamp $fecha
 * @property integer $vigente
 * 
 * @method integer                 getCodUe()   Returns the current record's "cod_ue" value
 * @method timestamp               getFecha()   Returns the current record's "fecha" value
 * @method integer                 getVigente() Returns the current record's "vigente" value
 * @method TmpAudInscripciones2011 setCodUe()   Sets the current record's "cod_ue" value
 * @method TmpAudInscripciones2011 setFecha()   Sets the current record's "fecha" value
 * @method TmpAudInscripciones2011 setVigente() Sets the current record's "vigente" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseTmpAudInscripciones2011 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('tmp_aud_inscripciones_2011');
        $this->hasColumn('cod_ue', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('fecha', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('vigente', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}