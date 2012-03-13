<?php

/**
 * DatOpeArchivo filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatOpeArchivoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue_id'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gestion_id'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sub_cea_id'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'operativo_id'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'departamento'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'path_archivo_emitido'  => new sfWidgetFormFilterInput(),
      'path_archivo_remitido' => new sfWidgetFormFilterInput(),
      'fecha_generacion'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_remision'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_consolidacion'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'estado_archivo_id'     => new sfWidgetFormFilterInput(),
      'codigo_control'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'cod_ue_id'             => new sfValidatorPass(array('required' => false)),
      'gestion_id'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sub_cea_id'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'operativo_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'departamento'          => new sfValidatorPass(array('required' => false)),
      'path_archivo_emitido'  => new sfValidatorPass(array('required' => false)),
      'path_archivo_remitido' => new sfValidatorPass(array('required' => false)),
      'fecha_generacion'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fecha_remision'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fecha_consolidacion'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'estado_archivo_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'codigo_control'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_ope_archivo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatOpeArchivo';
  }

  public function getFields()
  {
    return array(
      'id_archivo'            => 'Number',
      'cod_ue_id'             => 'Text',
      'gestion_id'            => 'Number',
      'sub_cea_id'            => 'Number',
      'operativo_id'          => 'Number',
      'departamento'          => 'Text',
      'path_archivo_emitido'  => 'Text',
      'path_archivo_remitido' => 'Text',
      'fecha_generacion'      => 'Date',
      'fecha_remision'        => 'Date',
      'fecha_consolidacion'   => 'Date',
      'estado_archivo_id'     => 'Number',
      'codigo_control'        => 'Text',
    );
  }
}
