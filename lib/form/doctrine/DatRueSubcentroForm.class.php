<?php

/**
 * DatRueSubcentro form.
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DatRueSubcentroForm extends BaseDatRueSubcentroForm
{
  public function configure()
  { 
	  unset($this['subcentro'],$this['cod_subcentro_le_id']);
	  $q = Doctrine::getTable('DatRueSubcentro')->getSubCentroEducacion(sfContext::getInstance()->getUser()->getAttribute('USUARIO_ID'));
      $this->setWidget('subcentro_id', new sfWidgetFormDoctrineChoice(array('model' => 'DatRueSubcentro', 'add_empty' => false, 'query'=> $q)));
  }
}
