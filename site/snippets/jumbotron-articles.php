<div class="jumbotron no-margin custom-padding">
  <div class="container-fluid">
    <div class="row text-center info-jumbotron">
      <p>derniers articles</p>
    </div>
    <div class="row">
      <?php foreach(page('articles')->children()->visible()->limit(4) as $article): ?>
      <div class="col-xs-6 col-sm-3 custom-padding">
        <div class="hovereffect top-project">
          <a href="<?php echo $article->url() ?>"><img src="<?php echo $article->url() ?>/vignette.jpg" class="img-responsive" alt="Responsive image">
          <div class="overlay">
            <h2><?php echo $article->title() ?></h2>
          </div>
          </a>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</div>
