<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AuxDplFormularioEntrega', 'doctrine');

/**
 * BaseAuxDplFormularioEntrega
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $inscripcion_id
 * @property string $cod_ue_id
 * 
 * @method integer                 getInscripcionId()  Returns the current record's "inscripcion_id" value
 * @method string                  getCodUeId()        Returns the current record's "cod_ue_id" value
 * @method AuxDplFormularioEntrega setInscripcionId()  Sets the current record's "inscripcion_id" value
 * @method AuxDplFormularioEntrega setCodUeId()        Sets the current record's "cod_ue_id" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseAuxDplFormularioEntrega extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('aux_dpl_formulario_entrega');
        $this->hasColumn('inscripcion_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('cod_ue_id', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}