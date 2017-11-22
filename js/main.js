// ###
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
  if (topMenu && topMenu.length) {
    $(window).scroll(sidebar_relocate);
    sidebar_relocate();
  }
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

$('#projects a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})

// ###

