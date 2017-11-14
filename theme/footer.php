
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

    <script>
      // Cache selectors
      var topMenu = $("#sidebar"),
          // All list items
          menuItems = topMenu.find(".cb-sidebar-section a"),
          // Anchors corresponding to menu items
          scrollItems = menuItems.map(function(){
            var item = $($(this).attr("href"));
            if (item.length) { return item; }
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
      $(function () {
          $(window).scroll(sidebar_relocate);
          sidebar_relocate();
      });
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
  </div>
  <?php wp_footer(); ?> 
  </body>
</html>