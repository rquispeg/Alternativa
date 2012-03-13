<?php

/**
 * TmpSlnFormal2011 filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpSlnFormal2011FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ue_id'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigo_rude_id'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_inscripcion'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'curso_oferta_id'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nivel_id'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ciclo_id'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'grado_id'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'paralelo'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'turno_id'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nivel_curso_oferta'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ciclo_curso_oferta'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'grado_curso_oferta'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'paralelo_curso_oferta'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'turno_curso_oferta'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'primer_trimestre'            => new sfWidgetFormFilterInput(),
      'segundo_trimestre'           => new sfWidgetFormFilterInput(),
      'tercer_trimestre'            => new sfWidgetFormFilterInput(),
      'promedio_anual'              => new sfWidgetFormFilterInput(),
      'reforzamiento'               => new sfWidgetFormFilterInput(),
      'promedio_final'              => new sfWidgetFormFilterInput(),
      'primer_eval'                 => new sfWidgetFormFilterInput(),
      'segundo_eval'                => new sfWidgetFormFilterInput(),
      'tercer_eval'                 => new sfWidgetFormFilterInput(),
      'primer_dias_trab'            => new sfWidgetFormFilterInput(),
      'segundo_dias_trab'           => new sfWidgetFormFilterInput(),
      'tercer_dias_trab'            => new sfWidgetFormFilterInput(),
      'reforzamiento_dias_trab'     => new sfWidgetFormFilterInput(),
      'primer_faltas_licencia'      => new sfWidgetFormFilterInput(),
      'segundo_faltas_licencia'     => new sfWidgetFormFilterInput(),
      'tecer_faltas_licencia'       => new sfWidgetFormFilterInput(),
      'primer_faltas_sin_licencia'  => new sfWidgetFormFilterInput(),
      'segundo_faltas_sin_licencia' => new sfWidgetFormFilterInput(),
      'tercer_faltas_sin_licencia'  => new sfWidgetFormFilterInput(),
      'fecha_actualizacion'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'usuario_id'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'gestion_id'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue_id'                   => new sfValidatorPass(array('required' => false)),
      'codigo_rude_id'              => new sfValidatorPass(array('required' => false)),
      'id_inscripcion'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'curso_oferta_id'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nivel_id'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ciclo_id'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'grado_id'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'paralelo'                    => new sfValidatorPass(array('required' => false)),
      'turno_id'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nivel_curso_oferta'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ciclo_curso_oferta'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'grado_curso_oferta'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'paralelo_curso_oferta'       => new sfValidatorPass(array('required' => false)),
      'turno_curso_oferta'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'primer_trimestre'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'segundo_trimestre'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tercer_trimestre'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'promedio_anual'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'reforzamiento'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'promedio_final'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'primer_eval'                 => new sfValidatorPass(array('required' => false)),
      'segundo_eval'                => new sfValidatorPass(array('required' => false)),
      'tercer_eval'                 => new sfValidatorPass(array('required' => false)),
      'primer_dias_trab'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'segundo_dias_trab'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tercer_dias_trab'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'reforzamiento_dias_trab'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'primer_faltas_licencia'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'segundo_faltas_licencia'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tecer_faltas_licencia'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'primer_faltas_sin_licencia'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'segundo_faltas_sin_licencia' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tercer_faltas_sin_licencia'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_actualizacion'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'usuario_id'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('tmp_sln_formal2011_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpSlnFormal2011';
  }

  public function getFields()
  {
    return array(
      'id'                          => 'Number',
      'gestion_id'                  => 'Number',
      'cod_ue_id'                   => 'Text',
      'codigo_rude_id'              => 'Text',
      'id_inscripcion'              => 'Number',
      'curso_oferta_id'             => 'Number',
      'nivel_id'                    => 'Number',
      'ciclo_id'                    => 'Number',
      'grado_id'                    => 'Number',
      'paralelo'                    => 'Text',
      'turno_id'                    => 'Number',
      'nivel_curso_oferta'          => 'Number',
      'ciclo_curso_oferta'          => 'Number',
      'grado_curso_oferta'          => 'Number',
      'paralelo_curso_oferta'       => 'Text',
      'turno_curso_oferta'          => 'Number',
      'primer_trimestre'            => 'Number',
      'segundo_trimestre'           => 'Number',
      'tercer_trimestre'            => 'Number',
      'promedio_anual'              => 'Number',
      'reforzamiento'               => 'Number',
      'promedio_final'              => 'Number',
      'primer_eval'                 => 'Text',
      'segundo_eval'                => 'Text',
      'tercer_eval'                 => 'Text',
      'primer_dias_trab'            => 'Number',
      'segundo_dias_trab'           => 'Number',
      'tercer_dias_trab'            => 'Number',
      'reforzamiento_dias_trab'     => 'Number',
      'primer_faltas_licencia'      => 'Number',
      'segundo_faltas_licencia'     => 'Number',
      'tecer_faltas_licencia'       => 'Number',
      'primer_faltas_sin_licencia'  => 'Number',
      'segundo_faltas_sin_licencia' => 'Number',
      'tercer_faltas_sin_licencia'  => 'Number',
      'fecha_actualizacion'         => 'Date',
      'usuario_id'                  => 'Number',
    );
  }
}
