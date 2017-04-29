<!DOCTYPE html> 


<html lang = "en">

<head>
    <?php
      include_once 'includes/common.php';
      commonHeader();
    ?> 
    <script type="text/javascript">
        
            $(document).ready(function(){
                $("#members").addClass("active");
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
    <div class = "banner container-fluid">
      <h1 class = "center center-h"><strong>MEMBERS</strong></h1>
    </div>

    <div class= "content">        
        <div class="container">
            <div class="row">
              <?php
                include_once 'includes/config.php';
                
                $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                if ($mysqli->connect_errno) {
                  printf("Connect failed: %s\n", $mysqli->connect_error);
                  exit(1);
                }
                
                $result = $mysqli->query("SELECT * FROM Members");
                while ($row = $result->fetch_assoc()) {
                  print("<div id='bioholder_${row['id']}' onclick='collapseAllBut(${row['id']})' data-des='${row['description']}' data-major=".'"'."${row['major']}".'"'.">
                           <div class = 'col-md-2 col-lg-2 col-sm-4 col-xs-6'>
                             <div class='team-member'>
                               <div class='team-member-mouseover-box'></div>
                               <img id='${row['id']}' class='img-responsive team-member-photo' src='${row['url']}'/>
                             </div>
                           </div>
                         </div>");
                }
                $mysqli->close();
              ?>
              
            </div>
           
        </div>
    </div>
    <?php
        include 'includes/bottom.php';
    ?> 

    
</body>    

</html>
