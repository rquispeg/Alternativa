<?php

/**
 * SdatSieCursotecnica filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSdatSieCursotecnicaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'operativo_id'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'multigrado'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'modalidad_ensenanza_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nro_materias'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'consolidado'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'gestion_id'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'operativo_id'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'multigrado'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'modalidad_ensenanza_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nro_materias'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'consolidado'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('sdat_sie_cursotecnica_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SdatSieCursotecnica';
  }

  public function getFields()
  {
    return array(
      'cod_ue_id'              => 'Text',
      'sub_cea_id'             => 'Number',
      'gestion_id'             => 'Number',
      'operativo_id'           => 'Number',
      'periodo_id'             => 'Number',
      'nivel_id'               => 'Number',
      'ciclo_id'               => 'Number',
      'grado_id'               => 'Number',
      'paralelo'               => 'Text',
      'multigrado'             => 'Number',
      'turno_id'               => 'Number',
      'modalidad_ensenanza_id' => 'Number',
      'nro_materias'           => 'Number',
      'consolidado'            => 'Number',
      'curso_oferta_id'        => 'Number',
    );
  }
}
