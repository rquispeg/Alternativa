<?php

/**
 * SdatRueUnidadEducativa form base class.
 *
 * @method SdatRueUnidadEducativa getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSdatRueUnidadEducativaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue_id'             => new sfWidgetFormInputHidden(),
      'desc_ue'               => new sfWidgetFormInputText(),
      'sub_cea'               => new sfWidgetFormInputHidden(),
      'gestion_id'            => new sfWidgetFormInputText(),
      'operativo_id'          => new sfWidgetFormInputText(),
      'periodo_id'            => new sfWidgetFormInputHidden(),
      'nombre_subcea'         => new sfWidgetFormInputText(),
      'multigrado'            => new sfWidgetFormInputText(),
      'telefono1'             => new sfWidgetFormInputText(),
      'telefono2'             => new sfWidgetFormInputText(),
      'referencia_telefono2'  => new sfWidgetFormInputText(),
      'fax'                   => new sfWidgetFormInputText(),
      'email'                 => new sfWidgetFormInputText(),
      'casilla'               => new sfWidgetFormInputText(),
      'ci_director'           => new sfWidgetFormInputText(),
      'director'              => new sfWidgetFormInputText(),
      'item_director'         => new sfWidgetFormInputText(),
      'cod_cerrada_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCerrada'), 'add_empty' => false)),
      'turno_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTurno'), 'add_empty' => false)),
      'fecha_consolidacion'   => new sfWidgetFormDateTime(),
      'cod_le_id'             => new sfWidgetFormInputText(),
      'cod_org_curr_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaOrgCurricular'), 'add_empty' => false)),
      'cod_dependencia_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDependencia'), 'add_empty' => false)),
      'cod_convenio_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaConvenios'), 'add_empty' => false)),
      'id_departamento'       => new sfWidgetFormInputText(),
      'desc_departamento'     => new sfWidgetFormInputText(),
      'id_provincia'          => new sfWidgetFormInputText(),
      'desc_provincia'        => new sfWidgetFormInputText(),
      'id_seccion'            => new sfWidgetFormInputText(),
      'desc_seccion'          => new sfWidgetFormInputText(),
      'id_canton'             => new sfWidgetFormInputText(),
      'desc_canton'           => new sfWidgetFormInputText(),
      'id_localidad'          => new sfWidgetFormInputText(),
      'desc_localidad'        => new sfWidgetFormInputText(),
      'tipo_area'             => new sfWidgetFormInputText(),
      'zona'                  => new sfWidgetFormInputText(),
      'direccion'             => new sfWidgetFormInputText(),
      'cod_distrito'          => new sfWidgetFormInputText(),
      'distrito'              => new sfWidgetFormInputText(),
      'ci_director_distrital' => new sfWidgetFormInputText(),
      'director_distrital'    => new sfWidgetFormInputText(),
      'cod_nucleo'            => new sfWidgetFormInputText(),
      'desc_nucleo'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_ue_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'desc_ue'               => new sfValidatorString(array('max_length' => 70)),
      'sub_cea'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'sub_cea', 'required' => false)),
      'gestion_id'            => new sfValidatorInteger(),
      'operativo_id'          => new sfValidatorInteger(),
      'periodo_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'periodo_id', 'required' => false)),
      'nombre_subcea'         => new sfValidatorString(array('max_length' => 50)),
      'multigrado'            => new sfValidatorInteger(),
      'telefono1'             => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'telefono2'             => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'referencia_telefono2'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fax'                   => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'email'                 => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'casilla'               => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'ci_director'           => new sfValidatorString(array('max_length' => 8)),
      'director'              => new sfValidatorString(array('max_length' => 80)),
      'item_director'         => new sfValidatorInteger(),
      'cod_cerrada_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCerrada'))),
      'turno_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTurno'))),
      'fecha_consolidacion'   => new sfValidatorDateTime(array('required' => false)),
      'cod_le_id'             => new sfValidatorString(array('max_length' => 8)),
      'cod_org_curr_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaOrgCurricular'))),
      'cod_dependencia_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDependencia'))),
      'cod_convenio_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaConvenios'))),
      'id_departamento'       => new sfValidatorInteger(),
      'desc_departamento'     => new sfValidatorString(array('max_length' => 10)),
      'id_provincia'          => new sfValidatorInteger(),
      'desc_provincia'        => new sfValidatorString(array('max_length' => 25)),
      'id_seccion'            => new sfValidatorInteger(),
      'desc_seccion'          => new sfValidatorString(array('max_length' => 50)),
      'id_canton'             => new sfValidatorInteger(),
      'desc_canton'           => new sfValidatorString(array('max_length' => 45)),
      'id_localidad'          => new sfValidatorString(array('max_length' => 6)),
      'desc_localidad'        => new sfValidatorString(array('max_length' => 125)),
      'tipo_area'             => new sfValidatorString(array('max_length' => 1)),
      'zona'                  => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'direccion'             => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'cod_distrito'          => new sfValidatorInteger(),
      'distrito'              => new sfValidatorString(array('max_length' => 45)),
      'ci_director_distrital' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'director_distrital'    => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'cod_nucleo'            => new sfValidatorInteger(array('required' => false)),
      'desc_nucleo'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sdat_rue_unidad_educativa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SdatRueUnidadEducativa';
  }

}
