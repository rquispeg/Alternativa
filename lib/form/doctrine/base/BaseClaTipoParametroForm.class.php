<?php

/**
 * ClaTipoParametro form base class.
 *
 * @method ClaTipoParametro getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaTipoParametroForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tipo_parametro' => new sfWidgetFormInputHidden(),
      'desc_parametro'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_tipo_parametro' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_tipo_parametro', 'required' => false)),
      'desc_parametro'    => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('cla_tipo_parametro[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaTipoParametro';
  }

}
