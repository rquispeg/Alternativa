<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<select id="subcea_id" style="font-family: Arial;font-size: 12px;width:300px;">
    <option value="-999">[Seleccionar]</option>
    <?php foreach($subcentros as $subcentro): ?>
        <option value="<?php echo $subcentro->getSubCea(); ?>"><?php echo $subcentro->getSubCea();?></option>
    <?php endforeach; ?>
</select>