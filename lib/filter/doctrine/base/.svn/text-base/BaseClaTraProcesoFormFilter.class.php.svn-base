<?php

/**
 * ClaTraProceso filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaTraProcesoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tramite_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTraTramite'), 'add_empty' => true)),
      'numero_proceso'  => new sfWidgetFormFilterInput(),
      'desc_proceso'    => new sfWidgetFormFilterInput(),
      'tiempo_proceso'  => new sfWidgetFormFilterInput(),
      'tipo_proceso_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoProceso'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'tramite_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaTraTramite'), 'column' => 'id_tramite')),
      'numero_proceso'  => new sfValidatorPass(array('required' => false)),
      'desc_proceso'    => new sfValidatorPass(array('required' => false)),
      'tiempo_proceso'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo_proceso_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaTipoProceso'), 'column' => 'id_tipo_proceso')),
    ));

    $this->widgetSchema->setNameFormat('cla_tra_proceso_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaTraProceso';
  }

  public function getFields()
  {
    return array(
      'id_proceso'      => 'Number',
      'tramite_id'      => 'ForeignKey',
      'numero_proceso'  => 'Text',
      'desc_proceso'    => 'Text',
      'tiempo_proceso'  => 'Number',
      'tipo_proceso_id' => 'ForeignKey',
    );
  }
}
