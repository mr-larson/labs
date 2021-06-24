@extends('layouts.appFront')

@section('content')
    <x-app-layout>
        <section class="py-12">
            <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg overlay2 bg-green-300">Section nav</h2>
            <div class="container">
                @foreach ($navs as $nav)
                <div class="col col-sm-4 my-4">
                    <div class="rounded overflow-hidden shadow-lg p-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-600 hover:bg-purple-800">
                        <div class="">
                            <h3 class="text-white">nav</h3>
                        </div>
                            <h2 class="text-green-300 text-opacity-80">{{ $nav->li }}</h2>
                            <div class="buttons flex justify-center">
                                @can('update', $nav)
                                    <a href="{{route('nav.edit',$nav->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                                @endcan
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </x-app-layout>
@endsection