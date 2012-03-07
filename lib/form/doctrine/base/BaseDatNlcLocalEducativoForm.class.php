<?php

/**
 * DatNlcLocalEducativo form base class.
 *
 * @method DatNlcLocalEducativo getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatNlcLocalEducativoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_le_id'  => new sfWidgetFormInputHidden(),
      'cod_nucleo' => new sfWidgetFormInputHidden(),
      'gestion_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cod_le_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_le_id', 'required' => false)),
      'cod_nucleo' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_nucleo', 'required' => false)),
      'gestion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_nlc_local_educativo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatNlcLocalEducativo';
  }

}
