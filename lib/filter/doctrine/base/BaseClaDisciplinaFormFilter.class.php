<?php

/**
 * ClaDisciplina filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaDisciplinaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_disciplina' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'abr_disciplina'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'desc_disciplina' => new sfValidatorPass(array('required' => false)),
      'abr_disciplina'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_disciplina_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaDisciplina';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'desc_disciplina' => 'Text',
      'abr_disciplina'  => 'Text',
    );
  }
}
