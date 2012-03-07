<?php

/**
 * ClaEspecialidad form base class.
 *
 * @method ClaEspecialidad getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaEspecialidadForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_especialidad'   => new sfWidgetFormInputHidden(),
      'desc_especialidad' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_especialidad'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_especialidad', 'required' => false)),
      'desc_especialidad' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_especialidad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaEspecialidad';
  }

}
