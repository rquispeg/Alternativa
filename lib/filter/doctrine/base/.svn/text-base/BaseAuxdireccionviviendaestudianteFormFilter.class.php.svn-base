<?php

/**
 * Auxdireccionviviendaestudiante filter form base class.
 *
 * @package    alternativa
 * @subpackage filter
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAuxdireccionviviendaestudianteFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'dirdep'  => new sfWidgetFormFilterInput(),
      'dirpro'  => new sfWidgetFormFilterInput(),
      'dirsec'  => new sfWidgetFormFilterInput(),
      'dircan'  => new sfWidgetFormFilterInput(),
      'dirloc'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'dirdep'  => new sfValidatorPass(array('required' => false)),
      'dirpro'  => new sfValidatorPass(array('required' => false)),
      'dirsec'  => new sfValidatorPass(array('required' => false)),
      'dircan'  => new sfValidatorPass(array('required' => false)),
      'dirloc'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('auxdireccionviviendaestudiante_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Auxdireccionviviendaestudiante';
  }

  public function getFields()
  {
    return array(
      'codue'   => 'Text',
      'codrude' => 'Text',
      'dirdep'  => 'Text',
      'dirpro'  => 'Text',
      'dirsec'  => 'Text',
      'dircan'  => 'Text',
      'dirloc'  => 'Text',
    );
  }
}
