<?php

/**
 * AuxEstudiante form base class.
 *
 * @method AuxEstudiante getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAuxEstudianteForm extends BaseFormDoctrine
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
      'nivel_id'         => new sfWidgetFormInputText(),
      'grado'            => new sfWidgetFormInputText(),
      'paralelo'         => new sfWidgetFormInputText(),
      'base'             => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'codigo_rude'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo_rude', 'required' => false)),
      'paterno'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'materno'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_nacimiento' => new sfValidatorDate(array('required' => false)),
      'cod_ue_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'nivel_id'         => new sfValidatorInteger(array('required' => false)),
      'grado'            => new sfValidatorInteger(array('required' => false)),
      'paralelo'         => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'base'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'base', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('aux_estudiante[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AuxEstudiante';
  }

}
