<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Live Tutorial</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>
    <body>
<?php
include 'connect.php';
/* @var $_POST type */
if(isset($_POST['submit'])){
    
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $timing = mysqli_real_escape_string($con, $_POST['timing']);
 
    $insertquery = "insert into ds(name,email,timing)values('$name','$email','$timing')";
    $iquery = mysqli_query($con, $insertquery);
}
?>   
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn"><i class="fa fa-bars"></i></label>
            <label class="logo"><a href="index.php">Live Tutorial</a></label>
            <ul>
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                <li class="active"><a href="index.php">Live Trainings</a></li>
                <li><a href="register.php"><i class="fa fa-sign-in"></i> Register</a></li>
            </ul>
        </nav>
        
        <div class="content2">
            <div class="banner-image2">
                          
                            <h1></h1>
                            <h1></h1>
                            <h1>Data Structure</h1>
                      
                           
                                <form method="POST" action="" class="backside">
                                <h2>Register </h2><br>
                                <p>User's Name<br>
                                <input class="uname" placeholder="Name" type="text" name="name"></p>
                                <p>Email Id<br>
                                <input class="email" placeholder="Email" type="email" name="email"></p>
                                <p>Timing<br>
                                    <select class="timing" name="timing">
                                        <option value="7AM-8AM">7AM-8AM</option>
                                        <option value="2PM-3PM">2PM-3PM</option>
                                        <option value="7PM-8PM">7PM-8PM</option>
                                        <option value="9PM-10PM">9PM-10PM</option>
                                        <option value="Any Time">Any Time</option>
                                    </select></p>                           
                                <button class="button" type="submit" name="submit">Register</button>                              
                            </form>   
            </div>          
        </div>        
        
        
        <div class="container">
<!--cameras-->  
 <div class="trap"><center><h1>About the Course</h1></center></div>
 This course teaches the fundamentals of programming in Python 3. We will begin at the beginning, with variables, conditionals, and loops, and get to some intermediate material like class inheritance.
 <br>You will have lots of opportunities to practice. You will also learn ways to reason about program execution, so that it is no longer mysterious and you are able to debug programs when they don’t
 work.<br>By the end of the specialization, you’ll be writing programs of your own. And you’ll be able to learn to use new modules and libraries on your own by reading the documentation. That will 
 give you a great launch toward being an independent Python programmer.<br>This course is a good next step for your carrier.<br> 
 <h4><u>Benefits</u></h4>1.100% Live Classes  2.Classes with Projects   3.Flexible Schedule  4.Beginner to Intermediate Level        
<!--cameras-->
<div class="trap"><center><h1>Topics we cover</h1></center></div>
<div class="row no-gutters">
    <div class="col-md-3 no-gutters"><h6><u>Introduction</u></h6><br>Getting Started<br>Keywords and Identifiers<br>Statements & Comments<br></div>
    <div class="col-md-3 no-gutters"><h6><u>Python Variables</u></h6><br>Python Datatypes<br>Python Type Conversion<br>Python I/O and import<br>Python Operators<br>Python Namespace<br></div>
    <div class="col-md-3 no-gutters"><h6><u>Python Flow Control</u></h6><br>Python if...else<br>Python for Loop<br>Python while Loop<br>Python break and continue<br>Python Pass<br></div>
    <div class="col-md-3 no-gutters"><h6><u>Python Functions</u></h6><br>Python Functions<br>Function Argument<br>Python Recursion<br>Anonymous Function<br>Global, Local and Nonlocal<br>Python Global Keyword<br><br></div>
    <div class="col-md-3 no-gutters"><h6><u>Python Modules</u></h6><br>Python Package<br>Python Datatypes<br>Python Numbers<br>Python List<br>Python Tuple<br>Python String<br>Python Set<br>Python Dictionary<br></div>
    <div class="col-md-3 no-gutters"><h6><u>Python Files</u></h6><br>Python File Operation<br>Python Directory<br>Python Exception<br>Python Exception Handling<br>Python User-defined Exception<br></div>
    <div class="col-md-3 no-gutters"><h6><u>Python Object & Class</u></h6><br>Python OOP<br>Python Class<br>Python Inheritance<br>Multiple Inheritance<br>Operator Overloading<br></div>
    <div class="col-md-3 no-gutters"><h6><u>Python Date & Time</u></h6><br>Python datetime Module<br>Python datetime.strftime()<br>Python datetime.strptime()<br>Current date & time<br>Get current time<br>Timestamp to datetime<br>Python time Module<br>Python time.sleep()</div>
</div>
        

<!--watches-->
<div class="team-section">
    <h1>Teacher</h1>
    <span class="border"></span>
    <div class="ps">
        <a href="#"><img src="" alt="camera" class="thumnail"></a>
    </div>
</div>       

<div><center>Nipali Bal<br>B.Tech Computer Science</center></div>
        
        

<!--shirts-->
        
        

<!--data-->
    
        
        

<!--data-->

        

<!--data-->

    </div>

        <footer class="footer">
            <p>Copyright © Livetutorial. All Rights Reserved|Contact Us: +91-7077571442. </p>
        </footer>
    </body>
</html>