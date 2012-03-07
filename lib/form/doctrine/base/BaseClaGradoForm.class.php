<?php

/**
 * ClaGrado form base class.
 *
 * @method ClaGrado getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaGradoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nivel_id'    => new sfWidgetFormInputHidden(),
      'ciclo_id'    => new sfWidgetFormInputHidden(),
      'id_grado'    => new sfWidgetFormInputHidden(),
      'desc_grado'  => new sfWidgetFormInputText(),
      'edad_minima' => new sfWidgetFormInputText(),
      'edad_maxima' => new sfWidgetFormInputText(),
      'seguimiento' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'nivel_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'nivel_id', 'required' => false)),
      'ciclo_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'ciclo_id', 'required' => false)),
      'id_grado'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_grado', 'required' => false)),
      'desc_grado'  => new sfValidatorString(array('max_length' => 45)),
      'edad_minima' => new sfValidatorInteger(array('required' => false)),
      'edad_maxima' => new sfValidatorInteger(array('required' => false)),
      'seguimiento' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('cla_grado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaGrado';
  }

}
