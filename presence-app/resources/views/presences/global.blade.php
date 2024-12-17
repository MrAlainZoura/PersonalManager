<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <title>Rapport présence</title>
</head>
<body>
    <div class="m-5 w-3xl">
        <h1 class="text-gray-600 text-6xl m-5 p-5 flex justify-center p-5">Rapport global de présence</h1>
        @foreach($tab as $annee=>$mois)
            <div class="m-5 p-5"> 
            <h3 class="text-gray-900 text-4xl bg-red-100 w-full p-5"> Année {{$annee}} </h3> 
                @foreach($mois as $libele =>$jours)
                <div class="m-5">
                    <p class="text-3xl mb-5">
                        @Mois($libele) 
                    </p>
                    @foreach($jours as $date=>$presence)
                     <div class="mb-5">   
                        <label class="p-2 text-2xl text-gray-600 bg-red-100 w-auto">{{$date}}</label>
                        <div class="relative overflow-x-auto">
                            <table class="w-full text-lg text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            #
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Nom
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Service
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Arrivée
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Départ
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Observation
                                        </th>
                                    </tr>
                                </thead>

                                @foreach($presence as $key=>$val)
                                <tbody>

                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$key+1}}
                                        </th>
                                        <td class="px-6 py-4">
                                        {{$val->nom }}
                                        </td>
                                        <td class="px-6 py-4">
                                            General
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$val->h_arrive}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$val->h_sortie}}
                                        </td>
                                        <td class="px-6 py-4">

                                        @if($val->confirmation>0)
                                            Présent
                                        @else
                                            Ailleurs non confirmé
                                        @endif
                                        </td>
                                    </tr>
                                                                
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    @endforeach
                </div>    
                @endforeach
            </div>
        @endforeach
    </div>
</body>
</html>