<?php

/**
 * DatTraTramitador form base class.
 *
 * @method DatTraTramitador getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatTraTramitadorForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ci'                => new sfWidgetFormInputHidden(),
      'paterno'           => new sfWidgetFormInputText(),
      'materno'           => new sfWidgetFormInputText(),
      'nombre'            => new sfWidgetFormInputText(),
      'telefono_ref'      => new sfWidgetFormInputText(),
      'correo_eletronico' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ci'                => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'ci', 'required' => false)),
      'paterno'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'materno'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'telefono_ref'      => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'correo_eletronico' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_tra_tramitador[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatTraTramitador';
  }

}
