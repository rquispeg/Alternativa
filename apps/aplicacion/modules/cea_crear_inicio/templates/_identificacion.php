1. Datos de Identificacion<br />
<table width="100%" class="tabla" cellpadding="0" cellspacing="5">
    <tr>
        <td class="caption">
            C&oacute;digo del CEA:
        </td>
        <td colspan="4"  class="caption">
            Nombre del Centro de Educaci&oacute;n Alternativa:
        </td>
        <td  class="caption">
            El CEA o SubCEA esta cerrado?
        </td>
    </tr>
    <tr>
        <td class="dato">
            <?php echo $identificacion->getCodUeId(); ?>
        </td>
        <td colspan="4" class="dato">
            <?php echo $identificacion->getdescUe(); ?>
        </td>
        <td class="dato" rowspan='3' valign="center">
            <select name="datos[cerrada]">
                <option value = "19">SI</option>
                <option selected value ="10">NO</option>                
            </select> 
            <?php //echo $director->getCodCerradaId()==10?'NO':'SI'; ?>
        </td>
    </tr>    
    <tr>
        <td class="caption">
            Numero de Identificacion del SubCentro:
        </td>
        <td colspan="4"  class="caption">
            Nombre del SubCentro Educativo:
        </td>
    </tr>
    <tr>        
        <td class="dato">            
            <input readonly="readonly" type="text" name="datos[subcea]" size="2" value="<?php echo $identificacion->getSubCea(); ?>"></input>
        </td>
        <td colspan="4" class="dato">
            <input readonly="readonly" type="text" name="datos[nombre_subcea]" size="50" value="<?php echo $identificacion->getnombreSubcea(); ?>"></input>
        </td>
    </tr>    
    <tr>
        <td colspan="2" class="caption">
            Nombre Director &oacute; Director Encargado del CEA o SubCEA:
        </td>
        <td colspan="2" class="caption">
            C.I. Director o Director encargado
        </td>
        <td colspan="2" class="caption">
            Tiene cargo de director?
        </td>
    </tr>
    <tr>
        <td colspan="2" class="dato">
            <input type="text" name="datos[director]" size="50" value="<?php echo $identificacion->getdirector();?>"></input>
            
        </td>
        <td colspan="2" class="dato">
            <input type="text" name="datos[cidirector]" size="10" onkeydown="return validarNumero(event);" value="<?php echo $identificacion->getCiDirector();?>"></input>
            <?php //echo $director->getCiDirector(); ?>
        </td>
        <td colspan="2" class="dato">
            <select name="datos[itemdirector]">
                <option value = "1">SI</option>
                <option selected value ="0">NO</option>                
            </select> 
            <?php //echo $director->getItemDirector()==0 ?'SI':'NO'; ?>
        </td>
    </tr>
</table>
