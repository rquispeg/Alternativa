<?php

/**
 * DatRdeSocioEconomico filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRdeSocioEconomicoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'certificado_nac'                    => new sfWidgetFormFilterInput(),
      'libreta_escolar'                    => new sfWidgetFormFilterInput(),
      'libreta_familiar'                   => new sfWidgetFormFilterInput(),
      'libreta_militar'                    => new sfWidgetFormFilterInput(),
      'libreta_vacunas'                    => new sfWidgetFormFilterInput(),
      'medio_comunicacion_celular'         => new sfWidgetFormFilterInput(),
      'medio_comunicacion_telefono'        => new sfWidgetFormFilterInput(),
      'medio_comunicacion_television'      => new sfWidgetFormFilterInput(),
      'medio_comunicacion_computadora'     => new sfWidgetFormFilterInput(),
      'medio_comunicacion_radio'           => new sfWidgetFormFilterInput(),
      'medio_comunicacion_internet'        => new sfWidgetFormFilterInput(),
      'seguro_salud'                       => new sfWidgetFormFilterInput(),
      'discapacidad_id'                    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDiscapacidad'), 'add_empty' => true)),
      'origendiscapacidad_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaOrigendiscapacidad'), 'add_empty' => true)),
      'atencionmedica_id'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaAtencionmedica'), 'add_empty' => true)),
      'servicio_aguadomicilio'             => new sfWidgetFormFilterInput(),
      'servicio_aguapileta'                => new sfWidgetFormFilterInput(),
      'servicio_agualagolaguna'            => new sfWidgetFormFilterInput(),
      'servicio_aguapozo'                  => new sfWidgetFormFilterInput(),
      'servicio_aguasisterna'              => new sfWidgetFormFilterInput(),
      'servicio_aguavertiente'             => new sfWidgetFormFilterInput(),
      'servicio_energiaredpublica'         => new sfWidgetFormFilterInput(),
      'servicio_energiageneradorelectrico' => new sfWidgetFormFilterInput(),
      'servicio_energiapanelsolar'         => new sfWidgetFormFilterInput(),
      'servicio_gasdomicilio'              => new sfWidgetFormFilterInput(),
      'servicio_gaslicuado'                => new sfWidgetFormFilterInput(),
      'servicio_gasnatural'                => new sfWidgetFormFilterInput(),
      'servicio_sanitarioalcantarillado'   => new sfWidgetFormFilterInput(),
      'servicio_sanitariopozoseptico'      => new sfWidgetFormFilterInput(),
      'direccion_departamento_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_13'), 'add_empty' => true)),
      'direccion_provincia_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_12'), 'add_empty' => true)),
      'direccion_seccion_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_11'), 'add_empty' => true)),
      'direccion_canton_id'                => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad'), 'add_empty' => true)),
      'direccion_localidad_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_14'), 'add_empty' => true)),
      'empleo'                             => new sfWidgetFormFilterInput(),
      'direccion_desc_localidad'           => new sfWidgetFormFilterInput(),
      'direccion_zona'                     => new sfWidgetFormFilterInput(),
      'direccion_calle_nro'                => new sfWidgetFormFilterInput(),
      'direccion_telefono'                 => new sfWidgetFormFilterInput(),
      'idioma1_id'                         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma'), 'add_empty' => true)),
      'idioma2_id'                         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_5'), 'add_empty' => true)),
      'idioma3_id'                         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_6'), 'add_empty' => true)),
      'idioma4_id'                         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_7'), 'add_empty' => true)),
      'idioma5_id'                         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_8'), 'add_empty' => true)),
      'idioma6_id'                         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_9'), 'add_empty' => true)),
      'etnia_id'                           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEtnia'), 'add_empty' => true)),
      'transporte_id'                      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaTransporte'), 'add_empty' => true)),
      'transporte_tiempo'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'transporte_distancia'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numero_hijo'                        => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'certificado_nac'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'libreta_escolar'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'libreta_familiar'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'libreta_militar'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'libreta_vacunas'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'medio_comunicacion_celular'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'medio_comunicacion_telefono'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'medio_comunicacion_television'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'medio_comunicacion_computadora'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'medio_comunicacion_radio'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'medio_comunicacion_internet'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'seguro_salud'                       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'discapacidad_id'                    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaDiscapacidad'), 'column' => 'id_discapacidad')),
      'origendiscapacidad_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaOrigendiscapacidad'), 'column' => 'id_origendiscapacidad')),
      'atencionmedica_id'                  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaAtencionmedica'), 'column' => 'id_atencionmedica')),
      'servicio_aguadomicilio'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_aguapileta'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_agualagolaguna'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_aguapozo'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_aguasisterna'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_aguavertiente'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_energiaredpublica'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_energiageneradorelectrico' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_energiapanelsolar'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_gasdomicilio'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_gaslicuado'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_gasnatural'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_sanitarioalcantarillado'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_sanitariopozoseptico'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'direccion_departamento_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaLocalidad_13'), 'column' => 'departamento_id')),
      'direccion_provincia_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaLocalidad_12'), 'column' => 'departamento_id')),
      'direccion_seccion_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaLocalidad_11'), 'column' => 'departamento_id')),
      'direccion_canton_id'                => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaLocalidad'), 'column' => 'departamento_id')),
      'direccion_localidad_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaLocalidad_14'), 'column' => 'departamento_id')),
      'empleo'                             => new sfValidatorPass(array('required' => false)),
      'direccion_desc_localidad'           => new sfValidatorPass(array('required' => false)),
      'direccion_zona'                     => new sfValidatorPass(array('required' => false)),
      'direccion_calle_nro'                => new sfValidatorPass(array('required' => false)),
      'direccion_telefono'                 => new sfValidatorPass(array('required' => false)),
      'idioma1_id'                         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaIdioma'), 'column' => 'id_idioma')),
      'idioma2_id'                         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaIdioma_5'), 'column' => 'id_idioma')),
      'idioma3_id'                         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaIdioma_6'), 'column' => 'id_idioma')),
      'idioma4_id'                         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaIdioma_7'), 'column' => 'id_idioma')),
      'idioma5_id'                         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaIdioma_8'), 'column' => 'id_idioma')),
      'idioma6_id'                         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaIdioma_9'), 'column' => 'id_idioma')),
      'etnia_id'                           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEtnia'), 'column' => 'id_etnia')),
      'transporte_id'                      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaTransporte'), 'column' => 'id_transporte')),
      'transporte_tiempo'                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'transporte_distancia'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'numero_hijo'                        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('dat_rde_socio_economico_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRdeSocioEconomico';
  }

  public function getFields()
  {
    return array(
      'inscripcion_id'                     => 'Number',
      'gestion_id'                         => 'Number',
      'certificado_nac'                    => 'Number',
      'libreta_escolar'                    => 'Number',
      'libreta_familiar'                   => 'Number',
      'libreta_militar'                    => 'Number',
      'libreta_vacunas'                    => 'Number',
      'medio_comunicacion_celular'         => 'Number',
      'medio_comunicacion_telefono'        => 'Number',
      'medio_comunicacion_television'      => 'Number',
      'medio_comunicacion_computadora'     => 'Number',
      'medio_comunicacion_radio'           => 'Number',
      'medio_comunicacion_internet'        => 'Number',
      'seguro_salud'                       => 'Number',
      'discapacidad_id'                    => 'ForeignKey',
      'origendiscapacidad_id'              => 'ForeignKey',
      'atencionmedica_id'                  => 'ForeignKey',
      'servicio_aguadomicilio'             => 'Number',
      'servicio_aguapileta'                => 'Number',
      'servicio_agualagolaguna'            => 'Number',
      'servicio_aguapozo'                  => 'Number',
      'servicio_aguasisterna'              => 'Number',
      'servicio_aguavertiente'             => 'Number',
      'servicio_energiaredpublica'         => 'Number',
      'servicio_energiageneradorelectrico' => 'Number',
      'servicio_energiapanelsolar'         => 'Number',
      'servicio_gasdomicilio'              => 'Number',
      'servicio_gaslicuado'                => 'Number',
      'servicio_gasnatural'                => 'Number',
      'servicio_sanitarioalcantarillado'   => 'Number',
      'servicio_sanitariopozoseptico'      => 'Number',
      'direccion_departamento_id'          => 'ForeignKey',
      'direccion_provincia_id'             => 'ForeignKey',
      'direccion_seccion_id'               => 'ForeignKey',
      'direccion_canton_id'                => 'ForeignKey',
      'direccion_localidad_id'             => 'ForeignKey',
      'empleo'                             => 'Text',
      'direccion_desc_localidad'           => 'Text',
      'direccion_zona'                     => 'Text',
      'direccion_calle_nro'                => 'Text',
      'direccion_telefono'                 => 'Text',
      'idioma1_id'                         => 'ForeignKey',
      'idioma2_id'                         => 'ForeignKey',
      'idioma3_id'                         => 'ForeignKey',
      'idioma4_id'                         => 'ForeignKey',
      'idioma5_id'                         => 'ForeignKey',
      'idioma6_id'                         => 'ForeignKey',
      'etnia_id'                           => 'ForeignKey',
      'transporte_id'                      => 'ForeignKey',
      'transporte_tiempo'                  => 'Number',
      'transporte_distancia'               => 'Number',
      'numero_hijo'                        => 'Number',
    );
  }
}
