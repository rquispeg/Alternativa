<?php

/**
 * ClaDplValido form base class.
 *
 * @method ClaDplValido getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaDplValidoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_valido'   => new sfWidgetFormInputHidden(),
      'desc_valido' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_valido'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_valido', 'required' => false)),
      'desc_valido' => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('cla_dpl_valido[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaDplValido';
  }

}
