@extends('layouts.app')

@section('content')
    <div class="h-screen bg-white md:max-w-[500px] md:mx-auto">
        <header class="h-[8vh] min-h-[60px] flex flex-col z-10 px-4 bg-white text-gray-700">
            <div class="container mt-6 flex flex-row text-center min-w-screen overflow-x-auto px-2 py-1 mx-auto">
                <a href="{{route('password.request')}}" class="pt-2 pb-2 md:hidden">
                    <i class="fas fa-arrow-left text-[20px] mr-4"></i>
                </a>
                <h2 class="text-xl font-semibold text-left pt-1 pb-1" id="textTitle">
                    OTP Code Verification
                </h2>
            </div>
        </header>

        <main class="h-[84vh] overflow-y-auto max-w-[768px] mx-auto">
            <div class="container mt-5 px-3 mx-auto">
                <div class="py-4 container flex flex-col items-center px-6 py-24 mx-auto text-gray-600">
                    <p>
                        Code has been send to +1 111******99
                    </p>
                </div>
                <div class="flex flex-row justify-center">
                    <div class="p-4 shadow-xs">
                        <input type="password" maxlength=1 id="first" onkeydown="moveOnNext(this, 'second')" class="bg-gray-100 border border-gray-100 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-12 p-2.5 text-center">
                    </div>
                    <div class="p-4 shadow-xs">
                        <input type="password" maxlength=1 id="second" onkeydown="moveOnNext(this, 'third')" class="bg-gray-100 border border-gray-100 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-12 p-2.5 text-center">
                    </div>
                    <div class="p-4 shadow-xs">
                        <input type="password" maxlength=1 id="third" onkeydown="moveOnNext(this, 'forth')" class="bg-gray-100 border border-gray-100 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-12 p-2.5 text-center">
                    </div>
                    <div class="p-4 shadow-xs">
                        <input type="password" maxlength=1 id="forth" onkeydown="moveOnNext(this, 'next')" class="bg-gray-100 border border-gray-100 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-12 p-2.5 text-center">
                    </div>
                </div>
                <div class="py-4 container flex flex-col items-center px-6 py-24 mx-auto">
                    <p class="text-gray-600">
                        Resend code in
                        <a class="text-blue-600">53</a>
                        s
                    </p>
                </div>
            </div>
        </main>
        <footer class="h-[8vh] z-10 py-2 bg-white shadow-md">
            <div class="container flex flex-col items-center rounded-l-lg px-10 w-full md:max-w-[500px] mx-auto">
                <a href="{{route('password.request3')}}" id="next" class="text-xs font-bold text-white text-center pt-2 transition-colors duration-150 border border-blue-600 rounded-full bg-blue-600 w-full h-10">
                    Continue
                </a>
            </div>
        </footer>
    </div>
    <script>
        moveOnNext =function (field, nextFieldID) {
            if (field.value.length == 1) {
                document.getElementById(nextFieldID).focus();
            }
        }
    </script>
@endsection
