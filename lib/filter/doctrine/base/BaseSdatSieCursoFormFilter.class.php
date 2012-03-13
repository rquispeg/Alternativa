<?php

/**
 * SdatSieCurso filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSdatSieCursoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSlnCursoOferta_4'), 'add_empty' => true)),
      'operativo_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SdatSlnCursoOferta_3'), 'add_empty' => true)),
      'multigrado'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'desayuno_escolar'       => new sfWidgetFormFilterInput(),
      'modalidad_ensenanza_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaModalidadEnsenanza'), 'add_empty' => true)),
      'idioma_mas_hablado'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma'), 'add_empty' => true)),
      'idioma_reg_hablado'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_6'), 'add_empty' => true)),
      'idioma_men_hablado'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_7'), 'add_empty' => true)),
      'pri_len_ensenanza'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_8'), 'add_empty' => true)),
      'seg_len_ensenanza'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_9'), 'add_empty' => true)),
      'fin_des_escolar'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaFinanciamiento'), 'add_empty' => true)),
      'nro_materias'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'consolidado'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'gestion_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SdatSlnCursoOferta_4'), 'column' => 'id_curso_oferta')),
      'operativo_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SdatSlnCursoOferta_3'), 'column' => 'id_curso_oferta')),
      'multigrado'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desayuno_escolar'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'modalidad_ensenanza_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaModalidadEnsenanza'), 'column' => 'id_modalidad_ensenanza')),
      'idioma_mas_hablado'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaIdioma'), 'column' => 'id_idioma')),
      'idioma_reg_hablado'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaIdioma_6'), 'column' => 'id_idioma')),
      'idioma_men_hablado'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaIdioma_7'), 'column' => 'id_idioma')),
      'pri_len_ensenanza'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaIdioma_8'), 'column' => 'id_idioma')),
      'seg_len_ensenanza'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaIdioma_9'), 'column' => 'id_idioma')),
      'fin_des_escolar'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaFinanciamiento'), 'column' => 'id_financiamiento')),
      'nro_materias'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'consolidado'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('sdat_sie_curso_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SdatSieCurso';
  }

  public function getFields()
  {
    return array(
      'cod_ue_id'              => 'Text',
      'sub_cea_id'             => 'Number',
      'gestion_id'             => 'ForeignKey',
      'operativo_id'           => 'ForeignKey',
      'periodo_id'             => 'Number',
      'nivel_id'               => 'Number',
      'ciclo_id'               => 'Number',
      'grado_id'               => 'Number',
      'paralelo'               => 'Text',
      'multigrado'             => 'Number',
      'turno_id'               => 'Number',
      'desayuno_escolar'       => 'Number',
      'modalidad_ensenanza_id' => 'ForeignKey',
      'idioma_mas_hablado'     => 'ForeignKey',
      'idioma_reg_hablado'     => 'ForeignKey',
      'idioma_men_hablado'     => 'ForeignKey',
      'pri_len_ensenanza'      => 'ForeignKey',
      'seg_len_ensenanza'      => 'ForeignKey',
      'fin_des_escolar'        => 'ForeignKey',
      'nro_materias'           => 'Number',
      'consolidado'            => 'Number',
    );
  }
}
