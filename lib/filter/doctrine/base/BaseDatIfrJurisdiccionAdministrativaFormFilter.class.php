<?php

/**
 * DatIfrJurisdiccionAdministrativa filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatIfrJurisdiccionAdministrativaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_cerrada_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaCerrada'), 'add_empty' => true)),
      'desc_creacion'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'cod_cerrada_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ClaCerrada'), 'column' => 'cod_cerrada')),
      'desc_creacion'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dat_ifr_jurisdiccion_administrativa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatIfrJurisdiccionAdministrativa';
  }

  public function getFields()
  {
    return array(
      'cod_distrito_id' => 'Number',
      'gestion_id'      => 'Number',
      'cod_le_id'       => 'Text',
      'cod_cerrada_id'  => 'ForeignKey',
      'desc_creacion'   => 'Text',
    );
  }
}
