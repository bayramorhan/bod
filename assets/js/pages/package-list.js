(function(A) {
	if (!Array.prototype.forEach)
		A.forEach = A.forEach || function(action, that) {
			for (var i = 0, l = this.length; i < l; i++)
				if (i in this)
					action.call(that, this[i], i, this);
			};

		})(Array.prototype);

		var
		mapObject,
		markers = [],
		markersData = {
			'Doctors': []

		};

		var geocoder = new google.maps.Geocoder();
    var address = $('#distinct').val() + ',' + $('#region').val();
		var clat = null;
		var clong = null;
    geocoder.geocode({ 'address': address }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            clat = results[0].geometry.location.lat();
            clong = results[0].geometry.location.lng();
        }
			});

setTimeout(function(){
	if(clat==null) {
		clat = '41.006744';
		clong = '28.976472';
	}
	var mapOptions = {
		zoom: 12,
		center: new google.maps.LatLng(clat, clong),
		mapTypeId: google.maps.MapTypeId.ROADMAP,

		mapTypeControl: false,
		mapTypeControlOptions: {
			style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
			position: google.maps.ControlPosition.LEFT_CENTER
		},
		panControl: false,
		panControlOptions: {
			position: google.maps.ControlPosition.TOP_RIGHT
		},
		zoomControl: true,
		zoomControlOptions: {
			style: google.maps.ZoomControlStyle.LARGE,
			position: google.maps.ControlPosition.RIGHT_BOTTOM
		},
		 scrollwheel: false,
		scaleControl: false,
		scaleControlOptions: {
			position: google.maps.ControlPosition.LEFT_CENTER
		},
		streetViewControl: true,
		streetViewControlOptions: {
			position: google.maps.ControlPosition.RIGHT_BOTTOM
		},
		styles: []
	};

	var
	marker;
	mapObject = new google.maps.Map(document.getElementById('map_listing'), mapOptions);
}, 500);


		if (navigator.geolocation) {
			setTimeout(function(){navigator.geolocation.getCurrentPosition(function(position) {
				pos = {
					lat: position.coords.latitude,
					lng: position.coords.longitude
				};
        $('#map_listing').show();
        $('.pending-geolocation').remove();
				//json start
				$.getJSON('/output/get_package_list', { package_list: true, lat: pos.lat, lng: pos.lng })
				.done(function(json) {
            $.get('/output/get_package_list_count', { package_list: true, lat: pos.lat, lng: pos.lng })
            .done(function(data) {
              if(data > $('.list-packages div').length) {
                $('.area-load-more').html('<button class="btn btn-info btn-sm load-more" onclick="loadMore('+ pos.lat +', '+ pos.lng +')">Daha Fazla Yükle</button>');
              }
            });

					$.each(json, function(key, val) {
            if(val.pck_cover == 'profile') {
              cover_end = '/assets/img/trainer/'+ val.pck_picture;
            } else {
              cover_end = '/assets/img/cover/'+ val.pck_picture;
            }

            $('.list-packages').append('<div class="strip_list wow fadeIn">'+
  						'<a href="#0" class="wish_bt"></a>'+
  						'<figure>'+
  							'<a href="detail-page.html"><img src="'+ cover_end +'" alt="" class="img-fluid"></a>'+
  						'</figure>'+
							'<div class="wrapper">' +
  						'<small>'+ val.trn_firstname +' '+ val.trn_lastname +' | <span style="font-weight:normal">'+ val.trn_job +'</span></small>'+
  						'<h3>'+ val.pck_name +'</h3>'+
  						'<p class="package-description">'+ val.pck_description +'</p>'+
  						'<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>('+ val.pck_review +')</small></span>'+
  						'<a href="badges.html" data-toggle="tooltip"  title="Badge Level" class="badge_list_1"><img src="/assets/img/badges/badge_1.svg" width="15" height="15" alt=""></a>'+
							'</div>'+
  						'<ul>'+
  							'<li><a href="#0" onclick="onHtmlClick(\'Doctors\', '+ val.pck_id +')" class="btn_listing">Haritada Göster</a></li>'+
  							'<li>'+ val.cty_name +' / '+ val.stt_name +'</li>'+
  							'<li><i class="fa fa-map-marker"></i> '+ parseFloat(val.distance).toFixed(2) +' km</li>'+
  							'<li><a href="/package/package_detail/'+ val.pck_id +'">Görüntüle</a></li>'+
  						'</ul>'+
  					'</div>');

						package = {
							name: null,
							location_latitude: null,
							location_longitude: null,
							map_image_url: null,
							type: null,
							url_detail: null,
							name_point: null,
							description_point: null,
							get_directions_start_address: null,
							package_id: null,
							price: null,
							ctg_name: null
						};

						if(val.pck_cover == 'profile') {
							cover_end = '/assets/img/trainer/'+val.pck_picture;
						} else {
							cover_end = '/assets/img/cover/'+val.pck_picture;
						}
						package.name = val.trn_firstname + ' ' + val.trn_lastname;
						package.location_latitude = parseFloat(val.pck_latitude);
						package.location_longitude = parseFloat(val.pck_longtitude);
						package.map_image_url = cover_end;
						package.type = val.trn_job;
						package.url_detail = '/package/'+val.pck_id;
						package.name_point = val.trn_firstname + ' ' + val.trn_lastname;
						package.description_point = val.pck_name;
						package.get_directions_start_address = '';
						package.package_id = val.pck_id;
						package.price = val.pck_price;
						package.ctg_name = val.ctg_name;

						markersData.Doctors.push(package);
					});



          mapObject.setCenter(pos);
          markers = [];
					for (var key in markersData)
						markersData[key].forEach(function (item) {
							marker = new google.maps.Marker({
								position: new google.maps.LatLng(item.location_latitude, item.location_longitude),
								map: mapObject,
								icon: '/assets/img/pins/' + key + '.png',
							});

							markers.push(marker);

							google.maps.event.addListener(marker, 'click', (function () {
					closeInfoBox();
					getInfoBox(item).open(mapObject, this);
					mapObject.setCenter(new google.maps.LatLng(item.location_latitude, item.location_longitude));
					}));


						});

						function hideAllMarkers () {
							for (var key in markers)
								markers[key].forEach(function (marker) {
									marker.setMap(null);
								});
						};

						function toggleMarkers (category) {
							hideAllMarkers();
							closeInfoBox();

							if ('undefined' === typeof markers[category])
								return false;
							markers[category].forEach(function (marker) {
								marker.setMap(mapObject);
								marker.setAnimation(google.maps.Animation.DROP);

							});
						};

						function closeInfoBox() {
							$('div.infoBox').remove();
						};

						function getInfoBox(item) {
							return new InfoBox({
								content:
								'<div class="marker_info">' +
								'<figure><a href='+ item.url_detail +'><img src="' + item.map_image_url + '" alt="Image"></a></figure>' +
								'<small>'+ item.ctg_name +'</small>' +
								'<h3><a href='+ item.url_detail +'>'+ item.name_point +'</a></h3>' +
								'<span>'+ item.description_point +'</span>' +
								'<div class="marker_tools">' +
								'<a href="/package/'+ item.package_id +'">Görüntüle</a>' +
									'</div>' +
								'</div>',
								disableAutoPan: false,
								maxWidth: 0,
								pixelOffset: new google.maps.Size(10, 105),
								closeBoxMargin: '',
								closeBoxURL: "/assets/img/close_infobox.png",
								isHidden: false,
								alignBottom: true,
								pane: 'floatPane',
								enableEventPropagation: true
							});
						};



				});
				//json end

			}, function() {
				// handleLocationError(true, infoWindow, map.getCenter());
				$('#map_listing').before('<div class="alert alert-info">Konum bilgisine izin verilmediğinden yakınınızdaki özel dersler getirilemiyor. Sadece size yakın olan özel dersleri görüntülemek için konum hizmetini açınız.</div>');
				//json start
        $('#map_listing').show();
        $('.pending-geolocation').remove();
				$.getJSON('/output/get_package_list', { package_list: true })
				.done(function(json) {

          $.get('/output/get_package_list_count', { package_list: true })
          .done(function(data) {
            if(data > $('.list-packages div').length) {
              $('.area-load-more').html('<button class="btn btn-info btn-sm load-more" onclick="loadMore()">Daha Fazla Yükle</button>');
            }
          });

					$.each(json, function(key, val) {

            if(val.pck_cover == 'profile') {
              cover_end = '/assets/img/trainer/'+ val.pck_picture;
            } else {
              cover_end = '/assets/img/cover/'+ val.pck_picture;
            }
            $('.list-packages').append('<div class="strip_list wow fadeIn">'+
  						'<a href="#0" class="wish_bt"></a>'+
  						'<figure>'+
  							'<a href="detail-page.html"><img src="'+ cover_end +'" alt=""></a>'+
  						'</figure>'+
  						'<small>'+ val.trn_firstname +' '+ val.trn_lastname +' | <span style="font-weight:normal">'+ val.trn_job +'</span></small>'+
  						'<h3>'+ val.pck_name +'</h3>'+
  						'<p class="package-description">'+ val.pck_description +'</p>'+
  						'<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>('+ val.pck_review +')</small></span>'+
  						'<a href="badges.html" data-toggle="tooltip"  title="Badge Level" class="badge_list_1"><img src="/assets/img/badges/badge_1.svg" width="15" height="15" alt=""></a>'+
  						'<ul>'+
  							'<li><a href="#0" onclick="onHtmlClick(\'Doctors\', '+ val.pck_id +')" class="btn_listing">Haritada Göster</a></li>'+
  							'<li>'+ val.cty_name +' / '+ val.stt_name +'</li>'+
  							'<li><a href="/package/package_detail/'+ val.pck_id +'">Görüntüle</a></li>'+
  						'</ul>'+
  					'</div>');

						package = {
							name: null,
							location_latitude: null,
							location_longitude: null,
							map_image_url: null,
							type: null,
							url_detail: null,
							name_point: null,
							description_point: null,
							get_directions_start_address: null,
							package_id: null,
							price: null,
							ctg_name: null
						};

						if(val.pck_cover == 'profile') {
							cover_end = '/assets/img/trainer/'+val.pck_picture;
						} else {
							cover_end = '/assets/img/cover/'+val.pck_picture;
						}
						package.name = val.trn_firstname + ' ' + val.trn_lastname;
						package.location_latitude = parseFloat(val.pck_latitude);
						package.location_longitude = parseFloat(val.pck_longtitude);
						package.map_image_url = cover_end;
						package.type = val.trn_job;
						package.url_detail = '/package/'+val.pck_id;
						package.name_point = val.trn_firstname + ' ' + val.trn_lastname;
						package.description_point = val.pck_name;
						package.get_directions_start_address = '';
						package.package_id = val.pck_id;
						package.price = val.pck_price;
						package.ctg_name = val.ctg_name;

						markersData.Doctors.push(package);
					});


          markers = [];
					for (var key in markersData)
						markersData[key].forEach(function (item) {
							marker = new google.maps.Marker({
								position: new google.maps.LatLng(item.location_latitude, item.location_longitude),
								map: mapObject,
								icon: '/assets/img/pins/' + key + '.png',
							});

							markers.push(marker);

							google.maps.event.addListener(marker, 'click', (function () {
					closeInfoBox();
					getInfoBox(item).open(mapObject, this);
					mapObject.setCenter(new google.maps.LatLng(item.location_latitude, item.location_longitude));
					}));


						});

						function hideAllMarkers () {
							for (var key in markers)
								markers[key].forEach(function (marker) {
									marker.setMap(null);
								});
						};

						function toggleMarkers (category) {
							hideAllMarkers();
							closeInfoBox();

							if ('undefined' === typeof markers[category])
								return false;
							markers[category].forEach(function (marker) {
								marker.setMap(mapObject);
								marker.setAnimation(google.maps.Animation.DROP);

							});
						};

						function closeInfoBox() {
							$('div.infoBox').remove();
						};

						function getInfoBox(item) {
							return new InfoBox({
								content:
								'<div class="marker_info">' +
								'<figure><a href='+ item.url_detail +'><img src="' + item.map_image_url + '" alt="Image"></a></figure>' +
								'<small>'+ item.ctg_name +'</small>' +
								'<h3><a href='+ item.url_detail +'>'+ item.name_point +'</a></h3>' +
								'<span>'+ item.description_point +'</span>' +
								'<div class="marker_tools">' +
								'<a href="/package/'+ item.package_id +'">Görüntüle</a>' +
									'</div>' +
								'</div>',
								disableAutoPan: false,
								maxWidth: 0,
								pixelOffset: new google.maps.Size(10, 105),
								closeBoxMargin: '',
								closeBoxURL: "/assets/img/close_infobox.png",
								isHidden: false,
								alignBottom: true,
								pane: 'floatPane',
								enableEventPropagation: true
							});
						};



				});
				//json end
			})}, 500);
		}


		function getIndexByAttribute(list, attr, val){
    var result = null;
    $.each(list, function(index, item){
        if(item[attr].toString() == val.toString()){
           result = index;
           return false;     // breaks the $.each() loop
        }
    });
    return result;
}

		function onHtmlClick(location_type, package_id){
      console.log(markers);
			var index = getIndexByAttribute(markersData.Doctors, 'package_id', package_id);
		    google.maps.event.trigger(markers[index], "click");
}

