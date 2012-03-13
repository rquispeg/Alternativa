<?php

/**
 * DatSieDistrito filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatSieDistritoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'distrito'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ci_director'        => new sfWidgetFormFilterInput(),
      'director_distrital' => new sfWidgetFormFilterInput(),
      'departamento_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDepartamento'), 'add_empty' => true)),
      'cod_planillas'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'distrito'           => new sfValidatorPass(array('required' => false)),
      'ci_director'        => new sfValidatorPass(array('required' => false)),
      'director_distrital' => new sfValidatorPass(array('required' => false)),
      'departamento_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaDepartamento'), 'column' => 'id_departamento')),
      'cod_planillas'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo'               => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_sie_distrito_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatSieDistrito';
  }

  public function getFields()
  {
    return array(
      'cod_distrito'       => 'Number',
      'gestion_id'         => 'Number',
      'distrito'           => 'Text',
      'ci_director'        => 'Text',
      'director_distrital' => 'Text',
      'departamento_id'    => 'ForeignKey',
      'cod_planillas'      => 'Number',
      'tipo'               => 'Text',
    );
  }
}
