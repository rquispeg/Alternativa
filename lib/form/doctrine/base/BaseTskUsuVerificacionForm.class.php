<?php

/**
 * TskUsuVerificacion form base class.
 *
 * @method TskUsuVerificacion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTskUsuVerificacionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tareas_id'          => new sfWidgetFormInputHidden(),
      'usuario_id'         => new sfWidgetFormInputHidden(),
      'verificado'         => new sfWidgetFormInputText(),
      'fecha_verificacion' => new sfWidgetFormDateTime(),
      'observaciones'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'tareas_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'tareas_id', 'required' => false)),
      'usuario_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'usuario_id', 'required' => false)),
      'verificado'         => new sfValidatorInteger(),
      'fecha_verificacion' => new sfValidatorDateTime(),
      'observaciones'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tsk_usu_verificacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TskUsuVerificacion';
  }

}
