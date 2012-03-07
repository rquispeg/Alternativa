<?php

/**
 * DatEdaMaterial form base class.
 *
 * @method DatEdaMaterial getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatEdaMaterialForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'evento_id'        => new sfWidgetFormInputHidden(),
      'cod_ue_id'        => new sfWidgetFormInputHidden(),
      'gestion_id'       => new sfWidgetFormInputHidden(),
      'material_id'      => new sfWidgetFormInputHidden(),
      'cantidad_danado'  => new sfWidgetFormInputText(),
      'cantidad_perdido' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'evento_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'evento_id', 'required' => false)),
      'cod_ue_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'gestion_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'material_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'material_id', 'required' => false)),
      'cantidad_danado'  => new sfValidatorInteger(array('required' => false)),
      'cantidad_perdido' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_eda_material[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatEdaMaterial';
  }

}
