<?php

/**
 * DatTraSeguimiento filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatTraSeguimientoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'proceso_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTraProceso'), 'add_empty' => true)),
      'usuario_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => true)),
      'numero_tramite_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatTraRegistro'), 'add_empty' => true)),
      'tramite_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatTraRegistro_5'), 'add_empty' => true)),
      'cod_distrito_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatTraRegistro_6'), 'add_empty' => true)),
      'fecha_inicio'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_fin'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'observaciones'     => new sfWidgetFormFilterInput(),
      'estado_proceso_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoProceso'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'proceso_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaTraProceso'), 'column' => 'id_proceso')),
      'usuario_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatUsuUsuario'), 'column' => 'id')),
      'numero_tramite_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatTraRegistro'), 'column' => 'numero_tramite')),
      'tramite_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatTraRegistro_5'), 'column' => 'numero_tramite')),
      'cod_distrito_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatTraRegistro_6'), 'column' => 'numero_tramite')),
      'fecha_inicio'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fecha_fin'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'observaciones'     => new sfValidatorPass(array('required' => false)),
      'estado_proceso_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstadoProceso'), 'column' => 'id_estado_proceso')),
    ));

    $this->widgetSchema->setNameFormat('dat_tra_seguimiento_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatTraSeguimiento';
  }

  public function getFields()
  {
    return array(
      'id_seguimiento'    => 'Number',
      'gestion_id'        => 'Number',
      'proceso_id'        => 'ForeignKey',
      'usuario_id'        => 'ForeignKey',
      'numero_tramite_id' => 'ForeignKey',
      'tramite_id'        => 'ForeignKey',
      'cod_distrito_id'   => 'ForeignKey',
      'fecha_inicio'      => 'Date',
      'fecha_fin'         => 'Date',
      'observaciones'     => 'Text',
      'estado_proceso_id' => 'ForeignKey',
    );
  }
}
