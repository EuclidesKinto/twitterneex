<div class="flex flex-row justify-between my-3 bg-white rounded p-2">
    <div class="flex flex-row">
        <span class="">
            <div>
                <div class="w-10 h-10 rounded-full bg-gray-800"></div>
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
            <p class="ml-3 py-1 px-4 border-blue-500 border-2 text-xs text-center mt-2 text-blue-500 rounded-full mb-1 hover:bg-blue-100 cursor-pointer" wire:click.prevent="followed()">
                Seguir
            </p>
        @else
            <p class="ml-3 rounded-full py-1 px-4 bg-blue-500 text-xs text-center mt-2 text-white mb-1 hover:underline cursor-pointer font-bold" wire:click.prevent="unfollow()">
                Seguindo
            </p>
        @endif
    </span>
</div>
