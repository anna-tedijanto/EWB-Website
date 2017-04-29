<!DOCTYPE html> 


<html lang = "en">

<head>
    <?php
      include_once 'includes/common.php';
      commonHeader();
    ?> 
    <script type="text/javascript">
        
            $(document).ready(function(){
                $("#sponsors").addClass("active");
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
    <div class="sponsors">
        <div class = "bannersub container-fluid">
            <div class="containersub">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <h1 class="center"><strong>SPONSORS</strong></h1>
                        <h2 class="center"><strong>The team depends on the generous support of its sponsors and could not exist without them. To become a member of the EWB sponsor group, we ask that you make a contribution to help support us in our endeavors.<br><br><a href="">Sponsorship Packet</a>&emsp;&emsp;<a href="">Make A Donation</a></strong></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class= "content">
        <hr>
        <h1 class="center"><strong>Platinum Sponsors</strong></h1>
        <hr>
        <hr>
        <h1 class="center"><strong>Gold Sponsors</strong></h1>
        <hr>
        <hr>
        <h1 class="center"><strong>Silver Sponsors</strong></h1>
        <hr>
        <hr>
        <h1 class="center"><strong>Bronze Sponsors</strong></h1>
        <hr>

        
    </div><!--end content div-->
    <?php
        commonBottom();
    ?> 



    
</body>    

</html>