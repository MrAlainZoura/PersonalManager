<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dossier Service Liste</title>
    <!-- Import Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Archive Section
            <a href="">{{$service->libele}} </a>
        </h1>
        <p class="text-gray-700">Différents Agent.</p>
    </div>
    <div>
        
        @foreach($agent as $key => $val)
        
            <p> <a href="{{route('agent-dossier.show',$val->email)}}">Agent {{$val->nom}}</a> </p>
            <p>{{$val->postnom}} {{$val->email}}</p>
            
        @endforeach
        
    </div>
    <!-- Importer un script JavaScript (exemple) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log("Le document est prêt !");
        });
    </script>
</body>
</html>