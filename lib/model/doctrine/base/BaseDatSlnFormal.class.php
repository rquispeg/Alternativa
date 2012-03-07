<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DatSlnFormal', 'doctrine');

/**
 * BaseDatSlnFormal
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $gestion_id
 * @property string $cod_ue_id
 * @property integer $curso_oferta_id
 * @property integer $inscripcion_id
 * @property integer $primer_trimestre
 * @property integer $segundo_trimestre
 * @property integer $tercer_trimestre
 * @property integer $promedio_anual
 * @property integer $reforzamiento
 * @property integer $promedio_final
 * @property string $primer_eval
 * @property string $segundo_eval
 * @property string $tercer_eval
 * @property integer $primer_dias_trab
 * @property integer $segundo_dias_trab
 * @property integer $tercer_dias_trab
 * @property integer $reforzamiento_dias_trab
 * @property integer $primer_faltas_licencia
 * @property integer $segundo_faltas_licencia
 * @property integer $tecer_faltas_licencia
 * @property integer $primer_faltas_sin_licencia
 * @property integer $segundo_faltas_sin_licencia
 * @property integer $tercer_faltas_sin_licencia
 * @property timestamp $fecha_actualizacion
 * @property integer $usuario_id
 * @property DatRdeInscripcion $DatRdeInscripcion
 * @property DatRdeInscripcion $DatRdeInscripcion_2
 * @property DatSlnCursoOferta $DatSlnCursoOferta
 * @property DatSlnCursoOferta $DatSlnCursoOferta_4
 * @property DatSlnCursoOferta $DatSlnCursoOferta_5
 * 
 * @method integer           getGestionId()                   Returns the current record's "gestion_id" value
 * @method string            getCodUeId()                     Returns the current record's "cod_ue_id" value
 * @method integer           getCursoOfertaId()               Returns the current record's "curso_oferta_id" value
 * @method integer           getInscripcionId()               Returns the current record's "inscripcion_id" value
 * @method integer           getPrimerTrimestre()             Returns the current record's "primer_trimestre" value
 * @method integer           getSegundoTrimestre()            Returns the current record's "segundo_trimestre" value
 * @method integer           getTercerTrimestre()             Returns the current record's "tercer_trimestre" value
 * @method integer           getPromedioAnual()               Returns the current record's "promedio_anual" value
 * @method integer           getReforzamiento()               Returns the current record's "reforzamiento" value
 * @method integer           getPromedioFinal()               Returns the current record's "promedio_final" value
 * @method string            getPrimerEval()                  Returns the current record's "primer_eval" value
 * @method string            getSegundoEval()                 Returns the current record's "segundo_eval" value
 * @method string            getTercerEval()                  Returns the current record's "tercer_eval" value
 * @method integer           getPrimerDiasTrab()              Returns the current record's "primer_dias_trab" value
 * @method integer           getSegundoDiasTrab()             Returns the current record's "segundo_dias_trab" value
 * @method integer           getTercerDiasTrab()              Returns the current record's "tercer_dias_trab" value
 * @method integer           getReforzamientoDiasTrab()       Returns the current record's "reforzamiento_dias_trab" value
 * @method integer           getPrimerFaltasLicencia()        Returns the current record's "primer_faltas_licencia" value
 * @method integer           getSegundoFaltasLicencia()       Returns the current record's "segundo_faltas_licencia" value
 * @method integer           getTecerFaltasLicencia()         Returns the current record's "tecer_faltas_licencia" value
 * @method integer           getPrimerFaltasSinLicencia()     Returns the current record's "primer_faltas_sin_licencia" value
 * @method integer           getSegundoFaltasSinLicencia()    Returns the current record's "segundo_faltas_sin_licencia" value
 * @method integer           getTercerFaltasSinLicencia()     Returns the current record's "tercer_faltas_sin_licencia" value
 * @method timestamp         getFechaActualizacion()          Returns the current record's "fecha_actualizacion" value
 * @method integer           getUsuarioId()                   Returns the current record's "usuario_id" value
 * @method DatRdeInscripcion getDatRdeInscripcion()           Returns the current record's "DatRdeInscripcion" value
 * @method DatRdeInscripcion getDatRdeInscripcion2()          Returns the current record's "DatRdeInscripcion_2" value
 * @method DatSlnCursoOferta getDatSlnCursoOferta()           Returns the current record's "DatSlnCursoOferta" value
 * @method DatSlnCursoOferta getDatSlnCursoOferta4()          Returns the current record's "DatSlnCursoOferta_4" value
 * @method DatSlnCursoOferta getDatSlnCursoOferta5()          Returns the current record's "DatSlnCursoOferta_5" value
 * @method DatSlnFormal      setGestionId()                   Sets the current record's "gestion_id" value
 * @method DatSlnFormal      setCodUeId()                     Sets the current record's "cod_ue_id" value
 * @method DatSlnFormal      setCursoOfertaId()               Sets the current record's "curso_oferta_id" value
 * @method DatSlnFormal      setInscripcionId()               Sets the current record's "inscripcion_id" value
 * @method DatSlnFormal      setPrimerTrimestre()             Sets the current record's "primer_trimestre" value
 * @method DatSlnFormal      setSegundoTrimestre()            Sets the current record's "segundo_trimestre" value
 * @method DatSlnFormal      setTercerTrimestre()             Sets the current record's "tercer_trimestre" value
 * @method DatSlnFormal      setPromedioAnual()               Sets the current record's "promedio_anual" value
 * @method DatSlnFormal      setReforzamiento()               Sets the current record's "reforzamiento" value
 * @method DatSlnFormal      setPromedioFinal()               Sets the current record's "promedio_final" value
 * @method DatSlnFormal      setPrimerEval()                  Sets the current record's "primer_eval" value
 * @method DatSlnFormal      setSegundoEval()                 Sets the current record's "segundo_eval" value
 * @method DatSlnFormal      setTercerEval()                  Sets the current record's "tercer_eval" value
 * @method DatSlnFormal      setPrimerDiasTrab()              Sets the current record's "primer_dias_trab" value
 * @method DatSlnFormal      setSegundoDiasTrab()             Sets the current record's "segundo_dias_trab" value
 * @method DatSlnFormal      setTercerDiasTrab()              Sets the current record's "tercer_dias_trab" value
 * @method DatSlnFormal      setReforzamientoDiasTrab()       Sets the current record's "reforzamiento_dias_trab" value
 * @method DatSlnFormal      setPrimerFaltasLicencia()        Sets the current record's "primer_faltas_licencia" value
 * @method DatSlnFormal      setSegundoFaltasLicencia()       Sets the current record's "segundo_faltas_licencia" value
 * @method DatSlnFormal      setTecerFaltasLicencia()         Sets the current record's "tecer_faltas_licencia" value
 * @method DatSlnFormal      setPrimerFaltasSinLicencia()     Sets the current record's "primer_faltas_sin_licencia" value
 * @method DatSlnFormal      setSegundoFaltasSinLicencia()    Sets the current record's "segundo_faltas_sin_licencia" value
 * @method DatSlnFormal      setTercerFaltasSinLicencia()     Sets the current record's "tercer_faltas_sin_licencia" value
 * @method DatSlnFormal      setFechaActualizacion()          Sets the current record's "fecha_actualizacion" value
 * @method DatSlnFormal      setUsuarioId()                   Sets the current record's "usuario_id" value
 * @method DatSlnFormal      setDatRdeInscripcion()           Sets the current record's "DatRdeInscripcion" value
 * @method DatSlnFormal      setDatRdeInscripcion2()          Sets the current record's "DatRdeInscripcion_2" value
 * @method DatSlnFormal      setDatSlnCursoOferta()           Sets the current record's "DatSlnCursoOferta" value
 * @method DatSlnFormal      setDatSlnCursoOferta4()          Sets the current record's "DatSlnCursoOferta_4" value
 * @method DatSlnFormal      setDatSlnCursoOferta5()          Sets the current record's "DatSlnCursoOferta_5" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatSlnFormal extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_sln_formal');
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
        $this->hasColumn('primer_trimestre', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('segundo_trimestre', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('tercer_trimestre', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('promedio_anual', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('reforzamiento', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('promedio_final', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('primer_eval', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '200',
             ));
        $this->hasColumn('segundo_eval', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '200',
             ));
        $this->hasColumn('tercer_eval', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '200',
             ));
        $this->hasColumn('primer_dias_trab', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('segundo_dias_trab', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('tercer_dias_trab', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('reforzamiento_dias_trab', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('primer_faltas_licencia', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('segundo_faltas_licencia', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('tecer_faltas_licencia', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('primer_faltas_sin_licencia', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('segundo_faltas_sin_licencia', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('tercer_faltas_sin_licencia', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('fecha_actualizacion', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '25',
             ));
        $this->hasColumn('usuario_id', 'integer', 4, array(
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