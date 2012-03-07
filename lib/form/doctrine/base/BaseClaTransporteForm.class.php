<?php

/**
 * ClaTransporte form base class.
 *
 * @method ClaTransporte getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaTransporteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_transporte'   => new sfWidgetFormInputHidden(),
      'desc_transporte' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_transporte'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_transporte', 'required' => false)),
      'desc_transporte' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_transporte[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaTransporte';
  }

}
