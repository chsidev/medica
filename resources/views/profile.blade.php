@extends('layouts.app')

@section('content')
    <div class="h-screen bg-white w-full max-w-[1024px] mx-auto">
        <header class="h-[8vh] min-h-[60px] flex flex-col z-10 px-4 bg-white text-gray-700">
            <div class="container mt-6 flex flex-row text-center min-w-screen overflow-x-auto px-2 py-1 mx-auto">
                <img
                        class="rounded-lg pr-2 m-1"
                        src="/images/logo_white.png"
                        alt=""
                        aria-hidden="true"
                />
                <h2 class="text-xl font-semibold text-left pt-1 pb-1" id="textTitle">
                    Profile
                </h2>
                <div class="block grow text-right pt-1">
                    <svg class="w-[18px] inline pb-[5px]"  xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512" fill="#4c4f52">
                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zM144 218c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm112 0c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm112 0c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32z"/>
                    </svg>
                </div>
            </div>
        </header>


        <main class="h-[84vh] overflow-y-auto">
            <div id="mdlLogout" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed bottom-0 right-0 left-0 z-50 w-full h-[27vh]">
                <div class="w-full max-w-md h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="bg-gray-50 rounded-t-3xl shadow">
                        <!-- Modal header -->
                        <h1 class="text-xl text-center text-gray-900 py-6 font-bold text-red-500">
                            Logout
                        </h1>
                        <!-- Modal body -->
                        <div class="px-3">
                            <div class="w-full bg-gray-100 border-b"></div>
                            <p class="text-gray-700 text-center text-sm font-semibold py-4">
                                Are you sure you want to log out?
                            </p>
                        </div>
                        <!-- Modal footer -->
                        <div class="items-center text-center p-4 space-x-2 rounded-b border-t border-gray-200">
                            <button class="px-8 py-2.5 text-sm font-bold text-blue-600 transition-colors duration-150 bg-blue-100 text-blue-600 rounded-full" data-modal-toggle="mdlLogout">Cancel</button>
                            <a class="px-8 py-2.5 text-sm font-bold text-white transition-colors duration-150 bg-blue-600 text-white rounded-full" href="{{route('login')}}">Yes, Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mx-auto pt-2">
                <div class="py-4 container flex flex-col items-center px-6 mx-auto">
                    <img
                            class="object-fill rounded-full w-[120px]"
                            src="./images/avatar1.jpg"
                            alt=""
                            aria-hidden="true"
                    />
                    <div class="absolute top-[180px] right-[35%] sm:right-[41%] md:right-[43%] lg:right-[45%] text-xl">
                        <i class="fas fa-square-pen text-blue-600"></i>
                    </div>


                    <h2 class="my-1 text-xl font-semibold text-gray-800 ">
                        Andrew Ainsley
                    </h2>
                    <p class="text-gray-700 text-center text-xs">
                        +1 111 467 378 399
                    </p>
                </div>
            </div>
            <div class="px-6"><div class="w-full bg-gray-100 border-b"></div></div>


            <div class="container mx-auto pb-4">
                <div class="px-6 py-4 text-gray-700">
                    <a href="{{route('profile.edit')}}">
                        <div class="container py-2 flex flex-row min-w-screen overflow-x-auto mx-auto">
                            <svg class="w-[18px] inline pb-[5px]" viewBox="64 64 896 896" focusable="false" xmlns="http://www.w3.org/2000/svg">
                                <path d="M858.5 763.6a374 374 0 00-80.6-119.5 375.63 375.63 0 00-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 00-80.6 119.5A371.7 371.7 0 00136 901.8a8 8 0 008 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 008-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z" />
                            </svg>
                            <P class="text-sm font-semibold text-left pl-5">
                                Edit Profile
                            </P>
                            <div class="block grow text-right">
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                    <a>
                        <div class="container py-2 flex flex-row min-w-screen overflow-x-auto mx-auto">
                            <svg class="w-[18px] inline pb-[5px]" viewBox="64 64 896 896" focusable="false" xmlns="http://www.w3.org/2000/svg">
                                <path d="M816 768h-24V428c0-141.1-104.3-257.7-240-277.1V112c0-22.1-17.9-40-40-40s-40 17.9-40 40v38.9c-135.7 19.4-240 136-240 277.1v340h-24c-17.7 0-32 14.3-32 32v32c0 4.4 3.6 8 8 8h216c0 61.8 50.2 112 112 112s112-50.2 112-112h216c4.4 0 8-3.6 8-8v-32c0-17.7-14.3-32-32-32zM512 888c-26.5 0-48-21.5-48-48h96c0 26.5-21.5 48-48 48zM304 768V428c0-55.6 21.6-107.8 60.9-147.1S456.4 220 512 220c55.6 0 107.8 21.6 147.1 60.9S720 372.4 720 428v340H304z" />
                            </svg>
                            <P class="text-sm font-semibold text-left pl-5">
                                Notification
                            </P>
                            <div class="block grow text-right">
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                    <a>
                        <div class="container py-2 flex flex-row min-w-screen overflow-x-auto mx-auto">
                            <svg class="w-[18px] inline pb-[5px]" viewBox="64 64 896 896" focusable="false" xmlns="http://www.w3.org/2000/svg">
                                <path d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zm-40 464H528V448h312v128zm0 264H184V184h656v200H496c-17.7 0-32 14.3-32 32v192c0 17.7 14.3 32 32 32h344v200zM580 512a40 40 0 1080 0 40 40 0 10-80 0z" />
                            </svg>
                            <P class="text-sm font-semibold text-left pl-5">
                                Payment
                            </P>
                            <div class="block grow text-right">
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                    <a>
                        <div class="container py-2 flex flex-row min-w-screen overflow-x-auto mx-auto">
                            <svg class="w-[18px] inline pb-[5px]" viewBox="0 0 1024 1024" focusable="false" xmlns="http://www.w3.org/2000/svg">
                                <path d="M512 64L128 192v384c0 212.1 171.9 384 384 384s384-171.9 384-384V192L512 64zm312 512c0 172.3-139.7 312-312 312S200 748.3 200 576V246l312-110 312 110v330z" /><path d="M378.4 475.1a35.91 35.91 0 00-50.9 0 35.91 35.91 0 000 50.9l129.4 129.4 2.1 2.1a33.98 33.98 0 0048.1 0L730.6 434a33.98 33.98 0 000-48.1l-2.8-2.8a33.98 33.98 0 00-48.1 0L483 579.7 378.4 475.1z" />
                            </svg>
                            <P class="text-sm font-semibold text-left pl-5">
                                Security
                            </P>
                            <div class="block grow text-right">
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('profile.language')}}">
                        <div class="container py-2 flex flex-row min-w-screen overflow-x-auto mx-auto">
                            <svg class="w-[18px] inline pb-[5px]" viewBox="64 64 896 896" focusable="false" xmlns="http://www.w3.org/2000/svg">
                                <defs><style /></defs><path d="M140 188h584v164h76V144c0-17.7-14.3-32-32-32H96c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h544v-76H140V188z" /><path d="M414.3 256h-60.6c-3.4 0-6.4 2.2-7.6 5.4L219 629.4c-.3.8-.4 1.7-.4 2.6 0 4.4 3.6 8 8 8h55.1c3.4 0 6.4-2.2 7.6-5.4L322 540h196.2L422 261.4a8.42 8.42 0 00-7.7-5.4zm12.4 228h-85.5L384 360.2 426.7 484zM936 528H800v-93c0-4.4-3.6-8-8-8h-56c-4.4 0-8 3.6-8 8v93H592c-13.3 0-24 10.7-24 24v176c0 13.3 10.7 24 24 24h136v152c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8V752h136c13.3 0 24-10.7 24-24V552c0-13.3-10.7-24-24-24zM728 680h-88v-80h88v80zm160 0h-88v-80h88v80z" />
                            </svg>
                            <P class="text-sm font-semibold text-left pl-5">
                                Language
                            </P>
                            <div class="text-sm font-semibold block grow text-right">
                                English (US)
                            </div>
                            <div class="block grow text-right">
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                    <a>
                        <div class="container py-2 flex flex-row min-w-screen overflow-x-auto mx-auto">
                            <svg class="w-[18px] inline pb-[5px]" viewBox="64 64 896 896" focusable="false" xmlns="http://www.w3.org/2000/svg">
                                <path d="M942.2 486.2C847.4 286.5 704.1 186 512 186c-192.2 0-335.4 100.5-430.2 300.3a60.3 60.3 0 000 51.5C176.6 737.5 319.9 838 512 838c192.2 0 335.4-100.5 430.2-300.3 7.7-16.2 7.7-35 0-51.5zM512 766c-161.3 0-279.4-81.8-362.7-254C232.6 339.8 350.7 258 512 258c161.3 0 279.4 81.8 362.7 254C791.5 684.2 673.4 766 512 766zm-4-430c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm0 288c-61.9 0-112-50.1-112-112s50.1-112 112-112 112 50.1 112 112-50.1 112-112 112z" />
                            </svg>
                            <P class="text-sm font-semibold text-left pl-5">
                                Dark Mode
                            </P>
                            <div class="block grow text-right">
                                <label for="default-toggle" class="inline-flex relative items-center cursor-pointer pr-1">
                                    <input type="checkbox" value="" id="default-toggle" class="sr-only peer">
                                    <div class="w-9 h-5 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                        </div>
                    </a>
                    <a>
                        <div class="container py-2 flex flex-row min-w-screen overflow-x-auto mx-auto">
                            <svg class="w-[18px] inline pb-[5px]" viewBox="64 64 896 896" focusable="false" xmlns="http://www.w3.org/2000/svg">
                                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z" /><path d="M623.6 316.7C593.6 290.4 554 276 512 276s-81.6 14.5-111.6 40.7C369.2 344 352 380.7 352 420v7.6c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8V420c0-44.1 43.1-80 96-80s96 35.9 96 80c0 31.1-22 59.6-56.1 72.7-21.2 8.1-39.2 22.3-52.1 40.9-13.1 19-19.9 41.8-19.9 64.9V620c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8v-22.7a48.3 48.3 0 0130.9-44.8c59-22.7 97.1-74.7 97.1-132.5.1-39.3-17.1-76-48.3-103.3zM472 732a40 40 0 1080 0 40 40 0 10-80 0z" />
                            </svg>
                            <P class="text-sm font-semibold text-left pl-5">
                                Help Center
                            </P>
                            <div class="block grow text-right">
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                    <a>
                        <div class="container py-2 flex flex-row min-w-screen overflow-x-auto mx-auto">
                            <svg class="w-[18px] inline pb-[5px]" viewBox="64 64 896 896" focusable="false" xmlns="http://www.w3.org/2000/svg">
                                <path d="M892 772h-80v-80c0-4.4-3.6-8-8-8h-48c-4.4 0-8 3.6-8 8v80h-80c-4.4 0-8 3.6-8 8v48c0 4.4 3.6 8 8 8h80v80c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8v-80h80c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8zM373.5 498.4c-.9-8.7-1.4-17.5-1.4-26.4 0-15.9 1.5-31.4 4.3-46.5.7-3.6-1.2-7.3-4.5-8.8-13.6-6.1-26.1-14.5-36.9-25.1a127.54 127.54 0 01-38.7-95.4c.9-32.1 13.8-62.6 36.3-85.6 24.7-25.3 57.9-39.1 93.2-38.7 31.9.3 62.7 12.6 86 34.4 7.9 7.4 14.7 15.6 20.4 24.4 2 3.1 5.9 4.4 9.3 3.2 17.6-6.1 36.2-10.4 55.3-12.4 5.6-.6 8.8-6.6 6.3-11.6-32.5-64.3-98.9-108.7-175.7-109.9-110.8-1.7-203.2 89.2-203.2 200 0 62.8 28.9 118.8 74.2 155.5-31.8 14.7-61.1 35-86.5 60.4-54.8 54.7-85.8 126.9-87.8 204a8 8 0 008 8.2h56.1c4.3 0 7.9-3.4 8-7.7 1.9-58 25.4-112.3 66.7-153.5 29.4-29.4 65.4-49.8 104.7-59.7 3.8-1.1 6.4-4.8 5.9-8.8zM824 472c0-109.4-87.9-198.3-196.9-200C516.3 270.3 424 361.2 424 472c0 62.8 29 118.8 74.2 155.5a300.95 300.95 0 00-86.4 60.4C357 742.6 326 814.8 324 891.8a8 8 0 008 8.2h56c4.3 0 7.9-3.4 8-7.7 1.9-58 25.4-112.3 66.7-153.5C505.8 695.7 563 672 624 672c110.4 0 200-89.5 200-200zm-109.5 90.5C690.3 586.7 658.2 600 624 600s-66.3-13.3-90.5-37.5a127.26 127.26 0 01-37.5-91.8c.3-32.8 13.4-64.5 36.3-88 24-24.6 56.1-38.3 90.4-38.7 33.9-.3 66.8 12.9 91 36.6 24.8 24.3 38.4 56.8 38.4 91.4-.1 34.2-13.4 66.3-37.6 90.5z" />
                            </svg>
                            <P class="text-sm font-semibold text-left pl-5">
                                Invite Friends
                            </P>
                            <div class="block grow text-right">
                                <i class="fas fa-angle-right"></i>
                            </div>
                        </div>
                    </a>
                    <a data-modal-toggle="mdlLogout">
                        <div class="container mt-4 flex flex-row min-w-screen overflow-x-auto mx-auto text-red-500">
                            <svg class="w-[18px] inline pb-[5px] text-red-500 fill-red-500" viewBox="64 64 896 896" focusable="false" xmlns="http://www.w3.org/2000/svg">
                                <path d="M868 732h-70.3c-4.8 0-9.3 2.1-12.3 5.8-7 8.5-14.5 16.7-22.4 24.5a353.84 353.84 0 01-112.7 75.9A352.8 352.8 0 01512.4 866c-47.9 0-94.3-9.4-137.9-27.8a353.84 353.84 0 01-112.7-75.9 353.28 353.28 0 01-76-112.5C167.3 606.2 158 559.9 158 512s9.4-94.2 27.8-137.8c17.8-42.1 43.4-80 76-112.5s70.5-58.1 112.7-75.9c43.6-18.4 90-27.8 137.9-27.8 47.9 0 94.3 9.3 137.9 27.8 42.2 17.8 80.1 43.4 112.7 75.9 7.9 7.9 15.3 16.1 22.4 24.5 3 3.7 7.6 5.8 12.3 5.8H868c6.3 0 10.2-7 6.7-12.3C798 160.5 663.8 81.6 511.3 82 271.7 82.6 79.6 277.1 82 516.4 84.4 751.9 276.2 942 512.4 942c152.1 0 285.7-78.8 362.3-197.7 3.4-5.3-.4-12.3-6.7-12.3zm88.9-226.3L815 393.7c-5.3-4.2-13-.4-13 6.3v76H488c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h314v76c0 6.7 7.8 10.5 13 6.3l141.9-112a8 8 0 000-12.6z" />
                            </svg>
                            <P class="text-sm font-semibold text-left pl-5">
                                Logout
                            </P>
                        </div>
                    </a>
                </div>
            </div>
        </main>

        <footer class="h-[8vh] z-10 py-2 bg-white shadow-md">
            <div class="container flex flex-col items-center mx-auto">
                <div class="flex flex-row text-center">
                    <div>
                        <a href="{{route('dashboard')}}" class="flex items-center px-4">
                            <div class="container flex flex-col items-center w-8">
                                <i class="fas fa-home text-gray-600 text-xl"></i>
                                <p class="text-gray-600 text-xs">Home</p>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="{{route('doctors')}}" class="flex items-center px-4">
                            <div class="container flex flex-col items-center w-8">
                                <i class="fa-solid fa-calendar-days text-xl text-gray-600"></i>
                                <p class="text-xs text-gray-600">Appointment</p>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="{{route('favorite')}}" class="flex items-center px-4">
                            <div class="container flex flex-col items-center w-8">
                                <i class="fa-regular fa-rectangle-list text-xl text-gray-600"></i>
                                <p class="text-xs text-gray-600">History</p>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="{{route('article')}}" class="flex items-center px-4">
                            <div class="container flex flex-col items-center w-8">
                                <i class="fa-regular fa-file-lines text-xl text-gray-600"></i>
                                <p class="text-xs text-gray-600">Articles</p>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="flex items-center px-4">
                            <div class="container flex flex-col items-center w-8">
                                <i class="fa-regular fa-user text-xl text-blue-600"></i>
                                <p class="text-xs text-blue-600">Profile</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
