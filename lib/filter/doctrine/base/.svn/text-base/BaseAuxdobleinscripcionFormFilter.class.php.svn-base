<?php

/**
 * Auxdobleinscripcion filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAuxdobleinscripcionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantidad' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'gestion'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cantidad' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('auxdobleinscripcion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Auxdobleinscripcion';
  }

  public function getFields()
  {
    return array(
      'codrude'  => 'Text',
      'gestion'  => 'Number',
      'cantidad' => 'Number',
    );
  }
}
