<?php

/**
 * VisUesInfra form base class.
 *
 * @method VisUesInfra getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisUesInfraForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'gestion_id'      => new sfWidgetFormInputText(),
      'cod_le'          => new sfWidgetFormInputText(),
      'cod_ue'          => new sfWidgetFormInputText(),
      'desc_ue'         => new sfWidgetFormInputText(),
      'departamento_id' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'gestion_id'      => new sfValidatorInteger(),
      'cod_le'          => new sfValidatorString(array('max_length' => 8)),
      'cod_ue'          => new sfValidatorString(array('max_length' => 8)),
      'desc_ue'         => new sfValidatorString(array('max_length' => 70)),
      'departamento_id' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('vis_ues_infra[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisUesInfra';
  }

}
