<?php

/**
 * ClaCerrada filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaCerradaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_cerrada' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'obs_cerrada'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'desc_cerrada' => new sfValidatorPass(array('required' => false)),
      'obs_cerrada'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_cerrada_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaCerrada';
  }

  public function getFields()
  {
    return array(
      'cod_cerrada'  => 'Number',
      'desc_cerrada' => 'Text',
      'obs_cerrada'  => 'Text',
    );
  }
}
