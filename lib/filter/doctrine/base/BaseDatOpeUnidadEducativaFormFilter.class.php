<?php

/**
 * DatOpeUnidadEducativa filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatOpeUnidadEducativaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'periodo_id'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_ue'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_le_id'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_dependencia'     => new sfWidgetFormFilterInput(),
      'telefono1'            => new sfWidgetFormFilterInput(),
      'telefono2'            => new sfWidgetFormFilterInput(),
      'referencia_telefono2' => new sfWidgetFormFilterInput(),
      'fax'                  => new sfWidgetFormFilterInput(),
      'email'                => new sfWidgetFormFilterInput(),
      'casilla'              => new sfWidgetFormFilterInput(),
      'ci_director'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'director'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'item_director'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_cerrada_id'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'turno_id'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_localidad'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_localidad'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_canton'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_canton'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_seccion'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_seccion'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_provincia'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_provincia'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_departamento'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_departamento'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_distrito_id'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'distrito'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'zona'                 => new sfWidgetFormFilterInput(),
      'direccion'            => new sfWidgetFormFilterInput(),
      'tipo_area'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_abrv'            => new sfWidgetFormFilterInput(),
      'cod_org_curr'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desc_modalidad'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'periodo_id'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_ue'              => new sfValidatorPass(array('required' => false)),
      'cod_le_id'            => new sfValidatorPass(array('required' => false)),
      'desc_dependencia'     => new sfValidatorPass(array('required' => false)),
      'telefono1'            => new sfValidatorPass(array('required' => false)),
      'telefono2'            => new sfValidatorPass(array('required' => false)),
      'referencia_telefono2' => new sfValidatorPass(array('required' => false)),
      'fax'                  => new sfValidatorPass(array('required' => false)),
      'email'                => new sfValidatorPass(array('required' => false)),
      'casilla'              => new sfValidatorPass(array('required' => false)),
      'ci_director'          => new sfValidatorPass(array('required' => false)),
      'director'             => new sfValidatorPass(array('required' => false)),
      'item_director'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_cerrada_id'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'turno_id'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_localidad'       => new sfValidatorPass(array('required' => false)),
      'id_localidad'         => new sfValidatorPass(array('required' => false)),
      'id_canton'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_canton'          => new sfValidatorPass(array('required' => false)),
      'id_seccion'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_seccion'         => new sfValidatorPass(array('required' => false)),
      'id_provincia'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_provincia'       => new sfValidatorPass(array('required' => false)),
      'id_departamento'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_departamento'    => new sfValidatorPass(array('required' => false)),
      'cod_distrito_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'distrito'             => new sfValidatorPass(array('required' => false)),
      'zona'                 => new sfValidatorPass(array('required' => false)),
      'direccion'            => new sfValidatorPass(array('required' => false)),
      'tipo_area'            => new sfValidatorPass(array('required' => false)),
      'desc_abrv'            => new sfValidatorPass(array('required' => false)),
      'cod_org_curr'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_modalidad'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_ope_unidad_educativa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatOpeUnidadEducativa';
  }

  public function getFields()
  {
    return array(
      'cod_ue_id'            => 'Text',
      'sub_cea_id'           => 'Number',
      'gestion_id'           => 'Number',
      'operativo_id'         => 'Number',
      'periodo_id'           => 'Number',
      'desc_ue'              => 'Text',
      'cod_le_id'            => 'Text',
      'desc_dependencia'     => 'Text',
      'telefono1'            => 'Text',
      'telefono2'            => 'Text',
      'referencia_telefono2' => 'Text',
      'fax'                  => 'Text',
      'email'                => 'Text',
      'casilla'              => 'Text',
      'ci_director'          => 'Text',
      'director'             => 'Text',
      'item_director'        => 'Number',
      'cod_cerrada_id'       => 'Number',
      'turno_id'             => 'Number',
      'desc_localidad'       => 'Text',
      'id_localidad'         => 'Text',
      'id_canton'            => 'Number',
      'desc_canton'          => 'Text',
      'id_seccion'           => 'Number',
      'desc_seccion'         => 'Text',
      'id_provincia'         => 'Number',
      'desc_provincia'       => 'Text',
      'id_departamento'      => 'Number',
      'desc_departamento'    => 'Text',
      'cod_distrito_id'      => 'Number',
      'distrito'             => 'Text',
      'zona'                 => 'Text',
      'direccion'            => 'Text',
      'tipo_area'            => 'Text',
      'desc_abrv'            => 'Text',
      'cod_org_curr'         => 'Number',
      'desc_modalidad'       => 'Text',
    );
  }
}
