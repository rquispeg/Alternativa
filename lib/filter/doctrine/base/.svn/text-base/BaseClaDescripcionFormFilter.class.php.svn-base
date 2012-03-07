<?php

/**
 * ClaDescripcion filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaDescripcionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_descripcion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'abr_descripcion'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'desc_descripcion' => new sfValidatorPass(array('required' => false)),
      'abr_descripcion'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_descripcion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaDescripcion';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'desc_descripcion' => 'Text',
      'abr_descripcion'  => 'Text',
    );
  }
}
