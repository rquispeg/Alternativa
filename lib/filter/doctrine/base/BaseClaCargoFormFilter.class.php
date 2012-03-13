<?php

/**
 * ClaCargo filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaCargoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_cargo'     => new sfWidgetFormFilterInput(),
      'tipo_cargo_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoCargo'), 'add_empty' => true)),
      'id_sie_cliente' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'desc_cargo'     => new sfValidatorPass(array('required' => false)),
      'tipo_cargo_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaTipoCargo'), 'column' => 'id_tipo_cargo')),
      'id_sie_cliente' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('cla_cargo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaCargo';
  }

  public function getFields()
  {
    return array(
      'id_cargo'       => 'Number',
      'desc_cargo'     => 'Text',
      'tipo_cargo_id'  => 'ForeignKey',
      'id_sie_cliente' => 'Number',
    );
  }
}
