<?php

/**
 * DatSieOfertaCurricular filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatSieOfertaCurricularFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSlnEstudios'), 'add_empty' => true)),
      'cod_asignatura_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSlnEstudios_7'), 'add_empty' => true)),
      'nivel_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGrado_4'), 'add_empty' => true)),
      'ciclo_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGrado_3'), 'add_empty' => true)),
      'grado_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGrado'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'cod_ue_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSlnEstudios'), 'column' => 'cod_ue_id')),
      'cod_asignatura_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSlnEstudios_7'), 'column' => 'cod_ue_id')),
      'nivel_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaGrado_4'), 'column' => 'nivel_id')),
      'ciclo_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaGrado_3'), 'column' => 'nivel_id')),
      'grado_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaGrado'), 'column' => 'nivel_id')),
    ));

    $this->widgetSchema->setNameFormat('dat_sie_oferta_curricular_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatSieOfertaCurricular';
  }

  public function getFields()
  {
    return array(
      'id_oferta_curricular' => 'Number',
      'gestion_id'           => 'Number',
      'cod_ue_id'            => 'ForeignKey',
      'cod_asignatura_id'    => 'ForeignKey',
      'nivel_id'             => 'ForeignKey',
      'ciclo_id'             => 'ForeignKey',
      'grado_id'             => 'ForeignKey',
    );
  }
}
