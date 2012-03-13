<?php

/**
 * VisNotas filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisNotasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_ue'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ue'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gestion_id'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigo_rude'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'paterno'                    => new sfWidgetFormFilterInput(),
      'materno'                    => new sfWidgetFormFilterInput(),
      'nombre'                     => new sfWidgetFormFilterInput(),
      'fecha_nacimiento'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'desc_asignatura'            => new sfWidgetFormFilterInput(),
      'primer_trimestre'           => new sfWidgetFormFilterInput(),
      'segundo_trimestre'          => new sfWidgetFormFilterInput(),
      'tercer_trimestre'           => new sfWidgetFormFilterInput(),
      'promedio_anual'             => new sfWidgetFormFilterInput(),
      'reforzamiento'              => new sfWidgetFormFilterInput(),
      'promedio_final'             => new sfWidgetFormFilterInput(),
      'cod_le_id'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nivel_id'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'grado_id'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ciclo_id'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'paralelo'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'turno_id'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado_matricula_inicio_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado_matricula_fin_id'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_org_curr_id'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_dependencia_id'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_convenio_id'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'desc_ue'                    => new sfValidatorPass(array('required' => false)),
      'cod_ue'                     => new sfValidatorPass(array('required' => false)),
      'gestion_id'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'codigo_rude'                => new sfValidatorPass(array('required' => false)),
      'paterno'                    => new sfValidatorPass(array('required' => false)),
      'materno'                    => new sfValidatorPass(array('required' => false)),
      'nombre'                     => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'desc_asignatura'            => new sfValidatorPass(array('required' => false)),
      'primer_trimestre'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'segundo_trimestre'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tercer_trimestre'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'promedio_anual'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'reforzamiento'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'promedio_final'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_le_id'                  => new sfValidatorPass(array('required' => false)),
      'nivel_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'grado_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ciclo_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'paralelo'                   => new sfValidatorPass(array('required' => false)),
      'turno_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estado_matricula_inicio_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estado_matricula_fin_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_org_curr_id'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_dependencia_id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_convenio_id'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('vis_notas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisNotas';
  }

  public function getFields()
  {
    return array(
      'id'                         => 'Number',
      'desc_ue'                    => 'Text',
      'cod_ue'                     => 'Text',
      'gestion_id'                 => 'Number',
      'codigo_rude'                => 'Text',
      'paterno'                    => 'Text',
      'materno'                    => 'Text',
      'nombre'                     => 'Text',
      'fecha_nacimiento'           => 'Date',
      'desc_asignatura'            => 'Text',
      'primer_trimestre'           => 'Number',
      'segundo_trimestre'          => 'Number',
      'tercer_trimestre'           => 'Number',
      'promedio_anual'             => 'Number',
      'reforzamiento'              => 'Number',
      'promedio_final'             => 'Number',
      'cod_le_id'                  => 'Text',
      'nivel_id'                   => 'Number',
      'grado_id'                   => 'Number',
      'ciclo_id'                   => 'Number',
      'paralelo'                   => 'Text',
      'turno_id'                   => 'Number',
      'estado_matricula_inicio_id' => 'Number',
      'estado_matricula_fin_id'    => 'Number',
      'cod_org_curr_id'            => 'Number',
      'cod_dependencia_id'         => 'Number',
      'cod_convenio_id'            => 'Number',
    );
  }
}
