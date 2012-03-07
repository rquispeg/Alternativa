5. Grados de atenci&oacute;n<br />
<table width="100%"  border="1" cellpadding="0" cellspacing="0">
    <tr>
        <td class="caption" style="text-align: center;" width="35%">
            Nivel inicial
        </td>
        <td class="caption" style="text-align: center;" width="40%">
            Nivel primario
        </td>
        <td  class="caption" style="text-align: center;" width="25%">
            Nivel Secundario
        </td>
    </tr>
    <tr>
        <td>
            <table class="tabla" cellpadding="0" cellspacing="5" align="center">
            <tr>
                <?php if ($director): ?>
                    <?php $cursos = Doctrine::getTable('DatSieCurso')->getCursosHabilitados($director->getGestionId(),$director->getCodUeId(),$director->getOperativoId()); ?>
                <?php endif; ?>
                <?php if (in_array(array('nivel_id'=>'1','grado_id'=> '0'), $cursos)): ?>
                    <td class="caption">Primeros Aprend. </td>
                    <td class="dato" width="20">X</td>
                <?php else: ?>
                    <td class="caption">Primeros Aprend. </td>
                    <td class="dato" width="20">&nbsp;</td>
                <?php endif; ?>
                
                <?php if (in_array(array('nivel_id'=>'1','grado_id'=> '1'), $cursos)): ?>
                    <td class="caption">Aprend.Sistematicos</td>
                    <td class="dato" width="20">X</td>
                <?php else: ?>
                    <td class="caption">Aprend.Sistematicos</td>
                    <td class="dato" width="20">&nbsp;</td>
                <?php endif; ?>

                <?php if (in_array(array('nivel_id'=>'1','grado_id'=> '2'), $cursos)): ?>
                    <td class="dato" width="20">X</td>
                <?php else: ?>
                    <td class="dato" width="20">&nbsp;</td>
                <?php endif; ?>                    
            </tr>
            <tr>
                <td style="font-size: 8px;text-align: center;"></td>
                <td style="font-size: 8px;text-align: center;"></td>
                <td style="font-size: 8px;text-align: center;"></td>
                <td style="font-size: 8px;text-align: center;">1&deg;</td>
                <td style="font-size: 8px;text-align: center;">2&deg;</td>
            </tr>
            </table>
        </td>
        <td>
            <table class="tabla" cellpadding="0" cellspacing="5" align="center">
            <tr>
                <?php if (in_array(array('nivel_id'=>'2','grado_id'=> '1'), $cursos)): ?>
                    <td class="dato" width="20">X</td>
                <?php else: ?>
                    <td class="dato" width="20">&nbsp;</td>
                <?php endif; ?>

                <?php if (in_array(array('nivel_id'=>'2','grado_id'=> '2'), $cursos)): ?>
                    <td class="dato" width="20">X</td>
                <?php else: ?>
                    <td class="dato" width="20">&nbsp;</td>
                <?php endif; ?>
                <?php if (in_array(array('nivel_id'=>'2','grado_id'=> '3'), $cursos)): ?>
                    <td class="dato" width="20">X</td>
                <?php else: ?>
                    <td class="dato" width="20">&nbsp;</td>
                <?php endif; ?>                    

                <?php if (in_array(array('nivel_id'=>'2','grado_id'=> '4'), $cursos)): ?>
                    <td class="dato" width="20">X</td>
                <?php else: ?>
                    <td class="dato" width="20">&nbsp;</td>
                <?php endif; ?>

                <?php if (in_array(array('nivel_id'=>'2','grado_id'=> '5'), $cursos)): ?>
                    <td class="dato" width="20">X</td>
                <?php else: ?>
                    <td class="dato" width="20">&nbsp;</td>
                <?php endif; ?>    
                <?php if (in_array(array('nivel_id'=>'2','grado_id'=> '6'), $cursos)): ?>
                    <td class="dato" width="20">X</td>
                <?php else: ?>
                    <td class="dato" width="20">&nbsp;</td>
                <?php endif; ?>                    

                <?php if (in_array(array('nivel_id'=>'2','grado_id'=> '7'), $cursos)): ?>
                    <td class="dato" width="20">X</td>
                <?php else: ?>
                    <td class="dato" width="20">&nbsp;</td>
                <?php endif; ?>

                <?php if (in_array(array('nivel_id'=>'2','grado_id'=> '8'), $cursos)): ?>
                    <td class="dato" width="20">X</td>
                <?php else: ?>
                    <td class="dato" width="20">&nbsp;</td>
                <?php endif; ?>
            </tr>
            <tr>
                <td style="font-size: 8px;text-align: center;">1&deg;</td>
                <td style="font-size: 8px;text-align: center;">2&deg;</td>
                <td style="font-size: 8px;text-align: center;">3&deg;</td>
                <td style="font-size: 8px;text-align: center;">4&deg;</td>
                <td style="font-size: 8px;text-align: center;">5&deg;</td>
                <td style="font-size: 8px;text-align: center;">6&deg;</td>
                <td style="font-size: 8px;text-align: center;">7&deg;</td>
                <td style="font-size: 8px;text-align: center;">8&deg;</td>
            </tr>
            <tr>
                <td colspan="3" style="font-size: 8px;text-align: center;border-top-style: solid;border-top-width: 1px;">1er. ciclo</td>
                <td colspan="3" style="font-size: 8px;text-align: center;border-top-style: solid;border-top-width: 1px;">2do. ciclo</td>
                <td colspan="2" style="font-size: 8px;text-align: center;border-top-style: solid;border-top-width: 1px;">3er. ciclo</td>
            </tr>
            </table>
        </td>
        <td>
            <table class="tabla" cellpadding="0" cellspacing="5" align="center">
            <tr>     
                <?php if (in_array(array('nivel_id'=>'3','grado_id'=> '1'), $cursos)): ?>
                    <td class="dato" width="20">X</td>
                <?php else: ?>
                    <td class="dato" width="20">&nbsp;</td>
                <?php endif; ?>                    

                <?php if (in_array(array('nivel_id'=>'3','grado_id'=> '2'), $cursos)): ?>
                    <td class="dato" width="20">X</td>
                <?php else: ?>
                    <td class="dato" width="20">&nbsp;</td>
                <?php endif; ?>

                <?php if (in_array(array('nivel_id'=>'3','grado_id'=> '3'), $cursos)): ?>
                    <td class="dato" width="20">X</td>
                <?php else: ?>
                    <td class="dato" width="20">&nbsp;</td>
                <?php endif; ?>
                <?php if (in_array(array('nivel_id'=>'3','grado_id'=> '4'), $cursos)): ?>
                    <td class="dato" width="20">X</td>
                <?php else: ?>
                    <td class="dato" width="20">&nbsp;</td>
                <?php endif; ?>                    
            </tr>
            <tr>
                <td style="font-size: 8px;text-align: center;">1&deg;</td>
                <td style="font-size: 8px;text-align: center;">2&deg;</td>
                <td style="font-size: 8px;text-align: center;">3&deg;</td>
                <td style="font-size: 8px;text-align: center;">4&deg;</td>
            </tr>
            </table>
        </td>
    </tr>
</table>