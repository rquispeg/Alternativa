<?php

/**
 * DatRdeSocioEconomicoAux filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRdeSocioEconomicoAuxFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'certificado_nac'                 => new sfWidgetFormFilterInput(),
      'libreta_escolar'                 => new sfWidgetFormFilterInput(),
      'libreta_familiar'                => new sfWidgetFormFilterInput(),
      'libreta_militar'                 => new sfWidgetFormFilterInput(),
      'libreta_vacunas'                 => new sfWidgetFormFilterInput(),
      'medio_comunicacion_celular'      => new sfWidgetFormFilterInput(),
      'medio_comunicacion_telefono'     => new sfWidgetFormFilterInput(),
      'medio_comunicacion_television'   => new sfWidgetFormFilterInput(),
      'medio_comunicacion_computadora'  => new sfWidgetFormFilterInput(),
      'medio_comunicacion_radio'        => new sfWidgetFormFilterInput(),
      'medio_comunicacion_internet'     => new sfWidgetFormFilterInput(),
      'seguro_salud'                    => new sfWidgetFormFilterInput(),
      'discapacidad_id'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'origendiscapacidad_id'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'atencionmedica_id'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'servicio_aguadomicilio'          => new sfWidgetFormFilterInput(),
      'servicio_aguapileta'             => new sfWidgetFormFilterInput(),
      'servicio_agualagolaguna'         => new sfWidgetFormFilterInput(),
      'servicio_aguapozo'               => new sfWidgetFormFilterInput(),
      'servicio_aguasisterna'           => new sfWidgetFormFilterInput(),
      'servicio_aguavertiente'          => new sfWidgetFormFilterInput(),
      'servicio_energiaredpublica'      => new sfWidgetFormFilterInput(),
      'servicio_energiageneradorelectr' => new sfWidgetFormFilterInput(),
      'servicio_energiapanelsolar'      => new sfWidgetFormFilterInput(),
      'servicio_gasdomicilio'           => new sfWidgetFormFilterInput(),
      'servicio_gaslicuado'             => new sfWidgetFormFilterInput(),
      'servicio_gasnatural'             => new sfWidgetFormFilterInput(),
      'servicio_sanitarioalcantarillad' => new sfWidgetFormFilterInput(),
      'servicio_sanitariopozoseptico'   => new sfWidgetFormFilterInput(),
      'direccion_departamento_id'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion_provincia_id'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion_seccion_id'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion_canton_id'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion_localidad_id'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'empleo'                          => new sfWidgetFormFilterInput(),
      'direccion_desc_localidad'        => new sfWidgetFormFilterInput(),
      'direccion_zona'                  => new sfWidgetFormFilterInput(),
      'direccion_calle_nro'             => new sfWidgetFormFilterInput(),
      'direccion_telefono'              => new sfWidgetFormFilterInput(),
      'idioma1_id'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'idioma2_id'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'idioma3_id'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'idioma4_id'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'idioma5_id'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'idioma6_id'                      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'etnia_id'                        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'transporte_id'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'transporte_tiempo'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'transporte_distancia'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numero_hijo'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'certificado_nac'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'libreta_escolar'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'libreta_familiar'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'libreta_militar'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'libreta_vacunas'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'medio_comunicacion_celular'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'medio_comunicacion_telefono'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'medio_comunicacion_television'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'medio_comunicacion_computadora'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'medio_comunicacion_radio'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'medio_comunicacion_internet'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'seguro_salud'                    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'discapacidad_id'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'origendiscapacidad_id'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'atencionmedica_id'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_aguadomicilio'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_aguapileta'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_agualagolaguna'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_aguapozo'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_aguasisterna'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_aguavertiente'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_energiaredpublica'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_energiageneradorelectr' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_energiapanelsolar'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_gasdomicilio'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_gaslicuado'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_gasnatural'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_sanitarioalcantarillad' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio_sanitariopozoseptico'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'direccion_departamento_id'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'direccion_provincia_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'direccion_seccion_id'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'direccion_canton_id'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'direccion_localidad_id'          => new sfValidatorPass(array('required' => false)),
      'empleo'                          => new sfValidatorPass(array('required' => false)),
      'direccion_desc_localidad'        => new sfValidatorPass(array('required' => false)),
      'direccion_zona'                  => new sfValidatorPass(array('required' => false)),
      'direccion_calle_nro'             => new sfValidatorPass(array('required' => false)),
      'direccion_telefono'              => new sfValidatorPass(array('required' => false)),
      'idioma1_id'                      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'idioma2_id'                      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'idioma3_id'                      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'idioma4_id'                      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'idioma5_id'                      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'idioma6_id'                      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'etnia_id'                        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'transporte_id'                   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'transporte_tiempo'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'transporte_distancia'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'numero_hijo'                     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('dat_rde_socio_economico_aux_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRdeSocioEconomicoAux';
  }

  public function getFields()
  {
    return array(
      'inscripcion_id'                  => 'Number',
      'gestion_id'                      => 'Number',
      'certificado_nac'                 => 'Number',
      'libreta_escolar'                 => 'Number',
      'libreta_familiar'                => 'Number',
      'libreta_militar'                 => 'Number',
      'libreta_vacunas'                 => 'Number',
      'medio_comunicacion_celular'      => 'Number',
      'medio_comunicacion_telefono'     => 'Number',
      'medio_comunicacion_television'   => 'Number',
      'medio_comunicacion_computadora'  => 'Number',
      'medio_comunicacion_radio'        => 'Number',
      'medio_comunicacion_internet'     => 'Number',
      'seguro_salud'                    => 'Number',
      'discapacidad_id'                 => 'Number',
      'origendiscapacidad_id'           => 'Number',
      'atencionmedica_id'               => 'Number',
      'servicio_aguadomicilio'          => 'Number',
      'servicio_aguapileta'             => 'Number',
      'servicio_agualagolaguna'         => 'Number',
      'servicio_aguapozo'               => 'Number',
      'servicio_aguasisterna'           => 'Number',
      'servicio_aguavertiente'          => 'Number',
      'servicio_energiaredpublica'      => 'Number',
      'servicio_energiageneradorelectr' => 'Number',
      'servicio_energiapanelsolar'      => 'Number',
      'servicio_gasdomicilio'           => 'Number',
      'servicio_gaslicuado'             => 'Number',
      'servicio_gasnatural'             => 'Number',
      'servicio_sanitarioalcantarillad' => 'Number',
      'servicio_sanitariopozoseptico'   => 'Number',
      'direccion_departamento_id'       => 'Number',
      'direccion_provincia_id'          => 'Number',
      'direccion_seccion_id'            => 'Number',
      'direccion_canton_id'             => 'Number',
      'direccion_localidad_id'          => 'Text',
      'empleo'                          => 'Text',
      'direccion_desc_localidad'        => 'Text',
      'direccion_zona'                  => 'Text',
      'direccion_calle_nro'             => 'Text',
      'direccion_telefono'              => 'Text',
      'idioma1_id'                      => 'Number',
      'idioma2_id'                      => 'Number',
      'idioma3_id'                      => 'Number',
      'idioma4_id'                      => 'Number',
      'idioma5_id'                      => 'Number',
      'idioma6_id'                      => 'Number',
      'etnia_id'                        => 'Number',
      'transporte_id'                   => 'Number',
      'transporte_tiempo'               => 'Number',
      'transporte_distancia'            => 'Number',
      'numero_hijo'                     => 'Number',
    );
  }
}
