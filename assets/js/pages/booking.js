$(document).ready(function() {
  console.log('booking works!');
});


$('#confirm_cash_payment').change(function() {
  if($('#confirm_card_payment').is(':checked')) {
    $('#confirm_card_payment').prop('checked', false);
    $('.btn-confirm').text('Onayla');
  }
});

$('#confirm_card_payment').change(function() {
  if($('#confirm_cash_payment').is(':checked')) {
    $('#confirm_cash_payment').prop('checked', false);
    $('.btn-confirm').text('Ödeme Yap');
  }
});

$('#payment').on('hidden.bs.collapse', function (e) {
    if(e.target.id == 'collapseOne_payment') {
      $('.pay_w_card').css('filter', 'opacity(30%) grayscale(100%)');
      $('.pay_w_cash').css('color', '#000');
    } else {
      $('.pay_w_card').css('filter', 'opacity(100%) grayscale(0%)');
      $('.pay_w_cash').css('color', '#999');
    }
})
