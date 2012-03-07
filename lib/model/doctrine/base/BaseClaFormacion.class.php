<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ClaFormacion', 'doctrine');

/**
 * BaseClaFormacion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_formacion
 * @property string $desc_formacion
 * @property Doctrine_Collection $DatSieDocenteadministrativo
 * 
 * @method integer             getIdFormacion()                 Returns the current record's "id_formacion" value
 * @method string              getDescFormacion()               Returns the current record's "desc_formacion" value
 * @method Doctrine_Collection getDatSieDocenteadministrativo() Returns the current record's "DatSieDocenteadministrativo" collection
 * @method ClaFormacion        setIdFormacion()                 Sets the current record's "id_formacion" value
 * @method ClaFormacion        setDescFormacion()               Sets the current record's "desc_formacion" value
 * @method ClaFormacion        setDatSieDocenteadministrativo() Sets the current record's "DatSieDocenteadministrativo" collection
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseClaFormacion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cla_formacion');
        $this->hasColumn('id_formacion', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('desc_formacion', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('DatSieDocenteadministrativo', array(
             'local' => 'id_formacion',
             'foreign' => 'formacion_id'));
    }
}