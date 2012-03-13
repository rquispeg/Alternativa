<?php

/**
 * DatRdaDocentesadministrativos filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatRdaDocentesadministrativosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ci'               => new sfWidgetFormFilterInput(),
      'paterno'          => new sfWidgetFormFilterInput(),
      'materno'          => new sfWidgetFormFilterInput(),
      'nombre'           => new sfWidgetFormFilterInput(),
      'fecha_nacimiento' => new sfWidgetFormFilterInput(),
      'genero'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'ci'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'paterno'          => new sfValidatorPass(array('required' => false)),
      'materno'          => new sfValidatorPass(array('required' => false)),
      'nombre'           => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento' => new sfValidatorPass(array('required' => false)),
      'genero'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_rda_docentesadministrativos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatRdaDocentesadministrativos';
  }

  public function getFields()
  {
    return array(
      'rda'              => 'Number',
      'ci'               => 'Number',
      'paterno'          => 'Text',
      'materno'          => 'Text',
      'nombre'           => 'Text',
      'fecha_nacimiento' => 'Text',
      'genero'           => 'Text',
    );
  }
}
