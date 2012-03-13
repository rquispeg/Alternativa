<?php

/**
 * ClaParentesco filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseClaParentescoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'desc_parentesco' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'desc_parentesco' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cla_parentesco_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ClaParentesco';
  }

  public function getFields()
  {
    return array(
      'id_parentesco'   => 'Number',
      'desc_parentesco' => 'Text',
    );
  }
}
