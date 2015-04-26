/**
 * Created by Gabriel on 18.3.2015..
 */

$(function(){
    $("#sideitem1").css({width:"127px"});
    $("#sideitem1 > .sidetext").css({display:"block"});
});

$(".sidebaritem").click(function(){
    $(this).animate({
        width:"127px"
    },300);
    $(this).children(".sidetext").fadeIn(150);

    $(this).siblings().animate({
        width:"50px"
    },300);
    $(this).siblings().children(".sidetext").fadeOut(150);
});

$("#sideitem1").click(function(){
    $.ajax({
        url:"home.html"
    }).done(function(data){
        $("#contenttext").html(data);
    })
});

$("#sideitem2").click(function(){
    $.ajax({
        url:"skills.html"
    }).done(function(data){
        $("#contenttext").html(data);
    })
});

$("#sideitem5").click(function(){
    $.ajax({
        url:"contact.html"
    }).done(function(data){
        $("#contenttext").html(data);
    })
});
