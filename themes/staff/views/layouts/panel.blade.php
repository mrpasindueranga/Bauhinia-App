<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Greenline') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css', 'themes/staff') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ mix('js/app.js', 'themes/staff') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
</head>

<body class="font-sans antialiased box-content h-screen w-screen" style="overflow: hidden">
    <div class=" bg-gray-100 w-full h-full relative">
        {{-- @include('layouts.navigation') --}}

        <!-- Page Content -->
        <main class="flex" style="height:100%">
            <div style="background-color:#202125; width:12%; overflow-y:auto;" class="relative">
                <!-- Profile -->
                <div class="inline-flex items-center ml-1 mr-1 mt-3">
                    <div>
                        <img src="#" width="30px" alt="">
                    </div>
                    <div class="text-white ml-3">
                        {{ Auth::user()->name }}
                    </div>
                </div>
                <!-- Navigation Links -->
                <div class="sm:-my-px sm:mt-4 sm:ml-1 sm:mr-1 flex flex-col">
                    @role('admin')
                    <x-nav-link :href="route('staff.home')" :active="request()->routeIs('staff.home')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="none" height="24" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-sidebar">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="9" y1="3" x2="9" y2="21"></line>
                        </svg>
                        <div style="margin-left:1em">{{ __('Dashboard') }}</div>
                    </x-nav-link>
                    @endrole

                    @role('admin')
                    <p class="text-gray-500 text-sm mt-4">Product</p>
                    <x-nav-link :href="route('staff.brand.index')" :active="request()->routeIs('staff.brand.*')">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                            fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <div style="margin-left:1em">{{ __('Brand') }}</div>
                    </x-nav-link>
                    <x-nav-link :href="route('staff.category.index')" :active="request()->routeIs('staff.category.*')">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                            fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <polyline points="21 8 21 21 3 21 3 8"></polyline>
                            <rect x="1" y="3" width="22" height="5"></rect>
                            <line x1="10" y1="12" x2="14" y2="12"></line>
                        </svg>
                        <div style="margin-left:1em">{{ __('Category') }}</div>
                    </x-nav-link>
                    <x-nav-link :href="route('staff.inventory.index')"
                        :active="request()->routeIs('staff.inventory.*')">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                            fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                            <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                        </svg>
                        <div style="margin-left:1em">{{ __('Inventory') }}</div>
                    </x-nav-link>
                    <x-nav-link :href="route('staff.measurement.index')"
                        :active="request()->routeIs('staff.measurement.*')">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path
                                d="M21 6H3c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 10H3V8h2v4h2V8h2v4h2V8h2v4h2V8h2v4h2V8h2v8z" />
                        </svg>
                        <div style="margin-left:1em">{{ __('Measurement') }}</div>
                    </x-nav-link>
                    <p class="text-gray-500 text-sm mt-4">Staff</p>
                    <x-nav-link :href="route('staff.employee.index')" :active="request()->routeIs('staff.employee.*')">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px"
                            viewBox="0 0 24 24" width="24px">
                            <g>
                                <rect fill="none" height="24" width="24" y="0" />
                            </g>
                            <g>
                                <g>
                                    <rect height="1.5" width="4" x="14" y="12" />
                                    <rect height="1.5" width="4" x="14" y="15" />
                                    <path
                                        d="M20,7h-5V4c0-1.1-0.9-2-2-2h-2C9.9,2,9,2.9,9,4v3H4C2.9,7,2,7.9,2,9v11c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V9 C22,7.9,21.1,7,20,7z M11,7V4h2v3v2h-2V7z M20,20H4V9h5c0,1.1,0.9,2,2,2h2c1.1,0,2-0.9,2-2h5V20z" />
                                    <circle cx="9" cy="13.5" r="1.5" />
                                    <path
                                        d="M11.08,16.18C10.44,15.9,9.74,15.75,9,15.75s-1.44,0.15-2.08,0.43C6.36,16.42,6,16.96,6,17.57V18h6v-0.43 C12,16.96,11.64,16.42,11.08,16.18z" />
                                </g>
                            </g>
                        </svg>
                        <div style="margin-left:1em">{{ __('Employee') }}</div>
                    </x-nav-link>
                    <p class="text-gray-500 text-sm mt-4">Report</p>
                    <x-nav-link :href="route('staff.order_report.home')"
                        :active="request()->routeIs('staff.order_report.*')">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                            fill="#FFFFFF">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path
                                d="M11 7h6v2h-6zm0 4h6v2h-6zm0 4h6v2h-6zM7 7h2v2H7zm0 4h2v2H7zm0 4h2v2H7zM20.1 3H3.9c-.5 0-.9.4-.9.9v16.2c0 .4.4.9.9.9h16.2c.4 0 .9-.5.9-.9V3.9c0-.5-.5-.9-.9-.9zM19 19H5V5h14v14z" />
                        </svg>
                        <div style="margin-left:1em">{{ __('Order Report') }}</div>
                    </x-nav-link>
                    @endrole
                    <div class="rounded p-1 m-auto absolute bottom-2 bg-red-600 text-white mt-20 mb-4"
                        style="width: 96%">
                        <form method="POST" action="{{ route('staff.logout') }}">
                            @csrf
                            <button class="flex" style="cursor: pointer; outline:none; width:100%" type="submit"><svg
                                    style="margin-right:1em" viewBox="0 0 24 24" width="24" height="24"
                                    stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" class="css-i6dzq1">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>Logout</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="flex-1 relative" style="background-color: black; padding:1em">
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>
