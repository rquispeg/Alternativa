<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<select id="nivel_id" style="font-family: Arial;font-size: 12px;width: 300px;" name="dat_rde_estudiante[nivel_id]">
    <option value="-999">[Seleccionar]</option>
    <?php foreach($niveles as $nivel): ?>
        <option value="<?php echo $nivel->getCicloId(); ?>"><?php echo $nivel->getCicloId().' - '.Doctrine::getTable('ClaCiclo')->findOneByIdCicloAndNivelId($nivel->getCicloId(),'16')->getDescCiclo(); ?></option>
    <?php endforeach; ?>
</select>
<?php echo jquery_ajax(array(
            'listener' => array(
                'selector' => '#nivel_id',
                'event' => 'change'),
            'url' => url_for('especialextemporanea/grado'),
            'success' =>  like_function("$('#grado').html(data)" , 'data'),
            'data' => "'nivel_id='+". jquery_get('this','val')."+'&ue_id='+document.getElementById('unidad_educativa').value",
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
