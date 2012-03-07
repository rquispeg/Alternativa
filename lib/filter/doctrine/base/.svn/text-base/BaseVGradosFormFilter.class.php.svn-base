<?php

/**
 * VGrados filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVGradosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gestion_id' => new sfWidgetFormFilterInput(),
      'cod_ue_id'  => new sfWidgetFormFilterInput(),
      'ini.'       => new sfWidgetFormFilterInput(),
      '1o ini.'    => new sfWidgetFormFilterInput(),
      '2o ini.'    => new sfWidgetFormFilterInput(),
      '1o pri.'    => new sfWidgetFormFilterInput(),
      '2o pri.'    => new sfWidgetFormFilterInput(),
      '3o pri.'    => new sfWidgetFormFilterInput(),
      '4o pri.'    => new sfWidgetFormFilterInput(),
      '5o pri.'    => new sfWidgetFormFilterInput(),
      '6o pri.'    => new sfWidgetFormFilterInput(),
      '1o sec.'    => new sfWidgetFormFilterInput(),
      '2o sec.'    => new sfWidgetFormFilterInput(),
      '3o sec.'    => new sfWidgetFormFilterInput(),
      '4o sec.'    => new sfWidgetFormFilterInput(),
      '5o sec.'    => new sfWidgetFormFilterInput(),
      '6o sec.'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'gestion_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_ue_id'  => new sfValidatorPass(array('required' => false)),
      'ini.'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      '1o ini.'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      '2o ini.'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      '1o pri.'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      '2o pri.'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      '3o pri.'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      '4o pri.'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      '5o pri.'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      '6o pri.'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      '1o sec.'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      '2o sec.'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      '3o sec.'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      '4o sec.'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      '5o sec.'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      '6o sec.'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('v_grados_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VGrados';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'gestion_id' => 'Number',
      'cod_ue_id'  => 'Text',
      'ini.'       => 'Number',
      '1o ini.'    => 'Number',
      '2o ini.'    => 'Number',
      '1o pri.'    => 'Number',
      '2o pri.'    => 'Number',
      '3o pri.'    => 'Number',
      '4o pri.'    => 'Number',
      '5o pri.'    => 'Number',
      '6o pri.'    => 'Number',
      '1o sec.'    => 'Number',
      '2o sec.'    => 'Number',
      '3o sec.'    => 'Number',
      '4o sec.'    => 'Number',
      '5o sec.'    => 'Number',
      '6o sec.'    => 'Number',
    );
  }
}
