<?php

/**
 * DatSieDocente filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatSieDocenteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ci_docente_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieDocenteadministrativo'), 'add_empty' => true)),
      'cod_ue_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieUnidadEducativa'), 'add_empty' => true)),
      'periodo_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieUnidadEducativa_3'), 'add_empty' => true)),
      'operativo_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieUnidadEducativa_4'), 'add_empty' => true)),
      'sub_cea_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieUnidadEducativa_6'), 'add_empty' => true)),
      'cargo_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCargo'), 'add_empty' => true)),
      'servicio'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatPlaItems'), 'add_empty' => true)),
      'item'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatPlaItems_9'), 'add_empty' => true)),
      'mes'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'ci_docente_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieDocenteadministrativo'), 'column' => 'ci')),
      'cod_ue_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieUnidadEducativa'), 'column' => 'cod_ue_id')),
      'periodo_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieUnidadEducativa_3'), 'column' => 'cod_ue_id')),
      'operativo_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieUnidadEducativa_4'), 'column' => 'cod_ue_id')),
      'sub_cea_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieUnidadEducativa_6'), 'column' => 'cod_ue_id')),
      'cargo_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaCargo'), 'column' => 'id_cargo')),
      'servicio'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatPlaItems'), 'column' => 'servicio')),
      'item'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatPlaItems_9'), 'column' => 'servicio')),
      'mes'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('dat_sie_docente_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatSieDocente';
  }

  public function getFields()
  {
    return array(
      'id_docente'    => 'Number',
      'gestion_id'    => 'Number',
      'ci_docente_id' => 'ForeignKey',
      'cod_ue_id'     => 'ForeignKey',
      'periodo_id'    => 'ForeignKey',
      'operativo_id'  => 'ForeignKey',
      'sub_cea_id'    => 'ForeignKey',
      'cargo_id'      => 'ForeignKey',
      'servicio'      => 'ForeignKey',
      'item'          => 'ForeignKey',
      'mes'           => 'Number',
    );
  }
}
