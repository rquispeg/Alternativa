5. Grados de atenci&oacute;n<br />
<table width="100%" border="1" cellpadding="0" cellspacing="0">
    <tr>
        <td class="caption" style="text-align: center;" width="35%">
            Educaci&oacute;n Primaria de Adultos
        </td>
        <td class="caption" style="text-align: center;" width="40%">
            Educaci&oacute;n Secundaria de Adultos
        </td>
    </tr>
    <tr>
        <td>
            <table class="tabla" cellpadding="0" cellspacing="5" align="center">
            <tr>
                <?php if ($director): ?>
                    <?php $cursos = Doctrine::getTable('DatSieCurso')->getCursosHabilitados($director->getGestionId(),$director->getCodUeId(),$director->getOperativoId()); ?>
                <?php endif; ?>

                <?php if (in_array(array('nivel_id'=>'5','ciclo_id'=>'1','grado_id'=> '1'), $cursos)): ?>
                    <td class="dato" width="60">X</td>
                <?php else: ?>
                    <td class="dato" width="60">&nbsp;</td>
                <?php endif; ?>

                <?php if (in_array(array('nivel_id'=>'5','ciclo_id'=>'1','grado_id'=> '2'), $cursos)): ?>
                    <td class="dato" width="60">X</td>
                <?php else: ?>
                    <td class="dato" width="60">&nbsp;</td>
                <?php endif; ?>                   

                <?php if (in_array(array('nivel_id'=>'5','ciclo_id'=>'1','grado_id'=> '3'), $cursos)): ?>
                    <td class="dato" width="60">X</td>
                <?php else: ?>
                    <td class="dato" width="60">&nbsp;</td>
                <?php endif; ?>  
            </tr>
            <tr>
                <td style="font-size: 8px;text-align: center;">1&deg;</td>
                <td style="font-size: 8px;text-align: center;">2&deg;</td>
                <td style="font-size: 8px;text-align: center;">3&deg;</td>
            </tr>
		<td style="font-size: 8px;text-align: center;border-top-style: solid;border-top-width: 1px;">A. Basicos</td>
                <td style="font-size: 8px;text-align: center;border-top-style: solid;border-top-width: 1px;">A. Aplicados</td>
                <td style="font-size: 8px;text-align: center;border-top-style: solid;border-top-width: 1px;">A. Avanzados</td>
            </table>
        </td>
        <td>
            <table class="tabla" cellpadding="0" cellspacing="5" align="center">
            <tr>
                <?php if (in_array(array('nivel_id'=>'5','ciclo_id'=>'2','grado_id'=> '1'), $cursos)): ?>
                    <td class="dato" width="60">X</td>
                <?php else: ?>
                    <td class="dato" width="60">&nbsp;</td>
                <?php endif; ?>

                <?php if (in_array(array('nivel_id'=>'5','ciclo_id'=>'2','grado_id'=> '2'), $cursos)): ?>
                    <td class="dato" width="60">X</td>
                <?php else: ?>
                    <td class="dato" width="60">&nbsp;</td>
                <?php endif; ?>
            </tr>
            <tr>
                <td style="font-size: 8px;text-align: center;">1&deg;</td>
                <td style="font-size: 8px;text-align: center;">2&deg;</td>
            </tr>
            <tr>
                <td style="font-size: 8px;text-align: center;border-top-style: solid;border-top-width: 1px;">A. Comunes</td>
                <td style="font-size: 8px;text-align: center;border-top-style: solid;border-top-width: 1px;">A. Especializados</td>
            </tr>
            </table>
        </td>
    </tr>
</table>
