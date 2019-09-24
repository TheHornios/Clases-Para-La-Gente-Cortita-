var palabras = ["diarrea","cancer","sida","epatitis","cirrosis","neurisma","embolia","zika","malaria","viruela","marburgo","tuberculosis"];
var imgs = ["+------+<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br/>+------+<br/>",
"+------+<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O&nbsp;&nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br/>+------+<br/>",
"+------+<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O&nbsp;&nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|\\ &nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br/>     +------+<br/>",
"+------+<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O&nbsp;&nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/|\\ &nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br/>     +------+<br/>",
"+------+<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O&nbsp;&nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/|\\ &nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\\ &nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br/>     +------+<br/>",
"+------+<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O&nbsp;&nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/|\\ &nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ \\ &nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br/>     +------+<br/>",
"+------+<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;X&nbsp;&nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/|\\ &nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ \\ &nbsp;|<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br/>     +------+<br/>"];
var letrasMalas = new Array();
var vidas = imgs.length;
var letrasBuenas = new Array();
var palabraActual = "";
var reiniciar = false; //&nbsp;

function crearJuego(){
    selecionarPAlabra();
    document.getElementById("img").innerHTML = imgs[0];
    
    document.getElementById("rallitas").innerHTML = crearRallitas("-",80);
    document.getElementById("boton").onclick = function(){aletra()};
    document.getElementById("intentos").innerHTML = vidas-1;
}

function selecionarPAlabra(){
    palabraActual = palabras[Math.floor(Math.random()*(palabras.length - 0)+0)];
}

function historial(){
    document.getElementById("img").innerHTML = imgs[imgs.length-vidas];
    var historial = "";
    for(var i = 0;i<letrasBuenas.length;i++){
        historial+="<b>"+letrasBuenas[i]+"</b>";
    }
    for(var i = 0;i<letrasMalas.length;i++){
        historial+=letrasMalas[i];
    }
    document.getElementById("historial").innerHTML = historial;
}

function aletra(){
    
    if(!reiniciar){
        comprobarLetras();
        historial();
        document.getElementById("letra").value = "";
        
    }

    if(vidas==1){
        document.getElementById("Cabecera").innerHTML = "You Lose, F5 to restart";
        reiniciar = true;
    }
    if(palabraActual == crearRallitas()){
        document.getElementById("Cabecera").innerHTML = "You Win, F5 to restart";
        reiniciar = true;
    }
    
    
    
}

function comprobarLetras(){
    var bolean = false;
    for(var i= 0;i<palabraActual.length;i++){
        if(palabraActual.charAt(i)==document.getElementById("letra").value){
            if(letrasBuenas.length==0){
                letrasBuenas[0] = document.getElementById("letra").value;
            }else{
                var bolean1 = false;
                for(var w= 0;w<letrasBuenas.length;w++){
                    if(letrasBuenas[w]==document.getElementById("letra").value){
                        bolean1 = true;
                    }
                }
                if(!bolean1){
                    letrasBuenas[letrasBuenas.length] = document.getElementById("letra").value;
                }
            }

            document.getElementById("rallitas").innerHTML  = crearRallitas(document.getElementById("letra"));
            bolean= true;
        }
    }
    if(!bolean){
        if(letrasMalas.length==0){
            letrasMalas[0] = document.getElementById("letra").value;
            vidas --;
            document.getElementById("intentos").innerHTML = vidas-1;
        }else{
            var bolean1 = false;
            for(var i= 0;i<letrasMalas.length;i++){
                if(letrasMalas[i]==document.getElementById("letra").value){
                    bolean1 = true;
                }
            }
            if(!bolean1){
                letrasMalas[letrasMalas.length] = document.getElementById("letra").value;
                vidas --;
                document.getElementById("intentos").innerHTML = vidas-1;
            }
        }
    }
}

function crearRallitas(){
    var rallita = "";
        for(var i =0;i<palabraActual.length;i++){
            var si = false;
            for(var v = 0;v<letrasBuenas.length;v++){
                if(letrasBuenas[v]==palabraActual.charAt(i)){
                    si = true;
                }
            }
            if(si){
                rallita += palabraActual.charAt(i);
            }else{
                rallita += "-"
            }
        }    
    return rallita;
}

 window.onload = crearJuego();