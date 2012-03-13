<?php

/**
 * AudRueUnidadeducativa filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAudRueUnidadeducativaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha_alta' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'user'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'fecha_alta' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'user'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('aud_rue_unidadeducativa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AudRueUnidadeducativa';
  }

  public function getFields()
  {
    return array(
      'cod_ue'     => 'Text',
      'fecha_alta' => 'Date',
      'user'       => 'Text',
    );
  }
}
