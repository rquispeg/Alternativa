<?php

/**
 * ErrOpeArchivos filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseErrOpeArchivosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_ue' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'query'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'err0'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'err1'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'cod_ue' => new sfValidatorPass(array('required' => false)),
      'query'  => new sfValidatorPass(array('required' => false)),
      'err0'   => new sfValidatorPass(array('required' => false)),
      'err1'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('err_ope_archivos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ErrOpeArchivos';
  }

  public function getFields()
  {
    return array(
      'id'     => 'Number',
      'cod_ue' => 'Text',
      'query'  => 'Text',
      'err0'   => 'Text',
      'err1'   => 'Text',
    );
  }
}
