<?php

/**
 * ClaTipoAdministracion form base class.
 *
 * @method ClaTipoAdministracion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaTipoAdministracionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_tipo_administracion' => new sfWidgetFormInputHidden(),
      'desc_administracion'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_tipo_administracion' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_tipo_administracion', 'required' => false)),
      'desc_administracion'     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_tipo_administracion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaTipoAdministracion';
  }

}
