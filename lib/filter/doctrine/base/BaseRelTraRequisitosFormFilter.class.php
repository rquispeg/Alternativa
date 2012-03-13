<?php

/**
 * RelTraRequisitos filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRelTraRequisitosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'opcional'      => new sfWidgetFormFilterInput(),
      'componente_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaComponente'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'opcional'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'componente_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaComponente'), 'column' => 'id_componente')),
    ));

    $this->widgetSchema->setNameFormat('rel_tra_requisitos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RelTraRequisitos';
  }

  public function getFields()
  {
    return array(
      'proceso_id'    => 'Number',
      'requisito_id'  => 'Number',
      'opcional'      => 'Number',
      'componente_id' => 'ForeignKey',
    );
  }
}
