<!DOCTYPE html>
<html>
<head>
    <!-- Noriel Achero | 3 BSCS 2 -->
    <title>Noriel Achero</title>

    <link rel = "icon" href="images/icon.png">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="css/style.css" crossorigin="anonymous"> -->

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Oswald:wght@200..700&display=swap');

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Barlow", sans-serif;
            background-color: rgb(22, 22, 22);
            color: white;
        }

        /* navbar */
        .navbar {
            background-color: transparent;
            color: white;
        }

        .navbar-brand {
            color: white;
        }

        .navbar-nav > li > a {
            color: white;
        }

        .navbar-nav > li > a:hover,
        .navbar-nav > li > a:focus,
        .navbar-nav > li > a:active,
        .navbar-brand:hover,
        .navbar-brand:focus,
        .navbar-brand:active {
            color: #FD6262;
            background-color: transparent !important;
        }

        /* home section */
        #home {
            position: absolute;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            background-size: cover;
            animation: animate 30s ease-in-out infinite;
            position: relative;
            background-repeat: no-repeat;
        }

        @keyframes animate {
            0%, 100% {
                background-image: url('images/banner.jpg');
            }

            25% {
                background-image: url('images/banner2.jpg');
            }

            50% {
                background-image: url('images/banner3.jpg');
            }

            75% {
                background-image: url('images/banner4.jpg');
            }
        }

        .header {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            font-size: 20px;
        }

        .banner_name {
            color: white;
            font-size: 60px;
        }

        /* skills */
        #skills {
            position: relative;
            min-height: 100vh;
            max-height: auto;
            padding-top: 100px;
            padding-bottom: 100px;
        }

        img {
            width: 300px;
            transition: opacity is ease-in-out;
        }

        .container-skills {
            background-color: rgb(37, 37, 37);
            padding: 50px;
            box-shadow: rgba(0, 0, 0, 0.35) 30px 30px 20px;
            border: 3px solid #FD6262;
            border-radius: 12px;
        }

        /* about */
        #about {
            position: relative;
            min-height: 100vh;
            max-height: auto;
            overflow: hidden;
            background-size: cover;
            animation: animate 30s ease-in-out infinite;
            position: relative;
            padding-top: 100px;
            padding-bottom: 100px;
            background-repeat: no-repeat;
        }

        @keyframes animate {
            0%, 100% {
                background-image: url('images/banner.jpg');
            }

            25% {
                background-image: url('images/banner2.jpg');
            }

            50% {
                background-image: url('images/banner3.jpg');
            }

            75% {
                background-image: url('images/banner4.jpg');
            }
        }

        .thumbnail:hover{
            opacity: 70%;
        }


        /* contact */

        #contact{
            position: relative;
            min-height: 100vh;
            max-height: auto;
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .container-contact{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            font-size: 20px;
        }

        .btn {
            background-color: #FD6262;
           
            font-weight: bold;
            color: white;
        }
        .btn:hover {
            background-color: #FD6262;
            border-color: #FD6262;
            opacity: 80%;
            color: white;
        }
        .btn:active {
            background-color: #FD6262;
            border-color: #FD6262;
            
            color: white;
        }
        .btn:focus {
            background-color: #FD6262;
            border-color: #FD6262;
            box-shadow: 0 0 0 0.2rem rgba(253, 98, 98, 0.5);
            color: white;
        }

        footer {
        background-color: #FD6262;
        color: rgb(22, 22, 22);
        padding: 20px 0;
        text-align: center;
        }

        footer p {
            margin-bottom: 10px;
            font-weight: bold;
        }

        footer p:last-child {
            margin-bottom: 0;
        }



    </style>



</head>

<body data-spy="scroll" data-target=".navbar">
<nav class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="glyphicon glyphicon-menu-hamburger"></span> <!-- Icon here -->
            </button>

            <?php
                nav();
            ?>
    </div>
</nav>


<section id="home">
    <div class="header">
        <center>
        <?php
            home();
        ?>
        </center>



    </div>
</section>

<section id="skills">
    <div class="container container-skills">
        <div class="page-header">
            <?php
             include("admin/includes/sqlconnection.php");

             $sql = "SELECT * FROM navbar";
     
             $result = $conn->query($sql);

             if ($result->num_rows > 0) {
                $brandArr = [];
                $nav1Arr = [];
                $nav2Arr = [];
                $nav3Arr = [];
                $nav4Arr = [];
            }
    
            while ($row = $result->fetch_assoc()) {
                $brandArr[] = $row['brand'];
                $nav1Arr[] = $row['nav1'];
                $nav2Arr[] = $row['nav2'];
                $nav3Arr[] = $row['nav3'];
                $nav4Arr[] = $row['nav4'];
            }

            foreach($nav2Arr as $nav2){
             echo "<h1 class='text-center' style='font-size: 60px; font-weight: bold; text-transform: uppercase;'>$nav2</h1>";
            }

            ?>
            
        </div>
        <div class="row">
            <?php
                secondSection();
            ?>
        </div>
    </div>
</section>

<section id="about">
    <div class="container container-about">
        <div class="page-header">
        <?php
             include("admin/includes/sqlconnection.php");

             $sql = "SELECT * FROM navbar";
     
             $result = $conn->query($sql);

             if ($result->num_rows > 0) {
                $brandArr = [];
                $nav1Arr = [];
                $nav2Arr = [];
                $nav3Arr = [];
                $nav4Arr = [];
            }
    
            while ($row = $result->fetch_assoc()) {
                $brandArr[] = $row['brand'];
                $nav1Arr[] = $row['nav1'];
                $nav2Arr[] = $row['nav2'];
                $nav3Arr[] = $row['nav3'];
                $nav4Arr[] = $row['nav4'];
            }

            foreach($nav3Arr as $nav3){
             echo "<h2 class='text-center'>$nav3</h2>";
            }

            ?>
            
        </div>
        <br>
        <br>
        <?php
            about();


        ?>
    </div>
