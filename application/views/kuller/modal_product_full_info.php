        <!--base css styles-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/assets/css/cloud-admin.css" >
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url();?>template/assets/css/themes/default.css" id="skin-switcher" >
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url();?>template/assets/css/responsive.css" >
    <!-- STYLESHEETS --><!--[if lt IE 9]><script src="js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
    <link href="<?php echo base_url();?>template/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
<?php
$product_info	=	$this->crud_model->get_product_info($current_product_id);
foreach($product_info as $row):?>
<div class="box border inverse">
<div class="box-title">
    <h4><i class="fa fa-table"></i>Info</h4>
    </div>
<div class="box-body">
<table class="table table-bordered">
      <tr>
        <td><?php echo get_phrase('product_name');?></td>
        <td><?php echo $row['product'];?></td>
      </tr>
      <tr>
        <td><?php echo get_phrase('product_type');?></td>
        <td><?php //echo $this->crud_model->get_product_type_name($row['product_type_id']);?><bold>VajaUurida</bold></td>
        </tr>
        <tr>
        <td><?php echo get_phrase('weight');?></td>
        <td><?php echo $row['weight'];?><small> kg</small></td>
      </tr>

      <tr>
        <td><?php echo get_phrase('pieces');?></td>
        <td><?php echo $row['quantity'];?><?php echo get_phrase('pieces');?></td>
      </tr>

      <tr>
        <td><?php echo get_phrase('date_dispatch_first');?></td>
        <td><?php echo $row['date_dispatch_first'];?></td>
      </tr>

      <tr>
        <td><?php echo get_phrase('date_dispatch_last');?></td>
        <td><?php echo $row['date_dispatch_last'];?></td>
      </tr>

<tr>
        <td><?php echo get_phrase('owner');?></td>
        <td><?php echo $row['owner'];?></td>
      </tr>
    </table>
    </div>
        <!--<iframe class="google_map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo $row['address'];?>&output=embed&iwloc=near"></iframe>-->
        
    
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js"></script>
    <script>
    jQuery(document).ready(function () {
        var map;
        var centerPosition = new google.maps.LatLng(40.747688, -74.004142);

        var style = [{
            "stylers": [{
                "visibility": "on"
            }]
        }, {
            "featureType": "road",
                "stylers": [{
                "visibility": "on"
            }, {
                "color": "#ffffff"
            }]
        }, {
            "featureType": "road.arterial",
                "stylers": [{
                "visibility": "on"
            }, {
                "color": "#fee379"
            }]
        }, {
            "featureType": "road.highway",
                "stylers": [{
                "visibility": "on"
            }, {
                "color": "#fee379"
            }]
        }, {
            "featureType": "landscape",
                "stylers": [{
                "visibility": "on"
            }, {
                "color": "#f3f4f4"
            }]
        }, {
            "featureType": "water",
                "stylers": [{
                "visibility": "on"
            }, {
                "color": "#7fc8ed"
            }]
        }, {}, {
            "featureType": "road",
                "elementType": "labels",
                "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "poi.park",
                "elementType": "geometry.fill",
                "stylers": [{
                "visibility": "on"
            }, {
                "color": "#83cead"
            }]
        }, {
            "elementType": "labels",
                "stylers": [{
                "visibility": "on"
            }]
        }, {
            "featureType": "landscape.man_made",
                "elementType": "geometry",
                "stylers": [{
                "weight": 1
            }, {
                "visibility": "off"
            }]
        }]
        
        var image = {
            url: 'https://dl.dropboxusercontent.com/u/814783/fiddle/marker.png',
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(0, 0)
        };
        var shadow = {
            url: 'https://dl.dropboxusercontent.com/u/814783/fiddle/shadow.png',
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(0, 0)
        };
        var marker = new google.maps.Marker({
            position: centerPosition,
            map: map,
            icon: image,
            shadow: shadow
        });
        geocoder = new google.maps.Geocoder();
        var latlng = new google.maps.LatLng(-34.397, 150.644);
        var mapOptions = {
          zoom: 12,
          center: latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("map"), mapOptions);
        map.setOptions({
                styles: style
            });
            
            
        var address = "<?php echo $row['address'];?>";
        geocoder.geocode( { 'address': address}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location
            });
          } else {
            //alert("Geocode was not successful for the following reason: " + status);
          }
        });
    });
                                    
                                    
                                    
                                    
    
    
    
    </script>

<?php endforeach;?>
