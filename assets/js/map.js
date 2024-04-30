jQuery(window).ready(function(){

  function initialize() {

    //Dates
    var markers = new Array();
    var locations = [
      [
        new google.maps.LatLng(4.666435689696084, -74.14815038255725),
        'BOGOTÁ - FONTIBÓN',
        '(1) 3808959',
        'Diagonal 16 Cra 96i - 15',
        '4.666435689696084', 
        '-74.14815038255725'
      ],  
      [
        new google.maps.LatLng(4.693443542880865, -74.07600191534152),
        'BOGOTÁ - MORATO',
        '(1) 4238300',
        'Carrera 70 No. 99a-00',
        '4.693443542880865', 
        '-74.07600191534152'
      ],  
      [
        new google.maps.LatLng(4.736021437638309, -74.1341668),
        'BOGOTÁ - SIBERIA / COTA',
        '(1) 3808920',
        'Calle 80 Autopista Medellin Km 1.2 vía Siberia costado Sur',
        '4.736021437638309',
        '-74.1341668'
      ],   
      [
        new google.maps.LatLng(10.895373441753495, -74.77006778465848),
        'BARRANQUILLA',
        '(5) 3160300',
        'Soledad Calle 31 No 23 – 57',
        '10.895373441753495', 
        '-74.77006778465848'
      ], 
      [
        new google.maps.LatLng(7.086402079832445, -73.13849445387098),
        'BUCARAMANGA',
        '(7) 6910200',
        'Calle 70 # 32W-92 Km 4 Vía Girón',
        '7.086402079832445', 
        '-73.13849445387098'
      ],  
      [
        new google.maps.LatLng(3.497158412600352, -76.50671621534153),
        'CALI-YUMBO',
        '(2) 3692100',
        'Sede Norte Cra. 36 No.15-95 Acopi-Yumbo',
        '3.497158412600352', 
        '-76.50671621534153'
      ], 
      [
        new google.maps.LatLng(6.166219601181037, -75.6090319),
        'ITAGUÍ',
        '(4) 2040210',
        'Cra 42 No. 46-130 Autopista Sur',
        '6.166219601181037', 
        '-75.6090319'
      ],  
      [
        new google.maps.LatLng(4.81163052821221, -75.7068151),
        'PEREIRA',
        '(6) 3470200',
        'Avenida 30 de agosto No. 33-09',
        '4.81163052821221', 
        '-75.7068151'
      ],  
    ];

    //Options Maps
    var icons = 'assets/images/pointer.svg';
    var mapOptions = {
        zoom: 6,
        // zoomControl: false,
        mapTypeControl: false,
        // scaleControl: false,
        streetViewControl: false,
        // rotateControl: false,
        // fullscreenControl: false,
        // disableDefaultUI: true,
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: new google.maps.LatLng(7.643056950668843, -74.45182595793887),
        styles: [
          {
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#f5f5f5"
              }
            ]
          },
          {
            "elementType": "labels.icon",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#616161"
              }
            ]
          },
          {
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#f5f5f5"
              }
            ]
          },
          {
            "featureType": "administrative.land_parcel",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#bdbdbd"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#eeeeee"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#757575"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#e5e5e5"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          },
          {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#ffffff"
              }
            ]
          },
          {
            "featureType": "road.arterial",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#757575"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#dadada"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#616161"
              }
            ]
          },
          {
            "featureType": "road.local",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          },
          {
            "featureType": "transit.line",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#e5e5e5"
              }
            ]
          },
          {
            "featureType": "transit.station",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#eeeeee"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#c9c9c9"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          }
        ]
    };


    //Init Maps
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);


    //List Markets
    var infowindow = new google.maps.InfoWindow();
    for (var i = 0; i < locations.length; i++) {
        jQuery('.listPoints.clic').append('<li class="marker-link" data-markerid="' + i + '" data-title="'+locations[i][1]+'"> ' +
            '<div class="large-10 medium-10 small-10 columns"> ' +
            '<div class="txt"> ' +
            '<h3 class="titlesearch">'+ locations[i][1] + ' </h3> ' +
            '<p><strong>'+ locations[i][2] +'</strong></p> ' +
            '<p>'+ locations[i][3] +' </p> </div> </div> </li>');

        //Markets maps
        var marker = new google.maps.Marker({
            position: locations[i][0],
            map: map,
            icon: icons
        });

        // Open Detail
        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.setContent(
                  '<div class="cdetailMap">' +
                    '<h1>' + locations[i][1] + '</h1>' +
                    '<p>' + 'Teléfono: ' + locations[i][2] + '</p>' +
                    '<p>' + 'Dirección: ' + locations[i][3] + '</p>' +
                  '</div>'
                );
                infowindow.open(map, marker);
                map.setCenter(marker.getPosition());
                map.setZoom(13);

                jQuery('.listPoints li').removeClass('active');
                jQuery('.listPoints li').eq(i).addClass('active');

                //Rutas details
                jQuery('.tabTwo').show();
                jQuery('#lastAddres').attr({ value: locations[i][2] });
                jQuery('#idPoint').html(locations[i][5]);
                jQuery('#cityPoint').html(locations[i][1]);
                jQuery('#addressPoint').html('Dirección: ' + locations[i][2]);
                jQuery('#hoursPoint').html('Horarios: ' +  locations[i][3]);
            }
        })(marker, i));

        // Add marker to markers array
        markers.push(marker);
    }

    // Trigger a click List Points
    jQuery('.marker-link').on('click', function () {
      google.maps.event.trigger(markers[jQuery(this).data('markerid')], 'click');
      jQuery('.listPoints li').removeClass('active');
      jQuery(this).addClass('active');
    });
    var mediaquery = window.matchMedia("(max-width: 642px)"),
      content = document.querySelector(".content");
    function handleOrientationChange(mediaquery) {
        if (mediaquery.matches) {
            jQuery('.marker-link').on('click', function () {
                jQuery('.btnFilter').click();
            });
        } else {
            jQuery(".listPoints").show();
        }
    }
    handleOrientationChange(mediaquery);
    mediaquery.addListener(handleOrientationChange);


    //Change City
    jQuery('.catgMaps li').on('click', function () {
      jQuery('.catgMaps li').removeClass('active');
      jQuery(this).addClass('active');
      var lat = jQuery(this).attr("data-lat");
      var lng = jQuery(this).attr("data-lng");
      var city = jQuery(this).attr("data-city");
      var latlng = new google.maps.LatLng(lat,lng);
      map.setCenter(latlng);
      map.setZoom(11);
      jQuery('.filterCity h6 span').html(city);
    });

    jQuery(".itemFilter").each(function() {
      var $this = jQuery(this);
      var active = $this.find('h6');
      var listClic = $this.find('ul li a');
      jQuery(active).click(function(){
        jQuery(this).addClass('hide_anim');
        // jQuery('.itemFilter ul, .itemFilter h6').toggleClass('open');
        $this.find('ul').toggleClass('open');
        jQuery(this).toggleClass('open');
        return false;
      }); 
      jQuery(listClic).click(function(){
        var activeList = jQuery(this).attr("data-point");
        active.find('span').html(activeList);
        $this.find('ul').removeClass('open');
        jQuery('.catgMaps, .catgBrands').removeClass('open');
        active.removeClass('open');
      });  
    });


  }
  
  initialize();

}); 