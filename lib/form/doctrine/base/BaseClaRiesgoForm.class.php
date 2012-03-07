<?php

/**
 * ClaRiesgo form base class.
 *
 * @method ClaRiesgo getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaRiesgoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_riego'    => new sfWidgetFormInputHidden(),
      'desc_riesgo' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_riego'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_riego', 'required' => false)),
      'desc_riesgo' => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('cla_riesgo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaRiesgo';
  }

}
