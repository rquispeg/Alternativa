<?php

/**
 * CtrSieUnidadEducativaConsolidado form base class.
 *
 * @method CtrSieUnidadEducativaConsolidado getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrSieUnidadEducativaConsolidadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue_id'           => new sfWidgetFormInputHidden(),
      'sub_cea'             => new sfWidgetFormInputHidden(),
      'gestion_id'          => new sfWidgetFormInputHidden(),
      'operativo_id'        => new sfWidgetFormInputHidden(),
      'periodo_id'          => new sfWidgetFormInputHidden(),
      'fecha_consolidacion' => new sfWidgetFormDateTime(),
      'fecha_revision'      => new sfWidgetFormDateTime(),
      'hash'                => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_ue_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'sub_cea'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'sub_cea', 'required' => false)),
      'gestion_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'operativo_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'operativo_id', 'required' => false)),
      'periodo_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'periodo_id', 'required' => false)),
      'fecha_consolidacion' => new sfValidatorDateTime(),
      'fecha_revision'      => new sfValidatorDateTime(array('required' => false)),
      'hash'                => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('ctr_sie_unidad_educativa_consolidado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrSieUnidadEducativaConsolidado';
  }

}
