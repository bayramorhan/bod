$('form').submit(function(e) {
  e.preventDefault();
  $('.btn-login').attr('disabled', true).html('<i class="fa fa-spinner fa-spin"></i>');
  $.post('/login/authorize_customer', $(this).serialize())
  .done(function(data) {
    console.log(data);
    $('.btn-login').attr('disabled', false).html('Giriş');
    json = $.parseJSON(data);
    if(json.type == 'failed') {
      alert(json.msg);
    } else {
      window.location = '/';
    }
  });
});
