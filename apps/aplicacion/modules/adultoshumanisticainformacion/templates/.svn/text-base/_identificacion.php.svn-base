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
            El CEA esta cerrado?
        </td>
    </tr>
    <tr>
        <td class="dato">
            <?php echo $identificacion->getCodUe(); ?>
        </td>
        <td colspan="4" class="dato">
            <?php echo $identificacion->getdescUe(); ?>
        </td>
        <td class="dato" rowspan="3" valign="top">
            <?php echo $director->getCodCerradaId()==10?'NO':'SI'; ?>
        </td>
    </tr>
    <tr>
        <td colspan="2" class="caption">
            Nombre Director &oacute; Director Encargado del CEA:
        </td>
        <td class="caption">
            C.I. Director o Director encargado
        </td>
        <td colspan="2" class="caption">
            Tiene cargo de director?
        </td>
    </tr>
    <tr>
        <td colspan="2" class="dato">
            <?php echo $director->getDirector(); ?>
        </td>
        <td  class="dato">
            <?php echo $director->getCiDirector(); ?>
        </td>
        <td colspan="2" class="dato">
            <?php echo $director->getItemDirector()==0 ?'SI':'NO'; ?>
        </td>
    </tr>
</table>
