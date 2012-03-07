<?php

/**
 * VisNotasPais form base class.
 *
 * @method VisNotasPais getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisNotasPaisForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'distrito'          => new sfWidgetFormInputText(),
      'cod_distrito'      => new sfWidgetFormInputText(),
      'desc_ue'           => new sfWidgetFormInputText(),
      'cod_ue'            => new sfWidgetFormInputText(),
      'gestion_id'        => new sfWidgetFormInputText(),
      'codigo_rude'       => new sfWidgetFormInputText(),
      'paterno'           => new sfWidgetFormInputText(),
      'materno'           => new sfWidgetFormInputText(),
      'nombre'            => new sfWidgetFormInputText(),
      'fecha_nacimiento'  => new sfWidgetFormDate(),
      'desc_asignatura'   => new sfWidgetFormInputText(),
      'primer_trimestre'  => new sfWidgetFormInputText(),
      'segundo_trimestre' => new sfWidgetFormInputText(),
      'tercer_trimestre'  => new sfWidgetFormInputText(),
      'promedio_anual'    => new sfWidgetFormInputText(),
      'reforzamiento'     => new sfWidgetFormInputText(),
      'promedio_final'    => new sfWidgetFormInputText(),
      'desc_nivel'        => new sfWidgetFormInputText(),
      'desc_grado'        => new sfWidgetFormInputText(),
      'paralelo'          => new sfWidgetFormInputText(),
      'desc_turno'        => new sfWidgetFormInputText(),
      'matricula_inicio'  => new sfWidgetFormInputText(),
      'matricula_fin'     => new sfWidgetFormInputText(),
      'desc_modalidad'    => new sfWidgetFormInputText(),
      'desc_dependencia'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'distrito'          => new sfValidatorString(array('max_length' => 45)),
      'cod_distrito'      => new sfValidatorInteger(),
      'desc_ue'           => new sfValidatorString(array('max_length' => 70)),
      'cod_ue'            => new sfValidatorString(array('max_length' => 8)),
      'gestion_id'        => new sfValidatorInteger(),
      'codigo_rude'       => new sfValidatorString(array('max_length' => 18)),
      'paterno'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'materno'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_nacimiento'  => new sfValidatorDate(array('required' => false)),
      'desc_asignatura'   => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'primer_trimestre'  => new sfValidatorInteger(array('required' => false)),
      'segundo_trimestre' => new sfValidatorInteger(array('required' => false)),
      'tercer_trimestre'  => new sfValidatorInteger(array('required' => false)),
      'promedio_anual'    => new sfValidatorInteger(array('required' => false)),
      'reforzamiento'     => new sfValidatorInteger(array('required' => false)),
      'promedio_final'    => new sfValidatorInteger(array('required' => false)),
      'desc_nivel'        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'desc_grado'        => new sfValidatorString(array('max_length' => 45)),
      'paralelo'          => new sfValidatorString(array('max_length' => 2)),
      'desc_turno'        => new sfValidatorString(array('max_length' => 45)),
      'matricula_inicio'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'matricula_fin'     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'desc_modalidad'    => new sfValidatorString(array('max_length' => 45)),
      'desc_dependencia'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vis_notas_pais[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisNotasPais';
  }

}
