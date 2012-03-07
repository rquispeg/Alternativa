<?php

/**
 * ClaCiclo form base class.
 *
 * @method ClaCiclo getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaCicloForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nivel_id'   => new sfWidgetFormInputHidden(),
      'id_ciclo'   => new sfWidgetFormInputHidden(),
      'desc_ciclo' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'nivel_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'nivel_id', 'required' => false)),
      'id_ciclo'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_ciclo', 'required' => false)),
      'desc_ciclo' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_ciclo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaCiclo';
  }

}
