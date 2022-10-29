<?php
?>

<h3><?= $page->title()->esc() ?></h3>

<body>
  <div>
    <?= dump(F::isWritable(kirby()->root('media'))) ?>
    <?= phpinfo() ?>
  </div>
</body>
