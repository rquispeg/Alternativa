4. Dependencia
<table width="100%" class="tabla" cellpadding="0" cellspacing="5">
    <tr>
        <td class="caption" width="100">
            Descripci&oacute;n
        </td>
        <td class="dato"  width="400">
            <?php echo $identificacion->getClaDependencia(); ?>
        </td>
        <td class="caption" width="90">
            Turno(s)
        </td>
        <td class="dato">
            <select id="turno_id" style="font-family: Arial;font-size: 12px;width: 200px;" name="datos[turno]">
                <option value="-999">[Seleccionar]</option>
                <?php foreach($turnos as $turno): ?>
                    <option value="<?php echo $turno->getIdTurno(); ?>"><?php echo $turno->getDescAbrv().'  '.$turno->getDescTurno(); ?></option>
                <?php endforeach; ?>
            </select>
            <?php //echo $director->getClaTurno(); ?>
        </td>
    </tr>
</table>
