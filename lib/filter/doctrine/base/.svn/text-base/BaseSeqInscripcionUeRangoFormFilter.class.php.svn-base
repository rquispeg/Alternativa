<?php

/**
 * SeqInscripcionUeRango filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSeqInscripcionUeRangoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'rango_inicio'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rango_fin'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numero_matricula' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'habilitado'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'rango_inicio'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rango_fin'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'numero_matricula' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'habilitado'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('seq_inscripcion_ue_rango_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SeqInscripcionUeRango';
  }

  public function getFields()
  {
    return array(
      'cod_ue_id'        => 'Text',
      'gestion_id'       => 'Number',
      'rango_inicio'     => 'Number',
      'rango_fin'        => 'Number',
      'numero_matricula' => 'Number',
      'habilitado'       => 'Number',
    );
  }
}
