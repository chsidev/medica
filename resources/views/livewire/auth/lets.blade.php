@extends('layouts.auth')
@section('title', "Let's you in")
@section('content')
<div class="bg-white">
    <div class="block ml-3 md:hidden">
        <a href="{{ route('home') }}" class="">
            <i class="fas fa-arrow-left text-[20px] mr-4"></i>
        </a>
    </div>
    <div class="mt-10 md:mx-auto md:w-full md:max-w-md">
        <a href="{{ route('home') }}">
            <div class="w-auto mx-auto">
                <img src="/images/lets.png" class="mx-auto" />
            </div>
        </a>

        <h2 class="mt-6 text-3xl font-bold text-center text-gray-900 leading-9">
            Let's you in
        </h2>

    </div>

    <div class="mt-4 md:mx-auto md:w-full md:max-w-md">
        <div class="p-4 bg-white shadow md:rounded-lg md:px-10">

            <div class="mt-6 text-center border rounded-xl">
                <a href="{{ route('dashboard') }}" class="block py-4 mx-auto w-auto focus:outline-none focus:underline transition ease-in-out duration-150">
{{--                    <img src="/images/facebook_icon.png" class="inline mr-3" width="30px" />--}}
                    <img alt="Image result for facebook icon svg" class="inline mr-6 h-8" src="data:image/jpeg;base64,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" data-atf="1" data-frt="0">
                    <span>
                        Continue with Facebook
                    </span>
                </a>
            </div>
            <div class="mt-3 text-center border rounded-xl">
                <a href="{{ route('dashboard') }}" class="block py-4 mx-auto w-auto focus:outline-none focus:underline transition ease-in-out duration-150">
                    <img alt="google icon svg from freesvg.org" class="inline mr-6 h-8" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFwAAABcCAMAAADUMSJqAAABFFBMVEX////qQzU0qFNChfT7vAU6gfSLrveIr/L4+v9MivX7ugAvp1DqPzDpOirqQTPpMB3pKhT86OfsXlTrTUH7tgD/9uUToUD2+/cipEf509D++fn3w8DpNCL7393xjIY+q1r98fHwgnvtZVv1sq77wz7+89z81H/7vR3+7tD914r8xkn93qP80HPW5Pa93sRTsmt3v4it17bR6NYqe/MxqkDk8ueJxpfympXubWToIADzpJ/yhj/pNDT+57v1mybsVTjwdDL5rhvuazTzjirygB+kwPZsn+/m7vpUj/KPrjWSzKdlrEy+0vbOtyqstDjcuSODr0Truxm8tTGWtU4xj705m5ozo209j844lqw4oX5AiuCItdziahgKAAAEDUlEQVRoge2WV3/aMBTFjTENsbzA1BgwmJGUdGF2RnfajJLuPb7/96jAQGRZMtfGeeivPS88IP05HN17JUH4ry3VLGA106ZWK51G0VRU1XFUVTHbjU6lmg65ctg2dEdVtLUU1TGMo5P6tuR6I6OrSoYhxdHNw8IW6FrRUDUW2ZemGkeVpGhTZ3oO+NeLSfAVU48wTeCNo7jhV1vGRtfX7g9jsWu6CkVjaY4Zw3zDACVCmu8A0c22Ew89N6+3QG1VyMSJZK3jEwC7roBPkpTegLBhBZiIXVBujt3M3FwmQjv6LOcjMTG7wa9BTXXmc1dZfAR/AcauGVzysYkviHqh2SzUK51WhhyWMHaVUyhKeHDXDzOrxTC20GIGrunFGstJx3Q0OLvCDEVVWeiFTvC4B7IFk1WFRtTIKLSPgeyazojE2DDsoLPw0WNG3ElvSEpPpKc3xhb2ZKn0LGjeSIu9X5KwnpP0TXnDdUeew6WX13S1lRZb6Ppw6cWzZeNpakqvQUE4KEkrnfrmdW7vxNZdeQ33o1GKqbGFewRcepHR0jReLUkBnT42U2OTkft6Fe+BFqn7MgWXb7MX5ndugfSQ2POAgstdjot8NgfR6IzYs0fDH/Dgu1mIcufEni6dyv3t4NlLYg/FlkoHW8Kz+fWW2/R5lva3hOcu+HBescDhD28QPvpr4VGxbH+gRIumXopEtaTfRESdp97+2V1iD3xwJWj/0Mgt8UYueyqGIicHF3VZyPLrGQe+w9Q5DSdHbvCak7tXyOXkwtYZ5X30hvyWvKDlt6Io2r048EvK+ShPfks8LeR3mC0iLwb7YkSHHvh6HbosXYkLWTGs06kEzlNYP+fk9+JKqAyG09USjHz1EPUj8WX3kxoPNP9c8ye0LH1A13DRGsDYF6EyP6eX7MnyRzEoawiC06USrPKFnpQ+ibRsCH0nVCrBQlzoMwrBIfSzEDt3K7yqZ4Xhm3MP+86OLhjrXIZ10epHVWT+PMymi9zXkGVdtBG/mwZfwmzybibVZ1nH5j02vudZ46/R05ZQ2WbCRWS7swm1djLD/wn/r2+7dOuzEl94YQazwFtufzCcTMrlyWTYm/WRtTSC0PdANKNQja815XhfUGzLRlg2FpEfGv8g6LlLLlsQPHbskRr/zK6jyYX7h4hdTEC33V9LOj0O6YNCCeho7NdkROBLup2ALuKazGVHOxvYCb3jmrwEsDE9Se4isn4D2PhUPX5FcmVxXjphTXndxPUd5ynSi3estkuPh+ho+hYYj2xwJCsNXRgeWV4s20v1AHhke7BrnIH3ovG2lRg912Tq2uzDxePRnSYJJKDhzLPm05bg4vFrebNtTBMqDwdTz13OcuR608EQ/pKE/sYEK3Xqv6c/E852AYdodpsAAAAASUVORK5CYII=" data-atf="1" data-frt="0">
                    <span>
                        Continue with Google
                    </span>
                </a>
            </div>
            <div class="mt-3 text-center border rounded-xl">
                <a href="{{ route('dashboard') }}" class="block py-4 mx-auto w-auto focus:outline-none focus:underline transition ease-in-out duration-150">
                    <img alt="Image result for apple icon svg" class="inline mr-6 h-8" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGkAAACCCAMAAABy3xZJAAAAaVBMVEUAAAD////V1dVGRkb09PT8/Pzt7e2VlZXBwcFvb2/o6OjY2Niurq6NjY1kZGR8fHy3t7dpaWng4OBLS0vOzs6CgoInJyfHx8daWlpVVVVAQEB0dHSbm5tfX1+mpqYWFhYzMzMcHBwODg6qBYtUAAAED0lEQVRogb2b69qqIBCFB49l2lntYGXd/0XuSk1hEN3K+tbf5HkDYRgWIwlbcu6bA0X9v5MlTEpfHcGkhUu1cijJOdBPyD75KXXk4EirsguiAEaKSZbh0XmkUAGVKFKigCgBkdQeES0wJPUdveVDSCsOWpuen0zyM04yRIgZpJSDTDNvOkkzdhRDSCdNl0zzYTLpqOnS1txkIunGQaeBJtNIEQe99hASjw5DYzeV9GCgzWCbSSQ+eOfhRpNILOJdzBN8OkmNDyN6NJHkyqB0VKNJJBlk2pRskq7e2EbzSOuh9WqHVG7GcyaS1mV5OCXHseM2gyQCb8QC+g+S7wXBfr8PRvx3LzjGRZKExfYY9TzeSwrizalOFR63dGHqQ3C/lp3Z+FwnjuZxPSkolMVJtOwJ1kFxUB/9/LmUnQV0pNVO0/YTC/hU22p2+VoXZUVz0kr3H2u5UlKyZ9myrEzql0ryNdmVpGtevYMovgw8+dbS7yU5z+Hm5G6S5Zjn3no6PaRiXPv/0VZL2tgHERUa0hUB+qEIDmqy6JY0NOlmKJdIdxyIHlGH5ABBVQJQk7wSyHGjzugBX1KTOlUk3SHFlu7SemJ7hD3JMWLxB6CKNCIqT1QhJFIOAy2FTOrfN2fq6cskzVHSktQ9FxaHrkIhlSiSp5BggxcKhbRFkQKVhNoAd0IlgUDMOicPBHoKlYQK40tG0ripVsQODARIJr/iZw1INvnO/tm9A60xJO7JkuEMM0cXTioxJG4lEbfqrIib9BgOj0U40o2TXhiSZkaA3tPfzb2MOS2o9UQrRtK4+VbEnExU3ONXhqSx862IBT7Y/kSqyUSwc0aoknSXY1b0Ukk+iqTu77gsjB4qCbWg2hNuQwJaHp5MAh5yzzIpwJG6x9zP+UlzrW1NC4mE9Fc65wCCuhFd1JsUgDb4WouWhPRyPgpbEtJE/OgUNCRYkP3pLuC+UaMsr0jo4fvo8iXt/4CUVk4izKNqlVck7OL9qnZHodbyV2njLQ/cWc3XqiHhPL5Kh/YOYIklbVsSNk5koiUJkFtQKe6SkJ3K/C5J9Fzi2lAsJBIuJFUFY53bO1g+sRUKCeUpnoVK0hVO2pDDSZiEoqkRkkiImPQz+uC34b8sVrnht+5OtDVwCsn2caBjtaj1EZbvHjq+L6v5sOqEdM/vjORbTP5cYSLZnOqemWQvUZLNeV0VkKVVpRQXayubrER11QzT11BZuP1iZat6km9KlTL3vL5eb2fXVAnE62P7KtB6evU63J2ovg/2o2PYF/1VI8xA0hUMU1mwyrBVqunZS1et1l+/x8qpzvrie++uGho77ZcopkpBabaHhprKvPta1z3f1pirH/PwlFF22MSGL3MqHeNkd7oti/6Swn81wi2SYvF/OQAAAABJRU5ErkJggg==" data-atf="1" data-frt="0">
                    <span>
                        Continue with Apple
                    </span>
                </a>
            </div>

            <div class="mt-10 mb-10 text-center">
                <div class="text-sm leading-5 mx-auto text-gray-700 flex divider">
                    &nbsp;&nbsp;&nbsp;&nbsp;or&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
            </div>
            <div class="mt-4">
                    <span class="block w-full rounded-md shadow-sm">
                        <a href="{{ route('login') }}" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-full hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:ring-blue active:bg-blue-700 transition duration-150 ease-in-out">
                            Sign in with password
                        </a>
                    </span>
            </div>

            @if (Route::has('register'))
                <p class="mt-10 text-sm text-center text-gray-600 leading-5 max-w">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-blue-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                        Sign up
                    </a>
                </p>
            @endif
        </div>
    </div>
</div>
@endsection
