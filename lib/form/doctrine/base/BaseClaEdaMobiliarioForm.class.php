<?php

/**
 * ClaEdaMobiliario form base class.
 *
 * @method ClaEdaMobiliario getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaEdaMobiliarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_mobiliario'   => new sfWidgetFormInputHidden(),
      'desc_mobiliario' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_mobiliario'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_mobiliario', 'required' => false)),
      'desc_mobiliario' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_eda_mobiliario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaEdaMobiliario';
  }

}
