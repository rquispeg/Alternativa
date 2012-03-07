<?php

/**
 * ClaEstadoCivil form base class.
 *
 * @method ClaEstadoCivil getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaEstadoCivilForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_estado_civil' => new sfWidgetFormInputHidden(),
      'estado_civil'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_estado_civil' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_estado_civil', 'required' => false)),
      'estado_civil'    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_estado_civil[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaEstadoCivil';
  }

}
