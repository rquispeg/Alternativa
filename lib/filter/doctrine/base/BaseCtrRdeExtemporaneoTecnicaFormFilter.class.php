<?php

/**
 * CtrRdeExtemporaneoTecnica filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrRdeExtemporaneoTecnicaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha_extemporaneo' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'inscripcion_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcionTecnica'), 'add_empty' => true)),
      'gestion_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcionTecnica_2'), 'add_empty' => true)),
      'usuario_id'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rde_bool'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'fecha_extemporaneo' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'inscripcion_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRdeInscripcionTecnica'), 'column' => 'id_inscripcion')),
      'gestion_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRdeInscripcionTecnica_2'), 'column' => 'id_inscripcion')),
      'usuario_id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rde_bool'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('ctr_rde_extemporaneo_tecnica_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrRdeExtemporaneoTecnica';
  }

  public function getFields()
  {
    return array(
      'id_extemporaneo'    => 'Number',
      'fecha_extemporaneo' => 'Date',
      'inscripcion_id'     => 'ForeignKey',
      'gestion_id'         => 'ForeignKey',
      'usuario_id'         => 'Number',
      'rde_bool'           => 'Number',
    );
  }
}
