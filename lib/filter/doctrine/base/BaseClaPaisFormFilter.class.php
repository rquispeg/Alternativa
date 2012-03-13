<?php

/**
 * ClaPais filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaPaisFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_pais'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_abreviada' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'desc_pais'      => new sfValidatorPass(array('required' => false)),
      'desc_abreviada' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_pais_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaPais';
  }

  public function getFields()
  {
    return array(
      'id_pais'        => 'Number',
      'desc_pais'      => 'Text',
      'desc_abreviada' => 'Text',
    );
  }
}
