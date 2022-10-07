<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tituloPagina')</title>
    <link rel="stylesheet" href="{{ url('assets/css/main.css')}}">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="index.html" class="logo">SIGATOKA <span>Detector de plaga de banano</span></a></h1>
          <center><img src="https://cdn.icon-icons.com/icons2/582/PNG/512/man-2_icon-icons.com_55041.png" witdh="80px" height="80px" align="center" style="text-align: center; "></center>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#"><span class="fa fa-home mr-3"></span> Inicio</a>
	          </li>
	          <li>
	              <a href="#"><span class="fa fa-user mr-3"></span> Usuarios</a>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-briefcase mr-3"></span> Enfermedades</a>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-sticky-note mr-3"></span> Productos</a>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-suitcase mr-3"></span> Lotes</a>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-cogs mr-3"></span> Cerrar Sesión</a>
	          </li>
	        </ul>  
	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        @yield('contenido')
		</div>

</body>
</html>
