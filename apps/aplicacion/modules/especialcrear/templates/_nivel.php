<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<select id="nivel_id" style="font-family: Arial;font-size: 12px;width: 300px;">
    <option value="-999">[Seleccionar]</option>
    <?php foreach($niveles as $nivel): ?>
        <option value="<?php echo $nivel->getIdCiclo(); ?>"><?php echo $nivel->getIdCiclo().' - '.$nivel->getDescCiclo(); ?></option>
    <?php endforeach; ?>
</select>
<?php echo jquery_ajax(array(
            'listener' => array(
                'selector' => '#nivel_id',
                'event' => 'change'),
            'url' => url_for('especialcrear/grado'),
            'success' =>  like_function("$('#grado').html(data)" , 'data'),
            'data' => "'nivel_id='+". jquery_get('this','val'),
            'type' => 'POST'));
?>

<?php
    echo jquery_ajax_event(
           '#nivel_id',
           'ajaxSuccess',
           like_function('$("#imagen").css("display","none")', 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#nivel_id',
           'ajaxStart',
           like_function('$("#imagen").css("display","block")', 'event,request,settings'));
?>
