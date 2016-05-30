<?php snippet('header') ?>

  <main class="main" role="main">
 
    <div class="episode">
	<?php foreach($page->children()->visible() as $episode): ?>
  <article>
    <h1><?php echo $episode->title()->kirbytext() ?></h2>
    <p><?php echo $episode->notes()->kirbytext() ?></p>
    <iframe style="border: none" src="//html5-player.libsyn.com/embed/episode/id/<?php echo $episode->libsynlink()->text() ?>/height/100/width/640/theme/standard-mini/autoplay/no/autonext/no/thumbnail/no/preload/no/no_addthis/no/direction/backward/no-cache/true/" height="100" width="640" scrolling="no"  allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
  </article>
 
   <?php endforeach ?>

<?php snippet('footer') ?> 
</main>