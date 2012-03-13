<?php

/**
 * RelTraSeguimientoRequisito filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseRelTraSeguimientoRequisitoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'valor'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'valor'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('rel_tra_seguimiento_requisito_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RelTraSeguimientoRequisito';
  }

  public function getFields()
  {
    return array(
      'seguimiento_id' => 'Number',
      'gestion_id'     => 'Number',
      'requisito_id'   => 'Number',
      'valor'          => 'Text',
    );
  }
}
