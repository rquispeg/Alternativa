<?php
/**
* Crear la clase.
*
* @package    Proyecto
* @subpackage 
* @author     Ing. Ivan Callapa Quiroz
* @version    SVN: $Id: controlSistema.class.php 23810 2010-03-12 11:07:44Z  $
*/
class controlSistema
{
    var $control;

    public function __construct($abrMenu,$usuario)
    {
        $this->abrMenu = $abrMenu;
        $this->usuario = $usuario;
    }

    public function control()
    {
        if ($this->usuario){
        ///Buscar el grupo al que pertenece el usuario
        $grupo = Doctrine::getTable('RelUsuarioGrupo')->findOneByUsuarioId($this->usuario)->getGrupoId();
        $rol = Doctrine::getTable('DatUsuGrupo')->find($grupo)->getRolId();
        $menu = doctrine::getTable('DatUsuPermiso')->findOneByAbrMenu($this->abrMenu);
        if ($menu){
        if (Doctrine::getTable('RelRolPermiso')->find(array($rol,$menu->getId())))
        {
            if ($menu->getEstadoId()==0)
                return true;
            else
                return false;
        }else {
            return false;
        }
        }
        else
        return false;}
        else
        return false;
    }
}
 
 ?>