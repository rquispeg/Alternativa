<?php

/**
 * RelDocenteOfertacurricular filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRelDocenteOfertacurricularFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('rel_docente_ofertacurricular_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RelDocenteOfertacurricular';
  }

  public function getFields()
  {
    return array(
      'docente_id'           => 'Number',
      'gestion_id'           => 'Number',
      'oferta_curricular_id' => 'Number',
    );
  }
}
