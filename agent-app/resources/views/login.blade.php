<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>

</head>
<body>
    <!-- <form action="{{route('login')}}" method="post"> -->

    
    <form id="login-form">
        @csrf
        @method('post')
        <input type="text" name="email" placeholder="your email"> <br>
        <input type="text" name="password" placeholder="mot de pzsse"> <br>
        <button type="submit">connexion</button>
    </form>
    <script>
        fetch('https://jsonplaceholder.typicode.com/todos/1')
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.error('Error:', error));

        $(document).ready(function (){
            $('#login-form').submit(function (event){
                event.preventDefault();
                
                var formData = $(this).serialize();
                // console.log(formData)
                $.ajax({
                    url:"http://127.0.0.1:8000/api/login",
                    type:"POST",
                    headers: {
                             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                             'Authorization':'Bearer'+$('meta[name="csrf-token"]'),
                             'Accept':'application/json'
                            },
                    data: formData,
                    success: function(){
                        console.log(data);
                    }
                })
            })
        })
    </script>
</body>
</html>