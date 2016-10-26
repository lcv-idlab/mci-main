<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

  <!-- css -->
  <?php echo css('assets/css/main.css'); ?>
  <?php echo css('assets/sass/lightbox.css'); ?>

  <!-- js -->
  <?php echo js('assets/js/nav.js'); ?>
  <?php echo js('assets/js/jquery.min.js'); ?>

</head>
<body class="body">