<?php

/**
 * DatPlaItems form base class.
 *
 * @method DatPlaItems getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatPlaItemsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'servicio'   => new sfWidgetFormInputHidden(),
      'item'       => new sfWidgetFormInputHidden(),
      'gestion_id' => new sfWidgetFormInputHidden(),
      'cargo_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCargo'), 'add_empty' => false)),
      'programa'   => new sfWidgetFormInputText(),
      'horas'      => new sfWidgetFormInputText(),
      'mes'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'servicio'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'servicio', 'required' => false)),
      'item'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'item', 'required' => false)),
      'gestion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'cargo_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCargo'))),
      'programa'   => new sfValidatorString(array('max_length' => 8)),
      'horas'      => new sfValidatorInteger(),
      'mes'        => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('dat_pla_items[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatPlaItems';
  }

}
