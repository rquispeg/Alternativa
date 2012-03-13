<?php

/**
 * ClaPeriodo filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaPeriodoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'periodo'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_periodo_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoPeriodo'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'periodo'         => new sfValidatorPass(array('required' => false)),
      'tipo_periodo_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaTipoPeriodo'), 'column' => 'id_tipo_periodo')),
    ));

    $this->widgetSchema->setNameFormat('cla_periodo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaPeriodo';
  }

  public function getFields()
  {
    return array(
      'id_periodo'      => 'Number',
      'periodo'         => 'Text',
      'tipo_periodo_id' => 'ForeignKey',
    );
  }
}
