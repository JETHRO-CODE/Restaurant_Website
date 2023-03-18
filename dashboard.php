<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/8db71d15fc.js" crossorigin="anonymous"></script>
</head>
<body class="modify">
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


    <h1 class="delicious"> Dashboard</h1><br>

    <h1 style = "color:green;" >  
        Disable an element using Jquery  
    </h1>  
              
    <input id = "input" type="text" name="input"/> 
          
    <button onclick="enable_disable()"> 
        Enable/Disable
    </button> <br><br>


    
   <!-- Removing elements with Jquery-->
    <p>Hello</p>
    how are
    <p>you?</p>
    <button>Call remove() on paragraphs</button><br><br>

    
    <!-- Use append to move elements using JQuery-->
    <h1 style = "color:green;" >  
        Use append to move elements using JQuery 
    </h1>  
      
    <div id= "parent"></div>
      
    <br>
      
    <h4 id= "child">
        A program code to Use append to move elements using JQuery
    </h4>
      
    <br>
      
    <button onclick="myAppend()"> 
        move
    </button> <br><br><br>

    <p>Welcome to</p>
    <p>GeeksforGeeks !!!</p>
    
    <!-- Click on this method and see
          the clone element-->
    <button>Click Me!</button><br><br>


    <p class="element">This is a paragraph.</p>
    <p class="element">This is another paragraph.</p>

    <button class="elements">Clone all p elements, and append them to the body element</button><br><br><br>

    

    <!-- Target the parent of an element using JQuery-->
    <div class="main_div">
        <div style="width:500px;">div (Great-Grandparent)
          <ul>This is the grand-parent of the selected span element.!
          <li>This is the parent of the selected span element.!
          <span class="target">This is the span element</span>
          </li>
          </ul>
        </div>
       </div>

       <!-- Target the child of an element using JQuery-->
       <div class="descendants"  style="width:500px;">div (grandparent)
        <ul class="child">ul (direct parent)  
          <li>li (child)
            <span>span (grandchild)</span>
          </li>
        </ul>   
      </div><br>\<br>

       <!-- Target even numbered elements using JQuery-->
       <h4> It is an example of using the jQuery even() method. The index starts from 0. </h4>  
<ul>  
    <li class="evens"> 0 </li>  
    <li class="evens"> 1 </li>  
    <li class="evens"> 2 </li>  
    <li class="evens"> 3 </li>  
    <li class="evens"> 4 </li>  
    <li class="evens"> 5 </li>  
    <li class="evens"> 6 </li>  
    <li class="evens"> 7 </li>  
    <li class="evens"> 8 </li>  
    <li class="evens"> 9 </li>  
</ul>  
  
<p> Click the below button to select the elements with even index. </p>  
<button id="evenelements"> Click me </button> <br><br>

<!--Use JQuery to modify the entire page.-->






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