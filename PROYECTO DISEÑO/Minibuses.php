<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="./CSS/barrademenu.css">
    <link rel="stylesheet" href="./CSS/footer.css">
    <link rel="stylesheet" href="./CSS/sliderinicio.css">
    <link rel="stylesheet" href="./CSS/adquieretuvehiculo.css">
    <link rel="stylesheet" href="./CSS/cotizaaqui.css">
    
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
        <section class="contenido">
          <!--<filtro -->
            <div class="f">
             <h2>Precio</h2>
             <input type="numero" name="" id="numero_f">
             <button onclick="filtrar_p()">
                FILTRAR PRECIO

            </button>   
            <h2 class="b_m"  >Marca</h2>
            <input type="text" name="" id="filtra_marca">
            <button onclick="filtrar_m()">
               FILTRAR MARCA

           </button> 

           <button onclick="limpiar_f()" class="limpiar">
            LIMPIAR

        </button> 
            </div>
            <div class="mostrador" id="mostrador">
                <div class="fila">
                    <div id="item 1" class="item 1" onclick="cargar(this) ">
                        <div class="contenedor-foto">
                            <img src="img/minibuses/king 20 dk5.png" alt="">
                        </div>
                        <p class="descripcion" id="descripcion 1">King 20 DK5</p>
                        <!-- <span class="precio 1" id="precio 1">2000</span> -->
                    </div>
                    <div  id="item 2"class="item 2 " onclick="cargar(this)">
                        <div class="contenedor-foto">
                            <img src="img/minibuses/king 20 dk5.png" alt="">
                        </div>
                        <p class="descripcion" id="descripcion 2">King 17 DSL</p>
                        <!-- <span class="precio 1" id="precio 1">2000</span> -->
                    </div>
                    <div  id="item 3" class="item 3" onclick="cargar(this)">
                        <div class="contenedor-foto">
                            <img src="img/minibuses/king 20 dk5.png" alt="">
                        </div>
                        <p class="descripcion"id="descripcion 3">New King Gasolina
                        </p>
                        <!-- <span class="precio 1" id="precio 1">2000</span> -->
                    </div>
                    
                    
                </div>
                
                <div class="fila">
                    <div  id="item 12" class="item 12" onclick="cargar(this)">
                        <div class="contenedor-foto">
                            <img src="img/minibuses/king 20 dk5.png" alt="">
                        </div>
                        <p class="descripcion" id="descripcion 12">New King Diesel</p>
                        <!-- <span class="precio 1" id="precio 1">2000</span> -->
                    </div>
                    <div  id="item 4" class="item 4" onclick="cargar(this)">
                        <div class="contenedor-foto">
                            <img src="img/minibuses/king 20 dk5.png" alt="">
                        </div>
                        <p class="descripcion" id="descripcion 4">Classic King Gasos</p>
                        <!-- <span class="precio 1" id="precio 1">2000</span> -->
                    </div>
                    <div  id="item 4" class="item 4" onclick="cargar(this)">
                        <div class="contenedor-foto">
                            <img src="img/minibuses/king 20 dk5.png" alt="">
                        </div>
                        <p class="descripcion" id="descripcion 4">Classic King Diesel</p>
                        <!-- <span class="precio 1" id="precio 1">2000</span> -->
                    </div>
                </div>
            </div>
            <!-- CONTENEDOR DEL ITEM SELECCIONADO -->
            <div class="seleccion" id="seleccion">
                <div class="cerrar" onclick="cerrar()">
                    &#x2715
                </div>
                <div class="info">
                    <img src="img/1.png" alt="" id="img">
                    <h2 id="modelo">incapower</h2>
                    <!-- <p id="descripcion">Descripción Modelo 1</p> -->
    
                    <!-- <span class="precio" id="precio">$ 130000</span> -->
    
                    <div class="fila">
                        <section class="form-register">
                            <h4>Cotiza Aqui</h4>
                            <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
                            <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
                            <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
                            
                            <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su numero de telefono">
                            <TD>
                                <TH><P>INGRESE CANTIDAD</P></TH>
                                <TH><input type="number" min="1" max="9" step="1" value="1"></TH>
                            </TD>
                            <input class="botons" type="submit" value="Cotizar">
                           
                          </section>
                        <!--<button>AGREGAR AL CARRITO</button>-->
                    </div>
                </div>
            </div>
        </section>
    
        <script src="./JS/scripts.js"></script>

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
</body>
</html>