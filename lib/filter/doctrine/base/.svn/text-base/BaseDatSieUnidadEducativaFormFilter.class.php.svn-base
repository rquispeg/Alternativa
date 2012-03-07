<?php

/**
 * DatSieUnidadEducativa filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatSieUnidadEducativaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre_subcea'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'multigrado'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono1'            => new sfWidgetFormFilterInput(),
      'telefono2'            => new sfWidgetFormFilterInput(),
      'referencia_telefono2' => new sfWidgetFormFilterInput(),
      'fax'                  => new sfWidgetFormFilterInput(),
      'email'                => new sfWidgetFormFilterInput(),
      'casilla'              => new sfWidgetFormFilterInput(),
      'ci_director'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'director'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'item_director'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_cerrada_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCerrada'), 'add_empty' => true)),
      'turno_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTurno'), 'add_empty' => true)),
      'fecha_consolidacion'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'cod_le_id'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre_subcea'        => new sfValidatorPass(array('required' => false)),
      'multigrado'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'telefono1'            => new sfValidatorPass(array('required' => false)),
      'telefono2'            => new sfValidatorPass(array('required' => false)),
      'referencia_telefono2' => new sfValidatorPass(array('required' => false)),
      'fax'                  => new sfValidatorPass(array('required' => false)),
      'email'                => new sfValidatorPass(array('required' => false)),
      'casilla'              => new sfValidatorPass(array('required' => false)),
      'ci_director'          => new sfValidatorPass(array('required' => false)),
      'director'             => new sfValidatorPass(array('required' => false)),
      'item_director'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_cerrada_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaCerrada'), 'column' => 'cod_cerrada')),
      'turno_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaTurno'), 'column' => 'id_turno')),
      'fecha_consolidacion'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'cod_le_id'            => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_sie_unidad_educativa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatSieUnidadEducativa';
  }

  public function getFields()
  {
    return array(
      'cod_ue_id'            => 'Text',
      'sub_cea'              => 'Number',
      'gestion_id'           => 'Number',
      'operativo_id'         => 'Number',
      'periodo_id'           => 'Number',
      'nombre_subcea'        => 'Text',
      'multigrado'           => 'Number',
      'telefono1'            => 'Text',
      'telefono2'            => 'Text',
      'referencia_telefono2' => 'Text',
      'fax'                  => 'Text',
      'email'                => 'Text',
      'casilla'              => 'Text',
      'ci_director'          => 'Text',
      'director'             => 'Text',
      'item_director'        => 'Number',
      'cod_cerrada_id'       => 'ForeignKey',
      'turno_id'             => 'ForeignKey',
      'fecha_consolidacion'  => 'Date',
      'cod_le_id'            => 'Text',
    );
  }
}
