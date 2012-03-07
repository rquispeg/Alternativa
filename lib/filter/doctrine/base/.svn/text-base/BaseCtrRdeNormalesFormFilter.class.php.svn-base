<?php

/**
 * CtrRdeNormales filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrRdeNormalesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha_normales' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'inscripcion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcion'), 'add_empty' => true)),
      'gestion_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcion_2'), 'add_empty' => true)),
      'usuario_id'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rde_bool'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'fecha_normales' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'inscripcion_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRdeInscripcion'), 'column' => 'id_inscripcion')),
      'gestion_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRdeInscripcion_2'), 'column' => 'id_inscripcion')),
      'usuario_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rde_bool'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('ctr_rde_normales_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrRdeNormales';
  }

  public function getFields()
  {
    return array(
      'id_normales'    => 'Number',
      'fecha_normales' => 'Date',
      'inscripcion_id' => 'ForeignKey',
      'gestion_id'     => 'ForeignKey',
      'usuario_id'     => 'Number',
      'rde_bool'       => 'Number',
    );
  }
}
