<?php

/**
 * DatSieOperativos form base class.
 *
 * @method DatSieOperativos getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatSieOperativosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'              => new sfWidgetFormInputHidden(),
      'operativo_id'            => new sfWidgetFormInputHidden(),
      'cerrada'                 => new sfWidgetFormInputText(),
      'cerrada_infraestructura' => new sfWidgetFormInputText(),
      'fecha_inicio'            => new sfWidgetFormDate(),
      'fecha_finalizacion'      => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'gestion_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'operativo_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'operativo_id', 'required' => false)),
      'cerrada'                 => new sfValidatorInteger(array('required' => false)),
      'cerrada_infraestructura' => new sfValidatorInteger(array('required' => false)),
      'fecha_inicio'            => new sfValidatorDate(array('required' => false)),
      'fecha_finalizacion'      => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_sie_operativos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatSieOperativos';
  }

}
