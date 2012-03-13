<?php

/**
 * DatSieOperativos filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatSieOperativosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cerrada'                 => new sfWidgetFormFilterInput(),
      'cerrada_infraestructura' => new sfWidgetFormFilterInput(),
      'fecha_inicio'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_finalizacion'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'cerrada'                 => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cerrada_infraestructura' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_inicio'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fecha_finalizacion'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('dat_sie_operativos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatSieOperativos';
  }

  public function getFields()
  {
    return array(
      'gestion_id'              => 'Number',
      'operativo_id'            => 'Number',
      'cerrada'                 => 'Number',
      'cerrada_infraestructura' => 'Number',
      'fecha_inicio'            => 'Date',
      'fecha_finalizacion'      => 'Date',
    );
  }
}
