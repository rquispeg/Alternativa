<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DatEdaDocentes', 'doctrine');

/**
 * BaseDatEdaDocentes
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $evento_id
 * @property string $cod_ue_id
 * @property integer $gestion_id
 * @property integer $estado_id
 * @property integer $varones
 * @property integer $mujeres
 * @property ClaEdaEstado $ClaEdaEstado
 * @property DatEdaEvento $DatEdaEvento
 * @property DatEdaEvento $DatEdaEvento_3
 * @property DatEdaEvento $DatEdaEvento_4
 * 
 * @method integer        getEventoId()       Returns the current record's "evento_id" value
 * @method string         getCodUeId()        Returns the current record's "cod_ue_id" value
 * @method integer        getGestionId()      Returns the current record's "gestion_id" value
 * @method integer        getEstadoId()       Returns the current record's "estado_id" value
 * @method integer        getVarones()        Returns the current record's "varones" value
 * @method integer        getMujeres()        Returns the current record's "mujeres" value
 * @method ClaEdaEstado   getClaEdaEstado()   Returns the current record's "ClaEdaEstado" value
 * @method DatEdaEvento   getDatEdaEvento()   Returns the current record's "DatEdaEvento" value
 * @method DatEdaEvento   getDatEdaEvento3()  Returns the current record's "DatEdaEvento_3" value
 * @method DatEdaEvento   getDatEdaEvento4()  Returns the current record's "DatEdaEvento_4" value
 * @method DatEdaDocentes setEventoId()       Sets the current record's "evento_id" value
 * @method DatEdaDocentes setCodUeId()        Sets the current record's "cod_ue_id" value
 * @method DatEdaDocentes setGestionId()      Sets the current record's "gestion_id" value
 * @method DatEdaDocentes setEstadoId()       Sets the current record's "estado_id" value
 * @method DatEdaDocentes setVarones()        Sets the current record's "varones" value
 * @method DatEdaDocentes setMujeres()        Sets the current record's "mujeres" value
 * @method DatEdaDocentes setClaEdaEstado()   Sets the current record's "ClaEdaEstado" value
 * @method DatEdaDocentes setDatEdaEvento()   Sets the current record's "DatEdaEvento" value
 * @method DatEdaDocentes setDatEdaEvento3()  Sets the current record's "DatEdaEvento_3" value
 * @method DatEdaDocentes setDatEdaEvento4()  Sets the current record's "DatEdaEvento_4" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatEdaDocentes extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_eda_docentes');
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
        $this->hasColumn('estado_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('varones', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('mujeres', 'integer', 4, array(
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
        $this->hasOne('ClaEdaEstado', array(
             'local' => 'estado_id',
             'foreign' => 'id_estado'));

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