(function($) {
  // all of js goes here

  $('.site-header .search-toggle').on('click', function(event) {
    event.preventDefault();

    $('.site-header .search-field')
      .addClass('search-field-active')
      .focus().on('blur', function(){
        $(this).removeClass('search-field-active');
      });

    // blur on input losing focus .on('blur', function(){})
  });
})(jQuery); //end of function
