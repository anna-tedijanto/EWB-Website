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
        <h1 class = "center center-h">
            <strong>SUBTEAMS</strong>
        </h1>
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
                            <p class="justify">The Business and Design Team focus on financing EWB's projects by running
                                events and raising awareness about the organization on Cornell's campus and in the 
                                Ithaca area.
                                On the business side, students conduct several fundraisers and campaigns throughout the school year; 
                                such as the Charity Concert, fundraising campaigns, an annual Skate Night, and several sales ranging from bakesales to 
                                finals week care package sales. Additionally the business team maintains relations with our corporate sponsors, donors, 
                                and alumni to keep them informed about and involved with the team.
                            </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 wider">
                        <img class="img-fluid" src="images/team.jpg" alt="team">
                    </div>
                  </div><!--end row div-->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 wider">
                        <img class="img-fluid" src="images/team.jpg" alt="team">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 wider">
                            <p class="justify">The design side of the team concentrates on branding by developing 
                                and managing all of the team's promotional material. This includes designing all the 
                                advertising material for events and maintaining an online prescence through our website and social media pages. 
                                Students on this interdisciplinary subteam gain skills in event-management, directing, 
                                online design, and are essential to making our projects a reality.
                            </p>
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
