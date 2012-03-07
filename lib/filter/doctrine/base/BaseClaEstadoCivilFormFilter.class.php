<?php

/**
 * ClaEstadoCivil filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaEstadoCivilFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'estado_civil'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'estado_civil'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_estado_civil_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaEstadoCivil';
  }

  public function getFields()
  {
    return array(
      'id_estado_civil' => 'Number',
      'estado_civil'    => 'Text',
    );
  }
}
