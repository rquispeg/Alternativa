<?php

/**
 * VisNotasPais filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisNotasPaisFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'distrito'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_distrito'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_ue'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ue'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gestion_id'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigo_rude'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'paterno'           => new sfWidgetFormFilterInput(),
      'materno'           => new sfWidgetFormFilterInput(),
      'nombre'            => new sfWidgetFormFilterInput(),
      'fecha_nacimiento'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'desc_asignatura'   => new sfWidgetFormFilterInput(),
      'primer_trimestre'  => new sfWidgetFormFilterInput(),
      'segundo_trimestre' => new sfWidgetFormFilterInput(),
      'tercer_trimestre'  => new sfWidgetFormFilterInput(),
      'promedio_anual'    => new sfWidgetFormFilterInput(),
      'reforzamiento'     => new sfWidgetFormFilterInput(),
      'promedio_final'    => new sfWidgetFormFilterInput(),
      'desc_nivel'        => new sfWidgetFormFilterInput(),
      'desc_grado'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'paralelo'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_turno'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'matricula_inicio'  => new sfWidgetFormFilterInput(),
      'matricula_fin'     => new sfWidgetFormFilterInput(),
      'desc_modalidad'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_dependencia'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'distrito'          => new sfValidatorPass(array('required' => false)),
      'cod_distrito'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_ue'           => new sfValidatorPass(array('required' => false)),
      'cod_ue'            => new sfValidatorPass(array('required' => false)),
      'gestion_id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'codigo_rude'       => new sfValidatorPass(array('required' => false)),
      'paterno'           => new sfValidatorPass(array('required' => false)),
      'materno'           => new sfValidatorPass(array('required' => false)),
      'nombre'            => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'desc_asignatura'   => new sfValidatorPass(array('required' => false)),
      'primer_trimestre'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'segundo_trimestre' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tercer_trimestre'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'promedio_anual'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'reforzamiento'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'promedio_final'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_nivel'        => new sfValidatorPass(array('required' => false)),
      'desc_grado'        => new sfValidatorPass(array('required' => false)),
      'paralelo'          => new sfValidatorPass(array('required' => false)),
      'desc_turno'        => new sfValidatorPass(array('required' => false)),
      'matricula_inicio'  => new sfValidatorPass(array('required' => false)),
      'matricula_fin'     => new sfValidatorPass(array('required' => false)),
      'desc_modalidad'    => new sfValidatorPass(array('required' => false)),
      'desc_dependencia'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vis_notas_pais_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisNotasPais';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'distrito'          => 'Text',
      'cod_distrito'      => 'Number',
      'desc_ue'           => 'Text',
      'cod_ue'            => 'Text',
      'gestion_id'        => 'Number',
      'codigo_rude'       => 'Text',
      'paterno'           => 'Text',
      'materno'           => 'Text',
      'nombre'            => 'Text',
      'fecha_nacimiento'  => 'Date',
      'desc_asignatura'   => 'Text',
      'primer_trimestre'  => 'Number',
      'segundo_trimestre' => 'Number',
      'tercer_trimestre'  => 'Number',
      'promedio_anual'    => 'Number',
      'reforzamiento'     => 'Number',
      'promedio_final'    => 'Number',
      'desc_nivel'        => 'Text',
      'desc_grado'        => 'Text',
      'paralelo'          => 'Text',
      'desc_turno'        => 'Text',
      'matricula_inicio'  => 'Text',
      'matricula_fin'     => 'Text',
      'desc_modalidad'    => 'Text',
      'desc_dependencia'  => 'Text',
    );
  }
}
