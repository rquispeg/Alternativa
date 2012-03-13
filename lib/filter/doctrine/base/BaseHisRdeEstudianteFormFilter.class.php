<?php

/**
 * HisRdeEstudiante filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseHisRdeEstudianteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_rude_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'), 'add_empty' => true)),
      'carnet_identidad'    => new sfWidgetFormFilterInput(),
      'pasaporte'           => new sfWidgetFormFilterInput(),
      'libreta_militar'     => new sfWidgetFormFilterInput(),
      'paterno'             => new sfWidgetFormFilterInput(),
      'materno'             => new sfWidgetFormFilterInput(),
      'nombre'              => new sfWidgetFormFilterInput(),
      'fecha_nacimiento'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'genero'              => new sfWidgetFormFilterInput(),
      'pais_nac_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaPais'), 'add_empty' => true)),
      'estado_civil_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoCivil'), 'add_empty' => true)),
      'departamento_nac_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaProvincia_5'), 'add_empty' => true)),
      'provincia_nac_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaProvincia'), 'add_empty' => true)),
      'localidad_nac'       => new sfWidgetFormFilterInput(),
      'oficialia'           => new sfWidgetFormFilterInput(),
      'libro'               => new sfWidgetFormFilterInput(),
      'partida'             => new sfWidgetFormFilterInput(),
      'folio'               => new sfWidgetFormFilterInput(),
      'grupo_sanguineo_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGrupoSanguineo'), 'add_empty' => true)),
      'idioma_materno_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma'), 'add_empty' => true)),
      'usuario_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => true)),
      'fecha_modificacion'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'user_bd'             => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'codigo_rude_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRdeEstudiante'), 'column' => 'codigo_rude')),
      'carnet_identidad'    => new sfValidatorPass(array('required' => false)),
      'pasaporte'           => new sfValidatorPass(array('required' => false)),
      'libreta_militar'     => new sfValidatorPass(array('required' => false)),
      'paterno'             => new sfValidatorPass(array('required' => false)),
      'materno'             => new sfValidatorPass(array('required' => false)),
      'nombre'              => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'genero'              => new sfValidatorPass(array('required' => false)),
      'pais_nac_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaPais'), 'column' => 'id_pais')),
      'estado_civil_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstadoCivil'), 'column' => 'id_estado_civil')),
      'departamento_nac_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaProvincia_5'), 'column' => 'departamento_id')),
      'provincia_nac_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaProvincia'), 'column' => 'departamento_id')),
      'localidad_nac'       => new sfValidatorPass(array('required' => false)),
      'oficialia'           => new sfValidatorPass(array('required' => false)),
      'libro'               => new sfValidatorPass(array('required' => false)),
      'partida'             => new sfValidatorPass(array('required' => false)),
      'folio'               => new sfValidatorPass(array('required' => false)),
      'grupo_sanguineo_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaGrupoSanguineo'), 'column' => 'id_grupo_sanguineo')),
      'idioma_materno_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaIdioma'), 'column' => 'id_idioma')),
      'usuario_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatUsuUsuario'), 'column' => 'id')),
      'fecha_modificacion'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'user_bd'             => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('his_rde_estudiante_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'HisRdeEstudiante';
  }

  public function getFields()
  {
    return array(
      'id_his_estudiante'   => 'Number',
      'codigo_rude_id'      => 'ForeignKey',
      'carnet_identidad'    => 'Text',
      'pasaporte'           => 'Text',
      'libreta_militar'     => 'Text',
      'paterno'             => 'Text',
      'materno'             => 'Text',
      'nombre'              => 'Text',
      'fecha_nacimiento'    => 'Date',
      'genero'              => 'Text',
      'pais_nac_id'         => 'ForeignKey',
      'estado_civil_id'     => 'ForeignKey',
      'departamento_nac_id' => 'ForeignKey',
      'provincia_nac_id'    => 'ForeignKey',
      'localidad_nac'       => 'Text',
      'oficialia'           => 'Text',
      'libro'               => 'Text',
      'partida'             => 'Text',
      'folio'               => 'Text',
      'grupo_sanguineo_id'  => 'ForeignKey',
      'idioma_materno_id'   => 'ForeignKey',
      'usuario_id'          => 'ForeignKey',
      'fecha_modificacion'  => 'Date',
      'user_bd'             => 'Text',
    );
  }
}
