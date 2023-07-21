<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./CSS/barrademenu.css">
    <link rel="stylesheet" href="./CSS/footer.css">
    <link rel="stylesheet" href="./CSS/sliderinicio.css">
    <link rel="stylesheet" href="./CSS/nosotros.css">
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
            </ul>
        </div><br><br><BR>  </BR>
        <div class="body_nosotros">
            <p>NOSOTROS</p>
            <div>
                <div class="card">
                    <img src="./img/mision.png" alt="Misión">
                    <div class="card-content">
                      <h3>Misión</h3>
                      <p>Acompañar a nuestros clientes en la solución de las necesidades de transporte de personas y carga,  con alternativas competitivas y sostenibles.
                    </div>
                </div>
                  
                <div class="card">
                    <img src="./img/vision.png" alt="Visión">
                    <div class="card-content">
                      <h3>Visión</h3>
                      <p>Ser el proveedor líder de soluciones para transporte de personas y carga.
                    </div>
                </div>
                  
                <div class="card">
                    <img src="./img/objetivo.webp" alt="Objetivos">
                    <div class="card-content">
                      <h3>Objetivo</h3>
                      <p>Crear  estrategias para aumentar el  índice de  ventas y así mismo generar más crecimiento económico para la empresa y  el país.
                    </div>
                </div>
            </div>
        </div>
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
                <?php  
include("chatbot.php");
?>
        </footer>
    </div>
</body>
</html>