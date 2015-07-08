<!DOCTYPE html>
<html>
<head>
    <title>Weatheroo</title>
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html" charset="utf-8"/>
    <meta name="viewport" content="width=device-width, inital-scale=1"/>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">      
    <link rel="stylesheet" href="style.css" type="text/css">  
</head>
<body>
   <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 center">
                <h1 class="">Weatheroo</h1> </br>
                <p class="lead">Enter Your city to see a weather forecast</p>
                </br>
                <form action="">
                    <div class="form-group">
                       <div class="input-group">
                            <span class="input-group-addon">City:</span>
                            <input type="text" class="form-control" name="city" id="city" placeholder="London, Paris, New York etc.">
                       </div>
                    </div>
                    <button class="btn-success btn-lg" id="findw">Find weather</button>
                </form>
                <div class="alert alert-success" id="success"></div>
                <div class="alert alert-danger" id="fail">Could not retrive forecast for that city!</div>
                <div class="alert alert-warning" id="noCity">Please enter a city!</div>
            </div>
        </div>
   </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script>
        $("#findw").click(function(event){
            event.preventDefault();
            $("#city").html("");
            
            $(".alert").hide();
            if($("#city").val()!=""){
                $.get("scraper.php?city="+$("#city").val(), function(data){
                    
                    if(data==""){
                        
                        $("#fail").fadeIn();
                    
                    }else{
                       
                        $("#success").html(data).fadeIn();
                    
                    }
                });
            }else{
                
                $("#noCity").fadeIn();
            }
        });
    </script>
</body>
</html>