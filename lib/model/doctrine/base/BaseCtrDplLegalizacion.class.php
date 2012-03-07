<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('CtrDplLegalizacion', 'doctrine');

/**
 * BaseCtrDplLegalizacion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $serie_id
 * @property string $serie_alfanumerico
 * @property integer $gestion_id
 * @property integer $inscripcion_id
 * @property integer $usuario_id
 * @property timestamp $fecha_legalizacion
 * @property string $id_legalizacion
 * @property CtrDplEntregado $CtrDplEntregado
 * @property CtrDplEntregado $CtrDplEntregado_2
 * @property CtrDplEntregado $CtrDplEntregado_3
 * @property CtrDplEntregado $CtrDplEntregado_4
 * @property DatUsuUsuario $DatUsuUsuario
 * 
 * @method integer            getSerieId()            Returns the current record's "serie_id" value
 * @method string             getSerieAlfanumerico()  Returns the current record's "serie_alfanumerico" value
 * @method integer            getGestionId()          Returns the current record's "gestion_id" value
 * @method integer            getInscripcionId()      Returns the current record's "inscripcion_id" value
 * @method integer            getUsuarioId()          Returns the current record's "usuario_id" value
 * @method timestamp          getFechaLegalizacion()  Returns the current record's "fecha_legalizacion" value
 * @method string             getIdLegalizacion()     Returns the current record's "id_legalizacion" value
 * @method CtrDplEntregado    getCtrDplEntregado()    Returns the current record's "CtrDplEntregado" value
 * @method CtrDplEntregado    getCtrDplEntregado2()   Returns the current record's "CtrDplEntregado_2" value
 * @method CtrDplEntregado    getCtrDplEntregado3()   Returns the current record's "CtrDplEntregado_3" value
 * @method CtrDplEntregado    getCtrDplEntregado4()   Returns the current record's "CtrDplEntregado_4" value
 * @method DatUsuUsuario      getDatUsuUsuario()      Returns the current record's "DatUsuUsuario" value
 * @method CtrDplLegalizacion setSerieId()            Sets the current record's "serie_id" value
 * @method CtrDplLegalizacion setSerieAlfanumerico()  Sets the current record's "serie_alfanumerico" value
 * @method CtrDplLegalizacion setGestionId()          Sets the current record's "gestion_id" value
 * @method CtrDplLegalizacion setInscripcionId()      Sets the current record's "inscripcion_id" value
 * @method CtrDplLegalizacion setUsuarioId()          Sets the current record's "usuario_id" value
 * @method CtrDplLegalizacion setFechaLegalizacion()  Sets the current record's "fecha_legalizacion" value
 * @method CtrDplLegalizacion setIdLegalizacion()     Sets the current record's "id_legalizacion" value
 * @method CtrDplLegalizacion setCtrDplEntregado()    Sets the current record's "CtrDplEntregado" value
 * @method CtrDplLegalizacion setCtrDplEntregado2()   Sets the current record's "CtrDplEntregado_2" value
 * @method CtrDplLegalizacion setCtrDplEntregado3()   Sets the current record's "CtrDplEntregado_3" value
 * @method CtrDplLegalizacion setCtrDplEntregado4()   Sets the current record's "CtrDplEntregado_4" value
 * @method CtrDplLegalizacion setDatUsuUsuario()      Sets the current record's "DatUsuUsuario" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseCtrDplLegalizacion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ctr_dpl_legalizacion');
        $this->hasColumn('serie_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('serie_alfanumerico', 'string', 2, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
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
        $this->hasColumn('inscripcion_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('usuario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('fecha_legalizacion', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('id_legalizacion', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '45',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('CtrDplEntregado', array(
             'local' => 'serie_id',
             'foreign' => 'serie_id'));

        $this->hasOne('CtrDplEntregado as CtrDplEntregado_2', array(
             'local' => 'serie_alfanumerico',
             'foreign' => 'serie_alfanumerico'));

        $this->hasOne('CtrDplEntregado as CtrDplEntregado_3', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));

        $this->hasOne('CtrDplEntregado as CtrDplEntregado_4', array(
             'local' => 'inscripcion_id',
             'foreign' => 'inscripcion_id'));

        $this->hasOne('DatUsuUsuario', array(
             'local' => 'usuario_id',
             'foreign' => 'id'));
    }
}