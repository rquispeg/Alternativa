2. Datos de ubicaci&oacute;n del edificio escolar
<table width="100%" class="tabla" cellpadding="0" cellspacing="5">
    <tr>
        <td class="caption">
           Departamento:
        </td>
        <td class="dato">
            <?php echo $identificacion->getIdDepartamento(); ?>
        </td>
        <td class="dato">
            <?php echo $identificacion->getDescDepartamento(); ?>
        </td>
        <td class="caption">
            Provincia
        </td>
        <td class="dato">
            <?php echo $identificacion->getIdProvincia(); ?>
        </td>
        <td class="dato">
            <?php echo $identificacion->getDescProvincia(); ?>
        </td>
    </tr>
    <tr>
        <td class="caption">
           Secc. Municipal
        </td>
        <td class="dato">
            <?php echo $identificacion->getIdSeccion(); ?>
        </td>
        <td class="dato">
            <?php echo $identificacion->getDescSeccion();?>
        </td>
        <td class="caption">
            Canton
        </td>
        <td class="dato">
            <?php echo $identificacion->getIdCanton(); ?>
        </td>
        <td class="dato">
            <?php echo $identificacion->getDescCanton();?>
        </td>
    </tr>
    <tr>
        <td class="caption">
           Ciudad o Localidad
        </td>
        <td class="dato">
            <?php echo $identificacion->getIdLocalidad(); ?>
        </td>
        <td class="dato">            
            <?php echo $identificacion->getDescLocalidad(); ?>
        </td>
        <td class="caption">
           Zona
        </td>
        <td class="dato" colspan="2">            
            <?php echo $identificacion->getZona(); ?>
        </td>
    </tr>
    <tr>
        <td class="caption" colspan="2">
            C&oacute;digo del edificio escolar
        </td>
        <td class="caption" colspan="3">
            Direcci&oacute;n
        </td>
        <td class="caption">
            Area
        </td>
    </tr>
    <tr>
        <td class="dato" colspan="2">
            <?php echo $identificacion->getCodLeId(); ?>
        </td>
        <td class="dato" colspan="3">
            <?php echo $identificacion->getDireccion(); ?>
        </td>
        <td class="dato">
            <?php echo $identificacion->getTipoArea()=='U'?'URBANA':'RURAL'; ?>
        </td>
    </tr>
</table>
<table width="100%" class="tabla" cellpadding="0" cellspacing="5">
    <tr>
        <td class="caption" colspan="4">
            Tel&eacute;fono propio de la unidad educativa
        </td>
        <td class="caption" colspan="4">
            Otro tel&eacute;fono para comunicarse con la unidad educativa
        </td>
    </tr>
    <tr>
        <td class="caption" width="50">
            N&uacute;mero
        </td>
        <td class="dato" width="150">
            <input type="text" name="datos[telefono1]" size="15" onkeydown="return validarNumero(event);" value="<?php echo $identificacion->getTelefono1(); ?>"></input>            
        </td>
        <td class="caption" width="50">
            Fax
        </td>
        <td class="dato" width="150">
            <input type="text" name="datos[fax]" size="15" onkeydown="return validarNumero(event);" value="<?php echo $identificacion->getFax(); ?>"></input>
            <?php //echo $director->getFax(); ?>
        </td>
        <td class="caption" width="50">
            N&uacute;mero
        </td>
        <td class="dato" width="150">
            <input type="text" name="datos[telefono2]" size="15" onkeydown="return validarNumero(event);" value="<?php echo $identificacion->getTelefono2(); ?>"></input>
            <?php //echo $director->getTelefono2(); ?>
        </td>
        <td class="caption" width="50">
           Pertenece a:
        </td>
        <td class="dato" width="150">
            <input type="text" name="datos[referenciatelefono2]" size="30" value="<?php echo $identificacion->getReferenciaTelefono2(); ?>"></input>            
        </td>
    </tr>
    <tr>
        <td class="caption" colspan="2">
            Correo electr&oacute;nico de la UE
        </td>
        <td class="dato" colspan="4">
            <input type="text" name="datos[email]" size="50" value="<?php echo $identificacion->getEmail(); ?>"></input>            
        </td>
        <td class="caption">
            Casilla Postal
        </td>
        <td class="dato">
            <input type="text" name="datos[casilla]" size="15" onkeydown="return validarNumero(event);" value="<?php echo $identificacion->getCasilla(); ?>"> </input>            
        </td>
    </tr>


</table>
