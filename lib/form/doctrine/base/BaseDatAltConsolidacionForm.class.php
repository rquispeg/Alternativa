<?php

/**
 * DatAltConsolidacion form base class.
 *
 * @method DatAltConsolidacion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatAltConsolidacionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'cod_ue_id'           => new sfWidgetFormInputText(),
      'path_file'           => new sfWidgetFormTextarea(),
      'fecha_consolidacion' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'cod_ue_id'           => new sfValidatorString(array('max_length' => 8)),
      'path_file'           => new sfValidatorString(array('max_length' => 5000, 'required' => false)),
      'fecha_consolidacion' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_alt_consolidacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatAltConsolidacion';
  }

}
