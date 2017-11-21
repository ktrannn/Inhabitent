 (function searchanimate($){
  $('#search-toggle').on('click', function() {
    $('#search-field').animate( { width: 200 }, 500 ).focus();
  });

  $('#search-field').on('blur', function() {
      $('#search-field').animate( { width: 0 }, 500 );
  });

  $('#search-field').animate( { width: 0 }, 0 );
    
   
})(jQuery);