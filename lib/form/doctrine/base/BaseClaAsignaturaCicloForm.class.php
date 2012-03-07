<?php

/**
 * ClaAsignaturaCiclo form base class.
 *
 * @method ClaAsignaturaCiclo getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaAsignaturaCicloForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_asignatura_id' => new sfWidgetFormInputHidden(),
      'nivel_id'          => new sfWidgetFormInputHidden(),
      'ciclo_id'          => new sfWidgetFormInputHidden(),
      'habilitado'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_asignatura_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_asignatura_id', 'required' => false)),
      'nivel_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'nivel_id', 'required' => false)),
      'ciclo_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'ciclo_id', 'required' => false)),
      'habilitado'        => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('cla_asignatura_ciclo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaAsignaturaCiclo';
  }

}
