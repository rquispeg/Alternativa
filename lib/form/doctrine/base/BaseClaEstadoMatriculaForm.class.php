<?php

/**
 * ClaEstadoMatricula form base class.
 *
 * @method ClaEstadoMatricula getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaEstadoMatriculaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_estado_matricula'   => new sfWidgetFormInputHidden(),
      'desc_estado_matricula' => new sfWidgetFormInputText(),
      'operativo'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_estado_matricula'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_estado_matricula', 'required' => false)),
      'desc_estado_matricula' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'operativo'             => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('cla_estado_matricula[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaEstadoMatricula';
  }

}
