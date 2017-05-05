<!DOCTYPE html> 


<html lang = "en">

<head>
    <?php
      include_once 'includes/common.php';
      commonHeader();
    ?> 
    <script type="text/javascript">
        
            $(document).ready(function(){
                $("#subteams").addClass("active");
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
                    <h1 class="center"><strong>SUBTEAMS</strong></h1>
                    <h2 class="center"><strong>Engineers Without Borders is made up of 
                        10 subteams that work together to ensure the success of the project team. Our growing team of 52 dedicated students includes undergraduate and
                        graduate students from several of Cornell’s colleges.
                        and Life Sciences.</strong></h2>
                </div>
            </div>
        </div>
    </div>
    <div id = "content">        
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align="center" wider">
                <div class="subteam-bar">
                  <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#exec">Executive Board</a></li>
                    <li><a data-toggle="tab" href="#bus-des">Business and Design</a></li>
                    <li><a data-toggle="tab" href="#cr">Costa Rica</a></li>
                    <li><a data-toggle="tab" href="#bo">Bolivia</a></li>
                    <li><a data-toggle="tab" href="#bing">Binghamton</a></li>
                    <li><a data-toggle="tab" href="#con">Construction</a></li>
                  </ul>
                </div>
            </div>
          </div>
              <div class="tab-content">
                <div id="exec" class="tab-pane fade">
                  <div class="row">
                    <h1 class="wider grey"><strong>Executive Board</strong></h1>
                  </div><!--end row div-->
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
                            <p class="justify">Our growing team of 52 dedicated students includes undergraduate and
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
                </div><!--end row div-->
                </div><!--end tab-pane div-->

                <div id="bus-des" class="tab-pane fade">
                <div class="row">
                    <h1 class="wider grey"><strong>Business and Design</strong></h1>
                  </div><!--end row div-->
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
                            <p class="justify">Our growing team of 52 dedicated students includes undergraduate and
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
                </div><!--end row div-->
                </div><!--end tab-pane div-->

                <div id="cr" class="tab-pane fade">
                <div class="row">
                    <h1 class="wider grey"><strong>Upala, Costa Rica</strong></h1>
                  </div><!--end row div-->
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
                            <p class="justify">Our growing team of 52 dedicated students includes undergraduate and
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
                </div><!--end row div-->
                </div><!--end tab-pane div-->

                <div id="bo" class="tab-pane fade">
                <div class="row">
                    <h1 class="wider grey"><strong>Calcha, Bolivia</strong></h1>
                  </div><!--end row div-->
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
                            <p class="justify">Our growing team of 52 dedicated students includes undergraduate and
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
                </div><!--end row div-->
                </div><!--end tab-pane div-->
                
                <div id="bing" class="tab-pane fade">
                <div class="row">
                    <h1 class="wider grey"><strong>Binghamton, New York</strong></h1>
                  </div><!--end row div-->
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
                            <p class="justify">Our growing team of 52 dedicated students includes undergraduate and
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
                </div><!--end row div-->
                </div><!--end tab-pane div--> 

                <div id="con" class="tab-pane fade">
                <div class="row">
                    <h1 class="wider grey"><strong>Construction</strong></h1>
                  </div><!--end row div-->
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
                            <p class="justify">Our growing team of 52 dedicated students includes undergraduate and
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
                </div><!--end row div-->
                </div><!--end tab-pane div--> 

              </div><!--end tab-content div-->
        </div><!--end container div-->
    </div><!--end content div-->
    <?php
        commonBottom();
    ?> 

<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    
</body>    

</html>
