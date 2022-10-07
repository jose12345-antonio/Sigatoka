<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
        <title>Inicio de sesión</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ url('assets/css/login.css')}}">
    </head>
    <body>
    
	<div class="container">
		<div class="img">
			<img src="{{ url('assets/imagenes/bg.svg') }}">
		</div>
		<div class="login-content">
			<form action="index.html">
				<img src="{{ url('assets/imagenes/avatar.svg') }}">
				<h2 class="title">INICIE SESIÓN</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Correo electrónico</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input type="password" class="input">
            	   </div>
            	</div>
            	<a href="#">Recuperar contraseña</a>
            	<input type="submit" class="btn" value="Iniciar sesión">
            </form>
        </div>
    </div>
<script src="{{ url('assets/js/login.js')}}"></script>
    </body>
</html>
