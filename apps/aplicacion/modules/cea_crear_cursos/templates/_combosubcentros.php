<select style="font-family: Arial;font-size: 12px; width: 350px;" id="subcea_id">    
    <?php foreach($subcentros as $subcentro):?>
    <option value="<?php echo $subcentro->getSubCea(); ?>"><?php echo $subcentro->getSubCea().' - '.$subcentro->getSubcentro(); ?></option>
    <?php endforeach; ?>
</select>