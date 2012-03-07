<?php

/**
 * ClaTipoCargo form base class.
 *
 * @method ClaTipoCargo getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaTipoCargoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tipo_cargo'   => new sfWidgetFormInputHidden(),
      'desc_tipo_cargo' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_tipo_cargo'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_tipo_cargo', 'required' => false)),
      'desc_tipo_cargo' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_tipo_cargo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaTipoCargo';
  }

}
