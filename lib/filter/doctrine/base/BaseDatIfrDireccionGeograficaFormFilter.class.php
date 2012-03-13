<?php

/**
 * DatIfrDireccionGeografica filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatIfrDireccionGeograficaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'localidad_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad'), 'add_empty' => true)),
      'canton_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_2'), 'add_empty' => true)),
      'seccion_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_3'), 'add_empty' => true)),
      'provincia_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_4'), 'add_empty' => true)),
      'departamento_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaLocalidad_5'), 'add_empty' => true)),
      'zona'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'direccion'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'area'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'localidad_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaLocalidad'), 'column' => 'departamento_id')),
      'canton_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaLocalidad_2'), 'column' => 'departamento_id')),
      'seccion_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaLocalidad_3'), 'column' => 'departamento_id')),
      'provincia_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaLocalidad_4'), 'column' => 'departamento_id')),
      'departamento_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaLocalidad_5'), 'column' => 'departamento_id')),
      'zona'            => new sfValidatorPass(array('required' => false)),
      'direccion'       => new sfValidatorPass(array('required' => false)),
      'area'            => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_ifr_direccion_geografica_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatIfrDireccionGeografica';
  }

  public function getFields()
  {
    return array(
      'id_direccion'    => 'Number',
      'localidad_id'    => 'ForeignKey',
      'canton_id'       => 'ForeignKey',
      'seccion_id'      => 'ForeignKey',
      'provincia_id'    => 'ForeignKey',
      'departamento_id' => 'ForeignKey',
      'zona'            => 'Text',
      'direccion'       => 'Text',
      'area'            => 'Text',
    );
  }
}
