<?php

/**
 * CtrRdeEstudianteObsoleto filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrRdeEstudianteObsoletoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'usuario_id'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigo_rude_obs'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'carnet_identidad'     => new sfWidgetFormFilterInput(),
      'libreta_militar'      => new sfWidgetFormFilterInput(),
      'pasaporte'            => new sfWidgetFormFilterInput(),
      'paterno'              => new sfWidgetFormFilterInput(),
      'materno'              => new sfWidgetFormFilterInput(),
      'nombre'               => new sfWidgetFormFilterInput(),
      'fecha_nacimiento'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'genero'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado_civil_id'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pais_nac_id'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'departamento_nac_id'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'provincia_nac_id'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'localidad_nac'        => new sfWidgetFormFilterInput(),
      'oficialia'            => new sfWidgetFormFilterInput(),
      'libro'                => new sfWidgetFormFilterInput(),
      'partida'              => new sfWidgetFormFilterInput(),
      'folio'                => new sfWidgetFormFilterInput(),
      'grupo_sanguineo_id'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'idioma_materno_id'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_correccion'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'observacion'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sw_paterno'           => new sfWidgetFormFilterInput(),
      'sw_materno'           => new sfWidgetFormFilterInput(),
      'sw_nombre'            => new sfWidgetFormFilterInput(),
      'sw_fec_nac'           => new sfWidgetFormFilterInput(),
      'sw_ci'                => new sfWidgetFormFilterInput(),
      'sw_apoderado'         => new sfWidgetFormFilterInput(),
      'sw_historial'         => new sfWidgetFormFilterInput(),
      'sw_partida_nac'       => new sfWidgetFormFilterInput(),
      'confirmado'           => new sfWidgetFormFilterInput(),
      'consolidado'          => new sfWidgetFormFilterInput(),
      'usuario_confirmacion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ue_id'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'usuario_id'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'codigo_rude_obs'      => new sfValidatorPass(array('required' => false)),
      'carnet_identidad'     => new sfValidatorPass(array('required' => false)),
      'libreta_militar'      => new sfValidatorPass(array('required' => false)),
      'pasaporte'            => new sfValidatorPass(array('required' => false)),
      'paterno'              => new sfValidatorPass(array('required' => false)),
      'materno'              => new sfValidatorPass(array('required' => false)),
      'nombre'               => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'genero'               => new sfValidatorPass(array('required' => false)),
      'estado_civil_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'pais_nac_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'departamento_nac_id'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'provincia_nac_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'localidad_nac'        => new sfValidatorPass(array('required' => false)),
      'oficialia'            => new sfValidatorPass(array('required' => false)),
      'libro'                => new sfValidatorPass(array('required' => false)),
      'partida'              => new sfValidatorPass(array('required' => false)),
      'folio'                => new sfValidatorPass(array('required' => false)),
      'grupo_sanguineo_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'idioma_materno_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_correccion'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'observacion'          => new sfValidatorPass(array('required' => false)),
      'sw_paterno'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sw_materno'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sw_nombre'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sw_fec_nac'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sw_ci'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sw_apoderado'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sw_historial'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sw_partida_nac'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'confirmado'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'consolidado'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'usuario_confirmacion' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue_id'            => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctr_rde_estudiante_obsoleto_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrRdeEstudianteObsoleto';
  }

  public function getFields()
  {
    return array(
      'codigo_rude_actual'   => 'Text',
      'inscripcion_id'       => 'Number',
      'usuario_id'           => 'Number',
      'codigo_rude_obs'      => 'Text',
      'carnet_identidad'     => 'Text',
      'libreta_militar'      => 'Text',
      'pasaporte'            => 'Text',
      'paterno'              => 'Text',
      'materno'              => 'Text',
      'nombre'               => 'Text',
      'fecha_nacimiento'     => 'Date',
      'genero'               => 'Text',
      'estado_civil_id'      => 'Number',
      'pais_nac_id'          => 'Number',
      'departamento_nac_id'  => 'Number',
      'provincia_nac_id'     => 'Number',
      'localidad_nac'        => 'Text',
      'oficialia'            => 'Text',
      'libro'                => 'Text',
      'partida'              => 'Text',
      'folio'                => 'Text',
      'grupo_sanguineo_id'   => 'Number',
      'idioma_materno_id'    => 'Number',
      'fecha_correccion'     => 'Date',
      'observacion'          => 'Text',
      'gestion_id'           => 'Number',
      'sw_paterno'           => 'Number',
      'sw_materno'           => 'Number',
      'sw_nombre'            => 'Number',
      'sw_fec_nac'           => 'Number',
      'sw_ci'                => 'Number',
      'sw_apoderado'         => 'Number',
      'sw_historial'         => 'Number',
      'sw_partida_nac'       => 'Number',
      'confirmado'           => 'Number',
      'consolidado'          => 'Number',
      'usuario_confirmacion' => 'Number',
      'cod_ue_id'            => 'Text',
    );
  }
}
