<div>


    <nav class="bg-gradient-to-r from-green-700 to-lime-500 h-15 flex">
        <a href="/" class="text-3xl pt-3 pr-7 pl-7 pb-3 hover:bg-gray-800 text-white">ElectroHouse</a>
    </nav>

    <div class=" text-2xl text-center">
        Produtos
    </div>
    <br>
    
                <div class=" flex justify-center">
                    <button
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4
                         focus:ring-green-300 font-medium rounded-lg text-lg px-5 py-2.5 mr-2 mb-2"wire:click="createShowModal">Adicionar produto</button>
                </div>
           

            <br>
        

        
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Id</th>
                        <th scope="col" class="px-6 py-3">Categoria</th>
                        <th scope="col" class="px-6 py-3">Marca</th>
                        <th scope="col" class="px-6 py-3">Modelo</th>
                        <th scope="col" class="px-6 py-3">Dimensoes</th>
                        <th scope="col" class="px-6 py-3">Preço</th>
                        <th scope="col" class="px-6 py-3">Uso</th>
                        <th scope="col" class="px-6 py-3">Imagem</th>
                        <th scope="col" class="px-6 py-3">Ação</th>

                        <div class="flex-grow ">
            <form>
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg%22%3E">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="search" id="default-search" wire:model="search"
                        class="block w-full p-4 pl-10  text-smbg-white border-b dark:bg-gray-800
                        dark:border-gray-700 dark:text-white"
                        placeholder="Search Mockups, Logos..." required>
                </div>
            </form>

        </div>

                    </tr>

                </thead>

                <tbody>
                    @foreach ($data as $item)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                {{ $item->id }}</th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                {{ $item->categoria }}</th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                {{ $item->marca }}</th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                {{ $item->modelo }}</th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                {{ $item->dimensoes }}</th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                {{ $item->preco }}</th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-white whitespace-nowrap">
                                {{ $item->uso }}</th>
                                 <th scope="row"
                                class="px-6 py-4 whitespace-nowrap font-medium text-blue-600 hover:underline">
                                <button type="button">
                                Visualizar</button></th>
                            <th scope="row"
                                class="px-6 py-4 whitespace-nowrap font-medium text-blue-600 hover:underline">
                                <button type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
                                     font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 
                                     focus:outline-none" wire:click="updateShowModal({{ $item->id }})">Editar</button>
                                <button type="button"
                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4
                                     focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2
                                     " wire:click="deleteShowModal({{ $item->id }})">Apagar</button>
                               
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
   




{{-- Modal Form --}}
    <x-dialog-modal wire:model="modalFormVisible">
     @if ($modelId)
        <x-slot name="title">
            {{ __('Editar') }}
        </x-slot>
    @else
    <x-slot name="title">
            {{ __('Criar') }}
        </x-slot>
    @endif
        <x-slot name="content">

            <div class="mt-4">
                <x-label for="categoria" value="{{ __('Categoria') }}"></x-label>
                <x-input wire:model="categoria" id="" class="block mt-1 w-full" type="text"></x-jet-input>
                @error('categoria') <span class="error">{{ $message }}</span> @enderror
            </div>      

            <div class="mt-4">
                <x-label for="marca" value="{{ __('Marca') }}"></x-jet-label>
                <x-input wire:model="marca" id="" class="block mt-1 w-full" type="text" ></x-jet-input>
                @error('marca') <span class="error">{{ $message }}</span> @enderror
            </div>  

            <div class="mt-4">
                <x-label for="modelo" value="{{ __('Modelo') }}" ></x-jet-label>
                <x-input wire:model="modelo" id="" class="block mt-1 w-full" type="text" ></x-jet-input>
                @error('modelo') <span class="error">{{ $message }}</span> @enderror
            </div>  

            <div class="mt-4">
                <x-label for="dimensoes" value="{{ __('Dimensoes') }}" ></x-jet-label>
                <x-input wire:model="dimensoes" id="" class="block mt-1 w-full" type="text" ></x-jet-input>
                @error('dimensoes') <span class="error">{{ $message }}</span> @enderror
            </div>  

            <div class="mt-4">
                <x-label for="preco" value="{{ __('Preco') }}" ></x-jet-label>
                <x-input wire:model="preco" id="" class="block mt-1 w-full" type="text" ></x-jet-input>
                @error('preco') <span class="error">{{ $message }}</span> @enderror
            </div>       

            <div class="mt-4">
                <x-label for="uso" value="{{ __('Uso') }}"></x-jet-label>
                <x-input wire:model="uso" id="" class="block mt-1 w-full" type="text" ></x-jet-input>
                @error('uso') <span class="error">{{ $message }}</span> @enderror
            </div>  
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
                {{ __('Não') }}
            </x-secondary-button>

            @if ($modelId)
                <x-button class="ml-2" wire:click="update" wire:loading.attr="disabled">
                    {{ __('Editar') }}
                </x-danger-button>
            @else
                <x-button class="ml-2" wire:click="create" wire:loading.attr="disabled">
                    {{ __('Criar') }}
                </x-danger-button>
            @endif            
        </x-slot>
    </x-dialog-modal>

    {{-- The Delete Modal --}}
    <x-dialog-modal wire:model="modalConfirmDeleteVisible">
        <x-slot name="title">
            {{ __('Eliminar') }}
        </x-slot>

        <x-slot name="content">
            {{ __('Deseja mesmo eliminar o registo?') }}
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('modalConfirmDeleteVisible')" wire:loading.attr="disabled">
                {{ __('Não') }}
            </x-secondary-button>

            <x-danger-button class="ml-2" wire:click="delete" wire:loading.attr="disabled">
                {{ __('Com certeza!!') }}
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>
</div>
