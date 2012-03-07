<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryAutocomplete')?>
<?php use_helper('ysJQueryUIDialog')?>
<?php use_helper('ysJQueryUICore'); ?>
<div class="sf_admin_pagination">
  <a href="#" id="first">
      <img src="/images/first.png" alt="Primera P&aacute;gina" title="Primera P&aacute;gina" border="0" />
  </a>
  <a href="#" id="previous">
    <img src="/images/previous.png" alt="P&aacute;gina anterior" title="P&aacute;gina anterior"  border="0" />
  </a>    
  <?php foreach ($pager->getLinks() as $page): ?>
    <?php if ($page == $pager->getPage()): ?>
        <span style="color:#f00;"><?php echo $page ?></span>
    <?php else: ?>
      <a href="#" id="page<?php echo $page ?>"><?php echo $page ?></a>
      <?php echo jquery_load(
            '#result',
            array(
                'listener' => array(
                    'selector' => '#page'.$page,
                    'event'    => 'click'),
                'url' => url_for($url),
                'data'    => array ('page' => $page,'ue_id'=>$ue_id,'subcea_id'=>$subcea_id,'modalidad_id'=>$modalidad_id,'nivel_id'=>$nivel_id,'ciclo_id'=>$ciclo_id,'paralelo_id'=>$paralelo_id,'turno_id'=>$turno_id)
                )) ?>
    <?php endif; ?>
  <?php endforeach; ?>
  <a href="#" id="next">
    <img src="/images/next.png" alt="Siguiente P&aacute;gina" title="Siguiente P&aacute;gina"  border="0" />
  </a>
  <a href="#" id="last">
    <img src="/images/last.png" alt="Ultima p&aacute;gina" title="Ultima P&aacute;gina"  border="0"/>
  </a>
</div>
<?php echo jquery_load(
            '#result',
            array(
                'listener' => array(
                    'selector' => '#first',
                    'event'    => 'click'),
                'url' => url_for($url),
                'data'    => array ('page' => '1','ue_id'=>$ue_id,'subcea_id'=>$subcea_id,'modalidad_id'=>$modalidad_id,'nivel_id'=>$nivel_id,'ciclo_id'=>$ciclo_id,'paralelo_id'=>$paralelo_id,'turno_id'=>$turno_id))) ?>
<?php echo jquery_load(
            '#result',
            array(
                'listener' => array(
                    'selector' => '#previous',
                    'event'    => 'click'),
                'url' => url_for($url),
                'data'    => array ('page' => $pager->getPreviousPage(),'ue_id'=>$ue_id,'subcea_id'=>$subcea_id,'modalidad_id'=>$modalidad_id,'nivel_id'=>$nivel_id,'ciclo_id'=>$ciclo_id,'paralelo_id'=>$paralelo_id,'turno_id'=>$turno_id))) ?>
<?php echo jquery_load(
            '#result',
            array(
                'listener' => array(
                    'selector' => '#next',
                    'event'    => 'click'),
                'url' => url_for($url),
                'data'    => array ('page' => $pager->getNextPage(),'ue_id'=>$ue_id,'subcea_id'=>$subcea_id,'modalidad_id'=>$modalidad_id,'nivel_id'=>$nivel_id,'ciclo_id'=>$ciclo_id,'paralelo_id'=>$paralelo_id,'turno_id'=>$turno_id))) ?>
<?php echo jquery_load(
            '#result',
            array(
                'listener' => array(
                    'selector' => '#last',
                    'event'    => 'click'),
                'url' => url_for($url),
                'data'    => array ('page' => $pager->getLastPage(),'ue_id'=>$ue_id,'subcea_id'=>$subcea_id,'modalidad_id'=>$modalidad_id,'nivel_id'=>$nivel_id,'ciclo_id'=>$ciclo_id,'paralelo_id'=>$paralelo_id,'turno_id'=>$turno_id))) ?>

<?php
    echo jquery_ajax_event(
           '#result',
           'ajaxSuccess',
           like_function('$("#imagen").css("display","none")', 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#result',
           'ajaxStart',
           like_function('$("#imagen").css("display","block")', 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#result',
           'ajaxError',
           like_function('$("#imagen").css("display","block")', 'event,request,settings'));
?>