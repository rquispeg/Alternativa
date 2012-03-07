<?php

/**
 * DatRueUnidadEducativaTramite form base class.
 *
 * @method DatRueUnidadEducativaTramite getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRueUnidadEducativaTramiteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'formulario_id'         => new sfWidgetFormInputHidden(),
      'gestion_id'            => new sfWidgetFormInputHidden(),
      'cod_ue'                => new sfWidgetFormInputText(),
      'desc_unidad_educativa' => new sfWidgetFormInputText(),
      'cod_le'                => new sfWidgetFormInputText(),
      'localidad_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad'), 'add_empty' => false)),
      'canton_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_6'), 'add_empty' => false)),
      'seccion_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_7'), 'add_empty' => false)),
      'provincia_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_8'), 'add_empty' => false)),
      'departamento_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_9'), 'add_empty' => false)),
      'zona'                  => new sfWidgetFormInputText(),
      'direccion'             => new sfWidgetFormInputText(),
      'telefono1'             => new sfWidgetFormInputText(),
      'telefono2'             => new sfWidgetFormInputText(),
      'referencia_telefono2'  => new sfWidgetFormInputText(),
      'fax'                   => new sfWidgetFormInputText(),
      'email'                 => new sfWidgetFormInputText(),
      'casilla'               => new sfWidgetFormInputText(),
      'ci_director'           => new sfWidgetFormInputText(),
      'director'              => new sfWidgetFormInputText(),
      'item_director'         => new sfWidgetFormInputText(),
      'turno_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTurno'), 'add_empty' => false)),
      'fecha_consolidacion'   => new sfWidgetFormDateTime(),
      'cod_org_curr_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaOrgCurricular'), 'add_empty' => false)),
      'cod_dependencia_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDependencia'), 'add_empty' => false)),
      'cod_convenio_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaConvenios'), 'add_empty' => false)),
      'cod_distrito_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieDistrito'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'formulario_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'formulario_id', 'required' => false)),
      'gestion_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'cod_ue'                => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'desc_unidad_educativa' => new sfValidatorString(array('max_length' => 65, 'required' => false)),
      'cod_le'                => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'localidad_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad'))),
      'canton_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_6'))),
      'seccion_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_7'))),
      'provincia_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_8'))),
      'departamento_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_9'))),
      'zona'                  => new sfValidatorString(array('max_length' => 65, 'required' => false)),
      'direccion'             => new sfValidatorString(array('max_length' => 65, 'required' => false)),
      'telefono1'             => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'telefono2'             => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'referencia_telefono2'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fax'                   => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'email'                 => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'casilla'               => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'ci_director'           => new sfValidatorString(array('max_length' => 8)),
      'director'              => new sfValidatorString(array('max_length' => 80)),
      'item_director'         => new sfValidatorInteger(),
      'turno_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTurno'))),
      'fecha_consolidacion'   => new sfValidatorDateTime(array('required' => false)),
      'cod_org_curr_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaOrgCurricular'))),
      'cod_dependencia_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDependencia'))),
      'cod_convenio_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaConvenios'))),
      'cod_distrito_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieDistrito'))),
    ));

    $this->widgetSchema->setNameFormat('dat_rue_unidad_educativa_tramite[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRueUnidadEducativaTramite';
  }

}
