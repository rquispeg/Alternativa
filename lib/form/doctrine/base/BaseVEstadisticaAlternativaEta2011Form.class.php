<?php

/**
 * VEstadisticaAlternativaEta2011 form base class.
 *
 * @method VEstadisticaAlternativaEta2011 getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVEstadisticaAlternativaEta2011Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'gestion_id'         => new sfWidgetFormInputText(),
      'desc_departamento'  => new sfWidgetFormInputText(),
      'cod_distrito'       => new sfWidgetFormInputText(),
      'distrito'           => new sfWidgetFormInputText(),
      'cod_ue'             => new sfWidgetFormInputText(),
      'desc_ue'            => new sfWidgetFormInputText(),
      'sub_cea'            => new sfWidgetFormInputText(),
      'nombre_subcea'      => new sfWidgetFormInputText(),
      'id_ciclo'           => new sfWidgetFormInputText(),
      'desc_ciclo'         => new sfWidgetFormInputText(),
      'id_area'            => new sfWidgetFormInputText(),
      'desc_area'          => new sfWidgetFormInputText(),
      'id_curso_oferta'    => new sfWidgetFormInputText(),
      'desc_curso_oferta'  => new sfWidgetFormInputText(),
      'calculated_column1' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'gestion_id'         => new sfValidatorInteger(array('required' => false)),
      'desc_departamento'  => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'cod_distrito'       => new sfValidatorInteger(array('required' => false)),
      'distrito'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cod_ue'             => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'desc_ue'            => new sfValidatorString(array('max_length' => 70, 'required' => false)),
      'sub_cea'            => new sfValidatorInteger(array('required' => false)),
      'nombre_subcea'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'id_ciclo'           => new sfValidatorInteger(array('required' => false)),
      'desc_ciclo'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'id_area'            => new sfValidatorInteger(array('required' => false)),
      'desc_area'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'id_curso_oferta'    => new sfValidatorInteger(array('required' => false)),
      'desc_curso_oferta'  => new sfValidatorString(array('max_length' => 75, 'required' => false)),
      'calculated_column1' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('v_estadistica_alternativa_eta2011[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VEstadisticaAlternativaEta2011';
  }

}
