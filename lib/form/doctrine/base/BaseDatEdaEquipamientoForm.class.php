<?php

/**
 * DatEdaEquipamiento form base class.
 *
 * @method DatEdaEquipamiento getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatEdaEquipamientoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'evento_id'          => new sfWidgetFormInputHidden(),
      'cod_ue_id'          => new sfWidgetFormInputHidden(),
      'gestion_id'         => new sfWidgetFormInputHidden(),
      'equipamiento_id'    => new sfWidgetFormInputHidden(),
      'estado_recursos_id' => new sfWidgetFormInputHidden(),
      'cantidad'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'evento_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'evento_id', 'required' => false)),
      'cod_ue_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'gestion_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'equipamiento_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'equipamiento_id', 'required' => false)),
      'estado_recursos_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'estado_recursos_id', 'required' => false)),
      'cantidad'           => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('dat_eda_equipamiento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatEdaEquipamiento';
  }

}
