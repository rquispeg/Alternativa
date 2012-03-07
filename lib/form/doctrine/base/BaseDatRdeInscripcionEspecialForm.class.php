<?php

/**
 * DatRdeInscripcionEspecial form base class.
 *
 * @method DatRdeInscripcionEspecial getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRdeInscripcionEspecialForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_inscripcion'             => new sfWidgetFormInputHidden(),
      'gestion_id'                 => new sfWidgetFormInputHidden(),
      'codigo_rude_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'), 'add_empty' => false)),
      'num_matricula'              => new sfWidgetFormInputText(),
      'cod_ue_id'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatEspCurso'), 'add_empty' => false)),
      'periodo_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatEspCurso_5'), 'add_empty' => false)),
      'operativo_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatEspCurso_6'), 'add_empty' => false)),
      'sub_cea_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatEspCurso_8'), 'add_empty' => false)),
      'nivel_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatEspCurso_11'), 'add_empty' => false)),
      'grado_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatEspCurso_9'), 'add_empty' => false)),
      'ciclo_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatEspCurso_10'), 'add_empty' => false)),
      'paralelo'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatEspCurso_12'), 'add_empty' => false)),
      'turno_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatEspCurso_13'), 'add_empty' => false)),
      'discapacidad_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatEspCurso_14'), 'add_empty' => false)),
      'estado_matricula_inicio_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula'), 'add_empty' => false)),
      'estado_matricula_fin_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula_2'), 'add_empty' => false)),
      'fecha_inscripcion'          => new sfWidgetFormDate(),
      'apreciacion_final'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_inscripcion'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_inscripcion', 'required' => false)),
      'gestion_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'codigo_rude_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdeEstudiante'))),
      'num_matricula'              => new sfValidatorInteger(array('required' => false)),
      'cod_ue_id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatEspCurso'))),
      'periodo_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatEspCurso_5'))),
      'operativo_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatEspCurso_6'))),
      'sub_cea_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatEspCurso_8'))),
      'nivel_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatEspCurso_11'))),
      'grado_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatEspCurso_9'))),
      'ciclo_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatEspCurso_10'))),
      'paralelo'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatEspCurso_12'))),
      'turno_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatEspCurso_13'))),
      'discapacidad_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatEspCurso_14'))),
      'estado_matricula_inicio_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula'))),
      'estado_matricula_fin_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaEstadoMatricula_2'))),
      'fecha_inscripcion'          => new sfValidatorDate(array('required' => false)),
      'apreciacion_final'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_rde_inscripcion_especial[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRdeInscripcionEspecial';
  }

}
