<?php

/**
 * DatRueCursoTramite filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRueCursoTramiteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre_subcea'          => new sfWidgetFormFilterInput(),
      'multigrado'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desayuno_escolar'       => new sfWidgetFormFilterInput(),
      'modalidad_ensenanza_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaModalidadEnsenanza'), 'add_empty' => true)),
      'nro_materias'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'consolidado'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre_subcea'          => new sfValidatorPass(array('required' => false)),
      'multigrado'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desayuno_escolar'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'modalidad_ensenanza_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaModalidadEnsenanza'), 'column' => 'id_modalidad_ensenanza')),
      'nro_materias'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'consolidado'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('dat_rue_curso_tramite_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRueCursoTramite';
  }

  public function getFields()
  {
    return array(
      'formulario_id'          => 'Number',
      'gestion_id'             => 'Number',
      'periodo_id'             => 'Number',
      'sub_cea_id'             => 'Number',
      'nombre_subcea'          => 'Text',
      'nivel_id'               => 'Number',
      'ciclo_id'               => 'Number',
      'grado_id'               => 'Number',
      'paralelo'               => 'Text',
      'turno_id'               => 'Number',
      'multigrado'             => 'Number',
      'desayuno_escolar'       => 'Number',
      'modalidad_ensenanza_id' => 'ForeignKey',
      'nro_materias'           => 'Number',
      'consolidado'            => 'Number',
    );
  }
}
