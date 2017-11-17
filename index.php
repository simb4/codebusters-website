
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="codebusters">

    <title>Codebusters</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:bold" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="animate.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

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
        <a href="index.php"><img class="fullwidth" src="img/cb-logo.svg" alt=""></img></a>
      </div>
      <div class="cb-logo-vert">
        <a href="index.php"><img class="fullwidth" src="img/cb-logo-vert.svg" alt=""></img></a>
      </div>
      <div class="cb-navs">
        <a class="cb-nav-item" href="works.php">WORKS</a>
        <a class="cb-nav-item" href="info.php">INFO</a>
      </div>
    </div>
    <div class="to-top">
      <a href="#top"><img src="img/arrow-up.png" alt=""></img></a>
    </div>
    <div class="container">
      <!-- main slider -->
      <div class="project-links">
        <ul class="list-unstyled projects-list" role="tablist" id="projects">
           <li role="presentation" class="active">
             <a href="#jobigo" aria-controls="jobigo" role="tab" data-toggle="tab">
               <h1>JobiGo app</h1>
               <p>IOS, Android</p>
             </a>
           </li>
           <li role="presentation">
             <a href="#oos" aria-controls="oos" role="tab" data-toggle="tab">
               <h1>OOS Form app</h1>
               <p>IOS, Android</p>
             </a>
           </li>
           <li role="presentation">
             <a href="#buro" aria-controls="buro" role="tab" data-toggle="tab">
               <h1>Buro Interiors</h1>
               <p>Website</p>
             </a>
           </li>
         </ul>
      </div>
      <div class="project-image-slider">
        <div class="tab-content text-right">
          <div role="tabpanel" class="tab-pane fade in active" id="jobigo">
            <img src="img/projects/jobigo.jpg" alt="JobiGo app">
          </div>
          <div role="tabpanel" class="tab-pane fade" id="oos">
            <img src="img/projects/oos.jpg" alt="OOS Form app">
          </div>
          <div role="tabpanel" class="tab-pane fade" id="buro">
            <img src="img/projects/buro.jpg" alt="Buro Interiors">
          </div>
        </div>
      </div>
    </div>

    <footer class="cb-footer" id="footer">
      <div class="container">
        <div class="row">
          <div class="cb-footer-section show-mobile">
            <div class="cb-logo">
              <a href="index.html"><img class="fullwidth" src="img/cb-logo.svg" alt=""></img></a>
            </div>
            <div class="cb-logo-vert">
              <a href="index.html"><img class="fullwidth" src="img/cb-logo-vert.svg" alt=""></img></a>
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
    <script type="text/javascript">
      $('#projects a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
      })
    </script>
  </div>
  </body>
</html>
