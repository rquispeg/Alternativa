<?php

/**
 * TmpDiplomas filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTmpDiplomasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_ue' => new sfWidgetFormFilterInput(),
      'numero'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'codigo_ue' => new sfValidatorPass(array('required' => false)),
      'numero'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('tmp_diplomas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TmpDiplomas';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'codigo_ue' => 'Text',
      'numero'    => 'Number',
    );
  }
}
