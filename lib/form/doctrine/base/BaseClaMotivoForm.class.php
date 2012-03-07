<?php

/**
 * ClaMotivo form base class.
 *
 * @method ClaMotivo getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaMotivoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_motivo' => new sfWidgetFormInputHidden(),
      'motivo'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_motivo' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_motivo', 'required' => false)),
      'motivo'    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_motivo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaMotivo';
  }

}
