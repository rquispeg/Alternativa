<?php

/**
 * VGrados form base class.
 *
 * @method VGrados getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVGradosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'gestion_id' => new sfWidgetFormInputText(),
      'cod_ue_id'  => new sfWidgetFormInputText(),
      'ini.'       => new sfWidgetFormInputText(),
      '1o ini.'    => new sfWidgetFormInputText(),
      '2o ini.'    => new sfWidgetFormInputText(),
      '1o pri.'    => new sfWidgetFormInputText(),
      '2o pri.'    => new sfWidgetFormInputText(),
      '3o pri.'    => new sfWidgetFormInputText(),
      '4o pri.'    => new sfWidgetFormInputText(),
      '5o pri.'    => new sfWidgetFormInputText(),
      '6o pri.'    => new sfWidgetFormInputText(),
      '1o sec.'    => new sfWidgetFormInputText(),
      '2o sec.'    => new sfWidgetFormInputText(),
      '3o sec.'    => new sfWidgetFormInputText(),
      '4o sec.'    => new sfWidgetFormInputText(),
      '5o sec.'    => new sfWidgetFormInputText(),
      '6o sec.'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'gestion_id' => new sfValidatorInteger(array('required' => false)),
      'cod_ue_id'  => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'ini.'       => new sfValidatorNumber(array('required' => false)),
      '1o ini.'    => new sfValidatorNumber(array('required' => false)),
      '2o ini.'    => new sfValidatorNumber(array('required' => false)),
      '1o pri.'    => new sfValidatorNumber(array('required' => false)),
      '2o pri.'    => new sfValidatorNumber(array('required' => false)),
      '3o pri.'    => new sfValidatorNumber(array('required' => false)),
      '4o pri.'    => new sfValidatorNumber(array('required' => false)),
      '5o pri.'    => new sfValidatorNumber(array('required' => false)),
      '6o pri.'    => new sfValidatorNumber(array('required' => false)),
      '1o sec.'    => new sfValidatorNumber(array('required' => false)),
      '2o sec.'    => new sfValidatorNumber(array('required' => false)),
      '3o sec.'    => new sfValidatorNumber(array('required' => false)),
      '4o sec.'    => new sfValidatorNumber(array('required' => false)),
      '5o sec.'    => new sfValidatorNumber(array('required' => false)),
      '6o sec.'    => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('v_grados[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VGrados';
  }

}
