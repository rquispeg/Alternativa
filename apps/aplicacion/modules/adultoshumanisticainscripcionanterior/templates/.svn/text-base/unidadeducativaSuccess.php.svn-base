<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryAutocomplete')?>
<?php use_helper('ysJQueryUIDialog')?>
<?php use_helper('ysJQueryUICore'); ?>
<?php ui_add_effects_support('blind')?>
<form method="POST" action="<?php echo url_for('adultoshumanisticainscripcionanterior/inscribirestudiante'); ?>" >
<?php if($estudiantes->Count()>0): ?>
<?php include_partial('adultoshumanisticainscripcionanterior/datosestudiantes',array('estudiantes'=>$estudiantes)); ?>
<?php endif; ?>
<?php include_partial('adultoshumanisticainscripcionanterior/datosunidadeducativa'); ?>
<input value="<?php echo $a['carnet_identidad']; ?>" name="dat_rde_estudiante[carnet_identidad]" id="dat_rde_estudiante_carnet_identidad" type="hidden">
<input value="<?php echo strtoupper($a['paterno']); ?>" name="dat_rde_estudiante[paterno]" id="dat_rde_estudiante_paterno" type="hidden">
<input value="<?php echo strtoupper($a['materno']); ?>" name="dat_rde_estudiante[materno]" id="dat_rde_estudiante_materno" type="hidden">
<input value="<?php echo strtoupper($a['nombre']); ?>" name="dat_rde_estudiante[nombre]" id="dat_rde_estudiante_nombre" type="hidden">
<input value="<?php echo $a['genero']; ?>" name="dat_rde_estudiante[genero]" id="dat_rde_estudiante_genero" type="hidden">
<input value="<?php echo $a['fecha_nacimiento']['year'].'-'.$a['fecha_nacimiento']['month'].'-'.$a['fecha_nacimiento']['day']; ?>" name="dat_rde_estudiante[fecha_nacimiento]" id="dat_rde_estudiante_fecha_nacimiento" type="hidden">
<input value="<?php echo $a['pais_nac_id']; ?>" name="dat_rde_estudiante[pais_nac_id]" id="dat_rde_estudiante_pais_nac_id" type="hidden">
<input value="<?php if ($a['pais_nac_id']==1) echo $a['departamento_nac_id']; else echo '0'; ?>" name="dat_rde_estudiante[departamento_nac_id]" id="dat_rde_estudiante_departamento_nac_id" type="hidden">
<input value="<?php if ($a['pais_nac_id']==1) echo $a['provincia_nac_id']; else echo '0'; ?>" name="dat_rde_estudiante[provincia_nac_id]" id="dat_rde_estudiante_provincia_nac_id" type="hidden">
<input value="<?php echo strtoupper($a['localidad_nac']); ?>" name="dat_rde_estudiante[localidad_nac]" value="" id="dat_rde_estudiante_localidad_nac" type="hidden">
<input value="<?php echo strtoupper($a['oficialia']); ?>" name="dat_rde_estudiante[oficialia]" value="" id="dat_rde_estudiante_oficialia" type="hidden">
<input value="<?php echo strtoupper($a['libro']); ?>" name="dat_rde_estudiante[libro]" value="" id="dat_rde_estudiante_libro" type="hidden">
<input value="<?php echo strtoupper($a['partida']); ?>" name="dat_rde_estudiante[partida]" value="" id="dat_rde_estudiante_partida" type="hidden">
<input value="<?php echo strtoupper($a['folio']); ?>" name="dat_rde_estudiante[folio]" value="" id="dat_rde_estudiante_folio" type="hidden">

<div style="margin-left: auto;margin-right: auto; text-align: center;padding-top: 15px;padding-bottom: 15px;">
        <input type="button" value="Terminar" id ="btnGrabar" onclick="enviar();" />
</div>
</form>

<script type="text/javascript">
/* <![CDATA[ */
function enviar()
{
  if(($('#unidad_educativa').val() == -999)||($('#nivel_id').val() == -999)||($('#grado_id').val() == -999)||($('#paralelo_id').val() == -999)||($('#turno_id').val() == -999)||($('#estado_id').val() == -999)){
    alert('Seleccionar todos los parametros para la inscripcion');
  }
  else{
    document.forms[0].submit();
  }
}
/* ]]> */
</script>