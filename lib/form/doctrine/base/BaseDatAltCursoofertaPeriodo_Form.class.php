<?php

/**
 * DatAltCursoofertaPeriodo_ form base class.
 *
 * @method DatAltCursoofertaPeriodo_ getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatAltCursoofertaPeriodo_Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue_id'              => new sfWidgetFormInputHidden(),
      'periodo_id'             => new sfWidgetFormInputHidden(),
      'operativo_id'           => new sfWidgetFormInputHidden(),
      'gestion_id'             => new sfWidgetFormInputHidden(),
      'sub_cea'                => new sfWidgetFormInputHidden(),
      'curso_oferta_id'        => new sfWidgetFormInputHidden(),
      'nivel_id'               => new sfWidgetFormInputHidden(),
      'ciclo_id'               => new sfWidgetFormInputHidden(),
      'grado_id'               => new sfWidgetFormInputHidden(),
      'paralelo'               => new sfWidgetFormInputHidden(),
      'turno_id'               => new sfWidgetFormInputHidden(),
      'modalidad_ensenanza_id' => new sfWidgetFormInputText(),
      'nro_materias'           => new sfWidgetFormInputText(),
      'consolidado'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_ue_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'periodo_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'periodo_id', 'required' => false)),
      'operativo_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'operativo_id', 'required' => false)),
      'gestion_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'sub_cea'                => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'sub_cea', 'required' => false)),
      'curso_oferta_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'curso_oferta_id', 'required' => false)),
      'nivel_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'nivel_id', 'required' => false)),
      'ciclo_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'ciclo_id', 'required' => false)),
      'grado_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'grado_id', 'required' => false)),
      'paralelo'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'paralelo', 'required' => false)),
      'turno_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'turno_id', 'required' => false)),
      'modalidad_ensenanza_id' => new sfValidatorInteger(),
      'nro_materias'           => new sfValidatorInteger(),
      'consolidado'            => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('dat_alt_cursooferta_periodo_[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatAltCursoofertaPeriodo_';
  }

}
