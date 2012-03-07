<?php

/**
 * DatSieAdministrativo filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatSieAdministrativoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'financiamiento_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaFinanciamiento'), 'add_empty' => true)),
      'cargo_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCargo'), 'add_empty' => true)),
      'servicio'             => new sfWidgetFormFilterInput(),
      'item'                 => new sfWidgetFormFilterInput(),
      'formacion'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'financiamiento_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaFinanciamiento'), 'column' => 'id_financiamiento')),
      'cargo_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaCargo'), 'column' => 'id_cargo')),
      'servicio'             => new sfValidatorPass(array('required' => false)),
      'item'                 => new sfValidatorPass(array('required' => false)),
      'formacion'            => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_sie_administrativo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatSieAdministrativo';
  }

  public function getFields()
  {
    return array(
      'ci_administrativo_id' => 'Text',
      'cod_ue_id'            => 'Text',
      'sub_cea'              => 'Number',
      'gestion_id'           => 'Number',
      'periodo_id'           => 'Number',
      'operativo_id'         => 'Number',
      'financiamiento_id'    => 'ForeignKey',
      'cargo_id'             => 'ForeignKey',
      'servicio'             => 'Text',
      'item'                 => 'Text',
      'formacion'            => 'Text',
    );
  }
}
