<?php

/**
 * RelTraUsuarioProceso form base class.
 *
 * @method RelTraUsuarioProceso getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRelTraUsuarioProcesoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'proceso_id' => new sfWidgetFormInputHidden(),
      'gestion_id' => new sfWidgetFormInputHidden(),
      'vigente'    => new sfWidgetFormInputText(),
      'grupo_id'   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'proceso_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'proceso_id', 'required' => false)),
      'gestion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'vigente'    => new sfValidatorInteger(array('required' => false)),
      'grupo_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'grupo_id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('rel_tra_usuario_proceso[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RelTraUsuarioProceso';
  }

}
