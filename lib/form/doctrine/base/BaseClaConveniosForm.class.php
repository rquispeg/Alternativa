<?php

/**
 * ClaConvenios form base class.
 *
 * @method ClaConvenios getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaConveniosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_convenios'      => new sfWidgetFormInputHidden(),
      'desc_convenio'      => new sfWidgetFormInputText(),
      'fecha_inicio'       => new sfWidgetFormDateTime(),
      'fecha_finalizacion' => new sfWidgetFormDateTime(),
      'duracion'           => new sfWidgetFormInputText(),
      'tipo_convenio'      => new sfWidgetFormInputText(),
      'cod_dependencia_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDependencia'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'cod_convenios'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_convenios', 'required' => false)),
      'desc_convenio'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_inicio'       => new sfValidatorDateTime(array('required' => false)),
      'fecha_finalizacion' => new sfValidatorDateTime(array('required' => false)),
      'duracion'           => new sfValidatorInteger(array('required' => false)),
      'tipo_convenio'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cod_dependencia_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDependencia'))),
    ));

    $this->widgetSchema->setNameFormat('cla_convenios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaConvenios';
  }

}
