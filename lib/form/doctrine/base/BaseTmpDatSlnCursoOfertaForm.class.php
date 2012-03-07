<?php

/**
 * TmpDatSlnCursoOferta form base class.
 *
 * @method TmpDatSlnCursoOferta getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpDatSlnCursoOfertaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_curso_oferta'   => new sfWidgetFormInputHidden(),
      'cod_ue_id'         => new sfWidgetFormInputHidden(),
      'periodo_id'        => new sfWidgetFormInputText(),
      'operativo_id'      => new sfWidgetFormInputText(),
      'gestion_id'        => new sfWidgetFormInputHidden(),
      'sub_cea_id'        => new sfWidgetFormInputText(),
      'grado_id'          => new sfWidgetFormInputText(),
      'ciclo_id'          => new sfWidgetFormInputText(),
      'nivel_id'          => new sfWidgetFormInputText(),
      'paralelo'          => new sfWidgetFormInputText(),
      'turno_id'          => new sfWidgetFormInputText(),
      'cod_asignatura_id' => new sfWidgetFormInputText(),
      'docente_id'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_curso_oferta'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_curso_oferta', 'required' => false)),
      'cod_ue_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'periodo_id'        => new sfValidatorInteger(),
      'operativo_id'      => new sfValidatorInteger(),
      'gestion_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'sub_cea_id'        => new sfValidatorInteger(),
      'grado_id'          => new sfValidatorInteger(),
      'ciclo_id'          => new sfValidatorInteger(),
      'nivel_id'          => new sfValidatorInteger(),
      'paralelo'          => new sfValidatorString(array('max_length' => 2)),
      'turno_id'          => new sfValidatorInteger(),
      'cod_asignatura_id' => new sfValidatorInteger(),
      'docente_id'        => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('tmp_dat_sln_curso_oferta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpDatSlnCursoOferta';
  }

}
