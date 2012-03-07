<?php

/**
 * HisRdeInscripcion filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseHisRdeInscripcionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_rude_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'), 'add_empty' => true)),
      'num_matricula'              => new sfWidgetFormFilterInput(),
      'cod_ue_id'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sub_cea_id'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'operativo_id'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'periodo_id'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nivel_id'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ciclo_id'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'grado_id'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'paralelo'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'turno_id'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado_matricula_inicio_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula'), 'add_empty' => true)),
      'estado_matricula_fin_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula_3'), 'add_empty' => true)),
      'cod_ue_procedencia_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRueUnidadEducativa'), 'add_empty' => true)),
      'observacion_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaObservacionInscripcion'), 'add_empty' => true)),
      'observacion'                => new sfWidgetFormFilterInput(),
      'fecha_inscripcion'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'apreciacion_final'          => new sfWidgetFormFilterInput(),
      'fecha_delete'               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'codigo_rude_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRdeEstudiante'), 'column' => 'codigo_rude')),
      'num_matricula'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue_id'                  => new sfValidatorPass(array('required' => false)),
      'sub_cea_id'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'operativo_id'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'periodo_id'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nivel_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ciclo_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'grado_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'paralelo'                   => new sfValidatorPass(array('required' => false)),
      'turno_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estado_matricula_inicio_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstadoMatricula'), 'column' => 'id_estado_matricula')),
      'estado_matricula_fin_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstadoMatricula_3'), 'column' => 'id_estado_matricula')),
      'cod_ue_procedencia_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRueUnidadEducativa'), 'column' => 'cod_ue')),
      'observacion_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaObservacionInscripcion'), 'column' => 'id_observacion')),
      'observacion'                => new sfValidatorPass(array('required' => false)),
      'fecha_inscripcion'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'apreciacion_final'          => new sfValidatorPass(array('required' => false)),
      'fecha_delete'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('his_rde_inscripcion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'HisRdeInscripcion';
  }

  public function getFields()
  {
    return array(
      'id_inscripcion'             => 'Number',
      'codigo_rude_id'             => 'ForeignKey',
      'num_matricula'              => 'Number',
      'cod_ue_id'                  => 'Text',
      'sub_cea_id'                 => 'Number',
      'gestion_id'                 => 'Number',
      'operativo_id'               => 'Number',
      'periodo_id'                 => 'Number',
      'nivel_id'                   => 'Number',
      'ciclo_id'                   => 'Number',
      'grado_id'                   => 'Number',
      'paralelo'                   => 'Text',
      'turno_id'                   => 'Number',
      'estado_matricula_inicio_id' => 'ForeignKey',
      'estado_matricula_fin_id'    => 'ForeignKey',
      'cod_ue_procedencia_id'      => 'ForeignKey',
      'observacion_id'             => 'ForeignKey',
      'observacion'                => 'Text',
      'fecha_inscripcion'          => 'Date',
      'apreciacion_final'          => 'Text',
      'fecha_delete'               => 'Date',
    );
  }
}
