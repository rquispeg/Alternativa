<?php

/**
 * Auxdobleinscripcion form base class.
 *
 * @method Auxdobleinscripcion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAuxdobleinscripcionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codrude'  => new sfWidgetFormInputHidden(),
      'gestion'  => new sfWidgetFormInputText(),
      'cantidad' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codrude'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codrude', 'required' => false)),
      'gestion'  => new sfValidatorInteger(),
      'cantidad' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('auxdobleinscripcion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Auxdobleinscripcion';
  }

}
