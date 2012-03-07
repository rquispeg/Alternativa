<?php

class ClaCicloTable extends Doctrine_Table
{
    public function getNivelEspecial($gestion) {
        if ($gestion>2010){
            $q = $this->createQuery('c')
            ->where('c.nivel_id = 16) ');
        }
        else{
            $q = $this->createQuery('c')
            ->where('c.nivel_id = 6) ');
        }
        return $q->execute();
        
    }
}