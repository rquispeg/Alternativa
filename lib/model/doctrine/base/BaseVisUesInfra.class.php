<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('VisUesInfra', 'doctrine');

/**
 * BaseVisUesInfra
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $gestion_id
 * @property string $cod_le
 * @property string $cod_ue
 * @property string $desc_ue
 * @property integer $departamento_id
 * 
 * @method integer     getId()              Returns the current record's "id" value
 * @method integer     getGestionId()       Returns the current record's "gestion_id" value
 * @method string      getCodLe()           Returns the current record's "cod_le" value
 * @method string      getCodUe()           Returns the current record's "cod_ue" value
 * @method string      getDescUe()          Returns the current record's "desc_ue" value
 * @method integer     getDepartamentoId()  Returns the current record's "departamento_id" value
 * @method VisUesInfra setId()              Sets the current record's "id" value
 * @method VisUesInfra setGestionId()       Sets the current record's "gestion_id" value
 * @method VisUesInfra setCodLe()           Sets the current record's "cod_le" value
 * @method VisUesInfra setCodUe()           Sets the current record's "cod_ue" value
 * @method VisUesInfra setDescUe()          Sets the current record's "desc_ue" value
 * @method VisUesInfra setDepartamentoId()  Sets the current record's "departamento_id" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseVisUesInfra extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('vis_ues_infra');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => '8',
             ));
        $this->hasColumn('gestion_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('cod_le', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('cod_ue', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('desc_ue', 'string', 70, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '70',
             ));
        $this->hasColumn('departamento_id', 'integer', 4, array(
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
        
    }
}