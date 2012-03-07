<?php

/**
 * CtrConsolidadorsieweb form base class.
 *
 * @method CtrConsolidadorsieweb getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrConsolidadorsiewebForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'usuario_id'   => new sfWidgetFormInputText(),
      'activado'     => new sfWidgetFormInputText(),
      'horainicio'   => new sfWidgetFormTime(),
      'horafin'      => new sfWidgetFormTime(),
      'multiarchivo' => new sfWidgetFormInputText(),
      'mensaje'      => new sfWidgetFormInputText(),
      'modoforzado'  => new sfWidgetFormInputText(),
      'username'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'usuario_id'   => new sfValidatorInteger(),
      'activado'     => new sfValidatorInteger(array('required' => false)),
      'horainicio'   => new sfValidatorTime(array('required' => false)),
      'horafin'      => new sfValidatorTime(array('required' => false)),
      'multiarchivo' => new sfValidatorInteger(array('required' => false)),
      'mensaje'      => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'modoforzado'  => new sfValidatorInteger(),
      'username'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctr_consolidadorsieweb[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrConsolidadorsieweb';
  }

}
