<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<?php if($departamentos->Count()==0): ?>
    <select name="dat_rde_estudiante[departamento_nac_id]" id="dat_rde_estudiante_departamento_nac_id" style="font-family: Arial;font-size: 12px;">
        <option value="0">NINGUNO</option>
    </select>
<?php else: ?>
    <select name="dat_rde_estudiante[departamento_nac_id]" id="dat_rde_estudiante_departamento_nac_id" style="font-family: Arial;font-size: 12px;">
        <option value="-999">[Seleccionar]</option>
        <?php foreach($departamentos as $departamento): ?>
        <option value="<?php echo $departamento->getIdDepartamento() ?>"><?php echo $departamento->getDescDepartamento(); ?></option>
        <?php endforeach;?>
    </select>
    <?php echo jquery_ajax(array(
            'listener' => array(
                'selector' => '#dat_rde_estudiante_departamento_nac_id',
                'event' => 'change'),
            'url' => url_for('ins_sin_rude/provincia'),
            'success' =>  like_function("$('#provincia').html(data)" , 'data'),
            'data' => "'departamento_id=' + ". jquery_get('this','val'),
            'type' => 'POST'));
            ?>

            <?php
                echo jquery_ajax_event(
                       '#dat_rde_estudiante_departamento_nac_id',
                       'ajaxSuccess',
                       like_function('$("#imagen").css("display","none")', 'event,request,settings'));
            ?>
            <?php
                echo jquery_ajax_event(
                       '#dat_rde_estudiante_departamento_nac_id',
                       'ajaxStart',
                       like_function('$("#imagen").css("display","block")', 'event,request,settings'));
            ?>
<?php endif; ?>