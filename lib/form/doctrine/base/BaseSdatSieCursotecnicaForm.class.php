<?php

/**
 * SdatSieCursotecnica form base class.
 *
 * @method SdatSieCursotecnica getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSdatSieCursotecnicaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue_id'              => new sfWidgetFormInputHidden(),
      'sub_cea_id'             => new sfWidgetFormInputHidden(),
      'gestion_id'             => new sfWidgetFormInputText(),
      'operativo_id'           => new sfWidgetFormInputText(),
      'periodo_id'             => new sfWidgetFormInputHidden(),
      'nivel_id'               => new sfWidgetFormInputHidden(),
      'ciclo_id'               => new sfWidgetFormInputHidden(),
      'grado_id'               => new sfWidgetFormInputHidden(),
      'paralelo'               => new sfWidgetFormInputHidden(),
      'multigrado'             => new sfWidgetFormInputText(),
      'turno_id'               => new sfWidgetFormInputHidden(),
      'modalidad_ensenanza_id' => new sfWidgetFormInputText(),
      'nro_materias'           => new sfWidgetFormInputText(),
      'consolidado'            => new sfWidgetFormInputText(),
      'curso_oferta_id'        => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cod_ue_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'sub_cea_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'sub_cea_id', 'required' => false)),
      'gestion_id'             => new sfValidatorInteger(),
      'operativo_id'           => new sfValidatorInteger(array('required' => false)),
      'periodo_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'periodo_id', 'required' => false)),
      'nivel_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'nivel_id', 'required' => false)),
      'ciclo_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'ciclo_id', 'required' => false)),
      'grado_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'grado_id', 'required' => false)),
      'paralelo'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'paralelo', 'required' => false)),
      'multigrado'             => new sfValidatorInteger(array('required' => false)),
      'turno_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'turno_id', 'required' => false)),
      'modalidad_ensenanza_id' => new sfValidatorInteger(array('required' => false)),
      'nro_materias'           => new sfValidatorInteger(array('required' => false)),
      'consolidado'            => new sfValidatorInteger(array('required' => false)),
      'curso_oferta_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'curso_oferta_id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sdat_sie_cursotecnica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SdatSieCursotecnica';
  }

}
