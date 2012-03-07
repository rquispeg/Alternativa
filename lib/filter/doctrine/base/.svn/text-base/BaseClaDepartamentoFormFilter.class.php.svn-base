<?php

/**
 * ClaDepartamento filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaDepartamentoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_departamento' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pais_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaPais'), 'add_empty' => true)),
      'abrevacion_id'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'desc_departamento' => new sfValidatorPass(array('required' => false)),
      'pais_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaPais'), 'column' => 'id_pais')),
      'abrevacion_id'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_departamento_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaDepartamento';
  }

  public function getFields()
  {
    return array(
      'id_departamento'   => 'Number',
      'desc_departamento' => 'Text',
      'pais_id'           => 'ForeignKey',
      'abrevacion_id'     => 'Text',
    );
  }
}
