<?php use_helper('ysJQueryRevolutions') ?>
<?php use_helper('ysJQueryUICore'); ?>
<?php use_helper('ysJQueryUIMenu'); ?>


<script type="text/javascript">
    
    function my_alert_function(){
      alert('My Alert Function');
    }

    function my_function(action, el, pos) {
      alert(
        'Action: ' + action + '\n\n' +
        'Element text: ' + $(el).find('td').html() + '\n\n' +
        'Element ID: ' + $(el).attr('id') + '\n\n' +
        'X: ' + pos.x + '  Y: ' + pos.y + ' (relative to element)\n\n' +
        'X: ' + pos.docX + '  Y: ' + pos.docY+ ' (relative to document)'
      );
    }
    function my_function2(action, el, pos) {
      alert(
        'Action: ' + action + '\n\n' +
        'Element text: ' + $(el).text() + '\n\n' +
        'X: ' + pos.x + '  Y: ' + pos.y + ' (relative to element)\n\n' +
        'X: ' + pos.docX + '  Y: ' + pos.docY+ ' (relative to document)'
      );
    }

    $(document).ready( function() {
				// Disable menus
				$("#disableMenus").click( function() {
        <?php echo ui_context_menu_disable('#menuId, #myList UL LI')?>
				});
				// Enable menus
				$("#enableMenus").click( function() {
          <?php echo ui_context_menu_enable('#menuId, #myList UL LI')?>
				});
				// Disable cut/copy
				$("#disableItems").click( function() {
         <?php echo ui_context_menu_disable_items('#menuId', '#cut,#copy')?>
				});
				// Enable cut/copy
				$("#enableItems").click( function() {
          <?php echo ui_context_menu_enable_items('#menuId', '#cut,#copy')?>
				});
			});
		</script>


<h1>jQuery Context Menu Plugin Demo</h1>
		<p>This plugin lets you add context menu functionality to your web applications.</p>
		<p><strong>Tip:</strong> Try using your keyboard to make a selection.</p>
		<h2>Demo</h2>
		<div id="myList">
			<ul>
				<li>Item 1</li>
				<li>Item 2</li>
				<li>Item 3</li>
				<li>Item 4</li>
				<li>Item 5</li>
				<li>Item 6</li>
			</ul>
		</div>
    <div id="myTable">
      <table border="1">
        <tr id="17961911">
          <td>Omar Yepez</td>
          <td>17961911</td>
        </tr>
        <tr id="14645597">
          <td>Rossana Suarez</td>
          <td>14645597</td>
        </tr>
      </table>
    </div>
		<div id="myOptions">
      <?php echo ui_button_pane_init(
             $type = 'single',
             array(
              'disableItems' => array(
                 'value' => 'Disable Cut/Copy'),
              'enableItems' => array(
                 'value' => 'Enable Cut/Copy')))?>
      <?php echo ui_button_pane_end() ?>
      <?php echo ui_button_pane_init(
             $type = 'single',
             array(
              'disableMenus' => array(
                'value' => 'Disable Context Menus'),
              'enableMenus' => array(
                'value' => 'Enable Context Menus')))?>
      <?php echo ui_button_pane_end() ?>
		</div>

  <?php  echo ui_context_menu_init(
            'menuId',
            array(
              'node1' => array(
                'id' => 'node1',
                'value' => 'Value node1',
                'icon' => 'newwin',
                'url' => 'http://www.google.com',
                'actions' => 'my_alert_function()'),
              'node11' => array(
                'id' => 'node11',
                'icon' => 'pencil',
                'value' => 'Value node1.1',
                'actions' => array('click' => "alert('Hello world')")),
              'separator1' => array('type' => 'separator'),
              'node12' => array(
                'id' => 'node12',
                'icon' => 'disk',
                'value' =>  'Value node1.2',
                'url' => 'http://www.google.com' )))  ?>

<?php echo ui_context_menu_init(
          'menuId',
          array(
            //'yml' => 'path/to/yourProjectDir/plugins/ysJQueryUIPlugin/config/menu.yml',
            //'ymlKey' => 'myContextMenu'
          )) ?>

<?php echo ui_context_menu_support_to('menuId', '#myTable table tr', 'my_function') ?>
<br><br>
<?php
  echo link_to('jQuery Context Menu Plugin', 'http://abeautifulsite.net/2008/09/jquery-context-menu-plugin/')
?>
