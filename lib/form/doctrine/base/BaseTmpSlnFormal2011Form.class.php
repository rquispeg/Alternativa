<?php

/**
 * TmpSlnFormal2011 form base class.
 *
 * @method TmpSlnFormal2011 getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpSlnFormal2011Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                          => new sfWidgetFormInputHidden(),
      'gestion_id'                  => new sfWidgetFormInputText(),
      'cod_ue_id'                   => new sfWidgetFormInputText(),
      'codigo_rude_id'              => new sfWidgetFormInputText(),
      'id_inscripcion'              => new sfWidgetFormInputText(),
      'curso_oferta_id'             => new sfWidgetFormInputText(),
      'nivel_id'                    => new sfWidgetFormInputText(),
      'ciclo_id'                    => new sfWidgetFormInputText(),
      'grado_id'                    => new sfWidgetFormInputText(),
      'paralelo'                    => new sfWidgetFormInputText(),
      'turno_id'                    => new sfWidgetFormInputText(),
      'nivel_curso_oferta'          => new sfWidgetFormInputText(),
      'ciclo_curso_oferta'          => new sfWidgetFormInputText(),
      'grado_curso_oferta'          => new sfWidgetFormInputText(),
      'paralelo_curso_oferta'       => new sfWidgetFormInputText(),
      'turno_curso_oferta'          => new sfWidgetFormInputText(),
      'primer_trimestre'            => new sfWidgetFormInputText(),
      'segundo_trimestre'           => new sfWidgetFormInputText(),
      'tercer_trimestre'            => new sfWidgetFormInputText(),
      'promedio_anual'              => new sfWidgetFormInputText(),
      'reforzamiento'               => new sfWidgetFormInputText(),
      'promedio_final'              => new sfWidgetFormInputText(),
      'primer_eval'                 => new sfWidgetFormInputText(),
      'segundo_eval'                => new sfWidgetFormInputText(),
      'tercer_eval'                 => new sfWidgetFormInputText(),
      'primer_dias_trab'            => new sfWidgetFormInputText(),
      'segundo_dias_trab'           => new sfWidgetFormInputText(),
      'tercer_dias_trab'            => new sfWidgetFormInputText(),
      'reforzamiento_dias_trab'     => new sfWidgetFormInputText(),
      'primer_faltas_licencia'      => new sfWidgetFormInputText(),
      'segundo_faltas_licencia'     => new sfWidgetFormInputText(),
      'tecer_faltas_licencia'       => new sfWidgetFormInputText(),
      'primer_faltas_sin_licencia'  => new sfWidgetFormInputText(),
      'segundo_faltas_sin_licencia' => new sfWidgetFormInputText(),
      'tercer_faltas_sin_licencia'  => new sfWidgetFormInputText(),
      'fecha_actualizacion'         => new sfWidgetFormDateTime(),
      'usuario_id'                  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'gestion_id'                  => new sfValidatorInteger(),
      'cod_ue_id'                   => new sfValidatorString(array('max_length' => 8)),
      'codigo_rude_id'              => new sfValidatorString(array('max_length' => 18)),
      'id_inscripcion'              => new sfValidatorInteger(),
      'curso_oferta_id'             => new sfValidatorInteger(),
      'nivel_id'                    => new sfValidatorInteger(),
      'ciclo_id'                    => new sfValidatorInteger(),
      'grado_id'                    => new sfValidatorInteger(),
      'paralelo'                    => new sfValidatorString(array('max_length' => 2)),
      'turno_id'                    => new sfValidatorInteger(),
      'nivel_curso_oferta'          => new sfValidatorInteger(),
      'ciclo_curso_oferta'          => new sfValidatorInteger(),
      'grado_curso_oferta'          => new sfValidatorInteger(),
      'paralelo_curso_oferta'       => new sfValidatorString(array('max_length' => 2)),
      'turno_curso_oferta'          => new sfValidatorInteger(),
      'primer_trimestre'            => new sfValidatorInteger(array('required' => false)),
      'segundo_trimestre'           => new sfValidatorInteger(array('required' => false)),
      'tercer_trimestre'            => new sfValidatorInteger(array('required' => false)),
      'promedio_anual'              => new sfValidatorInteger(array('required' => false)),
      'reforzamiento'               => new sfValidatorInteger(array('required' => false)),
      'promedio_final'              => new sfValidatorInteger(array('required' => false)),
      'primer_eval'                 => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'segundo_eval'                => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'tercer_eval'                 => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'primer_dias_trab'            => new sfValidatorInteger(array('required' => false)),
      'segundo_dias_trab'           => new sfValidatorInteger(array('required' => false)),
      'tercer_dias_trab'            => new sfValidatorInteger(array('required' => false)),
      'reforzamiento_dias_trab'     => new sfValidatorInteger(array('required' => false)),
      'primer_faltas_licencia'      => new sfValidatorInteger(array('required' => false)),
      'segundo_faltas_licencia'     => new sfValidatorInteger(array('required' => false)),
      'tecer_faltas_licencia'       => new sfValidatorInteger(array('required' => false)),
      'primer_faltas_sin_licencia'  => new sfValidatorInteger(array('required' => false)),
      'segundo_faltas_sin_licencia' => new sfValidatorInteger(array('required' => false)),
      'tercer_faltas_sin_licencia'  => new sfValidatorInteger(array('required' => false)),
      'fecha_actualizacion'         => new sfValidatorDateTime(),
      'usuario_id'                  => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('tmp_sln_formal2011[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpSlnFormal2011';
  }

}
