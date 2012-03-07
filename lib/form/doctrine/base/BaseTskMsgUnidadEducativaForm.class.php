<?php

/**
 * TskMsgUnidadEducativa form base class.
 *
 * @method TskMsgUnidadEducativa getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTskMsgUnidadEducativaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'      => new sfWidgetFormInputHidden(),
      'cod_ue'  => new sfWidgetFormInputHidden(),
      'mensaje' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'cod_ue'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue', 'required' => false)),
      'mensaje' => new sfValidatorString(array('max_length' => 75, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tsk_msg_unidad_educativa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TskMsgUnidadEducativa';
  }

}
