<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.html';?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZLKY1KSaVuOcmP9fisyhQ8PG4hIFgi8o&callback=initMap" async defer></script>
    <script>
    let map;
    function initMap() {
        let mapLat = 1.4516124721421075;
        let mapLng = 103.79199998969473;
        let mapZoom = 18;

        //Processing wrapper data attribute to coordinate
        var mapOptions = {
            center: {
                lat: mapLat,
                lng: mapLng
            },
            zoom: mapZoom,
            scrollwheel: false
        };

        //Initiating map
        map = new google.maps.Map(document.getElementById("google-map"), mapOptions);

        //Map Marker
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(mapLat, mapLng),
            map: map,
            icon: './images/map-marker.png'
        });

        var contentString = '<div id="content" style="margin-left:15px;margin-top:5px;margin-bottom:15px;margin-right:5px;">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<br /><br /><img src="./images/logo.png" height=80px><br /><br />'+
        '<div id="bodyContent">'+
        '254 Woodlands Industrial Park E5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />' +
        'Singapore 757309 <br /> '+
        '(65) 9119 4045 '+
        '</div>'+
        '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
        });
    }
    </script>
</head>

<body>
    <?php include 'header.html';?>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <h2 class="page-title">Contact Us</h2>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="cps-main-wrap">
        <!-- Service Box -->
        <div class="cps-section cps-section-padding" id="service-box">
            <div class="container">
                <div class="row">
                    <div class="cps-service-boxs">
                        <div class="col-sm-4">
                            <div class="cps-service-box">
                                <div class="cps-service-icon">
                                    <span class="ti-map-alt"></span>
                                </div>
                                <h4 class="cps-service-title">Address</h4>
                                <p class="cps-service-text">254 Woodlands Industrial Park E5 Singapore 757309</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cps-service-box">
                                <div class="cps-service-icon">
                                    <span class="ti-id-badge"></span>
                                </div>
                                <h4 class="cps-service-title">Phone</h4>
                                <p class="cps-service-text">Mobile: +65 91194045&nbsp;</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="cps-service-box">
                                <div class="cps-service-icon">
                                    <span class="ti-email"></span>
                                </div>
                                <h4 class="cps-service-title">Email</h4>
                                <p class="cps-service-text">sales@cstechsolutions.com.sg</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Box End -->
        
        <!-- Location Map -->
        <div class="cps-section map-area" id="map-area">
            <div class="container">
                <div class="google-map" id="google-map"></div>
            </div>
        </div>
        <!-- Location Map End -->
        
        <?php include 'contact.html';?>
    </div>

    <?php include 'footer.html';?>
    <?php include 'scripts.html';?>
    <!-- <script src="./js/map.js"></script> -->
</body>
</html>