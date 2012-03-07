<?php

/**
 * DatRdeEstudiante filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRdeEstudianteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'carnet_identidad'    => new sfWidgetFormFilterInput(),
      'libreta_militar'     => new sfWidgetFormFilterInput(),
      'pasaporte'           => new sfWidgetFormFilterInput(),
      'paterno'             => new sfWidgetFormFilterInput(),
      'materno'             => new sfWidgetFormFilterInput(),
      'nombre'              => new sfWidgetFormFilterInput(),
      'fecha_nacimiento'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'genero'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado_civil_id'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pais_nac_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaPais'), 'add_empty' => true)),
      'departamento_nac_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaProvincia_5'), 'add_empty' => true)),
      'provincia_nac_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaProvincia'), 'add_empty' => true)),
      'localidad_nac'       => new sfWidgetFormFilterInput(),
      'oficialia'           => new sfWidgetFormFilterInput(),
      'libro'               => new sfWidgetFormFilterInput(),
      'partida'             => new sfWidgetFormFilterInput(),
      'folio'               => new sfWidgetFormFilterInput(),
      'grupo_sanguineo_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGrupoSanguineo'), 'add_empty' => true)),
      'idioma_materno_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'carnet_identidad'    => new sfValidatorPass(array('required' => false)),
      'libreta_militar'     => new sfValidatorPass(array('required' => false)),
      'pasaporte'           => new sfValidatorPass(array('required' => false)),
      'paterno'             => new sfValidatorPass(array('required' => false)),
      'materno'             => new sfValidatorPass(array('required' => false)),
      'nombre'              => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'genero'              => new sfValidatorPass(array('required' => false)),
      'estado_civil_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'pais_nac_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaPais'), 'column' => 'id_pais')),
      'departamento_nac_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaProvincia_5'), 'column' => 'departamento_id')),
      'provincia_nac_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaProvincia'), 'column' => 'departamento_id')),
      'localidad_nac'       => new sfValidatorPass(array('required' => false)),
      'oficialia'           => new sfValidatorPass(array('required' => false)),
      'libro'               => new sfValidatorPass(array('required' => false)),
      'partida'             => new sfValidatorPass(array('required' => false)),
      'folio'               => new sfValidatorPass(array('required' => false)),
      'grupo_sanguineo_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaGrupoSanguineo'), 'column' => 'id_grupo_sanguineo')),
      'idioma_materno_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaIdioma'), 'column' => 'id_idioma')),
    ));

    $this->widgetSchema->setNameFormat('dat_rde_estudiante_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRdeEstudiante';
  }

  public function getFields()
  {
    return array(
      'codigo_rude'         => 'Text',
      'carnet_identidad'    => 'Text',
      'libreta_militar'     => 'Text',
      'pasaporte'           => 'Text',
      'paterno'             => 'Text',
      'materno'             => 'Text',
      'nombre'              => 'Text',
      'fecha_nacimiento'    => 'Date',
      'genero'              => 'Text',
      'estado_civil_id'     => 'Number',
      'pais_nac_id'         => 'ForeignKey',
      'departamento_nac_id' => 'ForeignKey',
      'provincia_nac_id'    => 'ForeignKey',
      'localidad_nac'       => 'Text',
      'oficialia'           => 'Text',
      'libro'               => 'Text',
      'partida'             => 'Text',
      'folio'               => 'Text',
      'grupo_sanguineo_id'  => 'ForeignKey',
      'idioma_materno_id'   => 'ForeignKey',
    );
  }
}
