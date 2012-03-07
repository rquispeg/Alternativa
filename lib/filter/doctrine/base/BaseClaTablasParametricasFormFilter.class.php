<?php

/**
 * ClaTablasParametricas filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaTablasParametricasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tabla'        => new sfWidgetFormFilterInput(),
      'nivel'        => new sfWidgetFormFilterInput(),
      'estado'       => new sfWidgetFormFilterInput(),
      'primary_keys' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'tabla'        => new sfValidatorPass(array('required' => false)),
      'nivel'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estado'       => new sfValidatorPass(array('required' => false)),
      'primary_keys' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_tablas_parametricas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaTablasParametricas';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'tabla'        => 'Text',
      'nivel'        => 'Number',
      'estado'       => 'Text',
      'primary_keys' => 'Text',
    );
  }
}
