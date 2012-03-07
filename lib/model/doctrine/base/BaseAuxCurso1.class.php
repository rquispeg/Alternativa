<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AuxCurso1', 'doctrine');

/**
 * BaseAuxCurso1
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $cod_ue_id
 * @property integer $nivel_id
 * @property integer $grado
 * @property string $paralelo
 * 
 * @method string    getCodUeId()   Returns the current record's "cod_ue_id" value
 * @method integer   getNivelId()   Returns the current record's "nivel_id" value
 * @method integer   getGrado()     Returns the current record's "grado" value
 * @method string    getParalelo()  Returns the current record's "paralelo" value
 * @method AuxCurso1 setCodUeId()   Sets the current record's "cod_ue_id" value
 * @method AuxCurso1 setNivelId()   Sets the current record's "nivel_id" value
 * @method AuxCurso1 setGrado()     Sets the current record's "grado" value
 * @method AuxCurso1 setParalelo()  Sets the current record's "paralelo" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseAuxCurso1 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('aux_curso1');
        $this->hasColumn('cod_ue_id', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('nivel_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('grado', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('paralelo', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}