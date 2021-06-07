<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <div class="flex flex-col justify-center">
                <x-jet-authentication-card-logo />
                <div class="flex flex-row my-3 ">ENTRAR NO TWITTER</div>
            </div>
        </x-slot>


        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <x-jet-input id="email" class="block mt-1 w-full px-2 py-5 border" type="email" name="email" placeholder="E-mail" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-input id="password" class="block mt-1 w-full px-2 py-5 border" type="password" name="password" placeholder="Senha" required autocomplete="current-password" />
            </div>
            <x-jet-button class=" justify-center ml-4 my-3">
                {{ __('Log in') }}
            </x-jet-button>


            <div class="flex fllex-row justify-between">
                <div class="flex items-center mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-base text-red-600 hover:text-red-900" href="{{ route('password.request') }}">
                            Esqueceu a sua senha?
                        </a>
                    @endif
                </div>
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('register'))
                        <a class="underline text-base text-red-600 hover:text-blue-900" href="{{ route('register') }}">
                            Insacreva-se no Twitter
                        </a>
                    @endif
                </div>
            </div>

        </form>
    </x-jet-authentication-card>
</x-guest-layout>
