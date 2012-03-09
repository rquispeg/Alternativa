<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<select id="grado_id" style="font-family: Arial;font-size: 12px;width: 200px;" name="form[grado_id]">
    <option value="-999">[Seleccionar]</option>
    <?php foreach($ciclos as $ciclo): ?>
        <option value="<?php echo $ciclo->getIdGrado(); ?>"><?php echo $ciclo->getIdGrado().' - '.$ciclo->getDescGrado(); ?></option>
    <?php endforeach; ?>
</select>

