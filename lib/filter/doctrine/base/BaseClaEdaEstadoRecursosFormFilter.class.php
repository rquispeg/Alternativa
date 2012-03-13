<?php

/**
 * ClaEdaEstadoRecursos filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaEdaEstadoRecursosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_estado_recursos' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desc_estado_recursos' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_eda_estado_recursos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaEdaEstadoRecursos';
  }

  public function getFields()
  {
    return array(
      'id_estado_recursos'   => 'Number',
      'desc_estado_recursos' => 'Text',
    );
  }
}
