<?php

/**
 * Prueba form base class.
 *
 * @method Prueba getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePruebaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                    => new sfWidgetFormInputHidden(),
      'gestion_id'            => new sfWidgetFormInputText(),
      'cod_distrito'          => new sfWidgetFormInputText(),
      'distrito'              => new sfWidgetFormInputText(),
      'cod_ue'                => new sfWidgetFormInputText(),
      'desc_ue'               => new sfWidgetFormInputText(),
      'codigo_rude'           => new sfWidgetFormInputText(),
      'carnet_identidad'      => new sfWidgetFormInputText(),
      'paterno'               => new sfWidgetFormInputText(),
      'materno'               => new sfWidgetFormInputText(),
      'nombre'                => new sfWidgetFormInputText(),
      'fecha_nacimiento'      => new sfWidgetFormDate(),
      'genero'                => new sfWidgetFormInputText(),
      'desc_nivel'            => new sfWidgetFormInputText(),
      'desc_grado'            => new sfWidgetFormInputText(),
      'desc_estado_matricula' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'gestion_id'            => new sfValidatorInteger(array('required' => false)),
      'cod_distrito'          => new sfValidatorInteger(array('required' => false)),
      'distrito'              => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cod_ue'                => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'desc_ue'               => new sfValidatorString(array('max_length' => 70, 'required' => false)),
      'codigo_rude'           => new sfValidatorString(array('max_length' => 18, 'required' => false)),
      'carnet_identidad'      => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'paterno'               => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'materno'               => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'                => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_nacimiento'      => new sfValidatorDate(array('required' => false)),
      'genero'                => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'desc_nivel'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'desc_grado'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'desc_estado_matricula' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('prueba[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Prueba';
  }

}
