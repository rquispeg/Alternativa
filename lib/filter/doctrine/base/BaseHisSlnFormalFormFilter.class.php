<?php

/**
 * HisSlnFormal filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseHisSlnFormalFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ue_id'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'curso_oferta_id'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'inscripcion_id'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'primer_trimestre'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'segundo_trimestre'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tercer_trimestre'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'promedio_anual'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reforzamiento'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'promedio_final'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usuario_id'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_modificacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'gestion_id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue_id'          => new sfValidatorPass(array('required' => false)),
      'curso_oferta_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'inscripcion_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'primer_trimestre'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'segundo_trimestre'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tercer_trimestre'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'promedio_anual'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'reforzamiento'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'promedio_final'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'usuario_id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_modificacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('his_sln_formal_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'HisSlnFormal';
  }

  public function getFields()
  {
    return array(
      'id_his_sln_formal'  => 'Number',
      'gestion_id'         => 'Number',
      'cod_ue_id'          => 'Text',
      'curso_oferta_id'    => 'Number',
      'inscripcion_id'     => 'Number',
      'primer_trimestre'   => 'Number',
      'segundo_trimestre'  => 'Number',
      'tercer_trimestre'   => 'Number',
      'promedio_anual'     => 'Number',
      'reforzamiento'      => 'Number',
      'promedio_final'     => 'Number',
      'usuario_id'         => 'Number',
      'fecha_modificacion' => 'Date',
    );
  }
}
