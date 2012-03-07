<?php

/**
 * RelAdministrativoItems form base class.
 *
 * @method RelAdministrativoItems getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRelAdministrativoItemsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'    => new sfWidgetFormInputHidden(),
      'ci_docente_id' => new sfWidgetFormInputHidden(),
      'cod_ue_id'     => new sfWidgetFormInputHidden(),
      'periodo_id'    => new sfWidgetFormInputHidden(),
      'operativo_id'  => new sfWidgetFormInputHidden(),
      'sub_cea_id'    => new sfWidgetFormInputHidden(),
      'servicio'      => new sfWidgetFormInputHidden(),
      'item_id'       => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'gestion_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'ci_docente_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'ci_docente_id', 'required' => false)),
      'cod_ue_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'periodo_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'periodo_id', 'required' => false)),
      'operativo_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'operativo_id', 'required' => false)),
      'sub_cea_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'sub_cea_id', 'required' => false)),
      'servicio'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'servicio', 'required' => false)),
      'item_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'item_id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('rel_administrativo_items[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RelAdministrativoItems';
  }

}
