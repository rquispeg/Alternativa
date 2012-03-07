<?php

/**
 * DatIfrUnidadEducativa form base class.
 *
 * @method DatIfrUnidadEducativa getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatIfrUnidadEducativaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_le_id'       => new sfWidgetFormInputHidden(),
      'gestion_id'      => new sfWidgetFormInputHidden(),
      'infraestructura' => new sfWidgetFormInputHidden(),
      'zona'            => new sfWidgetFormInputText(),
      'direccion'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_le_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_le_id', 'required' => false)),
      'gestion_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'infraestructura' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'infraestructura', 'required' => false)),
      'zona'            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'direccion'       => new sfValidatorString(array('max_length' => 100, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_ifr_unidad_educativa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatIfrUnidadEducativa';
  }

}
