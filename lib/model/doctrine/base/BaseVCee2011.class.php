<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('VCee2011', 'doctrine');

/**
 * BaseVCee2011
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $gestion_id
 * @property string $desc_departamento
 * @property integer $cod_distrito
 * @property string $distrito
 * @property string $cod_ue
 * @property string $desc_ue
 * 
 * @method integer  getId()                Returns the current record's "id" value
 * @method integer  getGestionId()         Returns the current record's "gestion_id" value
 * @method string   getDescDepartamento()  Returns the current record's "desc_departamento" value
 * @method integer  getCodDistrito()       Returns the current record's "cod_distrito" value
 * @method string   getDistrito()          Returns the current record's "distrito" value
 * @method string   getCodUe()             Returns the current record's "cod_ue" value
 * @method string   getDescUe()            Returns the current record's "desc_ue" value
 * @method VCee2011 setId()                Sets the current record's "id" value
 * @method VCee2011 setGestionId()         Sets the current record's "gestion_id" value
 * @method VCee2011 setDescDepartamento()  Sets the current record's "desc_departamento" value
 * @method VCee2011 setCodDistrito()       Sets the current record's "cod_distrito" value
 * @method VCee2011 setDistrito()          Sets the current record's "distrito" value
 * @method VCee2011 setCodUe()             Sets the current record's "cod_ue" value
 * @method VCee2011 setDescUe()            Sets the current record's "desc_ue" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseVCee2011 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('v_cee_2011');
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
        $this->hasColumn('desc_departamento', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '10',
             ));
        $this->hasColumn('cod_distrito', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('distrito', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '45',
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
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}