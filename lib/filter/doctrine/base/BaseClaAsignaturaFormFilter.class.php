<?php

/**
 * ClaAsignatura filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaAsignaturaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_asignatura' => new sfWidgetFormFilterInput(),
      'desc_abrev'      => new sfWidgetFormFilterInput(),
      'oficial'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'desc_asignatura' => new sfValidatorPass(array('required' => false)),
      'desc_abrev'      => new sfValidatorPass(array('required' => false)),
      'oficial'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('cla_asignatura_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaAsignatura';
  }

  public function getFields()
  {
    return array(
      'cod_asignatura'  => 'Number',
      'desc_asignatura' => 'Text',
      'desc_abrev'      => 'Text',
      'oficial'         => 'Number',
    );
  }
}
