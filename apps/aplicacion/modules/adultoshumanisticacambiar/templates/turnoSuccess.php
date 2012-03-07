<select id="turno_id" style="font-family: Arial;font-size: 12px;" name="form[turno_id]">
    <option value="-999">[Seleccionar]</option>
    <?php foreach($turnos as $turno): ?>
    <option value="<?php echo $turno->getTurnoId() ?>"><?php echo Doctrine::getTable('ClaTurno')->find($turno->getTurnoId())->getDescAbrv(); ?></option>
    <?php endforeach;?>
</select>