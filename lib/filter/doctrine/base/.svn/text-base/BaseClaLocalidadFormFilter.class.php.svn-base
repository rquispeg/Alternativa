<?php

/**
 * ClaLocalidad filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaLocalidadFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_localidad'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_area'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'desc_localidad'  => new sfValidatorPass(array('required' => false)),
      'tipo_area'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_localidad_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaLocalidad';
  }

  public function getFields()
  {
    return array(
      'departamento_id' => 'Number',
      'provincia_id'    => 'Number',
      'seccion_id'      => 'Number',
      'canton_id'       => 'Number',
      'id_localidad'    => 'Text',
      'desc_localidad'  => 'Text',
      'tipo_area'       => 'Text',
    );
  }
}
