<?php

/**
 * ClaEdaEstadoDesastre filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaEdaEstadoDesastreFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_estado_desastre' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desc_estado_desastre' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_eda_estado_desastre_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaEdaEstadoDesastre';
  }

  public function getFields()
  {
    return array(
      'id_estado_desastre'   => 'Number',
      'desc_estado_desastre' => 'Text',
    );
  }
}
