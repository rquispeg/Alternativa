<?php

/**
 * CtrRdeSerieConsistente form base class.
 *
 * @method CtrRdeSerieConsistente getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrRdeSerieConsistenteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_rude' => new sfWidgetFormInputHidden(),
      'consistente' => new sfWidgetFormInputText(),
      'peso'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codigo_rude' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo_rude', 'required' => false)),
      'consistente' => new sfValidatorInteger(array('required' => false)),
      'peso'        => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctr_rde_serie_consistente[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrRdeSerieConsistente';
  }

}
