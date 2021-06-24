@extends('layouts.appFront')

@section('content')
    <x-app-layout>
        <section class="py-12">
            <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg">Section Feature</h2>
            <div class="container">
                @foreach ($features as $feature)
                    <div class="col col-sm-4 my-4">
                        <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                            <div class="">
                                <h3 class="text-white">feature</h3>
                            </div>
                            <h2 class="text-green-300 text-opacity-80">{{ $feature->h2 }}</h2>
                            <p class="text-green-300 text-opacity-80 text-center">{{ $feature->p }}</p>
                            <p class="text-green-300 text-opacity-80">{{ $feature->i }}</p>
                            <div class="buttons flex justify-center">
                                @can('update', $feature)
                                    <a href="{{route('feature.edit',$feature->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                                @endcan
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </x-app-layout>
@endsection