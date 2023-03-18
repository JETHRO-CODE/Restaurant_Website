<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Restaurant Website</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/8db71d15fc.js" crossorigin="anonymous"></script>
    <link href="http://code.google.com/apis/maps/documentation/javascript/examples/default.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"> </script>

</head>
<body onload="initialize()">
        <!--Navigation section-->
        <nav class="navbar">
        
            <div class="menu_container">
                <ul>
                    <li><a href="index.php"><span id="home">Home </span></a></li>
                    <li><a href="about.php">About </a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="online_order.php">Online Order</a></li>
                    <div class="navbar1">
                        <div class="dropdown">
                            <button class="dropbtn" onclick="myFunction()">
                                <li><a href="pages.php">Pages<i class="fa fa-caret-down"></i></a></li>
                            </button>
                            <div class="dropdown-content" id="myDropdown">
                                <a href="index.php">Login</a>
                                <a href="index.php">Drop down</a>
                            </div>
                        </div>
                    </div>
                    <li><a href="contact.php">Contact </a></li>
                </ul>
                
            
            </div>
           
        </nav>

        <section class="contact1">
            <div>
                <h1 class="contact_us"> Contact Us</h1>
    
                <div class="contact_container">
                        <div class="contact_box">
                            <div class="opening_hours">
                                <p>
                                    <h3>Opening Hours</h3><br>
                                    <p> Monday-Friday: 7am to 12 am <br>
                                        Saturday: 5pm to 12am <br>
                                        Sunday: 9am to 12am
                                    </p>
                                </p>
                            </div>
                        </div>
                        <div class="contact_para">
                            <div class="opening_hours">
                                <p>
                                    <h3>Contact Info</h3><br>
                                    <p> 4137 State Street, CA, USA <br>
                                        +1-234-567-8900 <br>
                                        info@example.com
                                    </p>
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="map_container">
                        <div class="map_box">
    
                        
                            <div id="map_canvas" style="width:100%;height:100%;">
                            </div>
                        </div>
                        <div class="map_para">
                            <div class="opening_hours">
                                <p>
                                    <button class="bname">Your Name</button> <button class="bemail">Your Email</button>
                                </p><br>
                                <p><button class="bsubject">Subject</button></p><br>
                                <p><button class="bmessage">Message</button></p><br>
                                <p><button class="bsend">  <a href="dashboard.html">Send Message</a></button></p>
                            </div>
                        </div>
                    </div>
                    
                
            </div>



           
    
        </section>

  

 <section class="footer_container">
    <h1>GET LATEST FOOD INFO</h1>

    <div>
        <input type="text" placeholder="Enter Your Email" > <button>submit</button>
    </div>
    

</section>

<section class="footer_bottom">
    <div>
        <p> Italian Cuisine,4137 state street, CA, USA</p>
        
        
       
        
    </div>

    <div class="social_container">
        
        <div class="social_links">
        <p>&copy; Copyright <span>Your Site Name</span> All Rights Reserved</p>
        <span class="socials"><a href="https://web.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.youtube.com"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://www.twitter.com"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://web.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i></a></span>
        
        </div>
    </div>
</section>
<script type="text/javascript">
    var directionDisplay;
    var directionsService = new google.maps.DirectionsService();
    var map;

    function initialize() {
        directionsDisplay = new google.maps.DirectionsRenderer();
        var chicago = new google.maps.LatLng(6.446050, 3.226780);
        var myOptions = {
            zoom: 6,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            center: chicago
        }
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
        directionsDisplay.setMap(map);
        calcRoute();
    }

    function calcRoute() {

        var waypts = [];


stop = new google.maps.LatLng(6.446050, 3.226780)
        waypts.push({
            location:stop,
            stopover:true});


        start  = new google.maps.LatLng(6.446050, 3.226780);
        end = new google.maps.LatLng(6.446050, 3.226780);
        var request = {
            origin: start,
            destination: end,
            waypoints: waypts,
            optimizeWaypoints: true,
            travelMode: google.maps.DirectionsTravelMode.WALKING
        };
        directionsService.route(request, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);
                var route = response.routes[0];

            }
        });
    }
        </script>
 <script src="Javascript/jquery-3.6.3.min.js"></script>
 <script src="Javascript/jquery-3.6.3.js"></script>
 <script src="Javascript/script.js"></script>
</body>
</html>