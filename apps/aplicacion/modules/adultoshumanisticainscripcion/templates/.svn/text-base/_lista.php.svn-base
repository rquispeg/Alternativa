<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryAutocomplete')?>
<?php use_helper('ysJQueryUIDialog')?>
<?php use_helper('ysJQueryUICore'); ?>
<div id="result">
<div style="font-size: 9px;">
<div class="cuerpo-titulo">INSCRIPCIONES - EDUCACI&Oacute;N HUMAN&Iacute;STICA</div>
<div class="cuerpo-subtitulo">Inscripci&oacute;n de estudiantes al Semestre</div><br />
<form id="form2" action="<?php echo url_for('adultoshumanisticainscripcion/inscribir') ?>" >
<input type="hidden" value="<?php echo $ue_id; ?>" name="ue_id" />
<input type="hidden" value="<?php echo $subcea_id; ?>" name="subcea_id" />
<input type="hidden" value="<?php echo $modalidad_id; ?>" name="modalidad_id" />
<input type="hidden" value="<?php echo $nivel_id; ?>" name="nivel_id" />
<input type="hidden" value="<?php echo $ciclo_id; ?>" name="ciclo_id" />
<input type="hidden" value="<?php echo $paralelo_id; ?>" name="paralelo_id" />
<input type="hidden" value="<?php echo $turno_id; ?>" name="turno_id" />
<?php ui_grid_init('<b>LISTA DE ESTUDIANTES</b>') ?>
    <?php ui_grid_head_init() ?>
      <?php ui_grid_th('') ?>
      <?php ui_grid_th('RUDEALT') ?>
      <?php ui_grid_th('Carnet Identidad') ?>
      <?php ui_grid_th('Paterno') ?>
      <?php ui_grid_th('Materno') ?>
      <?php ui_grid_th('Nombre') ?>
      <?php ui_grid_th('Fecha de Nacimiento') ?>
    <?php ui_grid_head_end() ?>
    <?php   ui_grid_body_init() ?>
      <?php foreach ($datos as $dato): ?>
        <?php     ui_grid_tr_init() ?>    
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <input name="ids[]" class="sf_admin_batch_checkbox" value="<?php echo $dato->DatRdeEstudiante->getCodigoRude(); ?>" type="checkbox">
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo $dato->DatRdeEstudiante->getCodigoRude(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo $dato->DatRdeEstudiante->getCarnetIdentidad(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo $dato->DatRdeEstudiante->getPaterno() ;?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo $dato->DatRdeEstudiante->getMaterno(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo $dato->DatRdeEstudiante->getNombre(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:center;"') ?>
                <?php echo $dato->DatRdeEstudiante->getFechaNacimiento(); ?>
            <?php     ui_grid_td_end() ?>
        <?php     ui_grid_tr_end() ?>
      <?php endforeach; ?>
    <?php   ui_grid_body_end() ?>
    <?php   ui_grid_foot_init() ?>
        <?php if ($pager->haveToPaginate()): ?>
              <?php include_partial('adultoshumanisticainscripcion/pagination', array('pager' => $pager,'url'=>$link,'ue_id'=>$ue_id,'subcea_id'=>$subcea_id,'modalidad_id'=>$modalidad_id,'nivel_id'=>$nivel_id,'ciclo_id'=>$ciclo_id,'paralelo_id'=>$paralelo_id,'turno_id'=>$turno_id)) ?>
        <?php endif; ?>
        <strong><?php echo $pager->getNbResults() ?></strong> Resultados
        <?php if ($pager->haveToPaginate()): ?>
            - p&aacute;gina <strong><?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></strong>
        <?php endif; ?>        
    <?php   ui_grid_foot_end() ?>
  <?php ui_grid_end() ?>
  <div style="margin-left: auto;margin-right: auto; text-align: center;padding-top: 15px;padding-bottom: 15px;">        
       <input type="submit" value="Inscribir a Estudiantes" id ="btnGrabar"  />
       <br/>        
  </div>
</form>          
</div>
</div>    
