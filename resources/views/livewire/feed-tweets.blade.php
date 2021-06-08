<div>
    <section>
        <form wire:submit.prevent="create" method="POST">
            <div class="form-group">
                <input  type="text"
                        class="form-control" id="tweet"
                        name="tweet" placeholder="Escreva o seu tweet"
                        wire:model="tweet"
                >
            </div>
            @error('tweet')<p class="text-red-500">Tweet obrigatório!</p> @enderror
            <button type="submit" class="mx-4 my-2 bg-blue-500 text-white">Tweet</button>
        </form>
    </section>

    <section >
        @foreach ($tweets as $comment)
                <div class="my-5 border-b">
                    {{ $comment->user->name }}-{{ $comment->tweet }}
                    <hr>
                    {{-- created_at->diffForHumans() --}}
                    <div  class="">
                        <div class="bg-green-500 py-2 px-2 w-10 h-10 rounded-full">{{  $comment->likesCount->count() }} </div>
                        @if ($comment->likes->count() )
                            <button class="" href="" wire:click.prevent="deslike({{$comment->id}})">
                                <svg class="text-center h-7 w-6" fill="#E1435F" stroke-linecap="round" stroke-linejoin="round"  viewBox="0 0 24 24">
                                    <path
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </button>
                        @else
                            <button class="" href="" wire:click.prevent="like({{$comment->id}})">
                                <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"         stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </button>
                        @endif
                    </div>
                </div>
        @endforeach
    </section>
</div>
