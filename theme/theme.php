<?php
    global $path, $session;
    $apikey = $session['apikey_read'];
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<!------------------------------------------------------------------------------------------>
<!-- HEAD ---------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------>
<head>
  <script> 
      var path = "<?php print $path; ?>"; 
      var session = JSON.parse('<?php echo json_encode($session); ?>');
      var apikey = "<?php print $apikey; ?>";
  </script>

  <title>Energy | Emoncms</title>

  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat&amp;lang=en" />    
  <link rel="shortcut icon" href="<?php echo $path; ?>theme/favicon.ico" />
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta name="theme-color" content="#44b3e2" />

  <!-- Load CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>theme/style.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>theme/buttons.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>theme/table.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>theme/forms.css" />

  <!-- Load javascript -->
  <script type="text/javascript" src="<?php echo $path; ?>lib/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="<?php echo $path; ?>lib/feed.js"></script>

</head>
<!------------------------------------------------------------------------------------------>
<!-- BODY ---------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------>
<body>

  <!-- Top-bar navigation ------------------------------------------------------------------>
  <div class="topnav">
      <div class="topnav-menu"><img src="<?php echo $path; ?>theme/list-menu-icon.png" style="height:40px; padding:1px;"></div>
      
      <div class="topnav-title">
            <strong>&nbsp;Energy</strong>&nbsp;|&nbsp;Emon<strong>CMS</strong>
      </div>
  </div>

  <!-- Side-bar navigation ----------------------------------------------------------------->
  <div class="sidenav">
    <div class="sidenav_inner">
      <!--<img src="<?php echo $path; ?>files/emoncms_logo.png" style="width:200px;">-->

      <div id="appmenu"></div>
      <br><br>
      <b>Settings</b><br>
      <a href="<?php echo $path; ?>autoconfig">Device config</a>
      <!--<a href="<?php echo $path; ?>#">Email Reports</a>-->
      <a class="logout" href="<?php echo $path; ?>#">Logout</a>
      <br><br>
      <b>Energy</b><br>
      <a href="<?php echo $path; ?>intro">Introduction</a>
    </div>
  </div>
  
  <div class="topspacer"></div>

  <!-- Content ----------------------------------------------------------------------------->
  <div class="container">
    <div class="row">
      <?php echo $content; ?>
    </div>
  </div>

  <div class="blackOut"></div>
</body>
</html>

<script type="text/javascript" src="<?php echo $path; ?>view/appmenu3.js"></script>

<script>

var sidenav_open = true; 

$(".logout").click(function() {
    $.ajax({                   
        url: path+"/logout",
        dataType: 'text',
        success: function(result) {
            window.location = "";
        }
    });
});

$(".topnav-menu").click(function(){
    if ($(".sidenav").css("width")=="250px") sidenav_open = true;
    if ($(".sidenav").css("width")=="0px") sidenav_open = false;
    if (!sidenav_open) {
        $(".blackOut").show();
        $(".sidenav").css("width","250px");
        sidenav_open = true;
    } else {
        $(".blackOut").hide();
        $(".sidenav").css("width","0px");
        sidenav_open = false;
    }
});

$(".blackOut").click(function(){
    $(".blackOut").hide();
    $(".sidenav").css("width","0px");
    sidenav_open = false; 
});

function window_resize() {
  var width = $(window).width();
  var height = $(window).height();
  
  if (width>=960) {
      $(".sidenav").css("width","250px");
      $(".blackOut").hide();
      
  } else if (width>=450 && width<960) {
      $(".sidenav").css("width","0px");
      $(".blackOut").hide();
      
  } else if (width<450) {
      $(".sidenav").css("width","0px");
      $(".blackOut").hide();
      
  }
}

window_resize();
$(window).resize(function(){
    window_resize();
});
</script>
