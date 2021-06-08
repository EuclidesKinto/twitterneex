<x-app-layout class="">
        <div class="grid grid-cols-1 md:grid-cols-12 mx-20" >
            {{-- logo --}}
            <div class="col-span-3 border-r ">
                <x-jet-application-logo class="block h-16 w-auto" />
            </div>
            {{-- feed --}}
            <div class="col-span-6  border-r  border-b ">
                <div class="text-lg text-black p-3 font-extrabold">Página Inicial</div>
            </div>
            {{-- sidebar-right --}}
            <div class="col-span-3 mx-5">
                <div class="bg-gray-200 rounded-full p-3 mx-3 mt-2">
                    <span class="text-gray-600 text-sm">Buscar no twitter</span>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-12 mx-20">
            {{-- left --}}
            <div class="col-span-3">
                <nav>
                    <ul x-data="{ open: false }">
                        <li class="cursor-pointer flex flex-row py-3 px-5 hover:bg-blue-200 rounded-full mr-5">
                            <span class="mr-1">
                                <svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 r-13gxpu9 r-4qtqp9 r-yyyyoo r-lwhw9o r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M22.58 7.35L12.475 1.897c-.297-.16-.654-.16-.95 0L1.425 7.35c-.486.264-.667.87-.405 1.356.18.335.525.525.88.525.16 0 .324-.038.475-.12l.734-.396 1.59 11.25c.216 1.214 1.31 2.062 2.66 2.062h9.282c1.35 0 2.444-.848 2.662-2.088l1.588-11.225.737.398c.485.263 1.092.082 1.354-.404.263-.486.08-1.093-.404-1.355zM12 15.435c-1.795 0-3.25-1.455-3.25-3.25s1.455-3.25 3.25-3.25 3.25 1.455 3.25 3.25-1.455 3.25-3.25 3.25z" fill="#1DA1F2"></path></g>
                                </svg>
                            </span>
                            <span class="ml-4 font-bold text-2xl text-blue-400">Página Inicial</span>
                        </li>
                        <li class="cursor-pointer flex flex-row py-3 px-5 hover:bg-blue-200 rounded-full mr-5">
                            <span class="mr-1 font-bold text-2xl text-black hover:text-blue-400">
                               #
                            </span>
                            <span class="ml-4 font-bold text-2xl text-black hover:text-blue-400">Explorar</span>
                        </li>
                        <li class="cursor-pointer flex flex-row py-3 px-5  bg-blue-500 rounded-full mr-5">
                            <span class="mx-auto font-bold text-base  text-white ">Twett</span>
                        </li>
                        <li class="cursor-pointer flex flex-row mr-5">
                            <div class="flex flex-row justify-between my-3 bg-white rounded p-2">
                                <div class="flex flex-row">
                                    <span class="">
                                        <div>
                                            <div class="w-10 h-10 rounded-full bg-gray-800"></div>
                                        </div>
                                    </span>
                                </div>
                                <span>
                                </span>
                            </div>
                            <div class="sm:flex sm:items-center sm:ml-6">
                                <!-- Settings Dropdown -->
                                <div class="ml-3 relative">
                                    <x-jet-dropdown align="right" width="48">
                                        <x-slot name="trigger">
                                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                                </button>
                                            @else
                                                <span class="inline-flex rounded-md">
                                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                        {{ Auth::user()->name }}

                                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                </span>
                                            @endif
                                        </x-slot>

                                        <x-slot name="content">
                                            <!-- Account Management -->
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                {{ __('Manage Account') }}
                                            </div>

                                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                                {{ __('Profile') }}
                                            </x-jet-dropdown-link>

                                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                                    {{ __('API Tokens') }}
                                                </x-jet-dropdown-link>
                                            @endif

                                            <div class="border-t border-gray-100"></div>

                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                                         onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-jet-dropdown-link>
                                            </form>
                                        </x-slot>
                                    </x-jet-dropdown>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            {{-- main --}}
            <div class="col-span-6 border-r border-l px-3">
                @livewire('feed-tweets')
            </div>
            {{-- rigth --}}
            <div class="col-span-3 ">
                <div class="mx-5 rounded-lg my-5 bg-gray-100 hover:bg-gray-50">
                    <div class="my-2 text-center border-b ">
                        <h1 class="mb-2 text-lg font-semibold text-gray-600 title-font">
                            Seguir Usuários
                        </h1>
                    </div>
                    <div class="flex flex-col mt-3 mx-3">
                        @foreach ( $users as $user)
                            @if(Auth::user()->id != $user->id)
                                @livewire('follow', ['user' => $user])
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>

