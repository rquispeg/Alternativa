<?php

/**
 * ClaConvenios filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaConveniosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_convenio'      => new sfWidgetFormFilterInput(),
      'fecha_inicio'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_finalizacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'duracion'           => new sfWidgetFormFilterInput(),
      'tipo_convenio'      => new sfWidgetFormFilterInput(),
      'cod_dependencia_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDependencia'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'desc_convenio'      => new sfValidatorPass(array('required' => false)),
      'fecha_inicio'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fecha_finalizacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'duracion'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo_convenio'      => new sfValidatorPass(array('required' => false)),
      'cod_dependencia_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaDependencia'), 'column' => 'cod_dependencia')),
    ));

    $this->widgetSchema->setNameFormat('cla_convenios_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaConvenios';
  }

  public function getFields()
  {
    return array(
      'cod_convenios'      => 'Number',
      'desc_convenio'      => 'Text',
      'fecha_inicio'       => 'Date',
      'fecha_finalizacion' => 'Date',
      'duracion'           => 'Number',
      'tipo_convenio'      => 'Text',
      'cod_dependencia_id' => 'ForeignKey',
    );
  }
}
