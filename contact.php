<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.html';?>
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
        <div class="cps-section cps-section-padding cps-bottom-0" id="service-box">
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
            <div class="google-map office-location" id="location" data-lat="1.330019" data-lng="103.875928" data-zoom="18"></div>
        </div>
        <!-- Location Map End -->
        
        <?php include 'contact.html';?>
    </div>

    <?php include 'footer.html';?>
    <?php include 'scripts.html';?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
    <script src="./js/map.js"></script>
</body>
</html>