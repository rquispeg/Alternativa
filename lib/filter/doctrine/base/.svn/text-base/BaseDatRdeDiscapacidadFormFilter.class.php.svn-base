<?php

/**
 * DatRdeDiscapacidad filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRdeDiscapacidadFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGestion'), 'add_empty' => true)),
      'fecha_registro'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'gestion_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaGestion'), 'column' => 'id_gestion')),
      'fecha_registro'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('dat_rde_discapacidad_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRdeDiscapacidad';
  }

  public function getFields()
  {
    return array(
      'codigo_rude_id'        => 'Text',
      'discapacidad_id'       => 'Number',
      'origendiscapacidad_id' => 'Number',
      'gestion_id'            => 'ForeignKey',
      'fecha_registro'        => 'Date',
    );
  }
}
