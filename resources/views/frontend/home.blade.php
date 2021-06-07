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
            <div class="col-span-3 mx-5">
                <nav>
                    <ul>
                        <li>Página Inicial</li>
                        <li>Página Inicial</li>
                        <li>Página Inicial</li>
                        <li>Página Inicial</li>
                    </ul>
                </nav>
            </div>
            {{-- main --}}
            <div class="col-span-6 border-r border-l px-3">
                @livewire('feed-tweets')
            </div>
            {{-- rigth --}}
            <div class="col-span-3 mx-5 rounded-lg my-5 bg-gray-100 hover:bg-gray-50">
                <div class="my-2 text-center border-b ">
                    <h1 class="mb-2 text-lg font-semibold text-gray-600 title-font">
                        Seguir Usuários
                    </h1>
                </div>
                <div class="flex flex-col mt-3 mx-3">
                    <div class="flex flex-row">
                        <span class="">
                            <div>
                                <div class="w-14 h-14 rounded-full bg-gray-800"></div>
                                {{-- <img class="block h-6  rounded-full sm:mx-0 sm:flex-shrink-0" src="{{ Storage::disk('s3')->url('' . $course->producer->image) }}" alt="{{ $course->producer->name }}"> --}}
                            </div>
                        </span>
                        <span >
                            <p class="ml-3 text-base text-center text-gray-500 mb-1 hover:underline">SEGUIR</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>

