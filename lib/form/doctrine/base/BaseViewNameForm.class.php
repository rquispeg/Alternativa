<?php

/**
 * ViewName form base class.
 *
 * @method ViewName getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseViewNameForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'id_departamento'   => new sfWidgetFormInputText(),
      'desc_departamento' => new sfWidgetFormInputText(),
      'gestion_id'        => new sfWidgetFormInputText(),
      'cod_distrito'      => new sfWidgetFormInputText(),
      'distrito'          => new sfWidgetFormInputText(),
      'tipo'              => new sfWidgetFormInputText(),
      'cod_ue'            => new sfWidgetFormInputText(),
      'desc_ue'           => new sfWidgetFormInputText(),
      'cod_org_curr_id'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'id_departamento'   => new sfValidatorInteger(),
      'desc_departamento' => new sfValidatorString(array('max_length' => 10)),
      'gestion_id'        => new sfValidatorInteger(),
      'cod_distrito'      => new sfValidatorInteger(),
      'distrito'          => new sfValidatorString(array('max_length' => 45)),
      'tipo'              => new sfValidatorString(array('max_length' => 2)),
      'cod_ue'            => new sfValidatorString(array('max_length' => 8)),
      'desc_ue'           => new sfValidatorString(array('max_length' => 70)),
      'cod_org_curr_id'   => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('view_name[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ViewName';
  }

}
