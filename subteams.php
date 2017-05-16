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
                        <img class="img-fluid" src="images/skate1.jpg" alt="team">
                    </div>
                  </div><!--end row div-->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 wider">
                        <img class="img-fluid" src="images/Design1.jpg" alt="team">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 wider">
                            <p class="justify">The design side of the team concentrates on branding by developing 
                                and managing all of the team's promotional material. This includes designing all the 
                                advertising material for events and maintaining an online prescence through our website and social media pages. 
                                Students on this interdisciplinary subteam gain skills in event management, directing, 
                                design, and are essential to making our projects a reality.
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
                            <p class="justify">Our second international project will be in Upala, 
                                Costa Rica! We have partnered with CENDEROS, a Costa Rican non-profit 
                                organization which addresses the lack of opportunities for Nicaraguan 
                                migrants, especially women. CENDEROS has a 24-hour center that can 
                                house women for 72 hours. Afterwards, these women are given work on 
                                a sustainable farm, which is able to accommodate 150 women a year. 
                                The Upala, Costa Rica Team is preparing for our first assessment trip 
                                to the community where we will gather information about our project. 
                                We are anticipating a potential hydroelectric or solar energy system 
                                and are researching these areas in order to have a successful assessment trip.
                            </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 wider">
                        <img class="img-fluid" src="images/costa.jpg" alt="team">
                    </div>
                  </div><!--end row div-->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 wider">
                        <img class="img-fluid" src="images/plane.jpg" alt="team">
                    </div>
                </div><!--end row div-->
                </div><!--end tab-pane div-->

                <div id="bo" class="tab-pane fade">
                <div class="row">
                    <h1 class="wider grey"><strong>Calcha, Bolivia</strong></h1>
                  </div><!--end row div-->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 wider">
                        
                            <p class="justify">Our team partnered with the community of Calcha, Bolivia in 2013 for 
                                our first project as an EWB chapter. Through the help of an NGO in Bolivia, Engineers 
                                in Action, we have taken on two projects with this community. 
                            </p>
                            <p class="justify">
                                In the summer of 2016, 
                                we implemented a 50 meter suspension bridge that connected the community to their 
                                farmland. Previously, the farmland was inaccesible during the wet season because of a dangerous river, but 
                                now with the bridge the community has year-round access.
                            </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 wider">
                        <img class="img-fluid" src="images/calcha.jpg" alt="team">
                    </div>
                </div><!--end row div-->
                <div class=row>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 wider">
                        <img class="img-fluid" src="images/bridge3.jpg" alt="team">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 wider">
                        <p class="justify">
                                In the summer of 2017 we shifted our focus to improve the communities water access.
                                We lengthened and lined their irrigation channels to increase water flow, fixed the tiling in their water storage tank, and 
                                installed gabions to prevent erosion near the bridge foundations. 
                            
                                The Calcha, Bolivia 
                                Team will continue focusing on the monitoring both projects, including assessment of 
                                their impact as well as physical maintenance.
                            </p>
                    </div>
                </div>
                </div><!--end tab-pane div-->
                
                <div id="bing" class="tab-pane fade">
                <div class="row">
                    <h1 class="wider grey"><strong>Binghamton, New York</strong></h1>
                  </div><!--end row div-->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 wider">
                            <p class="justify">The Binghamton, NY Team is working on our first domestic project! 
                                We have partnered with Every1s Home to design and build prototypes of portable 
                                trailer homes, called E-Pods. Homelessness is major problem in large cities and 
                                Every1s Home works to alleviate this issue by relocating and employing homeless 
                                people in lower cost cities, such as Binghamton. During the transition process, 
                                people will have the opportunity to live in E-Pods while they receive job training 
                                and assistance. We have created some preliminary designs for the E-Pods and plan 
                                on constructing our first prototype in fall 2017. 
                            </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 wider">
                        <img class="img-fluid" src="images/homeless.jpg" alt="team">
                    </div>
                  </div><!--end row div-->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 wider">
                        <img class="img-fluid" src="images/foundation.jpg" alt="team">
                    </div>
                </div><!--end row div-->
                </div><!--end tab-pane div--> 

                <div id="con" class="tab-pane fade">
                <div class="row">
                    <h1 class="wider grey"><strong>Construction</strong></h1>
                  </div><!--end row div-->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 wider">
                            <p class="justify">The Construction Management Team works closely with all of our community-based teams 
                                to design and implement their projects. They plan technical workshops to train our 
                                team members in skills necessary for project assessment and implementation, including 
                                land surveying, concrete mixing, and blueprint design. They are also responsible for 
                                creating the technical drawing sets for all of our designs and determining the materials 
                                and equipment necessary for each project. The Construction Management Team ensures that 
                                our projects will be well-constructed, sustainably sourced, and within our budget.
                            </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 wider">
                        <img class="img-fluid" src="images/construction.jpg" alt="team">
                    </div>
                  </div><!--end row div-->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 wider">
                        <img class="img-fluid" src="images/construction2.jpg" alt="team">
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
