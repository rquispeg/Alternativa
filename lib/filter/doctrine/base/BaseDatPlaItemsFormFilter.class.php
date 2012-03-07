<?php

/**
 * DatPlaItems filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatPlaItemsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'programa'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'horas'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gestion_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGestion'), 'add_empty' => true)),
      'mes'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cargo_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCargo'), 'add_empty' => true)),
      'institucion_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'programa'       => new sfValidatorPass(array('required' => false)),
      'horas'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gestion_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaGestion'), 'column' => 'id_gestion')),
      'mes'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cargo_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaCargo'), 'column' => 'id_cargo')),
      'institucion_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
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
      'servicio'       => 'Text',
      'item'           => 'Text',
      'programa'       => 'Text',
      'horas'          => 'Number',
      'gestion_id'     => 'ForeignKey',
      'mes'            => 'Number',
      'cargo_id'       => 'ForeignKey',
      'institucion_id' => 'Number',
    );
  }
}
