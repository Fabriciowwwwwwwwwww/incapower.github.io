<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>inicio &reg; COCAPOWER</title>
    
    <link rel="stylesheet" href="./CSS/barrademenu.css">
    <link rel="stylesheet" href="./CSS/footer.css">
    <link rel="stylesheet" href="./CSS/sliderinicio.css">
    
   
   
</head>

<body>
    <div class="contenedor">

        <div>
            <ul class="menu principal">
                <div class="lista">
    
                    <li>
                        <a href="Inicio.php">inicio</a>
                    

                    </li>
                    <li><a href="Adquieretuvehiculo.php">Adquiere tu vehiculo</a>
                        <ul class="sub_lista">
                            <li>
                                <a href="Camiones.php">
                                    Camiones
                                </a>
                            </li>
                            <li>
                                <a href="Volquetes.php">
                                    Volquetes
                                </a>
                            </li>
                            <li>
                                <a href="Minibuses.php">
                                    Minibuses
                                </a>
                            </li>
                            
                        </ul>
                    
                    </li>
                    <li><a href="Marcas.php">Marcas</a></li>
                    <li><a href="Nosotros.php">Nosotros</a></li>
                    <li><a href="Contactanos.php">Contactanos</a></li>
                    <li><a href="login.php">Sign in</a></li>
                    <li> 
<a href="progreso.php">
progreso
</a>

                    </li>

                   
                  
    
                </div>
            </ul>
        </div>
        <br><br><br><br><br>    
            <div class="slider">
                <ul>
                    <li>
                        <img src="img/imginicio (1) (1).png" alt="">
                    </li>
                    <li>
                        <img src="img/imageninicio2 (1) (1).png" alt="">
                    </li>
                    <li>
                        <img src="img/imageninicio3 (1) (1).png" alt="">
                    </li>
                    <li>
                        <img src="img/imageninicio3 (1) (1).png" alt="">
                    </li>
                </ul>


            </div>
           <!--  <div align="center" class="img">
                <img class="Afiche" src="./img/imginicio.jpg" alt="">

            </div>-->
<div class="seccion">

<div class="promociones">
<h1 class="titulo promociones">PROMOCIONES</h1> 
<a class="promociones post" id="boton_forland"onclick="cambiar_promo_forland()">POSVENTA FORLAND</a>   
<a class="promociones forland" id="boton_post" onclick="cambiar_promo_program()">PROGRAMA INCAPOWER</a>
</div>
<div class="promociones texto">
    <p class="titulo" id="titulo">POSVENTA FORLAND</p>
    <p class="sub t" id="sub_t">TÉRMINOS Y CONDICIONES – PROMOCIÓN KITS DE MANTENIMIENTO FORLAND</p>
  <p class="t" id="t">Esta promoción válida para talleres de INCAPOWER solo en Lima Metropolitana identificadas con la presente promoción, vigente hasta agotar Stock. Estará sujeta a los términos y condiciones: 1. COMPLETAR CUESTIONARIO. 2. INSPECCIÓN GRATUITA. 3. ENTREGA DE FILTROS AL CLIENTE: Para la entrega de los filtros, el kilometraje de unidad necesariamente tiene que estar dentro de kilometraje de  mantenimiento, en consecuencia se procede a instalar los filtros, los costos de mano de obra y aceite corresponden costos  al cliente. Al concluir se deberá brindar las facilidades para la toma de fotos de la unidad.  Aplicado para todos los vehículos Forland.</p>
</div>

</div>



            <br><br>

            <!-- Pie de Pagina-->
            <footer>

                <div class="container-footer-all">

                    <div class="container-body">

                        <div class="colum1">
                            <h1>Mas informacion de la empresa</h1>

                            <p style="text-align: justify;"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur voluptatibus labore fugit iure quos minus fugiat non, tenetur perspiciatis adipisci. Exercitationem dolores dolorem error repellat. Exercitationem et libero nihil ab.
                            </p>
                        </div>

                        <div class="colum2">

                            <h1>Redes Sociales</h1>

                            <div class="row">
                                <a href="https://www.facebook.com/profile.php?id=100091891905773"> <img
                                        src="img/fb.png"></a>
                                <label>Siguenos en Facebook</label>
                            </div>
                            <div class="row">
                                <a href="https://wa.me/51934878351?text=Mas%20Informacion"><img src="./img/WA.png"></a>
                                <label>Contactanos Via WhatsApp</label>
                            </div>
                            <div class="row">
                                <a href="https://www.instagram.com/inkap.ower/"> <img
                                        src="./img/Instagram.png"></a>
                                <label>Siguenos en Instagram</label>
                            </div>
                            

                        </div>
                        <div class="colum3">
                            <h1>Horarios de Atencion</h1>

                            <div class="row2">
                                <p style="text-align: justify;">Lunes a Viernes</p>

                            </div>
                            <div class="row2">
                                <p style="text-align: justify;">08:00am - 05:00pm</p>

                            </div>
                            <div class="row2">
                                <p style="text-align: justify;">Sabados y Domingos</p>

                            </div>
                            <div class="row2">
                                <p style="text-align: justify;">09:00am - 01:00pm </p>

                            </div>


                        </div>
                        <div class="colum3">
                            <h1>Central Telefónica</h1>

                            <div class="row2">
                                <p style="text-align: justify;">XXX-XXX-XXX</p>

                            </div>
                        </div>

                        </div>

                    </div>
                    <br>
                    <div class="container-footer">
                        <div class="footer">
                            <div class="copyright">
                                © 2023 Todos los Derechos Reservados | 
                            </div>

                            <div class="information">
                                <a href="">Informacion Compañia</a> | <a href="">Privacion y Politica</a> | <a
                                    href="">Terminos
                                    y Condiciones</a>
                            </div>
                        </div>

                    </div>

            </footer>
        </div>


<?php  
include("chatbot.php");
?>


        <script src="http://localhost/PROYECTO%20DISE%C3%91O/JS/scripts.js">


        </script>

       
       



</body>


</html>