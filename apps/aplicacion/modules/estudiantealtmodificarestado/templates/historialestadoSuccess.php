<?php use_helper('ysJQueryRevolutions'); ?>
<?php use_helper('ysJQueryUICore'); ?>
<?php use_helper('ysJQueryUIDialog'); ?>
<?php use_helper('ysUtil'); ?>
<?php use_helper('Date') ?>

        <?php if ($historialestados->Count()>0): ?>
                <?php $estudiante = Doctrine::getTable('DatRdeEstudiante')->find($historialestados[0]['codigo_rude_id']); ?>
                <?php ui_grid_init("Estudiante: ".$estudiante->getNombre().", ".$estudiante->getPaterno()." ".$estudiante->getMaterno()."  (".implode('/',array_reverse(explode('-',$estudiante->getFechaNacimiento()))).")") ?>
        <?php else: ?>
                <?php ui_grid_init('Estudiante sin Inscripci&oacute;n') ?>
        <?php endif; ?>

        <?php	  ui_grid_head_init() ?>
          <?php     ui_grid_th('GESTION') ?>
          <?php     ui_grid_th('NIVEL') ?>
          <?php     ui_grid_th('GRADO') ?>
          <?php     ui_grid_th('PAR.') ?>
          <?php     ui_grid_th('RUE') ?>
          <?php     ui_grid_th('UNIDAD EDUCATIVA') ?>
          <?php     ui_grid_th('ESTADO ACTUAL') ?>
          <?php     ui_grid_th('CAMBIAR DE ESTADO') ?>
          <?php     ui_grid_th('GRABAR') ?>
        <?php	  ui_grid_head_end() ?>

        <?php   ui_grid_body_init() ?>
          <?php $suma = 0;?>
          <?php foreach ($historialestados as $i => $ins): ?>
            <?php     ui_grid_tr_init() ?>
                <?php     ui_grid_td_init('style="text-align:center;"') ?>
                    <?php echo $ins->getGestionId(); ?>
                <?php     ui_grid_td_end() ?>
                <?php     ui_grid_td_init('style="text-align:left;"') ?>
                    <?php echo Doctrine::getTable('ClaNivel')->find($ins->getNivelId())->getDescNivel(); ?>
                <?php     ui_grid_td_end() ?>
                <?php     ui_grid_td_init('style="text-align:center;"') ?>
                    <?php echo $ins->getGradoId()."&deg;"; ?>
                <?php     ui_grid_td_end() ?>
                <?php     ui_grid_td_init('style="text-align:center;"') ?>
                    <?php echo $ins->getParalelo(); ?>
                <?php     ui_grid_td_end() ?>
                <?php     ui_grid_td_init('style="text-align:left;"') ?>
                    <?php echo $ins->getCodUeId(); ?>
                <?php     ui_grid_td_end() ?>
                <?php     ui_grid_td_init('style="text-align:left;"') ?>                    
                    <?php echo Doctrine::getTable('DatRueUnidadEducativa')->find($ins->getCodUeId())->getDescUe(); ?>
                <?php     ui_grid_td_end() ?>
                <?php     ui_grid_td_init('style="text-align:left;"') ?>
                    <?php echo Doctrine::getTable('ClaEstadoMatricula')->find($ins->getEstadoMatriculaFinId())->getDescEstadoMatricula(); ?>
                <?php     ui_grid_td_end() ?>
                <?php     ui_grid_td_init('style="text-align:center;"') ?>
                    <select id="mat_<?php echo $i;?>">
                        <?php foreach (Doctrine::getTable('ClaEstadoMatricula')->getListaEstadoMatricula() as $value): ?>
                            <?php if ($value->getIdEstadoMatricula()!=$ins->getEstadoMatriculaFinId()): ?>
                            <?php if (($sf_user->getAttribute('GESTION')!=$ins->getGestionId())&&($value->getIdEstadoMatricula()==4)): ?>

                            <?php else: ?>
                                <option value="<?php echo $value->getIdEstadoMatricula(); ?>"><?php echo $value->getDescEstadoMatricula(); ?></option>
                            <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                <?php     ui_grid_td_end() ?>
                <?php     ui_grid_td_init('style="text-align:center;"') ?>
                    <a href="#" onclick="enviar(<?php echo $ins->getGestionId(); ?>,<?php echo $i; ?>,<?php echo $ins->getIdInscripcion(); ?>);">
                        <img src="/images/save.gif" style="border-width: 0px;" title="Cambiar de estado" alt="Cambiar de estado" />
                    </a>
                <?php     ui_grid_td_end() ?>
                <?php $suma = $suma+1;?> 
            <?php     ui_grid_tr_end() ?>
          <?php endforeach; ?>
        <?php   ui_grid_body_end() ?>

        <?php   ui_grid_foot_init() ?>
        	<?php if ($suma>0): ?>
        		<div class="ui-grid-results" style="font-weight: bold;text-align: center;color:#FFFFFF;font-size: 13Px;">Inscripciones encontradas: <?php echo $suma ?></div>
        	<?php endif; ?>	
        <?php   ui_grid_foot_end() ?>
      <?php ui_grid_end() ?>

<script type="text/javascript">
function enviar(gestion,i,id){
    var datos ="<?php echo $estudiante->getNombre()." ".$estudiante->getPaterno()." ".$estudiante->getMaterno()." (".implode('/',array_reverse(explode('-',$estudiante->getFechaNacimiento()))).")"; ?>"
    var parametro = "<?php echo url_for('estudiantealtmodificarestado/cambiarestado') ?>"+'?id='+id+'&gestion='+gestion+'&mat='+document.getElementById('mat_'+i).options[document.getElementById('mat_'+i).selectedIndex].value;
    
    datos = "Del estudiante: \n\n\t"+datos+"\n\nsu estado fin se modificara a "+document.getElementById('mat_'+i).options[document.getElementById('mat_'+i).selectedIndex].text+"\n";
    if (confirm(datos)){
        location.href = parametro;
    }
    
}
</script>