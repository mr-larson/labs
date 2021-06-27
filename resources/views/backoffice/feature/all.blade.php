@extends('layouts.appFront')

@section('content')
    <x-app-layout>
        <section class="py-12">
            <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg overlay2 bg-green-300 text-purple-800">Section Feature</h2>
            <div class="container">
                @foreach ($features as $feature)
                    <div class="col col-sm-4 my-4">
                        <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-800">
                            <div class="text-center">
                                <h2 class="text-white text-opacity-80">{{ $feature->h2 }}</h2>
                                <p class="text-green-300 text-opacity-80 text-center">{{ $feature->p }}</p>
                                <div class="icon">
                                    <i class="{{ $feature->i }} font-bold text-white"></i>
                                </div>
                                <div class="buttons flex justify-center">
                                    @can('update', $feature)
                                        <a href="{{route('feature.edit',$feature->id) }}" class="bg-gradient-to-r from-green-400 to-purple-500 hover:text-purple-300 text-white py-1 px-4 rounded-lg m-2 w-auto text-center">Edit</a>
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