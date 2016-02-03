<?php snippet('header') ?>

<?php snippet('jumbotron-title') ?>

<?php snippet('jumbotron-articles') ?>

<?php snippet('jumbotron-buttons') ?>

<div class="container">
  <div class="row">
    <div class="col-md-2">
      <p class="infobar-left">articles</p>
      <div class="tagbar-left">
        <p><span class="label label-primary">penser</span>&nbsp;<span class="label label-danger">faire</span>
        <?php $tagcloud = tagcloud(page('articles'), array('limit' => 20)) ?>
          <ul>
            <?php foreach($tagcloud as $tag): ?>
              <li><a href="<?php echo $tag->url() ?>" class="btn btn-default btn-xs"><?php echo $tag->name() ?></a></li>
            <?php endforeach ?>
          </ul>
        </p>
      </div>
    </div>
    <div class="col-md-8">
      <?php $articles = $page->children()->visible(); ?>

      <?php if($tag = param('tag')) {
        $articles = $articles->filterBy('tags', $tag, ',');
      } ?>

      <?php foreach($articles as $article): ?>

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
    </div>
  </div>
</div>

<?php snippet('footer') ?>
