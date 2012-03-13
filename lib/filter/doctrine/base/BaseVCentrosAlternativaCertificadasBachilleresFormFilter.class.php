<?php

/**
 * VCentrosAlternativaCertificadasBachilleres filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVCentrosAlternativaCertificadasBachilleresFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_departamento'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_distrito'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ue'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_ue'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'calculated_column1' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'gestion_id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_departamento'  => new sfValidatorPass(array('required' => false)),
      'cod_distrito'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue'             => new sfValidatorPass(array('required' => false)),
      'desc_ue'            => new sfValidatorPass(array('required' => false)),
      'calculated_column1' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('v_centros_alternativa_certificadas_bachilleres_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VCentrosAlternativaCertificadasBachilleres';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'gestion_id'         => 'Number',
      'desc_departamento'  => 'Text',
      'cod_distrito'       => 'Number',
      'cod_ue'             => 'Text',
      'desc_ue'            => 'Text',
      'calculated_column1' => 'Number',
    );
  }
}
