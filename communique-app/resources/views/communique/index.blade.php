<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <title>Home-prive Communiqué</title>
</head>
<body>


    <header class="fixed top-0 left-0 w-full shadow-md z-10">
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
                <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="" class="h-8" alt="Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">P Manager</span>
                </a>
                <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <form action="{{route('logout')}}" method="post">
                        <!-- <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Login</a> -->
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Deconnexion</button>
                    
                        @csrf 
                        @method('post')
                        
                    </form>
                </div>
                <!-- <div id="mega-menu-icons" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
                    <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                        <li>
                            <a href="#" class="block py-2 px-3 text-blue-600 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-blue-500 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
                        </li>
                        
                        <li>
                            <a href="#" class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Team</a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </nav>
    </header>



        <main class="mt-30">
            <div class="mt-10 py-10 ">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                   Gérer la Communication entre vous et de vos collaborateurs en seul clic<!-- . <a href="#" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Plus d'information<span aria-hidden="true">&rarr;</span></a>-->
                </div> 
                </div>
                <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Bienvenue dans Persnal Manager</h1>
                <p class="mt-6 text-lg leading-8 text-gray-600">Nous facilitons votre gestion de personnel</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Vous êtes dans le portail de communiqué<span aria-hidden="true">→</span></a>
                </div>
                </div>
            </div>
            <!-- fin banner -->

            <!-- recent article -->
            <section class="bg-gradient-to-r from-gray-100 via-white-100 to-blue-100  dark:bg-gray-900">
                <div class="container mx-auto px-6 py-10">
                    <div class="text-center">
                        <h1 class="text-3xl font-semibold capitalize text-gray-800 dark:text-white lg:text-4xl">Information Récente</h1>

                        <p class="mx-auto mt-4 max-w-lg text-dark">Ici vous avez toutes les informations de l'entreprise</p>
                    </div>

                    <div class="mt-8 grid grid-cols-1 gap-8 md:mt-16 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3">
                        @foreach($communique as $k=>$v)
                        <div class="w-full">
                            
                            <div class="block max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$v->titre}}</h5>
                            <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">{{$v->concerne}}</h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400">{{$v->contenu}}</p>
                            </div>

                
                        </div>
                       @endforeach

                    </div>
                </div>
           
            </section>

            
            <section class="min-h-screendark:from-gray-700 dark:via-gray-800 dark:to-gray-900" id="login">
                <div class="container mx-auto flex min-h-screen flex-col px-6 py-6">
                    <div class="grid grid-cols-1 gap-10 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1">
                        <div class="text-dark mt-8 lg:mx-6 lg:w-1/2 shadow-2xl">
                            
                        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Envoyer un Communiqué à un particulier</h2>
                                        <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Rediger votre communiqué ici</p>

                            
                                        @if(session('success'))
                                    <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                                        <span class="font-medium">Success </span>{{session('success')}}
                                    </div>
                                    @endif
                                    @if(session('echec'))
                                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                        <span class="font-medium">Erreur</span> {{session('echec')}}
                                    </div>
                                    @endif

                                        <form action="{{route('messages.store')}}" method="post"class="space-y-8">
                                            @csrf 
                                            @method('post')
                                            <div> 
                                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Titre</label>
                                                <input type="text" name="titre" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"  required>
                                            </div>
                                            <div>
                                                <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Object</label>
                                                <input type="text" name="objet" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"  required>
                                            </div>
                                            <div>
                                                <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Destinateur</label>
                                                <input type="email" name="destinateur" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"  required>
                                            </div>
                                            <div class="sm:col-span-2">
                                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Communiqué</label>
                                                <textarea id="message" name="contenu" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" ></textarea>
                                            </div>
                                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                Evoyer
                                            </button>
                                        </form>
                                    </div>
                            
                        </div>

                        <div class="mt-8 lg:mx-6 lg:w-1/2">
                            <div class="mx-auto w-full overflow-hidden rounded-xl bg-white px-8 py-10 shadow-2xl dark:bg-gray-900 lg:max-w-xl">
                                <section class="bg-white dark:bg-gray-900">
                                    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Ajouter un Communiqué</h2>
                                        <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Publier votre communiqué ici</p>
                                        <form action="{{route('communiques.store')}}" method="post"class="space-y-8">
                                            @csrf 
                                            @method('post')
                                            <div> 
                                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Titre</label>
                                                <input type="text" name="titre" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"  required>
                                            </div>
                                            <div>
                                                <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Object</label>
                                                <input type="text" name="objet" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"  required>
                                            </div>
                                            <div>
                                                <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Concerne</label>
                                                <input type="text" name="concerne" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"  required>
                                            </div>
                                            <div class="sm:col-span-2">
                                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Communiqué</label>
                                                <textarea id="message" name="contenu" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" ></textarea>
                                            </div>
                                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                                Publier
                                            </button>
                                        </form>
                                    </div>
                                </section>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="bg-white dark:bg-gray-900">
                <div class="container mx-auto px-6 py-12">
                    <!-- <div class="md:-mx-3 md:flex md:items-center md:justify-between">
                        <h1 class="text-3xl font-semibold tracking-tight text-gray-800 dark:text-white md:mx-3 xl:text-4xl">Clean code.</h1>
                    </div> -->


                    <hr class="my-6 border-gray-200 dark:border-gray-700 md:my-10" />

                    <!-- <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                        <div>
                            <p class="font-semibold text-gray-800 dark:text-white">Support</p>

                            <div class="mt-5 flex flex-col items-start space-y-2">
                                <nav class="list-none">
                                    <li class="mt-3">
                                        <a class="text-gray-500 cursor-pointer hover:text-gray-900">CSS/html/JS</a>
                                    </li>
                                    <li class="mt-3">
                                        <a class="text-gray-500 cursor-pointer hover:text-gray-900">Tailwind</a>
                                    </li>
                                    <li class="mt-3">
                                        <a class="text-gray-500 cursor-pointer hover:text-gray-900">QSPA</a>
                                    </li>
                                </nav>
                            </div>
                        </div>

                        <div>
                            <p class="font-semibold text-gray-800 dark:text-white">Partenaire</p>

                            <div class="mt-5 flex flex-col items-start space-y-2">
                                <a href="#" class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">DevHard</a>
                                <a href="#" class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">QGDev</a>
                                <a href="#" class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400"></a>
                            </div>
                        </div>

                        <div>
                            <p class="font-semibold text-gray-800 dark:text-white">Contact</p>

                            <div class="mt-5 flex flex-col items-start space-y-2">
                                <nav class="list-none">
                                    <li class="mt-3">
                                        <a href="mailto:a.tshiyanze@gmail.com" class="text-gray-500 cursor-pointer hover:text-gray-900">Ecrivez moi un message</a>
                                    </li>
                                    <li class="mt-3">
                                        <a class="text-gray-500 cursor-pointer hover:text-gray-900">+243 812 995 373</a>
                                    </li>

                                </nav>
                            </div>
                        </div>
                    </div> -->

                    <hr class="my-6 border-gray-200 dark:border-gray-700 md:my-10" />

                    <div class="flex flex-col items-center justify-between sm:flex-row">
                        <a href="#" class="text-md font-bold text-gray-800 transition-colors duration-300 hover:text-gray-700 dark:text-white dark:hover:text-gray-300">P Manager</a>

                        <p class="mt-4 text-sm text-gray-500 dark:text-gray-300 sm:mt-0">Zouracorp © Copyright 2024. All Rights Reserved.</p>
                    </div>
                </div>
            </footer>
        </main>
</body>
</html>