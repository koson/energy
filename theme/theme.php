<!doctype html>
<?php
    global $path, $session;
    $apikey = $session['apikey_read'];
?>
<script> 
    var path = "<?php print $path; ?>"; 
    var session = JSON.parse('<?php echo json_encode($session); ?>');
    var apikey = "<?php print $apikey; ?>";
</script>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat&amp;lang=en" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>theme/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>theme/buttons.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>theme/table.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>theme/forms.css" />
<script type="text/javascript" src="<?php echo $path; ?>lib/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php echo $path; ?>lib/feed.js"></script>

<style>
  body {

  }

  .topmenu {
    background-color:#29abe2;
  }
  
  .topbar {
    background-color:#44b3e2;
    height:42px;
  }
</style>

<body>



  <div class="sidenav">
    <div class="sidenav_inner">
      <!--<img src="<?php echo $path; ?>files/emoncms_logo.png" style="width:200px;">-->
      <br><br>
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
  
  <div class="topnav">
      <div class="topnav-menu"><img src="<?php echo $path; ?>theme/list-menu-icon.png" style="height:40px; padding:1px;"></div>
      
      <div class="topnavTitle-titleWrapper">
        <span>
            <strong>&nbsp;Energy</strong>&nbsp;|&nbsp;Emon<strong>CMS</strong>
        </span>
      </div>
      
      
  </div>
  
  <div style="height:1px; background-color:#7ccaea"></div>
  

  <div class="container">
    <div class="row">
      <?php echo $content; ?>
    </div>
  </div>

</body>

<script type="text/javascript" src="<?php echo $path; ?>view/appmenu3.js"></script>

<script>
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
    $(".sidenav").css("width","250px");
});
</script>
