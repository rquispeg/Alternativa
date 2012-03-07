<?php

/**
 * ClaSeccion form base class.
 *
 * @method ClaSeccion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaSeccionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'departamento_id' => new sfWidgetFormInputHidden(),
      'provincia_id'    => new sfWidgetFormInputHidden(),
      'id_seccion'      => new sfWidgetFormInputHidden(),
      'desc_seccion'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'departamento_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'departamento_id', 'required' => false)),
      'provincia_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'provincia_id', 'required' => false)),
      'id_seccion'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_seccion', 'required' => false)),
      'desc_seccion'    => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('cla_seccion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaSeccion';
  }

}
