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
                    <div class="col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
                        <h1 class="center"><strong>SPONSORS</strong></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class= "content">
        <div class= "content2">
           <div class="container">
            <div class="row">
                <h1 class="wider blue"><strong><br>EWB Sponsorship</strong></h1>
            </div> 
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 wider">
                    
                        <p class="justify"> 
                        Engineers Without Borders-Cornell is a group of passionate and highly motivated students who aim to create long-lasting solutions to problems in international communities. Members are given the opportunity to nurture their creative and technical expertise by designing and implementing sustainable engineering projects. Through collaboration with communities in developing countries around the world, our members are exposed to diverse cultures while gaining academic experience outside of the classroom environment.
                        </p>
                        <h2 class="center"><br><a href="includes/sponsors.pdf" target = '_blank'>Sponsorship Packet</a></h2>
                        
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 wider">
                    <img class="img-fluid" src="images/van.jpg" alt="team">
                    </div>
                </div>
            </div>
            </div>
            <hr>
            <h1 class="center"><strong>Platinum Sponsors</strong></h1>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 wider">
                        <a href="http://www.greatlakescheese.com/" target = '_blank'><img class="img-fluid" src="images/logo-glc.png" alt = "plat-spon-1"></a>
                    </div>
                </div>
            </div>
            <hr>
            <h1 class="center"><strong>Gold Sponsors</strong></h1>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1 wider">
                        <a href="http://www.millerandlong.com/" target = '_blank'><img class="img-fluid" src="images/long-logo.png" alt = "gold-spon-1"></a>
                    </div>
                    <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2 wider">
                        <a href="http://tetratech-ae.com/" target = '_blank'><img class="img-fluid" src="images/logo-tetra.png" alt = "gold-spon-2"></a>
                    </div>
                </div>
            </div>
            <hr>
            <h1 class="center"><strong>Silver Sponsors</strong></h1>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-2 col-lg-3 col-lg-offset-1 wider">
                        <a href="http://www.ey.com/" target = '_blank'><img class="img-fluid" src="images/logo-ey.png" alt = "sil-spon-1"></a>
                    </div>
                    <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-4 col-lg-3 col-lg-offset-4 wider">
                        <a href="http://www.growmarkfs.com/Pages/default.aspx" target = '_blank'><img class="img-fluid" src="images/logo-fs.png" alt = "sil-spon-2"></a>
                    </div>
                </div>
            </div>
            <hr>
            <h1 class="center"><strong>Bronze Sponsors</strong></h1>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-1 col-lg-3 col-lg-offset-1 wider">
                        <a href="https://www.microsoft.com/en-us/" target = '_blank'><img class="img-fluid" src="images/logo-micro.jpg" alt = "bro-spon-1"></a>
                    </div>
                    <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-3 col-md-offset-4 col-lg-3 col-lg-offset-4 wider">
                        <a href="https://www.stickermule.com/" target = '_blank'><img class="img-fluid" src="images/logo-mule.png" alt = "bro-spon-2"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 wider">
                        <a href="https://insomniacookies.com/" target = '_blank'><img class="img-fluid" src="images/logo-in.png" alt = "bro-spon-3"></a>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end content div-->
    <?php
        commonBottom();
    ?> 



    
</body>    

</html>