<?php

/**
 * ClaGrado filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaGradoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_grado'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'edad_minima' => new sfWidgetFormFilterInput(),
      'edad_maxima' => new sfWidgetFormFilterInput(),
      'seguimiento' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'desc_grado'  => new sfValidatorPass(array('required' => false)),
      'edad_minima' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'edad_maxima' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'seguimiento' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('cla_grado_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaGrado';
  }

  public function getFields()
  {
    return array(
      'nivel_id'    => 'Number',
      'ciclo_id'    => 'Number',
      'id_grado'    => 'Number',
      'desc_grado'  => 'Text',
      'edad_minima' => 'Number',
      'edad_maxima' => 'Number',
      'seguimiento' => 'Number',
    );
  }
}
