<?php

/**
 * SdatRueUnidadEducativa filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSdatRueUnidadEducativaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_ue'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gestion_id'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'operativo_id'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre_subcea'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'multigrado'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono1'             => new sfWidgetFormFilterInput(),
      'telefono2'             => new sfWidgetFormFilterInput(),
      'referencia_telefono2'  => new sfWidgetFormFilterInput(),
      'fax'                   => new sfWidgetFormFilterInput(),
      'email'                 => new sfWidgetFormFilterInput(),
      'casilla'               => new sfWidgetFormFilterInput(),
      'ci_director'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'director'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'item_director'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_cerrada_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCerrada'), 'add_empty' => true)),
      'turno_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTurno'), 'add_empty' => true)),
      'fecha_consolidacion'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'cod_le_id'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_org_curr_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaOrgCurricular'), 'add_empty' => true)),
      'cod_dependencia_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDependencia'), 'add_empty' => true)),
      'cod_convenio_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaConvenios'), 'add_empty' => true)),
      'id_departamento'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_departamento'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_provincia'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_provincia'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_seccion'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_seccion'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_canton'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_canton'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_localidad'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_localidad'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_area'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'zona'                  => new sfWidgetFormFilterInput(),
      'direccion'             => new sfWidgetFormFilterInput(),
      'cod_distrito'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'distrito'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ci_director_distrital' => new sfWidgetFormFilterInput(),
      'director_distrital'    => new sfWidgetFormFilterInput(),
      'cod_nucleo'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_nucleo'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'desc_ue'               => new sfValidatorPass(array('required' => false)),
      'gestion_id'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'operativo_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nombre_subcea'         => new sfValidatorPass(array('required' => false)),
      'multigrado'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'telefono1'             => new sfValidatorPass(array('required' => false)),
      'telefono2'             => new sfValidatorPass(array('required' => false)),
      'referencia_telefono2'  => new sfValidatorPass(array('required' => false)),
      'fax'                   => new sfValidatorPass(array('required' => false)),
      'email'                 => new sfValidatorPass(array('required' => false)),
      'casilla'               => new sfValidatorPass(array('required' => false)),
      'ci_director'           => new sfValidatorPass(array('required' => false)),
      'director'              => new sfValidatorPass(array('required' => false)),
      'item_director'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_cerrada_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaCerrada'), 'column' => 'cod_cerrada')),
      'turno_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaTurno'), 'column' => 'id_turno')),
      'fecha_consolidacion'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'cod_le_id'             => new sfValidatorPass(array('required' => false)),
      'cod_org_curr_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaOrgCurricular'), 'column' => 'cod_org_curr')),
      'cod_dependencia_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaDependencia'), 'column' => 'cod_dependencia')),
      'cod_convenio_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaConvenios'), 'column' => 'cod_convenios')),
      'id_departamento'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_departamento'     => new sfValidatorPass(array('required' => false)),
      'id_provincia'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_provincia'        => new sfValidatorPass(array('required' => false)),
      'id_seccion'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_seccion'          => new sfValidatorPass(array('required' => false)),
      'id_canton'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_canton'           => new sfValidatorPass(array('required' => false)),
      'id_localidad'          => new sfValidatorPass(array('required' => false)),
      'desc_localidad'        => new sfValidatorPass(array('required' => false)),
      'tipo_area'             => new sfValidatorPass(array('required' => false)),
      'zona'                  => new sfValidatorPass(array('required' => false)),
      'direccion'             => new sfValidatorPass(array('required' => false)),
      'cod_distrito'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'distrito'              => new sfValidatorPass(array('required' => false)),
      'ci_director_distrital' => new sfValidatorPass(array('required' => false)),
      'director_distrital'    => new sfValidatorPass(array('required' => false)),
      'cod_nucleo'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_nucleo'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sdat_rue_unidad_educativa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SdatRueUnidadEducativa';
  }

  public function getFields()
  {
    return array(
      'cod_ue_id'             => 'Text',
      'desc_ue'               => 'Text',
      'sub_cea'               => 'Number',
      'gestion_id'            => 'Number',
      'operativo_id'          => 'Number',
      'periodo_id'            => 'Number',
      'nombre_subcea'         => 'Text',
      'multigrado'            => 'Number',
      'telefono1'             => 'Text',
      'telefono2'             => 'Text',
      'referencia_telefono2'  => 'Text',
      'fax'                   => 'Text',
      'email'                 => 'Text',
      'casilla'               => 'Text',
      'ci_director'           => 'Text',
      'director'              => 'Text',
      'item_director'         => 'Number',
      'cod_cerrada_id'        => 'ForeignKey',
      'turno_id'              => 'ForeignKey',
      'fecha_consolidacion'   => 'Date',
      'cod_le_id'             => 'Text',
      'cod_org_curr_id'       => 'ForeignKey',
      'cod_dependencia_id'    => 'ForeignKey',
      'cod_convenio_id'       => 'ForeignKey',
      'id_departamento'       => 'Number',
      'desc_departamento'     => 'Text',
      'id_provincia'          => 'Number',
      'desc_provincia'        => 'Text',
      'id_seccion'            => 'Number',
      'desc_seccion'          => 'Text',
      'id_canton'             => 'Number',
      'desc_canton'           => 'Text',
      'id_localidad'          => 'Text',
      'desc_localidad'        => 'Text',
      'tipo_area'             => 'Text',
      'zona'                  => 'Text',
      'direccion'             => 'Text',
      'cod_distrito'          => 'Number',
      'distrito'              => 'Text',
      'ci_director_distrital' => 'Text',
      'director_distrital'    => 'Text',
      'cod_nucleo'            => 'Number',
      'desc_nucleo'           => 'Text',
    );
  }
}
