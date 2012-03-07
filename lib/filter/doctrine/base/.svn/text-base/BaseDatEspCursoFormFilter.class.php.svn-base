<?php

/**
 * DatEspCurso filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatEspCursoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'multigrado'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desayuno_escolar'       => new sfWidgetFormFilterInput(),
      'modalidad_ensenanza_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaModalidadEnsenanza'), 'add_empty' => true)),
      'nro_materias'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'consolidado'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'multigrado'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desayuno_escolar'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'modalidad_ensenanza_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaModalidadEnsenanza'), 'column' => 'id_modalidad_ensenanza')),
      'nro_materias'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'consolidado'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('dat_esp_curso_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatEspCurso';
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
      'desayuno_escolar'       => 'Number',
      'modalidad_ensenanza_id' => 'ForeignKey',
      'nro_materias'           => 'Number',
      'consolidado'            => 'Number',
      'discapacidad_id'        => 'Number',
    );
  }
}
