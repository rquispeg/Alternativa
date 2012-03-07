<?php

/**
 * ClaDatosComponente filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaDatosComponenteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'requisito_id'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tramite_id'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_datos_componente' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'requisito_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tramite_id'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_datos_componente' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_datos_componente_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaDatosComponente';
  }

  public function getFields()
  {
    return array(
      'id_datos_componente'   => 'Number',
      'requisito_id'          => 'Number',
      'tramite_id'            => 'Number',
      'desc_datos_componente' => 'Text',
    );
  }
}
