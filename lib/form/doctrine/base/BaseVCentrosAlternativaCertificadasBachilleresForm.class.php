<?php

/**
 * VCentrosAlternativaCertificadasBachilleres form base class.
 *
 * @method VCentrosAlternativaCertificadasBachilleres getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVCentrosAlternativaCertificadasBachilleresForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'gestion_id'         => new sfWidgetFormInputText(),
      'desc_departamento'  => new sfWidgetFormInputText(),
      'cod_distrito'       => new sfWidgetFormInputText(),
      'cod_ue'             => new sfWidgetFormInputText(),
      'desc_ue'            => new sfWidgetFormInputText(),
      'calculated_column1' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'gestion_id'         => new sfValidatorInteger(),
      'desc_departamento'  => new sfValidatorString(array('max_length' => 10)),
      'cod_distrito'       => new sfValidatorInteger(),
      'cod_ue'             => new sfValidatorString(array('max_length' => 8)),
      'desc_ue'            => new sfValidatorString(array('max_length' => 70)),
      'calculated_column1' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('v_centros_alternativa_certificadas_bachilleres[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VCentrosAlternativaCertificadasBachilleres';
  }

}
