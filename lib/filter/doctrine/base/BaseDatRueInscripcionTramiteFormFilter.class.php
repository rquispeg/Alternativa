<?php

/**
 * DatRueInscripcionTramite filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRueInscripcionTramiteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'num_matricula'              => new sfWidgetFormFilterInput(),
      'estado_matricula_inicio_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula'), 'add_empty' => true)),
      'estado_matricula_fin_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula_11'), 'add_empty' => true)),
      'cod_ue_procedencia_id'      => new sfWidgetFormFilterInput(),
      'observacion_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaObservacionInscripcion'), 'add_empty' => true)),
      'observacion'                => new sfWidgetFormFilterInput(),
      'fecha_inscripcion'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'apreciacion_final'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'num_matricula'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estado_matricula_inicio_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstadoMatricula'), 'column' => 'id_estado_matricula')),
      'estado_matricula_fin_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstadoMatricula_11'), 'column' => 'id_estado_matricula')),
      'cod_ue_procedencia_id'      => new sfValidatorPass(array('required' => false)),
      'observacion_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaObservacionInscripcion'), 'column' => 'id_observacion')),
      'observacion'                => new sfValidatorPass(array('required' => false)),
      'fecha_inscripcion'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'apreciacion_final'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_rue_inscripcion_tramite_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRueInscripcionTramite';
  }

  public function getFields()
  {
    return array(
      'formulario_id'              => 'Number',
      'gestion_id'                 => 'Number',
      'codigo_rude_id'             => 'Text',
      'num_matricula'              => 'Number',
      'periodo_id'                 => 'Number',
      'sub_cea_id'                 => 'Number',
      'nivel_id'                   => 'Number',
      'grado_id'                   => 'Number',
      'ciclo_id'                   => 'Number',
      'paralelo'                   => 'Text',
      'turno_id'                   => 'Number',
      'estado_matricula_inicio_id' => 'ForeignKey',
      'estado_matricula_fin_id'    => 'ForeignKey',
      'cod_ue_procedencia_id'      => 'Text',
      'observacion_id'             => 'ForeignKey',
      'observacion'                => 'Text',
      'fecha_inscripcion'          => 'Date',
      'apreciacion_final'          => 'Text',
    );
  }
}
