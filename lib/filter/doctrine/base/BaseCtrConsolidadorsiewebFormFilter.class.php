<?php

/**
 * CtrConsolidadorsieweb filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrConsolidadorsiewebFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'usuario_id'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'activado'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'horainicio'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'horafin'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'multiarchivo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mensaje'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'modoforzado'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'username'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'usuario_id'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'activado'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'horainicio'   => new sfValidatorPass(array('required' => false)),
      'horafin'      => new sfValidatorPass(array('required' => false)),
      'multiarchivo' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'mensaje'      => new sfValidatorPass(array('required' => false)),
      'modoforzado'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'username'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctr_consolidadorsieweb_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrConsolidadorsieweb';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'usuario_id'   => 'Number',
      'activado'     => 'Number',
      'horainicio'   => 'Text',
      'horafin'      => 'Text',
      'multiarchivo' => 'Number',
      'mensaje'      => 'Text',
      'modoforzado'  => 'Number',
      'username'     => 'Text',
    );
  }
}
