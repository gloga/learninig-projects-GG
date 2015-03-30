/**
 * Created by Gabriel on 30.3.2015..
 */
$(".codeContainer").height($(window).height()-$("#header").height());

$(".fun").click(function(){
    $(this).toggleClass("selected");

    var activeDiv = $(this).html();

    $("#"+activeDiv+"container").toggle();

    var showingDivs = $(".codeContainer").filter(function(){
        return($(this).css("display")!="none");
    }).length;

    var width=100/showingDivs;

    $(".codeContainer").css("width", width+"%");

});

$("#funRun").click(function(){
    $("#resultcode").contents().find("html").html('<style>'+$("#textCSS").val()+'</style>'+$("#textHTML").val());

    /*document.getElementById("resultcode").contentWindow.eval($("#textJS").val());*/
});