<?php

/**
 * ClaCanton form base class.
 *
 * @method ClaCanton getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaCantonForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'departamento_id' => new sfWidgetFormInputHidden(),
      'provincia_id'    => new sfWidgetFormInputHidden(),
      'seccion_id'      => new sfWidgetFormInputHidden(),
      'id_canton'       => new sfWidgetFormInputHidden(),
      'desc_canton'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'departamento_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'departamento_id', 'required' => false)),
      'provincia_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'provincia_id', 'required' => false)),
      'seccion_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'seccion_id', 'required' => false)),
      'id_canton'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_canton', 'required' => false)),
      'desc_canton'     => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('cla_canton[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaCanton';
  }

}
