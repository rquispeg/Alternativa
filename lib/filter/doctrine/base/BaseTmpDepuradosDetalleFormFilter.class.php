<?php

/**
 * TmpDepuradosDetalle filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpDepuradosDetalleFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_rude_id'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'codigo_rude_id_1' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gestion_id_1'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'secuen'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ue_id_1'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'codigo_rude_id'   => new sfValidatorPass(array('required' => false)),
      'codigo_rude_id_1' => new sfValidatorPass(array('required' => false)),
      'gestion_id_1'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'secuen'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue_id_1'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tmp_depurados_detalle_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpDepuradosDetalle';
  }

  public function getFields()
  {
    return array(
      'codigo_rude_id'   => 'Text',
      'codigo_rude_id_1' => 'Text',
      'gestion_id_1'     => 'Number',
      'secuen'           => 'Number',
      'cod_ue_id_1'      => 'Text',
      'id'               => 'Number',
    );
  }
}
