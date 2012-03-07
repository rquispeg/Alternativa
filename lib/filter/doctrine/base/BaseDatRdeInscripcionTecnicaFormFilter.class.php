<?php

/**
 * DatRdeInscripcionTecnica filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRdeInscripcionTecnicaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_rude_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'), 'add_empty' => true)),
      'num_matricula'              => new sfWidgetFormFilterInput(),
      'cod_ue_id'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica'), 'add_empty' => true)),
      'periodo_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_5'), 'add_empty' => true)),
      'operativo_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_6'), 'add_empty' => true)),
      'sub_cea_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_8'), 'add_empty' => true)),
      'nivel_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_11'), 'add_empty' => true)),
      'grado_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_9'), 'add_empty' => true)),
      'ciclo_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_10'), 'add_empty' => true)),
      'paralelo'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_12'), 'add_empty' => true)),
      'turno_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_13'), 'add_empty' => true)),
      'curso_oferta_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatAltCursoTecnica_14'), 'add_empty' => true)),
      'estado_matricula_inicio_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula'), 'add_empty' => true)),
      'estado_matricula_fin_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula_2'), 'add_empty' => true)),
      'fecha_inscripcion'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'apreciacion_final'          => new sfWidgetFormFilterInput(),
      'postula_acreditacion_n_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCiclo'), 'add_empty' => true)),
      'postula_acreditacion_c_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCiclo_16'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'codigo_rude_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRdeEstudiante'), 'column' => 'codigo_rude')),
      'num_matricula'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue_id'                  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatAltCursoTecnica'), 'column' => 'cod_ue_id')),
      'periodo_id'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatAltCursoTecnica_5'), 'column' => 'cod_ue_id')),
      'operativo_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatAltCursoTecnica_6'), 'column' => 'cod_ue_id')),
      'sub_cea_id'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatAltCursoTecnica_8'), 'column' => 'cod_ue_id')),
      'nivel_id'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatAltCursoTecnica_11'), 'column' => 'cod_ue_id')),
      'grado_id'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatAltCursoTecnica_9'), 'column' => 'cod_ue_id')),
      'ciclo_id'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatAltCursoTecnica_10'), 'column' => 'cod_ue_id')),
      'paralelo'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatAltCursoTecnica_12'), 'column' => 'cod_ue_id')),
      'turno_id'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatAltCursoTecnica_13'), 'column' => 'cod_ue_id')),
      'curso_oferta_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatAltCursoTecnica_14'), 'column' => 'cod_ue_id')),
      'estado_matricula_inicio_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstadoMatricula'), 'column' => 'id_estado_matricula')),
      'estado_matricula_fin_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstadoMatricula_2'), 'column' => 'id_estado_matricula')),
      'fecha_inscripcion'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'apreciacion_final'          => new sfValidatorPass(array('required' => false)),
      'postula_acreditacion_n_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaCiclo'), 'column' => 'nivel_id')),
      'postula_acreditacion_c_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaCiclo_16'), 'column' => 'nivel_id')),
    ));

    $this->widgetSchema->setNameFormat('dat_rde_inscripcion_tecnica_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRdeInscripcionTecnica';
  }

  public function getFields()
  {
    return array(
      'id_inscripcion'             => 'Number',
      'gestion_id'                 => 'Number',
      'codigo_rude_id'             => 'ForeignKey',
      'num_matricula'              => 'Number',
      'cod_ue_id'                  => 'ForeignKey',
      'periodo_id'                 => 'ForeignKey',
      'operativo_id'               => 'ForeignKey',
      'sub_cea_id'                 => 'ForeignKey',
      'nivel_id'                   => 'ForeignKey',
      'grado_id'                   => 'ForeignKey',
      'ciclo_id'                   => 'ForeignKey',
      'paralelo'                   => 'ForeignKey',
      'turno_id'                   => 'ForeignKey',
      'curso_oferta_id'            => 'ForeignKey',
      'estado_matricula_inicio_id' => 'ForeignKey',
      'estado_matricula_fin_id'    => 'ForeignKey',
      'fecha_inscripcion'          => 'Date',
      'apreciacion_final'          => 'Text',
      'postula_acreditacion_n_id'  => 'ForeignKey',
      'postula_acreditacion_c_id'  => 'ForeignKey',
    );
  }
}
