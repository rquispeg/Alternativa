<?php

/**
 * VInscripcion2009 form base class.
 *
 * @method VInscripcion2009 getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVInscripcion2009Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                         => new sfWidgetFormInputHidden(),
      'id_inscripcion'             => new sfWidgetFormInputText(),
      'gestion_id'                 => new sfWidgetFormInputText(),
      'codigo_rude_id'             => new sfWidgetFormInputText(),
      'num_matricula'              => new sfWidgetFormInputText(),
      'cod_ue_id'                  => new sfWidgetFormInputText(),
      'periodo_id'                 => new sfWidgetFormInputText(),
      'operativo_id'               => new sfWidgetFormInputText(),
      'sub_cea_id'                 => new sfWidgetFormInputText(),
      'nivel_id'                   => new sfWidgetFormInputText(),
      'grado_id'                   => new sfWidgetFormInputText(),
      'ciclo_id'                   => new sfWidgetFormInputText(),
      'paralelo'                   => new sfWidgetFormInputText(),
      'turno_id'                   => new sfWidgetFormInputText(),
      'estado_matricula_inicio_id' => new sfWidgetFormInputText(),
      'estado_matricula_fin_id'    => new sfWidgetFormInputText(),
      'cod_ue_procedencia_id'      => new sfWidgetFormInputText(),
      'observacion_id'             => new sfWidgetFormInputText(),
      'observacion'                => new sfWidgetFormInputText(),
      'fecha_inscripcion'          => new sfWidgetFormDate(),
      'apreciacion_final'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_inscripcion'             => new sfValidatorInteger(),
      'gestion_id'                 => new sfValidatorInteger(),
      'codigo_rude_id'             => new sfValidatorString(array('max_length' => 18)),
      'num_matricula'              => new sfValidatorInteger(array('required' => false)),
      'cod_ue_id'                  => new sfValidatorString(array('max_length' => 8)),
      'periodo_id'                 => new sfValidatorInteger(),
      'operativo_id'               => new sfValidatorInteger(),
      'sub_cea_id'                 => new sfValidatorInteger(),
      'nivel_id'                   => new sfValidatorInteger(),
      'grado_id'                   => new sfValidatorInteger(),
      'ciclo_id'                   => new sfValidatorInteger(),
      'paralelo'                   => new sfValidatorString(array('max_length' => 2)),
      'turno_id'                   => new sfValidatorInteger(),
      'estado_matricula_inicio_id' => new sfValidatorInteger(),
      'estado_matricula_fin_id'    => new sfValidatorInteger(),
      'cod_ue_procedencia_id'      => new sfValidatorString(array('max_length' => 8)),
      'observacion_id'             => new sfValidatorInteger(),
      'observacion'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fecha_inscripcion'          => new sfValidatorDate(array('required' => false)),
      'apreciacion_final'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('v_inscripcion2009[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VInscripcion2009';
  }

}
