$(document).ready(function() {

  $.getJSON('/output/get_categories')
    .done(function(json) {
      $.each(json, function(key, val) {
        $('select[name=package_category]').append('<option value="' + val.ctg_id + '">' + val.ctg_name + '</option>');
      });
    });

    $.getJSON('/output/get_environments')
      .done(function(json) {
        each_col = json.length / 2;
        $.each(json, function(key, val) {
          if($('.environments-first li').length>each_col) {
            $('.environments-last').append('<li class="list-group-item">'+
                val.env_name +
                '<div class="pull-right">'+
                    '<label class="switch">'+
                      '<input name="package_environments[]" value="'+ val.env_id +'" type="checkbox">'+
                      '<span class="slider round"></span>'+
                    '</label>'+
                '</div>'+
            '</li>');
          } else {
            $('.environments-first').append('<li class="list-group-item">'+
                val.env_name +
                '<div class="pull-right">'+
                    '<label class="switch">'+
                      '<input name="package_environments[]" value="'+ val.env_id +'" type="checkbox">'+
                      '<span class="slider round"></span>'+
                    '</label>'+
                '</div>'+
            '</li>');
          }

        });
      });

    $.getJSON('/output/get_cities')
    .done(function(json) {
      $.each(json, function(key, val) {
        $('select[name=package_location]').append('<option value="'+ val.cty_id +'">'+ val.cty_name +'</option>');
      });
    });

    $('select[name=package_location]').change(function() {
      $('select[name=package_state]').empty().attr('disabled', false).attr('required', true);
      $.getJSON('/output/get_states', { city: $(this).val() })
      .done(function(json) {
        $.each(json, function(key, val) {
          $('select[name=package_state]').append('<option value="'+ val.stt_id +'">'+ val.stt_name +'</option>');
        });
        $('select[name=package_state]').attr('disabled', false).attr('required', true);
      });
    });

    $.getJSON('/output/get_periods')
      .done(function(json) {
        $.each(json, function(key, val) {
          $('.periods').append('<li class="list-group-item">'+
              val.prd_name +
              '<div class="pull-right">'+
                  '<label class="switch">'+
                    '<input name="package_periods[]" value="'+ val.prd_id +'" type="checkbox">'+
                    '<span class="slider round"></span>'+
                  '</label>'+
              '</div>'+
          '</li>');
        });
      });
});

$('select[name=package_category]').change(function() {
  $('select[name=package_profession]').empty();
  $('select[name=package_category] option:first').remove();
  $.getJSON('/output/get_professions/' + $(this).val())
    .done(function(json) {
      $('select[name=package_profession]').attr('disabled', false).attr('required', true).append('<option value="">Alan Bilgisi Seçin</option>');
      $.each(json, function(key, val) {
        $('select[name=package_profession]').append('<option value="' + val.prf_id + '">' + val.prf_name + '</option>');
      });
    });
});


function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    document.getElementById(cityName).style.display = "block";
}

$('select[name=cover-toggle]').change(function() {
  if($(this).val()=='profile') {
    $('.custom-cover-upload').hide();
  } else {
    $('.custom-cover-upload').show();
  }
});


//IMG BEGIN
$(document).ready(function() {
    $image_crop = $('#crop_image').croppie({
     enableExif: true,
     viewport: {
       width:565,
       height:565,
       type:'square' //circle
     },
     boundary:{
       width:600,
       height:600
     }
   });

   $('#crop_image').appendTo('#m_modal_1 .modal-body');
  });

  $('input[name=custom-image]').change(function() {
    $('#m_modal_1').modal();
    //function begin
    var a=(this.files[0].size);
    if(a > 5000000) {
        alert('Resmin boyutu en fazla 5 MB olmalıdır.');
    } else {
      var file = this.files[0];
      var fileType = file["type"];
      var ValidImageTypes = ["image/gif", "image/jpeg", "image/png", "image/jpg"];
      if ($.inArray(fileType, ValidImageTypes) < 0) {
           alert('Yalnızca gif, jpeg, png, jpg türünde bir dosya seçiniz.');
      } else {
        var reader = new FileReader();
        reader.onload = function (event) {
        $image_crop.croppie('bind', {
          url: event.target.result
        }).then(function(){
          console.log('jQuery bind complete');
        });
      }
      reader.readAsDataURL(this.files[0]);
      }
    }
    //function end
  });

  $('.btn-crop-cancel').click(function() {
    $('input[name=custom-image]').val('');
  });

  $('.btn-crop').click(function(event){
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
      $('input[name=img-source]').val(response);
      $('#m_modal_1').modal('toggle');
    })
  });
