<?php
  //detect mobile: 
  $worksClass = 'cb-nav-item';
  $infoClass = 'cb-nav-item';
  $url = $_SERVER['REQUEST_URI'];
  if ($url == '/works' || $url == '/works/') {
    $worksClass = $worksClass.' active';
  } else if ($url == '/info' || $url == '/info/') {
    $infoClass = $infoClass.' active';
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="codebusters">

    <title>Codebusters</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri();?>/css/animate.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/css/montserrat.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <div class="root">
    <div class="container cb-header" id="top">
      <div class="cb-logo">
        <a href="/"><img class="fullwidth" src="<?php echo get_template_directory_uri();?>/img/cb-logo.svg" alt=""></img></a>
      </div>
      <div class="cb-logo-vert">
        <a href="/"><img class="fullwidth" src="<?php echo get_template_directory_uri();?>/img/cb-logo-vert.svg" alt=""></img></a>
      </div>
      <div class="cb-navs">
        <a class="<?php echo $worksClass; ?>" href="/works">WORKS</a>
        <a class="<?php echo $infoClass; ?>" href="/info">INFO</a>
      </div>
    </div>
    <div class="to-top">
      <a href="#top"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-up.png" alt=""></img></a>
    </div>
