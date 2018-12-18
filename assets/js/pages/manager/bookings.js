function approveBooking(booking_id, customer_id) {
  $('#approveModal').modal();
  $('#approveModal').data('booking', booking_id);
  $('#approveModal').data('customer', customer_id);
}

$('.btn-approve').click(function() {
  $('#approveModal').modal('toggle');
  $.post('/manager/update_booking_status', { bid: $('#approveModal').data('booking'), cid: $('#approveModal').data('customer'), bod_fp_token: $('input[name=bod_fp_token]').val(), status: '2' })
  .done(function() {
    location.reload();
  });
});

function denyBooking(booking_id, customer_id) {
  $('#denyModal').modal();
  $('#denyModal').data('booking', booking_id);
  $('#denyModal').data('customer', customer_id);
}

$('.btn-deny').click(function() {
  $('#denyModal').modal('toggle');
  $.post('/manager/update_booking_status', { bid: $('#denyModal').data('booking'), cid: $('#denyModal').data('customer'), bod_fp_token: $('input[name=bod_fp_token]').val(), status: '3', comment: $('#denyModal textarea').val() })
  .done(function() {
    location.reload();
  });
});

function cancelBooking(booking_id, customer_id) {
  $('#cancelModal').modal();
  $('#cancelModal').data('booking', booking_id);
  $('#cancelModal').data('customer', customer_id);
}

$('.btn-cancel').click(function() {
  $('#cancelModal').modal('toggle');
  $.post('/manager/update_booking_status', { bid: $('#cancelModal').data('booking'), cid: $('#cancelModal').data('customer'), bod_fp_token: $('input[name=bod_fp_token]').val(), status: '5', comment: $('#cancelModal textarea').val() })
  .done(function() {
    location.reload();
  });
});
