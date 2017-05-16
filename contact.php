<!DOCTYPE html> 


<html lang = "en">

<head>
    <?php
        include_once 'includes/common.php';
        commonHeader();
        require_once 'includes/config.php';
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($mysqli->errno) {
            //The page isn't worth much without a db connection so display the error and quit
            print($mysqli->error);
            exit();
        }



    ?>
    <script type="text/javascript">
        
            $(document).ready(function(){
                $("#contact").addClass("active");
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
    
<body class="contact">
    <?php
        commonTop();
    ?> 

    <div class = "banner container-fluid">
        <h1 class="center center-h"><strong>CONTACT US</strong></h1>
    </div>
    
    <div id= "content">        
        <div class="container">

        <?php
            if( isset($_SESSION['logged_user'])){
                require_once 'includes/contact_message.php';
            }
            else{
                #require_once 'includes/contact_message.php';
                require_once 'includes/contact_form.php';
            }  
        ?>
            
    	   
    	</div>
    </div>
    <?php
        commonBottom();
    ?> 
    
</body>    

</html>
