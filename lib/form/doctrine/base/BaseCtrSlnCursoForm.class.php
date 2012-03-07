<?php

/**
 * CtrSlnCurso form base class.
 *
 * @method CtrSlnCurso getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCtrSlnCursoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'gestion_id'          => new sfWidgetFormInputHidden(),
      'cod_ue_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso'), 'add_empty' => false)),
      'periodo_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_2'), 'add_empty' => false)),
      'operativo_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_3'), 'add_empty' => false)),
      'sub_cea_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_5'), 'add_empty' => false)),
      'nivel_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_8'), 'add_empty' => false)),
      'grado_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_6'), 'add_empty' => false)),
      'ciclo_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_7'), 'add_empty' => false)),
      'paralelo'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_9'), 'add_empty' => false)),
      'turno_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_10'), 'add_empty' => false)),
      'seguridad'           => new sfWidgetFormInputText(),
      'fecha_consolidacion' => new sfWidgetFormDateTime(),
      'fecha_presentacion'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'gestion_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'cod_ue_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso'))),
      'periodo_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_2'))),
      'operativo_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_3'))),
      'sub_cea_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_5'))),
      'nivel_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_8'))),
      'grado_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_6'))),
      'ciclo_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_7'))),
      'paralelo'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_9'))),
      'turno_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_10'))),
      'seguridad'           => new sfValidatorString(array('max_length' => 45)),
      'fecha_consolidacion' => new sfValidatorDateTime(),
      'fecha_presentacion'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ctr_sln_curso[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CtrSlnCurso';
  }

}
