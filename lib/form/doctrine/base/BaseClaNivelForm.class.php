<?php

/**
 * ClaNivel form base class.
 *
 * @method ClaNivel getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaNivelForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_nivel'        => new sfWidgetFormInputHidden(),
      'desc_nivel'      => new sfWidgetFormInputText(),
      'cod_org_curr_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaOrgCurricular'), 'add_empty' => false)),
      'vigente'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id_nivel'        => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id_nivel', 'required' => false)),
      'desc_nivel'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cod_org_curr_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaOrgCurricular'))),
      'vigente'         => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('cla_nivel[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaNivel';
  }

}