//IMG END

$(document).ready(function() {
  $.getJSON('/manager/get_package_json/'+$('input[name=package_id]').val()+'')
  .done(function(json) {
    $('input[name=package_name]').val(json[0].pck_name);
    $('input[name=package_min_hours]').val(json[0].pck_hours_min);
    $('input[name=package_max_hours]').val(json[0].pck_hours_max);
    $('input[name=package_price]').val(json[0].pck_price);
    $('select[name=cover-toggle]').val(json[0].pck_cover);
    $('textarea[name=package_description]').val(json[0].pck_description);
    setTimeout(function(){ $('select[name=package_category]').val(json[0].pck_category_id).trigger('change'); }, 500);
    setTimeout(function(){ $('select[name=package_profession]').val(json[0].pck_profession_id); }, 1000);
    setTimeout(function(){ $('select[name=package_location]').val(json[0].pck_location_id).trigger('change'); }, 500);
    setTimeout(function(){ $('select[name=package_state]').val(json[0].pck_state_id); }, 1000);
    if(json[0].pck_cover == "custom") {
      $('input[name=current-source]').val(json[0].pck_picture);
      window.picture = true;
      $('.uploaded-cover').show().html('<p><img class="img-responsive img-thumbnail" style="max-width:300px" src="/assets/img/cover/'+ json[0].pck_picture +'"></p><p><button type="button" style="cursor:pointer" onclick="activateUpload()" class="btn btn-info btn-sm">Değiştir</button></p>');
      $('select[name=cover-toggle]').hide();
      $('select[name=custom-cover-upload]').hide();
    }

  });

  $.getJSON('/manager/get_package_tags_json/'+$('input[name=package_id]').val()+'')
  .done(function(json) {
    $.each(json, function(key, val) {
      $('.tag-list').append('<span class="badge badge-info badge-lg tags tag-'+ val.pct_id +'" onclick="removeTag('+ val.pct_id +')" title="Etiketi Sil"><i class="fa fa-remove"></i> '+ val.pct_name +'</span>');
    });
  });

  $.getJSON('/manager/get_package_env_json/'+$('input[name=package_id]').val()+'')
  .done(function(json) {
    $.each(json, function(key, val) {
      $('input[name="package_environments[]"]').each(function() {
        $(this).val() == val.pen_environment_id ? $(this).attr('checked', 'checked') : '';
      });
    });
  });

  $.getJSON('/manager/get_package_per_json/'+$('input[name=package_id]').val()+'')
  .done(function(json) {
    $.each(json, function(key, val) {
      $('input[name="package_periods[]"]').each(function() {
        $(this).val() == val.pp_period_id ? $(this).attr('checked', 'checked') : '';
      });
    });
  });

});

function removeTag(id) {
  $.post('/manager/remove_package_tag/'+id, { bod_fp_token: $('input[name=bod_fp_token]').val() })
  .done(function() {
    $('.tag-'+id).remove();
  });
}

function activateUpload() {
  $('.uploaded-cover').hide();
  $('select[name=cover-toggle]').val('profile').show();
  $('.cancel-upload').show();
}

function cancelUpload() {
  $('.custom-cover-upload').hide();
  if(window.picture) {
    $('.uploaded-cover').show();
    $('select[name=cover-toggle]').hide();
    $('.cancel-upload').hide();
  } else {
    $('select[name=cover-toggle]').show();
  }
}

$('#edit-package').submit(function(e) {
  e.preventDefault();
  if($('input[name=img-source]').val() != '') {
    $('#modal-progress').modal();
  }
  $('button').attr('disabled', true);
  $.post('/manager/package_alter', $(this).serialize())
  .done(function(data) {
    $('#modal-progress').remove();
    $('button').attr('disabled', false);
    json = $.parseJSON(data);
    if(json.type== 'success') {
      $('#modal-alert-title').text(json.title);
      $('#modal-alert-content').text(json.content);
      $('#modal-alert').modal();
    } else {
      alert(json.msg);
    }
  });
});




  var map, infoWindow;
  function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -34.397, lng: 150.644},
      zoom: 14
    });
    infoWindow = new google.maps.InfoWindow;

        var pos = {
          lat: parseFloat($('#user_latitude').val()),
          lng: parseFloat($('#user_longtitude').val())
        };

        console.log(pos);

        var marker = new google.maps.Marker({position: pos, map: map, draggable: true});

        google.maps.event.addListener(marker, 'dragend', function(event) {
            $('#user_latitude').val(event.latLng.lat());
            $('#user_longtitude').val(event.latLng.lng());
        });


        map.setCenter(pos);


  }

  function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  }
