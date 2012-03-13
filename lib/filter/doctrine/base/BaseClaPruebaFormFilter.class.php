<?php

/**
 * ClaPrueba filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaPruebaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_prueba'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'abr_prueba'    => new sfWidgetFormFilterInput(),
      'disciplina_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDisciplina'), 'add_empty' => true)),
      'tipo_id'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desc_prueba'   => new sfValidatorPass(array('required' => false)),
      'abr_prueba'    => new sfValidatorPass(array('required' => false)),
      'disciplina_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaDisciplina'), 'column' => 'id')),
      'tipo_id'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('cla_prueba_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaPrueba';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'desc_prueba'   => 'Text',
      'abr_prueba'    => 'Text',
      'disciplina_id' => 'ForeignKey',
      'tipo_id'       => 'Number',
    );
  }
}
