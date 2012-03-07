<?php

/**
 * ClaEdaEstadoDesastre form base class.
 *
 * @method ClaEdaEstadoDesastre getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaEdaEstadoDesastreForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_estado_desastre'   => new sfWidgetFormInputHidden(),
      'desc_estado_desastre' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_estado_desastre'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_estado_desastre', 'required' => false)),
      'desc_estado_desastre' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_eda_estado_desastre[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaEdaEstadoDesastre';
  }

}
