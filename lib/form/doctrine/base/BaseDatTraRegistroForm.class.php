<?php

/**
 * DatTraRegistro form base class.
 *
 * @method DatTraRegistro getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatTraRegistroForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'numero_tramite'    => new sfWidgetFormInputHidden(),
      'gestion_id'        => new sfWidgetFormInputHidden(),
      'tramite_id'        => new sfWidgetFormInputHidden(),
      'cod_distrito_id'   => new sfWidgetFormInputHidden(),
      'fecha_inicio'      => new sfWidgetFormDate(),
      'fecha_fin'         => new sfWidgetFormDate(),
      'tramitador_ci_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatTraTramitador'), 'add_empty' => false)),
      'tipo_parametro_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoParametro'), 'add_empty' => false)),
      'codigo_parametro'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'numero_tramite'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'numero_tramite', 'required' => false)),
      'gestion_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'tramite_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'tramite_id', 'required' => false)),
      'cod_distrito_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_distrito_id', 'required' => false)),
      'fecha_inicio'      => new sfValidatorDate(array('required' => false)),
      'fecha_fin'         => new sfValidatorDate(array('required' => false)),
      'tramitador_ci_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatTraTramitador'))),
      'tipo_parametro_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTipoParametro'))),
      'codigo_parametro'  => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('dat_tra_registro[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatTraRegistro';
  }

}
