<?php

/**
 * CtrRdeNormales form base class.
 *
 * @method CtrRdeNormales getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrRdeNormalesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_normales'    => new sfWidgetFormInputHidden(),
      'fecha_normales' => new sfWidgetFormDateTime(),
      'inscripcion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcion'), 'add_empty' => false)),
      'gestion_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcion_2'), 'add_empty' => false)),
      'usuario_id'     => new sfWidgetFormInputText(),
      'rde_bool'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_normales'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_normales', 'required' => false)),
      'fecha_normales' => new sfValidatorDateTime(),
      'inscripcion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcion'))),
      'gestion_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcion_2'))),
      'usuario_id'     => new sfValidatorInteger(),
      'rde_bool'       => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('ctr_rde_normales[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrRdeNormales';
  }

}
