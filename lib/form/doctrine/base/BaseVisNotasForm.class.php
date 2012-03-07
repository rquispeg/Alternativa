<?php

/**
 * VisNotas form base class.
 *
 * @method VisNotas getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisNotasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                         => new sfWidgetFormInputHidden(),
      'desc_ue'                    => new sfWidgetFormInputText(),
      'cod_ue'                     => new sfWidgetFormInputText(),
      'gestion_id'                 => new sfWidgetFormInputText(),
      'codigo_rude'                => new sfWidgetFormInputText(),
      'paterno'                    => new sfWidgetFormInputText(),
      'materno'                    => new sfWidgetFormInputText(),
      'nombre'                     => new sfWidgetFormInputText(),
      'fecha_nacimiento'           => new sfWidgetFormDate(),
      'desc_asignatura'            => new sfWidgetFormInputText(),
      'primer_trimestre'           => new sfWidgetFormInputText(),
      'segundo_trimestre'          => new sfWidgetFormInputText(),
      'tercer_trimestre'           => new sfWidgetFormInputText(),
      'promedio_anual'             => new sfWidgetFormInputText(),
      'reforzamiento'              => new sfWidgetFormInputText(),
      'promedio_final'             => new sfWidgetFormInputText(),
      'cod_le_id'                  => new sfWidgetFormInputText(),
      'nivel_id'                   => new sfWidgetFormInputText(),
      'grado_id'                   => new sfWidgetFormInputText(),
      'ciclo_id'                   => new sfWidgetFormInputText(),
      'paralelo'                   => new sfWidgetFormInputText(),
      'turno_id'                   => new sfWidgetFormInputText(),
      'estado_matricula_inicio_id' => new sfWidgetFormInputText(),
      'estado_matricula_fin_id'    => new sfWidgetFormInputText(),
      'cod_org_curr_id'            => new sfWidgetFormInputText(),
      'cod_dependencia_id'         => new sfWidgetFormInputText(),
      'cod_convenio_id'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'desc_ue'                    => new sfValidatorString(array('max_length' => 70)),
      'cod_ue'                     => new sfValidatorString(array('max_length' => 8)),
      'gestion_id'                 => new sfValidatorInteger(),
      'codigo_rude'                => new sfValidatorString(array('max_length' => 18)),
      'paterno'                    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'materno'                    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'                     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_nacimiento'           => new sfValidatorDate(array('required' => false)),
      'desc_asignatura'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'primer_trimestre'           => new sfValidatorInteger(array('required' => false)),
      'segundo_trimestre'          => new sfValidatorInteger(array('required' => false)),
      'tercer_trimestre'           => new sfValidatorInteger(array('required' => false)),
      'promedio_anual'             => new sfValidatorInteger(array('required' => false)),
      'reforzamiento'              => new sfValidatorInteger(array('required' => false)),
      'promedio_final'             => new sfValidatorInteger(array('required' => false)),
      'cod_le_id'                  => new sfValidatorString(array('max_length' => 8)),
      'nivel_id'                   => new sfValidatorInteger(),
      'grado_id'                   => new sfValidatorInteger(),
      'ciclo_id'                   => new sfValidatorInteger(),
      'paralelo'                   => new sfValidatorString(array('max_length' => 2)),
      'turno_id'                   => new sfValidatorInteger(),
      'estado_matricula_inicio_id' => new sfValidatorInteger(),
      'estado_matricula_fin_id'    => new sfValidatorInteger(),
      'cod_org_curr_id'            => new sfValidatorInteger(),
      'cod_dependencia_id'         => new sfValidatorInteger(),
      'cod_convenio_id'            => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('vis_notas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisNotas';
  }

}
