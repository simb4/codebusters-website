<?php include 'header.php'; ?>
    <!-- ### -->
    <?php include 'const.php'; ?>
    <div class="to-top">
      <a href="#top"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-up.png" alt=""></img></a>
    </div>
    <div class="container">
      <div class="row">
        <!--sidebar -->
        <div id="sidebar-anchor"></div>
        <div class="col-sm-2 cb-sidebar" id="sidebar">
          <ol class="list-unstyled">
            <li class="cb-sidebar-section"><a href="#about">About us</a></li>
            <li class="cb-sidebar-section"><a href="#services">Services</a></li>
            <li class="cb-sidebar-section"><a href="#team">team</a></li>
            <li class="cb-sidebar-section"><a href="#partners">partners</a></li>
            <li class="cb-sidebar-section"><a href="#clients">clients</a></li>
            <li class="cb-sidebar-section"><a href="#contacts">contacts</a></li>
          </ol>
          <div class="to-bottom">
            <a href="#about"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-down.png" alt=""></img></a>
          </div>
        </div><!-- /.cb-sidebar -->
        <div class="col-sm-offset-2 col-sm-10">
          <div class="cb-main">
            <!-- about -->
            <div class="cb-main-section" id="about">
              <!-- <div class="main-section-title"> about us/ </div> -->
              <div class="col-sm-12 about1">
                <div class="col-sm-5">
                  <p class="section-text">Who you gonna call?</p>
                  <p class="section-title">CODEBUSTERS_</p>
                  <p class="section-text">Agile, creative and proficient.
                  An international team of young and bright professionals who think outside of the box and craft exceptional online user experience by developing apps and responsive websites.
                  We provide a complete product cycle from brainstorming and wireframing to delivering an ultimate digital solution/result.
                  </p>
                </div>
                <div class="col-sm-7">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/about1.jpg" alt=""/>
                </div>
              </div>
              <div class="col-sm-12 about2">
                <div class="col-sm-7">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/about2.jpg" alt=""/>
                </div>
                <div class="col-sm-5">
                  <p class="section-text">Our team is cross-functionally balanced, with the best talents in development (backend, frontend, iOS, Android, DevOps, Big Data, etc.), advanced analytics, UI/UX design, product/project management and digital marketing strategy.
                  </p>
                </div>
              </div>
              <div class="col-sm-12 about3">
                <div class="col-sm-12">
                  <p class="section-text">You have an idea and looking for a team who can handle your custom product? Who you gonna call? Codebusters!
                  </p>
                  <p class="hint-text">[music plays: Ray Parker Jr. - Ghostbusters] </p>
                </div>
              </div>
            </div>
            <!-- services -->
            <div class="cb-main-section" id="services">
              <div class="main-section-title"> our services/ </div>
              <div class="service-section">
                <div class="subsection with-img">
                  <img class="fullwidth" src="<?php echo get_template_directory_uri(); ?>/img/services/services_app.jpg" alt="" />
                </div>
                <div class="subsection">
                  <div class="subsection-text">
                    <input type="checkbox" id="menu-app"/>
                    <label for="menu-app" class="title">
                      App development
                      <img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/arrow-right.svg" alt="" />
                    </label>
                    <p class="text"> We build native iOS and Android finest apps for all business requirements and user experience. </p>
                  </div>
                </div>
              </div>

              <div class="service-section">
                <div class="subsection">
                  <div class="subsection-text">
                    <input type="checkbox" id="menu-web"/>
                    <label for="menu-web" class="title">
                      Web development
                      <img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/arrow-right.svg" alt="" />
                    </label>
                    <p class="text"> We develop bespoke and in-house web systems for any business requirements, from SMB to enterprise and official government bodies. </p>
                  </div>
                </div>
                <div class="subsection with-img">
                  <img class="fullwidth" src="<?php echo get_template_directory_uri(); ?>/img/services/services_web.jpg" alt="" />
                </div>
              </div>

              <div class="service-section">
                <div class="subsection with-img">
                  <img class="fullwidth" src="<?php echo get_template_directory_uri(); ?>/img/services/services_ui.jpg" alt="" />
                </div>
                <div class="subsection">
                  <div class="subsection-text">
                    <input type="checkbox" id="menu-ui"/>
                    <label for="menu-ui" class="title">
                      UI/UX design
                      <img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/arrow-right.svg" alt="" />
                    </label>
                    <p class="text"> For web and app design process, we can help you to define the types of users who visit your business, where and how they will want to navigate to and what is the call of action. We can then plan user pathways with wireframing that supports clear messaging and an outstanding user experience. </p>
                  </div>
                </div>
              </div>

              <div class="service-section">
                <div class="subsection">
                  <div class="subsection-text">
                    <input type="checkbox" id="menu-marketing"/>
                    <label for="menu-marketing" class="title">
                      Digital Marketing
                      <img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/arrow-right.svg" alt="" />
                    </label>
                    <p class="text"> Your online presence might only be the first step. We can help to optimize your online marketing campaigns by getting the rights audience, implementing and triggering the right pixels, adjusting correct floodlight activities and analyzing the data. All this to build brand loyalty and deliver measurable results. </p>
                  </div>
                </div>
                <div class="subsection with-img">
                  <img class="fullwidth" src="<?php echo get_template_directory_uri(); ?>/img/services/services_marketing.jpg" alt="" />
                </div>
              </div>

              <div class="service-section">
                <div class="subsection with-img">
                  <img class="fullwidth" src="<?php echo get_template_directory_uri(); ?>/img/services/services_prototype.jpg" alt="" />
                </div>
                <div class="subsection">
                  <div class="subsection-text">
                    <input type="checkbox" id="menu-prototype"/>
                    <label for="menu-prototype" class="title">
                      Prototype
                      <img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/arrow-right.svg" alt="" />
                    </label>
                    <p class="text"> We craft a prototype of your idea and bring it to life, which enables you to visualise your app or functional website to gain significant feedback from potential users. </p>
                  </div>
                </div>
              </div>

              <div class="service-section">
                <div class="subsection">
                  <div class="subsection-text">
                    <input type="checkbox" id="menu-consulting"/>
                    <label for="menu-consulting" class="title">
                      Consulting
                      <img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/arrow-right.svg" alt="" />
                    </label>
                    <p class="text"> Talk to us about your next big idea confidentially and we can accurately advise you on how to make the right approach and get your niche market. </p>
                  </div>
                </div>
                <div class="subsection with-img">
                  <img class="fullwidth" src="<?php echo get_template_directory_uri(); ?>/img/services/services_consulting.jpg" alt="" />
                </div>
              </div>
            </div>

            <!-- team -->
            <div class="cb-main-section" id="team">
              <div class="main-section-title"> our team/ </div>
              <div class="members">
              <?php
                for ($i = 0; $i < count($memberList); $i++) {
                  echo '<div><div class="member">';
                    echo '<img src='.get_template_directory_uri().'/'.$memberList[$i]->photo.' alt="codebuster">';
                    
                    echo '<div class="info-desktop">';
                      echo '<h1>'.$memberList[$i]->name.'</h1>';
                      echo '<span>'.$memberList[$i]->status.'</span></div>';

                    echo '</div><div class="info-mobile">';
                      echo '<h1>'.$memberList[$i]->name.'</h1>';
                      echo '<span>'.$memberList[$i]->status.'</span>';
                  echo '</div></div>';
                }
              ?>
              </div>
            </div>

            <!-- partners -->
            <div class="cb-main-section" id="partners">
              <div class="main-section-title"> our partners/ </div>
              <div class="team-grid">
                <div class="team-col col-xs-6">
                  <div class="box sdu">
                    <div class="content">
                      <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partners-sdu.svg" />
                      </div>
                      <div class="box-name-title">
                        <div class="box-name">SDU</div>
                        <div class="box-title">Kazakhstan</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="team-col col-xs-6">
                  <div class="box openu">
                    <div class="content">
                      <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partners-openu.svg" />
                      </div>
                      <div class="box-name-title">
                        <div class="box-name">Almaty OpenU</div>
                        <div class="box-title">Kazakhstan</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="team-grid">
                <div class="team-col col-xs-12">
                  <div class="box kbtu">
                    <div class="content">
                      <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/partners/partners-kbtu.svg" />
                      </div>
                      <div class="box-name-title">
                        <div class="box-name">KBTU</div>
                        <div class="box-title">Kazakhstan</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- clients -->
            <div class="cb-main-section" id="clients">
              <div class="main-section-title"> our clients/ </div>
              <div class="team-grid">
                <div class="team-col col-xs-6 col-sm-4">
                  <div class="box cl1">
                    <div class="content">
                      <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/clients/power.svg" />
                      </div>
                      <div class="box-name-title">
                        <div class="box-name">Power Wifi</div>
                        <div class="box-title">Kazakhstan</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="team-col col-xs-6 col-sm-4">
                  <div class="box cl2">
                    <div class="content">
                      <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/clients/tech.svg" />
                      </div>
                      <div class="box-name-title">
                        <div class="box-name">Tech Garden</div>
                        <div class="box-title">Kazakhstan</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="team-col col-xs-6 col-sm-4">
                  <div class="box cl3">
                    <div class="content">
                      <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/clients/jti.svg" />
                      </div>
                      <div class="box-name-title">
                        <div class="box-name">JTI</div>
                        <div class="box-title">Kazakhstan</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="team-col col-xs-6 col-sm-4">
                  <div class="box cl5">
                    <div class="content">
                      <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/clients/kaztour.svg" />
                      </div>
                      <div class="box-name-title">
                        <div class="box-name">Kaztour</div>
                        <div class="box-title">Kazakhstan</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="team-col col-xs-6 col-sm-4">
                  <div class="box cl6">
                    <div class="content">
                      <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/clients/incipient.svg" />
                      </div>
                      <div class="box-name-title">
                        <div class="box-name">Incipient</div>
                        <div class="box-title">Kazakhstan</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="team-col col-xs-6 col-sm-4">
                  <div class="box cl7">
                    <div class="content">
                      <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/clients/air.svg" />
                      </div>
                      <div class="box-name-title">
                        <div class="box-name">Air Astana</div>
                        <div class="box-title">Kazakhstan</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="team-col col-xs-6 col-sm-4">   
                  <div class="box cl8">   
                    <div class="content">   
                      <div class="logo">    
                        <img src="<?php echo get_template_directory_uri(); ?>/img/clients/beeline.svg" />   
                      </div>    
                      <div class="box-name-title">    
                        <div class="box-name">Beeline</div>   
                        <div class="box-title">Kazakhstan</div>   
                      </div>    
                    </div>    
                  </div>    
                </div>
                <div class="team-col col-xs-6 col-sm-4">
                  <div class="box cl9">
                    <div class="content">
                      <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/clients/forbes.svg" />
                      </div>
                      <div class="box-name-title">
                        <div class="box-name">Forbes</div>
                        <div class="box-title">Kazakhstan</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="team-col col-xs-6 col-sm-4">
                  <div class="box cl10">
                    <div class="content">
                      <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/clients/verigram.svg" />
                      </div>
                      <div class="box-name-title">
                        <div class="box-name">Verigram</div>
                        <div class="box-title">Kazakhstan</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- contacts -->
            <div class="cb-main-section" id="contacts">
              <div class="main-section-title"> our contacts/ </div>
              <div class="contacts-block">
                <div class="contact-block">
                  <div class="address">
                    <div class="bold-text"> Almaty, Kazakhstan </div>
                    <div class="hint-text"> +7 701 542 55 05 </div>
                    <div class="hint-text"> hi@codebusters.com </div>
                    <div class="hint-text"> Kazakhstan, Almaty, Naymanbayev str, 56 </div>
                  </div>
                  <div id="map-almaty" class="map"></div>
                </div>
                <div class="contact-block">
                  <div class="address">
                    <div class="bold-text"> Dublin, Ireland </div>
                    <div class="hint-text"> +353 87 363 7948 </div>
                    <div class="hint-text"> hi@codebusters.com </div>
                    <div class="hint-text"> 38 College Gate, Townsend Str.,Dublin 2, Dublin, Ireland </div>
                  </div>
                  <div id="map-dublin" class="map">
                  </div>
                </div>
              </div>
              <div class="input-block">
                <div class="form-group">
                  <input type="text" required="required"/>
                  <label class="control-label" for="input">Name</label><i class="bar"></i>
                </div>
                <div class="form-group">
                  <input type="text" required="required"/>
                  <label class="control-label" for="input">Email</label><i class="bar"></i>
                </div>
                <div class="form-group">
                  <input type="text" required="required"/>
                  <label class="control-label" for="input">Message</label><i class="bar"></i>
                </div>
                <div class="contact-button">
                  <button type="button">submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://api-maps.yandex.ru/2.1/?lang=en_US" type="text/javascript"></script>
    <script type="text/javascript">
      ymaps.ready(init);
      var alaMap, dubMap;
      function init(){
          myMap = new ymaps.Map("map-almaty", {
              center: [43.216406, 76.975192],
              zoom: 16
          });
          dubMap = new ymaps.Map("map-dublin", {
              center: [55.76, 37.64],
              zoom: 16
          });
      }
    </script>
    <script type="text/javascript">
      // Cache selectors
      var topMenu = $("#sidebar"),
          // All list items
          menuItems = topMenu.find(".cb-sidebar-section a"),
          // Anchors corresponding to menu items
          scrollItems = menuItems.map(function(){
            var item = $($(this).attr("href"));
            if (item.length) { return item; }
          });
      $(function () {
          $(window).scroll(sidebar_relocate);
          sidebar_relocate();
      });
      function sidebar_relocate() {
          var window_top = $(window).scrollTop();
          var window_height = $(window).height();
          var window_bot = window_top + window_height;

          var div_top = $('#sidebar-anchor').offset().top;
          var div_height = $('#sidebar').height();

          var footer_top = $('#footer').offset().top + Math.max(window_height - div_height, 0);
          if (window_top > div_top) {
              if (window_bot >= footer_top) {
                $('#sidebar').removeClass('stick');
                $('#sidebar').addClass('at-bottom');
              }
              else {
                $('#sidebar').addClass('stick');
                $('#sidebar').removeClass('at-bottom');
              }
          } else {
            $('#sidebar').removeClass('at-bottom');
              $('#sidebar').removeClass('stick');
          }
          // Get id of current scroll item
          var cur = scrollItems.map(function(){
           if ($(this).offset().top <= window_top + window_height/2)
             return this;
          });
          // Get the id of the current element
          var id = 'about';
          if (cur && cur.length) id = cur[cur.length-1][0].id;
          // Set/remove active class
          menuItems
           .parent().removeClass("active")
           .end().filter("[href='#"+id+"']").parent().addClass("active");
      }

      $(document).on('click', 'a[href^="#"]', function (event) {
          event.preventDefault();
          var href = $.attr(this, 'href');
          $('.cb-sidebar-section a').removeClass('active');
          console.log($('a[href="'+href+'"]')[0]);
          $('a[href="'+href+'"]').addClass('active');
          $('html, body').animate({
              scrollTop: $($.attr(this, 'href')).offset().top
          }, 500, function () {
              window.location.hash = href;
          });
      });
    </script>
    <!-- ### -->

<?php include 'footer.php'; ?>
