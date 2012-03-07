<?php

/**
 * DatRdeInscripcionT form base class.
 *
 * @method DatRdeInscripcionT getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRdeInscripcionTForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'id_inscripcion_tecnica' => new sfWidgetFormInputText(),
      'gestion_id'             => new sfWidgetFormInputText(),
      'num_matricula'          => new sfWidgetFormInputText(),
      'cod_ue_id'              => new sfWidgetFormInputText(),
      'periodo_id'             => new sfWidgetFormInputText(),
      'operativo_id'           => new sfWidgetFormInputText(),
      'sub_cea'                => new sfWidgetFormInputText(),
      'curso_oferta_id'        => new sfWidgetFormInputText(),
      'codigo_rude_id'         => new sfWidgetFormInputText(),
      'modalidad_ensenanza_id' => new sfWidgetFormInputText(),
      'fecha_inscripcion'      => new sfWidgetFormDate(),
      'acreditacion'           => new sfWidgetFormInputText(),
      'nivel'                  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_inscripcion_tecnica' => new sfValidatorInteger(),
      'gestion_id'             => new sfValidatorInteger(),
      'num_matricula'          => new sfValidatorInteger(),
      'cod_ue_id'              => new sfValidatorString(array('max_length' => 8)),
      'periodo_id'             => new sfValidatorInteger(),
      'operativo_id'           => new sfValidatorInteger(),
      'sub_cea'                => new sfValidatorInteger(),
      'curso_oferta_id'        => new sfValidatorInteger(),
      'codigo_rude_id'         => new sfValidatorString(array('max_length' => 18)),
      'modalidad_ensenanza_id' => new sfValidatorInteger(),
      'fecha_inscripcion'      => new sfValidatorDate(array('required' => false)),
      'acreditacion'           => new sfValidatorString(array('max_length' => 45)),
      'nivel'                  => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('dat_rde_inscripcion_t[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRdeInscripcionT';
  }

}
