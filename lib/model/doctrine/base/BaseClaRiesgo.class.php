<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ClaRiesgo', 'doctrine');

/**
 * BaseClaRiesgo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_riego
 * @property string $desc_riesgo
 * @property Doctrine_Collection $DatRiesgos
 * 
 * @method integer             getIdRiego()     Returns the current record's "id_riego" value
 * @method string              getDescRiesgo()  Returns the current record's "desc_riesgo" value
 * @method Doctrine_Collection getDatRiesgos()  Returns the current record's "DatRiesgos" collection
 * @method ClaRiesgo           setIdRiego()     Sets the current record's "id_riego" value
 * @method ClaRiesgo           setDescRiesgo()  Sets the current record's "desc_riesgo" value
 * @method ClaRiesgo           setDatRiesgos()  Sets the current record's "DatRiesgos" collection
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseClaRiesgo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cla_riesgo');
        $this->hasColumn('id_riego', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => '1',
             ));
        $this->hasColumn('desc_riesgo', 'string', 45, array(
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
        $this->hasMany('DatRiesgos', array(
             'local' => 'id_riego',
             'foreign' => 'tipo_danio'));
    }
}