<?php

/**
 * TskMsgPortal form base class.
 *
 * @method TskMsgPortal getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTskMsgPortalForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'mensaje'             => new sfWidgetFormInputText(),
      'usuario_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => false)),
      'fecha_publicacion'   => new sfWidgetFormDateTime(),
      'fecha_depublicacion' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'mensaje'             => new sfValidatorString(array('max_length' => 125)),
      'usuario_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'))),
      'fecha_publicacion'   => new sfValidatorDateTime(),
      'fecha_depublicacion' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('tsk_msg_portal[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TskMsgPortal';
  }

}
