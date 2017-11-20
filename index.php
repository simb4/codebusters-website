
<?php include 'test.php'; ?>
<?php include 'header.php'; ?>

    <!-- ### -->
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
            <img src="<?php echo get_template_directory_uri();?>/img/projects/jobigo-page.jpg" alt="JobiGo app">
          </div>
          <div role="tabpanel" class="tab-pane fade" id="oos">
            <img src="<?php echo get_template_directory_uri();?>/img/projects/jti-page.jpg" alt="OOS Form app">
          </div>
          <div role="tabpanel" class="tab-pane fade" id="buro">
            <img src="<?php echo get_template_directory_uri();?>/img/projects/buro-page.jpg" alt="Buro Interiors">
          </div>
        </div>
      </div>
    </div>
    <!-- ### -->

<?php include 'footer.php'; ?>

