<?php

/**
 * DatRiesgos filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRiesgosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_ue_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRueUnidadEducativa'), 'add_empty' => true)),
      'tipo_danio'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaRiesgo'), 'add_empty' => true)),
      'grado_porcentaje' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_user'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => true)),
      'observacion'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_reporte'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'codigo_ue_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRueUnidadEducativa'), 'column' => 'cod_ue')),
      'tipo_danio'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaRiesgo'), 'column' => 'id_riego')),
      'grado_porcentaje' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'id_user'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatUsuUsuario'), 'column' => 'id')),
      'observacion'      => new sfValidatorPass(array('required' => false)),
      'fecha_reporte'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('dat_riesgos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRiesgos';
  }

  public function getFields()
  {
    return array(
      'codigo_ue_id'     => 'ForeignKey',
      'tipo_danio'       => 'ForeignKey',
      'grado_porcentaje' => 'Number',
      'id_user'          => 'ForeignKey',
      'observacion'      => 'Text',
      'fecha_reporte'    => 'Date',
      'id'               => 'Number',
    );
  }
}
