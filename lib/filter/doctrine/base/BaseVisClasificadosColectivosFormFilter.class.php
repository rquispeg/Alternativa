<?php

/**
 * VisClasificadosColectivos filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisClasificadosColectivosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormFilterInput(),
      'cod_ue'             => new sfWidgetFormFilterInput(),
      'desc_ue'            => new sfWidgetFormFilterInput(),
      'posicion'           => new sfWidgetFormFilterInput(),
      'genero_id'          => new sfWidgetFormFilterInput(),
      'desc_disciplina'    => new sfWidgetFormFilterInput(),
      'desc_prueba'        => new sfWidgetFormFilterInput(),
      'circunscripcion_id' => new sfWidgetFormFilterInput(),
      'tipo_id'            => new sfWidgetFormFilterInput(),
      'cod_distrito'       => new sfWidgetFormFilterInput(),
      'distrito'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue'             => new sfValidatorPass(array('required' => false)),
      'desc_ue'            => new sfValidatorPass(array('required' => false)),
      'posicion'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'genero_id'          => new sfValidatorPass(array('required' => false)),
      'desc_disciplina'    => new sfValidatorPass(array('required' => false)),
      'desc_prueba'        => new sfValidatorPass(array('required' => false)),
      'circunscripcion_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo_id'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_distrito'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'distrito'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vis_clasificados_colectivos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisClasificadosColectivos';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'cod_ue'             => 'Text',
      'desc_ue'            => 'Text',
      'posicion'           => 'Number',
      'genero_id'          => 'Text',
      'desc_disciplina'    => 'Text',
      'desc_prueba'        => 'Text',
      'circunscripcion_id' => 'Number',
      'tipo_id'            => 'Number',
      'cod_distrito'       => 'Number',
      'distrito'           => 'Text',
    );
  }
}
