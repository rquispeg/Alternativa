<?php

/**
 * VisClasificadosColectivos form base class.
 *
 * @method VisClasificadosColectivos getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisClasificadosColectivosForm extends BaseFormDoctrine
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
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorInteger(array('required' => false)),
      'cod_ue'             => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'desc_ue'            => new sfValidatorString(array('max_length' => 70, 'required' => false)),
      'posicion'           => new sfValidatorInteger(array('required' => false)),
      'genero_id'          => new sfValidatorString(array('max_length' => 7, 'required' => false)),
      'desc_disciplina'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'desc_prueba'        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'circunscripcion_id' => new sfValidatorInteger(array('required' => false)),
      'tipo_id'            => new sfValidatorInteger(array('required' => false)),
      'cod_distrito'       => new sfValidatorInteger(array('required' => false)),
      'distrito'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vis_clasificados_colectivos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisClasificadosColectivos';
  }

}
