<div>
    <section>
        <form wire:submit.prevent="create" method="POST" x-data="{ tweet: '', errorMessage: 'Máximo 250 caracteres' }">
            <div class="mt-3">
                <p class="mt-5 text-xs"><span
                    x-bind:class="tweet.length > 250 ? 'text-red-500' : 'text-green-500'" x-text="tweet.length + ' /250 caracteres'">
                    </span></p>
                <textarea  type="text" x-model="tweet" x-bind:class="tweet.length > 250 ? 'border-red-500 text-red-500' : 'border-green-500'" class="text-gray-600 p-3 resize-none border w-full h-28 rounded-lg focus:border-blue-500 focus:bg-transparent focus:ring-0 focus:ring-blue-200 outline-none" id="tweet" name="tweet" placeholder="Escreva o seu tweet" wire:model="tweet"
                ></textarea>
            </div>
            <p
                x-bind:class="tweet.length > 250 ? 'text-red-500' : 'text-green-500'" x-show="tweet.length > 250"
                x-text="errorMessage">
            </p>
            @error('tweet')<p class="text-red-500">Tweet obrigatório!</p> @enderror
            <span class="flex justify-center">
                <button  class="mx-auto my-2 bg-blue-500 hover:opacity-90 text-white px-52 py-3 rounded-full">Tweet</button>
            </span>
        </form>
    </section>
    <section>
        @foreach ($tweets as $comment)
        <div class="p-8">
            <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
              <div class="flex">
                <div>
                  <div class="w-10 h-10 bg-cover bg-center rounded-full mr-3 shadow-inner" style="background-image: url('')">
                    <div class="w-10 h-10 rounded-full bg-gray-800"></div>
                  </div>
                </div>
                <div>
                  <p class="text-gray-600 font-medium">{{ $comment->user->name }}</p>
                  <div class="flex items-center text-xs text-gray-600">
                    <p>{{ $comment->created_at->diffForHumans() }}</p>
                  </div>
                </div>
              </div>
              <div class="mt-4">
                <p class="text-gray-500 text-lg">
                    {{ $comment->tweet }}
                </p>
              </div>
              <div class="mt-6 flex">
                <div class="flex items-center hover:opacity-75 mr-4">
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
                            <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </button>
                    @endif
                </div>
                <div class="flex items-center hover:opacity-75">
                  <p class="mt-1 text-blue-500">{{  $comment->likesCount->count() }}  Likes</p>
                </div>
              </div>
            </div>
          </div>
        @endforeach
    </section>
</div>
