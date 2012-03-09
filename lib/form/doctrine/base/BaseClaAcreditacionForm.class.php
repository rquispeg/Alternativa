<?php

/**
 * ClaAcreditacion form base class.
 *
 * @method ClaAcreditacion getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaAcreditacionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'desc_acreditacion' => new sfWidgetFormInputText(),
      'cod_org_curr_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaOrgCurricular'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'desc_acreditacion' => new sfValidatorString(array('max_length' => 45)),
      'cod_org_curr_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaOrgCurricular'))),
    ));

    $this->widgetSchema->setNameFormat('cla_acreditacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaAcreditacion';
  }

}
