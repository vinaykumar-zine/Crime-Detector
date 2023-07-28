<?php
session_start();
if (!isset($_SESSION["email"])) {
   header("location: /");
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

.add_button{
    padding-top:50px
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
                <a href="logout.php">Logout</a>
            </div>
            
            <div class="header-link">
                <a href="Add.php">Add Member</a>
            </div>

            <div class="header-link">
                <a href="Profile.php">Profile</a>
            </div>

        </div>
    </div>

    <div class="content">
            <div class="banner-image">
                <div class="inner-banner-image">
                    <div class="banner_content">

                        <div class="heading_topic" style="border-color:red">
                        Please enter the details of the person
                        </div><br>
                        
                        <div class="details_form">
                            <form action="backend/details.php" method="post">
                                <label>Name:</label><input type="person_name" name="person_name"><br><br>

                                <label>Email:</label><input type="person_email" name="person_email"><br><br>

                                <label>Adress:</label><input type="person_address" name="person_address"><br><br>

                                <label>Phone No:</label><input type="person_phone" name="person_phone"><br><br><br>

                                <label>Blood Group</label><input type="blood_group" name="blood_group"><br><br>

                                   
<!-- 
                                     <label>Choose the crime place in 2013</label>
            
            
                                        <br/>
            
                                        <input type="radio" name="place1" id="sangam" value="sangam"/> <label for="place1">Triveni Sangam Allahabad</label>
                                        <br/>
                                        <input type="radio" name="place1" id="anand" value="anand"/> <label for="place1">Anand Bhavan</label>
                                        <br/>
                                        <input type="radio" name="place1" id="hanuman" value="hanuman"/> <label for="place1">Hanuman Mandir</label>
                                        <br/>
                                        <input type="radio" name="place1" id="chandrashekhar" value="chandrashekhar"/> <label for="place1">Chandrashekhar Azad Park</label>
                                        <br/>
                                        <input type="radio" name="place1" id="khusro" value="khusro"/> <label for="place1">Khusro Bagh</label>
                                        <br/>
                                        <input type="radio" name="place1" id="akshaya" value="akshaya"/> <label for="place1">Akshaya Vat</label>
                                        <br/>
                                        <input type="radio" name="place1" id="Badehanumanji" value="Badehanumanji"/> <label for="place1">Bade Hanuman Jee Temple</label>
                                        <br>
                                        <input type="radio" name="place1" id="allahabadfort" value="allahabadfort"/> <label for="place1">Allahabad Fort</label>
                                        <br/>

                                        <br/><br>

                                        <label>choose the crime place in 2014</label>
            
            

                                        <br/>

                                        <input type="radio" name="place1" id="sangam" value="sangam"/> <label for="place1">Triveni Sangam Allahabad</label>
                                        <br/>
                                        <input type="radio" name="place1" id="anand" value="anand"/> <label for="place1">Anand Bhavan</label>
                                        <br/>
                                        <input type="radio" name="place1" id="hanuman" value="hanuman"/> <label for="place1">Hanuman Mandir</label>
                                        <br/>
                                        <input type="radio" name="place1" id="chandrashekhar" value="chandrashekhar"/> <label for="place1">Chandrashekhar Azad Park</label>
                                        <br/>
                                        <input type="radio" name="place1" id="khusro" value="khusro"/> <label for="place1">Khusro Bagh</label>
                                        <br/>
                                        <input type="radio" name="place1" id="akshaya" value="akshaya"/> <label for="place1">Akshaya Vat</label>
                                        <br/>
                                        <input type="radio" name="place1" id="Badehanumanji" value="Badehanumanji"/> <label for="place1">Bade Hanuman Jee Temple</label>
                                        <br>
                                        <input type="radio" name="place1" id="allahabadfort" value="allahabadfort"/> <label for="place1">Allahabad Fort</label>
                                        <br/>

                                        <br/><br>

 -->



                                </div>  




                                <div class="add_button">
                                <button class="button_index" type="submit" name="submit">Submit</button><br><br><br>
                                </div>
                            </form>
                        </div>
                        <br><br><br><br>
                    </div>
                </div>


                <footer>
                    <div class="container">
                        <centre>
                            <p>Copyright &copy;All rights Reserved | Contact Us:+91 90000 00000</p>
                        </centre>
                    </div>
                </footer>