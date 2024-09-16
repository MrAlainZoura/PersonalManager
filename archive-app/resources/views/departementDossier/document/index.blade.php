<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dossier Departement Liste</title>
    <!-- Import Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Archive {{$dossier->libele}}</h1>
        <p class="text-gray-700">Différents document.</p>
    </div>

    <div>
        Ajouter document

        <form action="{{route('document.store')}}" method="post" enctype="multipart/form-data">
            @csrf 
            @method('post')
            <input type="hidden" name="dossier_id" value="{{$dossier->id}}">
            <p>Libele <input type="text" name="libele" required> </p>
            <p>Document <input type="file" name="file"> </p>

            @if(session('echec'))
                <p> {{session('echec')}} </p>
            @endif
            @if(session('success'))
                <p> {{session('success')}} </p>
            @endif

            <button type="submit">Archiver</button>
        </form>
    </div>
    <div>
        Liste de document 

        @foreach($dossier->document as $key => $val)
            <p>{{$val->type}} <a href="{{url('storage/departement/'.$val->libele.'.'.$val->type)}}" target="_blank"> {{$val->libele}}</a> </p>
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