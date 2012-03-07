<?php

/**
 * VEta form base class.
 *
 * @method VEta getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVEtaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'tipo'               => new sfWidgetFormInputText(),
      'gestion_id'         => new sfWidgetFormInputText(),
      'desc_departamento'  => new sfWidgetFormInputText(),
      'cod_distrito'       => new sfWidgetFormInputText(),
      'distrito'           => new sfWidgetFormInputText(),
      'cod_ue'             => new sfWidgetFormInputText(),
      'desc_ue'            => new sfWidgetFormInputText(),
      'calculated_column1' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'tipo'               => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'gestion_id'         => new sfValidatorInteger(array('required' => false)),
      'desc_departamento'  => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'cod_distrito'       => new sfValidatorInteger(array('required' => false)),
      'distrito'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cod_ue'             => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'desc_ue'            => new sfValidatorString(array('max_length' => 70, 'required' => false)),
      'calculated_column1' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('v_eta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VEta';
  }

}
