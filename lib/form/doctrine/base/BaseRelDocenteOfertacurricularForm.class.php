<?php

/**
 * RelDocenteOfertacurricular form base class.
 *
 * @method RelDocenteOfertacurricular getObject() Returns the current form's model object
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRelDocenteOfertacurricularForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'docente_id'           => new sfWidgetFormInputHidden(),
      'gestion_id'           => new sfWidgetFormInputHidden(),
      'oferta_curricular_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'docente_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'docente_id', 'required' => false)),
      'gestion_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'gestion_id', 'required' => false)),
      'oferta_curricular_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'oferta_curricular_id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('rel_docente_ofertacurricular[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RelDocenteOfertacurricular';
  }

}
