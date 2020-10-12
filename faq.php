<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="cliente/css/menucl.css" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>FAQ | InstaJob</title>
</head>
<body>
<header class="header-section">
        <nav>
            <div class="nav-fostrap">
                <div id="lo">
						<a href="./index.php" class="site-logo">
							<img src="/img/insta.png" alt="" width="175px" height="105px">
                        </a>
                </div>                        
                <div id="bus">
					<form class="header-search-form" action="index.php" method="POST">
							<input type="text" placeholder="Buscar Por Oficio o Municipio" name="query">
							<button><i class="fa fa-search"></i></button>
                    </form>                    
                </div>
                <div id="men">      
				<ul>
                    <li><a href="index.php"><i class="fa fa-home"></i>  Inicio</a></li>					
                    <li><a href="faq.php"><i class="fa fa-question-circle"></i> FAQ</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-sign-in"></i> Inicia Sesión o Registrate<span class="arrow-down"></span></a>
                        <ul class="dropdown">  
                            <li><a href="logincl.php"><i class="fa fa-address-card"></i> Cliente</a></li>
                            <li><a href="loginve.php"><i class="fa fa-user-circle"></i> Vendedor</a></li>                            
                        </ul>
                    </li>      
                </ul>
                </div>                            
            </div>           
		</nav>
	</header>
<header class="cd-header flex flex-column flex-center" style="background-color:#90CF2F;">
	  <div class="text-component text-center">
    <h1>Preguntas Frecuentes</h1>
    
  </div>
</header>

<section class="cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg">
	<ul class="cd-faq__categories">
		
	</ul> <!-- cd-faq__categories -->

	<div class="cd-faq__items">
		<ul id="basics" class="cd-faq__group">
			<li class="cd-faq__title"><h2>Basicos</h2></li>
			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>¿Cómo Cambio Mi Contrasena?</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Dirijase al apartado de mi perfil, enseguida de click en editar perfil, en el formulario deberá modificar el campo contrasena completandolo ingresando la contrasena nueva. Para guardar los cambios deberá dar click en el botón "Guardar Cambios".</p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>

			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>¿Cómo Inicio Sesión?</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>En la parte superior derecha se encuentra un botón con la leyends "Iniciar Sesión", deberá dar click y llenar los campos con su usuario y contraseña.</p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>

			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>¿Cómo Puedo actualizar información de mi perfil?</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Ir al apartado de mi perfil y presionar click en "Editar Perfil", realizar los cambios en el formulario y dar click en "Guardar Cambios".</p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>
		</ul> <!-- cd-faq__group -->

		 <!-- cd-faq__group -->

		<ul id="account" class="cd-faq__group">
			<li class="cd-faq__title"><h2>Cuenta</h2></li>	

			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>¿Cómo Borro Mi Cuenta?</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Contactar a servicio a cliente al siguiente correo: instajob.0ff@gmail.com</p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>			

			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span>¿Olvide Mi Contrasena, Qué Puedo Hacer?</span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p>Contactar a servicio a cliente al siguiente correo: instajob.0ff@gmail.com</p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>
		</ul> <!-- cd-faq__group -->

			
	</div> <!-- cd-faq__items -->

	<a href="#0" class="cd-faq__close-panel text-replace">Close</a>
  
  <div class="cd-faq__overlay" aria-hidden="true"></div>
</section> <!-- cd-faq -->
<script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
<script src="assets/js/main.js"></script> 
</body>
</html>