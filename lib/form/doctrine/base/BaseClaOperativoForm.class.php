<?php

/**
 * ClaOperativo form base class.
 *
 * @method ClaOperativo getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaOperativoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_operativo'    => new sfWidgetFormInputHidden(),
      'desc_operativo'  => new sfWidgetFormInputText(),
      'cod_org_curr_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaOrgCurricular'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_operativo'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_operativo', 'required' => false)),
      'desc_operativo'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cod_org_curr_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaOrgCurricular'))),
    ));

    $this->widgetSchema->setNameFormat('cla_operativo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaOperativo';
  }

}
