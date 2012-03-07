2. Datos de ubicaci&oacute;n del edificio escolar
<table width="100%" class="tabla" cellpadding="0" cellspacing="5">
    <tr>
        <td class="caption">
           Departamento:
        </td>
        <td class="dato">
            <?php echo $identificacion->getDatIfrJurisdiccionGeografica()->getDepartamentoId(); ?>
        </td>
        <td class="dato">
            <?php echo Doctrine::getTable('ClaDepartamento')->find($identificacion->getDatIfrJurisdiccionGeografica()->getDepartamentoId())->getDescDepartamento(); ?>
        </td>
        <td class="caption">
            Provincia
        </td>
        <td class="dato">
            <?php echo $identificacion->getDatIfrJurisdiccionGeografica()->getProvinciaId(); ?>
        </td>
        <td class="dato">
            <?php echo Doctrine::getTable('ClaProvincia')->find(array($identificacion->getDatIfrJurisdiccionGeografica()->getDepartamentoId(),$identificacion->getDatIfrJurisdiccionGeografica()->getProvinciaId()))->getDescProvincia(); ?>
        </td>
    </tr>
    <tr>
        <td class="caption">
           Secc. Municipal
        </td>
        <td class="dato">
            <?php echo $identificacion->getDatIfrJurisdiccionGeografica()->getSeccionId(); ?>
        </td>
        <td class="dato">
            <?php echo Doctrine::getTable('ClaSeccion')->find(array($identificacion->getDatIfrJurisdiccionGeografica()->getDepartamentoId(),$identificacion->getDatIfrJurisdiccionGeografica()->getProvinciaId(),$identificacion->getDatIfrJurisdiccionGeografica()->getSeccionId()))->getDescSeccion(); ?>
        </td>
        <td class="caption">
            Canton
        </td>
        <td class="dato">
            <?php echo $identificacion->getDatIfrJurisdiccionGeografica()->getCantonId(); ?>
        </td>
        <td class="dato">
            <?php echo Doctrine::getTable('ClaCanton')->find(array($identificacion->getDatIfrJurisdiccionGeografica()->getDepartamentoId(),$identificacion->getDatIfrJurisdiccionGeografica()->getProvinciaId(),$identificacion->getDatIfrJurisdiccionGeografica()->getSeccionId(),$identificacion->getDatIfrJurisdiccionGeografica()->getCantonId()))->getDescCanton(); ?>
        </td>
    </tr>
    <tr>
        <td class="caption">
           Ciudad o Localidad
        </td>
        <td class="dato">
            <?php echo $identificacion->getDatIfrJurisdiccionGeografica()->getLocalidadId(); ?>
        </td>
        <td class="dato">
            <?php $clalocalidad = Doctrine::getTable('ClaLocalidad')->find(array($identificacion->getDatIfrJurisdiccionGeografica()->getDepartamentoId(),$identificacion->getDatIfrJurisdiccionGeografica()->getProvinciaId(),$identificacion->getDatIfrJurisdiccionGeografica()->getSeccionId(),$identificacion->getDatIfrJurisdiccionGeografica()->getCantonId(),$identificacion->getDatIfrJurisdiccionGeografica()->getLocalidadId())); ?>
            <?php echo $clalocalidad->getDescLocalidad(); ?>
        </td>
        <td class="caption">
           Zona
        </td>
        <td class="dato" colspan="2">
            <?php $zona = Doctrine::getTable('DatIfrUnidadEducativa')->find(array($identificacion->getCodLeId(),$director->getGestionId(),1)); ?>
            <?php echo $zona?$zona->getZona():''; ?>
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
            <?php echo $zona?$zona->getDireccion():''; ?>
        </td>
        <td class="dato">
            <?php echo $clalocalidad->getTipoArea()=='U'?'URBANA':'RURAL'; ?>
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
            <?php echo $director->getTelefono1(); ?>
        </td>
        <td class="caption" width="50">
            Fax
        </td>
        <td class="dato" width="150">
            <?php echo $director->getFax(); ?>
        </td>
        <td class="caption" width="50">
            N&uacute;mero
        </td>
        <td class="dato" width="150">
            <?php echo $director->getTelefono2(); ?>
        </td>
        <td class="caption" width="50">
           Pertenece a:
        </td>
        <td class="dato" width="150">
            <?php echo $director->getReferenciaTelefono2(); ?>
        </td>
    </tr>
    <tr>
        <td class="caption" colspan="2">
            Correo electr&oacute;nico de la UE
        </td>
        <td class="dato" colspan="4">
            <?php echo $director->getEmail(); ?>
        </td>
        <td class="caption">
            Casilla Postal
        </td>
        <td class="dato">
            <?php echo $director->getCasilla(); ?>
        </td>
    </tr>


</table>
