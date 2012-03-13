<?php

/**
 * ClaCicloAcreditacion filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaCicloAcreditacionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'descciclo'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descciclo1'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'abrev'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'descciclo'       => new sfValidatorPass(array('required' => false)),
      'descciclo1'      => new sfValidatorPass(array('required' => false)),
      'abrev'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_ciclo_acreditacion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaCicloAcreditacion';
  }

  public function getFields()
  {
    return array(
      'nivel_id'        => 'Number',
      'id_acreditacion' => 'Number',
      'descciclo'       => 'Text',
      'descciclo1'      => 'Text',
      'abrev'           => 'Text',
    );
  }
}
