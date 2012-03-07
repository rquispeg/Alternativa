<?php

/**
 * ClaEdaEvento form base class.
 *
 * @method ClaEdaEvento getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaEdaEventoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_tipo_evento' => new sfWidgetFormInputHidden(),
      'desc_evento'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_tipo_evento' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_tipo_evento', 'required' => false)),
      'desc_evento'    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_eda_evento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaEdaEvento';
  }

}
