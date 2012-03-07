<?php

/**
 * CtrSieUnidadEducativa form base class.
 *
 * @method CtrSieUnidadEducativa getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrSieUnidadEducativaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue_id'            => new sfWidgetFormInputHidden(),
      'sub_cea'              => new sfWidgetFormInputHidden(),
      'gestion_id'           => new sfWidgetFormInputHidden(),
      'operativo_id'         => new sfWidgetFormInputHidden(),
      'periodo_id'           => new sfWidgetFormInputHidden(),
      'nombre_subcea'        => new sfWidgetFormInputText(),
      'multigrado'           => new sfWidgetFormInputText(),
      'telefono1'            => new sfWidgetFormInputText(),
      'telefono2'            => new sfWidgetFormInputText(),
      'referencia_telefono2' => new sfWidgetFormInputText(),
      'fax'                  => new sfWidgetFormInputText(),
      'email'                => new sfWidgetFormInputText(),
      'casilla'              => new sfWidgetFormInputText(),
      'ci_director'          => new sfWidgetFormInputText(),
      'director'             => new sfWidgetFormInputText(),
      'item_director'        => new sfWidgetFormInputText(),
      'cod_cerrada_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCerrada'), 'add_empty' => false)),
      'turno_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTurno'), 'add_empty' => false)),
      'fecha_consolidacion'  => new sfWidgetFormDateTime(),
      'cod_le_id'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_ue_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'sub_cea'              => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'sub_cea', 'required' => false)),
      'gestion_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'operativo_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'operativo_id', 'required' => false)),
      'periodo_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'periodo_id', 'required' => false)),
      'nombre_subcea'        => new sfValidatorString(array('max_length' => 50)),
      'multigrado'           => new sfValidatorInteger(),
      'telefono1'            => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'telefono2'            => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'referencia_telefono2' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fax'                  => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'email'                => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'casilla'              => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'ci_director'          => new sfValidatorString(array('max_length' => 8)),
      'director'             => new sfValidatorString(array('max_length' => 80)),
      'item_director'        => new sfValidatorInteger(),
      'cod_cerrada_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCerrada'))),
      'turno_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTurno'))),
      'fecha_consolidacion'  => new sfValidatorDateTime(array('required' => false)),
      'cod_le_id'            => new sfValidatorString(array('max_length' => 8, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctr_sie_unidad_educativa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrSieUnidadEducativa';
  }

}
