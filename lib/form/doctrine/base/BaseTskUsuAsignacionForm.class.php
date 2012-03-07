<?php

/**
 * TskUsuAsignacion form base class.
 *
 * @method TskUsuAsignacion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTskUsuAsignacionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'usuario_id'          => new sfWidgetFormInputHidden(),
      'usuario_asignado_id' => new sfWidgetFormInputHidden(),
      'habiltado'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'usuario_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'usuario_id', 'required' => false)),
      'usuario_asignado_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'usuario_asignado_id', 'required' => false)),
      'habiltado'           => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('tsk_usu_asignacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TskUsuAsignacion';
  }

}
