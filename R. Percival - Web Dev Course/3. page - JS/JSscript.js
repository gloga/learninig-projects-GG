/**
 * Created by Gabriel on 18.3.2015..
 */
var bell=0;
var wincount=0;
var cpuwincount=0;

document.getElementById("you").innerHTML="YOU: "+wincount;
document.getElementById("cpu").innerHTML="CPU: "+cpuwincount;

document.getElementById("start").onclick=function(){

    document.getElementById("p1img").src="myPixelArt.png";
    document.getElementById("p2img").src="myPixelArt3.png";
    document.getElementById("p2img").style.height="100%";
    document.getElementById("p2img").style.width="100%";
    document.getElementById("p1img").style.height="100%";
    document.getElementById("p1img").style.width="100%";

    var gameStartTime = Math.floor(Math.random()*7000+4500);

    setTimeout(function(){
        document.getElementById("prep1").style.display="block";
    },2000);
    setTimeout(function(){
        document.getElementById("prep1").style.display="none";
        document.getElementById("prep2").style.display="block";
    },3500);
    setTimeout(function(){
        document.getElementById("prep2").style.display="none";
    },4500);
    setTimeout(function(){
        document.getElementById("fire").style.display="block";
        bell=Date.now();
    },gameStartTime);
    setTimeout(function(){
        document.getElementById("fire").style.display="none";
    },gameStartTime+450);

    document.getElementById("p1").onclick=function(){
        var fireTime = Date.now();
        var reactionTime = (fireTime-bell)/1000;
        var cpureactionTime = Math.random()* 1.2;

        if (fireTime-bell==fireTime){
            document.getElementById("p1img").src="myPixelArt2.png";
            cpuwincount++;
            document.getElementById("cpu").innerHTML="CPU: "+cpuwincount
        }
        else{
            if(reactionTime<cpureactionTime){
                wincount++;
                document.getElementById("p1img").src="myPixelArt2.png";
                document.getElementById("p2img").style.height="90%";
                document.getElementById("p2img").style.width="90%";
                document.getElementById("you").innerHTML="YOU: "+wincount;
            }
            else{
                cpuwincount++;
                document.getElementById("p2img").src="myPixelArt4.png";
                document.getElementById("p1img").style.height="90%";
                document.getElementById("p1img").style.width="90%";
                document.getElementById("cpu").innerHTML="CPU: "+cpuwincount;
            }
        }
    };
};