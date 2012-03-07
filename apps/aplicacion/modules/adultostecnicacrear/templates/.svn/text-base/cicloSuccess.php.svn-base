<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<select id="grado_id" style="font-family: Arial;font-size: 12px;width: 150px;" name="form[grado_id]">
    <option value="-999">[Seleccionar]</option>
    <?php foreach($grados as $grado): ?>
        <option value="<?php echo $grado->getIdGrado(); ?>"><?php echo $grado->getIdGrado().' - '.$grado->getDescGrado(); ?></option>
    <?php endforeach; ?>
</select>
<?php echo jquery_ajax(array(
            'listener' => array(
                'selector' => '#grado_id',
                'event' => 'change'),
            'url' => url_for('adultostecnicacrear/especialidad'),
            'success' =>  like_function("$('#especialidad').html(data)" , 'data'),
            'data' => "'grado_id='+". jquery_get('this','val')."+'&ue_id='+document.getElementById('unidad_educativa').value+'&periodo_id='+document.getElementById('periodo_id').value+'&subcea_id='+document.getElementById('subcea_id').value+'&modalidad_id='+document.getElementById('modalidad_id').value+'&nivel_id='+document.getElementById('nivel_id').value",
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
