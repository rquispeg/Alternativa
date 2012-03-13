<?php

/**
 * DatJueApoyo filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatJueApoyoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'         => new sfWidgetFormFilterInput(),
      'paterno'        => new sfWidgetFormFilterInput(),
      'matenro'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ci'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ue_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRueUnidadEducativa'), 'add_empty' => true)),
      'descripcion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDescripcion'), 'add_empty' => true)),
      'telefono'       => new sfWidgetFormFilterInput(),
      'celular'        => new sfWidgetFormFilterInput(),
      'genero'         => new sfWidgetFormFilterInput(),
      'disciplina_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDisciplina'), 'add_empty' => true)),
      'estado_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstado'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre'         => new sfValidatorPass(array('required' => false)),
      'paterno'        => new sfValidatorPass(array('required' => false)),
      'matenro'        => new sfValidatorPass(array('required' => false)),
      'ci'             => new sfValidatorPass(array('required' => false)),
      'cod_ue_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRueUnidadEducativa'), 'column' => 'cod_ue')),
      'descripcion_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaDescripcion'), 'column' => 'id')),
      'telefono'       => new sfValidatorPass(array('required' => false)),
      'celular'        => new sfValidatorPass(array('required' => false)),
      'genero'         => new sfValidatorPass(array('required' => false)),
      'disciplina_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaDisciplina'), 'column' => 'id')),
      'estado_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstado'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('dat_jue_apoyo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatJueApoyo';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'nombre'         => 'Text',
      'paterno'        => 'Text',
      'matenro'        => 'Text',
      'ci'             => 'Text',
      'cod_ue_id'      => 'ForeignKey',
      'descripcion_id' => 'ForeignKey',
      'telefono'       => 'Text',
      'celular'        => 'Text',
      'genero'         => 'Text',
      'disciplina_id'  => 'ForeignKey',
      'estado_id'      => 'ForeignKey',
    );
  }
}
