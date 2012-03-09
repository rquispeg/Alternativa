<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<select id="curso_oferta_id" style="font-family: Arial;font-size: 12px;width:490px;" name="form[curso_oferta_id]">
    <option value="-999">[Seleccionar]</option>
    <?php foreach($especialidades as $especialidad): ?>
        <option value="<?php echo $especialidad->getCursoOfertaId(); ?>"><?php echo Doctrine::getTable('ClaCursoOferta')->find($especialidad->getCursoOfertaId())->getDescCursoOferta(); ?></option>
    <?php endforeach; ?>
</select>

