<?php

/**
 * DatRdeEstudianteObservados filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRdeEstudianteObservadosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_rude'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'carnet_identidad' => new sfWidgetFormFilterInput(),
      'libreta_militar'  => new sfWidgetFormFilterInput(),
      'pasaporte'        => new sfWidgetFormFilterInput(),
      'paterno'          => new sfWidgetFormFilterInput(),
      'materno'          => new sfWidgetFormFilterInput(),
      'nombre'           => new sfWidgetFormFilterInput(),
      'fecha_nacimiento' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'genero'           => new sfWidgetFormFilterInput(),
      'cod_ue'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'codigo_rude'      => new sfValidatorPass(array('required' => false)),
      'carnet_identidad' => new sfValidatorPass(array('required' => false)),
      'libreta_militar'  => new sfValidatorPass(array('required' => false)),
      'pasaporte'        => new sfValidatorPass(array('required' => false)),
      'paterno'          => new sfValidatorPass(array('required' => false)),
      'materno'          => new sfValidatorPass(array('required' => false)),
      'nombre'           => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'genero'           => new sfValidatorPass(array('required' => false)),
      'cod_ue'           => new sfValidatorPass(array('required' => false)),
      'tipo'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('dat_rde_estudiante_observados_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRdeEstudianteObservados';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'codigo_rude'      => 'Text',
      'carnet_identidad' => 'Text',
      'libreta_militar'  => 'Text',
      'pasaporte'        => 'Text',
      'paterno'          => 'Text',
      'materno'          => 'Text',
      'nombre'           => 'Text',
      'fecha_nacimiento' => 'Date',
      'genero'           => 'Text',
      'cod_ue'           => 'Text',
      'tipo'             => 'Number',
    );
  }
}
