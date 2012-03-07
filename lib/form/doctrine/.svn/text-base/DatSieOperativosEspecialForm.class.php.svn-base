<?php

/**
 * DatSieOperativos form.
 *
 * @package    proyecto
 * @subpackage form
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DatSieOperativosEspecialForm extends BaseDatSieOperativosForm
{
  public function configure()
  {
    $q = Doctrine_Core::getTable('ClaOperativo')->createQuery('c');
    $this->setWidget('operativo_id', new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaOperativo'), 'add_empty' => false,'query'=>$q)));

    $q = Doctrine_Core::getTable('ClaGestion')->createQuery()->orderBy('id_gestion DESC');
    $this->setWidget('gestion_id', new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ClaGestion'), 'add_empty' => false,'query'=>$q)));
    $this->setWidget('cod_ue_id', new sfWidgetFormInputText(array(),array('size'=>'10', 'maxlength'=>'8', 'onkeydown'=>'return validarNumero(event);')));

  }
}
