/**
 * Created by Gabriel on 6.7.2015..
 */
$("#check").click(function() {
    var res=0;
    $(".alert").hide();
    //event.preventDefault();
    $.ajax(
        {
            type: "GET",
            url: "https://maps.googleapis.com/maps/api/geocode/xml?address="+encodeURIComponent($('#address').val())+"&key=AIzaSyBokxz0SPzpCSWi-hYMx0BJ0HVWi_7Y-ug",
            dataType: "xml",
            success: processXML,
            error:error
        });
    function error(){
        $("#alert3").fadeIn();
    }
    function processXML(xml) {
        $(xml).find("address_component").each(function () {
            $(this).text();
            if ($(this).find("type").text() == "postal_code") {
                $("#alert1").html("The post code is "+$(this).find('long_name').text()).fadeIn();
                res=1;
            }
        });
        if(res==0){
            $("#alert2").fadeIn();
        }
    }
});
