<?php

/**
 * ClaCircunscripcion filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaCircunscripcionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_circunscripcion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'abr_circunscripcion'  => new sfWidgetFormFilterInput(),
      'departamento_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDepartamento'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'desc_circunscripcion' => new sfValidatorPass(array('required' => false)),
      'abr_circunscripcion'  => new sfValidatorPass(array('required' => false)),
      'departamento_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaDepartamento'), 'column' => 'id_departamento')),
    ));

    $this->widgetSchema->setNameFormat('cla_circunscripcion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaCircunscripcion';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'desc_circunscripcion' => 'Text',
      'abr_circunscripcion'  => 'Text',
      'departamento_id'      => 'ForeignKey',
    );
  }
}
