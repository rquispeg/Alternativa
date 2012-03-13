<?php

/**
 * TmpDatSlnCursoOferta filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpDatSlnCursoOfertaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'periodo_id'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'operativo_id'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sub_cea_id'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'grado_id'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ciclo_id'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nivel_id'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'paralelo'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'turno_id'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_asignatura_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'docente_id'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'periodo_id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'operativo_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sub_cea_id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'grado_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ciclo_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nivel_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'paralelo'          => new sfValidatorPass(array('required' => false)),
      'turno_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_asignatura_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'docente_id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('tmp_dat_sln_curso_oferta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpDatSlnCursoOferta';
  }

  public function getFields()
  {
    return array(
      'id_curso_oferta'   => 'Number',
      'cod_ue_id'         => 'Text',
      'periodo_id'        => 'Number',
      'operativo_id'      => 'Number',
      'gestion_id'        => 'Number',
      'sub_cea_id'        => 'Number',
      'grado_id'          => 'Number',
      'ciclo_id'          => 'Number',
      'nivel_id'          => 'Number',
      'paralelo'          => 'Text',
      'turno_id'          => 'Number',
      'cod_asignatura_id' => 'Number',
      'docente_id'        => 'Number',
    );
  }
}
