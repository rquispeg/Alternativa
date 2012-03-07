<?php

/**
 * CtrDplAutorizacion form base class.
 *
 * @method CtrDplAutorizacion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrDplAutorizacionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'inscripcion_id'     => new sfWidgetFormInputHidden(),
      'gestion_id'         => new sfWidgetFormInputHidden(),
      'usuario_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => true)),
      'fecha_autorizacion' => new sfWidgetFormDateTime(),
      'bachillerato_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoBachillerato'), 'add_empty' => true)),
      'observaciones'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'inscripcion_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'inscripcion_id', 'required' => false)),
      'gestion_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'usuario_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'required' => false)),
      'fecha_autorizacion' => new sfValidatorDateTime(array('required' => false)),
      'bachillerato_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoBachillerato'), 'required' => false)),
      'observaciones'      => new sfValidatorString(array('max_length' => 100, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctr_dpl_autorizacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrDplAutorizacion';
  }

}
