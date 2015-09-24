<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../../assets/bootstrap-3.3.5/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
        <script src="../../assets/bootstrap-3.3.5/js/bootstrap.min.js"></script>
        <link href="../../assets/bootstrap-3.3.5/css/styles.css" rel="stylesheet">
        <title>Nuevo usuario</title>
    </head>
    <body>
        <div class="container ">
            <div class="panel panel-default">
                
                <div class="panel-heading">
                    <div class="panel-title" align="center">
			Nuevo usuario
			<div style="float:right; top:300px">	
                            <a href="index.html"><span class="glyphicon glyphicon-home"></span></a>
			</div>
                    </div><!--Cierre de panel-heading-->				
		</div><!--Cierre panel-heading--> 
            </div>
            <center>    
            <form class="form-horizontal">
                    
                    <div class="form-group">
                        <label class="control-label col-xs-3">Nombre:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" placeholder="Nombre" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Apellido:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" placeholder="Apellido" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Telefono:</label>
                        <div class="col-xs-9">
                            <input type="tel" class="form-control" placeholder="Telefono" required='phone'>
                        </div>
                    </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">F. Nacimiento:</label>
                            <div class="col-xs-3">
                                <select class="form-control">
                                    <option>Dia</option>
                                </select>
                            </div>
                            <div class="col-xs-3">
                                <select class="form-control">
                                    <option>Mes</option>
                                </select>
                            </div>
                            <div class="col-xs-3">
                                <select class="form-control">
                                    <option>Año</option>
                                </select>
                            </div>
                        </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Dirección:</label>
                        <div class="col-xs-9">
                            <textarea rows="3" class="form-control" placeholder="Dirección" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Genero:</label>
                        <div class="col-xs-2">
                            <label class="radio-inline">
                                <input type="radio" name="genderRadios" value="male"> Maculino
                            </label>
                        </div>
                        <div class="col-xs-2">
                            <label class="radio-inline">
                                <input type="radio" name="genderRadios" value="female"> Femenino
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Email:</label>
                        <div class="col-xs-9">
                            <input type="email" class="form-control" id="inputEmail" placeholder="emailAdress" required='email'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Password:</label>
                        <div class="col-xs-9">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password" required='password'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Confirmar Password:</label>
                        <div class="col-xs-9">
                            <input type="password" class="form-control" placeholder="Confirmar Password" required='password'>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <input type="submit" class="btn btn-primary" value="Guardar">
                            <input type="reset" class="btn btn-default" value="Limpiar">
                        </div>
                    </div>
                </form>
            </center>
            </div>
        </div>
    </body>
</html>
