<?php

/**
 * AudRueUnidadeducativa form base class.
 *
 * @method AudRueUnidadeducativa getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAudRueUnidadeducativaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue'     => new sfWidgetFormInputHidden(),
      'fecha_alta' => new sfWidgetFormDateTime(),
      'user'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_ue'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue', 'required' => false)),
      'fecha_alta' => new sfValidatorDateTime(array('required' => false)),
      'user'       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('aud_rue_unidadeducativa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AudRueUnidadeducativa';
  }

}
