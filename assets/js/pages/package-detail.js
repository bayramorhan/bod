$('#booking_form').submit(function(e) {
  e.preventDefault();
  $("input:checkbox:not(:checked)").parent().parent().remove();
  $.post('/appointment/new_appointment', $(this).serialize())
  .done(function() {
    window.location = '/appointment/confirm';
  });
});
