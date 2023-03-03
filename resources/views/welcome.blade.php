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
<div class="bg-white h-screen w-full">
<div>
  <p class="text-2xl static pt-4 pl-4 pb-3 text-center text-black">Bem Vindo á ElectroHouse<p>
</div>

<p class="text-xl static pt-4 pl-4 text-black">Eletrodomésticos recondicionados<p>

  <div class=" border-3 ml-2 mr-2 h-1 rounded bg-black">
  <br>
  <div class="p-4 mb-4 pr-20 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-200 dark:text-blue-400">
  
  <img src="https://www.lg.com/pt/images/frigorificos/md07534996/gallery/D-01.jpg" jsaction="load:XAeZkd;" jsname="HiaYvf" class="n3VNCb pT0Scc KAlRDb" alt="Frigorífico Americano | LG Portugal" data-noaft="1" style="width: 450.3014px; height: 400px; margin: 14.9px 0px;">
  <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 ali">Comprar</button>
  <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 ali">Reservar</button>
</div>
<div div class="p-4 mb-4 pr-20 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-200 dark:text-blue-400">
<img src="https://www.lg.com/pt/images/frigorificos/md07504043/gallery/medium01.jpg" jsaction="load:XAeZkd;" jsname="HiaYvf" class="n3VNCb pT0Scc KAlRDb" alt="LG Frigorífico 2 Portas | LG Portugal" data-noaft="1" style="width: 450.699px; height: 402px; margin: 14.9px 0px;">
<button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 ali">Comprar</button>
<button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 ali">Reservar</button>
 </div> 

</div>

</div>

</div>

 
</x-app-layout>
