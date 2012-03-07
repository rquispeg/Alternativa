<?php

/**
 * CtrDplAutorizacion filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrDplAutorizacionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'usuario_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => true)),
      'fecha_autorizacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'bachillerato_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoBachillerato'), 'add_empty' => true)),
      'observaciones'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'usuario_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatUsuUsuario'), 'column' => 'id')),
      'fecha_autorizacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'bachillerato_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaTipoBachillerato'), 'column' => 'id_bachillerato')),
      'observaciones'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctr_dpl_autorizacion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrDplAutorizacion';
  }

  public function getFields()
  {
    return array(
      'inscripcion_id'     => 'Number',
      'gestion_id'         => 'Number',
      'usuario_id'         => 'ForeignKey',
      'fecha_autorizacion' => 'Date',
      'bachillerato_id'    => 'ForeignKey',
      'observaciones'      => 'Text',
    );
  }
}
