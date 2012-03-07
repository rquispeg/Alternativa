<?php

/**
 * VisDplImpresos form base class.
 *
 * @method VisDplImpresos getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisDplImpresosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'      => new sfWidgetFormInputHidden(),
      'departamento_id' => new sfWidgetFormInputHidden(),
      'cod_org_curr_id' => new sfWidgetFormInputHidden(),
      'total'           => new sfWidgetFormInputText(),
      'impresos'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'gestion_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'departamento_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'departamento_id', 'required' => false)),
      'cod_org_curr_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_org_curr_id', 'required' => false)),
      'total'           => new sfValidatorInteger(),
      'impresos'        => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('vis_dpl_impresos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisDplImpresos';
  }

}
