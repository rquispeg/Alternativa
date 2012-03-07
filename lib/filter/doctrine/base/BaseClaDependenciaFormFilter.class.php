<?php

/**
 * ClaDependencia filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaDependenciaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_dependencia'           => new sfWidgetFormFilterInput(),
      'cod_tipo_administracion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoAdministracion'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'desc_dependencia'           => new sfValidatorPass(array('required' => false)),
      'cod_tipo_administracion_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaTipoAdministracion'), 'column' => 'cod_tipo_administracion')),
    ));

    $this->widgetSchema->setNameFormat('cla_dependencia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaDependencia';
  }

  public function getFields()
  {
    return array(
      'cod_dependencia'            => 'Number',
      'desc_dependencia'           => 'Text',
      'cod_tipo_administracion_id' => 'ForeignKey',
    );
  }
}
