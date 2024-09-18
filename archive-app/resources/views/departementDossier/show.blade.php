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
            <div class="p-4   rounded-lg mt-8">
                <nav class="flex m-2 justify-between" aria-label="Breadcrumb">
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
                    <!-- <div> bouton flottant
                        <div data-dial-init class="fixed bottom-6 right-24 group">
                            <div id="speed-dial-menu-dropdown-alternative" class="flex flex-col justify-end hidden py-1 mb-4 space-y-2 bg-white border border-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600">
                                <ul class="text-sm text-gray-500 dark:text-gray-300">
                                    <li>
                                        <a href="#" class="flex items-center px-5 py-2 border-b border-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white dark:border-gray-600">
                                            <svg class="w-3.5 h-3.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                                <path d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z"/>
                                            </svg>
                                            <span class="text-sm font-medium">New post</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center px-5 py-2 border-b border-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white dark:border-gray-600">
                                            <svg class="w-3.5 h-3.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M19 4h-1a1 1 0 1 0 0 2v11a1 1 0 0 1-2 0V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V5a1 1 0 0 0-1-1ZM3 4a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4Zm9 13H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-3H4a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Zm0-3h-2a1 1 0 0 1 0-2h2a1 1 0 1 1 0 2Z"/>
                                                <path d="M6 5H5v1h1V5Z"/>
                                            </svg>
                                            <span class="text-sm font-medium">New topic</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center px-5 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white">
                                            <svg class="w-3.5 h-3.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 18" fill="currentColor">
                                                <path d="M18 4H16V9C16 10.0609 15.5786 11.0783 14.8284 11.8284C14.0783 12.5786 13.0609 13 12 13H9L6.846 14.615C7.17993 14.8628 7.58418 14.9977 8 15H11.667L15.4 17.8C15.5731 17.9298 15.7836 18 16 18C16.2652 18 16.5196 17.8946 16.7071 17.7071C16.8946 17.5196 17 17.2652 17 17V15H18C18.5304 15 19.0391 14.7893 19.4142 14.4142C19.7893 14.0391 20 13.5304 20 13V6C20 5.46957 19.7893 4.96086 19.4142 4.58579C19.0391 4.21071 18.5304 4 18 4Z" fill="currentColor"/>
                                                <path d="M12 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V9C0 9.53043 0.210714 10.0391 0.585786 10.4142C0.960859 10.7893 1.46957 11 2 11H3V13C3 13.1857 3.05171 13.3678 3.14935 13.5257C3.24698 13.6837 3.38668 13.8114 3.55279 13.8944C3.71889 13.9775 3.90484 14.0126 4.08981 13.996C4.27477 13.9793 4.45143 13.9114 4.6 13.8L8.333 11H12C12.5304 11 13.0391 10.7893 13.4142 10.4142C13.7893 10.0391 14 9.53043 14 9V2C14 1.46957 13.7893 0.960859 13.4142 0.585786C13.0391 0.210714 12.5304 0 12 0Z" fill="currentColor"/>
                                            </svg>
                                            <span class="text-sm font-medium">Add comment</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <button type="button" data-dial-toggle="speed-dial-menu-dropdown-alternative" aria-controls="speed-dial-menu-dropdown-alternative" aria-expanded="false" class="flex items-center justify-center ml-auto text-white bg-blue-700 rounded-full w-14 h-14 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="m13.835 7.578-.005.007-7.137 7.137 2.139 2.138 7.143-7.142-2.14-2.14Zm-10.696 3.59 2.139 2.14 7.138-7.137.007-.005-2.141-2.141-7.143 7.143Zm1.433 4.261L2 12.852.051 18.684a1 1 0 0 0 1.265 1.264L7.147 18l-2.575-2.571Zm14.249-14.25a4.03 4.03 0 0 0-5.693 0L11.7 2.611 17.389 8.3l1.432-1.432a4.029 4.029 0 0 0 0-5.689Z"/>
                                </svg>
                                <span class="sr-only">Open actions menu</span>
                            </button>
                        </div>
                    </div> -->

                    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                        
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
                            <li class="me-2" role="presentation">
                                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal">
                                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                    <svg fill="#ffdd00" width="35px" height="35px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg" stroke="#ffdd00">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                                    <g id="SVGRepo_iconCarrier"> <path d="m764.386 112.941 225.882 338.824H1920v1185.882c0 88.213-67.799 160.913-154.016 168.718l-15.396.694H169.412c-88.214 0-160.913-67.799-168.718-154.016L0 1637.647V112.941h764.386Zm-60.537 112.941H112.941v1411.765c0 27.708 20.079 50.776 46.354 55.56l10.117.91h1581.176c27.608 0 50.754-19.989 55.557-46.324l.914-10.146V564.706H225.882V451.765H854.4L703.85 225.882Zm312.622 564.706v282.353h282.353v112.941H1016.47v282.353H903.529v-282.353H621.176v-112.94H903.53V790.587h112.942Z" fill-rule="evenodd"/> </g>
                                    </svg>
                                </button>        
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Dossier</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Section</button>
                            </li>
                            
                        </ul>
                    </div>
                
                </nav> 
          
            </div>
    </div>
    <div class="p-4" >

    @if(session('echec'))
                
                <div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                <span class="font-semibold underline hover:no-underline">
                    {{session('echec')}}
                </span>
                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
                </div>
            @endif
            @if(session('success'))
                <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium">
                        <span class="font-semibold underline hover:no-underline">{{session('success')}} !</span>
                    </div>
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
            @endif
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

                        <div  id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab" class="grid grid-cols-1 gap-4 mb-4 sm:grid-cols-1 lg:grid-cols-3 md:grid-cols-2">
                            @foreach($section as $key => $val)
                            <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
                                <a  href="{{route('section-dossier.show',$val->id)}}">
                                    <span class="text-2xl text-gray-400 dark:text-gray-500">
                                        <svg fill="#fad000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px" viewBox="-94.85 -94.85 782.51 782.51" xml:space="preserve" stroke="#fad000" stroke-width="0.00592813">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="28.455023999999998"> <g> <path d="M589.173,356.232l-104.756,198.26c-5.125,9.858-19.653,20.285-30.872,20.285l-420.096,0.077 c-8.875,0-17.384-3.518-23.655-9.794C3.523,558.783,0,550.283,0,541.405l0.068-326.209c0-18.448,14.955-33.417,33.405-33.435 l30.715-0.029v28.496H43.639c-4.022,0-7.885,1.596-10.731,4.442c-2.843,2.846-4.442,6.706-4.442,10.731l0.03,305.796 c0,8.388,6.797,15.173,15.176,15.173h21.045l99.28-200.836c5.609-11.219,16.208-20.286,27.411-20.286h243.14l0.083-80.823 c15.876,1.472,28.406,14.641,28.406,30.893v49.931H574.55C587.719,325.384,598.808,338.406,589.173,356.232z M83.558,445.272 c-0.907-99.969,0-399.884,0-399.884c0-15.132,12.306-27.429,27.423-27.429h219.614c3.518,0,6.874,1.472,9.251,4.061l71,77.141 c2.128,2.323,3.321,5.364,3.321,8.515v199.839h-23.034V124.932c0-3.159-2.565-5.725-5.728-5.725h-54.343 c-6.36,0-11.532-5.163-11.532-11.511V46.721c0-3.16-2.565-5.725-5.728-5.725H110.995c-2.423,0-4.395,1.971-4.395,4.392v374.739 l-17.626,35.66C88.975,455.781,83.649,455.391,83.558,445.272z M342.588,96.182H376.8l-34.212-37.188V96.182z M355.065,142.667 H142.813c-7.82,0-14.168,6.354-14.168,14.174c0,7.814,6.354,14.171,14.168,14.171h212.258c7.82,0,14.187-6.362,14.187-14.171 C369.245,149.027,362.88,142.667,355.065,142.667z M369.245,239.376c0-7.814-6.359-14.162-14.18-14.162H142.813 c-7.82,0-14.168,6.36-14.168,14.162c0,7.814,6.354,14.162,14.168,14.162h212.258C362.88,253.539,369.245,247.19,369.245,239.376z M128.636,322.47c0,7.813,6.357,14.162,14.171,14.162h5.089c8.958-24.967,31.164-28.324,31.164-28.324h-36.253 C135.005,308.308,128.636,314.656,128.636,322.47z"/> </g> </g>
                                            <g id="SVGRepo_iconCarrier"> <g> <path d="M589.173,356.232l-104.756,198.26c-5.125,9.858-19.653,20.285-30.872,20.285l-420.096,0.077 c-8.875,0-17.384-3.518-23.655-9.794C3.523,558.783,0,550.283,0,541.405l0.068-326.209c0-18.448,14.955-33.417,33.405-33.435 l30.715-0.029v28.496H43.639c-4.022,0-7.885,1.596-10.731,4.442c-2.843,2.846-4.442,6.706-4.442,10.731l0.03,305.796 c0,8.388,6.797,15.173,15.176,15.173h21.045l99.28-200.836c5.609-11.219,16.208-20.286,27.411-20.286h243.14l0.083-80.823 c15.876,1.472,28.406,14.641,28.406,30.893v49.931H574.55C587.719,325.384,598.808,338.406,589.173,356.232z M83.558,445.272 c-0.907-99.969,0-399.884,0-399.884c0-15.132,12.306-27.429,27.423-27.429h219.614c3.518,0,6.874,1.472,9.251,4.061l71,77.141 c2.128,2.323,3.321,5.364,3.321,8.515v199.839h-23.034V124.932c0-3.159-2.565-5.725-5.728-5.725h-54.343 c-6.36,0-11.532-5.163-11.532-11.511V46.721c0-3.16-2.565-5.725-5.728-5.725H110.995c-2.423,0-4.395,1.971-4.395,4.392v374.739 l-17.626,35.66C88.975,455.781,83.649,455.391,83.558,445.272z M342.588,96.182H376.8l-34.212-37.188V96.182z M355.065,142.667 H142.813c-7.82,0-14.168,6.354-14.168,14.174c0,7.814,6.354,14.171,14.168,14.171h212.258c7.82,0,14.187-6.362,14.187-14.171 C369.245,149.027,362.88,142.667,355.065,142.667z M369.245,239.376c0-7.814-6.359-14.162-14.18-14.162H142.813 c-7.82,0-14.168,6.36-14.168,14.162c0,7.814,6.354,14.162,14.168,14.162h212.258C362.88,253.539,369.245,247.19,369.245,239.376z M128.636,322.47c0,7.813,6.357,14.162,14.171,14.162h5.089c8.958-24.967,31.164-28.324,31.164-28.324h-36.253 C135.005,308.308,128.636,314.656,128.636,322.47z"/> </g> </g>
                                        </svg>
                                        Section {{$val->libele}}
                                    </span>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        
            
                <div id="styled-profile" role="tabpanel" aria-labelledby="profile-tab" class="grid grid-cols-1 gap-4 mb-4 sm:grid-cols-3 lg:grid-cols-6 md:grid-cols-4">
                    
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