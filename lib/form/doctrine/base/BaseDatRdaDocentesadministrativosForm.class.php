<?php

/**
 * DatRdaDocentesadministrativos form base class.
 *
 * @method DatRdaDocentesadministrativos getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRdaDocentesadministrativosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'rda'              => new sfWidgetFormInputHidden(),
      'ci'               => new sfWidgetFormInputText(),
      'paterno'          => new sfWidgetFormInputText(),
      'materno'          => new sfWidgetFormInputText(),
      'nombre'           => new sfWidgetFormInputText(),
      'fecha_nacimiento' => new sfWidgetFormInputText(),
      'genero'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'rda'              => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'rda', 'required' => false)),
      'ci'               => new sfValidatorInteger(array('required' => false)),
      'paterno'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'materno'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_nacimiento' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'genero'           => new sfValidatorString(array('max_length' => 1, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_rda_docentesadministrativos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRdaDocentesadministrativos';
  }

}
