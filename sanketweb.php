 <?php

 session_start();
 if(!isset($_SESSION['username'])) 
    header('location:login.php');
 ?>


<html>
<head>

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
		body{
    background: url(f.jpg)
    no-repeat center center fixed;
    background-size: cover;
    font-family: sans-serif;
}

header{
    width: 80%;
    margin: auto;
    overflow: hidden;
}
  #x{
    color: #2f2f2f;
}
.head{
    float: left;
    color: #fff;
    font-family: cursive;
}

nav{
    float: right;
}

li{
    display: inline;
    padding: 1rem;
}

li a{
    color: #ffff;
    text-decoration: none;
    font-weight: bold;
}
#b
{
    color: yellow;
    font-size: 40px;
    font-weight: bold;

}

.active{
    color: gold;
}

.container{
    width: 70%;
    margin: auto;
    overflow: hidden;
    margin-top: 1%;
}

showcase h1{
    color: #fff;
    font-family: cursive;
    text-align: center;
}

showcase h3{
    color: #fff;
    text-align: center;
    letter-spacing: 2px;
}

.category{
    color: #fff;
    margin-top: 5%;
    display: flex;
    text-align: center;
    font-family: cursive;
}

img{
    width: 70%;
    border-radius: 50%;
}

.snacks, .Barbecue{
    padding-left: 16px;
}

h4{
    font-size: 16px; 
    margin: 3%;
}

.btn{
    background-color: gold;
    padding: 16px;
    border: none;
    border-radius: 8px;
    margin-left: 45%;
}

.btn:hover{

	color: white;
	background-color: red;
}
	</style>
    
    
    <title></title>
    </head>
<body>
   
    <h1>  Welcome <?php echo $_SESSION['username']; ?> </h1>

  
  <header>
      <div class="head">
         <h2>EaTaLot</h2>
         <h2 id="x">Owner: Sanket Adhikari </h2> 
      </div>

         <nav>
             <ul>
                 <li><a href="#" class="active">Home</a></li>
                 <li><a href="#">About</a></li>
                 <li><a href="#">Services</a></li>
                 <li><a href="#">News & Events</a></li>
                 <li><a href="#">Mail Us</a></li>
                 <li><u href="#" id="b"  onclick="location.href='logout.php'"> Logout</u></li>
             </ul>
         </nav>

  </header>




    <showcase>
        <div class="container">
            <h1>Food tastes better when you eat it with your family</h1>
            <h3>Veg, Non-Veg and all kind of Snacks are available</h3>
            <div class="category">
                <div class="breakfast">
                    <img src="breakfast.jpg">
                    <h4>Breakfast</h4>
                    <p>Mornings shouldn’t mean compromise. We wanted to create a high quality breakfast but also make it fast and portable to keep up with our active lives.</p>
                </div>
                <div class="snacks">
                    <img src="evenningsnacks.jpg">
                    <h4>Evening Snacks</h4>
                    <p>The best snacks are the ones that are easy to make, taste great, and fill you up without weighing you down.</p>
                </div>
                <div class="Barbecue">
                    <img src="Barbecue.jpg">
                    <h4>Barbecue</h4>
                    <p>Barbecue means a particular method of cooking, whereby one suspends meat over burning coals on a wooden framework.It can also be refer to a gathering around food cooked this way. </p>
                </div>

            </div>
        </div>
    </showcase> 

     
       <a href="#"><button class="btn">Read More</button></a>
                           
    
</body>
</html>