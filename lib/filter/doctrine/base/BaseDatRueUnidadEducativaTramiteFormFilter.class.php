<?php

/**
 * DatRueUnidadEducativaTramite filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRueUnidadEducativaTramiteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue'                => new sfWidgetFormFilterInput(),
      'desc_unidad_educativa' => new sfWidgetFormFilterInput(),
      'cod_le'                => new sfWidgetFormFilterInput(),
      'localidad_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad'), 'add_empty' => true)),
      'canton_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_6'), 'add_empty' => true)),
      'seccion_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_7'), 'add_empty' => true)),
      'provincia_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_8'), 'add_empty' => true)),
      'departamento_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_9'), 'add_empty' => true)),
      'zona'                  => new sfWidgetFormFilterInput(),
      'direccion'             => new sfWidgetFormFilterInput(),
      'telefono1'             => new sfWidgetFormFilterInput(),
      'telefono2'             => new sfWidgetFormFilterInput(),
      'referencia_telefono2'  => new sfWidgetFormFilterInput(),
      'fax'                   => new sfWidgetFormFilterInput(),
      'email'                 => new sfWidgetFormFilterInput(),
      'casilla'               => new sfWidgetFormFilterInput(),
      'ci_director'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'director'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'item_director'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'turno_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTurno'), 'add_empty' => true)),
      'fecha_consolidacion'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'cod_org_curr_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaOrgCurricular'), 'add_empty' => true)),
      'cod_dependencia_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDependencia'), 'add_empty' => true)),
      'cod_convenio_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaConvenios'), 'add_empty' => true)),
      'cod_distrito_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieDistrito'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'cod_ue'                => new sfValidatorPass(array('required' => false)),
      'desc_unidad_educativa' => new sfValidatorPass(array('required' => false)),
      'cod_le'                => new sfValidatorPass(array('required' => false)),
      'localidad_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaLocalidad'), 'column' => 'departamento_id')),
      'canton_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaLocalidad_6'), 'column' => 'departamento_id')),
      'seccion_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaLocalidad_7'), 'column' => 'departamento_id')),
      'provincia_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaLocalidad_8'), 'column' => 'departamento_id')),
      'departamento_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaLocalidad_9'), 'column' => 'departamento_id')),
      'zona'                  => new sfValidatorPass(array('required' => false)),
      'direccion'             => new sfValidatorPass(array('required' => false)),
      'telefono1'             => new sfValidatorPass(array('required' => false)),
      'telefono2'             => new sfValidatorPass(array('required' => false)),
      'referencia_telefono2'  => new sfValidatorPass(array('required' => false)),
      'fax'                   => new sfValidatorPass(array('required' => false)),
      'email'                 => new sfValidatorPass(array('required' => false)),
      'casilla'               => new sfValidatorPass(array('required' => false)),
      'ci_director'           => new sfValidatorPass(array('required' => false)),
      'director'              => new sfValidatorPass(array('required' => false)),
      'item_director'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'turno_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaTurno'), 'column' => 'id_turno')),
      'fecha_consolidacion'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'cod_org_curr_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaOrgCurricular'), 'column' => 'cod_org_curr')),
      'cod_dependencia_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaDependencia'), 'column' => 'cod_dependencia')),
      'cod_convenio_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaConvenios'), 'column' => 'cod_convenios')),
      'cod_distrito_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatSieDistrito'), 'column' => 'cod_distrito')),
    ));

    $this->widgetSchema->setNameFormat('dat_rue_unidad_educativa_tramite_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRueUnidadEducativaTramite';
  }

  public function getFields()
  {
    return array(
      'formulario_id'         => 'Number',
      'gestion_id'            => 'Number',
      'cod_ue'                => 'Text',
      'desc_unidad_educativa' => 'Text',
      'cod_le'                => 'Text',
      'localidad_id'          => 'ForeignKey',
      'canton_id'             => 'ForeignKey',
      'seccion_id'            => 'ForeignKey',
      'provincia_id'          => 'ForeignKey',
      'departamento_id'       => 'ForeignKey',
      'zona'                  => 'Text',
      'direccion'             => 'Text',
      'telefono1'             => 'Text',
      'telefono2'             => 'Text',
      'referencia_telefono2'  => 'Text',
      'fax'                   => 'Text',
      'email'                 => 'Text',
      'casilla'               => 'Text',
      'ci_director'           => 'Text',
      'director'              => 'Text',
      'item_director'         => 'Number',
      'turno_id'              => 'ForeignKey',
      'fecha_consolidacion'   => 'Date',
      'cod_org_curr_id'       => 'ForeignKey',
      'cod_dependencia_id'    => 'ForeignKey',
      'cod_convenio_id'       => 'ForeignKey',
      'cod_distrito_id'       => 'ForeignKey',
    );
  }
}
