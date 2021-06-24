@extends('layouts.appFront')

@section('content')
    <x-app-layout>
        <section class="py-12">
            <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg overlay2 bg-green-300">Section adresse</h2>
            <div class="container">
                <div class="col-sm-offset-3 col-sm-6">
                    <div class="rounded overflow-hidden shadow-md py-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-600 hover:bg-purple-800">
                        <div class="">
                            <h3 class="text-white">adresse</h3>
                        </div>
                        <p class="text-green-300 text-opacity-80">{{ $adresse->rue }}</p>
                        <p class="text-green-300 text-opacity-80">{{ $adresse->num }}</p>
                        <p class="text-green-300 text-opacity-80">{{ $adresse->ville }}</p>
                        <p class="text-green-300 text-opacity-80">{{ $adresse->code }}</p>
                        <p class="text-green-300 text-opacity-80">{{ $adresse->phone }}</p>
                        <p class="text-green-300 text-opacity-80">{{ $adresse->email }}</p>
                        <div class="buttons flex justify-center">
                            @can('update', $adresse)
                                <a href="{{route('adresse.edit',$adresse->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-app-layout>
@endsection