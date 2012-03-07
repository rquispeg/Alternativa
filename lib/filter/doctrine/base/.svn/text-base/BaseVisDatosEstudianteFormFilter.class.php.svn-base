<?php

/**
 * VisDatosEstudiante filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisDatosEstudianteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_rude'             => new sfWidgetFormFilterInput(),
      'carnet_identidad'        => new sfWidgetFormFilterInput(),
      'paterno'                 => new sfWidgetFormFilterInput(),
      'materno'                 => new sfWidgetFormFilterInput(),
      'nombre'                  => new sfWidgetFormFilterInput(),
      'fecha_nacimiento'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'genero'                  => new sfWidgetFormFilterInput(),
      'localidad_nac'           => new sfWidgetFormFilterInput(),
      'num_matricula'           => new sfWidgetFormFilterInput(),
      'cod_ue_id'               => new sfWidgetFormFilterInput(),
      'gestion_id'              => new sfWidgetFormFilterInput(),
      'nivel_id'                => new sfWidgetFormFilterInput(),
      'ciclo_id'                => new sfWidgetFormFilterInput(),
      'grado_id'                => new sfWidgetFormFilterInput(),
      'paralelo'                => new sfWidgetFormFilterInput(),
      'estado_matricula_fin_id' => new sfWidgetFormFilterInput(),
      'cod_ue_procedencia_id'   => new sfWidgetFormFilterInput(),
      'desc_turno'              => new sfWidgetFormFilterInput(),
      'desc_abrv'               => new sfWidgetFormFilterInput(),
      'desc_provincia'          => new sfWidgetFormFilterInput(),
      'desc_departamento'       => new sfWidgetFormFilterInput(),
      'turno_id'                => new sfWidgetFormFilterInput(),
      'desc_abreviada'          => new sfWidgetFormFilterInput(),
      'id_nivel'                => new sfWidgetFormFilterInput(),
      'desc_nivel'              => new sfWidgetFormFilterInput(),
      'desc_grado'              => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'codigo_rude'             => new sfValidatorPass(array('required' => false)),
      'carnet_identidad'        => new sfValidatorPass(array('required' => false)),
      'paterno'                 => new sfValidatorPass(array('required' => false)),
      'materno'                 => new sfValidatorPass(array('required' => false)),
      'nombre'                  => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'genero'                  => new sfValidatorPass(array('required' => false)),
      'localidad_nac'           => new sfValidatorPass(array('required' => false)),
      'num_matricula'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue_id'               => new sfValidatorPass(array('required' => false)),
      'gestion_id'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nivel_id'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ciclo_id'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'grado_id'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'paralelo'                => new sfValidatorPass(array('required' => false)),
      'estado_matricula_fin_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue_procedencia_id'   => new sfValidatorPass(array('required' => false)),
      'desc_turno'              => new sfValidatorPass(array('required' => false)),
      'desc_abrv'               => new sfValidatorPass(array('required' => false)),
      'desc_provincia'          => new sfValidatorPass(array('required' => false)),
      'desc_departamento'       => new sfValidatorPass(array('required' => false)),
      'turno_id'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_abreviada'          => new sfValidatorPass(array('required' => false)),
      'id_nivel'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_nivel'              => new sfValidatorPass(array('required' => false)),
      'desc_grado'              => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vis_datos_estudiante_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisDatosEstudiante';
  }

  public function getFields()
  {
    return array(
      'id'                      => 'Number',
      'codigo_rude'             => 'Text',
      'carnet_identidad'        => 'Text',
      'paterno'                 => 'Text',
      'materno'                 => 'Text',
      'nombre'                  => 'Text',
      'fecha_nacimiento'        => 'Date',
      'genero'                  => 'Text',
      'localidad_nac'           => 'Text',
      'num_matricula'           => 'Number',
      'cod_ue_id'               => 'Text',
      'gestion_id'              => 'Number',
      'nivel_id'                => 'Number',
      'ciclo_id'                => 'Number',
      'grado_id'                => 'Number',
      'paralelo'                => 'Text',
      'estado_matricula_fin_id' => 'Number',
      'cod_ue_procedencia_id'   => 'Text',
      'desc_turno'              => 'Text',
      'desc_abrv'               => 'Text',
      'desc_provincia'          => 'Text',
      'desc_departamento'       => 'Text',
      'turno_id'                => 'Number',
      'desc_abreviada'          => 'Text',
      'id_nivel'                => 'Number',
      'desc_nivel'              => 'Text',
      'desc_grado'              => 'Text',
    );
  }
}
