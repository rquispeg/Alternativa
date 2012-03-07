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

                <?php if (in_array(array('nivel_id'=>'15','ciclo_id'=>'1','grado_id'=> '1'), $cursos)): ?>
                    <td class="dato" width="80">X</td>
                <?php else: ?>
                    <td class="dato" width="80">&nbsp;</td>
                <?php endif; ?>

                <?php if (in_array(array('nivel_id'=>'15','ciclo_id'=>'1','grado_id'=> '2'), $cursos)): ?>
                    <td class="dato" width="80">X</td>
                <?php else: ?>
                    <td class="dato" width="80">&nbsp;</td>
                <?php endif; ?>                   
  
            </tr>
            <tr>
                <td style="font-size: 8px;text-align: center;">1&deg;</td>
                <td style="font-size: 8px;text-align: center;">2&deg;</td>
            </tr>
		<td style="font-size: 8px;text-align: center;border-top-style: solid;border-top-width: 1px;">&nbsp;A. Basicos&nbsp;</td>
                <td style="font-size: 8px;text-align: center;border-top-style: solid;border-top-width: 1px;">&nbsp;A. Aplicados&nbsp;</td>
            </table>
        </td>
        <td>
            <table class="tabla" cellpadding="0" cellspacing="5" align="center">
            <tr>
		<?php if (in_array(array('nivel_id'=>'15','ciclo_id'=>'2','grado_id'=> '1'), $cursos)): ?>
                    <td class="dato" width="80">X</td>
                <?php else: ?>
                    <td class="dato" width="80">&nbsp;</td>
                <?php endif; ?>
                <?php if (in_array(array('nivel_id'=>'15','ciclo_id'=>'2','grado_id'=> '2'), $cursos)): ?>
                    <td class="dato" width="80">X</td>
                <?php else: ?>
                    <td class="dato" width="80">&nbsp;</td>
                <?php endif; ?>

                <?php if (in_array(array('nivel_id'=>'15','ciclo_id'=>'2','grado_id'=> '3'), $cursos)): ?>
                    <td class="dato" width="80">X</td>
                <?php else: ?>
                    <td class="dato" width="80">&nbsp;</td>
                <?php endif; ?>
            </tr>
            <tr>
                <td style="font-size: 8px;text-align: center;">1&deg;</td>
                <td style="font-size: 8px;text-align: center;">2&deg;</td>
                <td style="font-size: 8px;text-align: center;">3&deg;</td>
            </tr>
            <tr>
                <td style="font-size: 8px;text-align: center;border-top-style: solid;border-top-width: 1px;">&nbsp;A. Avanzados&nbsp;</td>
                <td style="font-size: 8px;text-align: center;border-top-style: solid;border-top-width: 1px;">&nbsp;A. Comunes&nbsp;</td>
                <td style="font-size: 8px;text-align: center;border-top-style: solid;border-top-width: 1px;">&nbsp;A. Especializados&nbsp;</td>
            </tr>
            </table>
        </td>
    </tr>
</table>
