<?php

/**
 * RelDocenteItems filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRelDocenteItemsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('rel_docente_items_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RelDocenteItems';
  }

  public function getFields()
  {
    return array(
      'gestion_id'    => 'Number',
      'ci_docente_id' => 'Number',
      'cod_ue_id'     => 'Text',
      'periodo_id'    => 'Number',
      'operativo_id'  => 'Number',
      'sub_cea_id'    => 'Number',
      'servicio'      => 'Text',
      'item_id'       => 'Text',
    );
  }
}
