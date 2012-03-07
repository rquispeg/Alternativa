<?php if($sf_user->hasFlash('error_ue')): ?>
    <?php include_partial('inicio/mensaje',array('fondo' => '#F00','letra' => '#fff','mensaje' =>$sf_user->getFlash('error_ue'),'icono' => '/images/Ou.png' )); ?>
<?php else: ?>
<?php include_partial('estudiantealtddjj/list', array('datos' => $pager->getResults(),'pager'=>$pager,'link'=>'estudiantealtddjj/listaestudiantes','ue'=>$ue,'gestion'=>$gestion)) ?>
<div style="padding-bottom: 20px;text-align: center;padding-top: 15px;">
    <a href="<?php echo url_for('estudiantealtddjj/reporteunidad?ue='.$ue.'&gestion='.$gestion); ?>"
       class="enlaceboton" target="_blank"><?php echo 'Imprimir Form. de Declaracion Jurada'; ?></a>
    <a href="<?php echo url_for('estudiantealtddjj/reportelista?ue='.$ue.'&gestion='.$gestion); ?>"
       class="enlaceboton" target="_blank"><?php echo 'Lista de estudiantes'; ?></a>
</div>
<?php endif; ?>
