<html>
<head>
<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
</head>
<body>
    <input type='button' id="button" value="123"> 
<script> 
$("#button").click(function(){
var message="gogog";
    $.ajax({
        url:"http://localhost:3000",
        data:{name:"123"},                                                              
        type : "POST", 
        //data:{name:message},                                                                   
        dataType:"text",    
        error:function(){                                                                 
          alert("失敗");
        },
        success:function(){                                                           
          alert("成功");
        }
    });       
});
</script>
</body>
</html>