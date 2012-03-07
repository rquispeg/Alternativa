<?php

/**
 * VisClasificadosColectivosDistancia form base class.
 *
 * @method VisClasificadosColectivosDistancia getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisClasificadosColectivosDistanciaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputText(),
      'cod_ue'             => new sfWidgetFormInputText(),
      'desc_ue'            => new sfWidgetFormInputText(),
      'posicion'           => new sfWidgetFormInputText(),
      'genero_id'          => new sfWidgetFormInputText(),
      'desc_disciplina'    => new sfWidgetFormInputText(),
      'desc_prueba'        => new sfWidgetFormInputText(),
      'circunscripcion_id' => new sfWidgetFormInputText(),
      'tipo_id'            => new sfWidgetFormInputText(),
      'cod_distrito'       => new sfWidgetFormInputText(),
      'distrito'           => new sfWidgetFormInputText(),
      'codigo_rude'        => new sfWidgetFormInputText(),
      'carnet_identidad'   => new sfWidgetFormInputText(),
      'paterno'            => new sfWidgetFormInputText(),
      'materno'            => new sfWidgetFormInputText(),
      'nombre'             => new sfWidgetFormInputText(),
      'fecha_nacimiento'   => new sfWidgetFormDate(),
      'distancia'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorInteger(array('required' => false)),
      'cod_ue'             => new sfValidatorString(array('max_length' => 8)),
      'desc_ue'            => new sfValidatorString(array('max_length' => 70)),
      'posicion'           => new sfValidatorInteger(),
      'genero_id'          => new sfValidatorString(array('max_length' => 7, 'required' => false)),
      'desc_disciplina'    => new sfValidatorString(array('max_length' => 255)),
      'desc_prueba'        => new sfValidatorString(array('max_length' => 45)),
      'circunscripcion_id' => new sfValidatorInteger(array('required' => false)),
      'tipo_id'            => new sfValidatorInteger(),
      'cod_distrito'       => new sfValidatorInteger(),
      'distrito'           => new sfValidatorString(array('max_length' => 45)),
      'codigo_rude'        => new sfValidatorString(array('max_length' => 18)),
      'carnet_identidad'   => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'paterno'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'materno'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_nacimiento'   => new sfValidatorDate(array('required' => false)),
      'distancia'          => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vis_clasificados_colectivos_distancia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisClasificadosColectivosDistancia';
  }

}
