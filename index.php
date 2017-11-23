<?php include 'const.php'; ?>
<?php include 'header.php'; ?>

    <!-- ### -->
    <div class="container index-container">
      <!-- main slider -->
      <div class="project-links">
        <ul class="list-unstyled projects-list" role="tablist" id="projects">
           <li class="active">
             <a href="#jobigo" aria-controls="jobigo">
               <h1>JobiGo app</h1>
               <p>IOS, Android</p>
             </a>
           </li>
           <li>
             <a href="#oos" aria-controls="oos">
               <h1>OOS Form app</h1>
               <p>IOS, Android</p>
             </a>
           </li>
           <li>
             <a href="#buro" aria-controls="buro">
               <h1>Buro Interiors</h1>
               <p>Website</p>
             </a>
           </li>
         </ul>
      </div>
      <div class="project-image-slider">
        <div class="tab-content text-right">
          <div class="tab-pane fade in active" id="jobigo">
            <img src="<?php echo get_template_directory_uri();?>/img/projects/jobigo-page.jpg" alt="JobiGo app">
          </div>
          <div class="tab-pane fade" id="oos">
            <img src="<?php echo get_template_directory_uri();?>/img/projects/jti-page.jpg" alt="OOS Form app">
          </div>
          <div class="tab-pane fade" id="buro">
            <img src="<?php echo get_template_directory_uri();?>/img/projects/buro-page.jpg" alt="Buro Interiors">
          </div>
        </div>
      </div>
    </div>
    <!-- ### -->

<?php include 'footer.php'; ?>
