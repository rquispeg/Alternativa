<?php

/**
 * DatIfrGestionUe filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseDatIfrGestionUeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'direccion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatIfrDireccionGeografica'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'direccion_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DatIfrDireccionGeografica'), 'column' => 'id_direccion')),
    ));

    $this->widgetSchema->setNameFormat('dat_ifr_gestion_ue_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DatIfrGestionUe';
  }

  public function getFields()
  {
    return array(
      'cod_ue_id'    => 'Text',
      'sub_cea_id'   => 'Number',
      'gestion_id'   => 'Number',
      'operativo_id' => 'Number',
      'periodo_id'   => 'Number',
      'direccion_id' => 'ForeignKey',
    );
  }
}
