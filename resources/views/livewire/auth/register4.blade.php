@extends('layouts.app')

@section('content')
    <div class="h-screen bg-white md:max-w-[500px] md:mx-auto">
        <header class="h-[8vh] min-h-[60px] flex flex-col z-10 px-4 bg-white text-gray-700">
            <div class="container mt-6 flex flex-row text-center min-w-screen overflow-x-auto px-2 py-1 mx-auto">
                <a href="{{route('register3')}}" class="pt-2 pb-2 md:hidden">
                    <i class="fas fa-arrow-left text-[20px] mr-4"></i>
                </a>
                <h2 class="text-xl font-semibold text-left pt-1 pb-1" id="textTitle">
                    Set Your Fingerprint
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
                                <img src="/images/avatar_cong.png" class="mx-auto" />
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
                <div class="py-3 container flex flex-col items-center px-6 py-24 mx-auto text-gray-600">
                    <p>
                        Add a fingerprint to make your account more secure.
                    </p>
                </div>
                <div class="py-4 container flex flex-col items-center px-6 mx-auto text-gray-600">
                    <img
                        class="object-fill rounded-full w-[150px] h-[150px] bg-gray-50"
                        src="data:image/png;base64,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"
                        alt=""
                        aria-hidden="true"
                    />
                </div>
                <div class="py-4 container flex flex-col items-center px-6 py-24 mx-auto text-gray-600">
                    <p class="text-center">
                        Please put your finger on the fingerprint scanner to get started
                    </p>
                </div>
            </div>
        </main>
        <footer class="h-[8vh] z-10 py-2 bg-white shadow-md">
            <div class="container flex flex-row items-center rounded-l-lg px-10 w-full md:max-w-[500px] mx-auto">
                <button class="py-1 mx-2 text-xs font-bold text-blue-600 transition-colors duration-150 border border-blue-100 rounded-full bg-blue-100 w-full h-10" data-modal-toggle="mdlSuccess" onclick="showModal()">
                    Skip
                </button>
                <button class="py-1 mx-2 text-xs font-bold text-white transition-colors duration-150 border border-blue-600 rounded-full bg-blue-600 w-full h-10" data-modal-toggle="mdlSuccess" onclick="showModal()">
                    Continue
                </button>
            </div>
        </footer>
    </div>
    <script>
        function showModal() {
            setTimeout(() => {
                window.location.href = "{{route('dashboard')}}";
            }, 3000);
        }
    </script>
@endsection
