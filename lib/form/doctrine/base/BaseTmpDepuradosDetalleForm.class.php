<?php

/**
 * TmpDepuradosDetalle form base class.
 *
 * @method TmpDepuradosDetalle getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpDepuradosDetalleForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_rude_id'   => new sfWidgetFormInputText(),
      'codigo_rude_id_1' => new sfWidgetFormInputText(),
      'gestion_id_1'     => new sfWidgetFormInputText(),
      'secuen'           => new sfWidgetFormInputText(),
      'cod_ue_id_1'      => new sfWidgetFormInputText(),
      'id'               => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'codigo_rude_id'   => new sfValidatorString(array('max_length' => 18)),
      'codigo_rude_id_1' => new sfValidatorString(array('max_length' => 18)),
      'gestion_id_1'     => new sfValidatorInteger(),
      'secuen'           => new sfValidatorInteger(),
      'cod_ue_id_1'      => new sfValidatorString(array('max_length' => 18)),
      'id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tmp_depurados_detalle[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpDepuradosDetalle';
  }

}
