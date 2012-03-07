<?php

/**
 * CtrSieCurso filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrSieCursoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha_creacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'user_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'fecha_creacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'user_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatUsuUsuario'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('ctr_sie_curso_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrSieCurso';
  }

  public function getFields()
  {
    return array(
      'cod_ue_id'      => 'Text',
      'sub_cea_id'     => 'Number',
      'gestion_id'     => 'Number',
      'operativo_id'   => 'Number',
      'periodo_id'     => 'Number',
      'nivel_id'       => 'Number',
      'ciclo_id'       => 'Number',
      'grado_id'       => 'Number',
      'paralelo'       => 'Text',
      'turno_id'       => 'Number',
      'fecha_creacion' => 'Date',
      'user_id'        => 'ForeignKey',
    );
  }
}
