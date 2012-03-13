<?php

/**
 * SeqSlnCursoOferta filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSeqSlnCursoOfertaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_curso_oferta' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id_curso_oferta' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('seq_sln_curso_oferta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SeqSlnCursoOferta';
  }

  public function getFields()
  {
    return array(
      'gestion_id'      => 'Number',
      'cod_ue_id'       => 'Text',
      'id_curso_oferta' => 'Number',
    );
  }
}
