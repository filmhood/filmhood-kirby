<div class="col-md-2">
  <p class="infobar-left">partager</p>
  <div class="tagbar-left">
    <p>
      <ul>
        <li><a href="http://www.facebook.com/sharer.php?u=<?php echo rawurlencode ($page->url()); ?>" target="blank" title="Share on Facebook" target="blank" class="btn btn-default btn-xs">facebook</a></li>
        <li><a href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode($page->url()); ?>%20<?php echo ('via @filmhoodprod')?>" target="blank" title="Tweet" class="btn btn-default btn-xs">twitter</a></li>
      </ul>
    </p>
  </div>
</div>
