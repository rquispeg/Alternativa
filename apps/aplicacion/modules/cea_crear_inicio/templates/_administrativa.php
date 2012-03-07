3. Jurisdicci&oacute;n Administrativa<br />
<table width="100%" class="tabla" cellpadding="0" cellspacing="5">
    <tr>
        <td class="caption" width="90">
            C&oacute;digo Distrito
        </td>
        <td class="dato" width="100">
            <?php echo $identificacion->getCodDistrito(); ?>
        </td>
        <td class="caption" width="110">
            Nombre Distrito
        </td>
        <td class="dato">
            <?php echo $identificacion->getDistrito(); ?>
        </td>
    </tr>
    <tr>
        <td class="caption">
            C&oacute;digo N&uacute;cleo
        </td>
        <td class="dato">
            <?php echo $identificacion->getCodNucleo()?$identificacion->getCodNucleo():' '; ?>
        </td>
        <td class="caption">
            Nombre N&uacute;cleo
        </td>
        <td class="dato">
            <?php echo $identificacion->getDescNucleo(); ?>
        </td>
    </tr>
</table>
