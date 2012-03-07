<select id="turno_id" style="font-family: Arial;font-size: 12px;">
    <option value="-999">[----]</option>
    <?php foreach($turnos as $turno): ?>
    <option value="<?php echo $turno->getTurnoId() ?>"><?php echo Doctrine::getTable('ClaTurno')->find($turno->getTurnoId())->getDescAbrv(); ?></option>
    <?php endforeach;?>
</select>
