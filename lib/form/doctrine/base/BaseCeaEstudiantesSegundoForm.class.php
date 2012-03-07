<?php

/**
 * CeaEstudiantesSegundo form base class.
 *
 * @method CeaEstudiantesSegundo getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCeaEstudiantesSegundoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'desc_departamento' => new sfWidgetFormInputText(),
      'cod_distrito'      => new sfWidgetFormInputText(),
      'gestion_id'        => new sfWidgetFormInputText(),
      'distrito'          => new sfWidgetFormInputText(),
      'cod_ue'            => new sfWidgetFormInputText(),
      'desc_ue'           => new sfWidgetFormInputText(),
      'periodo_id'        => new sfWidgetFormInputText(),
      'desc_nivel'        => new sfWidgetFormInputText(),
      'desc_ciclo'        => new sfWidgetFormInputText(),
      'desc_grado'        => new sfWidgetFormInputText(),
      'codigo_rude'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'desc_departamento' => new sfValidatorString(array('max_length' => 10)),
      'cod_distrito'      => new sfValidatorInteger(),
      'gestion_id'        => new sfValidatorInteger(),
      'distrito'          => new sfValidatorString(array('max_length' => 45)),
      'cod_ue'            => new sfValidatorString(array('max_length' => 8)),
      'desc_ue'           => new sfValidatorString(array('max_length' => 70)),
      'periodo_id'        => new sfValidatorInteger(),
      'desc_nivel'        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'desc_ciclo'        => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'desc_grado'        => new sfValidatorString(array('max_length' => 45)),
      'codigo_rude'       => new sfValidatorString(array('max_length' => 18)),
    ));

    $this->widgetSchema->setNameFormat('cea_estudiantes_segundo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CeaEstudiantesSegundo';
  }

}
