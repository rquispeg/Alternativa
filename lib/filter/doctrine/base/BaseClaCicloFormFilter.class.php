<?php

/**
 * ClaCiclo filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaCicloFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_ciclo' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desc_ciclo' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_ciclo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaCiclo';
  }

  public function getFields()
  {
    return array(
      'nivel_id'   => 'Number',
      'id_ciclo'   => 'Number',
      'desc_ciclo' => 'Text',
    );
  }
}
