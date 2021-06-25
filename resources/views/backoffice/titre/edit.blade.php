@extends('layouts.appFront')

@section('content')
    
    <!--Section titres-->
    <x-app-layout>
        <section class="services">
            <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg overlay2 bg-green-300 text-purple-800">Section titre</h2>
            @if ($errors->any())
                <ul class="bg-red-200 text-red-800 text-center py-3 mx-10 mb-6 text-xl font-light rounded-lg shadow-lg">

                    @foreach ($errors->all() as $message)
                        <li class="text-white">{{ $message }}</li>
                    @endforeach
            
                </ul>
            @endif
            <!--Edit Card-->
            <form method="POST" class="grid grid-cols-1 overlay2 bg-purple-800 rounded shadow-lg mx-auto p-3 w-3/5 mb-4" action="{{ route('titre.update', $titre->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="my-4 col-span-2">
                        <label class="text-white text-base">Titre</label>
                        <p class="text-white opacity-80 font-light py-3">* Pour mettre une partie du titre en vert, il suffit de mettre des parenthèse ex:(The labs) *</p>
                        <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $titre->h2 }}" name="h2">
                    </div>
                    <div class="my-4  col-span-2">
                        <label class="text-white text-base">Texte d'accompagnement</label>
                        <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $titre->p1 }}" name="p1">
                    </div>
                    <div class="my-4  col-span-2">
                        <label class="text-white text-base">Texte d'accompagnement</label>
                        <input type="text" class="px-3 py-1 w-full rounded-md" value="{{ $titre->p2 }}" name="p2">
                    </div>
                    <button type="submit" class="bg-gradient-to-r from-green-400 to-purple-500 text-white font-bold py-2 px-4  mx-auto my-8 rounded hover:text-purple-300">Submit</button>
            </form>
        </section>
    </x-app-layout>
@endsection