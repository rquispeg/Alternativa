<?php

/**
 * SdatRdeInscripcionTecnica form base class.
 *
 * @method SdatRdeInscripcionTecnica getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSdatRdeInscripcionTecnicaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'inscripcion_id'             => new sfWidgetFormInputHidden(),
      'gestion_id'                 => new sfWidgetFormInputHidden(),
      'codigo_rude_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'), 'add_empty' => false)),
      'num_matricula'              => new sfWidgetFormInputText(),
      'cod_ue_id'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCursotecnica'), 'add_empty' => false)),
      'periodo_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCursotecnica_5'), 'add_empty' => false)),
      'sub_cea_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCursotecnica_6'), 'add_empty' => false)),
      'grado_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCursotecnica_7'), 'add_empty' => false)),
      'ciclo_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCursotecnica_8'), 'add_empty' => false)),
      'nivel_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCursotecnica_9'), 'add_empty' => false)),
      'paralelo'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCursotecnica_10'), 'add_empty' => false)),
      'turno_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCursotecnica_11'), 'add_empty' => false)),
      'curso_oferta_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCursotecnica_12'), 'add_empty' => false)),
      'estado_matricula_inicio_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula_3'), 'add_empty' => false)),
      'estado_matricula_fin_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula'), 'add_empty' => false)),
      'observacion_id'             => new sfWidgetFormInputText(),
      'observacion'                => new sfWidgetFormInputText(),
      'fecha_inscripcion'          => new sfWidgetFormDateTime(),
      'apreciacion_id'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'inscripcion_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'inscripcion_id', 'required' => false)),
      'gestion_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'codigo_rude_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'))),
      'num_matricula'              => new sfValidatorInteger(),
      'cod_ue_id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCursotecnica'))),
      'periodo_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCursotecnica_5'))),
      'sub_cea_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCursotecnica_6'))),
      'grado_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCursotecnica_7'))),
      'ciclo_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCursotecnica_8'))),
      'nivel_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCursotecnica_9'))),
      'paralelo'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCursotecnica_10'))),
      'turno_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCursotecnica_11'))),
      'curso_oferta_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCursotecnica_12'))),
      'estado_matricula_inicio_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula_3'))),
      'estado_matricula_fin_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula'))),
      'observacion_id'             => new sfValidatorInteger(),
      'observacion'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fecha_inscripcion'          => new sfValidatorDateTime(),
      'apreciacion_id'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sdat_rde_inscripcion_tecnica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SdatRdeInscripcionTecnica';
  }

}
