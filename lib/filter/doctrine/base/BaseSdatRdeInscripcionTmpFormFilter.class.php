<?php

/**
 * SdatRdeInscripcionTmp filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSdatRdeInscripcionTmpFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_rude_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'), 'add_empty' => true)),
      'num_matricula'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ue_id'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCurso'), 'add_empty' => true)),
      'periodo_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCurso_5'), 'add_empty' => true)),
      'sub_cea_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCurso_6'), 'add_empty' => true)),
      'grado_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCurso_7'), 'add_empty' => true)),
      'ciclo_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCurso_8'), 'add_empty' => true)),
      'nivel_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCurso_9'), 'add_empty' => true)),
      'paralelo'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCurso_10'), 'add_empty' => true)),
      'turno_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCurso_11'), 'add_empty' => true)),
      'estado_matricula_inicio_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula_3'), 'add_empty' => true)),
      'estado_matricula_fin_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula'), 'add_empty' => true)),
      'cod_ue_procedencia_id'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'observacion_id'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'observacion'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_inscripcion'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'apreciacion_final'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'codigo_rude_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRdeEstudiante'), 'column' => 'codigo_rude')),
      'num_matricula'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue_id'                  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SdatSieCurso'), 'column' => 'cod_ue_id')),
      'periodo_id'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SdatSieCurso_5'), 'column' => 'cod_ue_id')),
      'sub_cea_id'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SdatSieCurso_6'), 'column' => 'cod_ue_id')),
      'grado_id'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SdatSieCurso_7'), 'column' => 'cod_ue_id')),
      'ciclo_id'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SdatSieCurso_8'), 'column' => 'cod_ue_id')),
      'nivel_id'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SdatSieCurso_9'), 'column' => 'cod_ue_id')),
      'paralelo'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SdatSieCurso_10'), 'column' => 'cod_ue_id')),
      'turno_id'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SdatSieCurso_11'), 'column' => 'cod_ue_id')),
      'estado_matricula_inicio_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstadoMatricula_3'), 'column' => 'id_estado_matricula')),
      'estado_matricula_fin_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstadoMatricula'), 'column' => 'id_estado_matricula')),
      'cod_ue_procedencia_id'      => new sfValidatorPass(array('required' => false)),
      'observacion_id'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'observacion'                => new sfValidatorPass(array('required' => false)),
      'fecha_inscripcion'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'apreciacion_final'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sdat_rde_inscripcion_tmp_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SdatRdeInscripcionTmp';
  }

  public function getFields()
  {
    return array(
      'inscripcion_id'             => 'Number',
      'gestion_id'                 => 'Number',
      'codigo_rude_id'             => 'ForeignKey',
      'num_matricula'              => 'Number',
      'cod_ue_id'                  => 'ForeignKey',
      'periodo_id'                 => 'ForeignKey',
      'sub_cea_id'                 => 'ForeignKey',
      'grado_id'                   => 'ForeignKey',
      'ciclo_id'                   => 'ForeignKey',
      'nivel_id'                   => 'ForeignKey',
      'paralelo'                   => 'ForeignKey',
      'turno_id'                   => 'ForeignKey',
      'estado_matricula_inicio_id' => 'ForeignKey',
      'estado_matricula_fin_id'    => 'ForeignKey',
      'cod_ue_procedencia_id'      => 'Text',
      'observacion_id'             => 'Number',
      'observacion'                => 'Text',
      'fecha_inscripcion'          => 'Date',
      'apreciacion_final'          => 'Text',
    );
  }
}
