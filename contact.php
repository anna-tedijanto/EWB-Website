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
    
<body>
    <?php
        commonTop();
    ?> 
    <div class = "bannersub container-fluid">
        <div class="containersub">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    
                </div>
            </div>
        </div>
    </div>
    <div id= "content">        
        <div class="container">
            <div class="row">
                <h1 class="wider blue title center "><strong>CONTACT US NOW!</strong></h1>
            </div>
            <div class="row main">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
                    <p class="blue">TEL</p>
                    <p>(607) 229 9482</p>
                    <br>
                    <p class="blue">EMAIL</p>
                    <p>ewb@gmail.com</p>
                    <br>
                    <p class="blue">ADDRESS</p>
                    <p>Cornell University Ithaca, NY, 14850</p>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-7">
                    <form class="contact" method="post">
                        <input type="text" name="Name" value="Name" class="block">
                        <input type="text" name="Email" value="Email" class="block">
                        <input type="text" name="Subject" value="Subject" class="block">
                        <textarea rows="6" cols="43" class="block">Message</textarea>
                        <input type="submit" value="send">
                    </form>
                </div>

            </div>
    	   
    	</div>
    </div>
    <?php
        commonBottom();
    ?> 

    
</body>    

</html>
