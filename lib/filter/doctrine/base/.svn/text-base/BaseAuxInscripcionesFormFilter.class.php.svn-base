<?php

/**
 * AuxInscripciones filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAuxInscripcionesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'paterno'          => new sfWidgetFormFilterInput(),
      'materno'          => new sfWidgetFormFilterInput(),
      'nombre'           => new sfWidgetFormFilterInput(),
      'fecha_nacimiento' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'base'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'paterno'          => new sfValidatorPass(array('required' => false)),
      'materno'          => new sfValidatorPass(array('required' => false)),
      'nombre'           => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'base'             => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('aux_inscripciones_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AuxInscripciones';
  }

  public function getFields()
  {
    return array(
      'codigo_rude'      => 'Text',
      'paterno'          => 'Text',
      'materno'          => 'Text',
      'nombre'           => 'Text',
      'fecha_nacimiento' => 'Date',
      'cod_ue_id'        => 'Text',
      'nivel_id'         => 'Number',
      'grado'            => 'Number',
      'paralelo'         => 'Text',
      'base'             => 'Text',
    );
  }
}
