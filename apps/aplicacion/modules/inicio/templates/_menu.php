<script>
	var menu;
	function initMenu() {
		var menuData = {
			parent: "menuObj",
			icon_path: "",
			items: [
                                <?php foreach ($menus as $menu): ?>
                                {
                                    id: "<?php echo $menu->getId(); ?>", text: "<?php echo $menu->getDescMenu(); ?>",
                                    items:[
                                        <?php $a = Doctrine::getTable('DatUsuPermiso')->getSubMenu($sf_user->getAttribute('ROL'),$menu->getId()); ?>
                                        <?php foreach ($a as $i => $submenu): ?>
                                            {id: "<?php echo $submenu->getId(); ?>", text: "<?php echo $submenu->getDescMenu(); ?>", img: "<?php echo $submenu->getIcono(); ?>"} <?php if($a->count()!=(int)$i+1) echo ","; ?>
                                        <?php endforeach; ?>
                                    ]
                                },
                                <?php endforeach; ?>
                                {id: "help", text: "Salir",
                                    items:[
					{id: "about", text: "Acerca de...", img: "/images/about.gif"},
                                        {id: "sep1", type: "separator"},
					{id: "quit", text: "Cerrar Sesi&oacute;n", img: "/images/iconlock_18.png"}
				]}
			]
		};
		menu = new dhtmlXMenuObject(menuData);
                <?php foreach ($menus as $menu): ?>
                    <?php foreach (Doctrine::getTable('DatUsuPermiso')->getSubMenu($sf_user->getAttribute('ROL'),$menu->getId()) as $submenu): ?>
                        menu.setHref("<?php echo $submenu->getId(); ?>", "<?php echo url_for($submenu->getLink()); ?>");
                    <?php endforeach; ?>
                <?php endforeach; ?>
                menu.setHref("quit", "<?php echo url_for('login/index'); ?>");
	}
</script>