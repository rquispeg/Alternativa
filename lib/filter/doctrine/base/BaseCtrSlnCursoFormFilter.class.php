<?php

/**
 * CtrSlnCurso filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrSlnCursoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso'), 'add_empty' => true)),
      'periodo_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_2'), 'add_empty' => true)),
      'operativo_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_3'), 'add_empty' => true)),
      'sub_cea_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_5'), 'add_empty' => true)),
      'nivel_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_8'), 'add_empty' => true)),
      'grado_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_6'), 'add_empty' => true)),
      'ciclo_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_7'), 'add_empty' => true)),
      'paralelo'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_9'), 'add_empty' => true)),
      'turno_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_10'), 'add_empty' => true)),
      'seguridad'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_consolidacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_presentacion'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'cod_ue_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieCurso'), 'column' => 'cod_ue_id')),
      'periodo_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieCurso_2'), 'column' => 'cod_ue_id')),
      'operativo_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieCurso_3'), 'column' => 'cod_ue_id')),
      'sub_cea_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieCurso_5'), 'column' => 'cod_ue_id')),
      'nivel_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieCurso_8'), 'column' => 'cod_ue_id')),
      'grado_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieCurso_6'), 'column' => 'cod_ue_id')),
      'ciclo_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieCurso_7'), 'column' => 'cod_ue_id')),
      'paralelo'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieCurso_9'), 'column' => 'cod_ue_id')),
      'turno_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieCurso_10'), 'column' => 'cod_ue_id')),
      'seguridad'           => new sfValidatorPass(array('required' => false)),
      'fecha_consolidacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fecha_presentacion'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('ctr_sln_curso_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrSlnCurso';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'gestion_id'          => 'Number',
      'cod_ue_id'           => 'ForeignKey',
      'periodo_id'          => 'ForeignKey',
      'operativo_id'        => 'ForeignKey',
      'sub_cea_id'          => 'ForeignKey',
      'nivel_id'            => 'ForeignKey',
      'grado_id'            => 'ForeignKey',
      'ciclo_id'            => 'ForeignKey',
      'paralelo'            => 'ForeignKey',
      'turno_id'            => 'ForeignKey',
      'seguridad'           => 'Text',
      'fecha_consolidacion' => 'Date',
      'fecha_presentacion'  => 'Date',
    );
  }
}
