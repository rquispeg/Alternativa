<?php

/**
 * HisRdeEstudianteIdioma form base class.
 *
 * @method HisRdeEstudianteIdioma getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseHisRdeEstudianteIdiomaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'          => new sfWidgetFormInputHidden(),
      'codigo_rude_id'      => new sfWidgetFormInputHidden(),
      'idioma_id'           => new sfWidgetFormInputHidden(),
      'fecha_actualizacion' => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'gestion_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'codigo_rude_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo_rude_id', 'required' => false)),
      'idioma_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'idioma_id', 'required' => false)),
      'fecha_actualizacion' => new sfValidatorDate(),
    ));

    $this->widgetSchema->setNameFormat('his_rde_estudiante_idioma[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'HisRdeEstudianteIdioma';
  }

}
