<?php

/**
 * TmpInscripciones2011 filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpInscripciones2011FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'carnet_identidad'   => new sfWidgetFormFilterInput(),
      'libreta_militar'    => new sfWidgetFormFilterInput(),
      'paterno'            => new sfWidgetFormFilterInput(),
      'materno'            => new sfWidgetFormFilterInput(),
      'nombre'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_nacimiento'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'genero'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'inscrito_nuevo'     => new sfWidgetFormFilterInput(),
      'inscrito_repitente' => new sfWidgetFormFilterInput(),
      'nivel'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'grado'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'paralelo'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'turno'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_inscripcion'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'pais'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'departamento'       => new sfWidgetFormFilterInput(),
      'provincia'          => new sfWidgetFormFilterInput(),
      'localidad'          => new sfWidgetFormFilterInput(),
      'oficialia'          => new sfWidgetFormFilterInput(),
      'libro'              => new sfWidgetFormFilterInput(),
      'partida'            => new sfWidgetFormFilterInput(),
      'folio'              => new sfWidgetFormFilterInput(),
      'seguimiento'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gestion_2010'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado_fin_2010'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ue'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'carnet_identidad'   => new sfValidatorPass(array('required' => false)),
      'libreta_militar'    => new sfValidatorPass(array('required' => false)),
      'paterno'            => new sfValidatorPass(array('required' => false)),
      'materno'            => new sfValidatorPass(array('required' => false)),
      'nombre'             => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'genero'             => new sfValidatorPass(array('required' => false)),
      'inscrito_nuevo'     => new sfValidatorPass(array('required' => false)),
      'inscrito_repitente' => new sfValidatorPass(array('required' => false)),
      'nivel'              => new sfValidatorPass(array('required' => false)),
      'grado'              => new sfValidatorPass(array('required' => false)),
      'paralelo'           => new sfValidatorPass(array('required' => false)),
      'turno'              => new sfValidatorPass(array('required' => false)),
      'fecha_inscripcion'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'pais'               => new sfValidatorPass(array('required' => false)),
      'departamento'       => new sfValidatorPass(array('required' => false)),
      'provincia'          => new sfValidatorPass(array('required' => false)),
      'localidad'          => new sfValidatorPass(array('required' => false)),
      'oficialia'          => new sfValidatorPass(array('required' => false)),
      'libro'              => new sfValidatorPass(array('required' => false)),
      'partida'            => new sfValidatorPass(array('required' => false)),
      'folio'              => new sfValidatorPass(array('required' => false)),
      'seguimiento'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gestion_2010'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estado_fin_2010'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('tmp_inscripciones2011_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpInscripciones2011';
  }

  public function getFields()
  {
    return array(
      'codigo_rude'        => 'Text',
      'carnet_identidad'   => 'Text',
      'libreta_militar'    => 'Text',
      'paterno'            => 'Text',
      'materno'            => 'Text',
      'nombre'             => 'Text',
      'fecha_nacimiento'   => 'Date',
      'genero'             => 'Text',
      'inscrito_nuevo'     => 'Text',
      'inscrito_repitente' => 'Text',
      'nivel'              => 'Text',
      'grado'              => 'Text',
      'paralelo'           => 'Text',
      'turno'              => 'Text',
      'fecha_inscripcion'  => 'Date',
      'pais'               => 'Text',
      'departamento'       => 'Text',
      'provincia'          => 'Text',
      'localidad'          => 'Text',
      'oficialia'          => 'Text',
      'libro'              => 'Text',
      'partida'            => 'Text',
      'folio'              => 'Text',
      'seguimiento'        => 'Number',
      'gestion_2010'       => 'Number',
      'estado_fin_2010'    => 'Number',
      'cod_ue'             => 'Number',
    );
  }
}
