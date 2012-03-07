<?php

/**
 * DatSieDocenteadministrativo form base class.
 *
 * @method DatSieDocenteadministrativo getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatSieDocenteadministrativoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ci'               => new sfWidgetFormInputHidden(),
      'paterno'          => new sfWidgetFormInputText(),
      'materno'          => new sfWidgetFormInputText(),
      'nombre'           => new sfWidgetFormInputText(),
      'fecha_nacimiento' => new sfWidgetFormDate(),
      'genero'           => new sfWidgetFormInputText(),
      'formacion_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaFormacion'), 'add_empty' => false)),
      'especialidad_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEspecialidad'), 'add_empty' => false)),
      'rda_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdaDocentesadministrativos'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'ci'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'ci', 'required' => false)),
      'paterno'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'materno'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'           => new sfValidatorString(array('max_length' => 50)),
      'fecha_nacimiento' => new sfValidatorDate(),
      'genero'           => new sfValidatorString(array('max_length' => 1)),
      'formacion_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaFormacion'))),
      'especialidad_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEspecialidad'))),
      'rda_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdaDocentesadministrativos'))),
    ));

    $this->widgetSchema->setNameFormat('dat_sie_docenteadministrativo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatSieDocenteadministrativo';
  }

}
