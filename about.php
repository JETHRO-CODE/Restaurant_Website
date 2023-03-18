<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Restaurant Website</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/8db71d15fc.js" crossorigin="anonymous"></script>
</head>
<body>
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
                <li><a href="dashboard.php">Dashboard </a></li>
            </ul>
            
        
        </div>
       
    </nav>


    <section class="about_us">

        <div class="about_us_container">
            <div class="about_us_box">
                <div class="about_us_img">
                    <img src="images/about-us.jpg" alt="" >
                </div>
            </div>
            <div class="about_us_para">
                <h1>About Us</h1>
                <div class="social_container">
            
                    <div class="social_links">
                    <span ><a href="https://web.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.youtube.com"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://www.twitter.com"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://web.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i></a></span>
                    
                    </div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been 
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley 
                    of type and  scrambled it to make a type specimen book.</p><br>

                    <p>
                        Various versions have evolved over the years, sometimes by accident, sometimes on purpose 
                        (injected humour and the like).
                    </p><br>

                    <p>
                        <button class="about_us_button">Learn More</button>
                    </p>
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
    <script src="Javascript/jquery-3.6.3.min.js"></script>
    <script src="Javascript/jquery-3.6.3.js"></script>
    <script src="Javascript/script.js"></script>
</body>
</html>



