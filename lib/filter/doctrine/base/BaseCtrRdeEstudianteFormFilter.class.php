<?php

/**
 * CtrRdeEstudiante filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrRdeEstudianteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'carnet_identidad'    => new sfWidgetFormFilterInput(),
      'paterno'             => new sfWidgetFormFilterInput(),
      'materno'             => new sfWidgetFormFilterInput(),
      'nombre'              => new sfWidgetFormFilterInput(),
      'fecha_nacimiento'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'genero'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pais_nac_id'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'departamento_nac_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDepartamento'), 'add_empty' => true)),
      'provincia_nac_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaProvincia_4'), 'add_empty' => true)),
      'localidad_nac'       => new sfWidgetFormFilterInput(),
      'oficialia'           => new sfWidgetFormFilterInput(),
      'libro'               => new sfWidgetFormFilterInput(),
      'partida'             => new sfWidgetFormFilterInput(),
      'folio'               => new sfWidgetFormFilterInput(),
      'usuario_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => true)),
      'fecha_modificacion'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'cod_ue_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRueUnidadEducativa'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'carnet_identidad'    => new sfValidatorPass(array('required' => false)),
      'paterno'             => new sfValidatorPass(array('required' => false)),
      'materno'             => new sfValidatorPass(array('required' => false)),
      'nombre'              => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'genero'              => new sfValidatorPass(array('required' => false)),
      'pais_nac_id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'departamento_nac_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaDepartamento'), 'column' => 'id_departamento')),
      'provincia_nac_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaProvincia_4'), 'column' => 'departamento_id')),
      'localidad_nac'       => new sfValidatorPass(array('required' => false)),
      'oficialia'           => new sfValidatorPass(array('required' => false)),
      'libro'               => new sfValidatorPass(array('required' => false)),
      'partida'             => new sfValidatorPass(array('required' => false)),
      'folio'               => new sfValidatorPass(array('required' => false)),
      'usuario_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatUsuUsuario'), 'column' => 'id')),
      'fecha_modificacion'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'cod_ue_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRueUnidadEducativa'), 'column' => 'cod_ue')),
    ));

    $this->widgetSchema->setNameFormat('ctr_rde_estudiante_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrRdeEstudiante';
  }

  public function getFields()
  {
    return array(
      'codigo_rude'         => 'Text',
      'gestion_id'          => 'Number',
      'carnet_identidad'    => 'Text',
      'paterno'             => 'Text',
      'materno'             => 'Text',
      'nombre'              => 'Text',
      'fecha_nacimiento'    => 'Date',
      'genero'              => 'Text',
      'pais_nac_id'         => 'Number',
      'departamento_nac_id' => 'ForeignKey',
      'provincia_nac_id'    => 'ForeignKey',
      'localidad_nac'       => 'Text',
      'oficialia'           => 'Text',
      'libro'               => 'Text',
      'partida'             => 'Text',
      'folio'               => 'Text',
      'usuario_id'          => 'ForeignKey',
      'fecha_modificacion'  => 'Date',
      'cod_ue_id'           => 'ForeignKey',
    );
  }
}
