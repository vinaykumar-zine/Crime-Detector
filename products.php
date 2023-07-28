<?php
session_start();
if (!isset($_SESSION["email"])) {
   header("location: /");
  }
?>
<!DOCTYPE html>
<head>
<!-- The page has a title Lifestyle Store-->
<title>Products</title>

<link href="index.css" rel="stylesheet" type="text/css"/>

</head>
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

    <div class="container" style="padding-left:360px">
        <div >
            <h1><br> Welcome to Crime Detector</h1>
            <br><br><br>
        </div>
    </div>

    <div class="container">
        <div class="items">
            <img src="image/1.jpeg" alt="" class="thumbnail">
            <div class="caption">
                <h3>Victor Chef</h3>
                <p>Thief</p>
                <a href="detail/person1.php" class="button_products">View</a>
                
            </div>
        </div>
        <div class="items">
            <img src="image/2.jpeg" alt="" class="thumbnail">
            <div class="caption">
                <h3>John Eric</h3>
                <p>Gangster</p>
                <a href="detail/person2.php" class="button_products">View</a>
            </div>
        </div>
        <div class="items">
            <img src="image/3.jpeg" alt="" class="thumbnail">
            <div class="caption">
                <h3>Daniel Faulkner</h3>
                <p>Muderer</p>
                <a href="detail/person3.php" class="button_products">View</a>
            </div>
        </div>
        <div class="items">
            <img src="image/4.jpeg" alt="" class="thumbnail">
            <div class="caption">
                <h3>Mehmet </h3>
                <p>Gangster</p>
                <a href="detail/person4.php" class="button_products">View</a>
            </div>
        </div>
        <div class="items">
            <img src="image/5.jpeg" alt="" class="thumbnail">
            <div class="caption">
                <h3>Alejandro Avila</h3>
                <p>Cyber crimes</p>
                <a href="detail/person5.php" class="button_products">View</a>
            </div>
        </div>
        <div class="items">
            <img src="image/6.jpeg" alt="" class="thumbnail">
            <div class="caption">
                <h3>Ali Agca</h3>
                <p>Kidnaper</p>
                <a href="detail/person6.php" class="button_products">View</a>
            </div>
        </div>
        <div class="items">
            <img src="image/7.jpeg" alt="" class="thumbnail">
            <div class="caption">
                <h3>John Paul</h3>
                <p>Gangster</p>
                <a href="detail/person7.php" class="button_products">View</a>
            </div>
        </div>
        <div class="items">
            <img src="image/8.jpeg" alt="" class="thumbnail">
            <div class="caption">
                <h3>Frank Costello</h3>
                <p>Kidnaper</p>
                <a href="detail/person8.php" class="button_products">View</a>
            </div>
        </div>
        <div class="items">
            <img src="image/9.jpeg" alt="" class="thumbnail">
            <div class="caption">
                <h3>Jesse</h3>
                <p>Gangster</p>
                <a href="detail/person9.php" class="button_products">View</a>
                <br/><br/><br/><br/>
            </div>
        </div>

        <div class="items">
            <img src="image/10.jpeg" alt="" class="thumbnail">
            <div class="caption">
                <h3>Luis Phill</h3>
                <p>Cyber crimes</p>
                <a href="detail/person10.php" class="button_products">View</a>
            </div>
        </div>
        <div class="items">
            <img src="image/11.jpeg" alt="" class="thumbnail">
            <div class="caption">
                <h3>John Zok</h3>
                <p>Gangster</p>
                <a href="detail/person11.php" class="button_products">View</a>
            </div>
        </div>
        <div class="items">
            <img src="image/12.jpeg" alt="" class="thumbnail">
            <div class="caption">
                <h3>Jhalsani Paul</h3>
                <p>Kidnaper</p>
                <a href="detail/person12.php" class="button_products">View</a>
            </div>
        </div>

    </div>

    <footer>
        <div class="container">
            <centre>
                <p>Copyright &copy; All rights Reserved | Contact Us:+91 90000 00000</p>
            </centre>
        </div>
    </footer>

</body>
</html>