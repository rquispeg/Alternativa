<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DatRueUnidadEducativaTramite', 'doctrine');

/**
 * BaseDatRueUnidadEducativaTramite
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $formulario_id
 * @property integer $gestion_id
 * @property string $cod_ue
 * @property string $desc_unidad_educativa
 * @property string $cod_le
 * @property string $localidad_id
 * @property integer $canton_id
 * @property integer $seccion_id
 * @property integer $provincia_id
 * @property integer $departamento_id
 * @property string $zona
 * @property string $direccion
 * @property string $telefono1
 * @property string $telefono2
 * @property string $referencia_telefono2
 * @property string $fax
 * @property string $email
 * @property string $casilla
 * @property string $ci_director
 * @property string $director
 * @property integer $item_director
 * @property integer $turno_id
 * @property timestamp $fecha_consolidacion
 * @property integer $cod_org_curr_id
 * @property integer $cod_dependencia_id
 * @property integer $cod_convenio_id
 * @property integer $cod_distrito_id
 * @property ClaConvenios $ClaConvenios
 * @property ClaDependencia $ClaDependencia
 * @property DatSieDistrito $DatSieDistrito
 * @property DatSieDistrito $DatSieDistrito_4
 * @property ClaLocalidad $ClaLocalidad
 * @property ClaLocalidad $ClaLocalidad_6
 * @property ClaLocalidad $ClaLocalidad_7
 * @property ClaLocalidad $ClaLocalidad_8
 * @property ClaLocalidad $ClaLocalidad_9
 * @property ClaOrgCurricular $ClaOrgCurricular
 * @property DatRueFormularios $DatRueFormularios
 * @property DatRueFormularios $DatRueFormularios_12
 * @property ClaTurno $ClaTurno
 * @property Doctrine_Collection $DatRueCursoTramite
 * @property Doctrine_Collection $DatRueCursoTramite_8
 * 
 * @method integer                      getFormularioId()          Returns the current record's "formulario_id" value
 * @method integer                      getGestionId()             Returns the current record's "gestion_id" value
 * @method string                       getCodUe()                 Returns the current record's "cod_ue" value
 * @method string                       getDescUnidadEducativa()   Returns the current record's "desc_unidad_educativa" value
 * @method string                       getCodLe()                 Returns the current record's "cod_le" value
 * @method string                       getLocalidadId()           Returns the current record's "localidad_id" value
 * @method integer                      getCantonId()              Returns the current record's "canton_id" value
 * @method integer                      getSeccionId()             Returns the current record's "seccion_id" value
 * @method integer                      getProvinciaId()           Returns the current record's "provincia_id" value
 * @method integer                      getDepartamentoId()        Returns the current record's "departamento_id" value
 * @method string                       getZona()                  Returns the current record's "zona" value
 * @method string                       getDireccion()             Returns the current record's "direccion" value
 * @method string                       getTelefono1()             Returns the current record's "telefono1" value
 * @method string                       getTelefono2()             Returns the current record's "telefono2" value
 * @method string                       getReferenciaTelefono2()   Returns the current record's "referencia_telefono2" value
 * @method string                       getFax()                   Returns the current record's "fax" value
 * @method string                       getEmail()                 Returns the current record's "email" value
 * @method string                       getCasilla()               Returns the current record's "casilla" value
 * @method string                       getCiDirector()            Returns the current record's "ci_director" value
 * @method string                       getDirector()              Returns the current record's "director" value
 * @method integer                      getItemDirector()          Returns the current record's "item_director" value
 * @method integer                      getTurnoId()               Returns the current record's "turno_id" value
 * @method timestamp                    getFechaConsolidacion()    Returns the current record's "fecha_consolidacion" value
 * @method integer                      getCodOrgCurrId()          Returns the current record's "cod_org_curr_id" value
 * @method integer                      getCodDependenciaId()      Returns the current record's "cod_dependencia_id" value
 * @method integer                      getCodConvenioId()         Returns the current record's "cod_convenio_id" value
 * @method integer                      getCodDistritoId()         Returns the current record's "cod_distrito_id" value
 * @method ClaConvenios                 getClaConvenios()          Returns the current record's "ClaConvenios" value
 * @method ClaDependencia               getClaDependencia()        Returns the current record's "ClaDependencia" value
 * @method DatSieDistrito               getDatSieDistrito()        Returns the current record's "DatSieDistrito" value
 * @method DatSieDistrito               getDatSieDistrito4()       Returns the current record's "DatSieDistrito_4" value
 * @method ClaLocalidad                 getClaLocalidad()          Returns the current record's "ClaLocalidad" value
 * @method ClaLocalidad                 getClaLocalidad6()         Returns the current record's "ClaLocalidad_6" value
 * @method ClaLocalidad                 getClaLocalidad7()         Returns the current record's "ClaLocalidad_7" value
 * @method ClaLocalidad                 getClaLocalidad8()         Returns the current record's "ClaLocalidad_8" value
 * @method ClaLocalidad                 getClaLocalidad9()         Returns the current record's "ClaLocalidad_9" value
 * @method ClaOrgCurricular             getClaOrgCurricular()      Returns the current record's "ClaOrgCurricular" value
 * @method DatRueFormularios            getDatRueFormularios()     Returns the current record's "DatRueFormularios" value
 * @method DatRueFormularios            getDatRueFormularios12()   Returns the current record's "DatRueFormularios_12" value
 * @method ClaTurno                     getClaTurno()              Returns the current record's "ClaTurno" value
 * @method Doctrine_Collection          getDatRueCursoTramite()    Returns the current record's "DatRueCursoTramite" collection
 * @method Doctrine_Collection          getDatRueCursoTramite8()   Returns the current record's "DatRueCursoTramite_8" collection
 * @method DatRueUnidadEducativaTramite setFormularioId()          Sets the current record's "formulario_id" value
 * @method DatRueUnidadEducativaTramite setGestionId()             Sets the current record's "gestion_id" value
 * @method DatRueUnidadEducativaTramite setCodUe()                 Sets the current record's "cod_ue" value
 * @method DatRueUnidadEducativaTramite setDescUnidadEducativa()   Sets the current record's "desc_unidad_educativa" value
 * @method DatRueUnidadEducativaTramite setCodLe()                 Sets the current record's "cod_le" value
 * @method DatRueUnidadEducativaTramite setLocalidadId()           Sets the current record's "localidad_id" value
 * @method DatRueUnidadEducativaTramite setCantonId()              Sets the current record's "canton_id" value
 * @method DatRueUnidadEducativaTramite setSeccionId()             Sets the current record's "seccion_id" value
 * @method DatRueUnidadEducativaTramite setProvinciaId()           Sets the current record's "provincia_id" value
 * @method DatRueUnidadEducativaTramite setDepartamentoId()        Sets the current record's "departamento_id" value
 * @method DatRueUnidadEducativaTramite setZona()                  Sets the current record's "zona" value
 * @method DatRueUnidadEducativaTramite setDireccion()             Sets the current record's "direccion" value
 * @method DatRueUnidadEducativaTramite setTelefono1()             Sets the current record's "telefono1" value
 * @method DatRueUnidadEducativaTramite setTelefono2()             Sets the current record's "telefono2" value
 * @method DatRueUnidadEducativaTramite setReferenciaTelefono2()   Sets the current record's "referencia_telefono2" value
 * @method DatRueUnidadEducativaTramite setFax()                   Sets the current record's "fax" value
 * @method DatRueUnidadEducativaTramite setEmail()                 Sets the current record's "email" value
 * @method DatRueUnidadEducativaTramite setCasilla()               Sets the current record's "casilla" value
 * @method DatRueUnidadEducativaTramite setCiDirector()            Sets the current record's "ci_director" value
 * @method DatRueUnidadEducativaTramite setDirector()              Sets the current record's "director" value
 * @method DatRueUnidadEducativaTramite setItemDirector()          Sets the current record's "item_director" value
 * @method DatRueUnidadEducativaTramite setTurnoId()               Sets the current record's "turno_id" value
 * @method DatRueUnidadEducativaTramite setFechaConsolidacion()    Sets the current record's "fecha_consolidacion" value
 * @method DatRueUnidadEducativaTramite setCodOrgCurrId()          Sets the current record's "cod_org_curr_id" value
 * @method DatRueUnidadEducativaTramite setCodDependenciaId()      Sets the current record's "cod_dependencia_id" value
 * @method DatRueUnidadEducativaTramite setCodConvenioId()         Sets the current record's "cod_convenio_id" value
 * @method DatRueUnidadEducativaTramite setCodDistritoId()         Sets the current record's "cod_distrito_id" value
 * @method DatRueUnidadEducativaTramite setClaConvenios()          Sets the current record's "ClaConvenios" value
 * @method DatRueUnidadEducativaTramite setClaDependencia()        Sets the current record's "ClaDependencia" value
 * @method DatRueUnidadEducativaTramite setDatSieDistrito()        Sets the current record's "DatSieDistrito" value
 * @method DatRueUnidadEducativaTramite setDatSieDistrito4()       Sets the current record's "DatSieDistrito_4" value
 * @method DatRueUnidadEducativaTramite setClaLocalidad()          Sets the current record's "ClaLocalidad" value
 * @method DatRueUnidadEducativaTramite setClaLocalidad6()         Sets the current record's "ClaLocalidad_6" value
 * @method DatRueUnidadEducativaTramite setClaLocalidad7()         Sets the current record's "ClaLocalidad_7" value
 * @method DatRueUnidadEducativaTramite setClaLocalidad8()         Sets the current record's "ClaLocalidad_8" value
 * @method DatRueUnidadEducativaTramite setClaLocalidad9()         Sets the current record's "ClaLocalidad_9" value
 * @method DatRueUnidadEducativaTramite setClaOrgCurricular()      Sets the current record's "ClaOrgCurricular" value
 * @method DatRueUnidadEducativaTramite setDatRueFormularios()     Sets the current record's "DatRueFormularios" value
 * @method DatRueUnidadEducativaTramite setDatRueFormularios12()   Sets the current record's "DatRueFormularios_12" value
 * @method DatRueUnidadEducativaTramite setClaTurno()              Sets the current record's "ClaTurno" value
 * @method DatRueUnidadEducativaTramite setDatRueCursoTramite()    Sets the current record's "DatRueCursoTramite" collection
 * @method DatRueUnidadEducativaTramite setDatRueCursoTramite8()   Sets the current record's "DatRueCursoTramite_8" collection
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatRueUnidadEducativaTramite extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_rue_unidad_educativa_tramite');
        $this->hasColumn('formulario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('gestion_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '2',
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
        $this->hasColumn('desc_unidad_educativa', 'string', 65, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '65',
             ));
        $this->hasColumn('cod_le', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
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
        $this->hasColumn('zona', 'string', 65, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '65',
             ));
        $this->hasColumn('direccion', 'string', 65, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '65',
             ));
        $this->hasColumn('telefono1', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('telefono2', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('referencia_telefono2', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('fax', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('email', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('casilla', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '45',
             ));
        $this->hasColumn('ci_director', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('director', 'string', 80, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '80',
             ));
        $this->hasColumn('item_director', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('turno_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('fecha_consolidacion', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('cod_org_curr_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('cod_dependencia_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('cod_convenio_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('cod_distrito_id', 'integer', 4, array(
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
        $this->hasOne('ClaConvenios', array(
             'local' => 'cod_convenio_id',
             'foreign' => 'cod_convenios'));

        $this->hasOne('ClaDependencia', array(
             'local' => 'cod_dependencia_id',
             'foreign' => 'cod_dependencia'));

        $this->hasOne('DatSieDistrito', array(
             'local' => 'cod_distrito_id',
             'foreign' => 'cod_distrito'));

        $this->hasOne('DatSieDistrito as DatSieDistrito_4', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));

        $this->hasOne('ClaLocalidad', array(
             'local' => 'localidad_id',
             'foreign' => 'id_localidad'));

        $this->hasOne('ClaLocalidad as ClaLocalidad_6', array(
             'local' => 'canton_id',
             'foreign' => 'canton_id'));

        $this->hasOne('ClaLocalidad as ClaLocalidad_7', array(
             'local' => 'seccion_id',
             'foreign' => 'seccion_id'));

        $this->hasOne('ClaLocalidad as ClaLocalidad_8', array(
             'local' => 'provincia_id',
             'foreign' => 'provincia_id'));

        $this->hasOne('ClaLocalidad as ClaLocalidad_9', array(
             'local' => 'departamento_id',
             'foreign' => 'departamento_id'));

        $this->hasOne('ClaOrgCurricular', array(
             'local' => 'cod_org_curr_id',
             'foreign' => 'cod_org_curr'));

        $this->hasOne('DatRueFormularios', array(
             'local' => 'formulario_id',
             'foreign' => 'id_formulario'));

        $this->hasOne('DatRueFormularios as DatRueFormularios_12', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));

        $this->hasOne('ClaTurno', array(
             'local' => 'turno_id',
             'foreign' => 'id_turno'));

        $this->hasMany('DatRueCursoTramite', array(
             'local' => 'formulario_id',
             'foreign' => 'formulario_id'));

        $this->hasMany('DatRueCursoTramite as DatRueCursoTramite_8', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));
    }
}