<?php

/**
 * DatPlaAsignacion form base class.
 *
 * @method DatPlaAsignacion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatPlaAsignacionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'rda_id'      => new sfWidgetFormInputHidden(),
      'gestion_id'  => new sfWidgetFormInputHidden(),
      'cod_ue_id'   => new sfWidgetFormInputHidden(),
      'mes_id'      => new sfWidgetFormInputHidden(),
      'servicio_id' => new sfWidgetFormInputHidden(),
      'item_id'     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'rda_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'rda_id', 'required' => false)),
      'gestion_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'cod_ue_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'mes_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'mes_id', 'required' => false)),
      'servicio_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'servicio_id', 'required' => false)),
      'item_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'item_id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_pla_asignacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatPlaAsignacion';
  }

}
