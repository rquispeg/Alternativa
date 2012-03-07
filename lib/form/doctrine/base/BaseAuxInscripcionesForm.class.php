<?php

/**
 * AuxInscripciones form base class.
 *
 * @method AuxInscripciones getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAuxInscripcionesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_rude'      => new sfWidgetFormInputHidden(),
      'paterno'          => new sfWidgetFormInputText(),
      'materno'          => new sfWidgetFormInputText(),
      'nombre'           => new sfWidgetFormInputText(),
      'fecha_nacimiento' => new sfWidgetFormDate(),
      'cod_ue_id'        => new sfWidgetFormInputHidden(),
      'nivel_id'         => new sfWidgetFormInputHidden(),
      'grado'            => new sfWidgetFormInputHidden(),
      'paralelo'         => new sfWidgetFormInputHidden(),
      'base'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codigo_rude'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo_rude', 'required' => false)),
      'paterno'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'materno'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_nacimiento' => new sfValidatorDate(array('required' => false)),
      'cod_ue_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'nivel_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'nivel_id', 'required' => false)),
      'grado'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'grado', 'required' => false)),
      'paralelo'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'paralelo', 'required' => false)),
      'base'             => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('aux_inscripciones[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AuxInscripciones';
  }

}
