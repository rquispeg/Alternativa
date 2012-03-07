<?php

/**
 * DatOpeUnidadEducativa form base class.
 *
 * @method DatOpeUnidadEducativa getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatOpeUnidadEducativaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue_id'            => new sfWidgetFormInputHidden(),
      'sub_cea_id'           => new sfWidgetFormInputHidden(),
      'gestion_id'           => new sfWidgetFormInputHidden(),
      'operativo_id'         => new sfWidgetFormInputHidden(),
      'periodo_id'           => new sfWidgetFormInputText(),
      'desc_ue'              => new sfWidgetFormInputText(),
      'cod_le_id'            => new sfWidgetFormInputText(),
      'desc_dependencia'     => new sfWidgetFormInputText(),
      'telefono1'            => new sfWidgetFormInputText(),
      'telefono2'            => new sfWidgetFormInputText(),
      'referencia_telefono2' => new sfWidgetFormInputText(),
      'fax'                  => new sfWidgetFormInputText(),
      'email'                => new sfWidgetFormInputText(),
      'casilla'              => new sfWidgetFormInputText(),
      'ci_director'          => new sfWidgetFormInputText(),
      'director'             => new sfWidgetFormInputText(),
      'item_director'        => new sfWidgetFormInputText(),
      'cod_cerrada_id'       => new sfWidgetFormInputText(),
      'turno_id'             => new sfWidgetFormInputText(),
      'desc_localidad'       => new sfWidgetFormInputText(),
      'id_localidad'         => new sfWidgetFormInputText(),
      'id_canton'            => new sfWidgetFormInputText(),
      'desc_canton'          => new sfWidgetFormInputText(),
      'id_seccion'           => new sfWidgetFormInputText(),
      'desc_seccion'         => new sfWidgetFormInputText(),
      'id_provincia'         => new sfWidgetFormInputText(),
      'desc_provincia'       => new sfWidgetFormInputText(),
      'id_departamento'      => new sfWidgetFormInputText(),
      'desc_departamento'    => new sfWidgetFormInputText(),
      'cod_distrito_id'      => new sfWidgetFormInputText(),
      'distrito'             => new sfWidgetFormInputText(),
      'zona'                 => new sfWidgetFormInputText(),
      'direccion'            => new sfWidgetFormInputText(),
      'tipo_area'            => new sfWidgetFormInputText(),
      'desc_abrv'            => new sfWidgetFormInputText(),
      'cod_org_curr'         => new sfWidgetFormInputText(),
      'desc_modalidad'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_ue_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'sub_cea_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'sub_cea_id', 'required' => false)),
      'gestion_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'operativo_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'operativo_id', 'required' => false)),
      'periodo_id'           => new sfValidatorInteger(),
      'desc_ue'              => new sfValidatorString(array('max_length' => 80)),
      'cod_le_id'            => new sfValidatorString(array('max_length' => 8)),
      'desc_dependencia'     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'telefono1'            => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'telefono2'            => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'referencia_telefono2' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fax'                  => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'email'                => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'casilla'              => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'ci_director'          => new sfValidatorString(array('max_length' => 8)),
      'director'             => new sfValidatorString(array('max_length' => 80)),
      'item_director'        => new sfValidatorInteger(),
      'cod_cerrada_id'       => new sfValidatorInteger(),
      'turno_id'             => new sfValidatorInteger(),
      'desc_localidad'       => new sfValidatorString(array('max_length' => 125)),
      'id_localidad'         => new sfValidatorString(array('max_length' => 6)),
      'id_canton'            => new sfValidatorInteger(),
      'desc_canton'          => new sfValidatorString(array('max_length' => 45)),
      'id_seccion'           => new sfValidatorInteger(),
      'desc_seccion'         => new sfValidatorString(array('max_length' => 50)),
      'id_provincia'         => new sfValidatorInteger(),
      'desc_provincia'       => new sfValidatorString(array('max_length' => 25)),
      'id_departamento'      => new sfValidatorInteger(),
      'desc_departamento'    => new sfValidatorString(array('max_length' => 10)),
      'cod_distrito_id'      => new sfValidatorInteger(),
      'distrito'             => new sfValidatorString(array('max_length' => 45)),
      'zona'                 => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'direccion'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'tipo_area'            => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'desc_abrv'            => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'cod_org_curr'         => new sfValidatorInteger(),
      'desc_modalidad'       => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('dat_ope_unidad_educativa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatOpeUnidadEducativa';
  }

}
