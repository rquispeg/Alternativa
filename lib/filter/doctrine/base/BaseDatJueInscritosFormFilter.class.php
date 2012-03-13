<?php

/**
 * DatJueInscritos filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatJueInscritosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_rude_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'), 'add_empty' => true)),
      'cod_ue_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRueUnidadEducativa'), 'add_empty' => true)),
      'prueba_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaPrueba'), 'add_empty' => true)),
      'estado_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstado'), 'add_empty' => true)),
      'observacion_id'     => new sfWidgetFormFilterInput(),
      'gestion_id'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'circunscripcion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCircunscripcion'), 'add_empty' => true)),
      'fase_id'            => new sfWidgetFormFilterInput(),
      'fecha_ins'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'foto'               => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'codigo_rude_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRdeEstudiante'), 'column' => 'codigo_rude')),
      'cod_ue_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRueUnidadEducativa'), 'column' => 'cod_ue')),
      'prueba_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaPrueba'), 'column' => 'id')),
      'estado_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstado'), 'column' => 'id')),
      'observacion_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gestion_id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'circunscripcion_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaCircunscripcion'), 'column' => 'id')),
      'fase_id'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_ins'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'foto'               => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_jue_inscritos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatJueInscritos';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'codigo_rude_id'     => 'ForeignKey',
      'cod_ue_id'          => 'ForeignKey',
      'prueba_id'          => 'ForeignKey',
      'estado_id'          => 'ForeignKey',
      'observacion_id'     => 'Number',
      'gestion_id'         => 'Number',
      'circunscripcion_id' => 'ForeignKey',
      'fase_id'            => 'Number',
      'fecha_ins'          => 'Date',
      'foto'               => 'Text',
    );
  }
}
