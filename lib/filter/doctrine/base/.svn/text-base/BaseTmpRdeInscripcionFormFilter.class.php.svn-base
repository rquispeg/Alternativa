<?php

/**
 * TmpRdeInscripcion filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpRdeInscripcionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigo_rude_id'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ue_id'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sub_cea_id'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nivel_id'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ciclo_id'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'grado_id'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'paralelo'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado_matricula_inicio_id' => new sfWidgetFormFilterInput(),
      'estado_matricula_fin_id'    => new sfWidgetFormFilterInput(),
      'turno'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'gestion_id'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'codigo_rude_id'             => new sfValidatorPass(array('required' => false)),
      'cod_ue_id'                  => new sfValidatorPass(array('required' => false)),
      'sub_cea_id'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nivel_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ciclo_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'grado_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'paralelo'                   => new sfValidatorPass(array('required' => false)),
      'estado_matricula_inicio_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estado_matricula_fin_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'turno'                      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tmp_rde_inscripcion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpRdeInscripcion';
  }

  public function getFields()
  {
    return array(
      'id'                         => 'Number',
      'gestion_id'                 => 'Number',
      'codigo_rude_id'             => 'Text',
      'cod_ue_id'                  => 'Text',
      'sub_cea_id'                 => 'Number',
      'nivel_id'                   => 'Number',
      'ciclo_id'                   => 'Number',
      'grado_id'                   => 'Number',
      'paralelo'                   => 'Text',
      'estado_matricula_inicio_id' => 'Number',
      'estado_matricula_fin_id'    => 'Number',
      'turno'                      => 'Text',
    );
  }
}
