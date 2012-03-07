<?php

/**
 * VJuegos filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVJuegosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_departamento'    => new sfWidgetFormFilterInput(),
      'abr_circunscripcion'  => new sfWidgetFormFilterInput(),
      'desc_circunscripcion' => new sfWidgetFormFilterInput(),
      'distrito'             => new sfWidgetFormFilterInput(),
      'cod_ue'               => new sfWidgetFormFilterInput(),
      'desc_ue'              => new sfWidgetFormFilterInput(),
      'desc_disciplina'      => new sfWidgetFormFilterInput(),
      'desc_prueba'          => new sfWidgetFormFilterInput(),
      'calculated_column1'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desc_departamento'    => new sfValidatorPass(array('required' => false)),
      'abr_circunscripcion'  => new sfValidatorPass(array('required' => false)),
      'desc_circunscripcion' => new sfValidatorPass(array('required' => false)),
      'distrito'             => new sfValidatorPass(array('required' => false)),
      'cod_ue'               => new sfValidatorPass(array('required' => false)),
      'desc_ue'              => new sfValidatorPass(array('required' => false)),
      'desc_disciplina'      => new sfValidatorPass(array('required' => false)),
      'desc_prueba'          => new sfValidatorPass(array('required' => false)),
      'calculated_column1'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('v_juegos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VJuegos';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'desc_departamento'    => 'Text',
      'abr_circunscripcion'  => 'Text',
      'desc_circunscripcion' => 'Text',
      'distrito'             => 'Text',
      'cod_ue'               => 'Text',
      'desc_ue'              => 'Text',
      'desc_disciplina'      => 'Text',
      'desc_prueba'          => 'Text',
      'calculated_column1'   => 'Number',
    );
  }
}
