<div class="flex flex-row justify-between my-3 bg-white rounded p-2">
    
    <div class="flex flex-row">
        <span class="">
            <div>
                <div class="w-10 h-10 rounded-full bg-gray-800"></div>
                {{-- <img class="block h-6  rounded-full sm:mx-0 sm:flex-shrink-0" src="{{ Storage::disk('s3')->url('' . $course->producer->image) }}" alt="{{ $course->producer->name }}"> --}}
            </div>
        </span>
        <span>
            <p class="ml-1 text-base text-center mt-2 text-gray-500 mb-1">
                {{ $user->name }}
            </p>
        </span>
    </div>
    <span>
        @if($user->following->count() == 0)
            <p class="ml-3 py-1 px-4 bg-blue-500 text-xs text-center mt-2 text-white rounded mb-1 hover:underline" wire:click.prevent="followed()">
                SEGUIR
            </p>   
        @else
            <p class="ml-3 py-1 px-4 bg-blue-300 text-xs text-center mt-2 text-white rounded mb-1 hover:underline" wire:click.prevent="unfollow()">
                Deixar de Seguir
            </p>
        @endif
    </span>           
</div>
