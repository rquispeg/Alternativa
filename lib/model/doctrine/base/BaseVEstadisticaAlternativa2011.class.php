<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('VEstadisticaAlternativa2011', 'doctrine');

/**
 * BaseVEstadisticaAlternativa2011
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
 * @property integer $sub_cea
 * @property string $nombre_subcea
 * @property integer $id_ciclo
 * @property string $desc_ciclo
 * @property integer $calculated_column1
 * 
 * @method integer                     getId()                 Returns the current record's "id" value
 * @method integer                     getGestionId()          Returns the current record's "gestion_id" value
 * @method string                      getDescDepartamento()   Returns the current record's "desc_departamento" value
 * @method integer                     getCodDistrito()        Returns the current record's "cod_distrito" value
 * @method string                      getDistrito()           Returns the current record's "distrito" value
 * @method string                      getCodUe()              Returns the current record's "cod_ue" value
 * @method string                      getDescUe()             Returns the current record's "desc_ue" value
 * @method integer                     getSubCea()             Returns the current record's "sub_cea" value
 * @method string                      getNombreSubcea()       Returns the current record's "nombre_subcea" value
 * @method integer                     getIdCiclo()            Returns the current record's "id_ciclo" value
 * @method string                      getDescCiclo()          Returns the current record's "desc_ciclo" value
 * @method integer                     getCalculatedColumn1()  Returns the current record's "calculated_column1" value
 * @method VEstadisticaAlternativa2011 setId()                 Sets the current record's "id" value
 * @method VEstadisticaAlternativa2011 setGestionId()          Sets the current record's "gestion_id" value
 * @method VEstadisticaAlternativa2011 setDescDepartamento()   Sets the current record's "desc_departamento" value
 * @method VEstadisticaAlternativa2011 setCodDistrito()        Sets the current record's "cod_distrito" value
 * @method VEstadisticaAlternativa2011 setDistrito()           Sets the current record's "distrito" value
 * @method VEstadisticaAlternativa2011 setCodUe()              Sets the current record's "cod_ue" value
 * @method VEstadisticaAlternativa2011 setDescUe()             Sets the current record's "desc_ue" value
 * @method VEstadisticaAlternativa2011 setSubCea()             Sets the current record's "sub_cea" value
 * @method VEstadisticaAlternativa2011 setNombreSubcea()       Sets the current record's "nombre_subcea" value
 * @method VEstadisticaAlternativa2011 setIdCiclo()            Sets the current record's "id_ciclo" value
 * @method VEstadisticaAlternativa2011 setDescCiclo()          Sets the current record's "desc_ciclo" value
 * @method VEstadisticaAlternativa2011 setCalculatedColumn1()  Sets the current record's "calculated_column1" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseVEstadisticaAlternativa2011 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('v_estadistica_alternativa_2011');
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
             'notnull' => false,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('desc_departamento', 'string', 10, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '10',
             ));
        $this->hasColumn('cod_distrito', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('distrito', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('cod_ue', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('desc_ue', 'string', 70, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '70',
             ));
        $this->hasColumn('sub_cea', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('nombre_subcea', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('id_ciclo', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('desc_ciclo', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('calculated_column1', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}