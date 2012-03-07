<?php

/**
 * DatEspDiscapacidad form base class.
 *
 * @method DatEspDiscapacidad getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatEspDiscapacidadForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'discapacidad_id' => new sfWidgetFormInputHidden(),
      'discapacidad'    => new sfWidgetFormInputText(),
      'id_area_esp'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaAreaEspecial'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'discapacidad_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'discapacidad_id', 'required' => false)),
      'discapacidad'    => new sfValidatorString(array('max_length' => 45)),
      'id_area_esp'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaAreaEspecial'))),
    ));

    $this->widgetSchema->setNameFormat('dat_esp_discapacidad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatEspDiscapacidad';
  }

}
