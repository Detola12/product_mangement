<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
</head>
<body class="bg-[#f9fbfd] flex flex-row justify-between h-screen">

<section id="sidebar" class="w-2/12 bg-white ">
    <div class="fixed top-0 left-0 z-30 h-screen ">
        <div class=" w-full container mx-auto px-3 pt-8 ">
            <h2 class="translate-x-20 text-3xl font-bold">Logo</h2>
            <div class="container px-3 mt-8">
                <ul class="font-normal text-[#95aac9]">
                    <li class="py-2"> <i class="fa fa-home pr-3"></i> Home</li>
                    <li class="py-2"> <i class="fa fa-file pl-1 pr-3"></i> Home</li>
                    <li class="py-2">Home</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="right-0 grow  px-10">

    <section class="container mx-auto pt-5">
        <div class="flex flex-row justify-between">
            <div class="">
                <p class="text-xs tracking-wide text-[#95aac9] pb-2">Overview</p>
                <h2 class="text-2xl font-medium">Contacts</h2>
            </div>
            <div class="self-center">
                <button class="bg-blue-600 py-2 rounded-md text-slate-100 px-4 text-[14px]">Add Content</button>
            </div>

        </div>
    </section>

    <section class="container mx-auto mt-5 border-b pb-5">
        <div class="flex flex-row gap-7">
            <a href="" class="text-sm text-[#95aac9] active">All contacts <span class="rounded-full text-xs bg-gray-300 p-1">329</span></a>
            <a href="" class="text-sm text-[#95aac9]">Your contacts <span class="rounded-full text-xs bg-gray-300 p-1">221</span></a>
            <a href="" class="text-sm text-[#95aac9]">Deleted contacts <span class="rounded-full text-xs bg-gray-300 p-1">80</span></a>
        </div>
    </section>

    <section class="container bg-white mx-auto mt-9 rounded-t-lg ring-1 ring-gray-100">
        <div class="border-b border-slate-100 h-auto">
            <div class="py-3 px-6 flex flex-row items-center">
                <i class=" fas fa-search text-slate-300 font-light"></i>
                <input type="text" placeholder="Search" class="w-10/12 placeholder:text-slate-300 text-sm text-slate-500 ms-3 border-transparent outline-0 outline">
                <div class="ms-auto flex cursor-pointer select-none" id="menu-button" aria-expanded="true" aria-haspopup="true">
                    <p class="text-xs pt-1">10 per page</p>
                    <svg class="pt-1 -mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                    <div id="dropdown_list" class="absolute -translate-x-4 hidden translate-y-4 z-10 mt-2   rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                            <a href="#" class="text-gray-700 block px-3 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">5 per page</a>
                            <a href="#" class="text-gray-700 block px-3 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">10 per page</a>
                            <a href="#" class="text-gray-700 block px-3 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">All</a>
                        </div>
                    </div>
                </div>
                <button class="ms-3 border px-2 rounded-md pb-1">
                    <i class="fas fa-wrench text-xs text-slate-500"></i>
                    <span class="text-xs text-slate-700 font-light">Filter</span>
                </button>
            </div>
        </div>

        <table class="w-full">
            <thead class="bg-[#f9fbfd] ">
            <tr class="grid grid-cols-9 py-3 font-semibold">
                <th class="justify-self-center">
                    <input type="checkbox" name="" id="">
                </th>
                <th class="text-xs font-light text-[#95aac9] col-span-2">
                    Name
                </th>
                <th class="text-xs font-light text-[#95aac9]">
                    Job Title
                </th>
                <th class="text-xs font-light text-[#95aac9] col-span-2">
                    Email
                </th>
                <th class="text-xs font-light text-[#95aac9]">
                    Phone
                </th>
                <th class="text-xs font-light text-[#95aac9]">
                    Lead Score
                </th>
                <th class="text-xs font-light text-[#95aac9]">
                    Company
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="grid grid-cols-9 py-4 place-items-center">
                <td class="text-sm ">
                    <input type="checkbox" name="" id="">
                </td>
                <td class="text-sm col-span-2">Diana Smiley</td>
                <td class="text-sm ">Designer</td>
                <td class="text-sm col-span-2">diana.smiley@company.com</td>
                <td class="text-sm ">(988) 568 -876</td>
                <td class="text-xs rounded-lg text-red-500 bg-red-100 px-2 ">1/10</td>
                <td class="text-sm ">Twitter <i id="contact_drop" class="fa fa-ellipsis-v text-[#95aac9] translate-x-8 cursor-pointer"></i> </td>
                <div id="dropdown_contact" class="absolute right-0 hidden -translate-x-12 w-32  translate-y-20 z-10 mt-2   rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="contact_drop" tabindex="-1">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        <a href="#" class="text-gray-700 block px-3 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Edit Contact</a>
                        <a href="#" class="text-gray-700 block px-3 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Delete Contact</a>
                    </div>
                </div>

            </tr>
            <tr class="grid grid-cols-9 py-4 place-items-center">
                <td class="text-sm ">
                    <input type="checkbox" name="" id="">
                </td>
                <td class="text-sm col-span-2">Diana Smiley</td>
                <td class="text-sm ">Designer</td>
                <td class="text-sm col-span-2">diana.smiley@company.com</td>
                <td class="text-sm ">(988) 568 -876</td>
                <td class="text-xs rounded-lg text-red-500 bg-red-100 px-2 ">1/10</td>
                <td class="text-sm ">Twitter <i id="more_drop" data-dropdown-toogle="dropdown_contact" class="fa fa-ellipsis-v text-[#95aac9] translate-x-8 cursor-pointer"></i> </td>
                <div id="dropdown_contact" class="absolute right-0 hidden -translate-x-12 w-32  translate-y-20 z-10 mt-2   rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu"
                     aria-orientation="vertical" aria-labelledby="more_drop" tabindex="-1">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        <a href="#" class="text-gray-700 block px-3 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Edit Contact</a>
                        <a href="#" class="text-gray-700 block px-3 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Delete Contact</a>
                    </div>
                </div>

            </tr>
            <tr class="grid grid-cols-9 py-4 place-items-center">
                <td class="text-sm ">
                    <input type="checkbox" name="" id="">
                </td>
                <td class="text-sm col-span-2">Diana Smiley</td>
                <td class="text-sm ">Designer</td>
                <td class="text-sm col-span-2">diana.smiley@company.com</td>
                <td class="text-sm ">(988) 568 -876</td>
                <td class="text-xs rounded-lg text-red-500 bg-red-100 px-2 ">1/10</td>
                <td class="text-sm ">Twitter <i id="more_drop" data-dropdown-toogle="dropdown_contact" class="fa fa-ellipsis-v text-[#95aac9] translate-x-8 cursor-pointer"></i> </td>
                <div id="dropdown_contact" class="absolute right-0 hidden -translate-x-12 w-32  translate-y-20 z-10 mt-2   rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu"
                     aria-orientation="vertical" aria-labelledby="more_drop" tabindex="-1">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        <a href="#" class="text-gray-700 block px-3 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Edit Contact</a>
                        <a href="#" class="text-gray-700 block px-3 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Delete Contact</a>
                    </div>
                </div>

            </tr>
            <tr class="grid grid-cols-9 py-4 place-items-center">
                <td class="text-sm ">
                    <input type="checkbox" name="" id="">
                </td>
                <td class="text-sm col-span-2">Diana Smiley</td>
                <td class="text-sm ">Designer</td>
                <td class="text-sm col-span-2">diana.smiley@company.com</td>
                <td class="text-sm ">(988) 568 -876</td>
                <td class="text-xs rounded-lg text-red-500 bg-red-100 px-2 ">1/10</td>
                <td class="text-sm ">Twitter <i id="more_drop" data-dropdown-toogle="dropdown_contact" class="fa fa-ellipsis-v text-[#95aac9] translate-x-8 cursor-pointer"></i> </td>
                <div id="dropdown_contact" class="absolute right-0 hidden -translate-x-12 w-32  translate-y-20 z-10 mt-2   rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu"
                     aria-orientation="vertical" aria-labelledby="more_drop" tabindex="-1">
                    <div class="py-1" role="none">
                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                        <a href="#" class="text-gray-700 block px-3 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Edit Contact</a>
                        <a href="#" class="text-gray-700 block px-3 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Delete Contact</a>
                    </div>
                </div>

            </tr>
            </tbody>

        </table>
    </section>


</div>

<script src="{{ asset('assets/js/script.js') }}">
</script>
</body>
</html>
