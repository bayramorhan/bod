$('form').submit(function(e) {
  e.preventDefault();
  $('button[type=submit]').attr('disabled', true);
  $.post('/trainer/register_add', $(this).serialize())
  .done(function(data) {
    $('button[type=submit]').attr('disabled', false);
    json = $.parseJSON(data);
    if(json.type!='success') {
      alert(json.msg);
    } else {
      window.location = '/trainer/confirm';
    }
  });
});

$(document).ready(function() {
$('input[name=phone]').mask('(000) 000-00000');
  $.getJSON('/output/get_category_tags')
  .done(function(json) {
    $.each(json, function(key, val) {
      $('select[name=main_profession]').append('<option value="'+ val.ctg_id +'">'+ val.ctg_name +'</option>');
    });
  });

  $.getJSON('/output/get_cities')
  .done(function(json) {
    $.each(json, function(key, val) {
      $('select[name=region]').append('<option value="'+ val.cty_id +'">'+ val.cty_name +'</option>');
    });
  });
});

$('select[name=region]').change(function() {
  $('select[name=state]').empty();
  $.getJSON('/output/get_states', { city: $(this).val() })
  .done(function(json) {
    $.each(json, function(key, val) {
      $('select[name=state]').append('<option value="'+ val.stt_id +'">'+ val.stt_name +'</option>');
    });
    $('select[name=state]').attr('disabled', false).attr('required', true);
  });
});

function capitalizeFirstLetter(string) {
    stbc = string.toLowerCase();
    return stbc.charAt(0).toUpperCase() + stbc.slice(1);
}
