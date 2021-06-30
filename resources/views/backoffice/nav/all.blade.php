@extends('layouts.appFront')

@section('content')
    <x-app-layout>
        <section class="py-12">
            <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-bold rounded-lg shadow-lg overlay2 bg-green-300 text-purple-800">Section nav</h2>
            <div class="container">
                @foreach ($navs as $nav)
                <div class="col col-sm-6 my-4">
                    <div class="rounded overflow-hidden shadow-lg p-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-800 m-6">
                        <div class="text-center">
                            <h2 class="text-white text-bold 4xl">{{ $nav->li }}</h2>
                            <div class="buttons flex justify-center">
                                @can('update', $nav)
                                    <a href="{{route('nav.edit',$nav->id) }}" class="bg-gradient-to-r from-green-400 to-purple-500 hover:text-purple-300 text-white py-1 px-4 rounded-lg m-2 w-auto text-center">Edit</a>
                                @endcan
                            </div>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </x-app-layout>
@endsection