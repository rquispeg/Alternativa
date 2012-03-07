<?php

/**
 * DatAltModulos form base class.
 *
 * @method DatAltModulos getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatAltModulosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'curso_oferta_id'   => new sfWidgetFormInputHidden(),
      'cod_ue_id'         => new sfWidgetFormInputHidden(),
      'cod_asignatura_id' => new sfWidgetFormInputHidden(),
      'horas'             => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'curso_oferta_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'curso_oferta_id', 'required' => false)),
      'cod_ue_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'cod_asignatura_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_asignatura_id', 'required' => false)),
      'horas'             => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_alt_modulos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatAltModulos';
  }

}
