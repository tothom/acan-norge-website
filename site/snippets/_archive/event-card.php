<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  The event snippet renders an excerpt of a blog article.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
<article class="event-excerpt">
  <a href="<?=$event->url()?>">

    <time datetime="<?= $event->date()->toDate('c') ?>">
      <?= $event->date()->toDate('d/m/Y') ?>
    </time>

    <h4 class="event-excerpt-title"><?= $event->title()->esc() ?></h4>

    <figure class="img" style="--w: 16; --h:9">
      <?php if ($cover = $event->cover()): ?>
        <?=$cover->crop(320, 180) ?>
        <img src="<?=$event->url()?>/<?=$event->cover()->url()?>"/>
      <?php endif ?>
    </figure>

    <p class="kicker">
      <?= $event->description()->excerpt(280) ?>
    </p>
  </a>
</article>
