<?php

/**
 * CtrRdeTraslados filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrRdeTrasladosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha_traslado'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'inscripcion_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcion'), 'add_empty' => true)),
      'gestion_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcion_3'), 'add_empty' => true)),
      'usuario_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => true)),
      'motivo_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaMotivo'), 'add_empty' => true)),
      'cod_ue_id_origen' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRueUnidadEducativa'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'fecha_traslado'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'inscripcion_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRdeInscripcion'), 'column' => 'id_inscripcion')),
      'gestion_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRdeInscripcion_3'), 'column' => 'id_inscripcion')),
      'usuario_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatUsuUsuario'), 'column' => 'id')),
      'motivo_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaMotivo'), 'column' => 'id_motivo')),
      'cod_ue_id_origen' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRueUnidadEducativa'), 'column' => 'cod_ue')),
    ));

    $this->widgetSchema->setNameFormat('ctr_rde_traslados_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrRdeTraslados';
  }

  public function getFields()
  {
    return array(
      'id_traslado'      => 'Number',
      'fecha_traslado'   => 'Date',
      'inscripcion_id'   => 'ForeignKey',
      'gestion_id'       => 'ForeignKey',
      'usuario_id'       => 'ForeignKey',
      'motivo_id'        => 'ForeignKey',
      'cod_ue_id_origen' => 'ForeignKey',
    );
  }
}
