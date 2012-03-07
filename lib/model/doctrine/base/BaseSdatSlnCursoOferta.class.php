<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('SdatSlnCursoOferta', 'doctrine');

/**
 * BaseSdatSlnCursoOferta
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_curso_oferta
 * @property string $cod_ue_id
 * @property integer $periodo_id
 * @property integer $operativo_id
 * @property integer $gestion_id
 * @property integer $sub_cea_id
 * @property integer $grado_id
 * @property integer $ciclo_id
 * @property integer $nivel_id
 * @property string $paralelo
 * @property integer $turno_id
 * @property integer $cod_asignatura_id
 * @property integer $docente_id
 * @property integer $horas
 * @property SdatSieCurso $SdatSieCurso
 * @property SdatSieCurso $SdatSieCurso_2
 * @property SdatSieCurso $SdatSieCurso_3
 * @property SdatSieCurso $SdatSieCurso_4
 * @property SdatSieCurso $SdatSieCurso_5
 * @property SdatSieCurso $SdatSieCurso_6
 * @property SdatSieCurso $SdatSieCurso_7
 * @property SdatSieCurso $SdatSieCurso_8
 * @property SdatSieCurso $SdatSieCurso_9
 * @property SdatSieCurso $SdatSieCurso_10
 * @property ClaAsignatura $ClaAsignatura
 * @property SdatSieDocente $SdatSieDocente
 * @property SdatSieDocente $SdatSieDocente_13
 * @property SdatSieDocente $SdatSieDocente_14
 * @property SdatSieDocente $SdatSieDocente_15
 * @property SdatSieDocente $SdatSieDocente_16
 * @property SdatSieDocente $SdatSieDocente_17
 * 
 * @method integer            getIdCursoOferta()     Returns the current record's "id_curso_oferta" value
 * @method string             getCodUeId()           Returns the current record's "cod_ue_id" value
 * @method integer            getPeriodoId()         Returns the current record's "periodo_id" value
 * @method integer            getOperativoId()       Returns the current record's "operativo_id" value
 * @method integer            getGestionId()         Returns the current record's "gestion_id" value
 * @method integer            getSubCeaId()          Returns the current record's "sub_cea_id" value
 * @method integer            getGradoId()           Returns the current record's "grado_id" value
 * @method integer            getCicloId()           Returns the current record's "ciclo_id" value
 * @method integer            getNivelId()           Returns the current record's "nivel_id" value
 * @method string             getParalelo()          Returns the current record's "paralelo" value
 * @method integer            getTurnoId()           Returns the current record's "turno_id" value
 * @method integer            getCodAsignaturaId()   Returns the current record's "cod_asignatura_id" value
 * @method integer            getDocenteId()         Returns the current record's "docente_id" value
 * @method integer            getHoras()             Returns the current record's "horas" value
 * @method SdatSieCurso       getSdatSieCurso()      Returns the current record's "SdatSieCurso" value
 * @method SdatSieCurso       getSdatSieCurso2()     Returns the current record's "SdatSieCurso_2" value
 * @method SdatSieCurso       getSdatSieCurso3()     Returns the current record's "SdatSieCurso_3" value
 * @method SdatSieCurso       getSdatSieCurso4()     Returns the current record's "SdatSieCurso_4" value
 * @method SdatSieCurso       getSdatSieCurso5()     Returns the current record's "SdatSieCurso_5" value
 * @method SdatSieCurso       getSdatSieCurso6()     Returns the current record's "SdatSieCurso_6" value
 * @method SdatSieCurso       getSdatSieCurso7()     Returns the current record's "SdatSieCurso_7" value
 * @method SdatSieCurso       getSdatSieCurso8()     Returns the current record's "SdatSieCurso_8" value
 * @method SdatSieCurso       getSdatSieCurso9()     Returns the current record's "SdatSieCurso_9" value
 * @method SdatSieCurso       getSdatSieCurso10()    Returns the current record's "SdatSieCurso_10" value
 * @method ClaAsignatura      getClaAsignatura()     Returns the current record's "ClaAsignatura" value
 * @method SdatSieDocente     getSdatSieDocente()    Returns the current record's "SdatSieDocente" value
 * @method SdatSieDocente     getSdatSieDocente13()  Returns the current record's "SdatSieDocente_13" value
 * @method SdatSieDocente     getSdatSieDocente14()  Returns the current record's "SdatSieDocente_14" value
 * @method SdatSieDocente     getSdatSieDocente15()  Returns the current record's "SdatSieDocente_15" value
 * @method SdatSieDocente     getSdatSieDocente16()  Returns the current record's "SdatSieDocente_16" value
 * @method SdatSieDocente     getSdatSieDocente17()  Returns the current record's "SdatSieDocente_17" value
 * @method SdatSlnCursoOferta setIdCursoOferta()     Sets the current record's "id_curso_oferta" value
 * @method SdatSlnCursoOferta setCodUeId()           Sets the current record's "cod_ue_id" value
 * @method SdatSlnCursoOferta setPeriodoId()         Sets the current record's "periodo_id" value
 * @method SdatSlnCursoOferta setOperativoId()       Sets the current record's "operativo_id" value
 * @method SdatSlnCursoOferta setGestionId()         Sets the current record's "gestion_id" value
 * @method SdatSlnCursoOferta setSubCeaId()          Sets the current record's "sub_cea_id" value
 * @method SdatSlnCursoOferta setGradoId()           Sets the current record's "grado_id" value
 * @method SdatSlnCursoOferta setCicloId()           Sets the current record's "ciclo_id" value
 * @method SdatSlnCursoOferta setNivelId()           Sets the current record's "nivel_id" value
 * @method SdatSlnCursoOferta setParalelo()          Sets the current record's "paralelo" value
 * @method SdatSlnCursoOferta setTurnoId()           Sets the current record's "turno_id" value
 * @method SdatSlnCursoOferta setCodAsignaturaId()   Sets the current record's "cod_asignatura_id" value
 * @method SdatSlnCursoOferta setDocenteId()         Sets the current record's "docente_id" value
 * @method SdatSlnCursoOferta setHoras()             Sets the current record's "horas" value
 * @method SdatSlnCursoOferta setSdatSieCurso()      Sets the current record's "SdatSieCurso" value
 * @method SdatSlnCursoOferta setSdatSieCurso2()     Sets the current record's "SdatSieCurso_2" value
 * @method SdatSlnCursoOferta setSdatSieCurso3()     Sets the current record's "SdatSieCurso_3" value
 * @method SdatSlnCursoOferta setSdatSieCurso4()     Sets the current record's "SdatSieCurso_4" value
 * @method SdatSlnCursoOferta setSdatSieCurso5()     Sets the current record's "SdatSieCurso_5" value
 * @method SdatSlnCursoOferta setSdatSieCurso6()     Sets the current record's "SdatSieCurso_6" value
 * @method SdatSlnCursoOferta setSdatSieCurso7()     Sets the current record's "SdatSieCurso_7" value
 * @method SdatSlnCursoOferta setSdatSieCurso8()     Sets the current record's "SdatSieCurso_8" value
 * @method SdatSlnCursoOferta setSdatSieCurso9()     Sets the current record's "SdatSieCurso_9" value
 * @method SdatSlnCursoOferta setSdatSieCurso10()    Sets the current record's "SdatSieCurso_10" value
 * @method SdatSlnCursoOferta setClaAsignatura()     Sets the current record's "ClaAsignatura" value
 * @method SdatSlnCursoOferta setSdatSieDocente()    Sets the current record's "SdatSieDocente" value
 * @method SdatSlnCursoOferta setSdatSieDocente13()  Sets the current record's "SdatSieDocente_13" value
 * @method SdatSlnCursoOferta setSdatSieDocente14()  Sets the current record's "SdatSieDocente_14" value
 * @method SdatSlnCursoOferta setSdatSieDocente15()  Sets the current record's "SdatSieDocente_15" value
 * @method SdatSlnCursoOferta setSdatSieDocente16()  Sets the current record's "SdatSieDocente_16" value
 * @method SdatSlnCursoOferta setSdatSieDocente17()  Sets the current record's "SdatSieDocente_17" value
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseSdatSlnCursoOferta extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sdat_sln_curso_oferta');
        $this->hasColumn('id_curso_oferta', 'integer', 4, array(
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
        $this->hasColumn('periodo_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('operativo_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
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
        $this->hasColumn('sub_cea_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('grado_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('ciclo_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('nivel_id', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('paralelo', 'string', 2, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
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
        $this->hasColumn('cod_asignatura_id', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
        $this->hasColumn('docente_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '4',
             ));
        $this->hasColumn('horas', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('SdatSieCurso', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasOne('SdatSieCurso as SdatSieCurso_2', array(
             'local' => 'periodo_id',
             'foreign' => 'periodo_id'));

        $this->hasOne('SdatSieCurso as SdatSieCurso_3', array(
             'local' => 'operativo_id',
             'foreign' => 'operativo_id'));

        $this->hasOne('SdatSieCurso as SdatSieCurso_4', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));

        $this->hasOne('SdatSieCurso as SdatSieCurso_5', array(
             'local' => 'sub_cea_id',
             'foreign' => 'sub_cea_id'));

        $this->hasOne('SdatSieCurso as SdatSieCurso_6', array(
             'local' => 'grado_id',
             'foreign' => 'grado_id'));

        $this->hasOne('SdatSieCurso as SdatSieCurso_7', array(
             'local' => 'ciclo_id',
             'foreign' => 'ciclo_id'));

        $this->hasOne('SdatSieCurso as SdatSieCurso_8', array(
             'local' => 'nivel_id',
             'foreign' => 'nivel_id'));

        $this->hasOne('SdatSieCurso as SdatSieCurso_9', array(
             'local' => 'paralelo',
             'foreign' => 'paralelo'));

        $this->hasOne('SdatSieCurso as SdatSieCurso_10', array(
             'local' => 'turno_id',
             'foreign' => 'turno_id'));

        $this->hasOne('ClaAsignatura', array(
             'local' => 'cod_asignatura_id',
             'foreign' => 'cod_asignatura'));

        $this->hasOne('SdatSieDocente', array(
             'local' => 'docente_id',
             'foreign' => 'ci_docente_id'));

        $this->hasOne('SdatSieDocente as SdatSieDocente_13', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));

        $this->hasOne('SdatSieDocente as SdatSieDocente_14', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasOne('SdatSieDocente as SdatSieDocente_15', array(
             'local' => 'periodo_id',
             'foreign' => 'periodo_id'));

        $this->hasOne('SdatSieDocente as SdatSieDocente_16', array(
             'local' => 'operativo_id',
             'foreign' => 'operativo_id'));

        $this->hasOne('SdatSieDocente as SdatSieDocente_17', array(
             'local' => 'sub_cea_id',
             'foreign' => 'sub_cea_id'));
    }
}