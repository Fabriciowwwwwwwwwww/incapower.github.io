
let mostrador = document.getElementById("mostrador");
let seleccion = document.getElementById("seleccion");
let imgSeleccionada = document.getElementById("img");
let modeloSeleccionado = document.getElementById("modelo");
let descripSeleccionada = document.getElementById("descripcion");
let precioSeleccionado = document.getElementById("precio");
let text_1=document.getElementById("text_1");
let text_2=document.getElementById("text_2");
let text_3=document.getElementById("text_3");
let boton_post=document.getElementById("boton_post");
let boton_forland=document.getElementById("boton_forland");
let titulo=document.getElementById("titulo");
let sub_t=document.getElementById("sub_t");
let t=document.getElementById("t");
var i=2;


function cargar(item){

    mostrador.style.width = "60%";
    seleccion.style.width = "28%";
    seleccion.style.opacity = "1";

    seleccion.style.position = "absolute";
    seleccion.style.height = "1000px";

    seleccion.style.right = "3px";

    imgSeleccionada.src = item.getElementsByTagName("img")[0].src;

    modeloSeleccionado.innerHTML =  item.getElementsByTagName("p")[0].innerHTML;

    descripSeleccionada.innerHTML = "Descripción del modelo ";

    precioSeleccionado.innerHTML =  item.getElementsByTagName("span")[0].innerHTML;


}
function cerrar(){
    mostrador.style.width = "415%";
    seleccion.style.width = "10%";
    seleccion.style.opacity = "0";
    quitarBordes();
}
function quitarBordes(){
    
}
function abrir_text_1(){
text_1.style.display="block";
    
}
function abrir_text_2(){
    text_2.style.display="block";
    
        
    }
    function abrir_text_3(){
        text_3.style.display="block";
        
            
        }
function cerrar_1(){
    text_1.style.display="none";

}

function cerrar_2(){
    text_2.style.display="none";

}

function cerrar_3(){
    text_3.style.display="none";

}
function cambiar_promo_program(){

boton_post.style.backgroundColor="#ff2525";
boton_post.style.color="white";
boton_post.style.border="0";
boton_forland.style.backgroundColor="white";
boton_forland.style.border="1px solid";
boton_forland.style.color="black";
t.style.padding="25px 15px 52px 15px ";
t.innerHTML="Esta promoción válida para talleres de INCAPOWER solo en Lima Metropolitana identificadas con la presente promoción. Diamante del Pacifico s.a. cumpliendo el Régimen Especial de Gestión y Manejo de Neumáticos Fuera de Uso (NFU). TyC: El cupón de descuento válido sólo en nuestra red de talleres IncaPower. Talleres IncaPower: Villa el Salvador: Km. 18.5 Panamericana Sur Telf.: 719-2352. Los Olivos: Av. Alfredo Mendiola N°6241 Tel. 528-8477. Surquillo: - Av. República de Panamá N° 3837 Tel. 224 2352. ATE: Av. Nicolás Ayllón 2285 Tel. 995 270 883.";
titulo.innerHTML="PROGRAMA NFU INCAPOWER";
sub_t.innerHTML="TÉRMINOS Y CONDICIONES – PROGRAMA NFU";
}

function cambiar_promo_forland(){

boton_forland.style.backgroundColor="#ff2525";
boton_forland.style.color="white";
boton_forland.style.border="0";
t.style.padding="25px 15px";
boton_post.style.backgroundColor="white";
boton_post.style.border="1px solid";
boton_post.style.color="black";
t.innerHTML="Esta promoción válida para talleres de INCAPOWER solo en Lima Metropolitana identificadas con la presente promoción, vigente hasta agotar Stock. Estará sujeta a los términos y condiciones: 1. COMPLETAR CUESTIONARIO. 2. INSPECCIÓN GRATUITA. 3. ENTREGA DE FILTROS AL CLIENTE: Para la entrega de los filtros, el kilometraje de unidad necesariamente tiene que estar dentro de kilometraje de  mantenimiento, en consecuencia se procede a instalar los filtros, los costos de mano de obra y aceite corresponden costos  al cliente. Al concluir se deberá brindar las facilidades para la toma de fotos de la unidad.  Aplicado para todos los vehículos Forland.";
titulo.innerHTML="POSVENTA FORLAND";
sub_t.innerHTML="TÉRMINOS Y CONDICIONES – PROMOCIÓN KITS DE MANTENIMIENTO FORLAND";
}


function filtrar_p(){
    for(var j=1 ;j <=16 ;j++){
        let item=document.getElementById("item "+j+"");
        item.style.display="block";
    
    }
    let numero=document.getElementById("numero_f").value;
    var num_f=numero.valueOf();

    if(num_f!=0 && numero.length!=0){
    for (var i = 1; i <= 16; i++) {
let precio=document.getElementById("marca "+i+"").innerHTML;

if(num_f!=precio){
    let item=document.getElementById("item "+i+"");
    item.style.display="none";
}
    }

    }else{
        alert("pon un numero");

    }




}

function limpiar_f(){

    for(var j=1 ;j <=16 ;j++){
        let item=document.getElementById("item "+j+"");
        item.style.display="block";
    
    }
}

function filtrar_m(){
    for(var j=1 ;j <=16 ;j++){
        let item=document.getElementById("item "+j+"");
        item.style.display="block";
    
    }
    let m=document.getElementById("filtra_marca").value;
    var m_f=m.valueOf();
    if(m!=""){


        for(var j=1 ;j <=16 ;j++){
            let marca=document.getElementById("descripcion "+ j +"").innerHTML;

            if(m_f!=marca){
                let item=document.getElementById("item "+j+"");
                item.style.display="none";
            }


            }


    }

}

function abrir_chatbot(){

    let chatbot_opciones=document.getElementById("chatbot_opciones");
    chatbot_opciones.style.visibility="visible";

}
function bot_insertar(accion){
let input_1=document.getElementById("input-1");
input_1.value=accion;



}
function abrir_chatbot_general(){
let chat =document.getElementById("ventana_chatbot");
chat.style.visibility="visible";


}

function cerrar_chatbot_general(){
    let chat =document.getElementById("ventana_chatbot");
    chat.style.visibility="collapse";
    let chatbot_opciones=document.getElementById("chatbot_opciones");
    chatbot_opciones.style.visibility="collapse";
    
    }
  
    let uno=document.querySelector(".uno");
    let dos=document.querySelector(".dos");
    let tres=document.querySelector(".tres");

    let cuatro=document.querySelector(".cuatro");
    let final=document.querySelector(".final");


    uno.onclick = function(){
     uno.classList.add("active");
     dos.classList.remove("active");
     tres.classList.remove("active");
     cuatro.classList.remove("active");
     final.classList.remove("active");

    }

    dos.onclick=function(){

        uno.classList.add("active");
        dos.classList.add("active");
        tres.classList.remove("active");
        cuatro.classList.remove("active");
        final.classList.remove("active");

    }
    tres.onclick=function(){

        uno.classList.add("active");
        dos.classList.add("active");
        tres.classList.add("active");
        cuatro.classList.remove("active");
        final.classList.remove("active");

    }
    cuatro.onclick=function(){

        uno.classList.add("active");
        dos.classList.add("active");
        tres.classList.add("active");
        cuatro.classList.add("active");
        final.classList.remove("active");

    }
    final.onclick=function(){

        uno.classList.add("active");
        dos.classList.add("active");
        tres.classList.add("active");
        cuatro.classList.add("active");
        final.classList.add("active");

    }