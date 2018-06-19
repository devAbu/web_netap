<!DOCTYPE html>
<html>
<head>
<title>Ajax</title>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
    <form id="myForm" action="" method="post" accept-charset="utf-8">
        <input type="text" id="name" value="" placeholder="name" />
        <input type="text" id="age" value="" placeholder="age" />
        <input type="submit" id="submit" value="Submit form" /> 
    </form>
    <div id="the-return">
  [HTML is replaced when successful.]
    </div>
</body>
</html>
<script type="text/javascript">

$(document).ready(function(){
  displayFromDatabase();
    $("#submit").click(function(){
        var name = $("#name").val();
        var age = $("#age").val();
        
        $.ajax({
            url: "server.php",
            type: "post",
            async: false,
            data: {
                "done": 1,
                "name": name,
                "age": age
            },
            success: function(data){
                displayFromDatabase();
                $("#name").val('');
                $("#age").val('');
            }
        });
    });
    
    function displayFromDatabase(){
        $.ajax({
            url: "server.php",
            type: "post",
            async: false,
            data: {
                "display": 1
            },
            success: function(data){
                $("#the-return").html(data);
            }
        });
    }
    
});


</script>