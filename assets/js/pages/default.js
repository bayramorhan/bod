$(document).ready(function() {
  $.get('/output/get_categories')
  .done(function(json) {
    $.each($.parseJSON(json), function(key, val) {

      $('.list-of-categories').append('<div class="col-lg-3 col-md-6">'+
        '<a href="#0" class="box_cat_home">'+
          '<span class="'+ val.ctg_icon +' fa-5x"></span>'+
          '<h3>'+ val.ctg_name +'</h3>'+
          '<ul class="clearfix">'+
            '<li><strong>'+ val.total_profession +'</strong>Farklı Alan</li>'+
            '<li><strong>'+ val.total_package +'</strong>Özel Ders</li>'+
          '</ul>'+
        '</a>'+
      '</div>');
    });
  });
});
