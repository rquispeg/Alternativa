<?php

/**
 * DatOpeArchivo form base class.
 *
 * @method DatOpeArchivo getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatOpeArchivoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_archivo'            => new sfWidgetFormInputHidden(),
      'cod_ue_id'             => new sfWidgetFormInputText(),
      'gestion_id'            => new sfWidgetFormInputText(),
      'sub_cea_id'            => new sfWidgetFormInputText(),
      'operativo_id'          => new sfWidgetFormInputText(),
      'departamento'          => new sfWidgetFormInputText(),
      'path_archivo_emitido'  => new sfWidgetFormInputText(),
      'path_archivo_remitido' => new sfWidgetFormInputText(),
      'fecha_generacion'      => new sfWidgetFormDateTime(),
      'fecha_remision'        => new sfWidgetFormDateTime(),
      'fecha_consolidacion'   => new sfWidgetFormDateTime(),
      'estado_archivo_id'     => new sfWidgetFormInputText(),
      'codigo_control'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_archivo'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_archivo', 'required' => false)),
      'cod_ue_id'             => new sfValidatorString(array('max_length' => 8)),
      'gestion_id'            => new sfValidatorInteger(),
      'sub_cea_id'            => new sfValidatorInteger(),
      'operativo_id'          => new sfValidatorInteger(),
      'departamento'          => new sfValidatorString(array('max_length' => 45)),
      'path_archivo_emitido'  => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'path_archivo_remitido' => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'fecha_generacion'      => new sfValidatorDateTime(array('required' => false)),
      'fecha_remision'        => new sfValidatorDateTime(array('required' => false)),
      'fecha_consolidacion'   => new sfValidatorDateTime(array('required' => false)),
      'estado_archivo_id'     => new sfValidatorInteger(array('required' => false)),
      'codigo_control'        => new sfValidatorString(array('max_length' => 85)),
    ));

    $this->widgetSchema->setNameFormat('dat_ope_archivo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatOpeArchivo';
  }

}
