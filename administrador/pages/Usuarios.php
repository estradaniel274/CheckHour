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
        <title>Usuarios</title>
    </head>
    <body>
        <div class="container ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title" align="center">
			Tabla de usuarios
			<div style="float:right; top:300px">	
                            <a href="index.html"><span class="glyphicon glyphicon-home"></span></a>
			</div>
                    </div><!--Cierre de panel-heading-->				
		</div><!--Cierre panel-heading--> 
            </div>
            <form class="form-horizontal">
                <h2>Usuarios registrados al momento</h2> 
                <br>
                <br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Contraseña</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Juan Aurelio</td>
                            <td>Garcia Menchaca</td>
                            <td>hola@gmail.com</td>
                            <td>123pormiymisamigos</td>
                            <td>
                                <div class="btn-toolbar" role="toolbar">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default" title="Modificar datos">
                                          <span class="glyphicon glyphicon-zoom-in"></span>
                                        </button>
                                        <button type="button" class="btn btn-default" title="Eliminar">
                                          <span class="glyphicon glyphicon-remove"></span>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            
            
        </div>
    </body>
</html>
