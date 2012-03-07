<?php

/**
 * DatSlnCursoOferta form base class.
 *
 * @method DatSlnCursoOferta getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatSlnCursoOfertaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_curso_oferta'   => new sfWidgetFormInputHidden(),
      'cod_ue_id'         => new sfWidgetFormInputHidden(),
      'periodo_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_2'), 'add_empty' => false)),
      'operativo_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_3'), 'add_empty' => false)),
      'gestion_id'        => new sfWidgetFormInputHidden(),
      'sub_cea_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_5'), 'add_empty' => false)),
      'grado_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_6'), 'add_empty' => false)),
      'ciclo_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_7'), 'add_empty' => false)),
      'nivel_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_8'), 'add_empty' => false)),
      'paralelo'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_9'), 'add_empty' => false)),
      'turno_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_10'), 'add_empty' => false)),
      'cod_asignatura_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSlnEstudios_13'), 'add_empty' => false)),
      'docente_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieDocente'), 'add_empty' => false)),
      'horas'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_curso_oferta'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_curso_oferta', 'required' => false)),
      'cod_ue_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'periodo_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_2'))),
      'operativo_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_3'))),
      'gestion_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'sub_cea_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_5'))),
      'grado_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_6'))),
      'ciclo_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_7'))),
      'nivel_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_8'))),
      'paralelo'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_9'))),
      'turno_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieCurso_10'))),
      'cod_asignatura_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSlnEstudios_13'))),
      'docente_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatSieDocente'))),
      'horas'             => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_sln_curso_oferta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatSlnCursoOferta';
  }

}
