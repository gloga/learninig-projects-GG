/**
 * Created by Gabriel on 18.3.2015..
 */
var clickTime;
var createTime;
var reactionTime;

var randColor = function(){
    var spectre =[1,2,3,4,5,6,7,8,9,"a","b","c","d","e","f"];
    var color ="#";
    var randspectre;
    for (var i = 1;i<7;i++){
        randspectre = Math.floor(Math.random()*15);
        color+= spectre[randspectre];
    }
    return color;
};

var makeBox = function()
{
    var rand = Math.random() * 5000;
    setTimeout(function () {
        createTime=Date.now();
        var randLeft = Math.floor(Math.random()*600)+"px";
        var randTop = Math.floor(Math.random()*300)+"px";
        var randHW = Math.floor(Math.random()*150+30)+"px";
        document.getElementById("box").style.display = "block";
        document.getElementById("box").style.backgroundColor=randColor();
        document.getElementById("box").style.left=randLeft;
        document.getElementById("box").style.top=randTop;
        document.getElementById("box").style.height=randHW;
        document.getElementById("box").style.width=randHW;
    }, rand);
};

document.getElementById("box").onclick=function(){
    clickTime=Date.now();
    reactionTime=(clickTime-createTime)/1000;

    this.style.display="none";
    makeBox();
    document.getElementById("time").innerHTML="Your last reaction time: "+parseFloat(reactionTime)+" sec.";
};
makeBox();