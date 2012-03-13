<?php

/**
 * VEspecial filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVEspecialFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo'               => new sfWidgetFormFilterInput(),
      'gestion_id'         => new sfWidgetFormFilterInput(),
      'desc_departamento'  => new sfWidgetFormFilterInput(),
      'cod_distrito'       => new sfWidgetFormFilterInput(),
      'distrito'           => new sfWidgetFormFilterInput(),
      'cod_ue'             => new sfWidgetFormFilterInput(),
      'desc_ue'            => new sfWidgetFormFilterInput(),
      'calculated_column1' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'tipo'               => new sfValidatorPass(array('required' => false)),
      'gestion_id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_departamento'  => new sfValidatorPass(array('required' => false)),
      'cod_distrito'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'distrito'           => new sfValidatorPass(array('required' => false)),
      'cod_ue'             => new sfValidatorPass(array('required' => false)),
      'desc_ue'            => new sfValidatorPass(array('required' => false)),
      'calculated_column1' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('v_especial_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VEspecial';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'tipo'               => 'Text',
      'gestion_id'         => 'Number',
      'desc_departamento'  => 'Text',
      'cod_distrito'       => 'Number',
      'distrito'           => 'Text',
      'cod_ue'             => 'Text',
      'desc_ue'            => 'Text',
      'calculated_column1' => 'Number',
    );
  }
}
