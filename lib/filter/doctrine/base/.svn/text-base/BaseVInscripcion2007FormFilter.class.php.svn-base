<?php

/**
 * VInscripcion2007 filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVInscripcion2007FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_inscripcion'             => new sfWidgetFormFilterInput(),
      'gestion_id'                 => new sfWidgetFormFilterInput(),
      'codigo_rude_id'             => new sfWidgetFormFilterInput(),
      'num_matricula'              => new sfWidgetFormFilterInput(),
      'cod_ue_id'                  => new sfWidgetFormFilterInput(),
      'periodo_id'                 => new sfWidgetFormFilterInput(),
      'operativo_id'               => new sfWidgetFormFilterInput(),
      'sub_cea_id'                 => new sfWidgetFormFilterInput(),
      'nivel_id'                   => new sfWidgetFormFilterInput(),
      'grado_id'                   => new sfWidgetFormFilterInput(),
      'ciclo_id'                   => new sfWidgetFormFilterInput(),
      'paralelo'                   => new sfWidgetFormFilterInput(),
      'turno_id'                   => new sfWidgetFormFilterInput(),
      'estado_matricula_inicio_id' => new sfWidgetFormFilterInput(),
      'estado_matricula_fin_id'    => new sfWidgetFormFilterInput(),
      'cod_ue_procedencia_id'      => new sfWidgetFormFilterInput(),
      'observacion_id'             => new sfWidgetFormFilterInput(),
      'observacion'                => new sfWidgetFormFilterInput(),
      'fecha_inscripcion'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'apreciacion_final'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_inscripcion'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gestion_id'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'codigo_rude_id'             => new sfValidatorPass(array('required' => false)),
      'num_matricula'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue_id'                  => new sfValidatorPass(array('required' => false)),
      'periodo_id'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'operativo_id'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sub_cea_id'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nivel_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'grado_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ciclo_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'paralelo'                   => new sfValidatorPass(array('required' => false)),
      'turno_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estado_matricula_inicio_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estado_matricula_fin_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue_procedencia_id'      => new sfValidatorPass(array('required' => false)),
      'observacion_id'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'observacion'                => new sfValidatorPass(array('required' => false)),
      'fecha_inscripcion'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'apreciacion_final'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('v_inscripcion2007_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VInscripcion2007';
  }

  public function getFields()
  {
    return array(
      'id'                         => 'Number',
      'id_inscripcion'             => 'Number',
      'gestion_id'                 => 'Number',
      'codigo_rude_id'             => 'Text',
      'num_matricula'              => 'Number',
      'cod_ue_id'                  => 'Text',
      'periodo_id'                 => 'Number',
      'operativo_id'               => 'Number',
      'sub_cea_id'                 => 'Number',
      'nivel_id'                   => 'Number',
      'grado_id'                   => 'Number',
      'ciclo_id'                   => 'Number',
      'paralelo'                   => 'Text',
      'turno_id'                   => 'Number',
      'estado_matricula_inicio_id' => 'Number',
      'estado_matricula_fin_id'    => 'Number',
      'cod_ue_procedencia_id'      => 'Text',
      'observacion_id'             => 'Number',
      'observacion'                => 'Text',
      'fecha_inscripcion'          => 'Date',
      'apreciacion_final'          => 'Text',
    );
  }
}
