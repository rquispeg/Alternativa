<?php

/**
 * CtrRdeInscripcion filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrRdeInscripcionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_inscripcion'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gestion_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_10'), 'add_empty' => true)),
      'codigo_rude_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'), 'add_empty' => true)),
      'num_matricula'              => new sfWidgetFormFilterInput(),
      'cod_ue_id'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso'), 'add_empty' => true)),
      'periodo_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_8'), 'add_empty' => true)),
      'operativo_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_9'), 'add_empty' => true)),
      'sub_cea_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_11'), 'add_empty' => true)),
      'nivel_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_14'), 'add_empty' => true)),
      'grado_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_12'), 'add_empty' => true)),
      'ciclo_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_13'), 'add_empty' => true)),
      'paralelo'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_15'), 'add_empty' => true)),
      'turno_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_16'), 'add_empty' => true)),
      'estado_matricula_inicio_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula'), 'add_empty' => true)),
      'estado_matricula_fin_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula_3'), 'add_empty' => true)),
      'cod_ue_procedencia_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRueUnidadEducativa'), 'add_empty' => true)),
      'observacion_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaObservacionInscripcion'), 'add_empty' => true)),
      'observacion_control'        => new sfWidgetFormFilterInput(),
      'fecha_control'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_inscripcion'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'apreciacion_final'          => new sfWidgetFormFilterInput(),
      'usuario_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id_inscripcion'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gestion_id'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieCurso_10'), 'column' => 'cod_ue_id')),
      'codigo_rude_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRdeEstudiante'), 'column' => 'codigo_rude')),
      'num_matricula'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue_id'                  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieCurso'), 'column' => 'cod_ue_id')),
      'periodo_id'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieCurso_8'), 'column' => 'cod_ue_id')),
      'operativo_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieCurso_9'), 'column' => 'cod_ue_id')),
      'sub_cea_id'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieCurso_11'), 'column' => 'cod_ue_id')),
      'nivel_id'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieCurso_14'), 'column' => 'cod_ue_id')),
      'grado_id'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieCurso_12'), 'column' => 'cod_ue_id')),
      'ciclo_id'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieCurso_13'), 'column' => 'cod_ue_id')),
      'paralelo'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieCurso_15'), 'column' => 'cod_ue_id')),
      'turno_id'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieCurso_16'), 'column' => 'cod_ue_id')),
      'estado_matricula_inicio_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstadoMatricula'), 'column' => 'id_estado_matricula')),
      'estado_matricula_fin_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstadoMatricula_3'), 'column' => 'id_estado_matricula')),
      'cod_ue_procedencia_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRueUnidadEducativa'), 'column' => 'cod_ue')),
      'observacion_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaObservacionInscripcion'), 'column' => 'id_observacion')),
      'observacion_control'        => new sfValidatorPass(array('required' => false)),
      'fecha_control'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fecha_inscripcion'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'apreciacion_final'          => new sfValidatorPass(array('required' => false)),
      'usuario_id'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatUsuUsuario'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('ctr_rde_inscripcion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrRdeInscripcion';
  }

  public function getFields()
  {
    return array(
      'id_inscripcion'             => 'Number',
      'gestion_id'                 => 'ForeignKey',
      'codigo_rude_id'             => 'ForeignKey',
      'num_matricula'              => 'Number',
      'cod_ue_id'                  => 'ForeignKey',
      'periodo_id'                 => 'ForeignKey',
      'operativo_id'               => 'ForeignKey',
      'sub_cea_id'                 => 'ForeignKey',
      'nivel_id'                   => 'ForeignKey',
      'grado_id'                   => 'ForeignKey',
      'ciclo_id'                   => 'ForeignKey',
      'paralelo'                   => 'ForeignKey',
      'turno_id'                   => 'ForeignKey',
      'estado_matricula_inicio_id' => 'ForeignKey',
      'estado_matricula_fin_id'    => 'ForeignKey',
      'cod_ue_procedencia_id'      => 'ForeignKey',
      'observacion_id'             => 'ForeignKey',
      'observacion_control'        => 'Text',
      'fecha_control'              => 'Date',
      'fecha_inscripcion'          => 'Date',
      'apreciacion_final'          => 'Text',
      'usuario_id'                 => 'ForeignKey',
      'id_control'                 => 'Number',
    );
  }
}
