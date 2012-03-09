<?php

/**
 * DatRueAcreditacion form base class.
 *
 * @method DatRueAcreditacion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRueAcreditacionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue_id'       => new sfWidgetFormInputHidden(),
      'acreditacion_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cod_ue_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'acreditacion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'acreditacion_id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_rue_acreditacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRueAcreditacion';
  }

}
