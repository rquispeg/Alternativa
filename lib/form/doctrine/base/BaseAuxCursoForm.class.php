<?php

/**
 * AuxCurso form base class.
 *
 * @method AuxCurso getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAuxCursoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue_id'   => new sfWidgetFormInputHidden(),
      'gestion_id'  => new sfWidgetFormInputHidden(),
      'nivel_id'    => new sfWidgetFormInputHidden(),
      'ciclo_id'    => new sfWidgetFormInputHidden(),
      'grado_id'    => new sfWidgetFormInputHidden(),
      'paralelo'    => new sfWidgetFormInputHidden(),
      'turno_id'    => new sfWidgetFormInputHidden(),
      'consolidado' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_ue_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'gestion_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'nivel_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'nivel_id', 'required' => false)),
      'ciclo_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'ciclo_id', 'required' => false)),
      'grado_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'grado_id', 'required' => false)),
      'paralelo'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'paralelo', 'required' => false)),
      'turno_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'turno_id', 'required' => false)),
      'consolidado' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('aux_curso[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AuxCurso';
  }

}
