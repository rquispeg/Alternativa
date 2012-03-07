<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<select id="subcea_id" style="font-family: Arial;font-size: 12px;width:300px;">
    <option value="-999">[Seleccionar]</option>
    <?php foreach($subcentros as $subcentro): ?>
        <option value="<?php echo $subcentro->getSubCea(); ?>"><?php echo $subcentro->getSubCea();?></option>
    <?php endforeach; ?>
</select>
<?php echo jquery_ajax(array(
            'listener' => array(
                'selector' => '#subcea_id',
                'event' => 'change'),
            'url' => url_for('adultoshumanisticacrear/modalidad'),
            'success' =>  like_function("$('#modalidad').html(data)" , 'data'),
            'data' => "'subcea_id='+". jquery_get('this','val')."+'&ue_id='+document.getElementById('unidad_educativa').value+'&periodo_id='+document.getElementById('periodo_id').value",
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
