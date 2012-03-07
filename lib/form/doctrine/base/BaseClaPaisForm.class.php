<?php

/**
 * ClaPais form base class.
 *
 * @method ClaPais getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaPaisForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_pais'        => new sfWidgetFormInputHidden(),
      'desc_pais'      => new sfWidgetFormInputText(),
      'desc_abreviada' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_pais'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_pais', 'required' => false)),
      'desc_pais'      => new sfValidatorString(array('max_length' => 35)),
      'desc_abreviada' => new sfValidatorString(array('max_length' => 4)),
    ));

    $this->widgetSchema->setNameFormat('cla_pais[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaPais';
  }

}
