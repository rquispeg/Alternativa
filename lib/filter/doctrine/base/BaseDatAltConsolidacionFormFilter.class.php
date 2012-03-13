<?php

/**
 * DatAltConsolidacion filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatAltConsolidacionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue_id'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'path_file'           => new sfWidgetFormFilterInput(),
      'fecha_consolidacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'cod_ue_id'           => new sfValidatorPass(array('required' => false)),
      'path_file'           => new sfValidatorPass(array('required' => false)),
      'fecha_consolidacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('dat_alt_consolidacion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatAltConsolidacion';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'cod_ue_id'           => 'Text',
      'path_file'           => 'Text',
      'fecha_consolidacion' => 'Date',
    );
  }
}
