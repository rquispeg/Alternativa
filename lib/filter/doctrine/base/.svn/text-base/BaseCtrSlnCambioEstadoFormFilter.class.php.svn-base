<?php

/**
 * CtrSlnCambioEstado filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrSlnCambioEstadoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'inscripcion_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcion'), 'add_empty' => true)),
      'gestion_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeInscripcion_2'), 'add_empty' => true)),
      'estado_anterior'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula'), 'add_empty' => true)),
      'estado_actual'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula_4'), 'add_empty' => true)),
      'usuario_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => true)),
      'fecha_modificacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'inscripcion_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRdeInscripcion'), 'column' => 'id_inscripcion')),
      'gestion_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRdeInscripcion_2'), 'column' => 'id_inscripcion')),
      'estado_anterior'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstadoMatricula'), 'column' => 'id_estado_matricula')),
      'estado_actual'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaEstadoMatricula_4'), 'column' => 'id_estado_matricula')),
      'usuario_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatUsuUsuario'), 'column' => 'id')),
      'fecha_modificacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('ctr_sln_cambio_estado_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrSlnCambioEstado';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'inscripcion_id'     => 'ForeignKey',
      'gestion_id'         => 'ForeignKey',
      'estado_anterior'    => 'ForeignKey',
      'estado_actual'      => 'ForeignKey',
      'usuario_id'         => 'ForeignKey',
      'fecha_modificacion' => 'Date',
    );
  }
}
