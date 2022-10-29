<article class="event-excerpt">
  <a href="<?=$event->url()?>">

    <time datetime="<?= $event->date()->toDate('c') ?>">
      <?= $event->date()->toDate('d/m/Y') ?>
    </time>

    <h4 class="event-excerpt-title"><?= $event->title()->esc() ?></h4>

    <figure class="img" style="--w: 16; --h:9">
      <?php if ($cover = $event->cover()->toFile()): ?>
        <img src="<?=$cover->url()?>" alt="Event cover"/>
      <?php endif ?>
    </figure>

    <p class="h6">
      <?= $event->description()->excerpt(280) ?>
    </p>
  </a>
</article>