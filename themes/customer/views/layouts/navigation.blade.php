<nav style="background-color:#F09C00; height:100%" class="flex shadow-xl">
    <div class="h-full w-1/3">
        <img src="{{ asset('img/logo.png') }}" alt="" class="h-full py-2 pl-2">
    </div>
    <div class="flex flex-col w-2/3">
        <div class="flex pt-2 justify-between pr-4">
            <div class="px-2 py-1 flex items-center shadow-lg bg-white rounded-full w-2/4">
                <input placeholder="Search..." class="border-none focus:outline-none focus:ring-0 ml-2"
                    style="width: 90%" type="text">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </div>
            <div class="w-1/4 flex justify-end p-2 space-x-4">
                @if (!auth()->user())
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @else
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <nav x-data="{ open: false }" class="">
                            <!-- Primary Navigation Menu -->

                            <!-- Settings Dropdown -->
                            <div class="hidden sm:flex sm:items-center sm:ml-6">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button
                                            class="flex items-center font-black text-md text-white hover:text-gray-700 hover:border-gray-100 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                            <div>{{ Auth::user()->name }}</div>

                                            <div class="ml-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                                {{ __('Log out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            </div>

                            <!-- Hamburger -->
                            <div class="-mr-2 flex items-center sm:hidden">
                                <button @click="open = ! open"
                                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>


                            <!-- Responsive Navigation Menu -->
                            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">

                                <!-- Responsive Settings Options -->
                                <div class="pt-4 pb-1 border-t border-gray-200">
                                    <div class="flex items-center px-4">
                                        <div class="flex-shrink-0">
                                            <svg class="h-10 w-10 fill-current text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                        </div>

                                        <div class="ml-3">
                                            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}
                                            </div>
                                            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3 space-y-1">
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log out') }}
                                            </x-responsive-nav-link>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </nav>

                    </div>
                @endif
            </div>
        </div>
        <div class="flex space-x-4 mt-5 w-2/3">
            <x-nav-link :href="route('customer.home')" :active="request()->routeIs('customer.home')">
                {{ __('Home') }}
            </x-nav-link>
            <x-nav-link :href="route('customer.order.index')" :active="request()->routeIs('customer.order.index')">
                {{ __('Order') }}
            </x-nav-link>
        </div>
    </div>
</nav>
