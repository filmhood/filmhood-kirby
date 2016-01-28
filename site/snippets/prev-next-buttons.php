<div class="row text-center">
  <?php if($prev = $page->prevVisible()): ?>
    <div class="col-xs-2 col-xs-offset-3 flat-button prev-next-button"><a class="prev" href="<?php echo $prev->url() ?>">&larr;</a></div>
  <?php else: ?>
    <div class="col-xs-2 col-xs-offset-3">&nbsp;</div>
  <?php endif ?>
  <div class="col-xs-2 flat-button prev-next-button"><a href="#">&uarr;</a></div>
  <?php if($next = $page->nextVisible()): ?>
    <div class="col-xs-2 flat-button prev-next-button"><a class="prev" href="<?php echo $next->url() ?>">&rarr;</a></div>
  <?php endif ?>
</div>
