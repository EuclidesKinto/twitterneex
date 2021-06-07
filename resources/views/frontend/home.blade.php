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
            <div class="col-span-3">
                <div class="bg-gray-200 rounded-full p-3 mx-3 mt-2">
                    <span class="text-gray-600 text-sm">Buscar no twitter</span>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-12 mx-10">
            {{-- left --}}
            <div class="col-span-3 ml-10">
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
            <div class="col-span-6 border-r ml-10">
                @livewire('feed-tweets')
            </div>
            {{-- rigth --}}
            <div class="col-span-3 border-r ml-10"></div>
        </div>
</x-app-layout>

