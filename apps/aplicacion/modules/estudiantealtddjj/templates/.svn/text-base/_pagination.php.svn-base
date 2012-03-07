<div class="sf_admin_pagination">
  <a href="#" id="first">
      <img src="/images/first.png" alt="Primera P&aacute;gina" title="Primera P&aacute;gina" />
  </a>
  <a href="#" id="previous">
    <img src="/images/previous.png" alt="P&aacute;gina anterior" title="P&aacute;gina anterior" />
  </a>
  <?php foreach ($pager->getLinks() as $page): ?>
    <?php if ($page == $pager->getPage()): ?>
        <span style="color:#f00;"><?php echo $page ?></span>
    <?php else: ?>
      <a href="#" id="page<?php echo $page ?>"><?php echo $page ?></a>
      <?php echo jquery_load(
            '#divResults',
            array(
                'listener' => array(
                    'selector' => '#page'.$page,
                    'event'    => 'click'),
                'url' => url_for($url),
                'data'    => array ('page' => $page,'ue' => $ue,'gestion_id' => $gestion))) ?>
    <?php endif; ?>
  <?php endforeach; ?>
  <a href="#" id="next">
    <img src="/images/next.png" alt="Siguiente P&aacute;gina" title="Siguiente P&aacute;gina" />
  </a>
  <a href="#" id="last">
    <img src="/images/last.png" alt="Ultima p&aacute;gina" title="Ultima P&aacute;gina" />
  </a>
</div>
<?php echo jquery_load(
            '#divResults',
            array(
                'listener' => array(
                    'selector' => '#first',
                    'event'    => 'click'),
                'url' => url_for($url),
                'data'    => array ('page' => '1','ue' => $ue,'gestion_id' => $gestion))) ?>
<?php echo jquery_load(
            '#divResults',
            array(
                'listener' => array(
                    'selector' => '#previous',
                    'event'    => 'click'),
                'url' => url_for($url),
                'data'    => array ('page' => $pager->getPreviousPage(),'ue' => $ue,'gestion_id' => $gestion))) ?>
<?php echo jquery_load(
            '#divResults',
            array(
                'listener' => array(
                    'selector' => '#next',
                    'event'    => 'click'),
                'url' => url_for($url),
                'data'    => array ('page' => $pager->getNextPage(),'ue' => $ue,'gestion_id' => $gestion))) ?>
<?php echo jquery_load(
            '#divResults',
            array(
                'listener' => array(
                    'selector' => '#last',
                    'event'    => 'click'),
                'url' => url_for($url),
                'data'    => array ('page' => $pager->getLastPage(),'ue' => $ue,'gestion_id' => $gestion))) ?>

<?php
    echo jquery_ajax_event(
           '#divResults',
           'ajaxSuccess',
           like_function('$("#imagen").css("display","none")', 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#divResults',
           'ajaxStart',
           like_function('$("#imagen").css("display","block")', 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#divResults',
           'ajaxError',
           like_function('$("#imagen").css("display","block")', 'event,request,settings'));
?>