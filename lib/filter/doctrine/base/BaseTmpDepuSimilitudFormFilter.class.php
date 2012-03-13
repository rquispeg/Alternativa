<?php

/**
 * TmpDepuSimilitud filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpDepuSimilitudFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'paterno'          => new sfWidgetFormFilterInput(),
      'materno'          => new sfWidgetFormFilterInput(),
      'nombre'           => new sfWidgetFormFilterInput(),
      'fecha_nacimiento' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'estado'           => new sfWidgetFormFilterInput(),
      'usuario_id'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantidad'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'paterno'          => new sfValidatorPass(array('required' => false)),
      'materno'          => new sfValidatorPass(array('required' => false)),
      'nombre'           => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'estado'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'usuario_id'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cantidad'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('tmp_depu_similitud_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpDepuSimilitud';
  }

  public function getFields()
  {
    return array(
      'paterno'          => 'Text',
      'materno'          => 'Text',
      'nombre'           => 'Text',
      'fecha_nacimiento' => 'Date',
      'estado'           => 'Number',
      'usuario_id'       => 'Number',
      'cantidad'         => 'Number',
      'id'               => 'Number',
    );
  }
}
