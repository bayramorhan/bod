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
          $('select[name="package_locations[]"]').append('<option value="'+ val.cty_id +'">'+ val.cty_name +'</option>');
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

      $('select[name="package_locations[]"]').change(function() {
        $('select[name="package_states[]"]').empty().attr('disabled', false).attr('required', true);
        $.getJSON('/output/get_states', { city: $(this).val() })
        .done(function(json) {
          $.each(json, function(key, val) {
            $('select[name="package_states[]"]').append('<option value="'+ val.stt_id +'">'+ val.stt_name +'</option>');
          });
          $('select[name="package_states[]"]').attr('disabled', false).attr('required', true);
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

  $('#new-package').submit(function(e) {
    e.preventDefault();
    if($('input[name=img-source]').val() != '') {
      $('#modal-progress').modal();
    }
    $('button').attr('disabled', true);
    $.post('/manager/package_add', $(this).serialize())
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

function duplicatePrice() {
  $.get('/manager/get_price_item_content')
  .done(function(data) {
    if($('.price-list .price-list-item').length > 10) {
      alert('En fazla 10 adet fiyat seçeneği girebilirsiniz');
    } else {
      $('.price-list').append(data);
    }

  });
}

function duplicateLocation() {
  $.get('/manager/get_location_item_content')
  .done(function(data) {
    if($('.location-list .location-list-item').length > 10) {
      alert('En fazla 10 adet ilçe girebilirsiniz');
    } else {
      $('.location-list').append(data);
      $('select[name="package_locations[]"]').trigger('change');
    }
  });
}
