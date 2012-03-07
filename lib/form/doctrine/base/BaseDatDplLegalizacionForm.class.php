<?php

/**
 * DatDplLegalizacion form base class.
 *
 * @method DatDplLegalizacion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatDplLegalizacionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'inscripcion_id'     => new sfWidgetFormInputHidden(),
      'gestion_id'         => new sfWidgetFormInputHidden(),
      'fecha_de_ingreso'   => new sfWidgetFormDateTime(),
      'observacion'        => new sfWidgetFormInputText(),
      'usuario_entrada_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => false)),
      'usuario_salida_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario_5'), 'add_empty' => false)),
      'proceso_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTraProceso'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'inscripcion_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'inscripcion_id', 'required' => false)),
      'gestion_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'fecha_de_ingreso'   => new sfValidatorDateTime(),
      'observacion'        => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'usuario_entrada_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'))),
      'usuario_salida_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario_5'))),
      'proceso_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTraProceso'))),
    ));

    $this->widgetSchema->setNameFormat('dat_dpl_legalizacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatDplLegalizacion';
  }

}
