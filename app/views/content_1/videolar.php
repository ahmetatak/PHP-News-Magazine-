<!doctype html>

<html>
 
  <head>
     
    <meta name="viewport" content="width=device-width">
    <?php echo load::css(session::get("adres"));?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
       
  <body>   
    <div class="container">
      <header>
        <div class="row">
            <div class="toptools"> <div class=" navbar-right"><ul class=""><li><A href="javascript:history.go(0)" onClick="javascript:this.style.behavior='url(#defa ult#homepage)';this.setHomePage(<?php echo ' '.$_SESSION["adres"].'';?>);" TARGET="_self"><b>ANA SAYFAN YAP</b></A> </li></ul></div></div>
         
        </div>
        <div class="row">
            <div class="col-md-4"><img src="<?php echo ''.$_SESSION["adres"].'/template/basic/images/logo.png'?>" ></div>
          <div class="col-md-8"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- vukuat.com 468x60 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:468px;height:60px"
     data-ad-client="ca-pub-5615491330152988"
     data-ad-slot="6463193757"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script><!-- vukuat.com 468x60 --></div>
        </div>
        <div class="row">
            <div class="son_dakika "> <i class="fa fa-info"></i> fa-info
          </div>
          <div class="body_container">
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
 
        <li><a href="#"><i   data-toggle="tooltip" data-placement="top" title="Videolar" class="fa fa-video-camera fa-2x"></i></a></li>
		  <li><a href="#"><i   data-toggle="tooltip" data-placement="top" title="Galeri" class="fa fa-camera fa-2x"></i></a></li>
		  
	
        <li class="dropdown">
         
		  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i   data-toggle="tooltip" data-placement="top" title="Kategoriler" class="fa fa-globe fa-2x"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
       
            <li><a href="#">Separated link</a></li>
           
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
     
        <li class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i   data-toggle="tooltip" data-placement="top" title="Üye girişi" class="fa fa-user fa-2x"></i></a>
          <ul class="dropdown-menu">
		  
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
           
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

		   
		   
		  
		   
          </div>
          </div>
        </div>
      </header>
      <!--body part -->
      <div class="body_container">
<?php require_once $views; 
?>
      </div>
      <!--body_container body part finished -->

          
          <div id="footer">
     <div class="jumbotron">
         
        <div class="col-md-8">copy
        </div>
        <div class="col-md-4">powered
        </div>
</div>

              
     
 
    
    </div>
  <script>
$('[data-toggle="tooltip"]').tooltip({'placement': 'bottom'});
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
  </body>

</html>