<html>
<head>
</head>
<body>
<div>
 <div class="ventana_chatbot" id="ventana_chatbot">
 <div id="sfcpklu8kelc8kbxwq38mqfqs3hdc45482c"></div><script type="text/javascript" src="https://counter3.optistats.ovh/private/counter.js?c=pklu8kelc8kbxwq38mqfqs3hdc45482c&down=async" async></script><noscript><a href="https://www.contadorvisitasgratis.com" title="contador de visitas gratis"><img src="https://counter3.optistats.ovh/private/contadorvisitasgratis.php?c=pklu8kelc8kbxwq38mqfqs3hdc45482c" border="0" title="contador de visitas gratis" alt="contador de visitas gratis"></a></noscript>
 <img onclick="cerrar_chatbot_general()" class="cerrar_chat" src="img/cancel.png">
    <?php


    if(isset($_POST["input_chatbot"])){
        
        $unmae= "root";
        $user="localhost";
        $bd="chatbot";
        $pass="1234";

        $conn = mysqli_connect($user, $unmae, $pass, $bd);
        $getMsg=mysqli_real_escape_String($conn,$_POST["input_chatbot"]);
        $sql="SELECT `replies` FROM `chatbot` WHERE `queries` like '%$getMsg%';";
        
        
        $respuesta = mysqli_query($conn, $sql);
        if (mysqli_num_rows($respuesta) == 1) {
            $row = mysqli_fetch_assoc($respuesta);
            $respuesta_final=$row["replies"];
            $m="<div class=msg><p>$getMsg</p></div><div class=msg-bot><p>$respuesta_final</p></div>";
            echo $m;
        
        }else{
        $respuesta_final="no hay una respuesta vuelve a intentarlo";
        echo "<div class=msg><p>$getMsg</p></div><div class=msg-bot><p>$respuesta_final</p></div>";

        
        
        }
        }
        
        
        

    
?>
     <form  class="input" method="POST" action="<?=$_SERVER['PHP_SELF']?>">
<input type="text" class="input-1" name="input_chatbot" id="input-1">

<button type="submit" class="boton-input" id="boton">enviar</button>
</form>


 </p>

 </div>  

<img class="robot" src="img/robot.png" onclick="abrir_chatbot_general()">

</div>


<div class="chatbot_opciones" id="chatbot_opciones">
<ul>
<li><a onclick="bot_insertar('Hola me podrías ayudar? Tengo una consulta')">comprar</a></li>
<li><a onclick="bot_insertar('como me puedo registrar en la pagina')">registra</a></li>
<li><a onclick="bot_insertar('donde me comunico con la sede')">consultar</a></li>
<li><a onclick="bot_insertar('Donde los puedo ubicar')">ubicacion</a></li>

</ul>


</div>





<style type="text/css">
.cerrar_chat{
    width: 31px;
    position: fixed;
    right: 6%;
}
.cerrar:hover{
    width: 41px;

}
.chatbot_opciones{

    visibility: collapse;
    top: 43%;
    position: fixed;
    right: 25%;
    background-image: linear-gradient(355deg, rgb(193 49 49), rgb(255 167 90));
    border-radius: 25px;
    padding: 26px 36px;
    background-color: #d1c4b5;
    color: #341616;
    text-align: center;
    box-shadow: 15px 14px 42px 2px black;
}
.chatbot_opciones ul{
   list-style: none;
}
.chatbot_opciones li{
padding: 5px 0px;}



.msg{
    width: 187px;
    top: 42%;
    border-radius: 22px;
    color: white;
    background-color: rgb(195 140 40);
    padding: 20px 17px;
    margin: -4px 13px;
    position: fixed;
    right: 189px;
}

.msg-bot{
    width: 187px;
    top: 56%;
    border-radius: 22px;
    color: white;
    background-color: rgb(195 140 40);
    padding: 20px 17px;
    margin: 5px 13px;
    position: fixed;
    right: 90px;}

.ventana_chatbot{


    visibility: collapse;
padding: 12px 33px;
    right: -63%;
    top: 16%;
    position: fixed;
    background-image: linear-gradient(rgb(251 248 248), #b75f5f);
    margin: 11% 68%;


}

    .robot{
    width: 7%;
    border-radius: 137px;
    position: fixed;
    top: 85%;
    right: 21px;
    }
    .ventana_chatbot form{
            margin: 134% 9px 9px 9px;
    }

 .ventana_chatbot input{
    border-radius: 16px;
    border: 0;
    padding: 8px 6px;    }

     .ventana_chatbot button{
 border-radius: 11px;
    padding: 11px 8px;
    color: white;
    background: rgb(84 165 154);
    border: 0px;
}


@Keyframes animar{
0%{translate:0px 0px;}
10%{translate:20px 0px;}
20%{translate:0px 0px}
30%{translate:20px 0p;}
40%{translate:0px 0px}
50%{translate:20px 0px;}
60%{translate:0px 0px}
70%{translate:20px 0p;}
80%{translate:0px 0px}
90%{translate:20px 0px;}
100%{translate:0p 0px}}

.robot:hover{
animation-name: animar;
animation-duration: 1s;

}



</style>
<script src="http://localhost/PROYECTO%20DISE%C3%91O/JS/scripts.js">


</script>

</body>

</html>