<?php

/**
 * ClaEdaEquipamiento form base class.
 *
 * @method ClaEdaEquipamiento getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaEdaEquipamientoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_equipamiento'   => new sfWidgetFormInputHidden(),
      'desc_equipamiento' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_equipamiento'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_equipamiento', 'required' => false)),
      'desc_equipamiento' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_eda_equipamiento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaEdaEquipamiento';
  }

}
