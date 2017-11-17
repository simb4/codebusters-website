
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:bold" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://api-maps.yandex.ru/2.1/?lang=en_US" type="text/javascript"></script>
    <script type="text/javascript">
    ymaps.ready(init);
    var alaMap, dubMap;

    function init(){     
        myMap = new ymaps.Map("map-almaty", {
            center: [55.76, 37.64],
            zoom: 7
        });
        dubMap = new ymaps.Map("map-dublin", {
            center: [55.76, 37.64],
            zoom: 7
        });
    }
    </script>
  </head>

  <body>
  <div class="root">
    <div class="container cb-header" id="top">
      <div class="cb-logo">
        <a href="index.php"><img class="fullwidth" src="img/cb-logo.svg" alt=""></img></a>
      </div>
      <div class="cb-logo-vert">
        <a href="index.php"><img class="fullwidth" src="img/cb-logo-vert.svg" alt=""></img></a>
      </div>
      <div class="cb-navs">
        <a class="cb-nav-item active" href="works.php">WORKS</a>
        <a class="cb-nav-item" href="info.php">INFO</a>
      </div>
    </div>
    <div class="to-top">
      <a href="#top"><img src="img/arrow-up.png" alt=""></img></a>
    </div>

    <div class="project" id="w-jobigo">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 left-column">
            <div class="photo">
              <img src="img/projects/jobigo-page.jpg" class="" alt="" />
            </div>
          </div>
          <div class="col-sm-6 right-column">
            <div class="name">
              Jobigo
            </div>
            <div class="title">
              IOS / Android
            </div>
            <div class="desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non nibh ac eros ullamcorper pulvinar. Aliquam vitae magna vitae turpis feugiat bibendum at vitae metus. Aenean ac eros odio. Pellentesque posuere, mi vitae bibendum accumsan, orci quam auctor eros, id rhoncus elit erat a nulla. Donec ac tortor vitae odio sodales convallis vel in sem. Nunc luctus pharetra lectus, a feugiat mauris vehicula ut. Ut lobortis commodo arcu ac sodales.
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="project" id="w-jti">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="name">
              OOS Form<br>
              JTI
            </div>
            <div class="title">
              IOS / Android
            </div>
            <div class="desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non nibh ac eros ullamcorper pulvinar. Aliquam vitae magna vitae turpis feugiat bibendum at vitae metus. Aenean ac eros odio. Pellentesque posuere, mi vitae bibendum accumsan, orci quam auctor eros, id rhoncus elit erat a nulla. Donec ac tortor vitae odio sodales convallis vel in sem. Nunc luctus pharetra lectus, a feugiat mauris vehicula ut. Ut lobortis commodo arcu ac sodales.
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="project" id="w-buro">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 left-column">
            <div class="name">
              Buro<br>Interiors
            </div>
            <div class="title">
              AMP / Website
            </div>
            <div class="desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non nibh ac eros ullamcorper pulvinar. Aliquam vitae magna vitae turpis feugiat bibendum at vitae metus. Aenean ac eros odio. Pellentesque posuere, mi vitae bibendum accumsan, orci quam auctor eros, id rhoncus elit erat a nulla.
            </div>
          </div>
          <div class="col-sm-6 right-column">
            <div class="photo">
              <img src="img/projects/buro-page.jpg" class="" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="cb-footer" id="footer">
      <div class="container">
        <div class="row">
          <div class="cb-footer-section show-mobile">
            <div class="cb-logo">
              <a href="#"><img class="fullwidth" src="img/cb-logo.svg" alt=""></img></a>
            </div>
            <div class="cb-logo-vert">
              <a href="#"><img class="fullwidth" src="img/cb-logo-vert.svg" alt=""></img></a>
            </div>
          </div>
          <div class="cb-footer-section">
            <p class="contact-city-text">Almaty</p>
            <div class="contact-hint-text">+7 777 777 77 77</div>
            <div class="contact-hint-text">Kazakhstan, Almaty, Naymanbayev St, 56</div>
            <div class="contact-button">
            <button type="button">Get in Touch</button></div>
          </div>
          <div class="cb-footer-section">
            <p class="contact-city-text">Dublin</p>
            <div class="contact-hint-text">+56 777 77 77</div>
            <div class="contact-hint-text">Ireland, Dublin, Some province, 115/7</div>
            <div class="contact-button">
            <button type="button">Get in Touch</button></div>
          </div>
          <div class="cb-footer-section mobile-only">
            <div class="contact-button"><button type="button">Contact us</button></div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </div>
  </body>
</html>