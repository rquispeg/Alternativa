<?php

/**
 * TmpDepurados form base class.
 *
 * @method TmpDepurados getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpDepuradosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'     => new sfWidgetFormInputHidden(),
      'cod_ue_id'      => new sfWidgetFormInputHidden(),
      'codigo_rude_id' => new sfWidgetFormInputHidden(),
      'secuen'         => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'gestion_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'cod_ue_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'codigo_rude_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo_rude_id', 'required' => false)),
      'secuen'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'secuen', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tmp_depurados[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpDepurados';
  }

}
