<?php

/**
 * DatSieAdministrativo filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatSieAdministrativoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cargo_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCargo'), 'add_empty' => true)),
      'mes'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'financiamiento_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaFinanciamiento'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'cargo_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaCargo'), 'column' => 'id_cargo')),
      'mes'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'financiamiento_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaFinanciamiento'), 'column' => 'id_financiamiento')),
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
      'ci_docente_id'     => 'Number',
      'gestion_id'        => 'Number',
      'cod_ue_id'         => 'Text',
      'periodo_id'        => 'Number',
      'operativo_id'      => 'Number',
      'sub_cea_id'        => 'Number',
      'cargo_id'          => 'ForeignKey',
      'mes'               => 'Number',
      'financiamiento_id' => 'ForeignKey',
    );
  }
}
