<?php

/**
 * DatTraTramitador filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatTraTramitadorFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'paterno'           => new sfWidgetFormFilterInput(),
      'materno'           => new sfWidgetFormFilterInput(),
      'nombre'            => new sfWidgetFormFilterInput(),
      'telefono_ref'      => new sfWidgetFormFilterInput(),
      'correo_eletronico' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'paterno'           => new sfValidatorPass(array('required' => false)),
      'materno'           => new sfValidatorPass(array('required' => false)),
      'nombre'            => new sfValidatorPass(array('required' => false)),
      'telefono_ref'      => new sfValidatorPass(array('required' => false)),
      'correo_eletronico' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_tra_tramitador_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatTraTramitador';
  }

  public function getFields()
  {
    return array(
      'ci'                => 'Number',
      'paterno'           => 'Text',
      'materno'           => 'Text',
      'nombre'            => 'Text',
      'telefono_ref'      => 'Text',
      'correo_eletronico' => 'Text',
    );
  }
}
