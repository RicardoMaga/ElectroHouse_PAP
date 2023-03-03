<x-guest-layout>
<x-app-layout>

<div class="bg-gradient-to-r from-green-700 to-lime-500  w-full h-19">

    <a href="/" class="text-3xl pt-7 pr-7 pl-7 pb-4 hover:bg-gray-800  text-white">ElectroHouse</a>
  @if(Auth::User())
    <button class="pt-4 pr-2 pl-2 pb-4 text-lg text-white rounded-none hover:bg-gray-800 "><a href="/produtos">Produtos</a></button>
    @endif
    <button class="pt-4 pr-2 pl-2 pb-4 text-lg  text-white rounded-none hover:bg-gray-800 "><a href="/comprar">Comprar</a></button>
 
    <button class="pt-4 pr-2 pl-2 pb-4 text-lg  text-white rounded-none hover:bg-gray-800 "><a href="/reservas">Reservas</a></button>

    <button class="pt-4 pr-2 pl-2 pb-4 text-lg  text-white rounded-none hover:bg-gray-800 "><a href="/contacto">Contacto</button>

    
<a class="pr-10 pl-10">
  <input  type="text" class=" pl-3 py-2 px-1 w-1/3 rounded shadow font-thin focus:outline-none focus:shadow-lg
   focus:shadow-slate-200 duration-100 shadow-gray-100" placeholder="Pesquisar...">
</a>
@if(!Auth::User())
  <button class=" pt-4 pr-4 pl-5 pb-4 text-lg text-white rounded-none absolute right-0 top-0 hover:bg-gray-800 " ><a href="/login">Iniciar Sessão</a></button>
    @else

    <button class=" pt-4 pr-4 pl-5 pb-4 text-lg text-white rounded-none absolute right-0 top-0 hover:bg-gray-800 " ><a href="/logout">Encerrar Sessão</a></button>

    @endif


    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Continuar Autenticado') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 mr-4" href="{{route('register')}}">
            {{__('Registe-se')}}
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Esqueceu-se da Password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Entrar') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
</x-app-layout>