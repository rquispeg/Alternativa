<?php

/**
 * DatAltCursooferta form base class.
 *
 * @method DatAltCursooferta getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatAltCursoofertaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'curso_oferta_id'           => new sfWidgetFormInputHidden(),
      'cod_ue_id'                 => new sfWidgetFormInputHidden(),
      'resolucion_administrativa' => new sfWidgetFormInputText(),
      'fecha_vigencia'            => new sfWidgetFormDate(),
      'vigente'                   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'curso_oferta_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'curso_oferta_id', 'required' => false)),
      'cod_ue_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'resolucion_administrativa' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fecha_vigencia'            => new sfValidatorDate(array('required' => false)),
      'vigente'                   => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('dat_alt_cursooferta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatAltCursooferta';
  }

}
