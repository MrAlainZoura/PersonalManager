<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Agent Service</title>
</head>
<body>
    
<script>
    var token = localStorage.getItem('user_token')
    if(window.location.pathname =='/' || window.location.pathname=='/register' ){
        if(token !=null){
            window.open('/profile')
        }
    }else{
        if(token == null){
            window.open('/','_self')
        }
    }

    //logout 
    $(document).ready(function(){
        $('.logout').click(function(){
            $.ajax({
                url:"http://127.0.0.1:8000/api/logout",
                type:"POST",
                headers:{'Authorization':token},
                success: function(data){
                    if(data.message=="Successfully logged out"){
                        localStorage.removeItem('user_token')
                        window.open('/','_self')
                    }
                }
            })
        })
    })
</script>