<?php

/**
 * ClaAtencionmedica form base class.
 *
 * @method ClaAtencionmedica getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaAtencionmedicaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_atencionmedica'   => new sfWidgetFormInputHidden(),
      'desc_atencionmedica' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_atencionmedica'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_atencionmedica', 'required' => false)),
      'desc_atencionmedica' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_atencionmedica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaAtencionmedica';
  }

}
