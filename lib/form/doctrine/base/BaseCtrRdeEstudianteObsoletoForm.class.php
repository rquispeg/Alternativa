<?php

/**
 * CtrRdeEstudianteObsoleto form base class.
 *
 * @method CtrRdeEstudianteObsoleto getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrRdeEstudianteObsoletoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_rude_actual'   => new sfWidgetFormInputHidden(),
      'inscripcion_id'       => new sfWidgetFormInputHidden(),
      'usuario_id'           => new sfWidgetFormInputText(),
      'codigo_rude_obs'      => new sfWidgetFormInputText(),
      'carnet_identidad'     => new sfWidgetFormInputText(),
      'libreta_militar'      => new sfWidgetFormInputText(),
      'pasaporte'            => new sfWidgetFormInputText(),
      'paterno'              => new sfWidgetFormInputText(),
      'materno'              => new sfWidgetFormInputText(),
      'nombre'               => new sfWidgetFormInputText(),
      'fecha_nacimiento'     => new sfWidgetFormDate(),
      'genero'               => new sfWidgetFormInputText(),
      'estado_civil_id'      => new sfWidgetFormInputText(),
      'pais_nac_id'          => new sfWidgetFormInputText(),
      'departamento_nac_id'  => new sfWidgetFormInputText(),
      'provincia_nac_id'     => new sfWidgetFormInputText(),
      'localidad_nac'        => new sfWidgetFormInputText(),
      'oficialia'            => new sfWidgetFormInputText(),
      'libro'                => new sfWidgetFormInputText(),
      'partida'              => new sfWidgetFormInputText(),
      'folio'                => new sfWidgetFormInputText(),
      'grupo_sanguineo_id'   => new sfWidgetFormInputText(),
      'idioma_materno_id'    => new sfWidgetFormInputText(),
      'fecha_correccion'     => new sfWidgetFormDateTime(),
      'observacion'          => new sfWidgetFormInputText(),
      'gestion_id'           => new sfWidgetFormInputHidden(),
      'sw_paterno'           => new sfWidgetFormInputText(),
      'sw_materno'           => new sfWidgetFormInputText(),
      'sw_nombre'            => new sfWidgetFormInputText(),
      'sw_fec_nac'           => new sfWidgetFormInputText(),
      'sw_ci'                => new sfWidgetFormInputText(),
      'sw_apoderado'         => new sfWidgetFormInputText(),
      'sw_historial'         => new sfWidgetFormInputText(),
      'sw_partida_nac'       => new sfWidgetFormInputText(),
      'confirmado'           => new sfWidgetFormInputText(),
      'consolidado'          => new sfWidgetFormInputText(),
      'usuario_confirmacion' => new sfWidgetFormInputText(),
      'cod_ue_id'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codigo_rude_actual'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo_rude_actual', 'required' => false)),
      'inscripcion_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'inscripcion_id', 'required' => false)),
      'usuario_id'           => new sfValidatorInteger(),
      'codigo_rude_obs'      => new sfValidatorString(array('max_length' => 18)),
      'carnet_identidad'     => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'libreta_militar'      => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'pasaporte'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'paterno'              => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'materno'              => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'               => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_nacimiento'     => new sfValidatorDate(array('required' => false)),
      'genero'               => new sfValidatorString(array('max_length' => 1)),
      'estado_civil_id'      => new sfValidatorInteger(array('required' => false)),
      'pais_nac_id'          => new sfValidatorInteger(array('required' => false)),
      'departamento_nac_id'  => new sfValidatorInteger(array('required' => false)),
      'provincia_nac_id'     => new sfValidatorInteger(array('required' => false)),
      'localidad_nac'        => new sfValidatorString(array('max_length' => 125, 'required' => false)),
      'oficialia'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'libro'                => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'partida'              => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'folio'                => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'grupo_sanguineo_id'   => new sfValidatorInteger(array('required' => false)),
      'idioma_materno_id'    => new sfValidatorInteger(array('required' => false)),
      'fecha_correccion'     => new sfValidatorDateTime(),
      'observacion'          => new sfValidatorString(array('max_length' => 200)),
      'gestion_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'sw_paterno'           => new sfValidatorInteger(array('required' => false)),
      'sw_materno'           => new sfValidatorInteger(array('required' => false)),
      'sw_nombre'            => new sfValidatorInteger(array('required' => false)),
      'sw_fec_nac'           => new sfValidatorInteger(array('required' => false)),
      'sw_ci'                => new sfValidatorInteger(array('required' => false)),
      'sw_apoderado'         => new sfValidatorInteger(array('required' => false)),
      'sw_historial'         => new sfValidatorInteger(array('required' => false)),
      'sw_partida_nac'       => new sfValidatorInteger(array('required' => false)),
      'confirmado'           => new sfValidatorInteger(array('required' => false)),
      'consolidado'          => new sfValidatorInteger(array('required' => false)),
      'usuario_confirmacion' => new sfValidatorInteger(),
      'cod_ue_id'            => new sfValidatorString(array('max_length' => 8)),
    ));

    $this->widgetSchema->setNameFormat('ctr_rde_estudiante_obsoleto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrRdeEstudianteObsoleto';
  }

}
