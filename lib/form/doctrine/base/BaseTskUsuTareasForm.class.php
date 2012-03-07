<?php

/**
 * TskUsuTareas form base class.
 *
 * @method TskUsuTareas getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTskUsuTareasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'usuario_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => false)),
      'usuario_asignado_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario_2'), 'add_empty' => false)),
      'desc_tarea'          => new sfWidgetFormInputText(),
      'descripcion'         => new sfWidgetFormInputText(),
      'fecha_asignacion'    => new sfWidgetFormDateTime(),
      'fecha_finalizacion'  => new sfWidgetFormDateTime(),
      'realizado'           => new sfWidgetFormInputText(),
      'fecha_realizado'     => new sfWidgetFormDateTime(),
      'fecha_envio'         => new sfWidgetFormDateTime(),
      'tiempo_envio'        => new sfWidgetFormTime(),
      'conclusion'          => new sfWidgetFormInputText(),
      'enviado'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'usuario_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'))),
      'usuario_asignado_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario_2'))),
      'desc_tarea'          => new sfValidatorString(array('max_length' => 45)),
      'descripcion'         => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'fecha_asignacion'    => new sfValidatorDateTime(),
      'fecha_finalizacion'  => new sfValidatorDateTime(array('required' => false)),
      'realizado'           => new sfValidatorInteger(array('required' => false)),
      'fecha_realizado'     => new sfValidatorDateTime(array('required' => false)),
      'fecha_envio'         => new sfValidatorDateTime(),
      'tiempo_envio'        => new sfValidatorTime(),
      'conclusion'          => new sfValidatorString(array('max_length' => 200)),
      'enviado'             => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tsk_usu_tareas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TskUsuTareas';
  }

}
