/*
If requested by admin UI, automatically send user to login link after X seconds
*/
(function ($) {
  if(document.getElementById('shib_login_url')!='undefined') {
    var shibDiv = $('#shib_login_url');
    setTimeout(function(){ 
      $('#shib_login_url a')[0].click();  
    }, 3000);
  }
})(jQuery);

