<?php

/**
 * DatRdeInscripcionT filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRdeInscripcionTFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_inscripcion_tecnica' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gestion_id'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_matricula'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ue_id'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'periodo_id'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'operativo_id'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sub_cea'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'curso_oferta_id'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigo_rude_id'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'modalidad_ensenanza_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_inscripcion'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'acreditacion'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nivel'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_inscripcion_tecnica' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gestion_id'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_matricula'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue_id'              => new sfValidatorPass(array('required' => false)),
      'periodo_id'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'operativo_id'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sub_cea'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'curso_oferta_id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'codigo_rude_id'         => new sfValidatorPass(array('required' => false)),
      'modalidad_ensenanza_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_inscripcion'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'acreditacion'           => new sfValidatorPass(array('required' => false)),
      'nivel'                  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_rde_inscripcion_t_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRdeInscripcionT';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'id_inscripcion_tecnica' => 'Number',
      'gestion_id'             => 'Number',
      'num_matricula'          => 'Number',
      'cod_ue_id'              => 'Text',
      'periodo_id'             => 'Number',
      'operativo_id'           => 'Number',
      'sub_cea'                => 'Number',
      'curso_oferta_id'        => 'Number',
      'codigo_rude_id'         => 'Text',
      'modalidad_ensenanza_id' => 'Number',
      'fecha_inscripcion'      => 'Date',
      'acreditacion'           => 'Text',
      'nivel'                  => 'Text',
    );
  }
}
