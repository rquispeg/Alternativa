<?php

/**
 * TskMsgUnidadEducativa filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseTskMsgUnidadEducativaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'mensaje' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'mensaje' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tsk_msg_unidad_educativa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TskMsgUnidadEducativa';
  }

  public function getFields()
  {
    return array(
      'id'      => 'Number',
      'cod_ue'  => 'Text',
      'mensaje' => 'Text',
    );
  }
}
