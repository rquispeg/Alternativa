<?php

/**
 * ClaDiscapacidad filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaDiscapacidadFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_discapacidad' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desc_discapacidad' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_discapacidad_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaDiscapacidad';
  }

  public function getFields()
  {
    return array(
      'id_discapacidad'   => 'Number',
      'desc_discapacidad' => 'Text',
    );
  }
}
