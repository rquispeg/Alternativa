<?php

/**
 * DatRdeApoderado form base class.
 *
 * @method DatRdeApoderado getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRdeApoderadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_apoderado'     => new sfWidgetFormInputHidden(),
      'carnet_identidad' => new sfWidgetFormInputText(),
      'paterno'          => new sfWidgetFormInputText(),
      'materno'          => new sfWidgetFormInputText(),
      'nombre'           => new sfWidgetFormInputText(),
      'fecha_nacimiento' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id_apoderado'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_apoderado', 'required' => false)),
      'carnet_identidad' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'paterno'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'materno'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_nacimiento' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_rde_apoderado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRdeApoderado';
  }

}
