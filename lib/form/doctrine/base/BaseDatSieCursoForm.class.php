<?php

/**
 * DatSieCurso form base class.
 *
 * @method DatSieCurso getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatSieCursoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue_id'              => new sfWidgetFormInputHidden(),
      'sub_cea_id'             => new sfWidgetFormInputHidden(),
      'gestion_id'             => new sfWidgetFormInputHidden(),
      'operativo_id'           => new sfWidgetFormInputHidden(),
      'periodo_id'             => new sfWidgetFormInputHidden(),
      'nivel_id'               => new sfWidgetFormInputHidden(),
      'ciclo_id'               => new sfWidgetFormInputHidden(),
      'grado_id'               => new sfWidgetFormInputHidden(),
      'paralelo'               => new sfWidgetFormInputHidden(),
      'multigrado'             => new sfWidgetFormInputText(),
      'turno_id'               => new sfWidgetFormInputHidden(),
      'desayuno_escolar'       => new sfWidgetFormInputText(),
      'modalidad_ensenanza_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaModalidadEnsenanza'), 'add_empty' => false)),
      'idioma_mas_hablado'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma'), 'add_empty' => false)),
      'idioma_reg_hablado'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_6'), 'add_empty' => false)),
      'idioma_men_hablado'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_7'), 'add_empty' => false)),
      'pri_len_ensenanza'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_8'), 'add_empty' => false)),
      'seg_len_ensenanza'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_9'), 'add_empty' => false)),
      'fin_des_escolar'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaFinanciamiento'), 'add_empty' => false)),
      'nro_materias'           => new sfWidgetFormInputText(),
      'consolidado'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_ue_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'sub_cea_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'sub_cea_id', 'required' => false)),
      'gestion_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'operativo_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'operativo_id', 'required' => false)),
      'periodo_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'periodo_id', 'required' => false)),
      'nivel_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'nivel_id', 'required' => false)),
      'ciclo_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'ciclo_id', 'required' => false)),
      'grado_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'grado_id', 'required' => false)),
      'paralelo'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'paralelo', 'required' => false)),
      'multigrado'             => new sfValidatorInteger(array('required' => false)),
      'turno_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'turno_id', 'required' => false)),
      'desayuno_escolar'       => new sfValidatorInteger(array('required' => false)),
      'modalidad_ensenanza_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaModalidadEnsenanza'), 'required' => false)),
      'idioma_mas_hablado'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma'), 'required' => false)),
      'idioma_reg_hablado'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_6'), 'required' => false)),
      'idioma_men_hablado'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_7'), 'required' => false)),
      'pri_len_ensenanza'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_8'), 'required' => false)),
      'seg_len_ensenanza'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma_9'), 'required' => false)),
      'fin_des_escolar'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaFinanciamiento'), 'required' => false)),
      'nro_materias'           => new sfValidatorInteger(array('required' => false)),
      'consolidado'            => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_sie_curso[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatSieCurso';
  }

}
