<?php

/**
 * SeqInscripcionTecnicaUeRango form base class.
 *
 * @method SeqInscripcionTecnicaUeRango getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSeqInscripcionTecnicaUeRangoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue_id'        => new sfWidgetFormInputHidden(),
      'gestion_id'       => new sfWidgetFormInputHidden(),
      'rango_inicio'     => new sfWidgetFormInputText(),
      'rango_fin'        => new sfWidgetFormInputText(),
      'numero_matricula' => new sfWidgetFormInputText(),
      'habilitado'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_ue_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'gestion_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'rango_inicio'     => new sfValidatorInteger(),
      'rango_fin'        => new sfValidatorInteger(),
      'numero_matricula' => new sfValidatorInteger(),
      'habilitado'       => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('seq_inscripcion_tecnica_ue_rango[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SeqInscripcionTecnicaUeRango';
  }

}
