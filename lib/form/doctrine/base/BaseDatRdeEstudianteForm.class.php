<?php

/**
 * DatRdeEstudiante form base class.
 *
 * @method DatRdeEstudiante getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRdeEstudianteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_rude'         => new sfWidgetFormInputHidden(),
      'carnet_identidad'    => new sfWidgetFormInputText(),
      'libreta_militar'     => new sfWidgetFormInputText(),
      'pasaporte'           => new sfWidgetFormInputText(),
      'paterno'             => new sfWidgetFormInputText(),
      'materno'             => new sfWidgetFormInputText(),
      'nombre'              => new sfWidgetFormInputText(),
      'fecha_nacimiento'    => new sfWidgetFormDate(),
      'genero'              => new sfWidgetFormInputText(),
      'estado_civil_id'     => new sfWidgetFormInputText(),
      'pais_nac_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaPais'), 'add_empty' => false)),
      'departamento_nac_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaProvincia_5'), 'add_empty' => false)),
      'provincia_nac_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaProvincia'), 'add_empty' => false)),
      'localidad_nac'       => new sfWidgetFormInputText(),
      'oficialia'           => new sfWidgetFormInputText(),
      'libro'               => new sfWidgetFormInputText(),
      'partida'             => new sfWidgetFormInputText(),
      'folio'               => new sfWidgetFormInputText(),
      'grupo_sanguineo_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGrupoSanguineo'), 'add_empty' => false)),
      'idioma_materno_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'codigo_rude'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo_rude', 'required' => false)),
      'carnet_identidad'    => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'libreta_militar'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'pasaporte'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'paterno'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'materno'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'              => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_nacimiento'    => new sfValidatorDate(array('required' => false)),
      'genero'              => new sfValidatorString(array('max_length' => 1)),
      'estado_civil_id'     => new sfValidatorInteger(array('required' => false)),
      'pais_nac_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaPais'), 'required' => false)),
      'departamento_nac_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaProvincia_5'), 'required' => false)),
      'provincia_nac_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaProvincia'), 'required' => false)),
      'localidad_nac'       => new sfValidatorString(array('max_length' => 125, 'required' => false)),
      'oficialia'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'libro'               => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'partida'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'folio'               => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'grupo_sanguineo_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGrupoSanguineo'), 'required' => false)),
      'idioma_materno_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_rde_estudiante[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRdeEstudiante';
  }

}
