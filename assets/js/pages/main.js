$(document).ready(function() {
  $.get('/output/get_categories')
  .done(function(json) {
    $.each($.parseJSON(json), function(key, val) {
      if(val.total_package > 0)
      $('.top-menu-category-list').append('<li><a href="javascript:void(0)"><span class="badge badge-info">'+ val.total_package +'</span> '+ val.ctg_name +'</a></li>');
    });
    $('.top-menu-category-list').append('<li><a href="/package/package_filter_category_set/0">Tümünü Listele</a></li>');
  });
});
