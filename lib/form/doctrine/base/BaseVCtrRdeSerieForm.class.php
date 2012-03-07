<?php

/**
 * VCtrRdeSerie form base class.
 *
 * @method VCtrRdeSerie getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVCtrRdeSerieForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                      => new sfWidgetFormInputHidden(),
      'codigo_rude'             => new sfWidgetFormInputText(),
      'gestion_id8'             => new sfWidgetFormInputText(),
      'cod_ue_id8'              => new sfWidgetFormInputText(),
      'nivel_id8'               => new sfWidgetFormInputText(),
      'grado_id8'               => new sfWidgetFormInputText(),
      'desc_estado_matricula8'  => new sfWidgetFormInputText(),
      'gestion_id9'             => new sfWidgetFormInputText(),
      'cod_ue_id9'              => new sfWidgetFormInputText(),
      'nivel_id9'               => new sfWidgetFormInputText(),
      'grado_id9'               => new sfWidgetFormInputText(),
      'desc_estado_matricula9'  => new sfWidgetFormInputText(),
      'gestion_id10'            => new sfWidgetFormInputText(),
      'cod_ue_id10'             => new sfWidgetFormInputText(),
      'nivel_id10'              => new sfWidgetFormInputText(),
      'grado_id10'              => new sfWidgetFormInputText(),
      'desc_estado_matricula10' => new sfWidgetFormInputText(),
      'gestion_id11'            => new sfWidgetFormInputText(),
      'cod_ue_id11'             => new sfWidgetFormInputText(),
      'nivel_id11'              => new sfWidgetFormInputText(),
      'grado_id11'              => new sfWidgetFormInputText(),
      'desc_estado_matricula11' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'codigo_rude'             => new sfValidatorString(array('max_length' => 18)),
      'gestion_id8'             => new sfValidatorInteger(array('required' => false)),
      'cod_ue_id8'              => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nivel_id8'               => new sfValidatorInteger(array('required' => false)),
      'grado_id8'               => new sfValidatorInteger(array('required' => false)),
      'desc_estado_matricula8'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'gestion_id9'             => new sfValidatorInteger(array('required' => false)),
      'cod_ue_id9'              => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nivel_id9'               => new sfValidatorInteger(array('required' => false)),
      'grado_id9'               => new sfValidatorInteger(array('required' => false)),
      'desc_estado_matricula9'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'gestion_id10'            => new sfValidatorInteger(array('required' => false)),
      'cod_ue_id10'             => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nivel_id10'              => new sfValidatorInteger(array('required' => false)),
      'grado_id10'              => new sfValidatorInteger(array('required' => false)),
      'desc_estado_matricula10' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'gestion_id11'            => new sfValidatorInteger(array('required' => false)),
      'cod_ue_id11'             => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nivel_id11'              => new sfValidatorInteger(array('required' => false)),
      'grado_id11'              => new sfValidatorInteger(array('required' => false)),
      'desc_estado_matricula11' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('v_ctr_rde_serie[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VCtrRdeSerie';
  }

}
