<?php

/**
 * ClaEstadoDiplomas filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaEstadoDiplomasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_estado'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'imagen'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado_matricula_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'desc_estado'         => new sfValidatorPass(array('required' => false)),
      'imagen'              => new sfValidatorPass(array('required' => false)),
      'estado_matricula_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstadoMatricula'), 'column' => 'id_estado_matricula')),
    ));

    $this->widgetSchema->setNameFormat('cla_estado_diplomas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaEstadoDiplomas';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'desc_estado'         => 'Text',
      'imagen'              => 'Text',
      'estado_matricula_id' => 'ForeignKey',
    );
  }
}
