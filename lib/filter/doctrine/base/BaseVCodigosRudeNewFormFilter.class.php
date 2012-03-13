<?php

/**
 * VCodigosRudeNew filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVCodigosRudeNewFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_rude'     => new sfWidgetFormFilterInput(),
      'codigo_rude_new' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'codigo_rude'     => new sfValidatorPass(array('required' => false)),
      'codigo_rude_new' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('v_codigos_rude_new_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VCodigosRudeNew';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'codigo_rude'     => 'Text',
      'codigo_rude_new' => 'Text',
    );
  }
}
