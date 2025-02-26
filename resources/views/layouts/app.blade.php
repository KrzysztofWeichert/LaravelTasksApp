<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks list app</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    {{-- blade-formatter-disable --}}
    <style type="text/tailwindcss">
        .btn{
            @apply rounded-md px-2 py-1 text-center text-slate-200 font-medium shadow-sm ring-1 ring-slate-400 hover:bg-slate-600 duration-100
        }

        .btn2{
            @apply rounded-md p-2 text-center text-slate-200 font-medium shadow-sm ring-1 ring-slate-400 hover:bg-slate-600 duration-100
        }

        label{
            @apply block uppercase text-slate-200 mt-3
        }

        input, textarea{
            @apply shadow-md appearance-none border w-full border-slate-400 p-2 focus:outline-none
        }

        .error{
            @apply text-red-500 mb-3 text-sm
        }
    </style>
    {{-- blade-formatter-enable --}}
    @yield('styles')
</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg bg-slate-700 text-white">
    <div class="shadow-[7px_7px_36px_-9px_rgba(0,0,0,1)] rounded-lg p-8 border-1 border-slate-300 bg-slate-800">
        <h1 class="text-2xl mb-4">@yield('title')</h1>
        @if (session()->has('success'))
            <div x-data="{ flash: true }">
                <div x-show="flash"
                    class="relative mb-5 rounded border-green-800 bg-green-500 px-2 py-1 text-green-900 text-lg"
                    role="alert">
                    <div @click="flash = false" class="absolute top-0 right-3 cursor-pointer">×</div>
                    <strong class="font-bold">Success! </strong><br>{{ session('success') }}
                </div>
        @endif
        @yield('content')
    </div>
    </div>
</body>

</html>
