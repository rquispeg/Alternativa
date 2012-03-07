<?php

/**
 * ClaModalidadEnsenanza form base class.
 *
 * @method ClaModalidadEnsenanza getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaModalidadEnsenanzaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_modalidad_ensenanza'   => new sfWidgetFormInputHidden(),
      'desc_modalidad_ensenanza' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_modalidad_ensenanza'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_modalidad_ensenanza', 'required' => false)),
      'desc_modalidad_ensenanza' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_modalidad_ensenanza[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaModalidadEnsenanza';
  }

}
