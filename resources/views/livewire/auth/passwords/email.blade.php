@extends('layouts.app')

@section('content')
    <div class="h-screen bg-white md:max-w-[500px] md:mx-auto">
        <header class="h-[8vh] min-h-[60px] flex flex-col z-10 px-4 bg-white text-gray-700">
            <div class="container mt-6 flex flex-row text-center min-w-screen overflow-x-auto px-2 py-1 mx-auto">
                <a href="{{route('login')}}" class="pt-2 pb-2 md:hidden">
                    <i class="fas fa-arrow-left text-[20px] mr-4"></i>
                </a>
                <h2 class="text-xl font-semibold text-left pt-1 pb-1" id="textTitle">
                    Forgot Password
                </h2>
            </div>
        </header>

        <main class="h-[84vh] overflow-y-auto max-w-[768px] mx-auto">
            <div class="container mt-5 px-3 mx-auto">
                <div class="pt-14 pb-4 container flex flex-col items-center px-6 mx-auto">
                    <img
                        class="object-fill"
                        src="/images/forgot.png"
                        alt=""
                        aria-hidden="true"
                    />
                    <p class="text-gray-700 pt-6">
                        Select which contact details should we use to reset your password
                    </p>
                </div>
                <div class="container flex flex-col text-center min-w-screen overflow-x-auto p-2 mx-auto">
                    <div class="py-3">
                        <input type="radio" id="hosting-small" name="hosting" value="hosting-small" class="hidden peer" required>
                        <label for="hosting-small" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-3xl border border-gray-200 cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">
                            <div class="w-16 h-16 bg-blue-200 rounded-full align-middle">
                                <i class="fas fa-comment-dots text-blue-600 text-xl bg-blue-200 pt-5 rounded-full"></i>
                            </div>
                            <div class="py-2 px-6 block grow">
                                <p class="text-left text-sm text-gray-600">
                                    via SMS:
                                </p>
                                <p class="text-left text-md text-gray-900 font-semibold">
                                    +1 111******99
                                </p>
                            </div>
                        </label>
                    </div>
                    <div class="py-3">
                        <input type="radio" id="hosting-big" name="hosting" value="hosting-big" class="hidden peer">
                        <label for="hosting-big" class="inline-flex justify-between items-center p-5 w-full text-gray-500 bg-white rounded-3xl border border-gray-200 cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">
                            <div class="w-16 h-16 bg-blue-200 rounded-full align-middle">
                                <i class="fas fa-envelope text-blue-600 text-xl bg-blue-200 pt-5 rounded-full"></i>
                            </div>
                            <div class="py-2 px-6 block grow">
                                <p class="text-left text-sm text-gray-600">
                                    via Email:
                                </p>
                                <p class="text-left text-md text-gray-900 font-semibold">
                                    and***ley@yourdomain.com
                                </p>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </main>
        <footer class="h-[8vh] z-10 py-2 bg-white shadow-md">
            <div class="container flex flex-col items-center rounded-l-lg px-10 w-full md:max-w-[500px] mx-auto">
                <a href="{{route('password.request2')}}" id="next" class="text-xs font-bold text-white text-center pt-2 transition-colors duration-150 border border-blue-600 rounded-full bg-blue-600 w-full h-10">
                    Continue
                </a>
            </div>
        </footer>
    </div>
@endsection
