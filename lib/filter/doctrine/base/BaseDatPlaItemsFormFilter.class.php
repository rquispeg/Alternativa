<?php

/**
 * DatPlaItems filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatPlaItemsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cargo_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCargo'), 'add_empty' => true)),
      'programa'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'horas'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mes'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'cargo_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaCargo'), 'column' => 'id_cargo')),
      'programa'   => new sfValidatorPass(array('required' => false)),
      'horas'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'mes'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('dat_pla_items_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatPlaItems';
  }

  public function getFields()
  {
    return array(
      'servicio'   => 'Text',
      'item'       => 'Text',
      'gestion_id' => 'Number',
      'cargo_id'   => 'ForeignKey',
      'programa'   => 'Text',
      'horas'      => 'Number',
      'mes'        => 'Number',
    );
  }
}
