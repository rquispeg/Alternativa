<?php

/**
 * DatDplLegalizacion filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatDplLegalizacionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha_de_ingreso'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'observacion'        => new sfWidgetFormFilterInput(),
      'usuario_entrada_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => true)),
      'usuario_salida_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario_5'), 'add_empty' => true)),
      'proceso_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTraProceso'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'fecha_de_ingreso'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'observacion'        => new sfValidatorPass(array('required' => false)),
      'usuario_entrada_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatUsuUsuario'), 'column' => 'id')),
      'usuario_salida_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatUsuUsuario_5'), 'column' => 'id')),
      'proceso_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaTraProceso'), 'column' => 'id_proceso')),
    ));

    $this->widgetSchema->setNameFormat('dat_dpl_legalizacion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatDplLegalizacion';
  }

  public function getFields()
  {
    return array(
      'inscripcion_id'     => 'Number',
      'gestion_id'         => 'Number',
      'fecha_de_ingreso'   => 'Date',
      'observacion'        => 'Text',
      'usuario_entrada_id' => 'ForeignKey',
      'usuario_salida_id'  => 'ForeignKey',
      'proceso_id'         => 'ForeignKey',
    );
  }
}
