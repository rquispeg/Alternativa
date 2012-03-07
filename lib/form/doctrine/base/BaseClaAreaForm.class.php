<?php

/**
 * ClaArea form base class.
 *
 * @method ClaArea getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaAreaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_area'   => new sfWidgetFormInputHidden(),
      'desc_area' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_area'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_area', 'required' => false)),
      'desc_area' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_area[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaArea';
  }

}
