<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->esc() ?> | <?= $page->title()->esc() ?></title>

  <?= css([
    'assets/css/prism.css',
    'assets/css/lightbox.css',
    'assets/css/index.css',
    '@auto'
  ]) ?>

  <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">

</head>
<body>
<header class="header">

  <a class="logo" href="<?= $site->url() ?>">
    <img src="../assets/icons/ACAN_Logo_Lockup_Red_@4x.webp" alt="ACAN logo">
  </a>

  <nav class="menu">
    <?php foreach ($site->children()->listed() as $item): ?>
      <a <?php e($item->isOpen(), 'aria-current ') ?> href="<?= $item->url() ?>"><?= $item->title()->esc() ?></a>
    <?php endforeach ?>
  </nav>
</header>

<main class="main">