<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<select id="discapacidad_id" style="font-family: Arial;font-size: 12px;width:490px;" name="form[discapacidad_id]">
    <option value="-999">[Seleccionar]</option>
    <?php foreach($discapacidades as $discapacidad): ?>
        <option value="<?php echo $discapacidad->getDiscapacidadId(); ?>"><?php echo $discapacidad->getDiscapacidad(); ?></option>
    <?php endforeach; ?>
</select>

