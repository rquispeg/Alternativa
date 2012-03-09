<?php

/**
 * principal components.
 *
 * @package    sieweb
 * @subpackage Componente para generar el menu
 * @author     Ing. Ivan Callapa Quiroz
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class inicioComponents extends sfComponents
{
  /**
  * Componente para generaci�n del men�
  *
  * @param none
  */  
  public function executeMenu()
  {
      
      $this->menus = Doctrine::getTable('DatUsuPermiso')->getMenu($this->getUser()->getAttribute('ROL'));
  }

  /**
  * Componente para la busqueda de acuerdo a la unidad educativa y la gestiï¿½n
  *
  * @param none
  */
  public function executeBuscarue(){
        $this->operativo = new DatSieOperativosFormAlt();
  }
  
  /**
  * Componenete para la Busqueda de Subcentros 
  */
  public function executeBuscarsubcentros(){
        $this->subcentros = new DatRueSubcentroForm();
  }
  
  /**
  * Componenete para la Busqueda de Acreditaciones que contiene el Centro de Educación Alterntiva 
  */
  public function executeListadoacreditaciones(){
        $this->acreditaciones = new ClaAcreditacionForm();
  }

  /**
  * Componente para la busqueda de acuerdo a la unidad educativa y la gestiï¿½n
  *
  * @param none
  */
  public function executeBuscarueespecial(){
        $this->operativo = new DatSieOperativosEspecialForm();
  }

  /**
  * Componente para la busqueda de acuerdo a la unidad educativa, gestiï¿½n y el operativo
  *
  * @param none
  */
  public function executeBuscaruesinoperativo(){
        $this->operativo = new DatSieOperativosFormAlt();
  }

  public function executeListadoceas(){
        $this->ceas = new DatAltCursoofertaForm();
  }

  /**
  * Componente para la busqueda de acuerdo a la unidad educativa, gestiï¿½n y el operativo
  *
  * @param none
  */
  public function executeBuscaruesinoperativoespecial(){
        $this->operativo = new DatSieOperativosEspecialForm();
  }
  
  public function executeBuscarudealt()
  {
     $this->periodos = Doctrine::getTable('ClaPeriodo')->findAll();
  }

  /**
  * Compnente con busqueda de acreditacion, mas el rude
  *
  */
  public function executeBuscarudealtacreditacion()
  {
     $this->acreditaciones = new ClaAcreditacionForm();
  }
  
  public function executeBuscarude()
  {

  }

  /**
  * Componente para la busqueda del estudiante por Paterno, Materno y Nombre
  *
  * @param none
  */
  public function executeBuscaestudiante()
  {
      //$this->operativo = new DatSieOperativosForm();
  }
  
  
}
