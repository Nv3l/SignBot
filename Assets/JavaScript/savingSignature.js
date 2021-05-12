$(function(){  
    $("#submit-registerSign").click(function(){
        html2canvas($("#canvas"), {  
            onrendered: function(canvas) { 
                var imgsrc = canvas.toDataURL("image/png");  
                console.log(imgsrc);
                $.ajax({
                    type: "POST",
                    url: "registerSignBot.php",
                    data: { 
                        SignBase64: imgsrc
                    }
                }).done(function(o) {
                    window.location.replace("http://localhost/SignBot/registerSignBot.php?finalRegister");
                    console.log('saved');
                }); 
            }  
        });  
    });  
});



