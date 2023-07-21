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
             <h2>Marca</h2>
             <input type="numero" id="numero_f">
             <button onclick="filtrar_p()">
                FILTRAR Marca

            </button>   
            <h2 class="b_m"  >Modelo</h2>
            <input type="text" name="" id="filtra_marca">
            <button onclick="filtrar_m()">
               FILTRAR Modelo

           </button> 

           <button onclick="limpiar_f()" class="limpiar">
            LIMPIAR

        </button> 
            </div>
            <div class="mostrador" id="mostrador">
             

                    <div id="item 1" class="item 1" onclick="cargar(this) ">
                        <div class="contenedor-foto">
                            <img src="img/camiones/f200cb.jpg" alt="">
                        </div>
                        <p class="descripcion" id="descripcion 1">F200CB</p>
                        <span class="precio 1" id="marca 1">Forland</span>
                    </div>
                    <div  id="item 2"class="item 2 " onclick="cargar(this)">
                        <div class="contenedor-foto">
                            <img src="img/camiones/f200cs.png" alt="">
                        </div>
                        <p class="descripcion" id="descripcion 2">F200CS</p>
                        <span class="precio 2" id="marca 2">Forland</span>
                    </div>
                    <div  id="item 3" class="item 3" onclick="cargar(this)">
                        <div class="contenedor-foto">
                            <img src="img/camiones/f300n.png" alt="">
                        </div>
                        <p class="descripcion"id="descripcion 3">F300N
                        </p>
                     <span class="precio 3" id="marca 3">Foton</span>
                    </div>
                    <div  id="item 4" class="item 4" onclick="cargar(this)">
                        <div class="contenedor-foto">
                            <img src="img/camiones/s500cb.jpg" alt="">
                        </div>
                        <p class="descripcion" id="descripcion 4">S500CB</p>
                     <span class="precio 4" id="marca 4">Forland</span>
                    </div>
               
                    <div  id="item 5" class="item 5" onclick="cargar(this)">
                        <div class="contenedor-foto">
                            <img src="img/camiones/y25.png" alt="">
                        </div>
                        <p class="descripcion" id="descripcion 5">Y25</p>
                         <span class="precio 5" id="marca 5">Yue jin</span>
                    </div>
                    <div  id="item 6" class="item 6" onclick="cargar(this)">
                        <div class="contenedor-foto">
                            <img src="img/camiones/f300L.jpg" alt="">
                        </div>
                        <p class="descripcion" id="descripcion 6">F300L</p>
                   <span class="precio 6" id="marca 6">Yue jin</span>
                    </div>
                    <div id="item 7" class="item 7" onclick="cargar(this)">
                        <div class="contenedor-foto">
                            <img src="img/camiones/F500 VIP CH.png" alt="">
                        </div>
                        <p class="descripcion" id="descripcion 7">F500 VIP CH</p>
                        <span class="precio 7" id="marca 7">Yue jin</span>
                    </div>
                    <div  id="item 8" class="item 8" onclick="cargar(this)">
                        <div class="contenedor-foto">
                            <img src="img/camiones/F600C VIP CH.png" alt="">
                        </div>
                        <p class="descripcion" id="descripcion 8">F600C VIP CH</p>
                      <span class="precio 8" id="marca 8">Yue jin</span>
                    </div>

                
                    <div  id="item 9" class="item 9" onclick="cargar(this)">
                        <div class="contenedor-foto">
                            <img src="img/camiones/F700 VIP CH.png" alt="">
                        </div>
                        <p class="descripcion" id="descripcion 9">F700 VIP CH</p>
                        <span class="precio 9" id="marca 9">Foton</span>
                    </div>
                    <div  id="item 10" class="item 10" onclick="cargar(this)">
                        <div class="contenedor-foto">
                            <img src="img/camiones/F1100 CH.png" alt="">
                        </div>
                        <p class="descripcion" id="descripcion 10">F1100 CH </p>
                     <span class="precio 10" id="marca 10">Forland</span>
                    </div>
                    <div  id="item 11" class="item 11" onclick="cargar(this)">
                        <div class="contenedor-foto">
                            <img src="img/camiones/F1300 CH.png" alt="">
                        </div>
                        <p class="descripcion"id="descripcion 11">F1300 CH
                        </p>
                    <span class="precio 11" id="marca 11">Foton</span>
                    </div>
                    <div  id="item 12" class="item 12" onclick="cargar(this)">
                        <div class="contenedor-foto">
                            <img src="img/volquetes/FD200.png" alt="">
                        </div>
                        <p class="descripcion" id="descripcion 12">FD200</p>
                  <span class="precio 12" id="marca 12">Foton</span>
                    </div>
                
                    <div id="item 13" class="item 13" onclick="cargar(this) ">
                        <div class="contenedor-foto">
                            <img src="img/volquetes/FD250.jpg" alt="">
                        </div>
                        <p class="descripcion" id="descripcion 13">FD250</p>
                      <span class="precio 13" id="marca 13">6Yue jin0Yue jin00</span> 
                    </div>
                    <div  id="item 14"class="item 14 " onclick="cargar(this)">
                        <div class="contenedor-foto">
                            <img src="img/volquetes/FD400.jpg" alt="">
                        </div>
                        <p class="descripcion" id="descripcion 14">FD400</p>
                     <span class="precio 14" id="marca 14">Foton</span>
                                 </div>

                    <div  id="item 15" class="item 15" onclick="cargar(this)">
                        <div class="contenedor-foto">
                            <img src="img/volquetes/FD600.png" alt="">
                        </div>
                        <p class="descripcion"id="descripcion 15">FD600
                        </p>
                       <span class="precio 15" id="marca 15">Forland</span>
                    </div>
                    <div  id="item 16" class="item 16" onclick="cargar(this)">
                        <div class="contenedor-foto">
                            <img src="img/volquetes/FD800.jpg" alt="">
                        </div>
                        <p class="descripcion" id="descripcion 16">FD800</p>
              <span class="precio 16" id="marca 16">Forland</span>
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
                    <p id="descripcion">Descripción Modelo 1</p>
    
                    <span class="precio" id="precio">$ 130000</span>
    
                    <div class="fila">
                        <section class="form-register">
                            <h4>Cotiza Aqui</h4>
                            <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
                            <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
                            <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
                            <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su numero de telefono">
                            
                            
                            <input class="botons" type="submit" value="Cotizar">
                           
                          </section>
                        <!--<button>AGREGAR AL CARRITO</button>-->
                    </div>
                </div>
            </div>
        </section>
    
        <script src="./JS/scripts.js"></script>

    </div>
</body>
</html>