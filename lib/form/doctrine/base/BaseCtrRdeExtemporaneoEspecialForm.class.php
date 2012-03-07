<?php

/**
 * CtrRdeExtemporaneoEspecial form base class.
 *
 * @method CtrRdeExtemporaneoEspecial getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrRdeExtemporaneoEspecialForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_extemporaneo'    => new sfWidgetFormInputHidden(),
      'fecha_extemporaneo' => new sfWidgetFormDateTime(),
      'inscripcion_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcionEspecial'), 'add_empty' => false)),
      'gestion_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcionEspecial_2'), 'add_empty' => false)),
      'usuario_id'         => new sfWidgetFormInputText(),
      'rde_bool'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_extemporaneo'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_extemporaneo', 'required' => false)),
      'fecha_extemporaneo' => new sfValidatorDateTime(),
      'inscripcion_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcionEspecial'))),
      'gestion_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcionEspecial_2'))),
      'usuario_id'         => new sfValidatorInteger(),
      'rde_bool'           => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('ctr_rde_extemporaneo_especial[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrRdeExtemporaneoEspecial';
  }

}
