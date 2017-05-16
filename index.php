<?php
    session_start();
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

?>

<!DOCTYPE html> 


<html lang = "en">

<head>
    <?php
      include_once 'includes/common.php';
      commonHeader();
    ?> 
    <script type="text/javascript">
        
            $(document).ready(function(){
                $("#home").addClass("active");
                $(".nav-toggle").click(function(){
                    $(".topnav .nav-right").slideToggle();
                });
            })

            window.onresize=function(){
                var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
                if (width>1200){
                    $(".topnav .nav-right").css('display', '');
                }
            }
        
    </script>
    

</head>
    
<body>
    <?php
        commonTop();
    ?> 
        <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('styles/images/hike.jpg');">
                    <h1 class="center center-h white"><strong>ENGINEERS WITHOUT BORDERS</strong></h1>
                </div>
               
                    
                
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('styles/images/van2.jpg');">
                    <h1 class="center center-h white"><strong>ENGINEERS WITHOUT BORDERS</strong></h1>
                </div>
                
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('styles/images/bridge.jpg');">
                    <h1 class="center center-h white"><strong>ENGINEERS WITHOUT BORDERS</strong></h1>
                </div>
                
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
    <!--- banner>
    <div class = "banner container-fluid">
        <h1 class="center center-h"><strong>ENGINEERS WITHOUT BORDERS</strong></h1>
    </div>
    < !-->

    <div id = "content">        
        <div class="container">
            <div class="row">
                <h1 class="wider blue"><strong>ABOUT US</strong></h1>
            </div> 
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 wider">
                    
                        <p class="justify"> 
                        Engineers Without Borders-Cornell is a group of passionate and highly motivated students who aim to create long-lasting solutions to problems in international communities. Members are given the opportunity to nurture their creative and technical expertise by designing and implementing sustainable engineering projects. Through collaboration with communities in developing countries around the world, our members are exposed to diverse cultures while gaining academic experience outside of the classroom environment.
                        </p>
                        <P class="justify">Our growing team of 52 dedicated students includes undergraduate and
                        graduate students from several of Cornell’s colleges including the College of
                        Engineering, the College of Arts and Sciences, and the College of Agriculture
                        and Life Sciences. Our network also extends beyond Cornell’s campus to over
                        250 EWB chapters.
                        </p>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 wider">
                    <img class="img-fluid" src="images/team.jpg" alt="team">
                    <img class="img-fluid" src="images/pie_chart.png" alt="pie">
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-7">
                    <?php 
                    if (!isset($_SESSION['logged_user']) && (empty($username) || empty($password))){
                    ?>
                    <h1 class="wider blue"><strong>LOGIN</strong></h1>
                    <form class="login" method="post">
                        <input type="text" name="username" value="username" class="block">
                        <input type="password" name="password" value="password" class="block">
                        <input type="submit" value="Login" name="login">
                    </form>

                    <?php 
                    } else{
                        require_once 'includes/config.php';
            
                        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                
                        if ($mysqli->errno) {
                            print($mysqli->error);
                            exit();
                        }


                        $result = $mysqli->query('SELECT * FROM Login');

                        if (!$result) {
                            print($mysqli->error);
                            exit();
                        }

                        $verify_password = false;
                        $verify_username = false;
                        while (($row = $result->fetch_assoc()) && (!$verify_username) && (!$verify_password)) {
                            $valid_password = $row['password'];
                            $valid_username = $row['username'];

                            $verify_password = password_verify($password, $valid_password);
                            if ($username == $valid_username){
                                $verify_username = true;
                            } else{
                                $verify_username = false;
                            }
                        }
                        if (($verify_username) && ($verify_password)){
                            $_SESSION['logged_user'] = $username;
                        } else{
                            if (!isset($_SESSION['logged_user']) && (!isset($_POST['logout']))){
                                print('<h1 class="wider blue"><strong>LOGIN</strong></h1>
                                        <form class="login" method="post">
                                            <input type="text" name="username" value="username" class="block">
                                            <input type="password" name="password" value="password" class="block">
                                            <input type="submit" value="Login" name="login">
                                        </form>');
                                print('Sorry, you entered an invalid username and password combination and could not be logged in.');
                            }
                        }
                    }
                    if(isset($_SESSION['logged_user']) ){
                        if (!isset($_POST['logout'])){
                    ?>
                    <h1 class="wider blue"><strong>LOGOUT</strong></h1>
                    <form class="login" method="post">
                        <input type="submit" value="Logout" name="logout">
                    </form>

                    <?php
                    } else{
                        unset($_SESSION['logged_user']);
                        unset($_SESSION);
                        $_SESSION = array();
                        session_destroy();
                    ?>
                    <h1 class="wider blue"><strong>LOGIN</strong></h1>
                    <form class="login" method="post">
                        <input type="text" name="username" value="username" class="block">
                        <input type="password" name="password" value="password" class="block">
                        <input type="submit" value="Login" name="login">
                    </form>
                    <?php
                        }
                    }
                    ?>
                </div>
                </div>

            </div>
           
        </div>
    </div>
    <?php
        commonBottom();
    ?>

    <!-- Bootstrap Core JavaScript -->
    <script src="scripts/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 300000 //changes the speed
    })
    </script>

    
</body>    

</html>
