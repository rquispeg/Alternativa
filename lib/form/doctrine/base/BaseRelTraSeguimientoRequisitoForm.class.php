<?php

/**
 * RelTraSeguimientoRequisito form base class.
 *
 * @method RelTraSeguimientoRequisito getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRelTraSeguimientoRequisitoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'seguimiento_id' => new sfWidgetFormInputHidden(),
      'gestion_id'     => new sfWidgetFormInputHidden(),
      'requisito_id'   => new sfWidgetFormInputHidden(),
      'valor'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'seguimiento_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'seguimiento_id', 'required' => false)),
      'gestion_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'requisito_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'requisito_id', 'required' => false)),
      'valor'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('rel_tra_seguimiento_requisito[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RelTraSeguimientoRequisito';
  }

}