</section>

<section id="contact">
    <div class="container container-contact">
    <?php
             include("admin/includes/sqlconnection.php");

             $sql = "SELECT * FROM navbar";
     
             $result = $conn->query($sql);

             if ($result->num_rows > 0) {
                $brandArr = [];
                $nav1Arr = [];
                $nav2Arr = [];
                $nav3Arr = [];
                $nav4Arr = [];
            }
    
            while ($row = $result->fetch_assoc()) {
                $brandArr[] = $row['brand'];
                $nav1Arr[] = $row['nav1'];
                $nav2Arr[] = $row['nav2'];
                $nav3Arr[] = $row['nav3'];
                $nav4Arr[] = $row['nav4'];
            }

            foreach($nav4Arr as $nav4){
             echo "<h2 class='text-center'>$nav4</h2>";
            }

            ?>
            
        <br>
        <div class="row">
            <form class="col-md-6 col-md-offset-3">
                <div class="form-group">
                    <input class="form-control" placeholder="Enter Your Name" type="text">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Enter Your E-mail" type="email">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Subject" type="text">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Noriel Achero | 3 BSCS 2</p>
                <p>&copy; 2024 All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>


<?php
    
    function nav(){
        include("admin/includes/sqlconnection.php");

        $sql = "SELECT * FROM navbar";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $brandArr = [];
            $nav1Arr = [];
            $nav2Arr = [];
            $nav3Arr = [];
            $nav4Arr = [];
        }

        while ($row = $result->fetch_assoc()) {
            $brandArr[] = $row['brand'];
            $nav1Arr[] = $row['nav1'];
            $nav2Arr[] = $row['nav2'];
            $nav3Arr[] = $row['nav3'];
            $nav4Arr[] = $row['nav4'];
        }

        echo "<a class='navbar-brand' href='#'> <span class='glyphicon glyphicon-chevron-left' style = 'color: #FD6262;'><span class = ''><font style='font-size: 20px; font-weight: bold; '>/</font></span></i></span><span style = 'color: #FD6262;' class='glyphicon glyphicon-chevron-right'></span> ";
        foreach($brandArr as $brand){
            echo " $brand";
        }

        echo "</a>
        </div>
        <div class='collapse navbar-collapse' id='myNavbar'>
        <ul class='nav navbar-nav navbar-right'>
        ";

        foreach($nav1Arr as $nav1){
            echo "<li><a href='#home'>$nav1</a></li>";
        }
        foreach($nav2Arr as $nav2){
            echo "<li><a href='#skills'>$nav2</a></li>";
        }
        foreach($nav3Arr as $nav3){
            echo "<li><a href='#about'>$nav3</a></li>";
        }
        foreach($nav4Arr as $nav4){
            echo "<li><a href='#contact'>$nav4</a></li>";
        }

        echo "<li><a href='admin/'>Log-In</a></li>";

        echo" </ul>
        </div>
        ";




    }
    function home(){
        include("admin/includes/sqlconnection.php");

        $sql = "SELECT * FROM home";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $nameArr = [];
            $descriptionArr = [];
        
        }

        while ($row = $result->fetch_assoc()) {
            $nameArr[] = $row['name'];
            $descriptionArr[] = $row['description'];
        }

        echo "<font class='banner_name'> <b>";

        foreach($nameArr as $name){
            echo "$name";
        }

        echo "</b></font><br>";

        echo "<font color='#FD6262'>";

        foreach($descriptionArr as $desc){
            echo "$desc";
        }

        echo "</b></font><br>";
    }

    function secondSection(){
        include("admin/includes/sqlconnection.php");

        $sql = "SELECT * FROM secondsection";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $imageArr = [];
        }

        while ($row = $result->fetch_assoc()) {
            $imageArr[] = $row['image'];
        }

        $int = 0;
        foreach($imageArr as $image){
            echo "<div class='col-md-4'>
            <a href='' class='thumbnail' id='disabledImage$int'>
                <img src='admin/uploads/$image'>
            </a>
        </div> ";
        $int++;
        }
    }

    function about(){

        include("admin/includes/sqlconnection.php");

        $sql = "SELECT * FROM thirdsection";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $profileArr = [];
            $descArr = [];
        }

        while ($row = $result->fetch_assoc()) {
            $profileArr[] = $row['profile'];
            $descArr [] = $row['description'];
        }

     
        echo " <div class='row'>
        <div class='col-md-4 col-md-offset-4'>";
        foreach($profileArr as $profile){
            echo "<img src='admin/uploads/$profile'class='img-responsive img-circle center-block' alt='Profile Image'>";
        }
        echo "</div>
        </div>
        <br>
        <br>
        <br>
        <div class='row'>
        <div class='col-md-8 col-md-offset-2'>";
        foreach($descArr as $desc){
        echo"<p class='text-center'>$desc</p> </div>
        </div>";
        }
    
    }
?>

<script>
    for(let i = 0; i <= 30; i++)
        document.getElementById("disabledImage" + i).onclick = function(event) {
            event.preventDefault(); 
            
        };
</script>



