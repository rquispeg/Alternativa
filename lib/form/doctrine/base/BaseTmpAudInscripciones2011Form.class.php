<?php

/**
 * TmpAudInscripciones2011 form base class.
 *
 * @method TmpAudInscripciones2011 getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpAudInscripciones2011Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue'  => new sfWidgetFormInputHidden(),
      'fecha'   => new sfWidgetFormDateTime(),
      'vigente' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_ue'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue', 'required' => false)),
      'fecha'   => new sfValidatorDateTime(),
      'vigente' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('tmp_aud_inscripciones2011[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpAudInscripciones2011';
  }

}