function loadMore(latitude, longtitude) {
  //json start
  current_offset = $('.list-packages div').length;
  $.getJSON('/output/get_package_list/'+current_offset, { package_list: true, lat: latitude, lng: longtitude })
  .done(function(json) {

      $.get('/output/get_package_list_count', { package_list: true, lat: latitude, lng: longtitude })
      .done(function(data) {
        if(data > $('.list-packages div').length) {
          $('.area-load-more').html('<button class="btn btn-info btn-sm load-more" onclick="loadMore('+ latitude +', '+ longtitude +')">Daha Fazla Yükle</button>');
        } else {
          $('.area-load-more').remove();
        }
      });

    $.each(json, function(key, val) {
      if(val.pck_cover == 'profile') {
        cover_end = '/assets/img/trainer/'+ val.pck_picture;
      } else {
        cover_end = '/assets/img/cover/'+ val.pck_picture;
      }

			if(val.distance) {
				total_distance = '<li><i class="fa fa-map-marker"></i> '+ parseFloat(val.distance).toFixed(2) +' km</li>';
			} else {
				total_distance = '';
			}
      $('.list-packages').append('<div class="strip_list wow fadeIn">'+
        '<a href="#0" class="wish_bt"></a>'+
        '<figure>'+
          '<a href="detail-page.html"><img src="'+ cover_end +'" alt=""></a>'+
        '</figure>'+
        '<small>'+ val.trn_firstname +' '+ val.trn_lastname +' | <span style="font-weight:normal">'+ val.trn_job +'</span></small>'+
        '<h3>'+ val.pck_name +'</h3>'+
        '<p class="package-description">'+ val.pck_description +'</p>'+
        '<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>('+ val.pck_review +')</small></span>'+
        '<a href="badges.html" data-toggle="tooltip"  title="Badge Level" class="badge_list_1"><img src="/assets/img/badges/badge_1.svg" width="15" height="15" alt=""></a>'+
        '<ul>'+
          '<li><a href="#0" onclick="onHtmlClick(\'Doctors\', '+ val.pck_id +')" class="btn_listing">Haritada Göster</a></li>'+
          '<li>'+ val.cty_name +' / '+ val.stt_name +'</li>'+
          total_distance +
          '<li><a href="/package/package_detail/'+ val.pck_id +'">Görüntüle</a></li>'+
        '</ul>'+
      '</div>');

      package = {
        name: null,
        location_latitude: null,
        location_longitude: null,
        map_image_url: null,
        type: null,
        url_detail: null,
        name_point: null,
        description_point: null,
        get_directions_start_address: null,
        package_id: null,
        price: null,
				ctg_name: null
      };

      if(val.pck_cover == 'profile') {
        cover_end = '/assets/img/trainer/'+val.pck_picture;
      } else {
        cover_end = '/assets/img/cover/'+val.pck_picture;
      }
      package.name = val.trn_firstname + ' ' + val.trn_lastname;
      package.location_latitude = parseFloat(val.pck_latitude);
      package.location_longitude = parseFloat(val.pck_longtitude);
      package.map_image_url = cover_end;
      package.type = val.trn_job;
      package.url_detail = '/package/'+val.pck_id;
      package.name_point = val.trn_firstname + ' ' + val.trn_lastname;
      package.description_point = val.pck_name;
      package.get_directions_start_address = '';
      package.package_id = val.pck_id;
      package.price = val.pck_price;
			package.ctg_name = val.ctg_name;

      markersData.Doctors.push(package);
    });

    markers = [];
    for (var key in markersData)
      markersData[key].forEach(function (item) {
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(item.location_latitude, item.location_longitude),
          map: mapObject,
          icon: '/assets/img/pins/' + key + '.png',
        });

        markers.push(marker);

        google.maps.event.addListener(marker, 'click', (function () {
    closeInfoBox();
    getInfoBox(item).open(mapObject, this);
    mapObject.setCenter(new google.maps.LatLng(item.location_latitude, item.location_longitude));
    }));


      });

      function hideAllMarkers () {
        for (var key in markers)
          markers[key].forEach(function (marker) {
            marker.setMap(null);
          });
      };

      function toggleMarkers (category) {
        hideAllMarkers();
        closeInfoBox();

        if ('undefined' === typeof markers[category])
          return false;
        markers[category].forEach(function (marker) {
          marker.setMap(mapObject);
          marker.setAnimation(google.maps.Animation.DROP);

        });
      };

      function closeInfoBox() {
        $('div.infoBox').remove();
      };

      function getInfoBox(item) {
        return new InfoBox({
          content:
          '<div class="marker_info">' +
          '<figure><a href='+ item.url_detail +'><img src="' + item.map_image_url + '" alt="Image"></a></figure>' +
          '<small>'+ item.ctg_name +'</small>' +
          '<h3><a href='+ item.url_detail +'>'+ item.name_point +'</a></h3>' +
          '<span>'+ item.description_point +'</span>' +
					'<div class="marker_tools">' +
					'<a href="/package/'+ item.package_id +'">Görüntüle</a>' +
						'</div>' +
          '</div>',
          disableAutoPan: false,
          maxWidth: 0,
          pixelOffset: new google.maps.Size(10, 105),
          closeBoxMargin: '',
          closeBoxURL: "/assets/img/close_infobox.png",
          isHidden: false,
          alignBottom: true,
          pane: 'floatPane',
          enableEventPropagation: true
        });
      };



  });
  //json end
}

$('select[name=orderby]').change(function() {
	$.get('/package/package_ordering_set/'+ $('select[name=orderby]').val() +'')
	.done(function() {
		location.reload();
	});
});

function layoutTable() {
	$('.list-packages').addClass('row');
	var key = 0;
	$('.strip_list').each(function() {
		$(this).addClass('box_list').removeClass('strip_list').before('<div class="col-md-6 child-'+ key +'">').appendTo($(this).parent().find('.child-'+ key +''));
		key++;
	});
}

function layoutDefault() {
	$('.list-packages').removeClass('row');
	var key = 0;
	$('.box_list').each(function() {
		$(this).addClass('strip_list').removeClass('box_list').appendTo('.list-packages');
		$('.child-'+ key +'').remove();
		key++;
	});
}
