<?php

/**
 * TmpDepuSimilitud form base class.
 *
 * @method TmpDepuSimilitud getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpDepuSimilitudForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'paterno'          => new sfWidgetFormInputText(),
      'materno'          => new sfWidgetFormInputText(),
      'nombre'           => new sfWidgetFormInputText(),
      'fecha_nacimiento' => new sfWidgetFormDate(),
      'estado'           => new sfWidgetFormInputText(),
      'usuario_id'       => new sfWidgetFormInputText(),
      'cantidad'         => new sfWidgetFormInputText(),
      'id'               => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'paterno'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'materno'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'nombre'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_nacimiento' => new sfValidatorDate(array('required' => false)),
      'estado'           => new sfValidatorInteger(array('required' => false)),
      'usuario_id'       => new sfValidatorInteger(),
      'cantidad'         => new sfValidatorInteger(),
      'id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tmp_depu_similitud[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpDepuSimilitud';
  }

}
