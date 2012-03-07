<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DatIfrGestionUe', 'doctrine');

/**
 * BaseDatIfrGestionUe
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $cod_ue_id
 * @property integer $sub_cea_id
 * @property integer $gestion_id
 * @property integer $operativo_id
 * @property integer $periodo_id
 * @property integer $direccion_id
 * @property DatIfrDireccionGeografica $DatIfrDireccionGeografica
 * @property DatSieUnidadEducativa $DatSieUnidadEducativa
 * @property DatSieUnidadEducativa $DatSieUnidadEducativa_3
 * @property DatSieUnidadEducativa $DatSieUnidadEducativa_4
 * @property DatSieUnidadEducativa $DatSieUnidadEducativa_5
 * @property DatSieUnidadEducativa $DatSieUnidadEducativa_6
 * 
 * @method string                    getCodUeId()                   Returns the current record's "cod_ue_id" value
 * @method integer                   getSubCeaId()                  Returns the current record's "sub_cea_id" value
 * @method integer                   getGestionId()                 Returns the current record's "gestion_id" value
 * @method integer                   getOperativoId()               Returns the current record's "operativo_id" value
 * @method integer                   getPeriodoId()                 Returns the current record's "periodo_id" value
 * @method integer                   getDireccionId()               Returns the current record's "direccion_id" value
 * @method DatIfrDireccionGeografica getDatIfrDireccionGeografica() Returns the current record's "DatIfrDireccionGeografica" value
 * @method DatSieUnidadEducativa     getDatSieUnidadEducativa()     Returns the current record's "DatSieUnidadEducativa" value
 * @method DatSieUnidadEducativa     getDatSieUnidadEducativa3()    Returns the current record's "DatSieUnidadEducativa_3" value
 * @method DatSieUnidadEducativa     getDatSieUnidadEducativa4()    Returns the current record's "DatSieUnidadEducativa_4" value
 * @method DatSieUnidadEducativa     getDatSieUnidadEducativa5()    Returns the current record's "DatSieUnidadEducativa_5" value
 * @method DatSieUnidadEducativa     getDatSieUnidadEducativa6()    Returns the current record's "DatSieUnidadEducativa_6" value
 * @method DatIfrGestionUe           setCodUeId()                   Sets the current record's "cod_ue_id" value
 * @method DatIfrGestionUe           setSubCeaId()                  Sets the current record's "sub_cea_id" value
 * @method DatIfrGestionUe           setGestionId()                 Sets the current record's "gestion_id" value
 * @method DatIfrGestionUe           setOperativoId()               Sets the current record's "operativo_id" value
 * @method DatIfrGestionUe           setPeriodoId()                 Sets the current record's "periodo_id" value
 * @method DatIfrGestionUe           setDireccionId()               Sets the current record's "direccion_id" value
 * @method DatIfrGestionUe           setDatIfrDireccionGeografica() Sets the current record's "DatIfrDireccionGeografica" value
 * @method DatIfrGestionUe           setDatSieUnidadEducativa()     Sets the current record's "DatSieUnidadEducativa" value
 * @method DatIfrGestionUe           setDatSieUnidadEducativa3()    Sets the current record's "DatSieUnidadEducativa_3" value
 * @method DatIfrGestionUe           setDatSieUnidadEducativa4()    Sets the current record's "DatSieUnidadEducativa_4" value
 * @method DatIfrGestionUe           setDatSieUnidadEducativa5()    Sets the current record's "DatSieUnidadEducativa_5" value
 * @method DatIfrGestionUe           setDatSieUnidadEducativa6()    Sets the current record's "DatSieUnidadEducativa_6" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatIfrGestionUe extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_ifr_gestion_ue');
        $this->hasColumn('cod_ue_id', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('sub_cea_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('gestion_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('operativo_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('periodo_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('direccion_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DatIfrDireccionGeografica', array(
             'local' => 'direccion_id',
             'foreign' => 'id_direccion'));

        $this->hasOne('DatSieUnidadEducativa', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasOne('DatSieUnidadEducativa as DatSieUnidadEducativa_3', array(
             'local' => 'periodo_id',
             'foreign' => 'periodo_id'));

        $this->hasOne('DatSieUnidadEducativa as DatSieUnidadEducativa_4', array(
             'local' => 'operativo_id',
             'foreign' => 'operativo_id'));

        $this->hasOne('DatSieUnidadEducativa as DatSieUnidadEducativa_5', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));

        $this->hasOne('DatSieUnidadEducativa as DatSieUnidadEducativa_6', array(
             'local' => 'sub_cea_id',
             'foreign' => 'sub_cea'));
    }
}