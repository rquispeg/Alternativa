<?php

/**
 * ClaPlanEstudios form base class.
 *
 * @method ClaPlanEstudios getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaPlanEstudiosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_plan_estudios' => new sfWidgetFormInputHidden(),
      'plan_estudios'    => new sfWidgetFormInputText(),
      'fecha_resolucion' => new sfWidgetFormInputText(),
      'nro_resolucion'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_plan_estudios' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_plan_estudios', 'required' => false)),
      'plan_estudios'    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_resolucion' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nro_resolucion'   => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_plan_estudios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaPlanEstudios';
  }

}
