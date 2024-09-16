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
        <h1 class="text-3xl font-bold mb-4">Archive Departement
           
            <a href="">{{$departements->libele}} </a>
       
        </h1>
        <p class="text-gray-700">Différentes Sections.</p>
    </div>

    <div>
        Creation de dossier
        <form action="{{route('departement-dossier.store')}}" method="post">
            @csrf 
            @method('post')
            <p>Libele <input type="text" name="libele" required> </p>
            <input type="hidden" name="departement_id" value="{{$departements->id}}">

            @if(session('echec'))
                <p> {{session('echec')}} </p>
            @endif
            @if(session('success'))
                <p> {{session('success')}} </p>
            @endif
            <button type="submit">Creer Dossier</button>
        </form>
    </div>

    <div>
        Differents dossiers
        @foreach($dossier as $key => $val)
        
            <p>Dossier <a href="{{route('saveDocDep',$val->dossier->id)}}">{{$val->dossier->libele}}</a></p>
            
        @endforeach
    </div>
    <div>
        
        @foreach($section as $key => $val)
        
            <p> <a href="{{route('section-dossier.show',$val->id)}}">Section {{$val->libele}}</a> </p>
            
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