<!DOCTYPE html> 


<html lang = "en">

<head>
    
    <meta charset="utf-8">
    <title>Engineers Without Borders</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Proxima+Nova" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
        include 'includes/top.php';
    ?> 

    <div class = "banner container-fluid">
        <h1 class="center center-h"><strong>ENGINEERS WITHOUT BORDERS</strong></h1>
    </div>
    <div id = "content">        
        <div class="container">
            <div class="row">
                <h1 class="wider blue"><strong>ABOUT US</strong></h1>
            </div> 
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 wider">
                    
                        <p class="justify">Engineers Without Borders-Cornell is a group of passionate and highly
                        motivated students who aim to create long-lasting solutions to problems in
                        international communities. Members are given the opportunity to nurture their
                        creative and technical expertise by designing and implementing sustainable
                        engineering projects. Through collaboration with communities in developing
                        countries around the world, our members are exposed to diverse cultures
                        while gaining academic experience outside of the classroom environment.
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
                </div>

            </div>
    	   
    	</div>
    </div>
    <?php
        include 'includes/bottom.php';
    ?> 

    
</body>    

</html>