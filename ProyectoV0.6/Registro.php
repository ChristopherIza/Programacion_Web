<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>HELP</title>
               
</head>
<body >    
    <header>
     
        <h1 align="center" style="font-size:50px">HELP <img src="img/Logo.jpg" width="200" align="right"></h1>  
        <p align="center"><font size="5" >Página Ayuda Estudiantil</p>                        
        <br>                                
        <ul class="menu">
            <li> <a href="./Inicio.html">Inicio </a></li>
            <li> <a href="./Preguntas y Respuestas.html">Preguntas y Respuestas</a></li>
            <li> <a href="./Registro.html">Registro</a></li>
            <li> <a href="./QuienesSomos.html">¿Quiénes somos?</a></li>
            
        </ul> 
</header>
  <div class="contenedor">
        <section><center>
        </center>
        <div align="center">
          <div class="formulario">
            <img src="img/usuario-de-perfil.png" width="120" alt="Logoespe">
            <?php
            $nombre = $_POST['Nombre'];
            $apellido = $_POST['Apellido'];
            echo "Bienvenido:";
            echo "<br>";
            echo $nombre;
            ?>
        </div>
       
        
	</section>
        <aside>
            </aside>
        </div>
    
    <footer>
        <div class="pie">
            
            <br><img src="img/ubicacion.png"  width="70" height="70">
            <p>Universidad de las Fuerzas Armadas</p>
            <h3>ESPE</h3>
        </div>
        <div class="pie">      
            <img src="img/carta.png" border="0" width="70" height="70">
            <p>HELP.AyudaEstudiantil@gmail.com</p>
            <p>cdiza5@espe.edu.ec</p>
        </div>
        <div class="pie">
            <img src="img/llamada-telefonica.png" border="0" width="70" height="70">
            <p>099 504 7657 - 096 963 6094</p>
            <p>099 273 8381 - 099 547 4515</p>
            <p>093 993 0962 </p>
           
        </div>
            
   </footer>  
   <footer>
    <div class="pie">
    <p>© 2022 - Todos los derechos reservados</p>
    </div>
    </footer>
</body>
</html>
