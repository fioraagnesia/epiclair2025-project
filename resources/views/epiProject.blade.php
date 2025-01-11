<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Epiclair 2025 Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <style>
        #menu-list.open {
            top: 100%;
            opacity: 1;
            transition: all 0.3s;
        }

        .grid {
            margin: 15px;
        }

        .custom-image {
            height: auto;
            max-width: 100%;
            max-height: 225px;
            margin: 10px;
        }
    </style>
</head>

<body class="bg-gradient-to-b from-blue-900 via-cyan-700 to-sky-600">
    <nav class="fixed top-0 left-0 w-full p-4 bg-blue-100 md:flex md:items-center md:justify-between shadow-lg z-10">
        <div class="flex justify-between items-center">
            <span class="text-3xl text-sky-900">𝕰𝖕𝖎𝖈𝖑𝖆𝖎𝖗</span>
            <span class="text-xl cursor-pointer md:hidden block" onclick="Menu()">
                <i class="fa-solid fa-bars"></i>
            </span>
        </div>

        <ul id="menu-list" class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-blue-100 w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-0 md:opacity-100 opacity-0 top-0 transition-all ease-in space-y-0 m-0 p-0 leading-none box-border">
            <li class="mx-3">
                <a href="#" class="text-lg text-sky-900 hover:text-sky-500">About</a>
            </li>
            <li class="mx-3">
                <a href="#" class="text-lg text-sky-900 hover:text-sky-500">Guidebook</a>
            </li>
            <li class="mx-3">
                <a href="#" class="text-lg text-sky-900 hover:text-sky-500">Competitions</a>
            </li>
            <li class="mx-3">
                <a href="#" class="text-lg text-sky-900 hover:text-sky-500">Schedule</a>
            </li>
        </ul>
    </nav>

    <div class="mt-[72px] md:mt-[80px] lg:mt-[88px] content transition-all text-center">
        <h1 class="text-4xl lg:text-5xl xl:text-6xl text-white font-bold p-5 md:p-6 lg:p-7 mt-3">GRAND SHOWDOWN</h1>
        {{-- Round 1 --}}
        <div class="m-4 mt-0 mb-12">
            <h2 class="text-base sm:text-lg md:text-xl lg:text-2xl text-sky-100">──────────── Round 1 ────────────</h2>
            <div class="grid grid-cols-3">
                <div class="flex flex-col items-center justify-center">
                    <img src="storage/captain-america.png" alt="Captain America" class="custom-image">
                    <p class="w-full text-center text-blue-300 text-base md:text-md lg:text-lg">Captain America</p>
                </div>
                <div class="grid place-items-center">
                    <div class="flex flex-col items-center justify-center text-sky-800 font-bold text-2xl md:text-3xl lg:text-4xl
                                bg-sky-100 w-16 h-16 md:w-20 md:h-20 lg:w-24 lg:h-24 rounded-full">VS</div>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <img src="storage/iron-man.png" alt="Iron Man" class="custom-image">
                    <p class="w-full text-center text-red-400 text-base sm:text-smz md:text-md lg:text-lg">Iron Man</p>
                </div>
            </div>
        </div>

        {{-- Round 2 --}}
        <div class="m-4 mt-5 mb-14">
            <h2 class="text-base sm:text-xl md:text-2xl text-sky-100">──────────── Round 2 ────────────</h2>
            <div class="grid grid-cols-3">
                <div class="flex flex-col items-center justify-center">
                    <img src="storage/tom.png" alt="Tom" class="custom-image">
                    <p class="w-full text-center text-gray-300 text-base md:text-md lg:text-lg">Tom</p>
                </div>
                <div class="grid place-items-center">
                    <div class="flex flex-col items-center justify-center text-sky-800 font-bold text-2xl md:text-3xl lg:text-4xl
                                bg-sky-100 w-16 h-16 md:w-20 md:h-20 lg:w-24 lg:h-24 rounded-full">VS</div>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <img src="storage/jerry.png" alt="Jerry" class="custom-image">
                    <p class="w-full text-center text-yellow-500 text-base md:text-md lg:text-lg">Jerry</p>
                </div>
            </div>
        </div>

        {{-- Round 3 --}}
        <div class="m-4 mt-5 mb-14">
            <h2 class="text-base sm:text-xl md:text-2xl text-sky-100">──────────── Round 3 ────────────</h2>
            <div class="grid grid-cols-3">
                <div class="flex flex-col items-center justify-center">
                    <img src="storage/harry-potter.png" alt="Harry Potter" class="custom-image">
                    <p class="w-full text-center text-amber-300 text-base md:text-md lg:text-lg">Harry Potter</p>
                </div>
                <div class="grid place-items-center">
                    <div class="flex flex-col items-center justify-center text-sky-800 font-bold text-2xl md:text-3xl lg:text-4xl
                                bg-sky-100 w-16 h-16 md:w-20 md:h-20 lg:w-24 lg:h-24 rounded-full">VS</div>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <img src="storage/voldemort.png" alt="Voldemort" class="custom-image">
                    <p class="w-full text-center text-green-400 text-base md:text-md lg:text-lg">Voldemort</p>
                </div>
            </div>
        </div>

        {{-- Round 4 --}}
        <div class="m-4 mt-5 mb-14">
            <h2 class="text-base sm:text-xl md:text-2xl text-sky-100">──────────── Round 4 ────────────</h2>
            <div class="grid grid-cols-3">
                <div class="flex flex-col items-center justify-center">
                    <img src="storage/mike-wazowski.png" alt="Mike Wazowski" class="custom-image">
                    <p class="w-full text-center text-lime-400 text-base md:text-md lg:text-lg">Mike Wazowski</p>
                </div>
                <div class="grid place-items-center">
                    <div class="flex flex-col items-center justify-center text-sky-800 font-bold text-2xl md:text-3xl lg:text-4xl
                                bg-sky-100 w-16 h-16 md:w-20 md:h-20 lg:w-24 lg:h-24 rounded-full">VS</div>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <img src="storage/sulley.png" alt="Sulley" class="custom-image">
                    <p class="w-full text-center text-teal-300 text-base md:text-md lg:text-lg">Sulley</p>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function Menu() {
            let list = document.querySelector("#menu-list");

            // Menu open / close
            list.classList.toggle("open");
            // Untuk push content jika menu list (dropdown) terbuka
            let content = document.querySelector(".content");
            if (list.classList.contains("open")) {
                content.classList.add("mt-[13rem]"); 
            } else {
                content.classList.remove("mt-[13rem]"); 
            }
        }
    </script>
</body>
</html>