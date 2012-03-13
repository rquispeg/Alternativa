<?php

/**
 * VEstudianteEspecial filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVEstudianteEspecialFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_departamento' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_distrito'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'distrito'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ue'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_ue'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_nivel'        => new sfWidgetFormFilterInput(),
      'id_ciclo'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_ciclo'        => new sfWidgetFormFilterInput(),
      'id_grado'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_grado'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_turno'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'paralelo'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'discapacidad'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigo_rude'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'paterno'           => new sfWidgetFormFilterInput(),
      'materno'           => new sfWidgetFormFilterInput(),
      'nombre'            => new sfWidgetFormFilterInput(),
      'fecha_nacimiento'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'genero'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'gestion_id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_departamento' => new sfValidatorPass(array('required' => false)),
      'cod_distrito'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'distrito'          => new sfValidatorPass(array('required' => false)),
      'cod_ue'            => new sfValidatorPass(array('required' => false)),
      'desc_ue'           => new sfValidatorPass(array('required' => false)),
      'desc_nivel'        => new sfValidatorPass(array('required' => false)),
      'id_ciclo'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_ciclo'        => new sfValidatorPass(array('required' => false)),
      'id_grado'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_grado'        => new sfValidatorPass(array('required' => false)),
      'desc_turno'        => new sfValidatorPass(array('required' => false)),
      'paralelo'          => new sfValidatorPass(array('required' => false)),
      'discapacidad'      => new sfValidatorPass(array('required' => false)),
      'codigo_rude'       => new sfValidatorPass(array('required' => false)),
      'paterno'           => new sfValidatorPass(array('required' => false)),
      'materno'           => new sfValidatorPass(array('required' => false)),
      'nombre'            => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'genero'            => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('v_estudiante_especial_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VEstudianteEspecial';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'gestion_id'        => 'Number',
      'desc_departamento' => 'Text',
      'cod_distrito'      => 'Number',
      'distrito'          => 'Text',
      'cod_ue'            => 'Text',
      'desc_ue'           => 'Text',
      'desc_nivel'        => 'Text',
      'id_ciclo'          => 'Number',
      'desc_ciclo'        => 'Text',
      'id_grado'          => 'Number',
      'desc_grado'        => 'Text',
      'desc_turno'        => 'Text',
      'paralelo'          => 'Text',
      'discapacidad'      => 'Text',
      'codigo_rude'       => 'Text',
      'paterno'           => 'Text',
      'materno'           => 'Text',
      'nombre'            => 'Text',
      'fecha_nacimiento'  => 'Date',
      'genero'            => 'Text',
    );
  }
}
