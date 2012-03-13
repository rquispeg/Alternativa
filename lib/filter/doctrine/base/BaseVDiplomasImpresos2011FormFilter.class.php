<?php

/**
 * VDiplomasImpresos2011 filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVDiplomasImpresos2011FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_departamento'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_departamento'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_provincia'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_provincia'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_seccion'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_seccion'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_canton'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_canton'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_localidad'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_localidad'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ue_id'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_ue'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_org_curr'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_modalidad'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'calculated_column1' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'gestion_id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_departamento'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_departamento'  => new sfValidatorPass(array('required' => false)),
      'id_provincia'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_provincia'     => new sfValidatorPass(array('required' => false)),
      'id_seccion'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_seccion'       => new sfValidatorPass(array('required' => false)),
      'id_canton'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_canton'        => new sfValidatorPass(array('required' => false)),
      'id_localidad'       => new sfValidatorPass(array('required' => false)),
      'desc_localidad'     => new sfValidatorPass(array('required' => false)),
      'cod_ue_id'          => new sfValidatorPass(array('required' => false)),
      'desc_ue'            => new sfValidatorPass(array('required' => false)),
      'cod_org_curr'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_modalidad'     => new sfValidatorPass(array('required' => false)),
      'calculated_column1' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('v_diplomas_impresos2011_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VDiplomasImpresos2011';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'gestion_id'         => 'Number',
      'id_departamento'    => 'Number',
      'desc_departamento'  => 'Text',
      'id_provincia'       => 'Number',
      'desc_provincia'     => 'Text',
      'id_seccion'         => 'Number',
      'desc_seccion'       => 'Text',
      'id_canton'          => 'Number',
      'desc_canton'        => 'Text',
      'id_localidad'       => 'Text',
      'desc_localidad'     => 'Text',
      'cod_ue_id'          => 'Text',
      'desc_ue'            => 'Text',
      'cod_org_curr'       => 'Number',
      'desc_modalidad'     => 'Text',
      'calculated_column1' => 'Number',
    );
  }
}
