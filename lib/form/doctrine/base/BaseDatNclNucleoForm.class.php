<?php

/**
 * DatNclNucleo form base class.
 *
 * @method DatNclNucleo getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatNclNucleoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_nucleo'      => new sfWidgetFormInputHidden(),
      'gestion_id'      => new sfWidgetFormInputHidden(),
      'departamento_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatNlcSeccionDistrito_4'), 'add_empty' => false)),
      'provincia_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatNlcSeccionDistrito_3'), 'add_empty' => false)),
      'seccion_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatNlcSeccionDistrito'), 'add_empty' => false)),
      'cod_distrito_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatNlcSeccionDistrito_5'), 'add_empty' => false)),
      'desc_nucleo'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_nucleo'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_nucleo', 'required' => false)),
      'gestion_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'departamento_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatNlcSeccionDistrito_4'))),
      'provincia_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatNlcSeccionDistrito_3'))),
      'seccion_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatNlcSeccionDistrito'))),
      'cod_distrito_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatNlcSeccionDistrito_5'))),
      'desc_nucleo'     => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('dat_ncl_nucleo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatNclNucleo';
  }

}
