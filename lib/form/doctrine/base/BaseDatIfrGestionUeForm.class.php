<?php

/**
 * DatIfrGestionUe form base class.
 *
 * @method DatIfrGestionUe getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatIfrGestionUeForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue_id'    => new sfWidgetFormInputHidden(),
      'sub_cea_id'   => new sfWidgetFormInputHidden(),
      'gestion_id'   => new sfWidgetFormInputHidden(),
      'operativo_id' => new sfWidgetFormInputHidden(),
      'periodo_id'   => new sfWidgetFormInputHidden(),
      'direccion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatIfrDireccionGeografica'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'cod_ue_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_ue_id', 'required' => false)),
      'sub_cea_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'sub_cea_id', 'required' => false)),
      'gestion_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'operativo_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'operativo_id', 'required' => false)),
      'periodo_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'periodo_id', 'required' => false)),
      'direccion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatIfrDireccionGeografica'))),
    ));

    $this->widgetSchema->setNameFormat('dat_ifr_gestion_ue[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatIfrGestionUe';
  }

}
