<?php

/**
 * ClaOrgCurricular form base class.
 *
 * @method ClaOrgCurricular getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaOrgCurricularForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_org_curr'   => new sfWidgetFormInputHidden(),
      'desc_modalidad' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_org_curr'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_org_curr', 'required' => false)),
      'desc_modalidad' => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('cla_org_curricular[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaOrgCurricular';
  }

}
