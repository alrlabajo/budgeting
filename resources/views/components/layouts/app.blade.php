<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.bunny.net" rel="preconnect" >
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link href="C:\xampp\htdocs\budgeting\public\css\styles\styles.css" rel="stylesheet">
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
        @vite(['resources/css/app.css','resources/js/app.js'])
        
        @livewireStyles

        <title>{{ $title ?? 'Page Title' }}</title>
        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.x.x/dist/alpine.min.js" defer></script>

    </head>
    <body>
        <!--Top Navigation-->
        <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <div class="px-3 py-3 lg:px-5 lg:pl-3">
                <div class="flex items-center justify-between w-16 h-18">
                    <!-- Logo -->
                    <div class="flex items-center justify-start rtl:justify-end">
                        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 sm:hidden">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                            </svg>
                        </button>
                        <a href="/chart" class="flex ms-2 md:me-24">
                            <img src="{{ asset('css/images/image 5.png') }}" class="w-20 h-20" alt="PLM Logo" />
                            <span class="flex items-center w-80 text-indigo-800 text-2xl font-extrabold font-['Inter'] ml-3 leading-10">PLM Budget System</span>
                        </a>
                    </div>
                    
                    <!--Search Bar--> <!-- NEED FUNCTIONALITY -->
                    <div class="hidden sm:flex items-left ml-[-20px]">
                        <div class="relative">
                            <svg class="absolute left-5 top-1/2 transform -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28" fill="none" aria-hidden="true">
                                <path d="M20.3778 22.6405L14.6174 16.8801M16.5376 12.0798C16.5376 12.9624 16.3637 13.8362 16.026 14.6516C15.6883 15.467 15.1932 16.2078 14.5692 16.8319C13.9451 17.4559 13.2043 17.951 12.3889 18.2887C11.5736 18.6264 10.6997 18.8002 9.81712 18.8002C8.93458 18.8002 8.06068 18.6264 7.24532 18.2887C6.42996 17.951 5.6891 17.4559 5.06505 16.8319C4.441 16.2078 3.94598 15.467 3.60824 14.6516C3.27051 13.8362 3.09668 12.9624 3.09668 12.0798C3.09668 10.2974 3.80472 8.58807 5.06505 7.32774C6.32538 6.06742 8.03475 5.35938 9.81712 5.35938C11.5995 5.35937 13.3089 6.06742 14.5692 7.32774C15.8295 8.58807 16.5376 10.2974 16.5376 12.0798Z" stroke="#434343" stroke-width="1.92012" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <input type="search" id="search-bar" class="w-[950px] h-12 pl-10 py-1 bg-zinc-100 rounded-lg flex items-center grow shrink basis-0 text-neutral-700 text-base font-normal font-nunito leading-normal ml-2 border-transparent" placeholder="Search here"/>
                        </div>
                    </div>


                    <!-- User Info -->
                    <div x-data="{ open: false }" class="sm:relative sm:ml-[70px] sm:items-center justify-end sm:focus:ring-4 sm:focus:outline-none sm:focus:ring-gray-500">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" viewBox="0 0 30 30" fill="none">
                                <path d="M19.8797 9.04991C19.8797 11.7082 17.7247 13.8632 15.0664 13.8632C12.4081 13.8632 10.2531 11.7082 10.2531 9.04991C10.2531 6.39157 12.4081 4.23657 15.0664 4.23657C17.7247 4.23657 19.8797 6.39157 19.8797 9.04991Z" stroke="#434343" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.0664 17.4732C10.4143 17.4732 6.64307 21.2445 6.64307 25.8966H23.4897C23.4897 21.2445 19.7185 17.4732 15.0664 17.4732Z" stroke="#434343" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="mx-1 rounded-lg justify-end items-center gap-1 flex">
                                <button x-on:click="open = !open" class="text-slate-600 text-base font-normal font-['Inter'] leading-9">User</button>
                                <div class="w-3 h-2 relative mx-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="8" viewBox="0 0 13 8" fill="none">
                                        <g clip-path="url(#clip0_4528_3236)">
                                            <path d="M10.5055 0.742463C10.9754 0.272532 11.7373 0.272532 12.2073 0.742463C12.6772 1.21239 12.6772 1.9743 12.2073 2.44423L7.39392 7.25757C6.92399 7.7275 6.16208 7.7275 5.69215 7.25757L0.878815 2.44423C0.408885 1.9743 0.408885 1.21239 0.878815 0.742463C1.34875 0.272532 2.11065 0.272532 2.58059 0.742463L6.54303 4.70491L10.5055 0.742463Z" fill="#64748B"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4528_3236">
                                                <rect width="12.0333" height="7.22" fill="white" transform="translate(0.526367 0.390015)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- Dropdown content -->
                        <div x-show="open" class="sm:absolute sm:right-0 sm:mt-1 sm:w-44 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700"
                        x-transition:enter="duration-300 ease-out"
                        x-transition:enter-start="opacity-0 -translate-y-5 scale-90"
                        x-transition:enter-end="opacity-100 translate-y-0 scale-100">
                            <ul>
                                <li><a href="/settings" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-base font-normal font-['Inter'] leading-9">Settings</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-base font-normal font-['Inter'] leading-9">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </nav>

        <!-- Side Navigation-->
        <aside id="logo-sidebar" class="fixed top-6 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full border-r sm: dark:bg-indigo-800 dark:border-indigo-700" aria-label="Sidebar">
            <div class="h-full px-4 pb-4 overflow-y-auto bg-indigo-800 dark:bg-indigo-800 ">
                <!-- Label -->
                <div class="text-white text-2xl font-extrabold font-['Inter'] leading-10 my-10">Budgeting</div>

                <!-- Selections -->
                <ul class="space-y-1 font-medium w-78 h-10 flex-col top-5 justify-start items-start gap-1 inline-flex">
                    <!-- Home -->
                    <li>
                        <a href="/chart" class="w-56 px-4 py-2 flex items-center rounded-md hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="28" viewBox="0 0 27 28" fill="none">
                                    <path d="M3.52881 13.896L5.72683 11.698M5.72683 11.698L13.4199 4.00488L21.113 11.698M5.72683 11.698V22.6881C5.72683 23.295 6.21887 23.7871 6.82584 23.7871H10.1229M21.113 11.698L23.311 13.896M21.113 11.698V22.6881C21.113 23.295 20.6209 23.7871 20.014 23.7871H16.7169M10.1229 23.7871C10.7298 23.7871 11.2219 23.295 11.2219 22.6881V18.292C11.2219 17.6851 11.7139 17.193 12.3209 17.193H14.5189C15.1259 17.193 15.6179 17.6851 15.6179 18.292V22.6881C15.6179 23.295 16.11 23.7871 16.7169 23.7871M10.1229 23.7871H16.7169" stroke="white" stroke-width="2.19802" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap text-white text-normal font-normal font-['Nunito Sans'] leading-7">Home</span>
                        </a>
                    </li>
                    <!-- Budget Call -->
                    <li>
                        <div class="self-stretch flex-col justify-start items-start flex">
                            <button type="button" class="w-56 px-4 py-2 flex items-center rounded-md hover:bg-[#2C56A6] active:bg-[#4F74BB]" aria-controls="budget-call-dropdown" data-collapse-toggle="budget-call-dropdown">
                                <div class="grow shrink basis-0 h-7 justify-start items-center gap-2.5 flex">
                                    <div class="w-7 h-7 relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                                <path d="M4.87988 7.82561C4.87988 7.18732 5.13344 6.57518 5.58478 6.12384C6.03612 5.6725 6.64826 5.41895 7.28655 5.41895H9.69322C10.3315 5.41895 10.9436 5.6725 11.395 6.12384C11.8463 6.57518 12.0999 7.18732 12.0999 7.82561V10.2323C12.0999 10.8706 11.8463 11.4827 11.395 11.934C10.9436 12.3854 10.3315 12.6389 9.69322 12.6389H7.28655C6.64826 12.6389 6.03612 12.3854 5.58478 11.934C5.13344 11.4827 4.87988 10.8706 4.87988 10.2323V7.82561ZM16.9132 7.82561C16.9132 7.18732 17.1668 6.57518 17.6181 6.12384C18.0695 5.6725 18.6816 5.41895 19.3199 5.41895H21.7266C22.3648 5.41895 22.977 5.6725 23.4283 6.12384C23.8797 6.57518 24.1332 7.18732 24.1332 7.82561V10.2323C24.1332 10.8706 23.8797 11.4827 23.4283 11.934C22.977 12.3854 22.3648 12.6389 21.7266 12.6389H19.3199C18.6816 12.6389 18.0695 12.3854 17.6181 11.934C17.1668 11.4827 16.9132 10.8706 16.9132 10.2323V7.82561ZM4.87988 19.8589C4.87988 19.2207 5.13344 18.6085 5.58478 18.1572C6.03612 17.7058 6.64826 17.4523 7.28655 17.4523H9.69322C10.3315 17.4523 10.9436 17.7058 11.395 18.1572C11.8463 18.6085 12.0999 19.2207 12.0999 19.8589V22.2656C12.0999 22.9039 11.8463 23.516 11.395 23.9674C10.9436 24.4187 10.3315 24.6723 9.69322 24.6723H7.28655C6.64826 24.6723 6.03612 24.4187 5.58478 23.9674C5.13344 23.516 4.87988 22.9039 4.87988 22.2656V19.8589ZM16.9132 19.8589C16.9132 19.2207 17.1668 18.6085 17.6181 18.1572C18.0695 17.7058 18.6816 17.4523 19.3199 17.4523H21.7266C22.3648 17.4523 22.977 17.7058 23.4283 18.1572C23.8797 18.6085 24.1332 19.2207 24.1332 19.8589V22.2656C24.1332 22.9039 23.8797 23.516 23.4283 23.9674C22.977 24.4187 22.3648 24.6723 21.7266 24.6723H19.3199C18.6816 24.6723 18.0695 24.4187 17.6181 23.9674C17.1668 23.516 16.9132 22.9039 16.9132 22.2656V19.8589Z" fill="white" stroke="white" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                <span class="text-white text-base font-normal font-['Nunito Sans'] leading-normal">Budget Call</span>
                                </div>
                                <div class="w-3 h-2 relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="8" viewBox="0 0 13 8" fill="none">
                                        <g clip-path="url(#clip0_4316_6370)">
                                            <path d="M10.879 0.787995C11.3489 0.318064 12.1109 0.318064 12.5808 0.787995C13.0507 1.25793 13.0507 2.01983 12.5808 2.48977L7.76745 7.3031C7.29752 7.77303 6.53562 7.77303 6.06568 7.3031L1.25235 2.48977C0.78242 2.01983 0.78242 1.25793 1.25235 0.787995C1.72228 0.318064 2.48419 0.318064 2.95412 0.787995L6.91657 4.75044L10.879 0.787995Z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4316_6370">
                                                <rect width="12.0333" height="7.22" fill="white" transform="translate(0.899902 0.435547)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </button>
                            <!-- Budget Call Dropdown -->
                            <ul id="budget-call-dropdown" class="hidden ml-4 py-2 space-y-1">
                                <li>
                                    <a href="/activity-justification" class="flex items-center p-2 text-white text-[13px] font-normal font-['Nunito Sans'] leading-relaxed transition duration-75 rounded-lg hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                                        <span class="px-7 w-full">Activity Justification</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/personal-services" class="flex items-center p-2 text-white text-[13px] font-normal font-['Nunito Sans'] leading-relaxed transition duration-75 rounded-lg hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                                        <span class="px-7 w-full">Personal Services</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/personnel-schedule" class="flex items-center p-2 text-white text-[13px] font-normal font-['Nunito Sans'] leading-relaxed transition duration-75 rounded-lg hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                                        <span class="px-7 w-full">Personnel Schedule</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/MOOE" class="flex items-center p-2 text-white text-[13px] font-normal font-['Nunito Sans'] leading-relaxed transition duration-75 rounded-lg hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                                        <span class="px-7 w-full">MOOE</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/capital-outlay" class="flex items-center p-2 text-white text-[13px] font-normal font-['Nunito Sans'] leading-relaxed transition duration-75 rounded-lg hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                                        <span class="px-7 w-full">Capital Outlay</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/PPMP" class="flex items-center p-2 text-white text-[13px] font-normal font-['Nunito Sans'] leading-relaxed transition duration-75 rounded-lg hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                                        <span class="px-7 w-full">PPMP</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Payment Request -->
                    <li>
                        <div class="self-stretch flex-col justify-start items-start flex">
                            <button type="button" id="payment-request-button" class="w-56 px-4 py-2 flex items-center rounded-md hover:bg-[#2C56A6] active:bg-[#4F74BB]" aria-controls="payment-request-dropdown" data-collapse-toggle="payment-request-dropdown">
                                <div class="grow shrink basis-0 h-7 justify-start items-center gap-2.5 flex">
                                    <div class="w-7 h-7 relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                            <path d="M4.87988 7.82561C4.87988 7.18732 5.13344 6.57518 5.58478 6.12384C6.03612 5.6725 6.64826 5.41895 7.28655 5.41895H9.69322C10.3315 5.41895 10.9436 5.6725 11.395 6.12384C11.8463 6.57518 12.0999 7.18732 12.0999 7.82561V10.2323C12.0999 10.8706 11.8463 11.4827 11.395 11.934C10.9436 12.3854 10.3315 12.6389 9.69322 12.6389H7.28655C6.64826 12.6389 6.03612 12.3854 5.58478 11.934C5.13344 11.4827 4.87988 10.8706 4.87988 10.2323V7.82561ZM16.9132 7.82561C16.9132 7.18732 17.1668 6.57518 17.6181 6.12384C18.0695 5.6725 18.6816 5.41895 19.3199 5.41895H21.7266C22.3648 5.41895 22.977 5.6725 23.4283 6.12384C23.8797 6.57518 24.1332 7.18732 24.1332 7.82561V10.2323C24.1332 10.8706 23.8797 11.4827 23.4283 11.934C22.977 12.3854 22.3648 12.6389 21.7266 12.6389H19.3199C18.6816 12.6389 18.0695 12.3854 17.6181 11.934C17.1668 11.4827 16.9132 10.8706 16.9132 10.2323V7.82561ZM4.87988 19.8589C4.87988 19.2207 5.13344 18.6085 5.58478 18.1572C6.03612 17.7058 6.64826 17.4523 7.28655 17.4523H9.69322C10.3315 17.4523 10.9436 17.7058 11.395 18.1572C11.8463 18.6085 12.0999 19.2207 12.0999 19.8589V22.2656C12.0999 22.9039 11.8463 23.516 11.395 23.9674C10.9436 24.4187 10.3315 24.6723 9.69322 24.6723H7.28655C6.64826 24.6723 6.03612 24.4187 5.58478 23.9674C5.13344 23.516 4.87988 22.9039 4.87988 22.2656V19.8589ZM16.9132 19.8589C16.9132 19.2207 17.1668 18.6085 17.6181 18.1572C18.0695 17.7058 18.6816 17.4523 19.3199 17.4523H21.7266C22.3648 17.4523 22.977 17.7058 23.4283 18.1572C23.8797 18.6085 24.1332 19.2207 24.1332 19.8589V22.2656C24.1332 22.9039 23.8797 23.516 23.4283 23.9674C22.977 24.4187 22.3648 24.6723 21.7266 24.6723H19.3199C18.6816 24.6723 18.0695 24.4187 17.6181 23.9674C17.1668 23.516 16.9132 22.9039 16.9132 22.2656V19.8589Z" fill="white" stroke="white" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <span class="text-white text-base font-normal font-['Nunito Sans'] leading-normal">Payment Request</span>
                                </div>
                                <div class="w-3 h-2 relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="8" viewBox="0 0 13 8" fill="none">
                                        <g clip-path="url(#clip0_4316_6370)">
                                            <path d="M10.879 0.787995C11.3489 0.318064 12.1109 0.318064 12.5808 0.787995C13.0507 1.25793 13.0507 2.01983 12.5808 2.48977L7.76745 7.3031C7.29752 7.77303 6.53562 7.77303 6.06568 7.3031L1.25235 2.48977C0.78242 2.01983 0.78242 1.25793 1.25235 0.787995C1.72228 0.318064 2.48419 0.318064 2.95412 0.787995L6.91657 4.75044L10.879 0.787995Z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4316_6370">
                                                <rect width="12.0333" height="7.22" fill="white" transform="translate(0.899902 0.435547)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </button>
                            <!-- Payment Request Dropdown -->
                            <ul id="payment-request-dropdown" class="hidden py-2 space-y-1">
                                <li>
                                    <a href="/BUR" class="flex items-center p-2 text-white text-[13px] font-normal font-['Nunito Sans'] leading-relaxed transition duration-75 rounded-lg hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                                        <span class="px-11 w-full">BUR</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/amendment" class="flex items-center p-2 text-white text-[13px] font-normal font-['Nunito Sans'] leading-relaxed transition duration-75 rounded-lg hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                                        <span class="px-11 w-full">Amendment</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Appropriations -->
                    <li>
                        <a href="/appropriations" class="w-56 px-4 py-2 flex items-center rounded-md hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                <path d="M4.87988 7.81878C4.87988 7.18049 5.13344 6.56834 5.58478 6.11701C6.03612 5.66567 6.64826 5.41211 7.28655 5.41211H9.69322C10.3315 5.41211 10.9436 5.66567 11.395 6.11701C11.8463 6.56834 12.0999 7.18049 12.0999 7.81878V10.2254C12.0999 10.8637 11.8463 11.4759 11.395 11.9272C10.9436 12.3786 10.3315 12.6321 9.69322 12.6321H7.28655C6.64826 12.6321 6.03612 12.3786 5.58478 11.9272C5.13344 11.4759 4.87988 10.8637 4.87988 10.2254V7.81878ZM16.9132 7.81878C16.9132 7.18049 17.1668 6.56834 17.6181 6.11701C18.0695 5.66567 18.6816 5.41211 19.3199 5.41211H21.7266C22.3648 5.41211 22.977 5.66567 23.4283 6.11701C23.8797 6.56834 24.1332 7.18049 24.1332 7.81878V10.2254C24.1332 10.8637 23.8797 11.4759 23.4283 11.9272C22.977 12.3786 22.3648 12.6321 21.7266 12.6321H19.3199C18.6816 12.6321 18.0695 12.3786 17.6181 11.9272C17.1668 11.4759 16.9132 10.8637 16.9132 10.2254V7.81878ZM4.87988 19.8521C4.87988 19.2138 5.13344 18.6017 5.58478 18.1503C6.03612 17.699 6.64826 17.4454 7.28655 17.4454H9.69322C10.3315 17.4454 10.9436 17.699 11.395 18.1503C11.8463 18.6017 12.0999 19.2138 12.0999 19.8521V22.2588C12.0999 22.8971 11.8463 23.5092 11.395 23.9605C10.9436 24.4119 10.3315 24.6654 9.69322 24.6654H7.28655C6.64826 24.6654 6.03612 24.4119 5.58478 23.9605C5.13344 23.5092 4.87988 22.8971 4.87988 22.2588V19.8521ZM16.9132 19.8521C16.9132 19.2138 17.1668 18.6017 17.6181 18.1503C18.0695 17.699 18.6816 17.4454 19.3199 17.4454H21.7266C22.3648 17.4454 22.977 17.699 23.4283 18.1503C23.8797 18.6017 24.1332 19.2138 24.1332 19.8521V22.2588C24.1332 22.8971 23.8797 23.5092 23.4283 23.9605C22.977 24.4119 22.3648 24.6654 21.7266 24.6654H19.3199C18.6816 24.6654 18.0695 24.4119 17.6181 23.9605C17.1668 23.5092 16.9132 22.8971 16.9132 22.2588V19.8521Z" fill="white" stroke="white" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap text-white text-normal font-normal font-['Nunito Sans'] leading-7">Appropriations</span>
                        </a>
                    </li>
                    <!-- Settings -->
                    <li>
                        <a href="/settings" class="flex-w-50 px-4 py-2 mt-[310px] flex items-center rounded-md hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                <path d="M13.0503 6.06856C13.5634 3.95501 16.5693 3.95501 17.0824 6.06856C17.4138 7.43389 18.9781 8.08182 20.1779 7.35076C22.0352 6.21907 24.1607 8.34454 23.029 10.2019C22.2979 11.4017 22.9458 12.9659 24.3112 13.2974C26.4247 13.8105 26.4247 16.8163 24.3112 17.3294C22.9458 17.6609 22.2979 19.2251 23.029 20.4249C24.1607 22.2823 22.0352 24.4077 20.1779 23.276C18.9781 22.545 17.4138 23.1929 17.0824 24.5582C16.5693 26.6718 13.5634 26.6718 13.0503 24.5582C12.7188 23.1929 11.1546 22.545 9.95479 23.276C8.09747 24.4077 5.972 22.2823 7.10369 20.4249C7.83475 19.2251 7.18682 17.6609 5.82149 17.3294C3.70794 16.8163 3.70794 13.8105 5.82149 13.2974C7.18682 12.9659 7.83475 11.4017 7.10369 10.2019C5.972 8.34454 8.09747 6.21907 9.95479 7.35076C11.1546 8.08182 12.7188 7.43389 13.0503 6.06856Z" stroke="white" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M18.6763 15.3134C18.6763 17.3071 17.0601 18.9234 15.0663 18.9234C13.0726 18.9234 11.4563 17.3071 11.4563 15.3134C11.4563 13.3197 13.0726 11.7034 15.0663 11.7034C17.0601 11.7034 18.6763 13.3197 18.6763 15.3134Z" stroke="white" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="flex items-bot ms-3 whitespace-nowrap text-white text-normal font-normal font-['Nunito Sans'] leading-7">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="sm:ml-64">
            <div class="rounded-lg dark:border-gray-700">
                {{ $slot }}
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.x.x/dist/alpine.min.js" defer></script>
    </body>
</html>
