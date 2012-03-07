<?php

/**
 * DatRueSubcentro form base class.
 *
 * @method DatRueSubcentro getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRueSubcentroForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue_id'           => new sfWidgetFormInputHidden(),
      'sub_cea'             => new sfWidgetFormInputHidden(),
      'subcentro'           => new sfWidgetFormInputText(),
      'cod_subcentro_le_id' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_ue_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'sub_cea'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'sub_cea', 'required' => false)),
      'subcentro'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'cod_subcentro_le_id' => new sfValidatorString(array('max_length' => 8, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_rue_subcentro[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRueSubcentro';
  }

}
