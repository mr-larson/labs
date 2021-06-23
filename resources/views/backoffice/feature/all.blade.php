@extends('layouts.appFront')

@section('content')
    <x-app-layout>
        @foreach ($features as $feature)
            <section class="py-12">
                <div class="container">
                    <div class="col-sm-offset-3 col-sm-6">
                        <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                            <div class="">
                                <h3 class="text-white">feature</h3>
                            </div>
                            <p class="text-green-300 text-opacity-80">{{ $feature->h2 }}</p>
                            <p class="text-green-300 text-opacity-80">{{ $feature->p }}</p>
                            <p class="text-green-300 text-opacity-80">{{ $feature->i }}</p>
                            <div class="buttons flex justify-center">
                                @can('update', $feature)
                                    <a href="{{route('feature.edit',$feature->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </x-app-layout>
@endsection