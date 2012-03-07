<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DatEdaEvento', 'doctrine');

/**
 * BaseDatEdaEvento
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_evento
 * @property string $cod_ue_id
 * @property integer $gestion_id
 * @property integer $tipo_evento_id
 * @property date $fecha_inicio_evento
 * @property integer $cargo_id
 * @property string $telefono_referencia
 * @property integer $acceso
 * @property integer $funcionamiento
 * @property integer $albergue
 * @property integer $estado_desastre_id
 * @property integer $agua
 * @property integer $banios
 * @property integer $danio_materiales
 * @property integer $docentes_continuan
 * @property integer $docentes_requieren
 * @property timestamp $fecha_relevamiento
 * @property ClaCargo $ClaCargo
 * @property ClaEdaEvento $ClaEdaEvento
 * @property ClaEdaEstadoDesastre $ClaEdaEstadoDesastre
 * @property ClaGestion $ClaGestion
 * @property DatRueUnidadEducativa $DatRueUnidadEducativa
 * @property Doctrine_Collection $DatEdaDocentes
 * @property Doctrine_Collection $DatEdaDocentes_3
 * @property Doctrine_Collection $DatEdaDocentes_4
 * @property Doctrine_Collection $DatEdaEquipamiento
 * @property Doctrine_Collection $DatEdaEquipamiento_4
 * @property Doctrine_Collection $DatEdaEquipamiento_5
 * @property Doctrine_Collection $DatEdaMaterial
 * @property Doctrine_Collection $DatEdaMaterial_3
 * @property Doctrine_Collection $DatEdaMaterial_4
 * @property Doctrine_Collection $DatEdaMatricula
 * @property Doctrine_Collection $DatEdaMatricula_3
 * @property Doctrine_Collection $DatEdaMatricula_4
 * @property Doctrine_Collection $DatEdaMobiliario
 * @property Doctrine_Collection $DatEdaMobiliario_4
 * @property Doctrine_Collection $DatEdaMobiliario_5
 * 
 * @method integer               getIdEvento()              Returns the current record's "id_evento" value
 * @method string                getCodUeId()               Returns the current record's "cod_ue_id" value
 * @method integer               getGestionId()             Returns the current record's "gestion_id" value
 * @method integer               getTipoEventoId()          Returns the current record's "tipo_evento_id" value
 * @method date                  getFechaInicioEvento()     Returns the current record's "fecha_inicio_evento" value
 * @method integer               getCargoId()               Returns the current record's "cargo_id" value
 * @method string                getTelefonoReferencia()    Returns the current record's "telefono_referencia" value
 * @method integer               getAcceso()                Returns the current record's "acceso" value
 * @method integer               getFuncionamiento()        Returns the current record's "funcionamiento" value
 * @method integer               getAlbergue()              Returns the current record's "albergue" value
 * @method integer               getEstadoDesastreId()      Returns the current record's "estado_desastre_id" value
 * @method integer               getAgua()                  Returns the current record's "agua" value
 * @method integer               getBanios()                Returns the current record's "banios" value
 * @method integer               getDanioMateriales()       Returns the current record's "danio_materiales" value
 * @method integer               getDocentesContinuan()     Returns the current record's "docentes_continuan" value
 * @method integer               getDocentesRequieren()     Returns the current record's "docentes_requieren" value
 * @method timestamp             getFechaRelevamiento()     Returns the current record's "fecha_relevamiento" value
 * @method ClaCargo              getClaCargo()              Returns the current record's "ClaCargo" value
 * @method ClaEdaEvento          getClaEdaEvento()          Returns the current record's "ClaEdaEvento" value
 * @method ClaEdaEstadoDesastre  getClaEdaEstadoDesastre()  Returns the current record's "ClaEdaEstadoDesastre" value
 * @method ClaGestion            getClaGestion()            Returns the current record's "ClaGestion" value
 * @method DatRueUnidadEducativa getDatRueUnidadEducativa() Returns the current record's "DatRueUnidadEducativa" value
 * @method Doctrine_Collection   getDatEdaDocentes()        Returns the current record's "DatEdaDocentes" collection
 * @method Doctrine_Collection   getDatEdaDocentes3()       Returns the current record's "DatEdaDocentes_3" collection
 * @method Doctrine_Collection   getDatEdaDocentes4()       Returns the current record's "DatEdaDocentes_4" collection
 * @method Doctrine_Collection   getDatEdaEquipamiento()    Returns the current record's "DatEdaEquipamiento" collection
 * @method Doctrine_Collection   getDatEdaEquipamiento4()   Returns the current record's "DatEdaEquipamiento_4" collection
 * @method Doctrine_Collection   getDatEdaEquipamiento5()   Returns the current record's "DatEdaEquipamiento_5" collection
 * @method Doctrine_Collection   getDatEdaMaterial()        Returns the current record's "DatEdaMaterial" collection
 * @method Doctrine_Collection   getDatEdaMaterial3()       Returns the current record's "DatEdaMaterial_3" collection
 * @method Doctrine_Collection   getDatEdaMaterial4()       Returns the current record's "DatEdaMaterial_4" collection
 * @method Doctrine_Collection   getDatEdaMatricula()       Returns the current record's "DatEdaMatricula" collection
 * @method Doctrine_Collection   getDatEdaMatricula3()      Returns the current record's "DatEdaMatricula_3" collection
 * @method Doctrine_Collection   getDatEdaMatricula4()      Returns the current record's "DatEdaMatricula_4" collection
 * @method Doctrine_Collection   getDatEdaMobiliario()      Returns the current record's "DatEdaMobiliario" collection
 * @method Doctrine_Collection   getDatEdaMobiliario4()     Returns the current record's "DatEdaMobiliario_4" collection
 * @method Doctrine_Collection   getDatEdaMobiliario5()     Returns the current record's "DatEdaMobiliario_5" collection
 * @method DatEdaEvento          setIdEvento()              Sets the current record's "id_evento" value
 * @method DatEdaEvento          setCodUeId()               Sets the current record's "cod_ue_id" value
 * @method DatEdaEvento          setGestionId()             Sets the current record's "gestion_id" value
 * @method DatEdaEvento          setTipoEventoId()          Sets the current record's "tipo_evento_id" value
 * @method DatEdaEvento          setFechaInicioEvento()     Sets the current record's "fecha_inicio_evento" value
 * @method DatEdaEvento          setCargoId()               Sets the current record's "cargo_id" value
 * @method DatEdaEvento          setTelefonoReferencia()    Sets the current record's "telefono_referencia" value
 * @method DatEdaEvento          setAcceso()                Sets the current record's "acceso" value
 * @method DatEdaEvento          setFuncionamiento()        Sets the current record's "funcionamiento" value
 * @method DatEdaEvento          setAlbergue()              Sets the current record's "albergue" value
 * @method DatEdaEvento          setEstadoDesastreId()      Sets the current record's "estado_desastre_id" value
 * @method DatEdaEvento          setAgua()                  Sets the current record's "agua" value
 * @method DatEdaEvento          setBanios()                Sets the current record's "banios" value
 * @method DatEdaEvento          setDanioMateriales()       Sets the current record's "danio_materiales" value
 * @method DatEdaEvento          setDocentesContinuan()     Sets the current record's "docentes_continuan" value
 * @method DatEdaEvento          setDocentesRequieren()     Sets the current record's "docentes_requieren" value
 * @method DatEdaEvento          setFechaRelevamiento()     Sets the current record's "fecha_relevamiento" value
 * @method DatEdaEvento          setClaCargo()              Sets the current record's "ClaCargo" value
 * @method DatEdaEvento          setClaEdaEvento()          Sets the current record's "ClaEdaEvento" value
 * @method DatEdaEvento          setClaEdaEstadoDesastre()  Sets the current record's "ClaEdaEstadoDesastre" value
 * @method DatEdaEvento          setClaGestion()            Sets the current record's "ClaGestion" value
 * @method DatEdaEvento          setDatRueUnidadEducativa() Sets the current record's "DatRueUnidadEducativa" value
 * @method DatEdaEvento          setDatEdaDocentes()        Sets the current record's "DatEdaDocentes" collection
 * @method DatEdaEvento          setDatEdaDocentes3()       Sets the current record's "DatEdaDocentes_3" collection
 * @method DatEdaEvento          setDatEdaDocentes4()       Sets the current record's "DatEdaDocentes_4" collection
 * @method DatEdaEvento          setDatEdaEquipamiento()    Sets the current record's "DatEdaEquipamiento" collection
 * @method DatEdaEvento          setDatEdaEquipamiento4()   Sets the current record's "DatEdaEquipamiento_4" collection
 * @method DatEdaEvento          setDatEdaEquipamiento5()   Sets the current record's "DatEdaEquipamiento_5" collection
 * @method DatEdaEvento          setDatEdaMaterial()        Sets the current record's "DatEdaMaterial" collection
 * @method DatEdaEvento          setDatEdaMaterial3()       Sets the current record's "DatEdaMaterial_3" collection
 * @method DatEdaEvento          setDatEdaMaterial4()       Sets the current record's "DatEdaMaterial_4" collection
 * @method DatEdaEvento          setDatEdaMatricula()       Sets the current record's "DatEdaMatricula" collection
 * @method DatEdaEvento          setDatEdaMatricula3()      Sets the current record's "DatEdaMatricula_3" collection
 * @method DatEdaEvento          setDatEdaMatricula4()      Sets the current record's "DatEdaMatricula_4" collection
 * @method DatEdaEvento          setDatEdaMobiliario()      Sets the current record's "DatEdaMobiliario" collection
 * @method DatEdaEvento          setDatEdaMobiliario4()     Sets the current record's "DatEdaMobiliario_4" collection
 * @method DatEdaEvento          setDatEdaMobiliario5()     Sets the current record's "DatEdaMobiliario_5" collection
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatEdaEvento extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_eda_evento');
        $this->hasColumn('id_evento', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
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
        $this->hasColumn('tipo_evento_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('fecha_inicio_evento', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('cargo_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('telefono_referencia', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('acceso', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('funcionamiento', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('albergue', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('estado_desastre_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('agua', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('banios', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('danio_materiales', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('docentes_continuan', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('docentes_requieren', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('fecha_relevamiento', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ClaCargo', array(
             'local' => 'cargo_id',
             'foreign' => 'id_cargo'));

        $this->hasOne('ClaEdaEvento', array(
             'local' => 'tipo_evento_id',
             'foreign' => 'id_tipo_evento'));

        $this->hasOne('ClaEdaEstadoDesastre', array(
             'local' => 'estado_desastre_id',
             'foreign' => 'id_estado_desastre'));

        $this->hasOne('ClaGestion', array(
             'local' => 'gestion_id',
             'foreign' => 'id_gestion'));

        $this->hasOne('DatRueUnidadEducativa', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue'));

        $this->hasMany('DatEdaDocentes', array(
             'local' => 'id_evento',
             'foreign' => 'evento_id'));

        $this->hasMany('DatEdaDocentes as DatEdaDocentes_3', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('DatEdaDocentes as DatEdaDocentes_4', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));

        $this->hasMany('DatEdaEquipamiento', array(
             'local' => 'id_evento',
             'foreign' => 'evento_id'));

        $this->hasMany('DatEdaEquipamiento as DatEdaEquipamiento_4', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('DatEdaEquipamiento as DatEdaEquipamiento_5', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));

        $this->hasMany('DatEdaMaterial', array(
             'local' => 'id_evento',
             'foreign' => 'evento_id'));

        $this->hasMany('DatEdaMaterial as DatEdaMaterial_3', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('DatEdaMaterial as DatEdaMaterial_4', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));

        $this->hasMany('DatEdaMatricula', array(
             'local' => 'id_evento',
             'foreign' => 'evento_id'));

        $this->hasMany('DatEdaMatricula as DatEdaMatricula_3', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('DatEdaMatricula as DatEdaMatricula_4', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));

        $this->hasMany('DatEdaMobiliario', array(
             'local' => 'id_evento',
             'foreign' => 'evento_id'));

        $this->hasMany('DatEdaMobiliario as DatEdaMobiliario_4', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('DatEdaMobiliario as DatEdaMobiliario_5', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));
    }
}