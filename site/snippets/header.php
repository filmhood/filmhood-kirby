<!DOCTYPE html>
  <html lang="fr">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="favicon.ico">

      <title><?php echo $page->title()->html() ?></title>

      <!-- Bootstrap core CSS -->
      <?php echo css('assets/css/bootstrap.min.css') ?>

      <link href='https://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>

      <!-- Custom styles for this template -->
      <?php echo css('assets/css/navbar.css') ?>
      <?php echo css('assets/css/main.css') ?>
      <?php echo css('assets/css/hovereffect.css') ?>
      <?php echo css('assets/css/categories.css') ?>

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body>

    <?php snippet('menu') ?>
