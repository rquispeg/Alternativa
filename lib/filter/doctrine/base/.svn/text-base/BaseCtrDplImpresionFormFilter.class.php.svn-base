<?php

/**
 * CtrDplImpresion filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrDplImpresionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_rude_id'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numero_serie'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_impresion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'user_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatUsuUsuario'), 'add_empty' => true)),
      'obs'             => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'codigo_rude_id'  => new sfValidatorPass(array('required' => false)),
      'numero_serie'    => new sfValidatorPass(array('required' => false)),
      'fecha_impresion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'user_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatUsuUsuario'), 'column' => 'id')),
      'obs'             => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctr_dpl_impresion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrDplImpresion';
  }

  public function getFields()
  {
    return array(
      'id_inscripcion'  => 'Number',
      'gestion_id'      => 'Number',
      'codigo_rude_id'  => 'Text',
      'numero_serie'    => 'Text',
      'fecha_impresion' => 'Date',
      'user_id'         => 'ForeignKey',
      'obs'             => 'Text',
    );
  }
}
