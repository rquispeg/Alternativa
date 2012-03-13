<?php

/**
 * VCtrRdeSerie filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVCtrRdeSerieFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_rude'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gestion_id8'             => new sfWidgetFormFilterInput(),
      'cod_ue_id8'              => new sfWidgetFormFilterInput(),
      'nivel_id8'               => new sfWidgetFormFilterInput(),
      'grado_id8'               => new sfWidgetFormFilterInput(),
      'desc_estado_matricula8'  => new sfWidgetFormFilterInput(),
      'gestion_id9'             => new sfWidgetFormFilterInput(),
      'cod_ue_id9'              => new sfWidgetFormFilterInput(),
      'nivel_id9'               => new sfWidgetFormFilterInput(),
      'grado_id9'               => new sfWidgetFormFilterInput(),
      'desc_estado_matricula9'  => new sfWidgetFormFilterInput(),
      'gestion_id10'            => new sfWidgetFormFilterInput(),
      'cod_ue_id10'             => new sfWidgetFormFilterInput(),
      'nivel_id10'              => new sfWidgetFormFilterInput(),
      'grado_id10'              => new sfWidgetFormFilterInput(),
      'desc_estado_matricula10' => new sfWidgetFormFilterInput(),
      'gestion_id11'            => new sfWidgetFormFilterInput(),
      'cod_ue_id11'             => new sfWidgetFormFilterInput(),
      'nivel_id11'              => new sfWidgetFormFilterInput(),
      'grado_id11'              => new sfWidgetFormFilterInput(),
      'desc_estado_matricula11' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'codigo_rude'             => new sfValidatorPass(array('required' => false)),
      'gestion_id8'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue_id8'              => new sfValidatorPass(array('required' => false)),
      'nivel_id8'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'grado_id8'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_estado_matricula8'  => new sfValidatorPass(array('required' => false)),
      'gestion_id9'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue_id9'              => new sfValidatorPass(array('required' => false)),
      'nivel_id9'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'grado_id9'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_estado_matricula9'  => new sfValidatorPass(array('required' => false)),
      'gestion_id10'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue_id10'             => new sfValidatorPass(array('required' => false)),
      'nivel_id10'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'grado_id10'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_estado_matricula10' => new sfValidatorPass(array('required' => false)),
      'gestion_id11'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue_id11'             => new sfValidatorPass(array('required' => false)),
      'nivel_id11'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'grado_id11'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desc_estado_matricula11' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('v_ctr_rde_serie_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VCtrRdeSerie';
  }

  public function getFields()
  {
    return array(
      'id'                      => 'Number',
      'codigo_rude'             => 'Text',
      'gestion_id8'             => 'Number',
      'cod_ue_id8'              => 'Text',
      'nivel_id8'               => 'Number',
      'grado_id8'               => 'Number',
      'desc_estado_matricula8'  => 'Text',
      'gestion_id9'             => 'Number',
      'cod_ue_id9'              => 'Text',
      'nivel_id9'               => 'Number',
      'grado_id9'               => 'Number',
      'desc_estado_matricula9'  => 'Text',
      'gestion_id10'            => 'Number',
      'cod_ue_id10'             => 'Text',
      'nivel_id10'              => 'Number',
      'grado_id10'              => 'Number',
      'desc_estado_matricula10' => 'Text',
      'gestion_id11'            => 'Number',
      'cod_ue_id11'             => 'Text',
      'nivel_id11'              => 'Number',
      'grado_id11'              => 'Number',
      'desc_estado_matricula11' => 'Text',
    );
  }
}
