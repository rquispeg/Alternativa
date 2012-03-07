<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ClaCircunscripcion', 'doctrine');

/**
 * BaseClaCircunscripcion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $desc_circunscripcion
 * @property string $abr_circunscripcion
 * @property integer $departamento_id
 * @property ClaDepartamento $ClaDepartamento
 * @property Doctrine_Collection $DatJueInscritos
 * 
 * @method integer             getId()                   Returns the current record's "id" value
 * @method string              getDescCircunscripcion()  Returns the current record's "desc_circunscripcion" value
 * @method string              getAbrCircunscripcion()   Returns the current record's "abr_circunscripcion" value
 * @method integer             getDepartamentoId()       Returns the current record's "departamento_id" value
 * @method ClaDepartamento     getClaDepartamento()      Returns the current record's "ClaDepartamento" value
 * @method Doctrine_Collection getDatJueInscritos()      Returns the current record's "DatJueInscritos" collection
 * @method ClaCircunscripcion  setId()                   Sets the current record's "id" value
 * @method ClaCircunscripcion  setDescCircunscripcion()  Sets the current record's "desc_circunscripcion" value
 * @method ClaCircunscripcion  setAbrCircunscripcion()   Sets the current record's "abr_circunscripcion" value
 * @method ClaCircunscripcion  setDepartamentoId()       Sets the current record's "departamento_id" value
 * @method ClaCircunscripcion  setClaDepartamento()      Sets the current record's "ClaDepartamento" value
 * @method ClaCircunscripcion  setDatJueInscritos()      Sets the current record's "DatJueInscritos" collection
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseClaCircunscripcion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cla_circunscripcion');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('desc_circunscripcion', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '100',
             ));
        $this->hasColumn('abr_circunscripcion', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('departamento_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ClaDepartamento', array(
             'local' => 'departamento_id',
             'foreign' => 'id_departamento'));

        $this->hasMany('DatJueInscritos', array(
             'local' => 'id',
             'foreign' => 'circunscripcion_id'));
    }
}