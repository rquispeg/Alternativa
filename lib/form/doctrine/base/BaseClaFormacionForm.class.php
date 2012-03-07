<?php

/**
 * ClaFormacion form base class.
 *
 * @method ClaFormacion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaFormacionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_formacion'   => new sfWidgetFormInputHidden(),
      'desc_formacion' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_formacion'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_formacion', 'required' => false)),
      'desc_formacion' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_formacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaFormacion';
  }

}
