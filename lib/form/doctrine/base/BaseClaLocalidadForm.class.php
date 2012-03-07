<?php

/**
 * ClaLocalidad form base class.
 *
 * @method ClaLocalidad getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaLocalidadForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'departamento_id' => new sfWidgetFormInputHidden(),
      'provincia_id'    => new sfWidgetFormInputHidden(),
      'seccion_id'      => new sfWidgetFormInputHidden(),
      'canton_id'       => new sfWidgetFormInputHidden(),
      'id_localidad'    => new sfWidgetFormInputHidden(),
      'desc_localidad'  => new sfWidgetFormInputText(),
      'tipo_area'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'departamento_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'departamento_id', 'required' => false)),
      'provincia_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'provincia_id', 'required' => false)),
      'seccion_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'seccion_id', 'required' => false)),
      'canton_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'canton_id', 'required' => false)),
      'id_localidad'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_localidad', 'required' => false)),
      'desc_localidad'  => new sfValidatorString(array('max_length' => 125)),
      'tipo_area'       => new sfValidatorString(array('max_length' => 1)),
    ));

    $this->widgetSchema->setNameFormat('cla_localidad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaLocalidad';
  }

}
