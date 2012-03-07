<?php

/**
 * ClaCargo form base class.
 *
 * @method ClaCargo getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaCargoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_cargo'       => new sfWidgetFormInputHidden(),
      'desc_cargo'     => new sfWidgetFormInputText(),
      'tipo_cargo_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoCargo'), 'add_empty' => false)),
      'id_sie_cliente' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_cargo'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_cargo', 'required' => false)),
      'desc_cargo'     => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'tipo_cargo_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoCargo'))),
      'id_sie_cliente' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('cla_cargo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaCargo';
  }

}
