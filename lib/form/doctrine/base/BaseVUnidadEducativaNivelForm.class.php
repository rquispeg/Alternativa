<?php

/**
 * VUnidadEducativaNivel form base class.
 *
 * @method VUnidadEducativaNivel getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVUnidadEducativaNivelForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'gestion_id'        => new sfWidgetFormInputText(),
      'desc_departamento' => new sfWidgetFormInputText(),
      'cod_distrito'      => new sfWidgetFormInputText(),
      'distrito'          => new sfWidgetFormInputText(),
      'cod_ue'            => new sfWidgetFormInputText(),
      'desc_ue'           => new sfWidgetFormInputText(),
      'cod_dependencia'   => new sfWidgetFormInputText(),
      'desc_dependencia'  => new sfWidgetFormInputText(),
      'inicial'           => new sfWidgetFormInputText(),
      'primaria'          => new sfWidgetFormInputText(),
      'secundaria'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'gestion_id'        => new sfValidatorInteger(),
      'desc_departamento' => new sfValidatorString(array('max_length' => 10)),
      'cod_distrito'      => new sfValidatorInteger(),
      'distrito'          => new sfValidatorString(array('max_length' => 45)),
      'cod_ue'            => new sfValidatorString(array('max_length' => 8)),
      'desc_ue'           => new sfValidatorString(array('max_length' => 70)),
      'cod_dependencia'   => new sfValidatorInteger(),
      'desc_dependencia'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'inicial'           => new sfValidatorInteger(array('required' => false)),
      'primaria'          => new sfValidatorInteger(array('required' => false)),
      'secundaria'        => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('v_unidad_educativa_nivel[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VUnidadEducativaNivel';
  }

}
