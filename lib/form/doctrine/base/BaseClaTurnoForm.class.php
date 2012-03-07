<?php

/**
 * ClaTurno form base class.
 *
 * @method ClaTurno getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaTurnoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_turno'   => new sfWidgetFormInputHidden(),
      'desc_turno' => new sfWidgetFormInputText(),
      'desc_abrv'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_turno'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_turno', 'required' => false)),
      'desc_turno' => new sfValidatorString(array('max_length' => 45)),
      'desc_abrv'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_turno[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaTurno';
  }

}
