<?php

/**
 * TmpSieAdministrativo filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpSieAdministrativoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'financiamiento_id'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cargo_id'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'servicio'             => new sfWidgetFormFilterInput(),
      'item'                 => new sfWidgetFormFilterInput(),
      'formacion'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'financiamiento_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cargo_id'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio'             => new sfValidatorPass(array('required' => false)),
      'item'                 => new sfValidatorPass(array('required' => false)),
      'formacion'            => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tmp_sie_administrativo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpSieAdministrativo';
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
      'financiamiento_id'    => 'Number',
      'cargo_id'             => 'Number',
      'servicio'             => 'Text',
      'item'                 => 'Text',
      'formacion'            => 'Text',
    );
  }
}
