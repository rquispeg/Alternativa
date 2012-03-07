<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AuxDplLegalizacion', 'doctrine');

/**
 * BaseAuxDplLegalizacion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $inscripcion_id
 * @property integer $gestion_id
 * @property timestamp $fecha_de_ingreso
 * @property string $observacion
 * @property integer $usuario_entrada_id
 * @property integer $usuario_salida_id
 * @property integer $proceso_id
 * @property ClaTraProceso $ClaTraProceso
 * @property DatRdeInscripcion $DatRdeInscripcion
 * @property DatRdeInscripcion $DatRdeInscripcion_3
 * @property DatUsuUsuario $DatUsuUsuario
 * @property DatUsuUsuario $DatUsuUsuario_5
 * 
 * @method integer            getInscripcionId()       Returns the current record's "inscripcion_id" value
 * @method integer            getGestionId()           Returns the current record's "gestion_id" value
 * @method timestamp          getFechaDeIngreso()      Returns the current record's "fecha_de_ingreso" value
 * @method string             getObservacion()         Returns the current record's "observacion" value
 * @method integer            getUsuarioEntradaId()    Returns the current record's "usuario_entrada_id" value
 * @method integer            getUsuarioSalidaId()     Returns the current record's "usuario_salida_id" value
 * @method integer            getProcesoId()           Returns the current record's "proceso_id" value
 * @method ClaTraProceso      getClaTraProceso()       Returns the current record's "ClaTraProceso" value
 * @method DatRdeInscripcion  getDatRdeInscripcion()   Returns the current record's "DatRdeInscripcion" value
 * @method DatRdeInscripcion  getDatRdeInscripcion3()  Returns the current record's "DatRdeInscripcion_3" value
 * @method DatUsuUsuario      getDatUsuUsuario()       Returns the current record's "DatUsuUsuario" value
 * @method DatUsuUsuario      getDatUsuUsuario5()      Returns the current record's "DatUsuUsuario_5" value
 * @method AuxDplLegalizacion setInscripcionId()       Sets the current record's "inscripcion_id" value
 * @method AuxDplLegalizacion setGestionId()           Sets the current record's "gestion_id" value
 * @method AuxDplLegalizacion setFechaDeIngreso()      Sets the current record's "fecha_de_ingreso" value
 * @method AuxDplLegalizacion setObservacion()         Sets the current record's "observacion" value
 * @method AuxDplLegalizacion setUsuarioEntradaId()    Sets the current record's "usuario_entrada_id" value
 * @method AuxDplLegalizacion setUsuarioSalidaId()     Sets the current record's "usuario_salida_id" value
 * @method AuxDplLegalizacion setProcesoId()           Sets the current record's "proceso_id" value
 * @method AuxDplLegalizacion setClaTraProceso()       Sets the current record's "ClaTraProceso" value
 * @method AuxDplLegalizacion setDatRdeInscripcion()   Sets the current record's "DatRdeInscripcion" value
 * @method AuxDplLegalizacion setDatRdeInscripcion3()  Sets the current record's "DatRdeInscripcion_3" value
 * @method AuxDplLegalizacion setDatUsuUsuario()       Sets the current record's "DatUsuUsuario" value
 * @method AuxDplLegalizacion setDatUsuUsuario5()      Sets the current record's "DatUsuUsuario_5" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseAuxDplLegalizacion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('aux_dpl_legalizacion');
        $this->hasColumn('inscripcion_id', 'integer', 4, array(
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
        $this->hasColumn('fecha_de_ingreso', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('observacion', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '50',
             ));
        $this->hasColumn('usuario_entrada_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('usuario_salida_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('proceso_id', 'integer', 4, array(
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
        $this->hasOne('ClaTraProceso', array(
             'local' => 'proceso_id',
             'foreign' => 'id_proceso'));

        $this->hasOne('DatRdeInscripcion', array(
             'local' => 'inscripcion_id',
             'foreign' => 'id_inscripcion'));

        $this->hasOne('DatRdeInscripcion as DatRdeInscripcion_3', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));

        $this->hasOne('DatUsuUsuario', array(
             'local' => 'usuario_entrada_id',
             'foreign' => 'id'));

        $this->hasOne('DatUsuUsuario as DatUsuUsuario_5', array(
             'local' => 'usuario_salida_id',
             'foreign' => 'id'));
    }
}