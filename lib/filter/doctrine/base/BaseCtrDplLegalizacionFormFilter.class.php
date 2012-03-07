<?php

/**
 * CtrDplLegalizacion filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrDplLegalizacionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'serie_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CtrDplEntregado'), 'add_empty' => true)),
      'serie_alfanumerico' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CtrDplEntregado_2'), 'add_empty' => true)),
      'gestion_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CtrDplEntregado_3'), 'add_empty' => true)),
      'inscripcion_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CtrDplEntregado_4'), 'add_empty' => true)),
      'usuario_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => true)),
      'fecha_legalizacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'serie_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CtrDplEntregado'), 'column' => 'serie_id')),
      'serie_alfanumerico' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CtrDplEntregado_2'), 'column' => 'serie_id')),
      'gestion_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CtrDplEntregado_3'), 'column' => 'serie_id')),
      'inscripcion_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CtrDplEntregado_4'), 'column' => 'serie_id')),
      'usuario_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatUsuUsuario'), 'column' => 'id')),
      'fecha_legalizacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('ctr_dpl_legalizacion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrDplLegalizacion';
  }

  public function getFields()
  {
    return array(
      'serie_id'           => 'ForeignKey',
      'serie_alfanumerico' => 'ForeignKey',
      'gestion_id'         => 'ForeignKey',
      'inscripcion_id'     => 'ForeignKey',
      'usuario_id'         => 'ForeignKey',
      'fecha_legalizacion' => 'Date',
      'id_legalizacion'    => 'Text',
    );
  }
}
