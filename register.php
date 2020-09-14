<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
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
    $pass = mysqli_real_escape_string($con, $_POST['password']);
    $number = mysqli_real_escape_string($con, $_POST['number']);
    $password = md5($pass);
    
    $emailquery = "select email from register where email='$email'";
    $query = mysqli_query($con, $emailquery);
    $emailcount = mysqli_fetch_row($query);
    
    if($emailcount>0){
        echo "Email already exist";
    }
    else{
        $insertquery = "insert into register(name,email,password,number)values('$name','$email','$password','$number')";
        $iquery = mysqli_query($con, $insertquery);
        if($iquery){
            
          
            header('location:index.php');
        }
        else{
            header('location:register.php');
        }
    }
    
}
?>       
    <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn"><i class="fa fa-bars"></i></label>
            <label class="logo"><a href="index.php">Live Tutorial</a></label>
            <ul> 
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                <li class="active"><a href="index.php">Live Trainings</a></li>
                
            </ul>
        </nav>
    
        <div class="content1">
            <div class="back-image">
                
                    <center>
                         
                        <form method="POST" action="" class="back_content">
                                <h2>Register </h2><br>
                                <p>User's Name<br>
                                <input class="uname" placeholder="Name" type="text" name="name"></p>
                                <p>Email Id<br>
                                <input class="email" placeholder="Email" type="email" name="email"></p>
                                <p>Password<br>
                                    <input class="pass" placeholder="Choose a Password" type="password" name="password"></p>
                                <p>Phone number<br>
                                    <input class="phone" placeholder="Phone" name="number"></p><br>
                      
                            <center>
                                <button class="button" type="submit" name="submit">Register</button>
                            </center>
                               
                            </form>   
                        
                    </center>
               
            </div>
        </div>
       
        <footer class="footer">
            <p>Copyright © Livetutorial. All Rights Reserved|Contact Us: +91-8448444853. </p>
        </footer>
    </body>
</html>

