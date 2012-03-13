<?php

/**
 * DatSieDocenteadministrativo filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatSieDocenteadministrativoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'paterno'          => new sfWidgetFormFilterInput(),
      'materno'          => new sfWidgetFormFilterInput(),
      'nombre'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_nacimiento' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'genero'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'formacion_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaFormacion'), 'add_empty' => true)),
      'especialidad_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEspecialidad'), 'add_empty' => true)),
      'rda_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdaDocentesadministrativos'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'paterno'          => new sfValidatorPass(array('required' => false)),
      'materno'          => new sfValidatorPass(array('required' => false)),
      'nombre'           => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'genero'           => new sfValidatorPass(array('required' => false)),
      'formacion_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaFormacion'), 'column' => 'id_formacion')),
      'especialidad_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEspecialidad'), 'column' => 'id_especialidad')),
      'rda_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRdaDocentesadministrativos'), 'column' => 'rda')),
    ));

    $this->widgetSchema->setNameFormat('dat_sie_docenteadministrativo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatSieDocenteadministrativo';
  }

  public function getFields()
  {
    return array(
      'ci'               => 'Number',
      'paterno'          => 'Text',
      'materno'          => 'Text',
      'nombre'           => 'Text',
      'fecha_nacimiento' => 'Date',
      'genero'           => 'Text',
      'formacion_id'     => 'ForeignKey',
      'especialidad_id'  => 'ForeignKey',
      'rda_id'           => 'ForeignKey',
    );
  }
}
