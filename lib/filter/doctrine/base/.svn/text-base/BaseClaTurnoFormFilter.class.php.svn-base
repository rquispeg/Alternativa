<?php

/**
 * ClaTurno filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaTurnoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_turno' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_abrv'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desc_turno' => new sfValidatorPass(array('required' => false)),
      'desc_abrv'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_turno_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaTurno';
  }

  public function getFields()
  {
    return array(
      'id_turno'   => 'Number',
      'desc_turno' => 'Text',
      'desc_abrv'  => 'Text',
    );
  }
}
