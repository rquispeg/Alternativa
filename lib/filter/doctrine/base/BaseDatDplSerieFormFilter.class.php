<?php

/**
 * DatDplSerie filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatDplSerieFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'departamento_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDepartamento'), 'add_empty' => true)),
      'valido'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDplValido'), 'add_empty' => true)),
      'observacion_anulado' => new sfWidgetFormFilterInput(),
      'usuario_anulado'     => new sfWidgetFormFilterInput(),
      'fecha_anulado'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'departamento_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaDepartamento'), 'column' => 'id_departamento')),
      'valido'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaDplValido'), 'column' => 'id_valido')),
      'observacion_anulado' => new sfValidatorPass(array('required' => false)),
      'usuario_anulado'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_anulado'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('dat_dpl_serie_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatDplSerie';
  }

  public function getFields()
  {
    return array(
      'id_serie'            => 'Number',
      'serie_alfanumerico'  => 'Text',
      'gestion_id'          => 'Number',
      'departamento_id'     => 'ForeignKey',
      'valido'              => 'ForeignKey',
      'observacion_anulado' => 'Text',
      'usuario_anulado'     => 'Number',
      'fecha_anulado'       => 'Date',
    );
  }
}
