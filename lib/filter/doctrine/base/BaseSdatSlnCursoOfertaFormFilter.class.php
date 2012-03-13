<?php

/**
 * SdatSlnCursoOferta filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSdatSlnCursoOfertaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'periodo_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCurso_2'), 'add_empty' => true)),
      'operativo_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCurso_3'), 'add_empty' => true)),
      'sub_cea_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCurso_5'), 'add_empty' => true)),
      'grado_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCurso_6'), 'add_empty' => true)),
      'ciclo_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCurso_7'), 'add_empty' => true)),
      'nivel_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCurso_8'), 'add_empty' => true)),
      'paralelo'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCurso_9'), 'add_empty' => true)),
      'turno_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieCurso_10'), 'add_empty' => true)),
      'cod_asignatura_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaAsignatura'), 'add_empty' => true)),
      'docente_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSieDocente'), 'add_empty' => true)),
      'horas'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'periodo_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SdatSieCurso_2'), 'column' => 'cod_ue_id')),
      'operativo_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SdatSieCurso_3'), 'column' => 'cod_ue_id')),
      'sub_cea_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SdatSieCurso_5'), 'column' => 'cod_ue_id')),
      'grado_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SdatSieCurso_6'), 'column' => 'cod_ue_id')),
      'ciclo_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SdatSieCurso_7'), 'column' => 'cod_ue_id')),
      'nivel_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SdatSieCurso_8'), 'column' => 'cod_ue_id')),
      'paralelo'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SdatSieCurso_9'), 'column' => 'cod_ue_id')),
      'turno_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SdatSieCurso_10'), 'column' => 'cod_ue_id')),
      'cod_asignatura_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaAsignatura'), 'column' => 'cod_asignatura')),
      'docente_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SdatSieDocente'), 'column' => 'ci_docente_id')),
      'horas'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('sdat_sln_curso_oferta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SdatSlnCursoOferta';
  }

  public function getFields()
  {
    return array(
      'id_curso_oferta'   => 'Number',
      'cod_ue_id'         => 'Text',
      'periodo_id'        => 'ForeignKey',
      'operativo_id'      => 'ForeignKey',
      'gestion_id'        => 'Number',
      'sub_cea_id'        => 'ForeignKey',
      'grado_id'          => 'ForeignKey',
      'ciclo_id'          => 'ForeignKey',
      'nivel_id'          => 'ForeignKey',
      'paralelo'          => 'ForeignKey',
      'turno_id'          => 'ForeignKey',
      'cod_asignatura_id' => 'ForeignKey',
      'docente_id'        => 'ForeignKey',
      'horas'             => 'Number',
    );
  }
}
