<?php

/**
 * ClaPlanEstudios filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaPlanEstudiosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'plan_estudios'    => new sfWidgetFormFilterInput(),
      'fecha_resolucion' => new sfWidgetFormFilterInput(),
      'nro_resolucion'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'plan_estudios'    => new sfValidatorPass(array('required' => false)),
      'fecha_resolucion' => new sfValidatorPass(array('required' => false)),
      'nro_resolucion'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_plan_estudios_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaPlanEstudios';
  }

  public function getFields()
  {
    return array(
      'id_plan_estudios' => 'Number',
      'plan_estudios'    => 'Text',
      'fecha_resolucion' => 'Text',
      'nro_resolucion'   => 'Text',
    );
  }
}
