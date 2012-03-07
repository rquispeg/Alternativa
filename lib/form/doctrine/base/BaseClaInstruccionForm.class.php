<?php

/**
 * ClaInstruccion form base class.
 *
 * @method ClaInstruccion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaInstruccionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_instruccion'   => new sfWidgetFormInputHidden(),
      'desc_instruccion' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_instruccion'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_instruccion', 'required' => false)),
      'desc_instruccion' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_instruccion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaInstruccion';
  }

}
