<?php

/**
 * DatSieDistrito form base class.
 *
 * @method DatSieDistrito getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatSieDistritoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_distrito'       => new sfWidgetFormInputHidden(),
      'gestion_id'         => new sfWidgetFormInputHidden(),
      'distrito'           => new sfWidgetFormInputText(),
      'ci_director'        => new sfWidgetFormInputText(),
      'director_distrital' => new sfWidgetFormInputText(),
      'departamento_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDepartamento'), 'add_empty' => false)),
      'cod_planillas'      => new sfWidgetFormInputText(),
      'tipo'               => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_distrito'       => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'cod_distrito', 'required' => false)),
      'gestion_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'distrito'           => new sfValidatorString(array('max_length' => 45)),
      'ci_director'        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'director_distrital' => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'departamento_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ClaDepartamento'))),
      'cod_planillas'      => new sfValidatorInteger(),
      'tipo'               => new sfValidatorString(array('max_length' => 2)),
    ));

    $this->widgetSchema->setNameFormat('dat_sie_distrito[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatSieDistrito';
  }

}
