<div style="padding-bottom: 20px;text-align: center;padding-top: 15px;">
    <?php foreach ($botones as $boton): ?>
    <a href="<?php echo url_for($boton['link']); ?>" class="enlaceboton" target="_blank"><?php echo $boton['caption']; ?></a>
    <?php endforeach; ?>
</div>