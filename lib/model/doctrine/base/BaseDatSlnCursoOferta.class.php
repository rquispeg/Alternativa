<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DatSlnCursoOferta', 'doctrine');

/**
 * BaseDatSlnCursoOferta
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
 * @property DatSieCurso $DatSieCurso
 * @property DatSieCurso $DatSieCurso_2
 * @property DatSieCurso $DatSieCurso_3
 * @property DatSieCurso $DatSieCurso_4
 * @property DatSieCurso $DatSieCurso_5
 * @property DatSieCurso $DatSieCurso_6
 * @property DatSieCurso $DatSieCurso_7
 * @property DatSieCurso $DatSieCurso_8
 * @property DatSieCurso $DatSieCurso_9
 * @property DatSieCurso $DatSieCurso_10
 * @property DatSlnEstudios $DatSlnEstudios
 * @property DatSlnEstudios $DatSlnEstudios_12
 * @property DatSlnEstudios $DatSlnEstudios_13
 * @property ClaAsignatura $ClaAsignatura
 * @property DatSieDocente $DatSieDocente
 * @property DatSieDocente $DatSieDocente_16
 * @property DatSieDocente $DatSieDocente_17
 * @property DatSieDocente $DatSieDocente_18
 * @property DatSieDocente $DatSieDocente_19
 * @property DatSieDocente $DatSieDocente_20
 * @property Doctrine_Collection $CtrSlnFormal
 * @property Doctrine_Collection $CtrSlnFormal_4
 * @property Doctrine_Collection $CtrSlnFormal_5
 * @property Doctrine_Collection $DatSlnAlternativa
 * @property Doctrine_Collection $DatSlnAlternativa_4
 * @property Doctrine_Collection $DatSlnAlternativa_5
 * @property Doctrine_Collection $DatSlnFormal
 * @property Doctrine_Collection $DatSlnFormal_4
 * @property Doctrine_Collection $DatSlnFormal_5
 * 
 * @method integer             getIdCursoOferta()       Returns the current record's "id_curso_oferta" value
 * @method string              getCodUeId()             Returns the current record's "cod_ue_id" value
 * @method integer             getPeriodoId()           Returns the current record's "periodo_id" value
 * @method integer             getOperativoId()         Returns the current record's "operativo_id" value
 * @method integer             getGestionId()           Returns the current record's "gestion_id" value
 * @method integer             getSubCeaId()            Returns the current record's "sub_cea_id" value
 * @method integer             getGradoId()             Returns the current record's "grado_id" value
 * @method integer             getCicloId()             Returns the current record's "ciclo_id" value
 * @method integer             getNivelId()             Returns the current record's "nivel_id" value
 * @method string              getParalelo()            Returns the current record's "paralelo" value
 * @method integer             getTurnoId()             Returns the current record's "turno_id" value
 * @method integer             getCodAsignaturaId()     Returns the current record's "cod_asignatura_id" value
 * @method integer             getDocenteId()           Returns the current record's "docente_id" value
 * @method integer             getHoras()               Returns the current record's "horas" value
 * @method DatSieCurso         getDatSieCurso()         Returns the current record's "DatSieCurso" value
 * @method DatSieCurso         getDatSieCurso2()        Returns the current record's "DatSieCurso_2" value
 * @method DatSieCurso         getDatSieCurso3()        Returns the current record's "DatSieCurso_3" value
 * @method DatSieCurso         getDatSieCurso4()        Returns the current record's "DatSieCurso_4" value
 * @method DatSieCurso         getDatSieCurso5()        Returns the current record's "DatSieCurso_5" value
 * @method DatSieCurso         getDatSieCurso6()        Returns the current record's "DatSieCurso_6" value
 * @method DatSieCurso         getDatSieCurso7()        Returns the current record's "DatSieCurso_7" value
 * @method DatSieCurso         getDatSieCurso8()        Returns the current record's "DatSieCurso_8" value
 * @method DatSieCurso         getDatSieCurso9()        Returns the current record's "DatSieCurso_9" value
 * @method DatSieCurso         getDatSieCurso10()       Returns the current record's "DatSieCurso_10" value
 * @method DatSlnEstudios      getDatSlnEstudios()      Returns the current record's "DatSlnEstudios" value
 * @method DatSlnEstudios      getDatSlnEstudios12()    Returns the current record's "DatSlnEstudios_12" value
 * @method DatSlnEstudios      getDatSlnEstudios13()    Returns the current record's "DatSlnEstudios_13" value
 * @method ClaAsignatura       getClaAsignatura()       Returns the current record's "ClaAsignatura" value
 * @method DatSieDocente       getDatSieDocente()       Returns the current record's "DatSieDocente" value
 * @method DatSieDocente       getDatSieDocente16()     Returns the current record's "DatSieDocente_16" value
 * @method DatSieDocente       getDatSieDocente17()     Returns the current record's "DatSieDocente_17" value
 * @method DatSieDocente       getDatSieDocente18()     Returns the current record's "DatSieDocente_18" value
 * @method DatSieDocente       getDatSieDocente19()     Returns the current record's "DatSieDocente_19" value
 * @method DatSieDocente       getDatSieDocente20()     Returns the current record's "DatSieDocente_20" value
 * @method Doctrine_Collection getCtrSlnFormal()        Returns the current record's "CtrSlnFormal" collection
 * @method Doctrine_Collection getCtrSlnFormal4()       Returns the current record's "CtrSlnFormal_4" collection
 * @method Doctrine_Collection getCtrSlnFormal5()       Returns the current record's "CtrSlnFormal_5" collection
 * @method Doctrine_Collection getDatSlnAlternativa()   Returns the current record's "DatSlnAlternativa" collection
 * @method Doctrine_Collection getDatSlnAlternativa4()  Returns the current record's "DatSlnAlternativa_4" collection
 * @method Doctrine_Collection getDatSlnAlternativa5()  Returns the current record's "DatSlnAlternativa_5" collection
 * @method Doctrine_Collection getDatSlnFormal()        Returns the current record's "DatSlnFormal" collection
 * @method Doctrine_Collection getDatSlnFormal4()       Returns the current record's "DatSlnFormal_4" collection
 * @method Doctrine_Collection getDatSlnFormal5()       Returns the current record's "DatSlnFormal_5" collection
 * @method DatSlnCursoOferta   setIdCursoOferta()       Sets the current record's "id_curso_oferta" value
 * @method DatSlnCursoOferta   setCodUeId()             Sets the current record's "cod_ue_id" value
 * @method DatSlnCursoOferta   setPeriodoId()           Sets the current record's "periodo_id" value
 * @method DatSlnCursoOferta   setOperativoId()         Sets the current record's "operativo_id" value
 * @method DatSlnCursoOferta   setGestionId()           Sets the current record's "gestion_id" value
 * @method DatSlnCursoOferta   setSubCeaId()            Sets the current record's "sub_cea_id" value
 * @method DatSlnCursoOferta   setGradoId()             Sets the current record's "grado_id" value
 * @method DatSlnCursoOferta   setCicloId()             Sets the current record's "ciclo_id" value
 * @method DatSlnCursoOferta   setNivelId()             Sets the current record's "nivel_id" value
 * @method DatSlnCursoOferta   setParalelo()            Sets the current record's "paralelo" value
 * @method DatSlnCursoOferta   setTurnoId()             Sets the current record's "turno_id" value
 * @method DatSlnCursoOferta   setCodAsignaturaId()     Sets the current record's "cod_asignatura_id" value
 * @method DatSlnCursoOferta   setDocenteId()           Sets the current record's "docente_id" value
 * @method DatSlnCursoOferta   setHoras()               Sets the current record's "horas" value
 * @method DatSlnCursoOferta   setDatSieCurso()         Sets the current record's "DatSieCurso" value
 * @method DatSlnCursoOferta   setDatSieCurso2()        Sets the current record's "DatSieCurso_2" value
 * @method DatSlnCursoOferta   setDatSieCurso3()        Sets the current record's "DatSieCurso_3" value
 * @method DatSlnCursoOferta   setDatSieCurso4()        Sets the current record's "DatSieCurso_4" value
 * @method DatSlnCursoOferta   setDatSieCurso5()        Sets the current record's "DatSieCurso_5" value
 * @method DatSlnCursoOferta   setDatSieCurso6()        Sets the current record's "DatSieCurso_6" value
 * @method DatSlnCursoOferta   setDatSieCurso7()        Sets the current record's "DatSieCurso_7" value
 * @method DatSlnCursoOferta   setDatSieCurso8()        Sets the current record's "DatSieCurso_8" value
 * @method DatSlnCursoOferta   setDatSieCurso9()        Sets the current record's "DatSieCurso_9" value
 * @method DatSlnCursoOferta   setDatSieCurso10()       Sets the current record's "DatSieCurso_10" value
 * @method DatSlnCursoOferta   setDatSlnEstudios()      Sets the current record's "DatSlnEstudios" value
 * @method DatSlnCursoOferta   setDatSlnEstudios12()    Sets the current record's "DatSlnEstudios_12" value
 * @method DatSlnCursoOferta   setDatSlnEstudios13()    Sets the current record's "DatSlnEstudios_13" value
 * @method DatSlnCursoOferta   setClaAsignatura()       Sets the current record's "ClaAsignatura" value
 * @method DatSlnCursoOferta   setDatSieDocente()       Sets the current record's "DatSieDocente" value
 * @method DatSlnCursoOferta   setDatSieDocente16()     Sets the current record's "DatSieDocente_16" value
 * @method DatSlnCursoOferta   setDatSieDocente17()     Sets the current record's "DatSieDocente_17" value
 * @method DatSlnCursoOferta   setDatSieDocente18()     Sets the current record's "DatSieDocente_18" value
 * @method DatSlnCursoOferta   setDatSieDocente19()     Sets the current record's "DatSieDocente_19" value
 * @method DatSlnCursoOferta   setDatSieDocente20()     Sets the current record's "DatSieDocente_20" value
 * @method DatSlnCursoOferta   setCtrSlnFormal()        Sets the current record's "CtrSlnFormal" collection
 * @method DatSlnCursoOferta   setCtrSlnFormal4()       Sets the current record's "CtrSlnFormal_4" collection
 * @method DatSlnCursoOferta   setCtrSlnFormal5()       Sets the current record's "CtrSlnFormal_5" collection
 * @method DatSlnCursoOferta   setDatSlnAlternativa()   Sets the current record's "DatSlnAlternativa" collection
 * @method DatSlnCursoOferta   setDatSlnAlternativa4()  Sets the current record's "DatSlnAlternativa_4" collection
 * @method DatSlnCursoOferta   setDatSlnAlternativa5()  Sets the current record's "DatSlnAlternativa_5" collection
 * @method DatSlnCursoOferta   setDatSlnFormal()        Sets the current record's "DatSlnFormal" collection
 * @method DatSlnCursoOferta   setDatSlnFormal4()       Sets the current record's "DatSlnFormal_4" collection
 * @method DatSlnCursoOferta   setDatSlnFormal5()       Sets the current record's "DatSlnFormal_5" collection
 * 
 * @package    alternativa
 * @subpackage model
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseDatSlnCursoOferta extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dat_sln_curso_oferta');
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
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '2',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DatSieCurso', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasOne('DatSieCurso as DatSieCurso_2', array(
             'local' => 'periodo_id',
             'foreign' => 'periodo_id'));

        $this->hasOne('DatSieCurso as DatSieCurso_3', array(
             'local' => 'operativo_id',
             'foreign' => 'operativo_id'));

        $this->hasOne('DatSieCurso as DatSieCurso_4', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));

        $this->hasOne('DatSieCurso as DatSieCurso_5', array(
             'local' => 'sub_cea_id',
             'foreign' => 'sub_cea_id'));

        $this->hasOne('DatSieCurso as DatSieCurso_6', array(
             'local' => 'grado_id',
             'foreign' => 'grado_id'));

        $this->hasOne('DatSieCurso as DatSieCurso_7', array(
             'local' => 'ciclo_id',
             'foreign' => 'ciclo_id'));

        $this->hasOne('DatSieCurso as DatSieCurso_8', array(
             'local' => 'nivel_id',
             'foreign' => 'nivel_id'));

        $this->hasOne('DatSieCurso as DatSieCurso_9', array(
             'local' => 'paralelo',
             'foreign' => 'paralelo'));

        $this->hasOne('DatSieCurso as DatSieCurso_10', array(
             'local' => 'turno_id',
             'foreign' => 'turno_id'));

        $this->hasOne('DatSlnEstudios', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasOne('DatSlnEstudios as DatSlnEstudios_12', array(
             'local' => 'nivel_id',
             'foreign' => 'nivel_id'));

        $this->hasOne('DatSlnEstudios as DatSlnEstudios_13', array(
             'local' => 'cod_asignatura_id',
             'foreign' => 'cod_asignatura_id'));

        $this->hasOne('ClaAsignatura', array(
             'local' => 'cod_asignatura_id',
             'foreign' => 'cod_asignatura'));

        $this->hasOne('DatSieDocente', array(
             'local' => 'docente_id',
             'foreign' => 'ci_docente_id'));

        $this->hasOne('DatSieDocente as DatSieDocente_16', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));

        $this->hasOne('DatSieDocente as DatSieDocente_17', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasOne('DatSieDocente as DatSieDocente_18', array(
             'local' => 'periodo_id',
             'foreign' => 'periodo_id'));

        $this->hasOne('DatSieDocente as DatSieDocente_19', array(
             'local' => 'operativo_id',
             'foreign' => 'operativo_id'));

        $this->hasOne('DatSieDocente as DatSieDocente_20', array(
             'local' => 'sub_cea_id',
             'foreign' => 'sub_cea_id'));

        $this->hasMany('CtrSlnFormal', array(
             'local' => 'id_curso_oferta',
             'foreign' => 'curso_oferta_id'));

        $this->hasMany('CtrSlnFormal as CtrSlnFormal_4', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));

        $this->hasMany('CtrSlnFormal as CtrSlnFormal_5', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('DatSlnAlternativa', array(
             'local' => 'id_curso_oferta',
             'foreign' => 'curso_oferta_id'));

        $this->hasMany('DatSlnAlternativa as DatSlnAlternativa_4', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));

        $this->hasMany('DatSlnAlternativa as DatSlnAlternativa_5', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));

        $this->hasMany('DatSlnFormal', array(
             'local' => 'id_curso_oferta',
             'foreign' => 'curso_oferta_id'));

        $this->hasMany('DatSlnFormal as DatSlnFormal_4', array(
             'local' => 'gestion_id',
             'foreign' => 'gestion_id'));

        $this->hasMany('DatSlnFormal as DatSlnFormal_5', array(
             'local' => 'cod_ue_id',
             'foreign' => 'cod_ue_id'));
    }
}