<?php

class DatUsuPermisoTable extends Doctrine_Table
{
    /*
     * Author ing. Ivan Callapa Quiróz
     * method opciones del menu superior
     * params $rol_id     
     */
    public function getMenu($rol_id)
    {
        $q = $this->createQuery('c')
        ->leftJoin('c.RelRolPermiso d')
        ->where('d.rol_id = ? and c.estado_id = 0 and c.permiso_id = 0 and c.id <>0 and c.sistema_id = 3',$rol_id);
        return $q->execute();
    }
    /*
     * Author ing. Ivan Callapa Quiróz
     * method opciones del submenu superior
     * params $rol_id     
     */
    public function getSubMenu($rol,$menu) {
    	$q = $this->createQuery('d')
        ->Where('d.permiso_id = ?',array($menu))
        ->andWhere('d.id IN (SELECT g.permiso_id FROM RelRolPermiso g WHERE g.rol_id = ?)',array($rol))
        ->andWhere('d.estado_id = 0');
        return $q->execute();
    }
}