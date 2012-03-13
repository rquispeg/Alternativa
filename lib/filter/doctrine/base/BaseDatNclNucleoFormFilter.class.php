<?php

/**
 * DatNclNucleo filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatNclNucleoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'departamento_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatNlcSeccionDistrito_4'), 'add_empty' => true)),
      'provincia_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatNlcSeccionDistrito_3'), 'add_empty' => true)),
      'seccion_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatNlcSeccionDistrito'), 'add_empty' => true)),
      'cod_distrito_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatNlcSeccionDistrito_5'), 'add_empty' => true)),
      'desc_nucleo'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'departamento_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatNlcSeccionDistrito_4'), 'column' => 'departamento_id')),
      'provincia_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatNlcSeccionDistrito_3'), 'column' => 'departamento_id')),
      'seccion_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatNlcSeccionDistrito'), 'column' => 'departamento_id')),
      'cod_distrito_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatNlcSeccionDistrito_5'), 'column' => 'departamento_id')),
      'desc_nucleo'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_ncl_nucleo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatNclNucleo';
  }

  public function getFields()
  {
    return array(
      'cod_nucleo'      => 'Number',
      'gestion_id'      => 'Number',
      'departamento_id' => 'ForeignKey',
      'provincia_id'    => 'ForeignKey',
      'seccion_id'      => 'ForeignKey',
      'cod_distrito_id' => 'ForeignKey',
      'desc_nucleo'     => 'Text',
    );
  }
}
