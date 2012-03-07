<?php

/**
 * VEstadisticasGestion form base class.
 *
 * @method VEstadisticasGestion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVEstadisticasGestionForm extends BaseFormDoctrine
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
      'desc_modalidad'    => new sfWidgetFormInputText(),
      'cantidad'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'gestion_id'        => new sfValidatorInteger(array('required' => false)),
      'desc_departamento' => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'cod_distrito'      => new sfValidatorInteger(array('required' => false)),
      'distrito'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cod_ue'            => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'desc_ue'           => new sfValidatorString(array('max_length' => 70, 'required' => false)),
      'desc_modalidad'    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cantidad'          => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('v_estadisticas_gestion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VEstadisticasGestion';
  }

}
