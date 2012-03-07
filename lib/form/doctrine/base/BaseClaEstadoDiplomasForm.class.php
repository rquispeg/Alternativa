<?php

/**
 * ClaEstadoDiplomas form base class.
 *
 * @method ClaEstadoDiplomas getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaEstadoDiplomasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'desc_estado'         => new sfWidgetFormInputText(),
      'imagen'              => new sfWidgetFormInputText(),
      'estado_matricula_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'desc_estado'         => new sfValidatorString(array('max_length' => 45)),
      'imagen'              => new sfValidatorString(array('max_length' => 45)),
      'estado_matricula_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula'))),
    ));

    $this->widgetSchema->setNameFormat('cla_estado_diplomas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaEstadoDiplomas';
  }

}
