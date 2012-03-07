<?php

/**
 * VDiplomasImpresos2011 form base class.
 *
 * @method VDiplomasImpresos2011 getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVDiplomasImpresos2011Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'gestion_id'         => new sfWidgetFormInputText(),
      'id_departamento'    => new sfWidgetFormInputText(),
      'desc_departamento'  => new sfWidgetFormInputText(),
      'id_provincia'       => new sfWidgetFormInputText(),
      'desc_provincia'     => new sfWidgetFormInputText(),
      'id_seccion'         => new sfWidgetFormInputText(),
      'desc_seccion'       => new sfWidgetFormInputText(),
      'id_canton'          => new sfWidgetFormInputText(),
      'desc_canton'        => new sfWidgetFormInputText(),
      'id_localidad'       => new sfWidgetFormInputText(),
      'desc_localidad'     => new sfWidgetFormInputText(),
      'cod_ue_id'          => new sfWidgetFormInputText(),
      'desc_ue'            => new sfWidgetFormInputText(),
      'cod_org_curr'       => new sfWidgetFormInputText(),
      'desc_modalidad'     => new sfWidgetFormInputText(),
      'calculated_column1' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'gestion_id'         => new sfValidatorInteger(),
      'id_departamento'    => new sfValidatorInteger(),
      'desc_departamento'  => new sfValidatorString(array('max_length' => 10)),
      'id_provincia'       => new sfValidatorInteger(),
      'desc_provincia'     => new sfValidatorString(array('max_length' => 25)),
      'id_seccion'         => new sfValidatorInteger(),
      'desc_seccion'       => new sfValidatorString(array('max_length' => 50)),
      'id_canton'          => new sfValidatorInteger(),
      'desc_canton'        => new sfValidatorString(array('max_length' => 45)),
      'id_localidad'       => new sfValidatorString(array('max_length' => 6)),
      'desc_localidad'     => new sfValidatorString(array('max_length' => 125)),
      'cod_ue_id'          => new sfValidatorString(array('max_length' => 8)),
      'desc_ue'            => new sfValidatorString(array('max_length' => 70)),
      'cod_org_curr'       => new sfValidatorInteger(),
      'desc_modalidad'     => new sfValidatorString(array('max_length' => 45)),
      'calculated_column1' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('v_diplomas_impresos2011[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VDiplomasImpresos2011';
  }

}
