<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DatIfrDireccionGeografica', 'doctrine');

/**
 * BaseDatIfrDireccionGeografica
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_direccion
 * @property string $localidad_id
 * @property integer $canton_id
 * @property integer $seccion_id
 * @property integer $provincia_id
 * @property integer $departamento_id
 * @property string $zona
 * @property string $direccion
 * @property string $area
 * @property ClaLocalidad $ClaLocalidad
 * @property ClaLocalidad $ClaLocalidad_2
 * @property ClaLocalidad $ClaLocalidad_3
 * @property ClaLocalidad $ClaLocalidad_4
 * @property ClaLocalidad $ClaLocalidad_5
 * @property Doctrine_Collection $DatIfrGestionUe
 * 
 * @method integer                   getIdDireccion()     Returns the current record's "id_direccion" value
 * @method string                    getLocalidadId()     Returns the current record's "localidad_id" value
 * @method integer                   getCantonId()        Returns the current record's "canton_id" value
 * @method integer                   getSeccionId()       Returns the current record's "seccion_id" value
 * @method integer                   getProvinciaId()     Returns the current record's "provincia_id" value
 * @method integer                   getDepartamentoId()  Returns the current record's "departamento_id" value
 * @method string                    getZona()            Returns the current record's "zona" value
 * @method string                    getDireccion()       Returns the current record's "direccion" value
 * @method string                    getArea()            Returns the current record's "area" value
 * @method ClaLocalidad              getClaLocalidad()    Returns the current record's "ClaLocalidad" value
 * @method ClaLocalidad              getClaLocalidad2()   Returns the current record's "ClaLocalidad_2" value
 * @method ClaLocalidad              getClaLocalidad3()   Returns the current record's "ClaLocalidad_3" value
 * @method ClaLocalidad              getClaLocalidad4()   Returns the current record's "ClaLocalidad_4" value
 * @method ClaLocalidad              getClaLocalidad5()   Returns the current record's "ClaLocalidad_5" value
 * @method Doctrine_Collection       getDatIfrGestionUe() Returns the current record's "DatIfrGestionUe" collection
 * @method DatIfrDireccionGeografica setIdDireccion()     Sets the current record's "id_direccion" value
 * @method DatIfrDireccionGeografica setLocalidadId()     Sets the current record's "localidad_id" value
 * @method DatIfrDireccionGeografica setCantonId()        Sets the current record's "canton_id" value
 * @method DatIfrDireccionGeografica setSeccionId()       Sets the current record's "seccion_id" value
 * @method DatIfrDireccionGeografica setProvinciaId()     Sets the current record's "provincia_id" value
 * @method DatIfrDireccionGeografica setDepartamentoId()  Sets the current record's "departamento_id" value
 * @method DatIfrDireccionGeografica setZona()            Sets the current record's "zona" value
 * @method DatIfrDireccionGeografica setDireccion()       Sets the current record's "direccion" value
 * @method DatIfrDireccionGeografica setArea()            Sets the current record's "area" value
 * @method DatIfrDireccionGeografica setClaLocalidad()    Sets the current record's "ClaLocalidad" value
 * @method DatIfrDireccionGeografica setClaLocalidad2()   Sets the current record's "ClaLocalidad_2" value
 * @method DatIfrDireccionGeografica setClaLocalidad3()   Sets the current record's "ClaLocalidad_3" value
 * @method DatIfrDireccionGeografica setClaLocalidad4()   Sets the current record's "ClaLocalidad_4" value
 * @method DatIfrDireccionGeografica setClaLocalidad5()   Sets the current record's "ClaLocalidad_5" value
 * @method DatIfrDireccionGeografica setDatIfrGestionUe() Sets the current record's "DatIfrGestionUe" collection
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatIfrDireccionGeografica extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_ifr_direccion_geografica');
        $this->hasColumn('id_direccion', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('localidad_id', 'string', 6, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '6',
             ));
        $this->hasColumn('canton_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('seccion_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('provincia_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
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
        $this->hasColumn('zona', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('direccion', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '100',
             ));
        $this->hasColumn('area', 'string', 2, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ClaLocalidad', array(
             'local' => 'localidad_id',
             'foreign' => 'id_localidad'));

        $this->hasOne('ClaLocalidad as ClaLocalidad_2', array(
             'local' => 'canton_id',
             'foreign' => 'canton_id'));

        $this->hasOne('ClaLocalidad as ClaLocalidad_3', array(
             'local' => 'seccion_id',
             'foreign' => 'seccion_id'));

        $this->hasOne('ClaLocalidad as ClaLocalidad_4', array(
             'local' => 'provincia_id',
             'foreign' => 'provincia_id'));

        $this->hasOne('ClaLocalidad as ClaLocalidad_5', array(
             'local' => 'departamento_id',
             'foreign' => 'departamento_id'));

        $this->hasMany('DatIfrGestionUe', array(
             'local' => 'id_direccion',
             'foreign' => 'direccion_id'));
    }
}