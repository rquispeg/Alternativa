<?php

/**
 * SdatRdeDatosapoderado filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSdatRdeDatosapoderadoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idioma_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaIdioma'), 'add_empty' => true)),
      'empleo'         => new sfWidgetFormFilterInput(),
      'parentesco_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaParentesco'), 'add_empty' => true)),
      'instruccion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaInstruccion'), 'add_empty' => true)),
      'telefono'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'idioma_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaIdioma'), 'column' => 'id_idioma')),
      'empleo'         => new sfValidatorPass(array('required' => false)),
      'parentesco_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaParentesco'), 'column' => 'id_parentesco')),
      'instruccion_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaInstruccion'), 'column' => 'id_instruccion')),
      'telefono'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sdat_rde_datosapoderado_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SdatRdeDatosapoderado';
  }

  public function getFields()
  {
    return array(
      'apoderado_id'   => 'Number',
      'codigo_rude_id' => 'Text',
      'gestion_id'     => 'Number',
      'idioma_id'      => 'ForeignKey',
      'empleo'         => 'Text',
      'parentesco_id'  => 'ForeignKey',
      'instruccion_id' => 'ForeignKey',
      'telefono'       => 'Text',
    );
  }
}
