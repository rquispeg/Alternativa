<?php

/**
 * TmpSieDocente filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpSieDocenteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ci_docente_id'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ue_id'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'periodo_id'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'operativo_id'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sub_cea_id'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'financiamiento_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cargo_id'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'servicio'          => new sfWidgetFormFilterInput(),
      'item'              => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'ci_docente_id'     => new sfValidatorPass(array('required' => false)),
      'cod_ue_id'         => new sfValidatorPass(array('required' => false)),
      'periodo_id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'operativo_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sub_cea_id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'financiamiento_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cargo_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'servicio'          => new sfValidatorPass(array('required' => false)),
      'item'              => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tmp_sie_docente_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpSieDocente';
  }

  public function getFields()
  {
    return array(
      'id_docente'        => 'Number',
      'gestion_id'        => 'Number',
      'ci_docente_id'     => 'Text',
      'cod_ue_id'         => 'Text',
      'periodo_id'        => 'Number',
      'operativo_id'      => 'Number',
      'sub_cea_id'        => 'Number',
      'financiamiento_id' => 'Number',
      'cargo_id'          => 'Number',
      'servicio'          => 'Text',
      'item'              => 'Text',
    );
  }
}
