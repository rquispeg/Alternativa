<?php

/**
 * ClaEdaMaterial form base class.
 *
 * @method ClaEdaMaterial getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaEdaMaterialForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_material'   => new sfWidgetFormInputHidden(),
      'desc_material' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_material'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_material', 'required' => false)),
      'desc_material' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_eda_material[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaEdaMaterial';
  }

}
