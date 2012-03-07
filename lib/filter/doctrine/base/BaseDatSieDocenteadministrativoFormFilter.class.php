<?php

/**
 * DatSieDocenteadministrativo filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatSieDocenteadministrativoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre_completo'  => new sfWidgetFormFilterInput(),
      'fecha_nacimiento' => new sfWidgetFormFilterInput(),
      'genero'           => new sfWidgetFormFilterInput(),
      'formacion'        => new sfWidgetFormFilterInput(),
      'especialidad'     => new sfWidgetFormFilterInput(),
      'rda_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatRdaDocentesadministrativos'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre_completo'  => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento' => new sfValidatorPass(array('required' => false)),
      'genero'           => new sfValidatorPass(array('required' => false)),
      'formacion'        => new sfValidatorPass(array('required' => false)),
      'especialidad'     => new sfValidatorPass(array('required' => false)),
      'rda_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatRdaDocentesadministrativos'), 'column' => 'rda')),
    ));

    $this->widgetSchema->setNameFormat('dat_sie_docenteadministrativo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatSieDocenteadministrativo';
  }

  public function getFields()
  {
    return array(
      'ci'               => 'Text',
      'nombre_completo'  => 'Text',
      'fecha_nacimiento' => 'Text',
      'genero'           => 'Text',
      'formacion'        => 'Text',
      'especialidad'     => 'Text',
      'rda_id'           => 'ForeignKey',
    );
  }
}
