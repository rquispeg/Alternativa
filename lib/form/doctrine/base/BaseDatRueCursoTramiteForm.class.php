<?php

/**
 * DatRueCursoTramite form base class.
 *
 * @method DatRueCursoTramite getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRueCursoTramiteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'formulario_id'          => new sfWidgetFormInputHidden(),
      'gestion_id'             => new sfWidgetFormInputHidden(),
      'periodo_id'             => new sfWidgetFormInputHidden(),
      'sub_cea_id'             => new sfWidgetFormInputHidden(),
      'nombre_subcea'          => new sfWidgetFormInputText(),
      'nivel_id'               => new sfWidgetFormInputHidden(),
      'ciclo_id'               => new sfWidgetFormInputHidden(),
      'grado_id'               => new sfWidgetFormInputHidden(),
      'paralelo'               => new sfWidgetFormInputHidden(),
      'turno_id'               => new sfWidgetFormInputHidden(),
      'multigrado'             => new sfWidgetFormInputText(),
      'desayuno_escolar'       => new sfWidgetFormInputText(),
      'modalidad_ensenanza_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaModalidadEnsenanza'), 'add_empty' => false)),
      'nro_materias'           => new sfWidgetFormInputText(),
      'consolidado'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'formulario_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'formulario_id', 'required' => false)),
      'gestion_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'periodo_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'periodo_id', 'required' => false)),
      'sub_cea_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'sub_cea_id', 'required' => false)),
      'nombre_subcea'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'nivel_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'nivel_id', 'required' => false)),
      'ciclo_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'ciclo_id', 'required' => false)),
      'grado_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'grado_id', 'required' => false)),
      'paralelo'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'paralelo', 'required' => false)),
      'turno_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'turno_id', 'required' => false)),
      'multigrado'             => new sfValidatorInteger(array('required' => false)),
      'desayuno_escolar'       => new sfValidatorInteger(array('required' => false)),
      'modalidad_ensenanza_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaModalidadEnsenanza'), 'required' => false)),
      'nro_materias'           => new sfValidatorInteger(array('required' => false)),
      'consolidado'            => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_rue_curso_tramite[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRueCursoTramite';
  }

}
