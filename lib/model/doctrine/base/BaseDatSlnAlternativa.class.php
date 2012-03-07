<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DatSlnAlternativa', 'doctrine');

/**
 * BaseDatSlnAlternativa
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $gestion_id
 * @property string $cod_ue_id
 * @property integer $curso_oferta_id
 * @property integer $inscripcion_id
 * @property integer $participacion
 * @property integer $aplicacion
 * @property integer $conocimientos
 * @property integer $promedio_anual
 * @property integer $observacion
 * @property DatRdeInscripcion $DatRdeInscripcion
 * @property DatRdeInscripcion $DatRdeInscripcion_2
 * @property DatSlnCursoOferta $DatSlnCursoOferta
 * @property DatSlnCursoOferta $DatSlnCursoOferta_4
 * @property DatSlnCursoOferta $DatSlnCursoOferta_5
 * 
 * @method integer           getGestionId()           Returns the current record's "gestion_id" value
 * @method string            getCodUeId()             Returns the current record's "cod_ue_id" value
 * @method integer           getCursoOfertaId()       Returns the current record's "curso_oferta_id" value
 * @method integer           getInscripcionId()       Returns the current record's "inscripcion_id" value
 * @method integer           getParticipacion()       Returns the current record's "participacion" value
 * @method integer           getAplicacion()          Returns the current record's "aplicacion" value
 * @method integer           getConocimientos()       Returns the current record's "conocimientos" value
 * @method integer           getPromedioAnual()       Returns the current record's "promedio_anual" value
 * @method integer           getObservacion()         Returns the current record's "observacion" value
 * @method DatRdeInscripcion getDatRdeInscripcion()   Returns the current record's "DatRdeInscripcion" value
 * @method DatRdeInscripcion getDatRdeInscripcion2()  Returns the current record's "DatRdeInscripcion_2" value
 * @method DatSlnCursoOferta getDatSlnCursoOferta()   Returns the current record's "DatSlnCursoOferta" value
 * @method DatSlnCursoOferta getDatSlnCursoOferta4()  Returns the current record's "DatSlnCursoOferta_4" value
 * @method DatSlnCursoOferta getDatSlnCursoOferta5()  Returns the current record's "DatSlnCursoOferta_5" value
 * @method DatSlnAlternativa setGestionId()           Sets the current record's "gestion_id" value
 * @method DatSlnAlternativa setCodUeId()             Sets the current record's "cod_ue_id" value
 * @method DatSlnAlternativa setCursoOfertaId()       Sets the current record's "curso_oferta_id" value
 * @method DatSlnAlternativa setInscripcionId()       Sets the current record's "inscripcion_id" value
 * @method DatSlnAlternativa setParticipacion()       Sets the current record's "participacion" value
 * @method DatSlnAlternativa setAplicacion()          Sets the current record's "aplicacion" value
 * @method DatSlnAlternativa setConocimientos()       Sets the current record's "conocimientos" value
 * @method DatSlnAlternativa setPromedioAnual()       Sets the current record's "promedio_anual" value
 * @method DatSlnAlternativa setObservacion()         Sets the current record's "observacion" value
 * @method DatSlnAlternativa setDatRdeInscripcion()   Sets the current record's "DatRdeInscripcion" value
 * @method DatSlnAlternativa setDatRdeInscripcion2()  Sets the current record's "DatRdeInscripcion_2" value
 * @method DatSlnAlternativa setDatSlnCursoOferta()   Sets the current record's "DatSlnCursoOferta" value
 * @method DatSlnAlternativa setDatSlnCursoOferta4()  Sets the current record's "DatSlnCursoOferta_4" value
 * @method DatSlnAlternativa setDatSlnCursoOferta5()  Sets the current record's "DatSlnCursoOferta_5" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatSlnAlternativa extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_sln_alternativa');
        $this->hasColumn('gestion_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('cod_ue_id', 'string', 8, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '8',
             ));
        $this->hasColumn('curso_oferta_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('inscripcion_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('participacion', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('aplicacion', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('conocimientos', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('promedio_anual', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('observacion', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DatRdeInscripcion', array(
             'local' => 'inscripcion_id',
             'foreign' => 'id_inscripcion'));

        $this->hasOne('DatRdeInscripcion as DatRdeInscripcion_2', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));

        $this->hasOne('DatSlnCursoOferta', array(
             'local' => 'curso_oferta_id',
             'foreign' => 'id_curso_oferta'));

        $this->hasOne('DatSlnCursoOferta as DatSlnCursoOferta_4', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));

        $this->hasOne('DatSlnCursoOferta as DatSlnCursoOferta_5', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));
    }
}