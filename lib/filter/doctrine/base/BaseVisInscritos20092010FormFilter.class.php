<?php

/**
 * VisInscritos20092010 filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVisInscritos20092010FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id'                                => new sfWidgetFormFilterInput(),
      'cod_ue_id'                                 => new sfWidgetFormFilterInput(),
      'nivel_id'                                  => new sfWidgetFormFilterInput(),
      'grado_id'                                  => new sfWidgetFormFilterInput(),
      'genero'                                    => new sfWidgetFormFilterInput(),
      'count(dat_rde_inscripcion.codigo_rude_id)' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'gestion_id'                                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue_id'                                 => new sfValidatorPass(array('required' => false)),
      'nivel_id'                                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'grado_id'                                  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'genero'                                    => new sfValidatorPass(array('required' => false)),
      'count(dat_rde_inscripcion.codigo_rude_id)' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('vis_inscritos20092010_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisInscritos20092010';
  }

  public function getFields()
  {
    return array(
      'id'                                        => 'Number',
      'gestion_id'                                => 'Number',
      'cod_ue_id'                                 => 'Text',
      'nivel_id'                                  => 'Number',
      'grado_id'                                  => 'Number',
      'genero'                                    => 'Text',
      'count(dat_rde_inscripcion.codigo_rude_id)' => 'Number',
    );
  }
}
