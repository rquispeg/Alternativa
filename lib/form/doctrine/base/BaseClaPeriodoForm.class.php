<?php

/**
 * ClaPeriodo form base class.
 *
 * @method ClaPeriodo getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaPeriodoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_periodo'      => new sfWidgetFormInputHidden(),
      'periodo'         => new sfWidgetFormInputText(),
      'tipo_periodo_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoPeriodo'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_periodo'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_periodo', 'required' => false)),
      'periodo'         => new sfValidatorString(array('max_length' => 45)),
      'tipo_periodo_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoPeriodo'))),
    ));

    $this->widgetSchema->setNameFormat('cla_periodo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaPeriodo';
  }

}
