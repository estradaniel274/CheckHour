<!DOCTYPE html>
<html lang="en">
    <head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>CheckHours</title>
	<meta name="generator" content="Bootply" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/bootstrap-3.3.5/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
        <script src="assets/bootstrap-3.3.5/js/bootstrap.min.js"></script>
        <link href="assets/bootstrap-3.3.5/css/styles.css" rel="stylesheet">
        <!--[if lt IE 9]>
        	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    	<![endif]-->
        
    </head>
    
    <body>
        <div id="wrap">
            <header class="masthead">
          	<!-- Carusel================================================== -->
                <div id="myCarousel" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="assets/1.jpg">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h2>Reparaci&oacute;n</h2>
                                  <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/2.jpg">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h2>Creaci&oacute;n</h2>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/3.jpg">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h2>Venta</h2>
                                    <p></p>
                                </div>
                             </div>
                        </div>       
                    </div><!-- /.carousel-inner -->
                    <div class="logo" style="color: #e8e8e8">Check hours</div> 
                    <!-- Controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>  
                </div>
    <!-- /.carousel -->
            </header>
  
  
            <!-- Fixed navbar -->
            <div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav nav-justified">
                            <li><a href="#section1">Reloj checador</a></li>
                            <li><a href="#section2">Iniciar sesión como administrador</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container -->
            </div>
            
            <div class="divider" id="section1"></div>
                <div class="container">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="page-header text-center">
                            <h1>Reloj checador</h1>
                        </div>
                        <center><h3>N&uacute;mero de empleado</h3>
                        <form class="form-inline">
                            <div class="form-group">
                              <label for="input2" class="sr-only">ej.554562</label>
                              <input type="text" class="form-control" id="input2" placeholder="ej.554562">
                            </div>
                            <button type="submit" class="btn btn-primary">Checar</button>
                        </form>
                        </center>
                        <hr>
                    </div>
                        <div class="divider"></div>
                    
                </div>
            <div class="divider"></div>
            <section class="bg-1">
                <div class="col-sm-6 col-sm-offset-3 text-center"></div>
            </section>
            <div class="divider" id="section2"></div>
            <div class="row" style="width: 90%">
                <div class="col-sm-10 col-sm-offset-1">
                    <h1>Inicio de sesi&oacute;n</h1>
                    <hr>
                        <div class="container">
                            <div class="card card-container">
                                <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
                                <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                                <p id="profile-name" class="profile-name-card"></p>
                                <form class="form-signin">
                                    <span id="reauth-email" class="reauth-email"></span>
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                                    <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                                    <div id="remember" class="checkbox">
                                        <label>
                                            <input type="checkbox" value="remember-me"> Recordar
                                        </label>
                                    </div>
                                    <center><button class="btn btn-lg btn-primary btn-block" style="width: 50%" onclick="location='administrador/pages/index.html'">Ingresar</button></a></center>
                                </form><!-- /form -->
                                <a href="#" class="forgot-password">
                                    ¿Perdiste tu contraseña?
                                </a>
                            </div><!-- /card-container -->
                        </div><!-- /container -->
                    <hr>
                    <div class="divider"></div>
                </div><!--/col-->
            </div><!--/container-->
        </div><!--/wrap-->

        <div id="footer">
            <div class="container">
                <p class="text-muted">Copyright ©2015 Equipo 5, ITI07A</p>
            </div>
        </div>
       
        <ul class="nav pull-right scroll-top">
            <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
        </ul>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
		<script src="js/scripts.js"></script>

    </body>
</html>
