<?php

/**
 * ClaTipoAdministracion filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaTipoAdministracionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_administracion'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desc_administracion'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_tipo_administracion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaTipoAdministracion';
  }

  public function getFields()
  {
    return array(
      'cod_tipo_administracion' => 'Number',
      'desc_administracion'     => 'Text',
    );
  }
}
