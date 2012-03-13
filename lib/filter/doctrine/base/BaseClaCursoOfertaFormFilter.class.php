<?php

/**
 * ClaCursoOferta filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaCursoOfertaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_curso_oferta' => new sfWidgetFormFilterInput(),
      'area_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaArea'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'desc_curso_oferta' => new sfValidatorPass(array('required' => false)),
      'area_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaArea'), 'column' => 'id_area')),
    ));

    $this->widgetSchema->setNameFormat('cla_curso_oferta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaCursoOferta';
  }

  public function getFields()
  {
    return array(
      'id_curso_oferta'   => 'Number',
      'desc_curso_oferta' => 'Text',
      'area_id'           => 'ForeignKey',
    );
  }
}
