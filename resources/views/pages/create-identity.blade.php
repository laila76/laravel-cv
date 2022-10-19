<x-layouts.layout title="create-identité">
    <div class="text-center text-4xl text-red-800 font-black my-10">

        <h1>Gestion de l'identité</h1>
    </div>
    <div class=" p-6 shadow-md mx-56">
        <form action="{{route('identities.store') }}" method="POST" enctype="multipart/from-data">
            @csrf
            
            {{-- url_img --}}
            <input class="" type="file" name="url_img" id="">
             {{-- first name --}}
            <div class=" mt-5">
            <label  class=" block pb-2 font_bold"  for="">Prenom</label>
            <input  type="text" name="first_name" class="w-72">
            <x-error-msg name="first_name"/>
            </div>
            {{-- last name --}}
            <div class=" mt-5">
            <label   class=" block pb-2 font_bold"  for="">Nom</label>
            <input  type="text" name="last_name" class="w-72">
             <x-error-msg name="last_name"/>
            </div>
          
            {{-- job --}}
            <div class=" mt-5">
                 <label  class=" block pb-2 font_bold"  for="">Job</label>
            <input  type="text" name="job" class="w-72">
            <x-error-msg name="job"/>
            </div>
           
            {{--  description--}}
            <div class=" mt-5">
                <label  class=" block  pb-2 font_bold" name="description" for="">Description</label>
                <textarea  type="text" name="description" class="w-72 h-72"></textarea>
                <x-error-msg name="description"/>

            </div>
            {{-- tel --}}
            <div class=" mt-5">
                <label   class="block pb-2 font_bold" name="tel" for="">Tel</label>
                <input  type="text" name="tel" class="w-72">
                <x-error-msg name="tel"/>
            </div>
            {{--  e_mail--}}
            <div class="mt-5">
                <label   class="block pb-2 font_bold"  for="">E_mail</label>
                <input  type="email" name=" e_mail" class="w-72">
                <x-error-msg name="e_mail"/>

            </div>
            {{-- street --}}
            <div class="mt-5">
                <label   class="block pb-2 font_bold" for="">Street</label>
                <input  type="text" name=" street" class="w-72">
                <x-error-msg name="street"/>

            </div>
            {{-- cp_city --}}
            <div class="mt-5">
                <label   class="block pb-2 font_bold"  for="">Code Postale</label>
                <input  type="text" name=" cp_city" class="w-72">
                <x-error-msg name="cp_city"/>
            </div>
            <button class="btn btn-primary mt-5" type="submit">Envoyer</button>
           


            </div>
          
        </form>
    </div>



</x-layouts.layout>
