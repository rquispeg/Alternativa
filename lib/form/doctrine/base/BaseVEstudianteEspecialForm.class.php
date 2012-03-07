<?php

/**
 * VEstudianteEspecial form base class.
 *
 * @method VEstudianteEspecial getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVEstudianteEspecialForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'gestion_id'        => new sfWidgetFormInputText(),
      'desc_departamento' => new sfWidgetFormInputText(),
      'cod_distrito'      => new sfWidgetFormInputText(),
      'distrito'          => new sfWidgetFormInputText(),
      'cod_ue'            => new sfWidgetFormInputText(),
      'desc_ue'           => new sfWidgetFormInputText(),
      'desc_nivel'        => new sfWidgetFormInputText(),
      'id_ciclo'          => new sfWidgetFormInputText(),
      'desc_ciclo'        => new sfWidgetFormInputText(),
      'id_grado'          => new sfWidgetFormInputText(),
      'desc_grado'        => new sfWidgetFormInputText(),
      'desc_turno'        => new sfWidgetFormInputText(),
      'paralelo'          => new sfWidgetFormInputText(),
      'discapacidad'      => new sfWidgetFormInputText(),
      'codigo_rude'       => new sfWidgetFormInputText(),
      'paterno'           => new sfWidgetFormInputText(),
      'materno'           => new sfWidgetFormInputText(),
      'nombre'            => new sfWidgetFormInputText(),
      'fecha_nacimiento'  => new sfWidgetFormDate(),
      'genero'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'gestion_id'        => new sfValidatorInteger(),
      'desc_departamento' => new sfValidatorString(array('max_length' => 10)),
      'cod_distrito'      => new sfValidatorInteger(),
      'distrito'          => new sfValidatorString(array('max_length' => 45)),
      'cod_ue'            => new sfValidatorString(array('max_length' => 8)),
      'desc_ue'           => new sfValidatorString(array('max_length' => 70)),
      'desc_nivel'        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'id_ciclo'          => new sfValidatorInteger(),
      'desc_ciclo'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'id_grado'          => new sfValidatorInteger(),
      'desc_grado'        => new sfValidatorString(array('max_length' => 45)),
      'desc_turno'        => new sfValidatorString(array('max_length' => 45)),
      'paralelo'          => new sfValidatorString(array('max_length' => 2)),
      'discapacidad'      => new sfValidatorString(array('max_length' => 45)),
      'codigo_rude'       => new sfValidatorString(array('max_length' => 18)),
      'paterno'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'materno'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_nacimiento'  => new sfValidatorDate(array('required' => false)),
      'genero'            => new sfValidatorString(array('max_length' => 1)),
    ));

    $this->widgetSchema->setNameFormat('v_estudiante_especial[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VEstudianteEspecial';
  }

}
