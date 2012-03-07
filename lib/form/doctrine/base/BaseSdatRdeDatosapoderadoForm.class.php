<?php

/**
 * SdatRdeDatosapoderado form base class.
 *
 * @method SdatRdeDatosapoderado getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSdatRdeDatosapoderadoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'apoderado_id'   => new sfWidgetFormInputHidden(),
      'codigo_rude_id' => new sfWidgetFormInputHidden(),
      'gestion_id'     => new sfWidgetFormInputHidden(),
      'idioma_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma'), 'add_empty' => false)),
      'empleo'         => new sfWidgetFormInputText(),
      'parentesco_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaParentesco'), 'add_empty' => false)),
      'instruccion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaInstruccion'), 'add_empty' => false)),
      'telefono'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'apoderado_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'apoderado_id', 'required' => false)),
      'codigo_rude_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'codigo_rude_id', 'required' => false)),
      'gestion_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'idioma_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma'))),
      'empleo'         => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'parentesco_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaParentesco'))),
      'instruccion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaInstruccion'))),
      'telefono'       => new sfValidatorString(array('max_length' => 15, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sdat_rde_datosapoderado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SdatRdeDatosapoderado';
  }

}
