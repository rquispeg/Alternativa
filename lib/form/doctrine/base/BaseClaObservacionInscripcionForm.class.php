<?php

/**
 * ClaObservacionInscripcion form base class.
 *
 * @method ClaObservacionInscripcion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaObservacionInscripcionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_observacion'   => new sfWidgetFormInputHidden(),
      'desc_observacion' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_observacion'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_observacion', 'required' => false)),
      'desc_observacion' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_observacion_inscripcion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaObservacionInscripcion';
  }

}
