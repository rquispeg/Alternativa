<?php

/**
 * ReporteAlternativaTecnica2011 form base class.
 *
 * @method ReporteAlternativaTecnica2011 getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseReporteAlternativaTecnica2011Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'gestion_id'         => new sfWidgetFormInputText(),
      'periodo'            => new sfWidgetFormInputText(),
      'desc_departamento'  => new sfWidgetFormInputText(),
      'cod_distrito'       => new sfWidgetFormInputText(),
      'distrito'           => new sfWidgetFormInputText(),
      'id_nivel'           => new sfWidgetFormInputText(),
      'cod_ue'             => new sfWidgetFormInputText(),
      'desc_ue'            => new sfWidgetFormInputText(),
      'desc_nivel'         => new sfWidgetFormInputText(),
      'id_ciclo'           => new sfWidgetFormInputText(),
      'desc_ciclo'         => new sfWidgetFormInputText(),
      'id_grado'           => new sfWidgetFormInputText(),
      'desc_grado'         => new sfWidgetFormInputText(),
      'genero'             => new sfWidgetFormInputText(),
      'calculated_column1' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'gestion_id'         => new sfValidatorInteger(),
      'periodo'            => new sfValidatorString(array('max_length' => 45)),
      'desc_departamento'  => new sfValidatorString(array('max_length' => 10)),
      'cod_distrito'       => new sfValidatorInteger(),
      'distrito'           => new sfValidatorString(array('max_length' => 45)),
      'id_nivel'           => new sfValidatorInteger(),
      'cod_ue'             => new sfValidatorString(array('max_length' => 8)),
      'desc_ue'            => new sfValidatorString(array('max_length' => 70)),
      'desc_nivel'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'id_ciclo'           => new sfValidatorInteger(),
      'desc_ciclo'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'id_grado'           => new sfValidatorInteger(),
      'desc_grado'         => new sfValidatorString(array('max_length' => 45)),
      'genero'             => new sfValidatorString(array('max_length' => 1)),
      'calculated_column1' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reporte_alternativa_tecnica2011[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ReporteAlternativaTecnica2011';
  }

}
