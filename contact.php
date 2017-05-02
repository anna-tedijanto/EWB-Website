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

            <div class="row">
                <h1 class="center white"><strong>M e s s a g e</strong></h1>
            </div>
            <div class="row">
                <form>
                    <div class="col-lg-4">
                        <input type="text" name="Search" class="block"><span class="glyphicon glyphicon-search" style="font-size:13px; left:-30px; color: #000"></span>
                    </div>
                    
                    <div class="col-lg-2 col-lg-push-6">
                        <div class="contact-form center">
                        Date
                        <a href=""><span class="glyphicon glyphicon-arrow-up" style="color: #000"></span></a>
                        <a href=""><span class="glyphicon glyphicon-arrow-down" style="color:#000"></span></a>
                        </div>
                    </div>
                </form>
            </div>
            <div id="messages">
                <div class="row">
                    <div class="Message-box shadow-white col-md-6">                    
                        <div><h3>Subject:Questions<h3></div>
                        <div>2013-11-12 19:27:44</div>
                        <div>From:Yijing Wang | Email:yw774@cornell.edu</div>
                        <div><br>Engineers Without Borders-Cornell is a group of passionate and highly motivated students who aim to create long-lasting solutions to problems in international communities. Members are given the opportunity to nurture their creative and technical expertise by designing and implementing sustainable engineering projects. Through collaboration with communities in developing countries around the world, our members are exposed to diverse cultures while gaining academic experience outside of the classroom environment.</div>
                    </div>
                    <div class="Message-box shadow-white col-md-6">                    
                        <div><h3>Subject:Questions<h3></div>
                        <div>2013-11-12 19:27:44</div>
                        <div>From:Yijing Wang | Email:yw774@cornell.edu</div>
                        <div><br>Engineers Without Borders-Cornell is a group of passionate and highly motivated students who aim to create long-lasting solutions to problems in international communities. Members are given the opportunity to nurture their creative and technical expertise by designing and implementing sustainable engineering projects. Through collaboration with communities in developing countries around the world, our members are exposed to diverse cultures while gaining academic experience outside of the classroom environment.</div>
                    </div>
                    <div class="Message-box shadow-white col-md-6">                    
                        <div><h3>Subject:Questions<h3></div>
                        <div>2013-11-12 19:27:44</div>
                        <div>From:Yijing Wang | Email:yw774@cornell.edu</div>
                        <div><br>Engineers Without Borders-Cornell is a group of passionate and highly motivated students who aim to create long-lasting solutions to problems in international communities. Members are given the opportunity to nurture their creative and technical expertise by designing and implementing sustainable engineering projects. Through collaboration with communities in developing countries around the world, our members are exposed to diverse cultures while gaining academic experience outside of the classroom environment.</div>
                    </div>
                    <div class="Message-box shadow-white col-md-6">                    
                        <div><h3>Subject:Questions<h3></div>
                        <div>2013-11-12 19:27:44</div>
                        <div>From:Yijing Wang | Email:yw774@cornell.edu</div>
                        <div><br>Engineers Without Borders-Cornell is a group of passionate and highly motivated students who aim to create long-lasting solutions to problems in international communities. Members are given the opportunity to nurture their creative and technical expertise by designing and implementing sustainable engineering projects. Through collaboration with communities in developing countries around the world, our members are exposed to diverse cultures while gaining academic experience outside of the classroom environment.</div>
                    </div>
                </div>
            </div>    
            
            <div class="shadow">
                <div class="row">
                    <h1 class="center white"><strong>C o n t a c t</strong></h1>
                </div>
                <div class="row main">
                    <div class="col-md-3 col-lg-4 info">
                        <p><span class="glyphicon glyphicon-map-marker"></span> Ithaca, NY</p>
                        <p><span class="glyphicon glyphicon-phone"></span> Phone:+16072299482</p>
                        <p><span class="glyphicon glyphicon-envelope"></span> Email:ewb@gmail.com</p>
                        <p><span></span></p>
                    </div>

                    <div class="col-md-8 col-lg-8">
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
                            <div class="col-lg-12">
                            <input type="submit" value="send" class="pull-right bb">
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            
    	   
    	</div>
    </div>

    
</body>    

</html>
