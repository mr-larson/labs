@extends('layouts.appFront')

@section('content')
    <x-app-layout>
        <section class="py-12">
            <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg overlay2 bg-green-300 text-purple-800">Section link</h2>
            <div class="container">
                <div class="col-sm-offset-3 col-sm-6">
                    <div class="rounded overflow-hidden shadow-xl py-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-800 m-6">
                        <div class="">
                            <h3 class="text-white">Affichage du texte des boutons qui renvoient vers contact</h3>
                        </div>
                        <p class="text-green-300 text-opacity-80">{{ $link->a }}</p>
                        <div class="buttons flex justify-center">
                            @can('update', $link)
                                <a href="{{route('link.edit',$link->id) }}" class="bg-gradient-to-r from-green-400 to-purple-500 hover:text-purple-300 text-white py-1 px-4 rounded-lg m-2 w-auto text-center">Edit</a>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-app-layout>
@endsection