(function($) {
  "use strict";

  $('.toggle-password').on('click', function() {
    const input = $('#password');
    const icon = $(this).find('i');

    if (input.attr('type') === 'password') {
      input.attr('type', 'text');
      icon.removeClass('fa-eye').addClass('fa-eye-slash');
    } else {
      input.attr('type', 'password');
      icon.removeClass('fa-eye-slash').addClass('fa-eye');
    }
  });

  // Optional: saat submit, pastikan password tersembunyi lagi
  $('form').on('submit', function() {
    $('#password').attr('type', 'password');
    $('.toggle-password i').removeClass('fa-eye-slash').addClass('fa-eye');
  });

})(jQuery);


