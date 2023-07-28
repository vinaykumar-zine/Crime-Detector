<?php
session_start();
if (isset($_SESSION["email"])) {
   header("location: /products.php");
  }
?>
    <!DOCTYPE html>

    <head>
        <!-- The page has a title Lifestyle Store-->
        <title>Crime Detector</title>
        <!-- External css file index.css placed in the folder css is linked-->
        <link href="index.css" rel="stylesheet" type="text/css" />

    </head>

    <head>
        <script src="index.js"></script>
    </head>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=">

    </head>
    <style>
        body {  
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Lato", sans-serif;
        }
        
        label {
            width: 100px;
            display: inline-block;
        }
        
        .a_login {
    color: mediumblue;

}

.login_button{

    padding-top:10px;


}
    
    </style>


    <body>
        <div id="clock">
        </div>
        <script src="index.js"></script>

    </body>


    <body>
        <div class="header">
            <div class="inner-header">
                <div class="logo">
                    <a href="index.php">Crime Detector</a>
                </div>
                <div class="header-link">
                    <a href="signup.php">Sign Up</a>
                </div>
                <div class="header-link">
                    <a href="login.php">Login</a>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="banner-image">
                <div class="inner-banner-image">
                    <div class="banner_content">

                        <div class="heading_topic" style="border-color:red">
                        Welcome to the Crime detector
                        </div><br>
                        Please Login to access the software 
                        <!-- <div class="details_form">
                            <form action="backend/details.php" method="post">
                                <label>Name:</label><input type="person_name" name="person_name"><br><br>

                                <label>Email:</label><input type="person_email" name="person_email"><br><br>

                                <label>Adress:</label><input type="person_address" name="person_address"><br><br>

                                <label>Phone No:</label><input type="person_phone" name="person_phone"><br><br><br>

                                <button class="button_index" type="submit" name="submit">Submit</button><br><br><br>

                            </form>
                        </div> -->
                        <br><br><br><br>
                        <!-- <p class="sign_login_page"> Login Here  -->
                        <div class="login_button"> <a class="button_index" href="login.php">Login</a></p>
                        </div>
                    </div>
                </div>


                <footer>
                    <div class="container">
                        <centre>
                            <p>Copyright &copy;All rights Reserved | Contact Us:+91 90000 00000</p>
                        </centre>
                    </div>
                </footer>
    </body>

    </html>