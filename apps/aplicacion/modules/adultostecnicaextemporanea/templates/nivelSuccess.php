<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<select id="nivel_id" style="font-family: Arial;font-size: 12px;width: 180px;" name="dat_rde_estudiante[nivel_id]">
    <option value="-999">[Seleccionar]</option>
    <?php foreach($ciclos as $ciclo): ?>
        <option value="<?php echo $ciclo->getCicloId(); ?>"><?php echo $ciclo->getCicloId().' - '.Doctrine::getTable('ClaCiclo')->find(array('15',$ciclo->getCicloId()))->getDescCiclo(); ?></option>
    <?php endforeach; ?>
</select>
<?php echo jquery_ajax(array(
            'listener' => array(
                'selector' => '#nivel_id',
                'event' => 'change'),
            'url' => url_for('adultostecnicaextemporanea/ciclo'),
            'success' =>  like_function("$('#ciclo').html(data)" , 'data'),
            'data' => "'nivel_id='+". jquery_get('this','val')."+'&ue_id='+document.getElementById('unidad_educativa').value+'&periodo_id='+document.getElementById('periodo_id').value+'&subcea_id='+document.getElementById('subcea_id').value+'&modalidad_id='+document.getElementById('modalidad_id').value",
            'type' => 'POST'));
?>

<?php
    echo jquery_ajax_event(
           '#unidad_educativa',
           'ajaxSuccess',
           like_function('$("#imagen").css("display","none")', 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#unidad_educativa',
           'ajaxStart',
           like_function('$("#imagen").css("display","block")', 'event,request,settings'));
?>
