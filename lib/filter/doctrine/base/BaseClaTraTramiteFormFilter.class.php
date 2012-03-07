<?php

/**
 * ClaTraTramite filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaTraTramiteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_tramite'      => new sfWidgetFormFilterInput(),
      'fecha_resolucion'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'numero_resolucion' => new sfWidgetFormFilterInput(),
      'vigente'           => new sfWidgetFormFilterInput(),
      'tipo_tramite_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoTramite'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'desc_tramite'      => new sfValidatorPass(array('required' => false)),
      'fecha_resolucion'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'numero_resolucion' => new sfValidatorPass(array('required' => false)),
      'vigente'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo_tramite_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaTipoTramite'), 'column' => 'id_tipo_tramite')),
    ));

    $this->widgetSchema->setNameFormat('cla_tra_tramite_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaTraTramite';
  }

  public function getFields()
  {
    return array(
      'id_tramite'        => 'Number',
      'desc_tramite'      => 'Text',
      'fecha_resolucion'  => 'Date',
      'numero_resolucion' => 'Text',
      'vigente'           => 'Number',
      'tipo_tramite_id'   => 'ForeignKey',
    );
  }
}
