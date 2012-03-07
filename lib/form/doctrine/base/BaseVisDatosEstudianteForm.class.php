<?php

/**
 * VisDatosEstudiante form base class.
 *
 * @method VisDatosEstudiante getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisDatosEstudianteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                      => new sfWidgetFormInputHidden(),
      'codigo_rude'             => new sfWidgetFormInputText(),
      'carnet_identidad'        => new sfWidgetFormInputText(),
      'paterno'                 => new sfWidgetFormInputText(),
      'materno'                 => new sfWidgetFormInputText(),
      'nombre'                  => new sfWidgetFormInputText(),
      'sub_cea_id'              => new sfWidgetFormInputText(),
      'periodo_id'              => new sfWidgetFormInputText(),
      'fecha_nacimiento'        => new sfWidgetFormDate(),
      'genero'                  => new sfWidgetFormInputText(),
      'localidad_nac'           => new sfWidgetFormInputText(),
      'num_matricula'           => new sfWidgetFormInputText(),
      'cod_ue_id'               => new sfWidgetFormInputText(),
      'gestion_id'              => new sfWidgetFormInputText(),
      'nivel_id'                => new sfWidgetFormInputText(),
      'ciclo_id'                => new sfWidgetFormInputText(),
      'grado_id'                => new sfWidgetFormInputText(),
      'paralelo'                => new sfWidgetFormInputText(),
      'estado_matricula_fin_id' => new sfWidgetFormInputText(),
      'cod_ue_procedencia_id'   => new sfWidgetFormInputText(),
      'desc_turno'              => new sfWidgetFormInputText(),
      'desc_abrv'               => new sfWidgetFormInputText(),
      'desc_provincia'          => new sfWidgetFormInputText(),
      'desc_departamento'       => new sfWidgetFormInputText(),
      'turno_id'                => new sfWidgetFormInputText(),
      'desc_abreviada'          => new sfWidgetFormInputText(),
      'id_nivel'                => new sfWidgetFormInputText(),
      'desc_nivel'              => new sfWidgetFormInputText(),
      'desc_grado'              => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'codigo_rude'             => new sfValidatorString(array('max_length' => 18)),
      'carnet_identidad'        => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'paterno'                 => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'materno'                 => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'                  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'sub_cea_id'              => new sfValidatorInteger(),
      'periodo_id'              => new sfValidatorInteger(),
      'fecha_nacimiento'        => new sfValidatorDate(array('required' => false)),
      'genero'                  => new sfValidatorString(array('max_length' => 1)),
      'localidad_nac'           => new sfValidatorString(array('max_length' => 125, 'required' => false)),
      'num_matricula'           => new sfValidatorInteger(array('required' => false)),
      'cod_ue_id'               => new sfValidatorString(array('max_length' => 8)),
      'gestion_id'              => new sfValidatorInteger(),
      'nivel_id'                => new sfValidatorInteger(),
      'ciclo_id'                => new sfValidatorInteger(),
      'grado_id'                => new sfValidatorInteger(),
      'paralelo'                => new sfValidatorString(array('max_length' => 2)),
      'estado_matricula_fin_id' => new sfValidatorInteger(),
      'cod_ue_procedencia_id'   => new sfValidatorString(array('max_length' => 8)),
      'desc_turno'              => new sfValidatorString(array('max_length' => 45)),
      'desc_abrv'               => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'desc_provincia'          => new sfValidatorString(array('max_length' => 25)),
      'desc_departamento'       => new sfValidatorString(array('max_length' => 10)),
      'turno_id'                => new sfValidatorInteger(),
      'desc_abreviada'          => new sfValidatorString(array('max_length' => 4)),
      'id_nivel'                => new sfValidatorInteger(),
      'desc_nivel'              => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'desc_grado'              => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('vis_datos_estudiante[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisDatosEstudiante';
  }

}
