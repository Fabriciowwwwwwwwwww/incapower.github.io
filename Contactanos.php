<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./CSS/barrademenu.css">
    <link rel="stylesheet" href="./CSS/footer.css">
    <link rel="stylesheet" href="./CSS/sliderinicio.css">
    <link rel="stylesheet" href="./CSS/contactanos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                

                   
                  
    
                </div>
            </ul>
        </div>
        <div class="body_contacto">
            <p>Contactanos</p>

            <div>
                <form class="form" action="registro.php" name="" method="POST" >
                    <div class="flex">
                        <label>
                            <input required="" placeholder="" type="text" class="input" name="nombres">
                            <span>Nombres</span>
                        </label>
                
                        <label>
                            <input required="" placeholder="" type="text" class="input" name="apellidos">
                            <span>Apellidos</span>
                        </label>
                    </div>  
                            
                    <label>
                        <input required="" placeholder="" type="email" class="input" name="email">
                        <span>Email</span>
                    </label> 
                        
                    <label>
                        <input required="" type="tel" placeholder="" class="input" name="celular">
                        <span>Celular</span>
                    </label>
                    <label>
                        <textarea required="" rows="3" placeholder="" class="input01" name="mensaje"></textarea>
                        <span>Mensaje</span>
                    </label>
                    
                    <button class="fancy" href="#" name="enviar">
                        <span class="top-key"></span>
                        <span class="text">Enviar</span>
                        <span class="bottom-key-1"></span>
                        <span class="bottom-key-2"></span>
                    </button>
                </form>
                <div class="div_imagen">
                    <img src="./img/camion_2.png" alt="">
                </div>
            </div>
        </div> <br><br><br>
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
        <?php  
include("chatbot.php");
?>
    </div>
</body>
</html>