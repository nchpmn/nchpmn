<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $site->description() ?>">
    <meta name="author" content="<?php echo $site->author() ?>">
    <meta name="keywords" content="<?php echo $site->keywords() ?>">
    <title>Nathan Chapman &ndash; Steadicam Operator</title>

    <!-- Bootstrap -->
    <?php echo css(array(
        'assets/css/bootstrap.min.css',
        'assets/css/style.css',
        'assets/fonts/flama.min.css',
        'assets/css/font-awesome.min.css',
    )) ?>
    <?php if($page->isHomePage()): ?>
        <?php echo css('assets/css/owl.carousel.min.css') ?>
    <?php endif; ?>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="<?php echo $bodyclass ?>">
<?php snippet('navbar') ?>