<?php snippet('header') ?>

<div class="jumbotron no-margin custom-background" style="background-image:url(<?php if($image = $page->image('cover.jpg')) { echo $image->url(); } ?>);">
  <div class="container text-center">
    <p>&nbsp;</p>
    <h1><img src="<?php echo url('assets/images/logo-filmhood-small.png') ?>" class="logo-small-title" alt="logo-filmhood" />filmhood</h1>
    <h3><?php echo $page->subtitle() ?></h3>
    <p><?php echo $page->text() ?></p>
    <p>&nbsp;</p>
  </div>
</div>

<?php snippet('jumbotron-projects') ?>

<?php snippet('jumbotron-buttons') ?>

<div class="container">
  <div class="row">
    <div class="col-md-2">
      <p class="infobar-left">derniers articles</p>
    </div>
    <div class="col-md-8">
      <?php foreach(page('articles')->children()->visible()->limit(4) as $article): ?>

      <?php
      if($article->categorie()=='think') {
        $bordercolor='#2c85e9';
      } elseif ($article->categorie()=='make') {
        $bordercolor='#cc161c';
      }?>

      <article style="border-color:<?php echo $bordercolor; ?>;">
        <h1><a class="categorie" href="<?php echo $article->url() ?>"><?php echo $article->title() ?></a></h1>
        <h4><?php echo $article->author() ?>&nbsp;/
          <?php echo $article->tags() ?>
        </h4>
        <p><?php echo $article->text()->kirbytext()->excerpt(300) ?></p>
        <p class="articles-plus"><a href="<?php echo $article->url() ?>">Lire l'article -></a></p>
      </article>
      <?php endforeach ?>
      <p class="articles-all"><a href="<?php echo url('articles') ?>">Tous les articles</a></p>
    </div>
  </div>

  <div class="row" style="margin-top:30px;">
    <div class="col-md-2">
      <p class="infobar-left">dernières actualités</p>
    </div>
    <div class="col-md-8">
      <?php foreach(page('blog')->children()->visible()->limit(4) as $new): ?>
      <article>
        <h1><a class="categorie think" href="<?php echo $new->url() ?>"><?php echo $new->title() ?></a></h1>
        <h4><?php echo $new->author() ?></h4>
        <p><?php echo $new->text()->kirbytext()->excerpt(300) ?></p>
      </article>
      <?php endforeach ?>
      <p class="articles-all"><a href="<?php echo url('blog') ?>">Toutes les actualités</a></p>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
