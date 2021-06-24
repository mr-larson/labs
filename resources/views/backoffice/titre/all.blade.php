@extends('layouts.appFront')

@section('content')
    <x-app-layout>
        <section class="py-12">
            <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg">Section titre</h2>
            <div class="container">
                @foreach ($titres as $titre)
                    <div class="col col-sm-3 my-4">
                        <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                            <h2 class="text-green-300 text-opacity-80">{{ $titre->h2 }}</h2>
                            <p class="text-green-300 text-opacity-80">{{ $titre->p1 }}</p>
                            <p class="text-green-300 text-opacity-80">{{ $titre->p2 }}</p>
                            <div class="buttons flex justify-center">
                                @can('update', $titre)
                                    <a href="{{route('titre.edit',$titre->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                                @endcan
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </x-app-layout>
@endsection