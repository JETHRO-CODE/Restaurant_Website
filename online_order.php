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
                    <li><a href="dashboard.php">Dashboard </a></li>
                </ul>
                
            
            </div>
           
        </nav>

  <section class="cart_container">
    <div>
        <div >
            <table border="1px solid grey">
               <tr>
                <th>Menu</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Delete</th>
               </tr> 
               <tr>
                <td>Rice1</td>
                <td> $10</td>
                <td> 
                    <button onclick="decrement()">-</button>
                    <input id=demoInput type=number min=1 max=100 placeholder="1">
                    <button onclick="increment()">+</button>
                    
                    </td>
                <td>$10</td>
                <td><button><i class="fa-regular fa-trash-can"></i></button></td>
               </tr>
               <tr>
                <td>Proin Tortor</td>
                <td> $15</td>
                <td>
                    
                    <button onclick="decrement1()">-</button>
                    <input id=demoInput1 type=number min=1 max=100 placeholder="2">
                    <button onclick="increment1()">+</button> </td>

                <td>$30</td>
                <td><button><i class="fa-regular fa-trash-can"></i></button></td>
               </tr>
               <tr>
                <td>Aliquam Erat</td>
                <td> $20</td>
                <td> <button onclick="decrement2()">-</button>
                    <input id=demoInput2 type=number min=1 max=100 placeholder="3">
                    <button onclick="increment2()">+</button></td>
                <td>$60</td>
                <td><button><i class="fa-regular fa-trash-can"></i></button></td>
               </tr>

                <Caption> <h1>Cart</h1></Caption>
               
            </table><br>
            <button class="cart_button">Checkout</button>
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



  
</div>

<script src="Javascript/jquery-3.6.3.min.js"></script>
<script src="Javascript/jquery-3.6.3.js"></script>
<script src="Javascript/script.js"></script>
</body>
</html>