<?php

/**
 * ClaAcciones filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaAccionesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_accion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'url_accion'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'proceso_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTraProceso'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'desc_accion' => new sfValidatorPass(array('required' => false)),
      'url_accion'  => new sfValidatorPass(array('required' => false)),
      'proceso_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaTraProceso'), 'column' => 'id_proceso')),
    ));

    $this->widgetSchema->setNameFormat('cla_acciones_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaAcciones';
  }

  public function getFields()
  {
    return array(
      'id_accion'   => 'Number',
      'desc_accion' => 'Text',
      'url_accion'  => 'Text',
      'proceso_id'  => 'ForeignKey',
    );
  }
}
