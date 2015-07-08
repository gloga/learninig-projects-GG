$("#findw").click(function(event){
        event.preventDefault();
        if ($("#city").val()!=""){
            $.get("scraper.php?city=London", function (data) {
                alert(data);
            })
        }else{
            alert("Please enter a city!");
        };
});