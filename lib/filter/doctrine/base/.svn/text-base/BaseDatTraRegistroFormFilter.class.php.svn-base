<?php

/**
 * DatTraRegistro filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatTraRegistroFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha_inicio'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_fin'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'tramitador_ci_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatTraTramitador'), 'add_empty' => true)),
      'tipo_parametro_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoParametro'), 'add_empty' => true)),
      'codigo_parametro'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'fecha_inicio'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fecha_fin'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'tramitador_ci_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatTraTramitador'), 'column' => 'ci')),
      'tipo_parametro_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaTipoParametro'), 'column' => 'id_tipo_parametro')),
      'codigo_parametro'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_tra_registro_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatTraRegistro';
  }

  public function getFields()
  {
    return array(
      'numero_tramite'    => 'Number',
      'gestion_id'        => 'Number',
      'tramite_id'        => 'Number',
      'cod_distrito_id'   => 'Number',
      'fecha_inicio'      => 'Date',
      'fecha_fin'         => 'Date',
      'tramitador_ci_id'  => 'ForeignKey',
      'tipo_parametro_id' => 'ForeignKey',
      'codigo_parametro'  => 'Text',
    );
  }
}
