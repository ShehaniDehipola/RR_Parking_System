<html> <head>

  <title>My driping cart</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="..\css\headfoot.css">   
  <style>
body {background-color: silver;font-family: "times new roman", Helvetica, sans-serif;}
* {box-sizing: border-box}
  

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border:2px;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: white;
  outline: none;
}

hr {
  border: 1px yellow;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: grey;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
  align-content:center;
}

button:hover {
  opacity:7;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 50px;
  background-color: black;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: center;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 450px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 150px) {
  .cancelbtn, .signupbtn {
     width: 50%;
    
  }
}
</style>
  
<style>
header{
  height: 80px;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  padding: 15px;
  background-color: black;
}


.links li { 
  display :inline;
  float: left;
  padding: 0px 10px;
  font-size: 18px;
  justify-content: center;
  margin-right: 70px;
}

li a:hover { 
  background-color : rgb(244, 206, 14);
  

}


.logo{
  cursor: pointer;
  margin-right: auto;
  padding: 0;
  width: 100px;
}




.search{
  
  padding: 10px;
  border: 0;
  border-radius: 0px;
  border-bottom-left-radius: 8px;
  border-top-left-radius: 8px;
}

</style>

<style>
  
/* Footer */

.footer {
background : black;
color: white;
height: 270px;
position : relative;
}


footer{
    position: sticky;
    top: 100%;
    width: 100%;
    padding: 50px, 100px;
    background : black;
    
}

.footer .footer-content {

height:350px;
display:flex;
}

.footer .footer-content .footer-section{
flex:1;
padding : 25px;

}


.footer .footer-bottom {
background: black;
color: white; 
height : 50px;
text-align: center;
bottom : 0px;
left : 0px;

 }

 .copyright{
  position: sticky;
  top: 100%;
  text-align: center;
  background-color: gold;
  font-size: 14px;
}



 a {
  text-decoration: none; }
  
  
  li {
  text-decoration: none; }

  .logoo { 
    float : right; 
    width : 50px;
    height : 50px;
    }

.card {width : 200px;}

.icon {
   
      float : right; 
      width : 150px;
      height : 100px;
      top : 100%;
      transform: translateY(32px);
      margin-right : -78px;
      
      
      
      
      
}
</style>
  
  </head>

  <body a link= "white" vlink= "white">
    
    <header> 
        
        <img src="..\images\Logo.jpg" class="logo">
    
    <nav>
        <ul class="links">
            <li class = "links" ><a href="https://courseweb.sliit.lk/course/index.php?categoryid=84">Home</a></li>
            <li class = "links" ><a href="#">FAQ's</a></li>
            <li class = "links" ><a href="#">About us </a>
            </li>
            <li class = "links" ><a href="#">Contact us</a></li>
            <li class = "links" ><a href="#">Offers</a></li>
            <li class = "links" ><a href="#">Locations</a></li>
        </ul>
        </nav>
    
        <div class="search">
            <input type="search" class="serch" placeholder=" Search ">
            </div>
  
    
    </header>


    <body>

<form action="/action_page.php" style="border:5px solid black
  ">
  <div class="container">
    <h1><center>Sign Up Now</center></h1>
    
    <hr>

    <label for="name"><b>Your Name:</b></label>
    <input type="text" placeholder="First and Last name" name="name" required>

     <label for="uname"><b>User Name:</b></label>
    <input type="text" placeholder="Enter a user name" name="uname" required>

    <label for="email"><b>Email Address:</b></label>
      <input type="text" placeholder="Enter  your Email" name="email" required>

    
    <label for="psw"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-confirm"><b>Confirm Password:</b></label>
    <input type="password" placeholder="confirm Password" name="psw-repeat" required>
    
    <label>
      <input type="checkbox" checked="checked" name="Agree" style="margin-bottom:15px"> Agree privacy policy 
    </label>
    


    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit"class="registerbtn">Register</button>
    </div>
  </div>
</form>

</body>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <footer>
      <div class= "footer">
      <div class = "footer-content">
      
       <div class = "footer-section about">
      <b> Get to know us </b>  
      <br>
      
      <ul class="color">
        <li class = "color"><a href="https://www.youtube.com/">About us </a> </li>
        <li class = "color"><a href="https://capture.sliit.lk/login.php">Privacy Policy </a></li>
        <li class = "color"> <a href="https://www.google.com/"> Terms & Conditions </a></li>
        <li class = "color"> <a href="https://www.linkedin.com/feed/">Contact us </a></li>
        <li class = "color"><a href="https://courseweb.sliit.lk/course/index.php?categoryid=84"> Locations </a></li> </ul>
        
      
      <img src = "..\images\card.png" alt = "card" class="card">
       </div>
      
       <div class = "footer-section contact ways"> 
      <b> RRparking.com</b> <p>
      N0 220/A, <br>
       Bauddhaloka Mawatha,<br>
      Colombo 7. </p> 
      <br> Tel: +94 (0)112673699 <br> Email:rrparking@gmail.com
      <img src = "..\images\logo.jpg" alt = "logo" class = "logoo" >
      <img src = "..\images\iconn.png" alt = "icon" class = "icon" >
      </div>
      
      </div>
      
      
      
      <div class = "footer-section img">
      hi </div>
      
    
      
      
         
      
      </div>
      </footer>
      <div class="copyright">
        <p> &copy;  COPYRIGHT @RRparking.com | 2020 - 2022 </p>
    </div>
    
     </body>
    </html>
