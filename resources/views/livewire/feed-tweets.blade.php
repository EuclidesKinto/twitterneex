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
            @error('tweet')<p class="text-red-500">O Comentário é obrigatório!</p> @enderror
            <button type="submit" class="mx-4 my-2 bg-blue-500 text-white">Tweet</button>
        </form>
    </section>

    <section>
        @foreach ($tweets as $tweet)
        {{ $tweet->tweet }}
        @endforeach
    </section>
</div>
