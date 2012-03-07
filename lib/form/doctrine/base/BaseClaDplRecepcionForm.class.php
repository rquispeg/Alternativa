<?php

/**
 * ClaDplRecepcion form base class.
 *
 * @method ClaDplRecepcion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaDplRecepcionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_recepcionado'   => new sfWidgetFormInputHidden(),
      'desc_recepcionado' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_recepcionado'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_recepcionado', 'required' => false)),
      'desc_recepcionado' => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('cla_dpl_recepcion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaDplRecepcion';
  }

}
