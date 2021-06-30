@extends('layouts.appFront')

@section('content')
    <x-app-layout>
        <section class="py-12">
            <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-bold rounded-lg shadow-lg overlay2 bg-green-300 text-purple-800">Section titre</h2>
            <div class="container">
                @foreach ($titres as $titre)
                    <div class="col col-sm-3 my-4">
                        <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-800 m-6 h-72">
                            <h2 class="text-white text-opacity-80">{{ $titre->h2 }}</h2>
                            <p class="text-green-300 text-opacity-80 text-center">{{ substr($titre->p1, 0, 25) }}...</p>
                            <p class="text-green-300 text-opacity-80 text-center">{{ substr($titre->p2, 0, 25) }}...</p>
                            <div class="buttons flex justify-center">
                                @can('update', $titre)
                                    <a href="{{route('titre.edit',$titre->id) }}" class="hover:text-purple-300 bg-gradient-to-r from-green-400 to-purple-500 text-white py-1 px-4 rounded-lg m-2 w-auto text-center">Edit</a>
                                @endcan
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </x-app-layout>
@endsection