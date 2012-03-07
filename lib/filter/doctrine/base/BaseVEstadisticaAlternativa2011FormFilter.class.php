<?php

/**
 * VEstadisticaAlternativa2011 filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVEstadisticaAlternativa2011FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'         => new sfWidgetFormFilterInput(),
      'desc_departamento'  => new sfWidgetFormFilterInput(),
      'cod_distrito'       => new sfWidgetFormFilterInput(),
      'distrito'           => new sfWidgetFormFilterInput(),
      'cod_ue'             => new sfWidgetFormFilterInput(),
      'desc_ue'            => new sfWidgetFormFilterInput(),
      'sub_cea'            => new sfWidgetFormFilterInput(),
      'nombre_subcea'      => new sfWidgetFormFilterInput(),
      'id_ciclo'           => new sfWidgetFormFilterInput(),
      'desc_ciclo'         => new sfWidgetFormFilterInput(),
      'calculated_column1' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'gestion_id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_departamento'  => new sfValidatorPass(array('required' => false)),
      'cod_distrito'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'distrito'           => new sfValidatorPass(array('required' => false)),
      'cod_ue'             => new sfValidatorPass(array('required' => false)),
      'desc_ue'            => new sfValidatorPass(array('required' => false)),
      'sub_cea'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nombre_subcea'      => new sfValidatorPass(array('required' => false)),
      'id_ciclo'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_ciclo'         => new sfValidatorPass(array('required' => false)),
      'calculated_column1' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('v_estadistica_alternativa2011_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VEstadisticaAlternativa2011';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'gestion_id'         => 'Number',
      'desc_departamento'  => 'Text',
      'cod_distrito'       => 'Number',
      'distrito'           => 'Text',
      'cod_ue'             => 'Text',
      'desc_ue'            => 'Text',
      'sub_cea'            => 'Number',
      'nombre_subcea'      => 'Text',
      'id_ciclo'           => 'Number',
      'desc_ciclo'         => 'Text',
      'calculated_column1' => 'Number',
    );
  }
}
