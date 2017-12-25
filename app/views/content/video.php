<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
  
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
    <?php 
echo load::css("adres");
   ?>
    
    <style type="text/css">
 
    </style>
        <title><?php echo Session::get("baslik");?></title>
  </head>
<body>
     <nav id="solpencere" class="panelside hidden-lg hidden-md" role="navigation">
     <div class="visible-xs visible-sm pull-right">
     <a href="#solpencere" class="menu-link vukuat-icon-menu-2" class=""></a></div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">The Ballad of El Goodo</a></li>
            <li><a href="#">Thirteen</a></li>
            <li><a href="#">September Gurls</a></li>
            <li><a href="#">What's Going Ahn</a></li>
        </ul>
    </nav>
    
    <div class="wrap push">
<div class="container-fluid">
    <div class="head-content container">
      <div class="row">
        <div class="col-md-12 topmenu"><div class="visible-xs visible-sm pull-left"><a href="#solpencere" class="menu-link vukuat-icon-menu-2" class=""></a></div>
  <div class="hidden-sm hidden-xs">    <a href="#">Anasayfa</a> <a href="#">Hakkımızda</a> <a href="#">İletişim</a>
  <div class="toplogin pull-right">
  
  <!--login form-->
<div class="navbar-collapse collapse">
    <div class="navbar-right">
        <div class="btn-group">
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                Login <span class="caret"></span>
            </button>
            <div class="dropdown-menu loginform" >
                <div class="col-sm-12">
                    <div class="col-sm-12">
                        Login
                    </div>
                    <div class="col-sm-12">
                        <input type="text" placeholder="Uname or Email" onclick="return false;" class="form-control input-sm" id="inputError" />
                    </div>
                    <br/>
                    <div class="col-sm-12">
                        <input type="password" placeholder="Password" class="form-control input-sm" name="password" id="Password1" />
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-success btn-sm">Sign in</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!--#login form-->
  
    </div>
  </div> 
  <div class="visible-xs visible-sm pull-right"><i class="vukuat-icon-menu-2"></i></div>
        </div>
        <div class="container">
          <div class=" col-md-4 logo"><img class="img-responsive"  src="<?php echo Session::get("adres")."/template/basic/images/logo.png";?>">
          </div>
          <div class="col-md-6 banner  hidden-xs"><img src="<?php echo Session::get("adres")."/template/basic/images/468x60_banner.gif";?>">
</div> <div class=" col-md-1 social hidden-sm hidden-xs"> a b c d e f t g
          </div>
           <div class="col-md-12 breakingnews">Son dakika ! asayiş berkemal vukuat yok</div>
        </div>
       
        <!-- navbar -->
        <div id="nav-wrapper" class="navbar_">
<nav   id="nav"  class="navbar navbar-default " role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          
          <li><a href="<?php Session::get("adres")?>/"><i   data-toggle="tooltip" data-placement="top" title="Anasayfa" class=" vukuat-icon-home-1 vt-2x"></i></a></li>
        <li><a href="#"><i   data-toggle="tooltip" data-placement="top" title="Videolar" class="vukuat-icon-videocam-3 vt-2x"></i></a></li>
		  <li><a href="#"><i   data-toggle="tooltip" data-placement="top" title="Galeri" class="vukuat-icon-camera-6 vt-2x"></i></a></li>
		  
	
        <li class="dropdown">
         
		  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i   data-toggle="tooltip" data-placement="top" title="Kategoriler" class="vukuat-icon-globe-4 vt-2x"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
       
            <li><a href="#">Separated link</a></li>
           
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
        <form action="<?php Session::get("adres")?>/arama/haber/" class="navbar-form navbar-right" method="GET" role="search">
        <div class="form-group">
          <input id="ara" name="ara" type="text" class="form-control" placeholder="Haber ara !">
        </div>
        <button type="submit" class="btn btn-default">ARA</button>
        <ul class="nav navbar-nav navbar-right">
     
          <li> <i class="vt-2x vukuat-icon-facebook-circled"></i></li>
          <li> <i class="vt-2x vukuat-icon-twitter-circled"></i></li>
          <li> <i class="vt-2x vukuat-icon-gplus-circled"></i>  </li>
      </ul>
      </form>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav></div>
<!-- #navbar -->

<!-- body -->

<div></div>
<!--#body --->
<div class="body-content container">

<?php require_once $views; 
?>

    </div>
    
  
    </div> 
    <!--container-fiuld--> </div><!--wrap push--> 
    
    <div id="footer" class="container container_ "><div class="footer"> 
  <div class="row">
  <div class="col-md-4 footer-line">
  
  <ul class="footer-menu">
  <h6>Menü</h6>
  <li><a href="#">Anasayfa</a></li>
  <li><a href="#">Tüm kategoriler</a></li>
  <li><a href="#">Videolar</a></li>
  <li><a href="#">Galeri</a></li>
  <li><a href="#">Analiz masası</a></li>
  </ul>
  </div>
  <div class="col-md-4 footer-line">
  
  <ul class="footer-menu">
  <h6>Kategoriler</h6>
  <li><a href="#">Gündem</a></li>
  <li><a href="#">Politika</a></li>
  <li><a href="#">Sağlık</a></li>
  <li><a href="#">Spor</a></li>
  <li><a href="#">Ekonomi</a></li>
  </ul>
  </div>
  <div class="col-md-4 footer-line">
  
  <ul class="footer-menu">
  <h6>Site haritası</h6>
  <li><a href="#">Vizyonumuz</a></li>
  <li><a href="#">Misyonumuz</a></li>
  <li><a href="#">Künye</a></li>
  <li><a href="#">Hakkımızda</a></li>
  <li><a href="#">İletişim</a></li>
  </ul></div>
  
  <div class="col-md-12 copy">
  <p class="pull-left">Powered by</p> <div class="col-md-1"
  ><a target="_blank" title="Vancat.Org" href="http://vancat.org"><img src="<?php echo Session::get("adres");?>/template/basic/images/vancat.png" class="img-circle img-responsive"></a></div>
  
  
  <div class="pull-right">© 2007-2014 Vukuat.Com Her hakkı saklıdır.</div>
 </div>
  </div>  
    
    </div></div>
     <script src="js/libs/side.js"></script>
    <script>
        $(document).ready(function() {
            $('.menu-link').bigSlide();
        });
		var tabCarousel = setInterval(function() {
    var tabs = $('#manset > li'),
        active = tabs.filter('.active'),
        next = active.next('li'),
        toClick = next.length ? next.find('a') : tabs.eq(0).find('a');

    toClick.trigger('click');
}, 3000);

$('#soldakitablo  a').click(function (e) {
	e.preventDefault();
  $("#tabyuklen").show();
	var url = $(this).attr("data-url");
  	var href = this.hash;
  	var pane = $(this);
	
	// ajax load from data-url
	
	
	
	$(href).load(url,function(result){   
	   $("#tabyuklen").hide();
	    pane.tab('show');
	});
});

// load first tab content
$('#yazar').load($('.active a').attr("data-url"),function(result){
  $('.active a').tab('show');
});



    </script>
 
 <script>
  
  /* Dynamic top menu positioning
 *
 */

var num = 50; //number of pixels before modifying styles

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('.navbar_').addClass('navbar-fixed-top');
    } else {
            $('.navbar_').removeClass('navbar-fixed-top');
    
        
    }
});

//USE SCROLL WHEEL FOR THIS FIDDLE DEMO
  
  </script>
     <?php Watcher::analytics();?>
  </body>

</html>
