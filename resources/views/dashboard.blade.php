
<x-layouts.layout title="Dashboard">
    <nav class=" bg-black  text-3xl text-white flex justify-between p-5 ">
        <p>Dashboard</p>
        <div class="flex space-x-5 text-white font-bold text-xl">
            <p> {{ Auth::user()->name }}</p>
           <a href="/" class="">Deconnexion</a>
          
        </div>
    </nav>
		<div class="px-20 py-12">
				<h1 class="text-xl">Bienvenue  {{ Auth::user()->name }}</h1>
				<div class="py-8">
					
					
						<a class="block" href="{{ route('identities.create') }}">Gestion de l'identité</a>
						 <a href=""></a>
						
				</div>
		</div>
</x-layouts.layout>
