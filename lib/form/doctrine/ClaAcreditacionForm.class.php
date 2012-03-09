<?php

/**
 * ClaAcreditacion form.
 *
 * @package    alternativa
 * @subpackage form
 * @author     Lic. Remberto Quispe Gutierrez
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ClaAcreditacionForm extends BaseClaAcreditacionForm
{
  public function configure()
  {
	unset($this['desc_acreditacion'],$this['cod_org_curr_id']);
	$q = Doctrine::getTable('DatRueAcreditacion')->getAcreditacion(sfContext::getInstance()->getUser()->getAttribute('USUARIO_ID'));
    $this->setWidget('acreditacion_id', new sfWidgetFormDoctrineChoice(array('model' => 'DatRueAcreditacion', 'add_empty' => false, 'query'=> $q)));
	/*
	 $acreditacion = Doctrine::getTable('ClaAcreditacion')->findAll();
     $this->setWidget('curso_oferta_id', new sfWidgetFormSelect(array('choices' => $acreditacion)));
	*/
  }
}
