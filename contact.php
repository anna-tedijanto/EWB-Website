<!DOCTYPE html> 


<html lang = "en">

<head>
    <?php
      include_once 'includes/common.php';
      commonHeader();
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
    <div class= "content">        
        <div class="container">
            <div class="shadow">
                <div class="row">
                    <h1 class="center white"><strong>C O N T A C T</strong></h1>
                </div>
                <div class="row main">
                    <div class="col-md-3 col-lg-3 col-lg-offset-1 info">
                        <p><span class="glyphicon glyphicon-map-marker"></span> Cornell University Ithaca, NY</p>
                        <p><span class="glyphicon glyphicon-phone"></span> Phone:+16072299482</p>
                        <p><span class="glyphicon glyphicon-envelope"></span> Email:ewb@gmail.com</p>
                        <p><span></span></p>
                    </div>

                    <div class="col-md-8 col-lg-7">
                        <form method="post">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <input type="text" name="Name" value="Name" class="contact-form">
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <input type="text" name="Email" value="Email" class="contact-form">
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-lg-12">
                            <input type="text" name="Subject" value="Subject" class="contact-form">
                            </div>
                        </div>
                            <textarea rows="6" class="contact-form">Message</textarea>
                            
                        <div class="row">
                            <input type="submit" value="send" class="pull-right bb">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    	   
    	</div>
    </div>

    
</body>    

</html>
