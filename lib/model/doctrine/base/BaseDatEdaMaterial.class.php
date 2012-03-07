<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DatEdaMaterial', 'doctrine');

/**
 * BaseDatEdaMaterial
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $evento_id
 * @property string $cod_ue_id
 * @property integer $gestion_id
 * @property integer $material_id
 * @property integer $cantidad_danado
 * @property integer $cantidad_perdido
 * @property ClaEdaMaterial $ClaEdaMaterial
 * @property DatEdaEvento $DatEdaEvento
 * @property DatEdaEvento $DatEdaEvento_3
 * @property DatEdaEvento $DatEdaEvento_4
 * 
 * @method integer        getEventoId()         Returns the current record's "evento_id" value
 * @method string         getCodUeId()          Returns the current record's "cod_ue_id" value
 * @method integer        getGestionId()        Returns the current record's "gestion_id" value
 * @method integer        getMaterialId()       Returns the current record's "material_id" value
 * @method integer        getCantidadDanado()   Returns the current record's "cantidad_danado" value
 * @method integer        getCantidadPerdido()  Returns the current record's "cantidad_perdido" value
 * @method ClaEdaMaterial getClaEdaMaterial()   Returns the current record's "ClaEdaMaterial" value
 * @method DatEdaEvento   getDatEdaEvento()     Returns the current record's "DatEdaEvento" value
 * @method DatEdaEvento   getDatEdaEvento3()    Returns the current record's "DatEdaEvento_3" value
 * @method DatEdaEvento   getDatEdaEvento4()    Returns the current record's "DatEdaEvento_4" value
 * @method DatEdaMaterial setEventoId()         Sets the current record's "evento_id" value
 * @method DatEdaMaterial setCodUeId()          Sets the current record's "cod_ue_id" value
 * @method DatEdaMaterial setGestionId()        Sets the current record's "gestion_id" value
 * @method DatEdaMaterial setMaterialId()       Sets the current record's "material_id" value
 * @method DatEdaMaterial setCantidadDanado()   Sets the current record's "cantidad_danado" value
 * @method DatEdaMaterial setCantidadPerdido()  Sets the current record's "cantidad_perdido" value
 * @method DatEdaMaterial setClaEdaMaterial()   Sets the current record's "ClaEdaMaterial" value
 * @method DatEdaMaterial setDatEdaEvento()     Sets the current record's "DatEdaEvento" value
 * @method DatEdaMaterial setDatEdaEvento3()    Sets the current record's "DatEdaEvento_3" value
 * @method DatEdaMaterial setDatEdaEvento4()    Sets the current record's "DatEdaEvento_4" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatEdaMaterial extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_eda_material');
        $this->hasColumn('evento_id', 'integer', 4, array(
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
        $this->hasColumn('gestion_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('material_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('cantidad_danado', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('cantidad_perdido', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ClaEdaMaterial', array(
             'local' => 'material_id',
             'foreign' => 'id_material'));

        $this->hasOne('DatEdaEvento', array(
             'local' => 'evento_id',
             'foreign' => 'id_evento'));

        $this->hasOne('DatEdaEvento as DatEdaEvento_3', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasOne('DatEdaEvento as DatEdaEvento_4', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));
    }
}