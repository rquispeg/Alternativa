<?php

/**
 * DatEdaEvento filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatEdaEventoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo_evento_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEdaEvento'), 'add_empty' => true)),
      'fecha_inicio_evento' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'cargo_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCargo'), 'add_empty' => true)),
      'telefono_referencia' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'acceso'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'funcionamiento'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'albergue'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado_desastre_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEdaEstadoDesastre'), 'add_empty' => true)),
      'agua'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'banios'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'danio_materiales'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'docentes_continuan'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'docentes_requieren'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_relevamiento'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'tipo_evento_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEdaEvento'), 'column' => 'id_tipo_evento')),
      'fecha_inicio_evento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'cargo_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaCargo'), 'column' => 'id_cargo')),
      'telefono_referencia' => new sfValidatorPass(array('required' => false)),
      'acceso'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'funcionamiento'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'albergue'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estado_desastre_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEdaEstadoDesastre'), 'column' => 'id_estado_desastre')),
      'agua'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'banios'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'danio_materiales'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'docentes_continuan'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'docentes_requieren'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_relevamiento'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('dat_eda_evento_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatEdaEvento';
  }

  public function getFields()
  {
    return array(
      'id_evento'           => 'Number',
      'cod_ue_id'           => 'Text',
      'gestion_id'          => 'Number',
      'tipo_evento_id'      => 'ForeignKey',
      'fecha_inicio_evento' => 'Date',
      'cargo_id'            => 'ForeignKey',
      'telefono_referencia' => 'Text',
      'acceso'              => 'Number',
      'funcionamiento'      => 'Number',
      'albergue'            => 'Number',
      'estado_desastre_id'  => 'ForeignKey',
      'agua'                => 'Number',
      'banios'              => 'Number',
      'danio_materiales'    => 'Number',
      'docentes_continuan'  => 'Number',
      'docentes_requieren'  => 'Number',
      'fecha_relevamiento'  => 'Date',
    );
  }
}
