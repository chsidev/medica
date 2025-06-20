@extends('layouts.app')

@section('content')
    <div class="h-screen bg-white md:max-w-[500px] md:mx-auto">
        <header class="h-[8vh] min-h-[60px] flex flex-col z-10 px-4 bg-white text-gray-700">
            <div class="container mt-6 flex flex-row text-center min-w-screen overflow-x-auto px-2 py-1 mx-auto">
                <a href="{{route('password.request2')}}" class="pt-2 pb-2 md:hidden">
                    <i class="fas fa-arrow-left text-[20px] mr-4"></i>
                </a>
                <h2 class="text-xl font-semibold text-left pt-1 pb-1" id="textTitle">
                    Create New Password
                </h2>
            </div>
        </header>

        <main class="h-[84vh] overflow-y-auto max-w-[768px] mx-auto">
            <div id="mdlSuccess" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-3 bottom-0 left-0 right-0 z-50 my-10 w-[280px] mx-auto">
                <div class="w-full max-w-md md:h-auto">
                    <!-- Modal content -->
                    <div class="bg-white rounded-3xl md:rounded-md shadow">
                        <div class="mt-10 pt-10 md:mx-auto md:w-full md:max-w-md">
                            <div class="w-auto mx-auto">
                                <img src="/images/pwd_cong.png" class="mx-auto" />
                            </div>
                        </div>
                        <h1 class="text-lg text-blue-600 text-center font-bold">Congratulations!</h1>
                        <p class="text-sm text-gray-800 text-center">
                            Your account is ready to use. You will be redirected to the Home page in a few seconds.
                        </p>
                        <div class="w-full my-10 pb-10 md:mx-auto md:w-full md:max-w-md">
                            <div class="w-auto mx-auto table">
                                <img src="/images/loading.png" class="animate-spin" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5 px-3 mx-auto">
                <div class="pt-14 pb-4 container flex flex-col items-center px-6 mx-auto">
                    <img
                        class="object-fill"
                        src="/images/success.png"
                        alt=""
                        aria-hidden="true"
                    />
                </div>
                <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-md">
                    <div class="p-4 bg-white sm:rounded-lg sm:px-10">
                        <form wire:submit.prevent="authenticate">
                            <p class="text-gray-800 py-2">Create Your New Password</p>
                            <div class="mt-6">
                                <div class="mt-1 rounded-md shadow-sm">
                                    <div class="grow relative">
                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3">
                                            <i class="fas fa-lock text-gray-500"></i>
                                        </div>
                                        <input wire:model.lazy="password" id="password" type="password" placeholder="Password" required class="appearance-none block z-10 w-full pl-10 pr-10 py-2 border border-gray-100 bg-gray-50 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                                        <a class="absolute right-2.5 bottom-2.5 font-medium rounded-lg text-sm" onclick="togglePasswordShow()">
                                            <i class="fas fa-eye-slash text-gray-500" id="eyeIcon"></i>
                                        </a>
                                    </div>
                                </div>

                                @error('password')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-6">
                                <div class="mt-1 rounded-md shadow-sm">
                                    <div class="grow relative">
                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3">
                                            <i class="fas fa-lock text-gray-500"></i>
                                        </div>
                                        <input wire:model.lazy="passwordConfirmation" id="password_confirmation" type="password" placeholder="Confirm Password" required class="appearance-none block z-10 w-full pl-10 pr-10 py-2 border border-gray-100 bg-gray-50 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                                        <a class="absolute right-2.5 bottom-2.5 font-medium rounded-lg text-sm" onclick="togglePasswordShow2()">
                                            <i class="fas fa-eye-slash text-gray-500" id="eyeIcon2"></i>
                                        </a>
                                    </div>
                                </div>
                                @error('password')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-6 text-center">
                                <div class="inline-flex items-center mx-auto">
                                    <input wire:model.lazy="remember" id="remember" type="checkbox" class="form-checkbox w-4 h-4 text-blue-600 transition duration-150 ease-in-out rounded" />
                                    <label for="remember" class="block ml-2 text-sm text-gray-900 leading-5">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer class="h-[8vh] z-10 py-2 bg-white shadow-md">
            <div class="container flex flex-col items-center rounded-l-lg px-10 w-full md:max-w-[500px] mx-auto">
                <button class="py-1 mx-2 text-xs font-bold text-white transition-colors duration-150 border border-blue-600 rounded-full bg-blue-600 w-full h-10" data-modal-toggle="mdlSuccess" onclick="showModal()">
                    Continue
                </button>
            </div>
        </footer>
    </div>
    <script>
        function togglePasswordShow() {
            var a = document.getElementById('password');
            var b = document.getElementById('eyeIcon');
            if (a.type === 'password') {
                a.type = 'text';
                b.classList.remove('fa-eye-slash');
                b.classList.add('fa-eye');
            } else {
                a.type = 'password';
                b.classList.add('fa-eye-slash');
                b.classList.remove('fa-eye');
            }
        }

        function togglePasswordShow2() {
            var a = document.getElementById('password_confirmation');
            var b = document.getElementById('eyeIcon2');
            if (a.type === 'password') {
                a.type = 'text';
                b.classList.remove('fa-eye-slash');
                b.classList.add('fa-eye');
            } else {
                a.type = 'password';
                b.classList.add('fa-eye-slash');
                b.classList.remove('fa-eye');
            }
        }

        function showModal() {
            setTimeout(() => {
                window.location.href = "{{route('dashboard')}}";
            }, 3000);
        }
    </script>
@endsection
