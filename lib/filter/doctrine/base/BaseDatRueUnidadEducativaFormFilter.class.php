<?php

/**
 * DatRueUnidadEducativa filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRueUnidadEducativaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_ue'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rue_ue'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_resolucion'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'nro_resolucion'     => new sfWidgetFormFilterInput(),
      'obs_rue'            => new sfWidgetFormFilterInput(),
      'des_ue_antes'       => new sfWidgetFormFilterInput(),
      'cod_le_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatIfrJurisdiccionGeografica'), 'add_empty' => true)),
      'cod_org_curr_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaOrgCurricular'), 'add_empty' => true)),
      'cod_dependencia_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDependencia'), 'add_empty' => true)),
      'cod_convenio_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaConvenios'), 'add_empty' => true)),
      'cod_cerrada_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCerrada'), 'add_empty' => true)),
      'fecha_creacion'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'desc_ue'            => new sfValidatorPass(array('required' => false)),
      'rue_ue'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_resolucion'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'nro_resolucion'     => new sfValidatorPass(array('required' => false)),
      'obs_rue'            => new sfValidatorPass(array('required' => false)),
      'des_ue_antes'       => new sfValidatorPass(array('required' => false)),
      'cod_le_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatIfrJurisdiccionGeografica'), 'column' => 'cod_le')),
      'cod_org_curr_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaOrgCurricular'), 'column' => 'cod_org_curr')),
      'cod_dependencia_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaDependencia'), 'column' => 'cod_dependencia')),
      'cod_convenio_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaConvenios'), 'column' => 'cod_convenios')),
      'cod_cerrada_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaCerrada'), 'column' => 'cod_cerrada')),
      'fecha_creacion'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('dat_rue_unidad_educativa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRueUnidadEducativa';
  }

  public function getFields()
  {
    return array(
      'cod_ue'             => 'Text',
      'desc_ue'            => 'Text',
      'rue_ue'             => 'Number',
      'fecha_resolucion'   => 'Date',
      'nro_resolucion'     => 'Text',
      'obs_rue'            => 'Text',
      'des_ue_antes'       => 'Text',
      'cod_le_id'          => 'ForeignKey',
      'cod_org_curr_id'    => 'ForeignKey',
      'cod_dependencia_id' => 'ForeignKey',
      'cod_convenio_id'    => 'ForeignKey',
      'cod_cerrada_id'     => 'ForeignKey',
      'fecha_creacion'     => 'Date',
    );
  }
}
