<?php

/**
 * ClaTipoTramite form base class.
 *
 * @method ClaTipoTramite getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaTipoTramiteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tipo_tramite'   => new sfWidgetFormInputHidden(),
      'desc_tipo_tramite' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_tipo_tramite'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_tipo_tramite', 'required' => false)),
      'desc_tipo_tramite' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_tipo_tramite[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaTipoTramite';
  }

}
