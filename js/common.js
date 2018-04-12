$(function(){
    'use strict';
  $('#form').on('submit', function(e){
      e.preventDefault();
      var fd = new FormData( this );
      $.ajax({
        url: 'php/mail.php',
        type: 'POST',
        contentType: false, 
        processData: false, 
        data: fd,
        success: function(){
              $('.form').find('#email').val(" "); 
      }
      });
        });
  });

  $(function(){
    'use strict';
  $('#contactform').on('submit', function(e){
      e.preventDefault();
      var fd = new FormData( this );
      $.ajax({
        url: 'php/mailFrom.php',
        type: 'POST',
        contentType: false, 
        processData: false, 
        data: fd,
        success: function(){
              $('#contactform').find('input[type=email], input[type=text], textarea').val(" "); 
      }
      });
        });
  });

