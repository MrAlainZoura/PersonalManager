<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dossier Departement Liste</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
</head>
</head>
<body>

<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                </svg>
            </button>
            <a href="https://flowbite.com" class="flex ms-2 md:me-24">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
            <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Achive App</span>
            </a>
        </div>
        <div class="flex items-center">
            <div class="flex items-center ms-3">
                <div>
                <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                </button>
                </div>
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                <div class="px-4 py-3" role="none">
                    <p class="text-sm text-gray-900 dark:text-white" role="none">
                    Neil Sims
                    </p>
                    <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                    neil.sims@flowbite.com
                    </p>
                </div>
                <ul class="py-1" role="none">
                    <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                    </li>
                    <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                    </li>
                    <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                    </li>
                    <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
    </nav>
<div class="p-4">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <nav class="flex m-5 justify-between" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-xl font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-gray">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                        </svg>
                        Home
                    </a>
                    </li>
                    <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <a href="" class="ms-1 text-xl font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-gray">Departement</a>
                    </div>
                    </li>
                    <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="ms-1 text-xl font-medium text-gray-500 md:ms-2 dark:text-gray-400">{{$departements->libele}}</span>
                    </div>
                    </li>
                </ol>
                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    Ajouter un Dossier
                </button>
            </nav> 
            <div class="grid grid-cols-1 gap-4 mb-4 sm:grid-cols-1 lg:grid-cols-3 md:grid-cols-2">

                @foreach($dossier as $key => $val)

                <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                    <a href="{{route('saveDocDep',$val->dossier->id)}}">
                        <span class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg fill="#fad000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px" viewBox="-94.85 -94.85 782.51 782.51" xml:space="preserve" stroke="#fad000" stroke-width="0.00592813">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="28.455023999999998"> <g> <path d="M589.173,356.232l-104.756,198.26c-5.125,9.858-19.653,20.285-30.872,20.285l-420.096,0.077 c-8.875,0-17.384-3.518-23.655-9.794C3.523,558.783,0,550.283,0,541.405l0.068-326.209c0-18.448,14.955-33.417,33.405-33.435 l30.715-0.029v28.496H43.639c-4.022,0-7.885,1.596-10.731,4.442c-2.843,2.846-4.442,6.706-4.442,10.731l0.03,305.796 c0,8.388,6.797,15.173,15.176,15.173h21.045l99.28-200.836c5.609-11.219,16.208-20.286,27.411-20.286h243.14l0.083-80.823 c15.876,1.472,28.406,14.641,28.406,30.893v49.931H574.55C587.719,325.384,598.808,338.406,589.173,356.232z M83.558,445.272 c-0.907-99.969,0-399.884,0-399.884c0-15.132,12.306-27.429,27.423-27.429h219.614c3.518,0,6.874,1.472,9.251,4.061l71,77.141 c2.128,2.323,3.321,5.364,3.321,8.515v199.839h-23.034V124.932c0-3.159-2.565-5.725-5.728-5.725h-54.343 c-6.36,0-11.532-5.163-11.532-11.511V46.721c0-3.16-2.565-5.725-5.728-5.725H110.995c-2.423,0-4.395,1.971-4.395,4.392v374.739 l-17.626,35.66C88.975,455.781,83.649,455.391,83.558,445.272z M342.588,96.182H376.8l-34.212-37.188V96.182z M355.065,142.667 H142.813c-7.82,0-14.168,6.354-14.168,14.174c0,7.814,6.354,14.171,14.168,14.171h212.258c7.82,0,14.187-6.362,14.187-14.171 C369.245,149.027,362.88,142.667,355.065,142.667z M369.245,239.376c0-7.814-6.359-14.162-14.18-14.162H142.813 c-7.82,0-14.168,6.36-14.168,14.162c0,7.814,6.354,14.162,14.168,14.162h212.258C362.88,253.539,369.245,247.19,369.245,239.376z M128.636,322.47c0,7.813,6.357,14.162,14.171,14.162h5.089c8.958-24.967,31.164-28.324,31.164-28.324h-36.253 C135.005,308.308,128.636,314.656,128.636,322.47z"/> </g> </g>
                                <g id="SVGRepo_iconCarrier"> <g> <path d="M589.173,356.232l-104.756,198.26c-5.125,9.858-19.653,20.285-30.872,20.285l-420.096,0.077 c-8.875,0-17.384-3.518-23.655-9.794C3.523,558.783,0,550.283,0,541.405l0.068-326.209c0-18.448,14.955-33.417,33.405-33.435 l30.715-0.029v28.496H43.639c-4.022,0-7.885,1.596-10.731,4.442c-2.843,2.846-4.442,6.706-4.442,10.731l0.03,305.796 c0,8.388,6.797,15.173,15.176,15.173h21.045l99.28-200.836c5.609-11.219,16.208-20.286,27.411-20.286h243.14l0.083-80.823 c15.876,1.472,28.406,14.641,28.406,30.893v49.931H574.55C587.719,325.384,598.808,338.406,589.173,356.232z M83.558,445.272 c-0.907-99.969,0-399.884,0-399.884c0-15.132,12.306-27.429,27.423-27.429h219.614c3.518,0,6.874,1.472,9.251,4.061l71,77.141 c2.128,2.323,3.321,5.364,3.321,8.515v199.839h-23.034V124.932c0-3.159-2.565-5.725-5.728-5.725h-54.343 c-6.36,0-11.532-5.163-11.532-11.511V46.721c0-3.16-2.565-5.725-5.728-5.725H110.995c-2.423,0-4.395,1.971-4.395,4.392v374.739 l-17.626,35.66C88.975,455.781,83.649,455.391,83.558,445.272z M342.588,96.182H376.8l-34.212-37.188V96.182z M355.065,142.667 H142.813c-7.82,0-14.168,6.354-14.168,14.174c0,7.814,6.354,14.171,14.168,14.171h212.258c7.82,0,14.187-6.362,14.187-14.171 C369.245,149.027,362.88,142.667,355.065,142.667z M369.245,239.376c0-7.814-6.359-14.162-14.18-14.162H142.813 c-7.82,0-14.168,6.36-14.168,14.162c0,7.814,6.354,14.162,14.168,14.162h212.258C362.88,253.539,369.245,247.19,369.245,239.376z M128.636,322.47c0,7.813,6.357,14.162,14.171,14.162h5.089c8.958-24.967,31.164-28.324,31.164-28.324h-36.253 C135.005,308.308,128.636,314.656,128.636,322.47z"/> </g> </g>
                            </svg>
                            Dossier {{$val->dossier->libele}}
                        </span>
                    </a>
                </div>
                @endforeach
                
            </div>
            <!-- <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <span class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg fill="#fad000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px" viewBox="-94.85 -94.85 782.51 782.51" xml:space="preserve" stroke="#fad000" stroke-width="0.00592813">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="28.455023999999998"> <g> <path d="M589.173,356.232l-104.756,198.26c-5.125,9.858-19.653,20.285-30.872,20.285l-420.096,0.077 c-8.875,0-17.384-3.518-23.655-9.794C3.523,558.783,0,550.283,0,541.405l0.068-326.209c0-18.448,14.955-33.417,33.405-33.435 l30.715-0.029v28.496H43.639c-4.022,0-7.885,1.596-10.731,4.442c-2.843,2.846-4.442,6.706-4.442,10.731l0.03,305.796 c0,8.388,6.797,15.173,15.176,15.173h21.045l99.28-200.836c5.609-11.219,16.208-20.286,27.411-20.286h243.14l0.083-80.823 c15.876,1.472,28.406,14.641,28.406,30.893v49.931H574.55C587.719,325.384,598.808,338.406,589.173,356.232z M83.558,445.272 c-0.907-99.969,0-399.884,0-399.884c0-15.132,12.306-27.429,27.423-27.429h219.614c3.518,0,6.874,1.472,9.251,4.061l71,77.141 c2.128,2.323,3.321,5.364,3.321,8.515v199.839h-23.034V124.932c0-3.159-2.565-5.725-5.728-5.725h-54.343 c-6.36,0-11.532-5.163-11.532-11.511V46.721c0-3.16-2.565-5.725-5.728-5.725H110.995c-2.423,0-4.395,1.971-4.395,4.392v374.739 l-17.626,35.66C88.975,455.781,83.649,455.391,83.558,445.272z M342.588,96.182H376.8l-34.212-37.188V96.182z M355.065,142.667 H142.813c-7.82,0-14.168,6.354-14.168,14.174c0,7.814,6.354,14.171,14.168,14.171h212.258c7.82,0,14.187-6.362,14.187-14.171 C369.245,149.027,362.88,142.667,355.065,142.667z M369.245,239.376c0-7.814-6.359-14.162-14.18-14.162H142.813 c-7.82,0-14.168,6.36-14.168,14.162c0,7.814,6.354,14.162,14.168,14.162h212.258C362.88,253.539,369.245,247.19,369.245,239.376z M128.636,322.47c0,7.813,6.357,14.162,14.171,14.162h5.089c8.958-24.967,31.164-28.324,31.164-28.324h-36.253 C135.005,308.308,128.636,314.656,128.636,322.47z"/> </g> </g>
                        <g id="SVGRepo_iconCarrier"> <g> <path d="M589.173,356.232l-104.756,198.26c-5.125,9.858-19.653,20.285-30.872,20.285l-420.096,0.077 c-8.875,0-17.384-3.518-23.655-9.794C3.523,558.783,0,550.283,0,541.405l0.068-326.209c0-18.448,14.955-33.417,33.405-33.435 l30.715-0.029v28.496H43.639c-4.022,0-7.885,1.596-10.731,4.442c-2.843,2.846-4.442,6.706-4.442,10.731l0.03,305.796 c0,8.388,6.797,15.173,15.176,15.173h21.045l99.28-200.836c5.609-11.219,16.208-20.286,27.411-20.286h243.14l0.083-80.823 c15.876,1.472,28.406,14.641,28.406,30.893v49.931H574.55C587.719,325.384,598.808,338.406,589.173,356.232z M83.558,445.272 c-0.907-99.969,0-399.884,0-399.884c0-15.132,12.306-27.429,27.423-27.429h219.614c3.518,0,6.874,1.472,9.251,4.061l71,77.141 c2.128,2.323,3.321,5.364,3.321,8.515v199.839h-23.034V124.932c0-3.159-2.565-5.725-5.728-5.725h-54.343 c-6.36,0-11.532-5.163-11.532-11.511V46.721c0-3.16-2.565-5.725-5.728-5.725H110.995c-2.423,0-4.395,1.971-4.395,4.392v374.739 l-17.626,35.66C88.975,455.781,83.649,455.391,83.558,445.272z M342.588,96.182H376.8l-34.212-37.188V96.182z M355.065,142.667 H142.813c-7.82,0-14.168,6.354-14.168,14.174c0,7.814,6.354,14.171,14.168,14.171h212.258c7.82,0,14.187-6.362,14.187-14.171 C369.245,149.027,362.88,142.667,355.065,142.667z M369.245,239.376c0-7.814-6.359-14.162-14.18-14.162H142.813 c-7.82,0-14.168,6.36-14.168,14.162c0,7.814,6.354,14.162,14.168,14.162h212.258C362.88,253.539,369.245,247.19,369.245,239.376z M128.636,322.47c0,7.813,6.357,14.162,14.171,14.162h5.089c8.958-24.967,31.164-28.324,31.164-28.324h-36.253 C135.005,308.308,128.636,314.656,128.636,322.47z"/> </g> </g>
                    </svg>
                    Agents
                </span>
            </div> -->
            <!-- <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <span class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg fill="#fad000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px" viewBox="-94.85 -94.85 782.51 782.51" xml:space="preserve" stroke="#fad000" stroke-width="0.00592813">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="28.455023999999998"> <g> <path d="M589.173,356.232l-104.756,198.26c-5.125,9.858-19.653,20.285-30.872,20.285l-420.096,0.077 c-8.875,0-17.384-3.518-23.655-9.794C3.523,558.783,0,550.283,0,541.405l0.068-326.209c0-18.448,14.955-33.417,33.405-33.435 l30.715-0.029v28.496H43.639c-4.022,0-7.885,1.596-10.731,4.442c-2.843,2.846-4.442,6.706-4.442,10.731l0.03,305.796 c0,8.388,6.797,15.173,15.176,15.173h21.045l99.28-200.836c5.609-11.219,16.208-20.286,27.411-20.286h243.14l0.083-80.823 c15.876,1.472,28.406,14.641,28.406,30.893v49.931H574.55C587.719,325.384,598.808,338.406,589.173,356.232z M83.558,445.272 c-0.907-99.969,0-399.884,0-399.884c0-15.132,12.306-27.429,27.423-27.429h219.614c3.518,0,6.874,1.472,9.251,4.061l71,77.141 c2.128,2.323,3.321,5.364,3.321,8.515v199.839h-23.034V124.932c0-3.159-2.565-5.725-5.728-5.725h-54.343 c-6.36,0-11.532-5.163-11.532-11.511V46.721c0-3.16-2.565-5.725-5.728-5.725H110.995c-2.423,0-4.395,1.971-4.395,4.392v374.739 l-17.626,35.66C88.975,455.781,83.649,455.391,83.558,445.272z M342.588,96.182H376.8l-34.212-37.188V96.182z M355.065,142.667 H142.813c-7.82,0-14.168,6.354-14.168,14.174c0,7.814,6.354,14.171,14.168,14.171h212.258c7.82,0,14.187-6.362,14.187-14.171 C369.245,149.027,362.88,142.667,355.065,142.667z M369.245,239.376c0-7.814-6.359-14.162-14.18-14.162H142.813 c-7.82,0-14.168,6.36-14.168,14.162c0,7.814,6.354,14.162,14.168,14.162h212.258C362.88,253.539,369.245,247.19,369.245,239.376z M128.636,322.47c0,7.813,6.357,14.162,14.171,14.162h5.089c8.958-24.967,31.164-28.324,31.164-28.324h-36.253 C135.005,308.308,128.636,314.656,128.636,322.47z"/> </g> </g>
                        <g id="SVGRepo_iconCarrier"> <g> <path d="M589.173,356.232l-104.756,198.26c-5.125,9.858-19.653,20.285-30.872,20.285l-420.096,0.077 c-8.875,0-17.384-3.518-23.655-9.794C3.523,558.783,0,550.283,0,541.405l0.068-326.209c0-18.448,14.955-33.417,33.405-33.435 l30.715-0.029v28.496H43.639c-4.022,0-7.885,1.596-10.731,4.442c-2.843,2.846-4.442,6.706-4.442,10.731l0.03,305.796 c0,8.388,6.797,15.173,15.176,15.173h21.045l99.28-200.836c5.609-11.219,16.208-20.286,27.411-20.286h243.14l0.083-80.823 c15.876,1.472,28.406,14.641,28.406,30.893v49.931H574.55C587.719,325.384,598.808,338.406,589.173,356.232z M83.558,445.272 c-0.907-99.969,0-399.884,0-399.884c0-15.132,12.306-27.429,27.423-27.429h219.614c3.518,0,6.874,1.472,9.251,4.061l71,77.141 c2.128,2.323,3.321,5.364,3.321,8.515v199.839h-23.034V124.932c0-3.159-2.565-5.725-5.728-5.725h-54.343 c-6.36,0-11.532-5.163-11.532-11.511V46.721c0-3.16-2.565-5.725-5.728-5.725H110.995c-2.423,0-4.395,1.971-4.395,4.392v374.739 l-17.626,35.66C88.975,455.781,83.649,455.391,83.558,445.272z M342.588,96.182H376.8l-34.212-37.188V96.182z M355.065,142.667 H142.813c-7.82,0-14.168,6.354-14.168,14.174c0,7.814,6.354,14.171,14.168,14.171h212.258c7.82,0,14.187-6.362,14.187-14.171 C369.245,149.027,362.88,142.667,355.065,142.667z M369.245,239.376c0-7.814-6.359-14.162-14.18-14.162H142.813 c-7.82,0-14.168,6.36-14.168,14.162c0,7.814,6.354,14.162,14.168,14.162h212.258C362.88,253.539,369.245,247.19,369.245,239.376z M128.636,322.47c0,7.813,6.357,14.162,14.171,14.162h5.089c8.958-24.967,31.164-28.324,31.164-28.324h-36.253 C135.005,308.308,128.636,314.656,128.636,322.47z"/> </g> </g>
                    </svg>
                    <p>Homme</p>
                    </span>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <span class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg fill="#fad000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px" viewBox="-94.85 -94.85 782.51 782.51" xml:space="preserve" stroke="#fad000" stroke-width="0.00592813">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="28.455023999999998"> <g> <path d="M589.173,356.232l-104.756,198.26c-5.125,9.858-19.653,20.285-30.872,20.285l-420.096,0.077 c-8.875,0-17.384-3.518-23.655-9.794C3.523,558.783,0,550.283,0,541.405l0.068-326.209c0-18.448,14.955-33.417,33.405-33.435 l30.715-0.029v28.496H43.639c-4.022,0-7.885,1.596-10.731,4.442c-2.843,2.846-4.442,6.706-4.442,10.731l0.03,305.796 c0,8.388,6.797,15.173,15.176,15.173h21.045l99.28-200.836c5.609-11.219,16.208-20.286,27.411-20.286h243.14l0.083-80.823 c15.876,1.472,28.406,14.641,28.406,30.893v49.931H574.55C587.719,325.384,598.808,338.406,589.173,356.232z M83.558,445.272 c-0.907-99.969,0-399.884,0-399.884c0-15.132,12.306-27.429,27.423-27.429h219.614c3.518,0,6.874,1.472,9.251,4.061l71,77.141 c2.128,2.323,3.321,5.364,3.321,8.515v199.839h-23.034V124.932c0-3.159-2.565-5.725-5.728-5.725h-54.343 c-6.36,0-11.532-5.163-11.532-11.511V46.721c0-3.16-2.565-5.725-5.728-5.725H110.995c-2.423,0-4.395,1.971-4.395,4.392v374.739 l-17.626,35.66C88.975,455.781,83.649,455.391,83.558,445.272z M342.588,96.182H376.8l-34.212-37.188V96.182z M355.065,142.667 H142.813c-7.82,0-14.168,6.354-14.168,14.174c0,7.814,6.354,14.171,14.168,14.171h212.258c7.82,0,14.187-6.362,14.187-14.171 C369.245,149.027,362.88,142.667,355.065,142.667z M369.245,239.376c0-7.814-6.359-14.162-14.18-14.162H142.813 c-7.82,0-14.168,6.36-14.168,14.162c0,7.814,6.354,14.162,14.168,14.162h212.258C362.88,253.539,369.245,247.19,369.245,239.376z M128.636,322.47c0,7.813,6.357,14.162,14.171,14.162h5.089c8.958-24.967,31.164-28.324,31.164-28.324h-36.253 C135.005,308.308,128.636,314.656,128.636,322.47z"/> </g> </g>
                        <g id="SVGRepo_iconCarrier"> <g> <path d="M589.173,356.232l-104.756,198.26c-5.125,9.858-19.653,20.285-30.872,20.285l-420.096,0.077 c-8.875,0-17.384-3.518-23.655-9.794C3.523,558.783,0,550.283,0,541.405l0.068-326.209c0-18.448,14.955-33.417,33.405-33.435 l30.715-0.029v28.496H43.639c-4.022,0-7.885,1.596-10.731,4.442c-2.843,2.846-4.442,6.706-4.442,10.731l0.03,305.796 c0,8.388,6.797,15.173,15.176,15.173h21.045l99.28-200.836c5.609-11.219,16.208-20.286,27.411-20.286h243.14l0.083-80.823 c15.876,1.472,28.406,14.641,28.406,30.893v49.931H574.55C587.719,325.384,598.808,338.406,589.173,356.232z M83.558,445.272 c-0.907-99.969,0-399.884,0-399.884c0-15.132,12.306-27.429,27.423-27.429h219.614c3.518,0,6.874,1.472,9.251,4.061l71,77.141 c2.128,2.323,3.321,5.364,3.321,8.515v199.839h-23.034V124.932c0-3.159-2.565-5.725-5.728-5.725h-54.343 c-6.36,0-11.532-5.163-11.532-11.511V46.721c0-3.16-2.565-5.725-5.728-5.725H110.995c-2.423,0-4.395,1.971-4.395,4.392v374.739 l-17.626,35.66C88.975,455.781,83.649,455.391,83.558,445.272z M342.588,96.182H376.8l-34.212-37.188V96.182z M355.065,142.667 H142.813c-7.82,0-14.168,6.354-14.168,14.174c0,7.814,6.354,14.171,14.168,14.171h212.258c7.82,0,14.187-6.362,14.187-14.171 C369.245,149.027,362.88,142.667,355.065,142.667z M369.245,239.376c0-7.814-6.359-14.162-14.18-14.162H142.813 c-7.82,0-14.168,6.36-14.168,14.162c0,7.814,6.354,14.162,14.168,14.162h212.258C362.88,253.539,369.245,247.19,369.245,239.376z M128.636,322.47c0,7.813,6.357,14.162,14.171,14.162h5.089c8.958-24.967,31.164-28.324,31.164-28.324h-36.253 C135.005,308.308,128.636,314.656,128.636,322.47z"/> </g> </g>
                    </svg>
                    <p>Femme</p>
                    </span>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                    </svg>
                    </p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                    </svg>
                    </p>
                </div>
            </div> -->
        
        </div>
    </div>

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4">Archive Departement
           
            <a href="">{{$departements->libele}} </a>
       
        </h1>
        <p class="text-gray-700">Différentes Sections.</p>
    </div>

    <div>

        <!-- Main modal -->
        <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Nouveau Dossier
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="{{route('departement-dossier.store')}}" method="post" class="p-4 md:p-5">
                        @csrf 
                        @method('post')
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input type="text" name="libele" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                            </div>
                            <input type="hidden" name="departement_id" value="{{$departements->id}}">
                        </div>
                        <div class="flex items-center justify-center">
                            <button type="submit" class="text-white flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">

                                <svg fill="#f9f21a" width="30px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-53.9 -53.9 597.80 597.80" xml:space="preserve" stroke="#f9f21a" stroke-width="0.0049">

                                <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                                <g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M105.8,330.6V490h278.4V330.6H105.8z M359.7,458.9H134.2c-5.4,0-9.7-4.3-9.7-9.7c0-5.4,4.3-9.7,9.7-9.7h225.6 c5.4,0,9.7,4.3,9.7,9.7C369.4,454.6,365.2,458.9,359.7,458.9z M359.7,381.1H134.2c-5.4,0-9.7-4.3-9.7-9.7s4.3-9.7,9.7-9.7h225.6 c5.4,0,9.7,4.3,9.7,9.7S365.2,381.1,359.7,381.1z"/> <path d="M384.2,123.3V0H105.8v123.3H384.2z M301.4,39.3c0-2.7,2.3-5.1,5.1-5.1h23.7c2.7,0,5.1,2.3,5.1,5.1v40.1 c0,2.7-2.3,5.1-5.1,5.1h-23.7c-2.7,0-5.1-2.3-5.1-5.1V39.3z"/> <path d="M403.7,0v133c0,5.4-4.3,9.7-9.7,9.7H96.1c-5.4,0-9.7-4.3-9.7-9.7V0H0v490h86.3V320.8c0-5.4,4.3-9.7,9.7-9.7h297.9 c5.4,0,9.7,4.3,9.7,9.7V490H490V52.9L437.1,0H403.7z"/> </g> </g> </g> </g>

                                </svg>
                                Ajouter
                            </button>
                        </div>
                    </form>
                </div>
            </div>
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